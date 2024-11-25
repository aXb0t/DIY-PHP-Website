<?php

echo "Something has gone terribly wrong.";

$template = $twig->load('index.html');
// echo $template->render($vars);
$vars['current_page'] = 'oops';

echo $template->render($vars);
