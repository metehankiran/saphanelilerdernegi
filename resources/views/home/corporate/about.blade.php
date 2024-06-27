@extends('layouts.app')
@section('content')
<section class="uni-banner">
    <div class="container">
        <div class="uni-banner-text-area">
            <h1>About Us</h1>
            <ul>
                <li><a href="{{ route('home.index') }}">Home</a></li>
                <li>About Us</li>
            </ul>
        </div>
    </div>
</section>


<section class="about pt-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="about-img">
                    <img class="a-img-1" src="{{ asset('assets') }}/images/about/a1.jpg" alt="image">
                    <img class="a-img-2" src="{{ asset('assets') }}/images/about/a2.jpg" alt="image">
                    <img class="a-img-3" src="{{ asset('assets') }}/images/about/a3.jpg" alt="image">
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="why-we-text-area about-text-area-2">
                    <div class="default-section-title">
                        <span>WHO WE ARE</span>
                        <h3>Medzo Is An Inner Metropolitan Municipality Service</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <div class="why-we-text-list">
                        <i class="flaticon-government-building"></i>
                        <h4>Our Role Is To:</h4>
                        <p>Nulla porttitor accumsan tincidunt lorem ipsum dolor sit amet consectetur adipiscing elit praesent sapien massa convallis.</p>
                        <ul>
                            <li>Praesent sapien massa, convallis a pellentesque nec.</li>
                            <li>Nulla porttitor accumsan tincidunt.</li>
                            <li>Ivamus suscipit tortor eget felis porttitor volutpat.</li>
                            <li>Donec rutrum congue leo eget malesuada.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="fun-facts pt-70 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                <div class="fun-facts-card fun-facts-card-2">
                    <i class="flaticon-smart-city"></i>
                    <h2><span class="odometer" data-count="46712">00</span></h2>
                    <p>People In The City</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                <div class="fun-facts-card fun-facts-card-2">
                    <i class="flaticon-location-1"></i>
                    <h2>
                        <span class="odometer" data-count="22">00</span>
                        <span class="icon">K</span>
                    </h2>
                    <p>Square Of City</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                <div class="fun-facts-card fun-facts-card-2">
                    <i class="flaticon-park-1"></i>
                    <h2>
                        <span class="odometer" data-count="300">00</span>
                        <span class="icon">+</span>
                    </h2>
                    <p>Year Of Foundation</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                <div class="fun-facts-card last-card fun-facts-card-2">
                    <i class="flaticon-award"></i>
                    <h2>
                        <span class="odometer" data-count="1000">00</span>
                        <span class="icon">+</span>
                    </h2>
                    <p>Successful Programs</p>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="service-4 ptb-100">
    <div class="container">
        <div class="default-section-title default-section-title-middle">
            <h3>Find Government Services</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua quis ipsum suspendisse</p>
        </div>
        <div class="section-content">
            <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="service-card">
                        <div class="service-card-img">
                            <a href="{{ route('service.show') }}"><img src="{{ asset('assets') }}/images/service/s1.jpg" alt="image"></a>
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
                            <a href="{{ route('service.show') }}"><img src="{{ asset('assets') }}/images/service/s2.jpg" alt="image"></a>
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
                            <a href="{{ route('service.show') }}"><img src="{{ asset('assets') }}/images/service/s3.jpg" alt="image"></a>
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
                            <a href="{{ route('service.show') }}"><img src="{{ asset('assets') }}/images/service/s5.jpg" alt="image"></a>
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
                            <a href="{{ route('service.show') }}"><img src="{{ asset('assets') }}/images/service/s6.jpg" alt="image"></a>
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
                            <a href="{{ route('service.show') }}"><img src="{{ asset('assets') }}/images/service/s7.jpg" alt="image"></a>
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
        </div>
    </div>
</section>


<section class="explore explore-2 ptb-100">
    <div class="container">
        <div class="default-section-title default-section-title-middle mt-10">
            <h3>Explore City Events</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua quis ipsum suspendisse</p>
        </div>
        <div class="section-content">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="about-img">
                        <img class="a-img-1" src="{{ asset('assets') }}/images/about/a4.jpg" alt="image">
                        <img class="a-img-2" src="{{ asset('assets') }}/images/about/a5.jpg" alt="image">
                        <img class="a-img-3" src="{{ asset('assets') }}/images/about/a6.jpg" alt="image">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="why-we-text-area about-text-area-2">
                        <div class="default-section-title">
                            <h3>Plan A Great City That Provides The Essence Of Success</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                        <div class="why-we-text-list">
                            <i class="flaticon-government"></i>
                            <h4>Sustainable Innovation Is Our Pathway:</h4>
                            <p>Nulla porttitor accumsan tincidunt lorem ipsum dolor sit amet consectetur adipiscing elit praesent sapien massa convallis.</p>
                            <ul>
                                <li>Praesent sapien massa, convallis a pellentesque nec.</li>
                                <li>Nulla porttitor accumsan tincidunt.</li>
                                <li>Ivamus suscipit tortor eget felis porttitor volutpat.</li>
                                <li>Donec rutrum congue leo eget malesuada.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="team ptb-100 bg-f9fbfe">
    <div class="container">
        <div class="default-section-title default-section-title-middle">
            <h3>Our City Counselor</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua quis ipsum suspendisse</p>
        </div>
        <div class="section-content">
            <div class="row justify-content-center">
                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="team-card">
                        <div class="team-card-img">
                            <img src="{{ asset('assets') }}/images/team/t1.jpg" alt="image">
                            <div class="team-social-icons">
                                <ul>
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
                        <div class="team-card-text">
                            <h4>Mila Wilson</h4>
                            <p>City Secratery</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="team-card">
                        <div class="team-card-img">
                            <img src="{{ asset('assets') }}/images/team/t2.jpg" alt="image">
                            <div class="team-social-icons">
                                <ul>
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
                        <div class="team-card-text">
                            <h4>Bren Stork</h4>
                            <p>Counsil President</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="team-card">
                        <div class="team-card-img">
                            <img src="{{ asset('assets') }}/images/team/t3.jpg" alt="image">
                            <div class="team-social-icons">
                                <ul>
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
                        <div class="team-card-text">
                            <h4>Mukesh Sarkar</h4>
                            <p>City Mayor</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="team-card">
                        <div class="team-card-img">
                            <img src="{{ asset('assets') }}/images/team/t4.jpg" alt="image">
                            <div class="team-social-icons">
                                <ul>
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
                        <div class="team-card-text">
                            <h4>David Jon</h4>
                            <p>Assistant Mayor</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
