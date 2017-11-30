<?php

namespace App\Http\Controllers;
use App\Classes\Uploader;
use App\Models\Upload;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\RegistrationMail;
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
    public function mail()
    {

        Mail::to('nikita-filatov51@yandex.ru')
           ->send(
               new registrationMail(['email' => 'nikita-filatov51@yandex.ru', 'name' => 'nikita'])
           );
//        Mail::raw('husttext', function($message) {
//            $message->from('nikita45454@gmail.com');
//            $message->to('nikita-filatov51@yandex.ru');
//           // $message->setContentType('text/html');
//            $message->subject('Письмо с блога');
//        });
    }
}
