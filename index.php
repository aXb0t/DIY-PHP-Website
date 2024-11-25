<?php

include 'template_eng.inc';

// list of pages (nav)
$pages = [
  '/' => 'Home',
  '/hello' => 'Hello',
  '/goodbye' => 'Goodbye'
];

print '<header>
<nav>
<ul>';
// echo link to each page
foreach ($pages as $url => $title) {
  echo "<li><a href=\"$url\">$title</a></li>";
}
print '</ul>
</nav>
</header>';

// require "router"
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

print '<footer>
<p>&copy; ' . date('Y') . ' DIY PHP Website. All rights reserved.</p>
</footer>';