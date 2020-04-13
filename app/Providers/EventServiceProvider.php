<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Auth\Events\Registered;
use App\Events\OdooAPI\GetOdooDataEvent;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        GetOdooDataEvent::class => [
            \App\Listeners\OdooAPI\Res\GetCompanyListener::class,
            \App\Listeners\OdooAPI\Res\GetPartnerListener::class,
            \App\Listeners\OdooAPI\Res\GetOdooUserListener::class,
            \App\Listeners\OdooAPI\Product\GetMoveListener::class,
            \App\Listeners\OdooAPI\Product\GetProductListener::class,
            \App\Listeners\OdooAPI\Product\GetProductCategoryListener::class,
            \App\Listeners\OdooAPI\Product\GetTemplateListener::class,
            \App\Listeners\OdooAPI\Account\GetPaymentListener::class,
            \App\Listeners\OdooAPI\Account\GetPaymentMethodsListener::class,
            \App\Listeners\OdooAPI\POS\GetOrderListener::class,
            \App\Listeners\OdooAPI\POS\GetProductLineListener::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
