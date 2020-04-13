<?php

namespace App\Listeners\OdooAPI\POS;

use Illuminate\Support\Facades\Log;
use App\Events\OdooAPI\GetOdooDataEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Http\Controllers\POS\OrderController;

class GetOrderListener implements ShouldQueue
{
    /**
     * Handle the event.
     *
     * @param  GetOdooDataEvent  $event
     * @return void
     */
    public function handle(GetOdooDataEvent $event)
    {
        $orderController = new OrderController;
        $response = $orderController->update_db();
        Log::info($response);
    }
}
