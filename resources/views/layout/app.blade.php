<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Real_state || Home</title>
    <link rel="icon" href="img/favicon.png">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}} ">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css')}} ">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css')}} ">
    <link rel="stylesheet" href="{{ asset('assets/css/themify-icons.css')}} ">
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css')}} ">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css')}} ">
    <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/all.min.css')}} ">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}} ">
</head>

<body>
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    @include('layout.navbar')
                </div>
            </div>
        </div>
    </header>


    @include('layout.footer')

    <script src="{{asset('assets/js/jquery-1.12.1.min.js')}}"></script>
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.magnific-popup.js')}}"></script>
    <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.easing.min.js')}}"></script>
    <script src="{{asset('assets/js/custom.js')}}"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
    <script defer
        src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015"
        integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ=="
        data-cf-beacon='{"rayId":"8a51a64a4b231c0c","serverTiming":{"name":{"cfL4":true}},"version":"2024.7.0","token":"cd0b4b3a733644fc843ef0b185f98241"}'
        crossorigin="anonymous"></script>
</body>

</html>
