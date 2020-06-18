<?php

namespace App\Policies;

use App\Project;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProjectPolicy
{
    use HandlesAuthorization;

    public function access(User $user, Project $project)
    {
        //
        return $user->id === $project->user_id;
    }

}
