<?php
/**
* bootstrap.php will set up some things such as including our autoloader and loading variables from our .env file.
* We'll include that one a lot.
 */

require __DIR__ . "/vendor/autoload.php";

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
telegram()->addCommands([
    MatrixToken\MatrixTelegramBot\Commands\HelloCommand::class,
    MatrixToken\MatrixTelegramBot\Commands\Coinsbit\CurrentPriceCommand::class,
    MatrixToken\MatrixTelegramBot\Commands\Others\WordDetector::class,
]);