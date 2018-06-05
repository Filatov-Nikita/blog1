@foreach($articles as $article)
    <div class="item">
        <div class="line"></div>
        <a class="foto" href="{{route('site.main.articlesById', ['id' => $article->id])}}">
            <div class="dark"></div>
            <img src="{{upload_path($article->image)}}" alt=""/>
        </a>
        <div class="name_post"><a href="{{route('site.main.articlesById', ['id' => $article->id])}}">{{$article->title}}</a></div>
        <div class="description">
            {{$article->description}}
		</div>
		<div class="tagsList">
			<ul>
				@foreach($article->tags as $tag)
					<li><a href="{{url("/tag/$tag->id")}}"><span>@</span>{{$tag->name}}</a></li>
				@endforeach
			</ul>
		</div>
        <div class="underline">
            <p class="date">{{articlesForamDate($article->created_at)}}</p>
        </div>
    </div>
@endforeach