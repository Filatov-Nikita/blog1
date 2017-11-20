<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Http\Requests\RequestPostCreate;
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
    public function postCreateSend(RequestPostCreate $request, Article $article) {
    //dump($request->all(0));
       ;
        $ArticleModel = Article::create($request->all());
        dump($ArticleModel);
        //$ArticleModel->save();

    }
}
