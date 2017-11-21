
                        <div class="portfolio">
                            <p>Портфолио</p>
                        </div>
                        <div class="container">
                            @foreach($posts as $post)
                            <div class="item">
                                <div class="line"></div>    
                                <a class="foto" href = "{{Route('site.main.articlesProject', $post->id)}}">
                                    <div class = "dark">
                                        <img src="img/logo.png" alt=""/>
                                        <p>{{$post->name}}</p>
                                    </div>
                                    <div class="logos"></div>
                                    <img src="img/akiort.png" alt=""/>
                                   
                                </a>
                                <div class="underline">
                                    <p class = "dolgo">Срок: 1 месяц</p>
                                </div>
                            </div>
                            @endforeach
                              
                        </div>
