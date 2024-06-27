@extends('layouts.app')
@section('content')
<section class="uni-banner">
    <div class="container">
        <div class="uni-banner-text-area">
            <h1>Our Events</h1>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li>Our Events</li>
            </ul>
        </div>
    </div>
</section>


<section class="events pt-70 pb-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="events-card">
                    <img src="assets/images/events/e1.jpg" alt="image">
                    <div class="events-card-text">
                        <ul>
                            <li>Conference</li>
                            <li>Oct 12, 2024</li>
                        </ul>
                        <h4><a href="{{ route('home.events.show') }}">Annual Conference 2024</a></h4>
                        <p><i class="fas fa-map-marker-alt"></i> <a href="https://goo.gl/maps/QTg39qSWoB5fdndT7">At
                                City Center, 27 Division Street, USA</a></p>
                        <a class="read-more-btn" href="{{ route('home.events.show') }}">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="events-card">
                    <img src="assets/images/events/e2.jpg" alt="image">
                    <div class="events-card-text">
                        <ul>
                            <li>Conference</li>
                            <li>Apr 13, 2024</li>
                        </ul>
                        <h4><a href="{{ route('home.events.show') }}">Negotiation In Government</a></h4>
                        <p><i class="fas fa-map-marker-alt"></i> <a href="https://goo.gl/maps/QTg39qSWoB5fdndT7">At
                                City Center, 27 Division Street, USA</a></p>
                        <a class="read-more-btn" href="{{ route('home.events.show') }}">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="events-card">
                    <img src="assets/images/events/e3.jpg" alt="image">
                    <div class="events-card-text">
                        <ul>
                            <li>Conference</li>
                            <li>Apr 14, 2024</li>
                        </ul>
                        <h4><a href="{{ route('home.events.show') }}">Annual Health Conference</a></h4>
                        <p><i class="fas fa-map-marker-alt"></i> <a href="https://goo.gl/maps/QTg39qSWoB5fdndT7">At
                                City Center, 27 Division Street, USA</a></p>
                        <a class="read-more-btn" href="{{ route('home.events.show') }}">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="events-card">
                    <img src="assets/images/events/e4.jpg" alt="image">
                    <div class="events-card-text">
                        <ul>
                            <li>Conference</li>
                            <li>Apr 15, 2024</li>
                        </ul>
                        <h4><a href="{{ route('home.events.show') }}">Commercial Governance</a></h4>
                        <p><i class="fas fa-map-marker-alt"></i> <a href="https://goo.gl/maps/QTg39qSWoB5fdndT7">At
                                City Center, 27 Division Street, USA</a></p>
                        <a class="read-more-btn" href="{{ route('home.events.show') }}">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="events-card">
                    <img src="assets/images/events/e5.jpg" alt="image">
                    <div class="events-card-text">
                        <ul>
                            <li>Conference</li>
                            <li>Oct 16, 2024</li>
                        </ul>
                        <h4><a href="{{ route('home.events.show') }}">Annual Fire Conference</a></h4>
                        <p><i class="fas fa-map-marker-alt"></i> <a href="https://goo.gl/maps/QTg39qSWoB5fdndT7">At
                                City Center, 27 Division Street, USA</a></p>
                        <a class="read-more-btn" href="{{ route('home.events.show') }}">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="events-card">
                    <img src="assets/images/events/e6.jpg" alt="image">
                    <div class="events-card-text">
                        <ul>
                            <li>Conference</li>
                            <li>Apr 17, 2024</li>
                        </ul>
                        <h4><a href="{{ route('home.events.show') }}">Commercial Business Plan</a></h4>
                        <p><i class="fas fa-map-marker-alt"></i> <a href="https://goo.gl/maps/QTg39qSWoB5fdndT7">At
                                City Center, 27 Division Street, USA</a></p>
                        <a class="read-more-btn" href="{{ route('home.events.show') }}">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="paginations mt-30">
            <ul>
                <li><a class="active" href="{{ route('home.events') }}">1</a></li>
                <li><a href="{{ route('home.events') }}">2</a></li>
                <li><a href="{{ route('home.events') }}">3</a></li>
                <li><a href="{{ route('home.events') }}"><i class="fas fa-chevron-right"></i></a></li>
            </ul>
        </div>
    </div>
</section>
@endsection
