
<div class="main_img">
    <img src="{{asset('/uploads') . '/' . config('blog.defaultUploadSection') . '/' . str_replace('.', '/', $project->path)}}" alt="">
</div>
<div class="title">{{$project->name}}</div>
<div class="inner">
    <div class="description">
        Проект содержит в себе современный дизайн, отвечающий всем новшествам 2017 года. Включает в себя удобную навигацию и продуманную концепцию.
    </div>
    <div class="content">
        {{$project->content}}
    </div>
</div>