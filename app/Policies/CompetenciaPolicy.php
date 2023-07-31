<?php

namespace App\Policies;

use App\Models\Competencia;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class CompetenciaPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->isTeacher();
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Competencia $competencia): bool
    {
        return $user->isTeacher() || $competencia->students->contains($user);
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->isTeacher();
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Competencia $competencia): bool
    {
        return $user->isTeacher() && $user->id == $competencia->user_id && !$competencia->trashed();
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Competencia $competencia): bool
    {
        return $user->isTeacher() && $user->id == $competencia->user_id && !$competencia->trashed();
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Competencia $competencia): bool
    {
        return $user->isTeacher() && $competencia->trashed();
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Competencia $competencia): bool
    {
        return $competencia->students->contains($user) && !$competencia->trashed();
    }

    // public function viewAsStudent(User $user, Competencia $competencia): bool
    // {
    //     return $competencia->students->contains($user) && !$competencia->trashed();
    // }
}
