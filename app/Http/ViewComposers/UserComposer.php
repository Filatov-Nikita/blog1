<?php

namespace App\Http\ViewComposers;

use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Support\Facades\Cache;

class UserComposer
{
    /**
     * The user repository implementation.
     *
     * @var UserRepository
     */
    protected $userName;

    /**
     * Create a new profile composer.
     *
     * @param  UserRepository  $users
     * @return void
     */
    public function __construct()
    {
       $this->userName =  Cache::remember('userName', 100, function () {
           if(Auth::check()) {
               return Auth::user()->name;
           }
           return null;

        });

    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
          $view->with('userName', $this->userName);
    }
}