<?php

namespace App\Policies\Config;

use App\Models\Config\OdooModel;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class OdooModelPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any odoo models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the odoo model.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Config\OdooModel  $odooModel
     * @return mixed
     */
    public function view(User $user, OdooModel $odooModel)
    {
        //
    }

    /**
     * Determine whether the user can create odoo models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the odoo model.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Config\OdooModel  $odooModel
     * @return mixed
     */
    public function update(User $user, OdooModel $odooModel)
    {
        //
    }

    /**
     * Determine whether the user can delete the odoo model.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Config\OdooModel  $odooModel
     * @return mixed
     */
    public function delete(User $user, OdooModel $odooModel)
    {
        //
    }

    /**
     * Determine whether the user can restore the odoo model.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Config\OdooModel  $odooModel
     * @return mixed
     */
    public function restore(User $user, OdooModel $odooModel)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the odoo model.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Config\OdooModel  $odooModel
     * @return mixed
     */
    public function forceDelete(User $user, OdooModel $odooModel)
    {
        //
    }
}
