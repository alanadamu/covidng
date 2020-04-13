<?php

namespace App\Policies\Product;

use App\Models\Product\Template;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class TemplatePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any templates.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the template.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Product\Template  $template
     * @return mixed
     */
    public function view(User $user, Template $template)
    {
        //
    }

    /**
     * Determine whether the user can create templates.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the template.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Product\Template  $template
     * @return mixed
     */
    public function update(User $user, Template $template)
    {
        //
    }

    /**
     * Determine whether the user can delete the template.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Product\Template  $template
     * @return mixed
     */
    public function delete(User $user, Template $template)
    {
        //
    }

    /**
     * Determine whether the user can restore the template.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Product\Template  $template
     * @return mixed
     */
    public function restore(User $user, Template $template)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the template.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Product\Template  $template
     * @return mixed
     */
    public function forceDelete(User $user, Template $template)
    {
        //
    }
}
