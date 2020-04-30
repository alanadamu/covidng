<?php

namespace App\Providers;

use App\Tag;
use App\Item;
use App\Role;
use App\User;
use App\Category;

use App\Models\Covid\Test;
use App\Models\Covid\Death;
use App\Policies\TagPolicy;

/*-------------------------Policy Classes--------------------------------------------------------*/
//Journal Policies
use App\Policies\ItemPolicy;
use App\Policies\RolePolicy;
use App\Policies\UserPolicy;


use App\Models\Covid\CovidCase;
use App\Models\Covid\Discharge;
use App\Policies\CategoryPolicy;
use App\Policies\Covid\TestPolicy;
use App\Policies\Covid\DeathPolicy;
use Illuminate\Support\Facades\Gate;
use App\Policies\Covid\CovidCasePolicy;
use App\Policies\Covid\DischargePolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        User::class => UserPolicy::class,
        Category::class => CategoryPolicy::class,
        Item::class => ItemPolicy::class,
        Role::class => RolePolicy::class,
        Tag::class => TagPolicy::class,

        //Covid
        Test::class => TestPolicy::class,
        Death::class => DeathPolicy::class,
        Discharge::class => DischargePolicy::class,
        CovidCase::class => CovidCasePolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('manage-items', 'App\Policies\UserPolicy@manageItems');

        Gate::define('manage-users', 'App\Policies\UserPolicy@manageUsers');

        //Res Gates
        Gate::define('manage-covid-cases', 'App\Policies\Covid\CovidCasePolicy@manageCovidCases');
        Gate::define('manage-covid-discharges', 'App\Policies\Covid\DischargePolicy@manageCovidDischarges');
        Gate::define('manage-covid-deaths', 'App\Policies\Covid\DeathPolicy@manageCovidDeaths');
        Gate::define('manage-covid-tests', 'App\Policies\Covid\TestPolicy@manageCovidTests');


    }
}
