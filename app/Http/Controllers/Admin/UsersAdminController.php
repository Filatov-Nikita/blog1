<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Role;

class UsersAdminController extends Controller
{
    public function listPage() {
        $users = User::get();
        return view('admin.pageList', 
            [
                'listName' => 'admin.listUsers',
                'routeName' => 'admin.changeRoleUser',
                'namePage' => 'Назначение роли пользователям',
                'usersList' => $users
            ]
        );
    }

    public function changeRole($id) {
        $this->authorize('user_role_change');
        $user = User::findOrFail($id);
        $roles = Role::get();
        return view('admin.changeUserRole', [
            'user' => $user,
            'roles' => $roles
        ]);
    } 
    public function changeRolePost($id,Request $request) {
        $this->authorize('user_role_change');
        $user = User::findOrFail($id);
        if(!$user->registration_status) abort('403');
        $user->role_id = $request->input('rolesList');
        $user->save();
        return redirect()->route('site.main.index');
    } 
}
