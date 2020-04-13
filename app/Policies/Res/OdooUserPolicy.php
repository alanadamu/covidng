<?php

namespace App\Policies\Res;

use App\Models\Res\OdooUser;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class OdooUserPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any odoo users.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the odoo user.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Res\OdooUser  $odooUser
     * @return mixed
     */
    public function view(User $user, OdooUser $odooUser)
    {
        //
    }

    /**
     * Determine whether the user can create odoo users.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the odoo user.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Res\OdooUser  $odooUser
     * @return mixed
     */
    public function update(User $user, OdooUser $odooUser)
    {
        //
    }

    /**
     * Determine whether the user can delete the odoo user.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Res\OdooUser  $odooUser
     * @return mixed
     */
    public function delete(User $user, OdooUser $odooUser)
    {
        //
    }

    /**
     * Determine whether the user can restore the odoo user.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Res\OdooUser  $odooUser
     * @return mixed
     */
    public function restore(User $user, OdooUser $odooUser)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the odoo user.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Res\OdooUser  $odooUser
     * @return mixed
     */
    public function forceDelete(User $user, OdooUser $odooUser)
    {
        //
    }
}
