@extends('layouts.app')
@section('content')


<section class="uni-banner">
    <div class="container">
        <div class="uni-banner-text-area">
            <h1>Our Projects</h1>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li>Projects</li>
            </ul>
        </div>
    </div>
</section>


<section class="project pt-70 pb-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="service-card-4">
                    <img src="assets/images/service/s6.jpg" alt="image">
                    <div class="service-card-4-text">
                        <span>Government</span>
                        <h5><a href="{{ route('home.service.show') }}">Building & Licenses</a></h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="service-card-4">
                    <img src="assets/images/service/s5.jpg" alt="image">
                    <div class="service-card-4-text">
                        <span>Government</span>
                        <h5><a href="{{ route('home.service.show') }}">Water Supply</a></h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                <div class="service-card-4">
                    <img src="assets/images/service/s8.jpg" alt="image">
                    <div class="service-card-4-text">
                        <span>Government</span>
                        <h5><a href="{{ route('home.service.show') }}">Buildings</a></h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                <div class="service-card-4">
                    <img src="assets/images/service/s9.jpg" alt="image">
                    <div class="service-card-4-text">
                        <span>Government</span>
                        <h5><a href="{{ route('home.service.show') }}">City</a></h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                <div class="service-card-4">
                    <img src="assets/images/service/s10.jpg" alt="image">
                    <div class="service-card-4-text">
                        <span>Government</span>
                        <h5><a href="{{ route('home.service.show') }}">Old Town</a></h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                <div class="service-card-4">
                    <img src="assets/images/service/s11.jpg" alt="image">
                    <div class="service-card-4-text">
                        <span>Government</span>
                        <h5><a href="{{ route('home.service.show') }}">Clean City</a></h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="paginations mt-30">
            <ul>
                <li><a class="active" href="{{ route('home.project') }}">1</a></li>
                <li><a href="{{ route('home.project') }}">2</a></li>
                <li><a href="{{ route('home.project') }}">3</a></li>
                <li><a href="{{ route('home.project') }}"><i class="fas fa-chevron-right"></i></a></li>
            </ul>
        </div>
    </div>
</section>
@endsection
