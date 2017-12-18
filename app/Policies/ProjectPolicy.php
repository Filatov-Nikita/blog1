<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProjectPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function create (User $user) {
        if ($user->role->prives->where('name' , 'creator_projects')->first()) {
            return true;
        }
        return false;
    }
    public function edit (User $user) {
        if ($user->role->prives->where('name' , 'editor_projects')->first()) {
            return true;
        }
        return false;
    }
}
