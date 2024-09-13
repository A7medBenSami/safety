<?php

namespace App\Policies;

use App\Models\Pdf;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PdfPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the pdf can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->hasPermissionTo('list pdfs');
    }

    /**
     * Determine whether the pdf can view the model.
     */
    public function view(User $user, Pdf $model): bool
    {
        return $user->hasPermissionTo('view pdfs');
    }

    /**
     * Determine whether the pdf can create models.
     */
    public function create(User $user): bool
    {
        return $user->hasPermissionTo('create pdfs');
    }

    /**
     * Determine whether the pdf can update the model.
     */
    public function update(User $user, Pdf $model): bool
    {
        return $user->hasPermissionTo('update pdfs');
    }

    /**
     * Determine whether the pdf can delete the model.
     */
    public function delete(User $user, Pdf $model): bool
    {
        return $user->hasPermissionTo('delete pdfs');
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     */
    public function deleteAny(User $user): bool
    {
        return $user->hasPermissionTo('delete pdfs');
    }

    /**
     * Determine whether the pdf can restore the model.
     */
    public function restore(User $user, Pdf $model): bool
    {
        return false;
    }

    /**
     * Determine whether the pdf can permanently delete the model.
     */
    public function forceDelete(User $user, Pdf $model): bool
    {
        return false;
    }
}
