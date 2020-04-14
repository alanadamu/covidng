<?php

namespace App\Policies\Journal;

use App\User;
use App\Models\Journal\Journal;
use Illuminate\Auth\Access\HandlesAuthorization;

class JournalPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any journals.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can view the journal.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Journal\Journal  $journal
     * @return mixed
     */
    public function view(User $user, Journal $journal)
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can create journals.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can update the journal.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Journal\Journal  $journal
     * @return mixed
     */
    public function update(User $user, Journal $journal)
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can delete the journal.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Journal\Journal  $journal
     * @return mixed
     */
    public function delete(User $user, Journal $journal)
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can restore the journal.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Journal\Journal  $journal
     * @return mixed
     */
    public function restore(User $user, Journal $journal)
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can permanently delete the journal.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Journal\Journal  $journal
     * @return mixed
     */
    public function forceDelete(User $user, Journal $journal)
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the authenticated user can manage journals.
     *
     * @param  \App\User  $user
     * @return boolean
     */
    public function manageJournals(User $user)
    {
        return $user->isAdmin();
    }
}
