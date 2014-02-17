<?php
require 'vendor/Twig/Autoloader.php';
require 'vendor/markdown.php';

Twig_Autoloader::register();

require '_twig_ext.php';

$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader);
$twig->addExtension(new Bz_Twig_Extension());
