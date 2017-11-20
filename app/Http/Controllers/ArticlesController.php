<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;  
class ArticlesController extends Controller
{
//    public function orm(Article $articles) {
//       /* $articl->title = 'ss';
//        $articl->content = 'sdasd';
//        $articl->save();
//        */
//        /*
//        $articl = Articles::find(1);
//        $articl->title = 'Nikita';
//        $articl->save();
//        dump($articl);
//         *
//         */
//        /*
//        $articl = Articles::where('title', 'like', 'N%')->get();
//        dump($articl);
//       */
//        $article = $articles::find(2);
//        $comment = $article->comments;
//        dump($comment->count());
//
//        return 'orm';
//    }

    public function listPost(Article $article) {
        $articles = $article ->orderBy('created_at', 'DESC')->get();
        return view('layouts.primary', ['page' => 'pages.articles', 'title' => 'Статьи', 'articles' => $articles]);
    }


}
