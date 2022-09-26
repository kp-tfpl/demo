<?php

namespace App\Jobs;

use App\Mail\SendTestMail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class SendEmailJob implements ShouldQueue
{
    use Dispatchable, Queueable;

    // The number of times the job may be attempted.
    public $tries = 2;

    // The number of seconds the job can run before timing out.
    // public $timeout = 1;

    // The maximum number of unhandled exceptions to allow before failing.
    // public $maxExceptions = 3;

    // Indicate if the job should be marked as failed on timeout.
    // public $failOnTimeout = true;

    // The number of seconds to wait before retrying the job.
    // public $backoff = 3;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {

        // try {
            Mail::to('abc@gmail.com')->send(new SendTestMail());
            return true;
        // } catch (\Throwable $th) {
        //     print_r($th);
        //     exit();
        // }
    }
}
