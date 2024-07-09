<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class MyCustomJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public string $text;
    public function __construct($text)
    {
        $this->text = $text; 
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        DB::table('test')->insert([
            'text' => $this->text,
        ]);
        
    }
    
}
