<?php

namespace App\Policies\Covid;

use App\Models\Covid\State;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class StatePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any states.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can view the state.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Covid\State  $state
     * @return mixed
     */
    public function view(User $user, State $state)
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can create states.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can update the state.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Covid\State  $state
     * @return mixed
     */
    public function update(User $user, State $state)
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can delete the state.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Covid\State  $state
     * @return mixed
     */
    public function delete(User $user, State $state)
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can restore the state.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Covid\State  $state
     * @return mixed
     */
    public function restore(User $user, State $state)
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can permanently delete the state.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Covid\State  $state
     * @return mixed
     */
    public function forceDelete(User $user, State $state)
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the authenticated user can manage covid states.
     *
     * @param  \App\User  $user
     * @return boolean
     */
    public function manageCovidStates(User $user)
    {
        return $user->isAdmin();
    }
}
