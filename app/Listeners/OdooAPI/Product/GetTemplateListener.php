<?php

namespace App\Listeners\OdooAPI\Product;

use Illuminate\Support\Facades\Log;
use App\Events\OdooAPI\GetOdooDataEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Http\Controllers\Product\TemplateController;

class GetTemplateListener
{
    /**
     * Handle the event.
     *
     * @param  GetOdooDataEvent  $event
     * @return void
     */
    public function handle(GetOdooDataEvent $event)
    {
        $templateController = new TemplateController;
        $response = $templateController->update_db();
        Log::info($response);
    }
}
