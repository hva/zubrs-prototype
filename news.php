<?php
require '_init.php';

$news = load_json('news');

if (isset($_GET['id'])) {
    $item = $news[$_GET['id']];
    echo $twig->render('news_single.html', array('item' => $item));
} else {
    echo $twig->render('news_list.html', array('items' => $news));
}