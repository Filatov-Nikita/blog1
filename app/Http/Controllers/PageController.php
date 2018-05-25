<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\FeedbackMail;
use App\Events\Feedback;
use App\Models\Article;

class PageController extends Controller
{
    public function feedback() {
        return view('layouts.primary', ['page' => 'pages.feedback']);
    }
    public function feedbackPost(Request $request) {
            $this->validate($request, [
                '*' => 'required',
                'name' => 'min:3',
                'email' => 'email',
                'text' => 'min:10'
            ]);
         event(new Feedback($request->all()));
         return redirect()->route('site.main.about');
    }
    public function supportme() {
        return view('layouts.primary', ['page' => 'pages.supportme']);
    }
    public function search(Request $request) {
        $query =  $request->get('query');
        $res = Article::Where('title', 'LIKE', '%' . $query . '%')->get();
       // dump($res);
        return view('layouts.primary', ['page' => 'pages.search', 'results' => $res, 'query' => $query]);
    }
}
