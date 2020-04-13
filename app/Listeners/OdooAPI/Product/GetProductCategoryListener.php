<?php

namespace App\Listeners\OdooAPI\Product;

use Illuminate\Support\Facades\Log;
use App\Events\OdooAPI\GetOdooDataEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Http\Controllers\Product\ProductCategoryController;

class GetProductCategoryListener implements ShouldQueue
{
    /**
     * Handle the event.
     *
     * @param  GetOdooDataEvent  $event
     * @return void
     */
    public function handle(GetOdooDataEvent $event)
    {
        $productCategoryController = new ProductCategoryController;
        $response = $productCategoryController->update_db();
        Log::info($response);
    }
}
