<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articles; 
class ArticlesController extends Controller
{
    public function orm(Articles $articles) {
       /* $articl->title = 'ss';
        $articl->content = 'sdasd';
        $articl->save();
        */
        /*
        $articl = Articles::find(1);
        $articl->title = 'Nikita';
        $articl->save();
        dump($articl);
         * 
         */
        /*
        $articl = Articles::where('title', 'like', 'N%')->get();
        dump($articl);
       */
        return 'orm';
    }
}
