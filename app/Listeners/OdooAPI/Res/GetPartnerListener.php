<?php

namespace App\Listeners\OdooAPI\Res;

use Illuminate\Support\Facades\Log;
use App\Events\OdooAPI\GetOdooDataEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Http\Controllers\Res\PartnerController;

class GetPartnerListener
{
    /**
     * Handle the event.
     *
     * @param  GetOdooDataEvent  $event
     * @return void
     */
    public function handle(GetOdooDataEvent $event)
    {
        $partnerController = new PartnerController;
        $response = $partnerController->update_db();
        Log::info($response);
    }
}
