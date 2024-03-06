<!DOCTYPE html>
<!-- Template Name: DashCode - HTML, React, Vue, Tailwind Admin Dashboard Template Author: Codeshaper Website: https://codeshaper.net Contact: support@codeshaperbd.net Like: https://www.facebook.com/Codeshaperbd Purchase: https://themeforest.net/item/dashcode-admin-dashboard-template/42600453 License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project. -->
<html lang="zxx" dir="ltr" class="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <title>Menu</title>
    <link rel="icon" type="image/png" href="{{asset('public/sites/assets/images/logo/port.png')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" href="{{asset('public/sites/assets/css/rt-plugins.css')}}">
    <link rel="stylesheet" href="{{asset('public/sites/assets/css/app.css')}}">
    <link rel="stylesheet" href="{{asset('public/sites/assets/css/datatable.min.css')}}">
    <!-- End : Theme CSS-->
    <script src="{{asset('public/sites/assets/js/settings.js')}}" sync></script>
</head>

<body class=" font-inter dashcode-app" id="body_class">

    @yield('content')
    <!-- scripts -->
    <script src="{{asset('public/sites/assets/js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('public/sites/assets/js/rt-plugins.js')}}"></script>
    <script src="{{asset('public/sites/assets/js/app.js')}}"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>
    <script src="{{asset('public/sites/assets/js/datatable.min.js')}}"></script>
    @yield('script')
</body>

</html>