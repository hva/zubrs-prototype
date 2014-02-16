<?php

class Bz_Twig_Extension extends Twig_Extension {

	public function getName() {
		return 'bz';
	}

	public function getGlobals() {
		$server = $_SERVER['SERVER_NAME'];
		$controller = substr($_SERVER['SCRIPT_NAME'], 1, -4);

		return array(
			'localhost' => $server === 'localhost',
			'topMenu' => array(
				array('url' => 'news.php', 'title' => 'новости', 'active' => ($controller === 'news')),
				array('url' => 'teams.php', 'title' => 'команды', 'active' => ($controller === 'teams')),
				array('url' => 'competitions.php', 'title' => 'соревнования', 'active' => ($controller === 'competitions')),
				array('url' => 'management.php', 'title' => 'руководство', 'active' => ($controller === 'management')),
				array('url' => 'history.php', 'title' => 'история', 'active' => ($controller === 'history')),

				),
			);
	}
}
