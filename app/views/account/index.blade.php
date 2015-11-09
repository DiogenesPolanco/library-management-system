<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <link rel="shortcut icon" href="">
    <link rel="image_src" href="" />
    <link rel="canonical" href="" />

    <title>NSIT Automated Library Management System</title>

    <link type="text/css" href="{{ Config::get('view.bootstrap.css') }}/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" href="{{ Config::get('view.bootstrap.css') }}/bootstrap-responsive.min.css" rel="stylesheet">
    <link type="text/css" href="{{ Config::get('view.css') }}/theme.css" rel="stylesheet">
    <link type="text/css" href="{{ Config::get('view.images') }}/icons/css/font-awesome.css" rel="stylesheet">
    <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>

</head>
<body>

    @include('account.navigation_top')
    @include('account.message')
    @yield('content')
    @include('account.navigation_bottom')

    <script src="{{ Config::get('view.script') }}/jquery-1.9.1.min.js" type="text/javascript"></script>
    <script src="{{ Config::get('view.script') }}/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
    <script src="{{ Config::get('view.bootstrap.js') }}/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>