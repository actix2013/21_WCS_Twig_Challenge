<?php
require 'vendor/autoload.php';



$loader = new Twig\Loader\FilesystemLoader('src/View');
$twig = new Twig\Environment($loader);

echo $twig->render('hello.html.twig',array (
    'name' => "michel",
    'age' => "32"
));


echo $twig->render('base.html.twig',array (
    'name' => "rDaneel",

));
