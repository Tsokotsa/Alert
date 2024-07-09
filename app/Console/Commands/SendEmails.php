<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class SendEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'SendEmails:run';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send Scheduled emails';

    /**
     * Execute the console command.
     */
    public function handle()
    {
       // $this->info('Tsokotsa Command executed successfully');

    Log::info('This is the thing from Tsokotsa ....');

    }
}
