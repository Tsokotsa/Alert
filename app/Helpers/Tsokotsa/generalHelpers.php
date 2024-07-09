<?php

namespace App\Helpers\Tsokotsa;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class generalHelpers
{
    public static function get_campaign_typeID($campaign_name)
    {
        $query = DB::table('campaigns_type')->where('type', $campaign_name)->select('id')->pluck('id');
        return $query[0];
    }

    public function log_Msgs($message, $user)
    {
        DB::table('sent_messages_logs')->insert([
            'type_id'       => $message['campaign_type'],
            'uid'           => $user->id,
            'sent_to'       => $message['to'],
            'subj'          => $message['subject'],
            'details'       => $message['msg'],
            'created_at'    => Carbon::now()
        ]);

    }

    // Get All High Sites 

    public function get_all_high_sites()
    {
        $sites = DB::table('high_sites')->get();

        return $sites;
    }

    // Get all Campaings that are Active

    public function get_all_Active_Campaigns()
    {
        $campaigns = DB::table('campaigns_type')->get();

        return $campaigns;
    }
}
