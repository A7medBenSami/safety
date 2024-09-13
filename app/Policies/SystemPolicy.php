<?php

namespace App\Policies;

use App\Models\User;
use App\Models\System;
use Illuminate\Auth\Access\HandlesAuthorization;

class SystemPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the system can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->hasPermissionTo('list systems');
    }

    /**
     * Determine whether the system can view the model.
     */
    public function view(User $user, System $model): bool
    {
        return $user->hasPermissionTo('view systems');
    }

    /**
     * Determine whether the system can create models.
     */
    public function create(User $user): bool
    {
        return $user->hasPermissionTo('create systems');
    }

    /**
     * Determine whether the system can update the model.
     */
    public function update(User $user, System $model): bool
    {
        return $user->hasPermissionTo('update systems');
    }

    /**
     * Determine whether the system can delete the model.
     */
    public function delete(User $user, System $model): bool
    {
        return $user->hasPermissionTo('delete systems');
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     */
    public function deleteAny(User $user): bool
    {
        return $user->hasPermissionTo('delete systems');
    }

    /**
     * Determine whether the system can restore the model.
     */
    public function restore(User $user, System $model): bool
    {
        return false;
    }

    /**
     * Determine whether the system can permanently delete the model.
     */
    public function forceDelete(User $user, System $model): bool
    {
        return false;
    }
}
