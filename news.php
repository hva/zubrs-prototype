<?php
require '_init.php';

$news = load_json('news');
$ids = array_keys($news);
$id = isset($_GET['id']) ? $_GET['id'] : array_shift($ids);
$item = $news[$id];

echo $twig->render('news.html', array('item' => $item));
