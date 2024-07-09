<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DefaultController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function land()
    {
        $user = auth()->user();
        return view('land', ['user' => $user]);
    }

    public function create_Campaign(Request $request)
    {
        $user = auth()->user();

        switch ($request->all_contacts) {
            case 'on':
                $contacts = "All";
                break;
            
            default:
                $contacts = "Only Subscribed";
                break;
        };

        switch ($request->preview_msg) {
            case 'on':
                $preview = "y";
                break;
            
            default:
                $preview = "n";
                break;
        };

        $name = $request->project_name;
        $type_id = $request->type;
        $recipients = $contacts;
        $preview = $preview;
        $send_at = $request->scheduled_dt;
        $repeat = $request->repeat_interval;
        $doc = $request->campaign_doc;

        $campaign = DB::table('campaigns')->insert([
            'name' => $name,
            'type_id' => $type_id,
            'recipients' => $contacts,
            'preview_to_creator' => $preview,
            'send_at' => $send_at,
            'repeat_interval' => $repeat,
            'created_by' => $user->id,
            'created_at' => Carbon::now(),
        ]);

        return $campaign;

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
