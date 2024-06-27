<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ asset('assets') }}/css/animate.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/fontawsome.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/fonts/flaticon.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/meanmenu.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/nice-select.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/magnific-popup.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/jquery-ui.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/odometer.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/style.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/responsive.css">

    <title>@yield('title') - Şaphaneliler Derneği</title>
    <link rel="icon" type="image/png" href="{{ asset('assets') }}/images/fav-icon.png">
</head>

<body>

    <div class="navbar-area">

        <div class="main-responsive-nav">
            <div class="container-fluid plr-100">
                <div class="mobile-nav">
                    <a href="{{ route('home.index') }}" class="logo"><img src="{{ asset('assets') }}/images/small-logo.png" alt="logo" /></a>
                    <ul class="menu-sidebar menu-small-device">
                        <li><button class="popup-button"><i class="fas fa-search"></i></button></li>
                        <li><a class="default-button" href="{{ route('contact.index') }}">Get A Quote <i
                                    class="fas fa-angle-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>

        @include('layouts.navbar')
    </div>

    @yield('content')

    <section class="footer">
        <div class="container">
            @include('layouts.footer.content')
            @include('layouts.footer.copyright')
        </div>
    </section>


    <div class="popup">
        <div class="popup-content">
            <button class="close-btn" id="popup-close"><i class="fas fa-times"></i></button>
            <form>
                <div class="input-group search-box">
                    <input type="text" class="form-control" placeholder="Search">
                    <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                </div>
            </form>
        </div>
    </div>


    <div class="go-top">
        <i class="fas fa-chevron-up"></i>
    </div>


    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{ asset('assets') }}/js/jquery.min.js"></script>
    <script src="{{ asset('assets') }}/js/jquery-ui.min.js"></script>
    <script src="{{ asset('assets') }}/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets') }}/js/meanmenu.js"></script>
    <script src="{{ asset('assets') }}/js/owl.carousel.min.js"></script>
    <script src="{{ asset('assets') }}/js/magnific-popup.min.js"></script>
    <script src="{{ asset('assets') }}/js/TweenMax.js"></script>
    <script src="{{ asset('assets') }}/js/nice-select.min.js"></script>
    <script src="{{ asset('assets') }}/js/form-validator.min.js"></script>
    <script src="{{ asset('assets') }}/js/contact-form-script.js"></script>
    <script src="{{ asset('assets') }}/js/ajaxchimp.min.js"></script>
    <script src="{{ asset('assets') }}/js/owl.carousel2.thumbs.min.js"></script>
    <script src="{{ asset('assets') }}/js/appear.min.js"></script>
    <script src="{{ asset('assets') }}/js/odometer.min.js"></script>
    <script src="{{ asset('assets') }}/js/custom.js"></script>
</body>

</html>
