
<div class="main_img">
    <img src="{{upload_path($articleOne->image)}}" alt="">
</div>
<div class="title">{{$articleOne->title}}</div>
<div class="inner">
    <div class="description">
        {{$articleOne->description}}
    </div>
    <div class="content">
        {!!$articleOne->content!!}
    </div>
</div>