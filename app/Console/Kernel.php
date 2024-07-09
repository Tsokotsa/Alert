<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule; 
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class Kernel extends ConsoleKernel {
    
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
            //
    ];
    
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule) {
        // $schedule->command('inspire')->hourly();
        // $schedule->command('SendEmails:run')->everyMinute();
        $tasks = DB::table('command_scheduler')
                ->where('enabled', '=', 'y')
                ->get();
        // Go through each task to dynamically set them up.

        Log::info("Running Scheduler and Found " .count($tasks) ." Active Tasks.");

        foreach ($tasks as $task) {
            if ($task->at) {
                $at = $task->at;
            } else {
                $at = '';
            }
            $frequency = $task->frequency;
            $day = $task->day_of_week;

            switch ($task->type) {
                case 'minute':
                    $event = $schedule->command("'{$task->command_name}'")->$frequency();
                    Log::debug("Event Expression is $event->expression and Next Run of Event is ");
                    break;

                case 'daily':
                    $schedule->command("'{$task->command_name}'")->dailyAt($at);
                    break;

                case 'weekly':
                    $schedule->command("'{$task->command_name}'")->weekly()->$day()->at($at);
                    break;

                case 'monthly':
                    $event = $schedule->command("'{$task->command_name}'")->monthlyOn($task->day_of_month, $at);
                    Log::debug("Event Expression is $event->expression and Next Run of Event is ");
                    break;
            }
        }
    }
   /**
     * Register the commands for the application.
     *                                                                                                                                                                                                                            
     * @return void                                                                                                                                                                                                               
     */                                                                                                                                                                                                                           
    protected function commands() {                                                                                                                                                                                               
        $this->load(__DIR__ . '/Commands');                                                                                                                                                                                       
                                                                                                                                                                                                                                  
        require base_path('routes/console.php');                                                                                                                                                                                  
    }                                                                                                                                                                                                                             
                                                                                                                                                                                                                                  
}                                                                                                                                                                                                                                 
