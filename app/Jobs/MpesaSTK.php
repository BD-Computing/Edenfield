<?php

namespace App\Jobs;

use App\Models\Test;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;

class MpesaSTK implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */

    public $Response = null;

    public function __construct($Response)
    {
        $this->Response = $Response;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Test::create([
            'test' => 'Mpesa STK',
            'description' => $this->Response,
        ]);
    }
}
