<?php

namespace App\Policies;

use App\User;
use App\Tarea;
use Illuminate\Auth\Access\HandlesAuthorization;

class TasksPolicy
{
    use HandlesAuthorization;


    public function assignTasks(User $user)
    {
      if ($user->manager){
        return true;
      }
    }
    /**
     * Determine whether the user can view the tarea.
     *
     * @param  \App\User  $user
     * @param  \App\Tarea  $tarea
     * @return mixed
     */
    public function view(User $user, Tarea $tarea)
    {
        //
    }

    /**
     * Determine whether the user can create tareas.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the tarea.
     *
     * @param  \App\User  $user
     * @param  \App\Tarea  $tarea
     * @return mixed
     */
    public function update(User $user, Tarea $tarea)
    {
        //
    }

    /**
     * Determine whether the user can delete the tarea.
     *
     * @param  \App\User  $user
     * @param  \App\Tarea  $tarea
     * @return mixed
     */
    public function delete(User $user, Tarea $tarea)
    {
        //
    }
}
