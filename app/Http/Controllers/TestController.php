<?php

namespace App\Http\Controllers;
use App\Classes\Uploader;
use App\Models\Upload;
use App\Models\Project;
use Illuminate\Http\Request;

class TestController extends Controller
{
        public function testGet(Uploader $uploader)
    {
        return '<form enctype="multipart/form-data" method="POST">'.
            csrf_field() .
            '<input type="file" name="file" />
            <input type="submit" value="Go!" />
        </form>';
    }


    public function testPost(Request $request, Uploader $uploader, Upload $uploadModel, Project $projects)
    {
        $rules = [
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
        
        if ($uploader->validate($request, 'file', $rules)) {
            $uploadedPath = $uploader->upload();

            if ($uploadedPath !== false) {
                $project = $projects::find(1);
                $project->path = $uploadedPath;
                $props = $uploader->getProps();
                 $project->ext = $props['ext'];
                
                 $project->save();
                dump($project);
                
            }

            return $uploadedPath;
        }
        else {
            dump($uploader->getProps());
            dump($uploader->getErrors());
        }

        //return $uploader->getErrors();
    }
}
