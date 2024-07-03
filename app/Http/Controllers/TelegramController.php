<?php

namespace App\Http\Controllers;

use Telegram\Bot\Api;

class TelegramController extends Controller
{
    public function sendMessage()
    {
        $telegram = new Api(env('TELEGRAM_BOT_TOKEN'));
        $response = $telegram->sendMessage([
            'chat_id' => 'CHAT_ID',
            'text' => 'Hello, this is a test message!'
        ]);

        return $response;
    }

    public function sendMessageToUser($telegram_id, $tel_msg) 
    {
        $telegram = new Api(env('TELEGRAM_BOT_TOKEN'));
        $response = $telegram->sendMessage([
            'chat_id' => $telegram_id,
            'text' => $tel_msg
        ]);

        return $response;
    }
}
