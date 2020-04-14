<?php

namespace App\Policies\Journal;

use App\User;
use App\Models\Journal\AccountTypeCategory;
use Illuminate\Auth\Access\HandlesAuthorization;

class AccountTypeCategoryPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any account type categories.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can view the account type category.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Journal\AccountTypeCategory  $accountTypeCategory
     * @return mixed
     */
    public function view(User $user, AccountTypeCategory $accountTypeCategory)
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can create account type categories.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can update the account type category.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Journal\AccountTypeCategory  $accountTypeCategory
     * @return mixed
     */
    public function update(User $user, AccountTypeCategory $accountTypeCategory)
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can delete the account type category.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Journal\AccountTypeCategory  $accountTypeCategory
     * @return mixed
     */
    public function delete(User $user, AccountTypeCategory $accountTypeCategory)
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can restore the account type category.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Journal\AccountTypeCategory  $accountTypeCategory
     * @return mixed
     */
    public function restore(User $user, AccountTypeCategory $accountTypeCategory)
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can permanently delete the account type category.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Journal\AccountTypeCategory  $accountTypeCategory
     * @return mixed
     */
    public function forceDelete(User $user, AccountTypeCategory $accountTypeCategory)
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the authenticated user can manage account type categories.
     *
     * @param  \App\User  $user
     * @return boolean
     */
    public function manageAccountTypeCategories(User $user)
    {
        return $user->isAdmin();
    }
}
