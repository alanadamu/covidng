<?php

namespace App\Policies\POS;

use App\Models\POS\ProductLine;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProductLinePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any product lines.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the product line.
     *
     * @param  \App\User  $user
     * @param  \App\Models\POS\ProductLine  $productLine
     * @return mixed
     */
    public function view(User $user, ProductLine $productLine)
    {
        //
    }

    /**
     * Determine whether the user can create product lines.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the product line.
     *
     * @param  \App\User  $user
     * @param  \App\Models\POS\ProductLine  $productLine
     * @return mixed
     */
    public function update(User $user, ProductLine $productLine)
    {
        //
    }

    /**
     * Determine whether the user can delete the product line.
     *
     * @param  \App\User  $user
     * @param  \App\Models\POS\ProductLine  $productLine
     * @return mixed
     */
    public function delete(User $user, ProductLine $productLine)
    {
        //
    }

    /**
     * Determine whether the user can restore the product line.
     *
     * @param  \App\User  $user
     * @param  \App\Models\POS\ProductLine  $productLine
     * @return mixed
     */
    public function restore(User $user, ProductLine $productLine)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the product line.
     *
     * @param  \App\User  $user
     * @param  \App\Models\POS\ProductLine  $productLine
     * @return mixed
     */
    public function forceDelete(User $user, ProductLine $productLine)
    {
        //
    }
}
