<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
class ProjectsController extends Controller
{
    public function portfolio(Project $projects) {
        $project = $projects->get();
        return view('layouts.primary', ['page' => 'pages.portfolio', 'title' => 'Портфолио', 'posts' => $project]);
    }
    
     public function project(Project $projects,int $id) {
        $project = $projects::find($id);
        return view('layouts.primary', ['page' => 'pages.project', 'title' => 'Портфолио', 'project' => $project]);
    }
}
