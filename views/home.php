<?php

$template = $twig->load('index.html');
// echo $template->render($vars);
$vars['current_page'] = 'home';

echo $template->render($vars);
