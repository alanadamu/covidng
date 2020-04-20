<?php

namespace App\Policies\Covid;

use App\Models\Covid\CovidCase;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CovidCasePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any covid cases.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the covid case.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Covid\CovidCase  $covidCase
     * @return mixed
     */
    public function view(User $user, CovidCase $covidCase)
    {
        //
    }

    /**
     * Determine whether the user can create covid cases.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the covid case.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Covid\CovidCase  $covidCase
     * @return mixed
     */
    public function update(User $user, CovidCase $covidCase)
    {
        //
    }

    /**
     * Determine whether the user can delete the covid case.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Covid\CovidCase  $covidCase
     * @return mixed
     */
    public function delete(User $user, CovidCase $covidCase)
    {
        //
    }

    /**
     * Determine whether the user can restore the covid case.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Covid\CovidCase  $covidCase
     * @return mixed
     */
    public function restore(User $user, CovidCase $covidCase)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the covid case.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Covid\CovidCase  $covidCase
     * @return mixed
     */
    public function forceDelete(User $user, CovidCase $covidCase)
    {
        //
    }
}
