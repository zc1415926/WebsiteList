<!DOCTYPE html>
<html lang="en-gb" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="_token" content="{{ csrf_token() }}">
    <title>WebsiteList</title>
    <link rel="shortcut icon" href="docs/images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon-precomposed" href="docs/images/apple-touch-icon.png">
    <link id="data-uikit-theme" rel="stylesheet" href="../css/uikit.docs.min.css"/>
    <link rel="stylesheet" href="../css/docs.css"/>
    <link rel="stylesheet" href="../css/zc.docs.css"/>

    <script src="http://cdn.bootcss.com/jquery/2.1.4/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/uikit/2.21.0/js/uikit.min.js"></script>
    <script src="../js/docs.js"></script>
    <script src="//cdn.bootcss.com/uikit/2.21.0/js/components/sortable.min.js"></script>
    <script src="http://cdn.bootcss.com/jquery-validate/1.13.1/jquery.validate.min.js"></script>
    <script src="../js/components/notify_dialog.js"></script>
    <script src="//cdn.bootcss.com/uikit/2.21.0/js/components/notify.min.js"></script>
</head>

<body class="tm-background">

@include('layouts.partials.nav')
@include('flash::message')
<div class="tm-section tm-section-color-1 tm-section-colored">
    <div class="uk-container uk-container-center uk-text-center">

        @yield('content')

    </div>
</div>

@include('layouts.partials.footer')
@include('layouts.partials.offcanvas')

</body>
</html>
