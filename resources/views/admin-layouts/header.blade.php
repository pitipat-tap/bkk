<!DOCTYPE Html>
<Html>
    <head>
        <meta charset="utf-8"></meta>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>KiwiLauncher</title>
        
        {!! Html::style("css/main.css") !!}
        {!! Html::style("css/app.css") !!}
        @yield("specific_css")
        
        {!! Html::script("js/jquery/dist/jquery.min.js") !!}
        {!! Html::script("js/modernizr/modernizr.js") !!}
        {!! Html::script("js/fastclick/lib/fastclick.js") !!}
        {!! Html::script("js/foundation/js/foundation.min.js") !!}
        {!! Html::script("js/foundation/js/foundation.min.js") !!}
        {!! Html::script("js/angular.min.js") !!}

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

