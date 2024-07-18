<?php

namespace App\Http\Controllers;

use App\Helpers\Tsokotsa\generalHelpers;
use App\Mail\SendTestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    private $campaign_type = "E-mail";


    public function index()
    {
        return view('email.index');
    }

    // Teste Telegram API
    public function send_test_Email(Request $request)
    {
        $GH = new generalHelpers();
        $campaign_type = $GH->get_campaign_typeID($this->campaign_type);
        $user = auth()->user();

        $data['to']             = $request['compose_to'];
        $data['subject']        = $request['compose_subject'];
        $data['msg']            = $request['test-text'];
        $data['campaign_type']  = $campaign_type;
        
        Mail::to($data['to'])->queue(new SendTestMail($data));
        $ret = $GH->log_Msgs($data, $user);

        if ($ret) {
            return "OK";
        } else {
            return "Error Occured while sending test message ...";
        }
    }

    public function getSubscribers()
    {

        $GH = new generalHelpers();
        $campaign_id = $GH->get_campaign_typeID($this->campaign_type);
        $subscribers = DB::table('contacts')
            ->orwhereJsonContains('notify_on',"$campaign_id")
            ->get();

        Log::info("Finished getting all subscribers for this campign id " .$campaign_id ." Using Function: " .__FUNCTION__);

            return $subscribers;
    }
}
