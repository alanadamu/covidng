<?php

namespace App\Policies\POS;

use App\Models\POS\ProductLines;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProductLinesPolicy
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
     * Determine whether the user can view the product lines.
     *
     * @param  \App\User  $user
     * @param  \App\Models\POS\ProductLines  $productLines
     * @return mixed
     */
    public function view(User $user, ProductLines $productLines)
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
     * Determine whether the user can update the product lines.
     *
     * @param  \App\User  $user
     * @param  \App\Models\POS\ProductLines  $productLines
     * @return mixed
     */
    public function update(User $user, ProductLines $productLines)
    {
        //
    }

    /**
     * Determine whether the user can delete the product lines.
     *
     * @param  \App\User  $user
     * @param  \App\Models\POS\ProductLines  $productLines
     * @return mixed
     */
    public function delete(User $user, ProductLines $productLines)
    {
        //
    }

    /**
     * Determine whether the user can restore the product lines.
     *
     * @param  \App\User  $user
     * @param  \App\Models\POS\ProductLines  $productLines
     * @return mixed
     */
    public function restore(User $user, ProductLines $productLines)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the product lines.
     *
     * @param  \App\User  $user
     * @param  \App\Models\POS\ProductLines  $productLines
     * @return mixed
     */
    public function forceDelete(User $user, ProductLines $productLines)
    {
        //
    }
}
