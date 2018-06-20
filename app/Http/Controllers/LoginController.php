<?php

namespace App\Http\Controllers;

use App\Mail\resetPasswordMail;
use Illuminate\Auth\Access\Gate;
use Illuminate\Http\Request;
use App\Http\Requests\RequestRegistration;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use App\Mail\RegistrationMail;
use App\Models\User;
use Illuminate\Support\Facades\Cache;

class LoginController extends Controller {

    public function getLogin() {
        return view('layouts.secondary', ['page' => 'auth.pageLogin']);
    }

    public function login(Request $request) {

        $authResult = Auth::attempt([
                    'email' => $request->input('email'),
                    'password' => $request->input('password'),
                    'registration_status' => 1
        ], true);
        if ($authResult) {
            return redirect()->route('site.main.about');
        } else {
            return redirect()
                    ->route('site.main.login')
                    ->with('authError', 'Неправильный логин или пароль!');
        }
    }

    public function registration(RequestRegistration $request) {
            $hash = sha1($request->input('email'));
             DB::table('users')->insert([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
                 'user_hash' => $hash,
            'created_at' => Carbon::createFromTimestamp(time())
                    ->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::createFromTimestamp(time())
                    ->format('Y-m-d H:i:s'),
        ]);
        Mail::to($request->input('email'))
            ->send(
                new registrationMail([
                    'email' => $request->input('email'),
                    'name' => $request->input('name'),
                    'hash' => $hash])
            );

        return redirect()->route('site.main.about')->with('register', true);
    }

    public function confirmed_user($hash) {
        $user = User::Where('user_hash', $hash)->first();
        $user->registration_status = 1;
        $user->save();
        return redirect()->route('site.main.login');
    }

    public function getLogout() {
        Auth::logout();
       // Cache::forget('userName');
        return redirect()->route('site.main.about');
    }
    public function resetPassword() {
        return view('layouts.primary', ['page' => 'auth.resetPassword']);
    }
    public function updatePassword() {
       $db_token = DB::table('password_resets')->where('token', Input::get('token', null))->where('email', Input::get('email', null))->get();
        if($db_token->isEmpty()) {
            abort(403);
        }
        return view('layouts.primary', ['page' => 'auth.updatePassword']);
    }
    public function postResetPassword(Request $request) {
        $this->validate($request, [
            '*' => 'required',
            'email' => 'email|exists:users'
        ]);
        $token = Hash::make($request->input('email'));
        DB::table('password_resets')->insert([
            'email' => $request->input('email'),
            'token' => $token,
            'created_at' => Carbon::createFromTimestamp(time())
                ->format('Y-m-d H:i:s'),
        ]);
        Mail::to($request->input('email'))
            ->send(
                new resetPasswordMail([
                    'email' => $request->input('email'),
                    'token' => $token
                    ])
            );
        return redirect()->route('site.main.about');
    }
}

