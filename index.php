<?php

namespace Diamond;

require __DIR__ . '/vendor/autoload.php';

use Diamond\Classes\DiamondCreator;
use Mustache_Engine;
use Mustache_Loader_FilesystemLoader;
use Dotenv;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$title = $_ENV['TITLE'];

if (isset($_POST['letter'])) {
    $diamond = new DiamondCreator();

    echo $diamond->buildDiamond($_POST['letter']);
}

$mustacheEngine = new Mustache_Engine([
    'entity_flags' => ENT_QUOTES,
    'loader' => new Mustache_Loader_FilesystemLoader(dirname(__FILE__) . '/templates'),
]);

echo $mustacheEngine->render('main', ['title' => $title]);
