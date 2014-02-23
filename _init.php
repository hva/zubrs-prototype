<?php
setlocale(LC_ALL, 'ru_RU.UTF-8');
date_default_timezone_set('Europe/Minsk');

require 'vendor/Twig/Autoloader.php';
require 'vendor/markdown.php';

Twig_Autoloader::register();

require '_twig_ext.php';

$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, array("debug" => false));
// $twig->addExtension(new Twig_Extension_Debug());
$twig->addExtension(new Bz_Twig_Extension());
