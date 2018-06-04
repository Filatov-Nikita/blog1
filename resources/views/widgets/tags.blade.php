<div class="widget">
	<div class="tags">
		<div class="line">Сортировать по тегу</div>
		<div class="links">
			<ul>
				@foreach($tags as $tag)
					<li><a href="{{url('/tag/' . $tag->id)}}"><span>@</span>{{$tag->name}}</a></li>
				@endforeach
			</ul>
		</div>
	</div>
</div>


