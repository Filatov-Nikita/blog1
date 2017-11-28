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
    protected  $can_create;
    protected $rules;
    public function __construct()
    {
        $this->rules = [
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
        if(!Gate::allows('create', Auth::user())) {
            return view('admin.notPolice');
        }
        return view('admin.postCreate');
    }

    public function postEdit()
{
    if(!Gate::allows('edit', Auth::user())) {
        return view('admin.notPolice');
    }
    $all_articles = Article::get();
    return view('admin.postEdit', ['all_articles' => $all_articles]);

}

    public function postEditById($id)
    {
        if(!Gate::allows('edit', Auth::user())) {
            return view('admin.notPolice');
        }
        $article = Article::find($id);
        return view('admin.postEditById', ['article' => $article]);

    }

    public function postDelete()
    {
        if(!Gate::allows('delete', Auth::user())) {
            return view('admin.notPolice');
        }

    }


    public function postCreateSend(RequestPostCreate $request, Uploader $uploader)
    {
        if ($uploader->validate($request, 'file', $this->rules)) {
            $uploadedPath = $uploader->upload();
        }

        $ArticleModel = Article::create($request->all());
        $ArticleModel->image = $uploadedPath;
        $ArticleModel->save();
        return redirect()->route('site.admin.postMenu')->with('success', 'Добавление поста выполнено успешно');

    }
    public function postEditSend($id ,RequestPostCreate $request, Uploader $uploader)
    {
        $ArticleModel = Article::find($id);
        $ArticleModel->update($request->all());
        return redirect()->route('site.admin.postMenu')->with('success', 'Редактирование поста выполнено успешно');

    }
}
