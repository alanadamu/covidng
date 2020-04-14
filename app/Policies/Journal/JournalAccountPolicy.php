<?php

namespace App\Policies\Journal;

use App\User;
use App\Models\Journal\Account;
use Illuminate\Auth\Access\HandlesAuthorization;

class JournalAccountPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any accounts.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can view the account.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Journal\Account  $account
     * @return mixed
     */
    public function view(User $user, Account $account)
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can create accounts.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can update the account.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Journal\Account  $account
     * @return mixed
     */
    public function update(User $user, Account $account)
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can delete the account.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Journal\Account  $account
     * @return mixed
     */
    public function delete(User $user, Account $account)
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can restore the account.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Journal\Account  $account
     * @return mixed
     */
    public function restore(User $user, Account $account)
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can permanently delete the account.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Journal\Account  $account
     * @return mixed
     */
    public function forceDelete(User $user, Account $account)
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the authenticated user can manage journals.
     *
     * @param  \App\User  $user
     * @return boolean
     */
    public function manageJournalAccounts(User $user)
    {
        return $user->isAdmin();
    }
}
