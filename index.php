<?php
require '_init.php';

$news = load_json('news');
$main = array();
$ch = array();
foreach ($news as $id => $x) {
    if (isset($x['section']) && $x['section'] === 'child') {
        $ch[$id] = $x;
    }
    else if(isset($x['img'])) {
        $main[$id] = $x;
    }
}

echo $twig->render('index.html', array(
    'news_main' => $main,
    'news_child' => $ch,
));
