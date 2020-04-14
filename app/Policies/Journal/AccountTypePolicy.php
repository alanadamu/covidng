<?php

namespace App\Policies\Journal;

use App\User;
use App\Models\Journal\AccountType;
use Illuminate\Auth\Access\HandlesAuthorization;

class AccountTypePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any account types.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can view the account type.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Journal\AccountType  $accountType
     * @return mixed
     */
    public function view(User $user, AccountType $accountType)
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can create account types.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can update the account type.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Journal\AccountType  $accountType
     * @return mixed
     */
    public function update(User $user, AccountType $accountType)
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can delete the account type.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Journal\AccountType  $accountType
     * @return mixed
     */
    public function delete(User $user, AccountType $accountType)
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can restore the account type.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Journal\AccountType  $accountType
     * @return mixed
     */
    public function restore(User $user, AccountType $accountType)
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can permanently delete the account type.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Journal\AccountType  $accountType
     * @return mixed
     */
    public function forceDelete(User $user, AccountType $accountType)
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the authenticated user can manage account types.
     *
     * @param  \App\User  $user
     * @return boolean
     */
    public function manageAccountTypes(User $user)
    {
        return $user->isAdmin();
    }
}
