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
    public function __construct()
    {
        $this->route = $route;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        redirectJob::dispatch($route);
    }
}
