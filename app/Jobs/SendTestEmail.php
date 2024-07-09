<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendTestMail;

class SendTestEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $email;
    /**
     * Create a new job instance.
     */
    public function __construct($to)
    {
        $this->email = $to;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Log::info('=====>       Started Sending test Email ....');
        Mail::to($this->email)->queue(new SendTestMail ($this->email));

        Log::info("=====>       Finished Sending Test email to user ....");
        
    }
}
