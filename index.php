<?php

namespace Diamond;

require __DIR__ . '/vendor/autoload.php';

use Diamond\Classes\DiamondCreator;
use Mustache_Engine;
use Mustache_Loader_FilesystemLoader;

if (isset($_POST['letter'])) {
    $diamond = new DiamondCreator();

    echo $diamond->buildDiamond($_POST['letter']);
}

$mustacheEngine = new Mustache_Engine([
    'entity_flags' => ENT_QUOTES,
    'loader' => new Mustache_Loader_FilesystemLoader(dirname(__FILE__) . '/templates'),
]);

echo $mustacheEngine->render('main');
