<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Articles;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
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

    public function create (User $user, Aricles $articles) {
        return $user->can_create == 1;
    }
}
