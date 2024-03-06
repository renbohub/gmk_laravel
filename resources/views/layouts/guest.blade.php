<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="utf-8" />
    <title>HUD | Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <!-- ================== BEGIN core-css ================== -->
    <link href="{{asset('public/sites/css/vendor.min.css')}}" rel="stylesheet" />
    <link href="{{asset('public/sites/css/app.min.css')}}" rel="stylesheet" />
    <!-- ================== END core-css ================== -->

</head>

<body class='pace-top'>
    <!-- BEGIN #app -->
    <div id="app" class="app app-full-height app-without-header">
      @yield('content')
      <a href="#" data-toggle="scroll-to-top" class="btn-scroll-top fade"><i class="fa fa-arrow-up"></i></a>
      <!-- END btn-scroll-top -->
      </div>
      <!-- END #app -->
     
      <!-- ================== BEGIN core-js ================== -->
      <script src="{{asset('public/sites/js/vendor.min.js')}}"></script>
      <script src="{{asset('public/sites/js/app.min.js')}}"></script>
      <!-- ================== END core-js ================== -->
     
      <!-- ================== BEGIN page-js ================== -->
      <script src="{{asset('public/sites/plugins/@highlightjs/cdn-assets/highlight.min.js')}}"></script>
      <script src="{{asset('public/sites/js/demo/highlightjs.demo.js')}}"></script>
      <!-- ================== END page-js ================== -->
     
     
      <script>
     (function(i, s, o, g, r, a, m) {
         i['GoogleAnalyticsObject'] = r;
         i[r] = i[r] || function() {
             (i[r].q = i[r].q || []).push(arguments)
         }, i[r].l = 1 * new Date();
         a = s.createElement(o),
             m = s.getElementsByTagName(o)[0];
         a.async = 1;
         a.src = g;
         m.parentNode.insertBefore(a, m)
     })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
     
     ga('create', 'UA-53034621-1', 'auto');
     ga('send', 'pageview');
      </script>
      </body>
     
      </html>
    