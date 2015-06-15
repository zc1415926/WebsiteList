<!DOCTYPE html>
<html lang="en-gb" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UIkit</title>
    <link rel="shortcut icon" href="docs/images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon-precomposed" href="docs/images/apple-touch-icon.png">
    <link id="data-uikit-theme" rel="stylesheet" href="../css/uikit.docs.min.css"/>
    <link rel="stylesheet" href="../css/docs.css"/>


</head>

<body class="tm-background">

@include('layouts.partials.nav')

<div class="tm-section tm-section-color-1 tm-section-colored">
    <div class="uk-container uk-container-center uk-text-center">
        @yield('content')

    </div>
</div>

@include('layouts.partials.footer')
@include('layouts.partials.offcanvas')

<script src="http://cdn.bootcss.com/jquery/2.1.4/jquery.min.js"></script>
<script src="../js/docs.js"></script>
<script src="http://cdn.bootcss.com/uikit/2.21.0/js/uikit.min.js"></script>

</body>
</html>
