@foreach($list_projects as $project)
  <li><a href="{{route($routeName, ['id' => $project->id])}}">{{$project->name}}</a></li>
@endforeach