<?php

$template = $twig->load('index.html');
// echo $template->render($vars);
$vars['current_page'] = 'goodbye';

echo $template->render($vars);
