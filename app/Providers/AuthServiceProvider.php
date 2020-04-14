<?php

namespace App\Providers;

use App\Tag;
use App\Item;
use App\Role;
use App\User;
use App\Category;

use App\Models\Journal\AccountTypeCategory AS JournalAccountTypeCategory;
use App\Models\Journal\AccountType AS JournalAccountType;
use App\Models\Journal\Journal AS Journal;
use App\Models\Journal\Account AS JournalAccount;

/*-------------------------Policy Classes--------------------------------------------------------*/
//Journal Policies
use App\Policies\Journal\AccountTypeCategoryPolicy AS JournalAccountTypeCategoryPolicy;
use App\Policies\Journal\AccountTypePolicy AS JournalAccountTypePolicy;
use App\Policies\Journal\JournalPolicy AS JournalPolicy;
use App\Policies\Journal\JournalAccountPolicy AS JournalAccountPolicy;


use App\Policies\TagPolicy;
use App\Policies\ItemPolicy;
use App\Policies\RolePolicy;
use App\Policies\UserPolicy;
use App\Policies\CategoryPolicy;
use Illuminate\Support\Facades\Gate;
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

        JournalAccountTypeCategory::class => JournalAccountTypeCategoryPolicy::class,
        JournalAccountType::class => JournalAccountTypePolicy::class,
        Journal::class => JournalPolicy::class,
        JournalAccount::class => JournalAccountPolicy::class,
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

        Gate::define('manage-journal-account-type-categories', 'App\Policies\Journal\AccountTypeCategoryPolicy@manageAccountTypeCategories');
        Gate::define('manage-journal-account-types', 'App\Policies\Journal\AccountTypePolicy@manageAccountTypes');
        Gate::define('manage-journals', 'App\Policies\Journal\JournalPolicy@manageJournals');
        Gate::define('manage-journal-accounts', 'App\Policies\Journal\JournalAccountPolicy@manageJournalAccounts');
    }
}
