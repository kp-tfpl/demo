<?php

namespace App\Console\Commands;

use App\Mail\SendTestMail;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class TestCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'demo:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send mail per minit';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        Mail::to('testcron@gmail.com')->send(new SendTestMail());
    }
}
