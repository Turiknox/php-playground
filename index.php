<?php
define('BP', __DIR__);
define('DS', DIRECTORY_SEPARATOR);

include __DIR__ . '/vendor/autoload.php';

$app = new Core\Model\App();
$app->run();
