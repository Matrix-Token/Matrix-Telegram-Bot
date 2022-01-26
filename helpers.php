<?php
/**
* helpers.php usually contains small utility functions that don't fit anywhere else.
 */

 /**
  * telegram()
  * This is purely for convenience. 
  * It allows us to grab an instance of the Telegram API wrapper
  * without constantly having to query the .env file again
  */
function telegram(): \Telegram\Bot\Api
{
    return new \Telegram\Bot\Api(
        env('TELEGRAM_BOT_TOKEN')
    );
}