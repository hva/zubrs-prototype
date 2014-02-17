<?php
require '_init.php';

$globals = $twig->getGlobals();
$news = $globals['news'];
$ids = array_keys($news);
$id = isset($_GET['id']) ? $_GET['id'] : array_shift($ids);
$item = $news[$id];

echo $twig->render('news.html', array('item' => $item));
