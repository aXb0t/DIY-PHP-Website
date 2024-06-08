<?php

include 'template_eng.inc';

// list of pages
$pages = [
  '/' => 'Home',
  '/hello' => 'Hello',
  '/goodbye' => 'Goodbye'
];

// echo link to each page
foreach ($pages as $url => $title) {
  echo "<a href=\"$url\">$title</a><br>";
}

$template = $twig->load('index.html');

// get request
$request = $_SERVER['REQUEST_URI'];
$views_dir = '/views/';

switch ($request) {
  case '':
  case '/':
    require __DIR__ . $views_dir . 'home.php';
    break;
  case '/hello':
    require __DIR__ . $views_dir . 'hello.php';
    break;
  case '/goodbye':
    require __DIR__ . $views_dir . 'goodbye.php';
    break;
  default:
    require __DIR__ . $views_dir . 'oops.php';
}
