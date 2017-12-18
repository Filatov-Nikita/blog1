<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Article;
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
        public function create (User $user) {
             if ($user->role->prives->where('name' , 'creator_articles')->first()) {
                 return true;
             }
             return false;
    }
    public function edit (User $user) {
        if ($user->role->prives->where('name' , 'editor_articles')->first()) {
            return true;
        }
        return false;
    }

}
