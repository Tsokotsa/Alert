<?php

namespace App\Http\Controllers;

use App\Helpers\Tsokotsa\generalHelpers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Telegram\Bot\Api;

class TelegramController extends Controller
{

    private $campaign_type = "Telegram";



    public function index()
    {
        return "ok";
    }

    // Teste Telegram API
    public function send_test(Request $request)
    {
        $GH = new generalHelpers();
        $campaign_type = $GH->get_campaign_typeID($this->campaign_type);
        $user = auth()->user();

        $data['to']             = $request['telegram-id'];
        $data['subject']        = "Telegram";
        $data['msg']            = $request['telegram-text'];
        $data['campaign_type']  = $campaign_type;

        $ret = $this->sendMessageToUser($data);

        $ret = $GH->log_Msgs($data, $user);

        return $ret;
        if ($ret) {
            return "OK";
        } else {
            return "Error Occured while sending test message ...";
        }
    }

    // public function getCampaignId()
    // {
    //     $campaign_id = DB::table('campaigns_type')->where('type', "$this->campaign_type")->get();
    //     return $campaign_id;
    // }

    public function sendMessage()
    {
        $telegram = new Api(env('TELEGRAM_BOT_TOKEN'));
        $response = $telegram->sendMessage([
            'chat_id' => 'CHAT_ID',
            'text' => 'Hello, this is a test message!'
        ]);

        return $response;
    }

    public function sendMessageToUser($data)
    {
        $telegram = new Api(env('TELEGRAM_BOT_TOKEN'));
        $response = $telegram->sendMessage([
            'chat_id' => $data['to'],
            'text' => $data['msg']
        ]);

        return $response;
    }

    public function getSubscribers()
    {

        $GH = new generalHelpers();
        $campaign_id = $GH->get_campaign_typeID($this->campaign_type);
        $subscribers = DB::table('contacts')
            ->orwhereJsonContains('notify_on',"$campaign_id")
            ->get();
            return $subscribers;
    }
}
