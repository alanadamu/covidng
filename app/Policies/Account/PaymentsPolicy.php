<?php

namespace App\Policies\Account;

use App\Models\Account\Payments;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PaymentsPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any payments.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the payments.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Account\Payments  $payments
     * @return mixed
     */
    public function view(User $user, Payments $payments)
    {
        //
    }

    /**
     * Determine whether the user can create payments.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the payments.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Account\Payments  $payments
     * @return mixed
     */
    public function update(User $user, Payments $payments)
    {
        //
    }

    /**
     * Determine whether the user can delete the payments.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Account\Payments  $payments
     * @return mixed
     */
    public function delete(User $user, Payments $payments)
    {
        //
    }

    /**
     * Determine whether the user can restore the payments.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Account\Payments  $payments
     * @return mixed
     */
    public function restore(User $user, Payments $payments)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the payments.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Account\Payments  $payments
     * @return mixed
     */
    public function forceDelete(User $user, Payments $payments)
    {
        //
    }
}
