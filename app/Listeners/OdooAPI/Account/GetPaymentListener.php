<?php

namespace App\Listeners\OdooAPI\Account;

use Illuminate\Support\Facades\Log;
use App\Events\OdooAPI\GetOdooDataEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Http\Controllers\Account\PaymentController;

class GetPaymentListener implements ShouldQueue
{
    /**
     * Handle the event.
     *
     * @param  GetOdooDataEvent  $event
     * @return void
     */
    public function handle(GetOdooDataEvent $event)
    {
        $paymentController = new PaymentController;
        $response = $paymentController->update_db();
        Log::info($response);
    }
}
