<?php

namespace App\Listeners\OdooAPI\POS;

use Illuminate\Support\Facades\Log;
use App\Events\OdooAPI\GetOdooDataEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Http\Controllers\POS\ProductLineController;

class GetProductLineListener implements ShouldQueue
{
    /**
     * Handle the event.
     *
     * @param  GetOdooDataEvent  $event
     * @return void
     */
    public function handle(GetOdooDataEvent $event)
    {
        $productLineController = new ProductLineController;
        $response = $productLineController->update_db();
        Log::info($response);
    }
}
