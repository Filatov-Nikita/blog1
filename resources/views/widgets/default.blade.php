<div class="widget">
	<div class="default">
		<div class="line">Добро пожаловать</div>
		<div class="links">
			<ul>
				@if(!Auth::check())
						<li><a href="{{ route('site.main.login') }}">Регистрация</a></li>
						@else 
						<li><a href="{{ route('site.main.logout') }}">Выйти</a></li>
					@endif
				<li><a href="{{route('site.main.feedback')}}">Написать мне</a></li>
				<li><a href="{{url('/supportme')}}">Поддержать меня</a></li>
			</ul>
			<div class="social">
				<a href=""><img src="{{url('img/vk.png')}}" alt=""></a>
				<a href=""><img src="{{url('img/insta.png')}}" alt=""></a>
				<a href=""><img src="{{url('img/telegram.png')}}" alt=""></a>
			</div>
		</div>
	</div>
</div>


