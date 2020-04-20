<?php

namespace App\Policies\Covid;

use App\Models\Covid\Death;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class DeathPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any deaths.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the death.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Covid\Death  $death
     * @return mixed
     */
    public function view(User $user, Death $death)
    {
        //
    }

    /**
     * Determine whether the user can create deaths.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the death.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Covid\Death  $death
     * @return mixed
     */
    public function update(User $user, Death $death)
    {
        //
    }

    /**
     * Determine whether the user can delete the death.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Covid\Death  $death
     * @return mixed
     */
    public function delete(User $user, Death $death)
    {
        //
    }

    /**
     * Determine whether the user can restore the death.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Covid\Death  $death
     * @return mixed
     */
    public function restore(User $user, Death $death)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the death.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Covid\Death  $death
     * @return mixed
     */
    public function forceDelete(User $user, Death $death)
    {
        //
    }
}
