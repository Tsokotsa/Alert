<?php

namespace App\Http\Controllers;

use App\Helpers\Tsokotsa\generalHelpers;
use App\Models\Sms as SMS;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\TelegramController;

class SmsController extends Controller
{
    private $campaign_type = "Sms";
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function send_test(Request $request)
    {
        $SMS_Helper = new SMS();
        $type = "Sms";
        $GH = new generalHelpers();
        $campaign_type = $GH->get_campaign_typeID($this->campaign_type);

        $to = $request['sms-test-number'];
        $content = $request['sms-test-text'];

        DB::table('sent_messages_logs')->insert([
            'type_id' => $campaign_type,
            'uid' => 0,
            'sent_to' => $to,
            'details' => $content,
        ]);

        return "OK";
    }

    public function send_test_Telegram(Request $request)
    {
        $telegram_Helper = new TelegramController();
        $to     = $request['telegram-id'];
        $msg    = $request['telegram-text'];

        $ret = $telegram_Helper->sendMessageToUser($to, $msg);
        return $ret;
        if ($ret) {
            return "OK";
        } else {
            return "Error Occured while sending test message ...";
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Sms $sms)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sms $sms)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sms $sms)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sms $sms)
    {
        //
    }
}
