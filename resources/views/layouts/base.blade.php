<!DOCTYPE html> 
<html>
    <head>
        <meta charset="utf-8">
        <title>Филатов Никита - {{$title}}</title>
        @section('link')
            <link href="{{url('css/style.css')}}" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,900&amp;subset=cyrillic,cyrillic-ext" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Roboto:100,100i,300,300i,400,400i,500,500i,700,900&amp;subset=cyrillic,cyrillic-ext" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=latin-ext" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Marck+Script&amp;subset=cyrillic" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Pacifico&amp;subset=latin-ext" rel="stylesheet">
            <meta name="viewport" content="width=device-width, initial-scale=0.8" >
        @show
    </head>
    <body>
        <!--
        <div class="debug">
            <div>
                <div>
                    <div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div>
                </div>
            </div>
        </div>
        -->    
       @yield('header')   
        @yield('content', 'I`m content!')
         @yield('footer', 'I`m content!')
        <script src="js/jquery-3.2.0.min.js"></script>
        <script src="js/fnmenu.jquery.js"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
