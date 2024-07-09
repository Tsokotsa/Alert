<?php

namespace App\Http\Controllers;

use App\Helpers\Tsokotsa\generalHelpers;
use App\Mail\SendTestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
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

        $ret = $this->sendTestEmail($data);
        
        $ret = $GH->log_Msgs($data, $user);
        
        if ($ret) {
            return "OK";
        } else {
            return "Error Occured while sending test message ...";
        }
    }

    public function sendTestEmail ($data)
    {
         Mail::to($data['to'])->queue(new SendTestMail($data));
        // Mail::to($data['to'])->queue(new \App\Mail\SendTestMail());
        // Mail::send([], [], function ($message) use ($data) {
        //     $message->to($data['to'])
        //             ->subject($data['subject'])
        //             ->html('<h1>Hello, ' . $data['to'] . '</h1><p>' . $data['msg'] . '</p>'); // Use html() for HTML content
        //         });
    
        // return 'Email sent successfully';
    }
}
