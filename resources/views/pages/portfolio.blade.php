                <div class="portfolio">
                            <p>Портфолио</p>
                        </div>
                        <div class="container">
                            @foreach($projects as $project)
                            <div class="item">
                                <div class="line"></div>
                                <a class="foto" href = "{{Route('site.main.articlesProject', $project->id)}}">
                                    <div class = "dark">
                                        <div class="logo"><img src="{{upload_path($project->logo)}}" alt=""/></div>
                                        <p>{{$project->name}}</p>
                                    </div>
                                    <div class="logos"></div>
                                    <img src="{{upload_path($project->image)}}" alt=""/>

                                </a>
                                <div class="underline">
                                    <p class = "dolgo">Срок: {{$project->term}}</p>
                                </div>
                            </div>
                            @endforeach
                        </div>