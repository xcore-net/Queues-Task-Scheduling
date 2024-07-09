<?php

namespace App\Console\Commands;

use App\Jobs\MyCustomJob;
use App\Jobs\SendEmailJob;
use App\Mail\SpamEmail;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class TestJob extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:test-job';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        SendEmailJob::dispatch();
    }
}
