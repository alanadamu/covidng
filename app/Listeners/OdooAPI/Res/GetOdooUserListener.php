<?php

namespace App\Listeners\OdooAPI\Res;

use Illuminate\Support\Facades\Log;
use App\Events\OdooAPI\GetOdooDataEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Http\Controllers\Res\OdooUserController;

class GetOdooUserListener implements ShouldQueue
{
    /**
     * Handle the event.
     *
     * @param  GetOdooDataEvent  $event
     * @return void
     */
    public function handle(GetOdooDataEvent $event)
    {
        $odoo_userController = new OdooUserController;
        $response = $odoo_userController->update_db();
        Log::info($response);
    }
}
