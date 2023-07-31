<?php

namespace App\Policies;

use App\Models\Curso;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class CursoPolicy
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
    public function view(User $user, Curso $curso): bool
    {
        // Check if the user is a teacher of the curso
        if ($user->isTeacher()) {
            return true;
        }
    
        // Get the associated competencia of the curso
        $competencia = $curso->competencia;
    
        // Check if the competencia exists and contains cursos
        if ($competencia && $competencia->cursos->count() > 0) {
            // Check if the user is a student of the competencia
            if ($competencia->students->contains($user)) {
                return true;
            }
        }
    
        return false;
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
    public function update(User $user, Curso $curso): bool
    {
        return (($user->isTeacher() && $user->id == $curso->user_id) || ($curso->students->contains($user)));
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Curso $curso): bool
    {
        return $user->isTeacher() && $user->id == $curso->user_id && !$curso->trashed();
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Curso $curso): bool
    {
        return $user->isTeacher() && $curso->trashed();
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Curso $curso): bool
    {
        return $curso->students->contains($user) && !$curso->trashed();
    }

    // public function viewAsStudent(User $user, curso $curso): bool
    // {
    //     return $curso->students->contains($user) && !$curso->trashed();
    // }
}
