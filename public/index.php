<?php

use Src\User;

require '../vendor/autoload.php';

$user = new User('Koen');
echo 'Welkom '. $user->name;

$loader = new \Twig\Loader\FilesystemLoader('../resources');
$twig = new \Twig\Environment($loader, [
    'cache' => '../storage/cache',
]);

$template = $twig->load('index.html.twig');
$template->display(['name' => 'koen']);
