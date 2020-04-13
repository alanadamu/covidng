<?php

namespace App\Listeners\OdooAPI\Account;

use Illuminate\Support\Facades\Log;
use App\Events\OdooAPI\GetOdooDataEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Http\Controllers\Account\PaymentMethodController;

class GetPaymentMethodsListener implements ShouldQueue
{
    /**
     * Handle the event.
     *
     * @param  GetOdooDataEvent  $event
     * @return void
     */
    public function handle(GetOdooDataEvent $event)
    {
        $paymentMethodController = new PaymentMethodController;
        $response = $paymentMethodController->update_db();
        Log::info($response);
    }
}
