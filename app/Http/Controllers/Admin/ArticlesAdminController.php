<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
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
       $this->authorize('post_create');
        return view('admin.postCreate');
    }

    public function postEdit()
    {
        $this->authorize('post_edit');
        $all_articles = Article::get();
        return view('admin.pageList', [
            'all_articles' => $all_articles, 
            'namePage' => 'Редактирование статьи',
            'listName' => 'admin.listPosts',
            'routeName' => 'admin.getPostById'
        ]);

    }

    public function postEditById($id)
    {
        $this->authorize('post_edit');
        session(['post_id' => $id]);
        $article = Article::find($id);
        return view('admin.postEditById', ['article' => $article]);

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
        return redirect()->route('admin.createPost')->with('successPostCreate', 'Добавление поста выполнено успешно');

    }
    public function postEditSend(RequestPostCreate $request, Uploader $uploader)
    {
        $this->authorize('edit', Article::class);
        $ArticleModel = Article::find(session('post_id'));
        $ArticleModel->fill($request->all());
            if ($uploader->validate($request, 'file', $this->rules)) {
                $uploadedPath = $uploader->upload();
                $ArticleModel->image = $uploadedPath;
            }
        $ArticleModel->save();
        return redirect()->route('admin.index')->with('success', 'Редактирование поста выполнено успешно');

    }
    public function postDeletePage() {
        $this->authorize('post_delete');
        $all_articles = Article::get();
        return view('admin.pageList', 
        [
            'all_articles' => $all_articles,
            'listName' => 'admin.listPosts',
            'namePage' => 'Удаление статьи',
            'routeName' => 'admin.postDeleteById'
        ]);
    }
    public function postDelete($id) {
        $article = Article::find($id)->delete();
        return redirect()->route('admin.deletePostPage');
    }

}
