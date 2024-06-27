@extends('layouts.app')
@section('content')
<section class="uni-banner">
    <div class="container">
        <div class="uni-banner-text-area">
            <h1>Our Services</h1>
            <ul>
                <li><a href="{{ route('home.index') }}">Home</a></li>
                <li>Services</li>
            </ul>
        </div>
    </div>
</section>


<section class="service pt-70 pb-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="service-card">
                    <div class="service-card-img">
                        <a href="{{ route('service.show') }}"><img src="assets/images/service/s1.jpg" alt="image"></a>
                        <i class="flaticon-balance"></i>
                    </div>
                    <div class="service-card-text">
                        <h4><a href="{{ route('service.show') }}">Salty And The Law</a></h4>
                        <p>Lorem ipsum dolor amet magna set dolor sit amet consectetur adipiscing do elite labore.
                        </p>
                        <a class="read-more-btn" href="{{ route('service.show') }}">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="service-card">
                    <div class="service-card-img">
                        <a href="{{ route('service.show') }}"><img src="assets/images/service/s2.jpg" alt="image"></a>
                        <i class="flaticon-delivery"></i>
                    </div>
                    <div class="service-card-text">
                        <h4><a href="{{ route('service.show') }}">Travel & Immigration</a></h4>
                        <p>Lorem ipsum dolor amet magna set dolor sit amet consectetur adipiscing do elite labore.
                        </p>
                        <a class="read-more-btn" href="{{ route('service.show') }}">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="service-card">
                    <div class="service-card-img">
                        <a href="{{ route('service.show') }}"><img src="assets/images/service/s3.jpg" alt="image"></a>
                        <i class="flaticon-portfolio"></i>
                    </div>
                    <div class="service-card-text">
                        <h4><a href="{{ route('service.show') }}">Business Services</a></h4>
                        <p>Lorem ipsum dolor amet magna set dolor sit amet consectetur adipiscing do elite labore.
                        </p>
                        <a class="read-more-btn" href="{{ route('service.show') }}">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="service-card">
                    <div class="service-card-img">
                        <a href="{{ route('service.show') }}"><img src="assets/images/service/s5.jpg" alt="image"></a>
                        <i class="flaticon-process"></i>
                    </div>
                    <div class="service-card-text">
                        <h4><a href="{{ route('service.show') }}">Water Supply</a></h4>
                        <p>Lorem ipsum dolor amet magna set dolor sit amet consectetur adipiscing do elite labore.
                        </p>
                        <a class="read-more-btn" href="{{ route('service.show') }}">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="service-card">
                    <div class="service-card-img">
                        <a href="{{ route('service.show') }}"><img src="assets/images/service/s6.jpg" alt="image"></a>
                        <i class="flaticon-refuse"></i>
                    </div>
                    <div class="service-card-text">
                        <h4><a href="{{ route('service.show') }}">Refuse Removal</a></h4>
                        <p>Lorem ipsum dolor amet magna set dolor sit amet consectetur adipiscing do elite labore.
                        </p>
                        <a class="read-more-btn" href="{{ route('service.show') }}">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="service-card">
                    <div class="service-card-img">
                        <a href="{{ route('service.show') }}"><img src="assets/images/service/s7.jpg" alt="image"></a>
                        <i class="flaticon-lightning"></i>
                    </div>
                    <div class="service-card-text">
                        <h4><a href="{{ route('service.show') }}">Electricity Supply</a></h4>
                        <p>Lorem ipsum dolor amet magna set dolor sit amet consectetur adipiscing do elite labore.
                        </p>
                        <a class="read-more-btn" href="{{ route('service.show') }}">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="paginations mt-30">
            <ul>
                <li><a class="active" href="{{ route('service.index') }}">1</a></li>
                <li><a href="{{ route('service.index') }}">2</a></li>
                <li><a href="{{ route('service.index') }}">3</a></li>
                <li><a href="{{ route('service.index') }}"><i class="fas fa-chevron-right"></i></a></li>
            </ul>
        </div>
    </div>
</section>
@endsection

