<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Events\Feedback;
use Illuminate\View\View;

class ArticlesController extends Controller
{
    public function feedback(Request $request)
    {
        event(new Feedback($request->all()));
        return response()->json([
            'res' => true
        ]);
        }
}
