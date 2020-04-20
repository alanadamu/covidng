<?php

namespace App\Policies\Covid;

use App\Models\Covid\Case;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CasePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any cases.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the case.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Covid\Case  $case
     * @return mixed
     */
    public function view(User $user, Case $case)
    {
        //
    }

    /**
     * Determine whether the user can create cases.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the case.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Covid\Case  $case
     * @return mixed
     */
    public function update(User $user, Case $case)
    {
        //
    }

    /**
     * Determine whether the user can delete the case.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Covid\Case  $case
     * @return mixed
     */
    public function delete(User $user, Case $case)
    {
        //
    }

    /**
     * Determine whether the user can restore the case.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Covid\Case  $case
     * @return mixed
     */
    public function restore(User $user, Case $case)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the case.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Covid\Case  $case
     * @return mixed
     */
    public function forceDelete(User $user, Case $case)
    {
        //
    }
}
