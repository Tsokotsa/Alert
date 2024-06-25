<?php

namespace App\Helpers\Tsokotsa;

use Illuminate\Support\Facades\DB;

class generalHelpers
{
    public static function get_campaign_typeID($campaign_name)
    {
        $query = DB::table('campaigns_type')->where('type', $campaign_name)->select('id')->pluck('id');
        return $query[0];
    }
}
