<?php
require '_init.php';

$current = isset($_GET['id']) ? $_GET['id'] : 1;
echo $twig->render('history.html', array('current' => $current));
