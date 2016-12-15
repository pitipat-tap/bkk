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

        @yield("specific_meta") 
        
    
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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/motion-ui/1.1.1/motion-ui.min.css">

        
        @yield("specific_css")
        
        {!! HTML::script("js/jquery.min.js") !!}
        {!! HTML::script("js/modernizr/modernizr.js") !!}
        {!! HTML::script("js/foundation.min.js") !!}
        {!! HTML::script("js/angular.min.js") !!}
        {!! HTML::script("js/isMobile.min.js") !!}
        {!! HTML::script("js/verge.min.js") !!}
        {!! HTML::script("js/main.js") !!}
       

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
<<<<<<< HEAD
    <body id="body" class="th" draggable="false"style="">  
=======
    <body id="body" class="th" draggable="false">  
>>>>>>> d9ba5b68307f952a15c3ef463652cc502a3efddb

        <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.7";
          //js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

        <script>
            $(document).ready(function(){
		if(sessionStorage.getItem('dad') != '1'){
			$("#dad-open").trigger( "click" );
			sessionStorage.setItem('dad', '1');
		}
            });
        </script>
        <a data-open="dad" style="display:none" id="dad-open">Click me for a modal</a>
        <div class="large reveal" id="dad" data-reveal>
          {!! HTML::image("images/dad_1920x1080.jpg","",array("id"=>"","class"=>"show-for-landscape")) !!}
          {!! HTML::image("images/dad_600x800.jpg","",array("id"=>"","class"=>"show-for-portrait")) !!}
            <button class="close-button" data-close aria-label="Close modal" type="button">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>
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

