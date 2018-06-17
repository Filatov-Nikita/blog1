<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Tag;
use Illuminate\Support\Facades\Cache;

class ArticlesController extends Controller
{

    public function paginate($articles = [], Request $request) {

//        $articles = Cache::remember('ListPost', 5, function () {
//           return Article::orderBy('created_at', 'DESC')->Paginate(2);
//        });
	
        if($request->ajax()) {
            return [
                'articles' => view('blocks.article')->with(compact('articles'))->render(),
                'next_page' => $articles->nextPageUrl()
            ];
        }

        
    }
    public function getPostById($id) {

            $articleOne = Article::findOrFail($id);
            return view('layouts.primary', ['page' => 'pages.article', 'title' => 'Статьи', 'articleOne' => $articleOne]);
    }

	public function tagSort($id, Request $request) {
		$articles = Tag::find($id)->articles()->Simplepaginate(4);
		$this->paginate($articles, $request);
		return view('layouts.primary', ['page' => 'pages.articles', 'title' => 'Статьи', 'articles' => $articles]);
	}
	public function getPosts(Request $request) {
		$articles = Article::orderBy('created_at', 'DESC')->Simplepaginate(4);
        if($request->ajax()) {
            return [
                'articles' => view('blocks.article')->with(compact('articles'))->render(),
                'next_page' => $articles->nextPageUrl()
            ];
        }
		return view('layouts.primary', ['page' => 'pages.articles', 'title' => 'Статьи', 'articles' => $articles]);
	}
}
