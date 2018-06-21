<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Http\Requests\RequestPostCreate;
use App\Classes\Uploader;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.main');
    }
    public function menuControl()
    {
        return view('admin.menu.controlPage');
    }

}
