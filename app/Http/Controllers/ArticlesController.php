<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Facades\Cache;
class ArticlesController extends Controller
{
//    public function orm(Article $articles) {
//       /* $articl->title = 'ss';
//        $articl->content = 'sdasd';
//        $articl->save();
//        */
//        /*
//        $articl = ArticlesController::find(1);
//        $articl->title = 'Nikita';
//        $articl->save();
//        dump($articl);
//         *
//         */
//        /*
//        $articl = ArticlesController::where('title', 'like', 'N%')->get();
//        dump($articl);
//       */
//        $article = $articles::find(2);
//        $comment = $article->comments;
//        dump($comment->count());
//
//        return 'orm';
//    }

    public function listPost(Request $request) {

//        $articles = Cache::remember('ListPost', 5, function () {
//           return Article::orderBy('created_at', 'DESC')->Paginate(2);
//        });

        $articles = Article::orderBy('created_at', 'DESC')->Simplepaginate(4);

        if($request->ajax()) {
            return [
                'articles' => view('blocks.article')->with(compact('articles'))->render(),
                'next_page' => $articles->nextPageUrl()
            ];
        }

        return view('layouts.primary', ['page' => 'pages.articles', 'title' => 'Статьи', 'articles' => $articles]);
    }
    public function getPostById($id) {

            $articleOne = Article::findOrFail($id);
            return view('layouts.primary', ['page' => 'pages.article', 'title' => 'Статьи', 'articleOne' => $articleOne]);
    }

}
