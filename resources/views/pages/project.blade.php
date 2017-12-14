
<div class="main_img">
    <img src="{{upload_path($project->image)}}" alt="">
</div>
<div class="title">{{$project->name}}</div>
<div class="inner">
    <div class="description">
        {{$project->description}}
    </div>
    <div class="content">
        {!! $project->content !!}
    </div>
</div>