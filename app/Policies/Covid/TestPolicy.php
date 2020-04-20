<?php

namespace App\Policies\Covid;

use App\Models\Covid\Test;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class TestPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any tests.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the test.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Covid\Test  $test
     * @return mixed
     */
    public function view(User $user, Test $test)
    {
        //
    }

    /**
     * Determine whether the user can create tests.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the test.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Covid\Test  $test
     * @return mixed
     */
    public function update(User $user, Test $test)
    {
        //
    }

    /**
     * Determine whether the user can delete the test.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Covid\Test  $test
     * @return mixed
     */
    public function delete(User $user, Test $test)
    {
        //
    }

    /**
     * Determine whether the user can restore the test.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Covid\Test  $test
     * @return mixed
     */
    public function restore(User $user, Test $test)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the test.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Covid\Test  $test
     * @return mixed
     */
    public function forceDelete(User $user, Test $test)
    {
        //
    }
}
