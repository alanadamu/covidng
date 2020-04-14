<?php

namespace App\Policies\Config;

use App\Models\Config\Config;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ConfigPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any configs.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the config.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Config\Config  $config
     * @return mixed
     */
    public function view(User $user, Config $config)
    {
        //
    }

    /**
     * Determine whether the user can create configs.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the config.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Config\Config  $config
     * @return mixed
     */
    public function update(User $user, Config $config)
    {
        //
    }

    /**
     * Determine whether the user can delete the config.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Config\Config  $config
     * @return mixed
     */
    public function delete(User $user, Config $config)
    {
        //
    }

    /**
     * Determine whether the user can restore the config.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Config\Config  $config
     * @return mixed
     */
    public function restore(User $user, Config $config)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the config.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Config\Config  $config
     * @return mixed
     */
    public function forceDelete(User $user, Config $config)
    {
        //
    }
}
