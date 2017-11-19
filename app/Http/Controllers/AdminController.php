<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        return view('admin.main');
    }
    public function postMenu() {
        return view('admin.post');
    }
    public function postCreate() {
        return view('admin.postCreate');
    }
}
