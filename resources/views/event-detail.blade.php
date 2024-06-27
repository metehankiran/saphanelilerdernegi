@extends('layouts.app')
@section('content')
<section class="uni-banner">
    <div class="container">
        <div class="uni-banner-text-area">
            <h1>Event Details</h1>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li>Event Details</li>
            </ul>
        </div>
    </div>
</section>


<section class="event-details ptb-100">
    <div class="container">
        <div class="details-img-area mb-30">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-12 mt-30">
                    <img src="assets/images/service/s1.jpg" alt="image">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-12 mt-30">
                    <img src="assets/images/service/s2.jpg" alt="image">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <div class="event-details details-text-area">
                    <h3 class="mt-0">Annual Conference 2024</h3>
                    <p>Vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui
                        officia deseru mollitia animi, id est laborum et dolorum fuga</p>
                    <p>Vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui
                        officia deseru mollitia animi, id est laborum et dolorum fuga</p>
                    <div class="details-map-area">
                        <iframe class="d-map" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3024.1836133668685!2d-73.99830468459494!3d40.71397427933169!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sAt%20City%20Center%2C%2027%20Division%20Street%2C%20USA!5e0!3m2!1sen!2sbd!4v1635664796382!5m2!1sen!2sbd"></iframe>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="sidebar-area pl-20 pt-30 events-details-sidebar">
                    <div class="sidebar-card event-info">
                        <h3>Events Information</h3>
                        <p>It is a long established fact that a reader will be distracted the readable content of a page.
                        </p>
                        <div class="event-info-card mt-0">
                            <i class="far fa-calendar-alt"></i>
                            <h5>Events Date:</h5>
                            <span>12 October 2024</span>
                        </div>
                        <div class="event-info-card">
                            <i class="far fa-clock"></i>
                            <h5>Events Time:</h5>
                            <span>08 : 00 am - 04 : 00 pm</span>
                        </div>
                        <div class="event-info-card">
                            <i class="fas fa-map-marker-alt"></i>
                            <h5>Events Location:</h5>
                            <span>18 Quiet Valley Lane, USA</span>
                        </div>
                        <div class="event-info-card">
                            <i class="fas fa-dollar-sign"></i>
                            <h5>Event Cost:</h5>
                            <span>160</span>
                        </div>
                        <div class="event-info-card">
                            <i class="fas fa-phone-alt"></i>
                            <h5>Phone Number:</h5>
                            <span><a href="tel:+021234567894">+02 123 456 7894</a></span>
                        </div>
                        <div class="event-info-card">
                            <i class="fas fa-envelope"></i>
                            <h5>Email Address:</h5>
                            <span><a
                                    href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#dba8aeababb4a9af9bb6bebfa1b4f5b8b4b6"><span
                                        class="__cf_email__"
                                        data-cfemail="11626461617e6365517c74756b643f727e7c">[email&#160;protected]</span></a>
                            </span>
                        </div>
                        <div class="event-info-card">
                            <i class="fas fa-globe"></i>
                            <h5>Website:</h5>
                            <span><a href="index.html">medzu.com</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
