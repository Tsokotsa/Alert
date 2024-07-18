<?php

namespace App\Http\Controllers;

use App\Helpers\Tsokotsa\generalHelpers;
use App\Models\Sms as SMS;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\TelegramController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

    public function test()
    {
        // Get all routes
        $routes = collect(Route::getRoutes())->map(function ($route) {
            return [
                'uri' => $route->uri(),
                'name' => $route->getName(),
                'action' => $route->getActionName(),
                'methods' => $route->methods(),
            ];
        });

        // Pass the routes to the view
        return view('test', compact('routes'));
    }

    /**
     * Sending Test email -- Test API
     */
    public function send_test(Request $request)
    {
        $GH = new generalHelpers();
        $campaign_type = $GH->get_campaign_typeID($this->campaign_type);
        $user = auth()->user();

        $data['to']             = $request['sms-test-number'];
        $data['subject']        = "Sms";
        $data['msg']            = $request['sms-test-text'];
        $data['campaign_type']  = $campaign_type;

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
