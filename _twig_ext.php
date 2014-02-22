<?php

function load_json($value) {
	$json = file_get_contents('data/' . $value . '.json');
	return json_decode($json, true);
}

function filter_markdown($value) {
	return Markdown($value);
}

class Bz_Twig_Extension extends Twig_Extension {

	public function getName() {
		return 'bz';
	}

	public function getGlobals() {
		return array(
			'localhost' => $_SERVER['SERVER_NAME'],
			'script' => substr($_SERVER['SCRIPT_NAME'], 1),
			);
	}

	public function getFilters()
	{
		return array(
			'markdown' => new Twig_Filter_Function('filter_markdown', array('is_safe' => array('html'))),
			);
	}

	public function getFunctions()
	{
		return array(
			'load' => new Twig_Function_Function('load_json'),
			);
	}
}
