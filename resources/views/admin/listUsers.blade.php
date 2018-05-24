@foreach($usersList as $user)
  <li><a href="{{route($routeName, ['id' => $user->id])}}">{{$user->name}}</a></li>
@endforeach