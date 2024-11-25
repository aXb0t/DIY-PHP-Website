<?php

$template = $twig->load('index.html');
// echo $template->render($vars);
$vars['current_page'] = 'hello';

echo $template->render($vars);
