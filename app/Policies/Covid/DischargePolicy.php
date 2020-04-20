<?php

namespace App\Policies\Covid;

use App\Models\Covid\Discharge;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class DischargePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any discharges.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the discharge.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Covid\Discharge  $discharge
     * @return mixed
     */
    public function view(User $user, Discharge $discharge)
    {
        //
    }

    /**
     * Determine whether the user can create discharges.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the discharge.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Covid\Discharge  $discharge
     * @return mixed
     */
    public function update(User $user, Discharge $discharge)
    {
        //
    }

    /**
     * Determine whether the user can delete the discharge.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Covid\Discharge  $discharge
     * @return mixed
     */
    public function delete(User $user, Discharge $discharge)
    {
        //
    }

    /**
     * Determine whether the user can restore the discharge.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Covid\Discharge  $discharge
     * @return mixed
     */
    public function restore(User $user, Discharge $discharge)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the discharge.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Covid\Discharge  $discharge
     * @return mixed
     */
    public function forceDelete(User $user, Discharge $discharge)
    {
        //
    }
}
