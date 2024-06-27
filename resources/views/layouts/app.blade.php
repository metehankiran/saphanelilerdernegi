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

    <title>Medzo - Municipal & Government Services HTML Template</title>
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
                        <li><a class="default-button" href="{{ route('home.contact') }}">Get A Quote <i
                                    class="fas fa-angle-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="main-nav plr-100">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="{{ route('home.index') }}">
                        <img src="{{ asset('assets') }}/images/logo.png" alt="logo" />
                    </a>
                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item"><a href="{{ route('home.index') }}" class="nav-link">Anasayfa</a></li>
                            <li class="nav-item">
                                <a href="index-3.html#" class="nav-link dropdown-toggle">Projeler</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a href="{{ route('home.project') }}" class="nav-link">Our Projeler</a></li>
                                    <li class="nav-item"><a href="{{ route('home.project.show') }}" class="nav-link">Project
                                            Details</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="index-3.html#" class="nav-link dropdown-toggle">Services</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a href="{{ route('home.service') }}" class="nav-link">Our Services</a></li>
                                    <li class="nav-item"><a href="{{ route('home.service.show') }}" class="nav-link">Service
                                            Details</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="index-3.html#" class="nav-link dropdown-toggle">Pages </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a href="{{ route('home.about') }}" class="nav-link">About Us</a></li>
                                    <li class="nav-item"><a href="{{ route('home.faq') }}" class="nav-link">FAQ</a></li>
                                    <li class="nav-item"><a href="{{ route('home.founders') }}" class="nav-link">Our
                                            Councillors</a></li>
                                    <li class="nav-item"><a href="{{ route('home.events') }}" class="nav-link">Our Events</a></li>
                                    <li class="nav-item"><a href="{{ route('home.events.show') }}" class="nav-link">Event
                                            Details</a></li>
                                    <li class="nav-item"><a href="{{ route('home.category.show') }}" class="nav-link">Categories</a></li>
                                    <li class="nav-item"><a href="{{ route('home.authentications') }}" class="nav-link">My
                                            Account</a></li>
                                    <li class="nav-item"><a href="{{ route('home.testimonials') }}" class="nav-link">Testimonials</a>
                                    </li>
                                    <li class="nav-item"><a href="{{ route('home.notFound') }}" class="nav-link">404 Error Page</a>
                                    </li>
                                    <li class="nav-item"><a href="{{ route('home.privacyPolicy') }}" class="nav-link">Privacy Policy</a>
                                    </li>
                                    <li class="nav-item"><a href="{{ route('home.termsAndConditions') }}" class="nav-link">Terms & Conditions</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="index-3.html#" class="nav-link dropdown-toggle">Blog </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a href="blog.html" class="nav-link">Blog Grid</a></li>
                                    <li class="nav-item"><a href="blog-left-sidebar.html" class="nav-link">Blog Left
                                            Sidebar</a></li>
                                    <li class="nav-item"><a href="blog-right-sidebar.html" class="nav-link">Blog
                                            Right Sidebar</a></li>
                                    <li class="nav-item"><a href="blog-details.html" class="nav-link">Blog
                                            Details</a></li>
                                    <li class="nav-item"><a href="posted-by.html" class="nav-link">Blog Post</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a href="{{ route('home.contact') }}" class="nav-link">İletişim</a></li>
                        </ul>
                        <div class="menu-sidebar">
                            <ul>
                                <li><button class="popup-button"><i class="fas fa-search"></i></button></li>
                                <li><a class="default-button" href="{{ route('home.contact') }}">Get in Touch</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>

    @yield('content')

    <section class="footer">
        <div class="container">
            <div class="footer-content ptb-100">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="footer-logo-area">
                            <a href="{{ route('home.index') }}"><img src="{{ asset('assets') }}/images/white-logo.png" alt="image"></a>
                            <p>Lorem ipsum dolor sit amet, consec tetur adipiscing elit tempor incididunt labore dolore
                                magna aliqua consec tetur adipiscing elite sed do labor.</p>
                            <div class="footer-social-area">
                                <ul>
                                    <li><span>Follow Us: </span></li>
                                    <li><a href="https://www.facebook.com/" target="_blank"><i
                                                class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="https://www.linkedin.com/" target="_blank"><i
                                                class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="https://twitter.com/" target="_blank"><i
                                                class="fab fa-twitter"></i></a></li>
                                    <li><a href="https://www.instagram.com/" target="_blank"><i
                                                class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="footer-links footer-contact">
                            <h3>Get In Touch</h3>
                            <div class="footer-contact-card">
                                <i class="fas fa-map-marker-alt"></i>
                                <h5>Location: </h5>
                                <p><a href="https://goo.gl/maps/bc3qza49szqGNZt86" target="_blank">2976 sunrise road
                                        las vegas</a></p>
                            </div>
                            <div class="footer-contact-card">
                                <i class="fas fa-envelope"></i>
                                <h5>Email: </h5>
                                <p><a
                                        href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#2f474a4343406f424a4b5540014c4042"><span
                                            class="__cf_email__"
                                            data-cfemail="9ff7faf3f3f0dff2fafbe5f0b1fcf0f2">[email&#160;protected]</span></a>
                                </p>
                            </div>
                            <div class="footer-contact-card">
                                <i class="fas fa-phone-alt"></i>
                                <h5>Location: </h5>
                                <p><a href="tel:+13454567877">+1-3454-5678-77</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="footer-links footer-quick-links">
                            <h3>Quick Links</h3>
                            <ul>
                                <li><i class="fas fa-angle-right"></i> <a href="{{ route('home.service.show') }}">Government Service</a>
                                </li>
                                <li><i class="fas fa-angle-right"></i> <a
                                        href="https://templates.hibootstrap.com/medzo/default/tetrms.html">Terms &
                                        Conditions</a></li>
                                <li><i class="fas fa-angle-right"></i> <a href="{{ route('home.privacyPolicy') }}">Privacy Policies</a>
                                </li>
                                <li><i class="fas fa-angle-right"></i> <a href="{{ route('home.privacyPolicy') }}">Accessibilty</a></li>
                                <li><i class="fas fa-angle-right"></i> <a href="{{ route('home.events') }}">Recent Events</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="footer-links footer-newsletter">
                            <h3>Subscribe</h3>
                            <p>Subscribe To Our Newsletter To Get Our Update News!</p>
                            <form class="newsletter-form" data-toggle="validator">
                                <input type="email" class="input-newsletter form-control" placeholder="Your Email"
                                    name="EMAIL" required autocomplete="off">
                                <button class="default-button news-btn">Subscribe Now</button>
                                <div id="validator-newsletter" class="form-result"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <p>© <strong>Medzo</strong> All Rights Reserved By <a target="_blank"
                        href="https://hibootstrap.com/">HiBootstrap</a></p>
            </div>
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
