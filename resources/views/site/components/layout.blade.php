<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Page Title -->
    <title>Bringer | Digital Agency</title>

    <!-- Google Fonts -->
    <link href="../../css2?family=Inter:wght@400;600&amp;display=swap" rel="stylesheet">
    <!-- Config -->
    <link type="text/css" rel="stylesheet" href="css/config.css">
    <!-- Libraries -->
    <link type="text/css" rel="stylesheet" href="css/libs.css">
    <!-- Template Styles -->
    <link type="text/css" rel="stylesheet" href="css/style.css">
    <!-- Responsive -->
    <link type="text/css" rel="stylesheet" href="css/responsive.css">

    <!-- Favicon -->
    <link rel="icon" href="img/favicon.png" sizes="32x32">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400..900&display=swap" rel="stylesheet">

    <style>
        @media screen and (max-width: 400px) {
            .bringer-page-title{
               font-size: 30px!important;
            }
        }

    </style>
</head>
<body>
<!-- Header -->
@include('site.components.header')

<!-- Page Main -->
<main id="bringer-main">
    @yield('index')
    @yield('portfolio')




</main>
@include('site.components.footer')

<!-- Right Click Protection Block -->
<div class="bringer-rcp-wrap">
    <div class="bringer-rcp-overlay"></div>
    <div class="bringer-rcp-container">
        <h2>The context menu is not allowed on this page.</h2>
    </div>
</div>

<!-- Dynamic Backlight -->
<div class="bringer-backlight"></div>

<!-- JS Scripts -->
<script src="js/lib/jquery.min.js"></script>
<script src="js/lib/libs.js"></script>
<script src="js/contact_form.js"></script>
<script src="js/st-core.js"></script>
<script src="js/classes.js"></script>
<script src="js/main.js"></script>
</body>
</html>
