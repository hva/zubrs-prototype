<?php
require '_init.php';

$item = array(
    'header' => '"Брестские зубры" успешно завершили сезон 2013г. Поздравляем!',
    'data' => 'news/1000.md',
    );

echo $twig->render('news.html', array('item' => $item));
