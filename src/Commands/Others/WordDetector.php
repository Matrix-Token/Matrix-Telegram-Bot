<?php
namespace MatrixToken\MatrixTelegramBot\Commands\Others;

use Telegram\Bot\Commands\Command;

class WordDetector extends Command
{
    protected $name = "2";
    public function handle()
    {
        $msg = "رووووووق";
        $this->replyWithMessage([
            'text' => 
            $msg
            
        ]);
        
    }
}