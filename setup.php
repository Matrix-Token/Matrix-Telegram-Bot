<?php
/**
 * setup.php is a small file that helps us set up our connection with Telegram.
 */

 
require 'bootstrap.php';

telegram()->setWebhook(['url' => env('TELEGRAM_WEBHOOK')]);

echo "Setup the Telegram webhook!";