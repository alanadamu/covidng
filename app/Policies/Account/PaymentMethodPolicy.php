<?php

namespace App\Policies\Account;

use App\Models\Account\PaymentMethod;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PaymentMethodPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any payment methods.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the payment method.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Account\PaymentMethod  $paymentMethod
     * @return mixed
     */
    public function view(User $user, PaymentMethod $paymentMethod)
    {
        //
    }

    /**
     * Determine whether the user can create payment methods.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the payment method.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Account\PaymentMethod  $paymentMethod
     * @return mixed
     */
    public function update(User $user, PaymentMethod $paymentMethod)
    {
        //
    }

    /**
     * Determine whether the user can delete the payment method.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Account\PaymentMethod  $paymentMethod
     * @return mixed
     */
    public function delete(User $user, PaymentMethod $paymentMethod)
    {
        //
    }

    /**
     * Determine whether the user can restore the payment method.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Account\PaymentMethod  $paymentMethod
     * @return mixed
     */
    public function restore(User $user, PaymentMethod $paymentMethod)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the payment method.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Account\PaymentMethod  $paymentMethod
     * @return mixed
     */
    public function forceDelete(User $user, PaymentMethod $paymentMethod)
    {
        //
    }
}
