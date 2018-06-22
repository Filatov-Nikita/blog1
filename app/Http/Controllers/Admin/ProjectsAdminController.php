<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Http\Requests\RequestProject;
use App\Classes\Uploader;
class ProjectsAdminController extends Controller
{
    protected  $files = ['logo', 'image'];
    protected $rules = [];

    public function __construct()
    {
        $this->rules = [
            'maxSize' => 10 * 1024 * 1024,
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
        $this->authorize('project_create');
        return view('admin.projectCreate');
    }

    public function projectCreateSend(RequestProject $request, Uploader $uploader)
    {
        $this->authorize('create', Project::class);
        $this->files = ['logo', 'image'];
        foreach ($this->files as $file) {
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
    public function projectEditSend(RequestProject $request, Uploader $uploader)
    {
        $this->authorize('edit', Project::class);
        $ProjectModel = Project::find(session('post_id'));
        $ProjectModel->fill($request->all());

        foreach ($this->files as $file) {
            if ($uploader->validate($request, $file, $this->rules)) {
                $ProjectModel->{$file} = $uploader->upload();
            }
        }
            $ProjectModel->save();
        return redirect()->back()->with('successEditProject', 'Редактирование проекта выполнено успешно');

    }


    public function projectsList()
    {
        $this->authorize('project_edit');
        $projects = Project::get();
        return view('admin.pageList', ['list_projects' => $projects,
        'namePage' => 'Редактирование проекта',
        'routeName' => 'admin.editProject',
        'listName' => 'admin.listProjects'
        ]);
    }

    public function projectById($id)
    {
        $this->authorize('project_edit');
        session(['post_id' => $id]);
        $project = Project::find($id);
        return view('admin.projectEdit', ['project' => $project]);
    }
    public function projectDelete() {
        $this->authorize('project_delete');
        $list_projects = Project::get();
        return view('admin.pageList', 
        [
            'list_projects' => $list_projects,
            'routeName' => 'admin.projectDeleteById',
            'namePage' => 'Удаление проекта',
            'listName' => 'admin.listProjects'
        ]);
    }
    public function projectDeleteById($id) {
        $this->authorize('project_delete');
        $projects = Project::find($id)->delete();
        return redirect()->route('admin.projectDelete');
    }
}
