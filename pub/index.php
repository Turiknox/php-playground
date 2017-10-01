<?php
define('BP', dirname(__DIR__));
define('DS', DIRECTORY_SEPARATOR);

include BP . '/vendor/autoload.php';

$app = new Core\Model\App();
$app->run();
