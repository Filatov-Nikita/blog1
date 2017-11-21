<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Http\Requests\RequestPostCreate;
use App\Classes\Uploader;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class AdminController extends Controller
{

    public function __construct()
    {
       
        if (!Gate::allows('create', Auth::user())) {
         return redirect()->route('site.main.login');
        }
    }

    public function index()
    {
        return view('admin.main');
    }

    public function postMenu()
    {
        return view('admin.post');
    }

    public function postCreate()
    {
        return view('admin.postCreate');
    }

    public function postCreateSend(RequestPostCreate $request, Article $article, Uploader $uploader)
    {
        $rules = [
            'maxSize' => 10 * 1024 * 1024,
            'minSize' => 10 * 1024,
            'allowedExt' => [
                'jpeg',
                'jpg',
                'png',
                'gif',
                'bmp',
                'tiff'
            ],
            'allowedMime' => [
                'image/jpeg',
                'image/png',
                'image/gif',
                'image/bmp',
                'image/tiff'
            ],
        ];


        if ($uploader->validate($request, 'file', $rules)) {
            $uploadedPath = $uploader->upload();
        }
        $ArticleModel = Article::create($request->all());
        $ArticleModel->image = $uploadedPath;
        $ArticleModel->save();
        return redirect()->route('site.admin.postMenu')->with('success', 'Добавление поста выполнено успешно');

    }
}
