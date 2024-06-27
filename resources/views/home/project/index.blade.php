@extends('layouts.app')
@section('title', 'Projeler')
@section('content')
<x-content.banner title="Projeler" main="Anasayfa" sub="Projeler" :href="route('home.index')" />

<section class="project pt-70 pb-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="service-card-4">
                    <img src="assets/images/service/s6.jpg" alt="image">
                    <div class="service-card-4-text">
                        <span>Government</span>
                        <h5><a href="{{ route('service.show') }}">Building & Licenses</a></h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="service-card-4">
                    <img src="assets/images/service/s5.jpg" alt="image">
                    <div class="service-card-4-text">
                        <span>Government</span>
                        <h5><a href="{{ route('service.show') }}">Water Supply</a></h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                <div class="service-card-4">
                    <img src="assets/images/service/s8.jpg" alt="image">
                    <div class="service-card-4-text">
                        <span>Government</span>
                        <h5><a href="{{ route('service.show') }}">Buildings</a></h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                <div class="service-card-4">
                    <img src="assets/images/service/s9.jpg" alt="image">
                    <div class="service-card-4-text">
                        <span>Government</span>
                        <h5><a href="{{ route('service.show') }}">City</a></h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                <div class="service-card-4">
                    <img src="assets/images/service/s10.jpg" alt="image">
                    <div class="service-card-4-text">
                        <span>Government</span>
                        <h5><a href="{{ route('service.show') }}">Old Town</a></h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                <div class="service-card-4">
                    <img src="assets/images/service/s11.jpg" alt="image">
                    <div class="service-card-4-text">
                        <span>Government</span>
                        <h5><a href="{{ route('service.show') }}">Clean City</a></h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="paginations mt-30">
            <ul>
                <li><a class="active" href="{{ route('project.index') }}">1</a></li>
                <li><a href="{{ route('project.index') }}">2</a></li>
                <li><a href="{{ route('project.index') }}">3</a></li>
                <li><a href="{{ route('project.index') }}"><i class="fas fa-chevron-right"></i></a></li>
            </ul>
        </div>
    </div>
</section>
@endsection
