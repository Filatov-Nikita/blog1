<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RequestRegistration;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller {

    public function getLogin() {
        return view('layouts.secondary', ['page' => 'auth.pageLogin']);
    }

    public function login(Request $request) {
        $authResult = Auth::attempt([
                    'email' => $request->input('email'),
                    'password' => $request->input('password'),
        ]);
        if ($authResult) {
            return redirect()
                            ->route('site.main.about');
        } else {
            return redirect()
                            ->route('site.main.login')
                            ->with('authError', 'Неправильный логин или пароль!');
        }
    }

    public function registration(RequestRegistration $request) {
             DB::table('users')->insert([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'created_at' => Carbon::createFromTimestamp(time())
                    ->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::createFromTimestamp(time())
                    ->format('Y-m-d H:i:s'),
        ]);

        return redirect()->route('site.main.about')->with('register', true);
    }

    public function getLogout() {
        Auth::logout();
        return redirect()->route('site.main.about');
    }

}
