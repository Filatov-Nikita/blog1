<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Project;
use App\Http\Requests\RequestPostCreate;
use App\Classes\Uploader;
class ProjectsAdminController extends Controller
{
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

    public function projectCreate()
    {
        $this->authorize('create');
        return view('admin.projectCreate');
    }

    public function projectCreateSend(RequestPostCreate $request, Uploader $uploader)
    {
        $this->authorize('create', Article::class);
        $files = ['logo', 'image'];
        foreach ($files as $file) {
            if ($uploader->validate($request, $file, $this->rules)) {
                $uploadedPath[$file] = $uploader->upload();
            }
        }
        $ProjectModel = Project::create($request->all());
        $ProjectModel->image = $uploadedPath['image'];
        $ProjectModel->logo = $uploadedPath['logo'];
        $ProjectModel->save();
        return redirect()->route('admin.index')->with('success', 'Добавление проекта выполнено успешно');
    }

    public function projectDelete()
    {
        $this->authorize('delete');
        $projects = Project::get();
        return view('admin.projectDelete', ['all_projects' => $projects]);
    }
}
