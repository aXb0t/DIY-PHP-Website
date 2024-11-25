<?php

require_once 'vendor/autoload.php';

$template_dir = 'templates';

$loader = new \Twig\Loader\FilesystemLoader([$template_dir]);

$twig = new \Twig\Environment($loader, [
    'debug' => true,
]);

$twig->addExtension(new \Twig\Extension\DebugExtension());

