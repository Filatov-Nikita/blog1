<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Http\Requests\RequestPostCreate;
use App\Classes\Uploader;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;


class ArticlesAdminController extends Controller
{
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

    public function postCreate()
    {
        $this->authorize('create');
        return view('admin.postCreate');
    }

    public function postEdit()
    {
        $this->authorize('edit');
        $all_articles = Article::get();
        return view('admin.postEdit', ['all_articles' => $all_articles]);

    }

    public function postEditById($id)
    {
        $this->authorize('edit');
        session(['post_id' => $id]);
        $article = Article::find($id);
        return view('admin.postEditById', ['article' => $article]);

    }

    public function postDelete()
    {


    }

    public function postCreateSend(RequestPostCreate $request, Uploader $uploader)
    {
        $this->authorize('create', Article::class);
        if ($uploader->validate($request, 'file', $this->rules)) {
            $uploadedPath = $uploader->upload();
        }

        $ArticleModel = Article::create($request->all());
        $ArticleModel->image = $uploadedPath;
        $ArticleModel->save();
        return redirect()->route('admin.index')->with('success', 'Добавление поста выполнено успешно');

    }
    public function postEditSend(RequestPostCreate $request, Uploader $uploader)
    {

        $ArticleModel = Article::find(session('post_id'));
        $ArticleModel->fill($request->all());
            if ($uploader->validate($request, 'file', $this->rules)) {
                $uploadedPath = $uploader->upload();
                $ArticleModel->image = $uploadedPath;
            }
        $ArticleModel->save();
        return redirect()->route('admin.index')->with('success', 'Редактирование поста выполнено успешно');

    }
}