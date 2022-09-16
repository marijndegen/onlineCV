<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="no-js">
<!--https://colorlib.com/wp/template/resume/-->

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="colorlib">
    <!-- Meta Description -->
    <meta name="description" content="The resume of Marijn Degen, a Dutch Web & App programmmer and network manager.">
    <!-- Meta Keyword -->
    <meta name="keywords" content="Marijn Degen, marijndegen, marijndegen.nl, programming, network management, resume, IT, Apps, Web, networks, wifi, internet, php, java, dart, javascript, photoshop, databases, german speaking, english speaking, drivers license, student">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Marijn Degen -- {{ trans('index.siteTitle') }}</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <!-- CSS ============================================= -->
    <link rel="stylesheet" href="/css/linearicons.css">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/magnific-popup.css">
    <link rel="stylesheet" href="/css/owl.carousel.css">
    <link rel="stylesheet" href="/css/main.css">
</head>

<body>

    @yield('content')


    <script src="/js/vendor/jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="/js/vendor/bootstrap.min.js"></script>
    <script src="/js/jquery.ajaxchimp.min.js"></script>
    <script src="/js/jquery.magnific-popup.min.js"></script>
    <script src="/js/parallax.min.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/jquery.sticky.js"></script>

    <script src="/js/main.js"></script>
    <script>
        document.verborgen = true;

        function switchName() {
            if (document.verborgen == true) {
                document.verborgen = false;
                document.getElementById("buttonWithText").innerHTML = "{{ trans('index.hideAllEmployers') }}";
            } else {
                document.verborgen = true;
                document.getElementById("buttonWithText").innerHTML = "{{ trans('index.showAllEmployers') }}";
            }
        }
    </script>
</body>

</html>