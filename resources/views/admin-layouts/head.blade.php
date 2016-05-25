<!DOCTYPE Html>
<Html>
    <head>
        <meta charset="utf-8"></meta>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>KiwiLauncher</title>
        
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Varela+Round" />

        {!! Html::style("css/main.css") !!}
        {!! Html::style("css/app.css") !!}
        {!! Html::style("static_css/animate.css") !!}
        {!! Html::style("static_css/foundation-icons.css") !!}
        
        @yield("specific_css")
        
        {!! Html::script("js/jquery/dist/jquery.min.js") !!}
        {!! Html::script("js/modernizr/modernizr.js") !!}
        {!! Html::script("js/fastclick/lib/fastclick.js") !!}
        {!! Html::script("js/foundation/js/foundation.min.js") !!}
        {!! Html::script("js/angular.min.js") !!}
        {!! Html::script("js/controller/headerController.js") !!}
        {!! Html::script("js/jquery.slides.min.js") !!}
        {!! Html::script("js/jquery.lettering.js") !!}
        {!! Html::script("js/jquery.fittext.js") !!}
        {!! Html::script("js/jquery.textillate.js") !!}
        {!! Html::script("js/noframework.waypoints.js") !!}
        {!! Html::script("js/isMobile.min.js") !!}
	
        {!! Html::script("js/main.js") !!}


        @yield("specific_js_head")
    </head>
    <body>
        @yield("body")
        
        <script>
            $(document).foundation();
        </script>
        @yield("specific_js_body")
    </body>
</Html>

