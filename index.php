<?php
require '_init.php';

$news = load_json('news');
$news_main = array();
$news_ch = array();
foreach ($news as $id => $x) {
    if (isset($x['section']) && $x['section'] === 'child') {
        $news_ch[$id] = $x;
    }
    else if(isset($x['img'])) {
        $news_main[$id] = $x;
    }
}

$teams = load_json('teams');
$games = load_json('games');
$games_visible = array();
foreach ($games as $id => $x) {
    $team_home = $teams[$x['team_home']];
    $team_away = $teams[$x['team_away']];
    if (!isset($team_home['hidden']) || !isset($team_away['hidden'])) {
        $games_visible[$id] = $x;
    }
}

echo $twig->render('index.html', array(
    'news_main' => $news_main,
    'news_child' => $news_ch,
    'games' => $games_visible,
));
