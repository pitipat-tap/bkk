<!DOCTYPE HTML>
<HTML> 
    <head>
        <meta charset="utf-8"></meta>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="robots" content="index,follow">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bangkok Smiles @yield("specific_title")</title>

        
    
        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('images/favicon/apple-touch-icon-57x57.png') }}">
        <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('images/favicon/apple-touch-icon-60x60.png') }}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('images/favicon/apple-touch-icon-72x72.png') }}">
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('images/favicon/apple-touch-icon-76x76.png') }}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('images/favicon/apple-touch-icon-114x114.png') }}">
        <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('images/favicon/apple-touch-icon-120x120.png') }}">
        <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('images/favicon/apple-touch-icon-144x144.png') }}">
        <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('images/favicon/apple-touch-icon-152x152.png') }}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/favicon/apple-touch-icon-180x180.png') }}">
        <link rel="icon" type="image/png" href="{{ asset('images/favicon/favicon-32x32.png') }}" sizes="32x32">
        <link rel="icon" type="image/png" href="{{ asset('images/favicon/favicon-194x194.png') }}" sizes="194x194">
        <link rel="icon" type="image/png" href="{{ asset('images/favicon/favicon-96x96.png') }}" sizes="96x96">
        <link rel="icon" type="image/png" href="{{ asset('images/favicon/android-chrome-192x192.png') }}" sizes="192x192">
        <link rel="icon" type="image/png" href="{{ asset('images/favicon/favicon-16x16.png') }}" sizes="16x16">
        <link rel="manifest" href="{{ asset('images/favicon/manifest.json') }}">
        <link rel="mask-icon" href="{{ asset('images/favicon/safari-pinned-tab.svg') }}" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="msapplication-TileImage" content="{{ asset('images/favicon/mstile-144x144.png') }}">
        <meta name="theme-color" content="#ffffff">

        {!! HTML::style("css/main.css") !!}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/motion-ui/1.1.1/motion-ui.min.css" />

        
        @yield("specific_css")
        
        {!! HTML::script("js/public-all.js") !!}
        {!! HTML::script("js/resource-all.js") !!}
       
        @yield("specific_js_head")

        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-78892855-1', 'auto');
          ga('send', 'pageview');

        </script>
    </head>
    <body id="body" class="th" draggable="false">  
        @yield("body")

        <div id="loader-wrapper">
            <div id="loader"></div>
         
            <div class="loader-section section-left"></div>
        </div>
        <script>
            $(document).foundation();
        </script>
        @yield("specific_js_body")
    </body>
   
</HTML>

