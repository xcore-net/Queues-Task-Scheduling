<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class redirectJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    public $route;
    /**
     * Create a new job instance.
     */
    public function __construct($route)
    {
        $this->route = $route;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        DB::table('fff')->insert([
            'hhhhh' => 'sh'
        ]);
    }
}
