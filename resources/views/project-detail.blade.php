@extends('layouts.app')
@section('content')
<section class="uni-banner">
    <div class="container">
        <div class="uni-banner-text-area">
            <h1>Project Details</h1>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li>Project Details</li>
            </ul>
        </div>
    </div>
</section>


<section class="project-details ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="details-text-area">
                    <h3 class="mt-0">Find Doctors And Medical Facilities</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamc laboris nisi ut aliquip commodo consequat. Duis
                        aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur commodo.</p>
                    <img class="details-main-img" src="assets/images/inner-images/pd1.jpg" alt="image">
                    <h3>Health Benefits For Veterans</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamc laboris nisi ut aliquip commodo consequat. Duis
                        aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur commodo.</p>
                    <div class="details-img-area mt-15">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-30">
                                <img src="assets/images/inner-images/pd2.jpg" alt="image">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-30">
                                <img src="assets/images/inner-images/pd3.jpg" alt="image">
                            </div>
                        </div>
                    </div>
                    <h3 class="mt-0">Help With Prescription Drug Costs</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamc laboris nisi ut aliquip commodo consequat. Duis
                        aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur commodo.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="sidebar-area pl-20 pt-30">
                    <div class="sidebar-card search-box">
                        <form>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search Here.." required>
                                <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                    <div class="sidebar-card sidebar-category mt-30">
                        <h3>Categories</h3>
                        <ul>
                            <li><a href="blog-details.html"><i class="fas fa-angle-right"></i> Adveresting
                                    Permits</a></li>
                            <li><a href="blog-details.html"><i class="fas fa-angle-right"></i> Animal Health And
                                    Welfare</a></li>
                            <li><a href="blog-details.html"><i class="fas fa-angle-right"></i> Animal Health And
                                    Welfare</a></li>
                            <li><a href="blog-details.html"><i class="fas fa-angle-right"></i> Drainage Services</a>
                            </li>
                            <li><a href="blog-details.html"><i class="fas fa-angle-right"></i> Enviromental
                                    Services</a></li>
                            <li><a href="blog-details.html"><i class="fas fa-angle-right"></i> Survey Services</a>
                            </li>
                        </ul>
                    </div>
                    <div class="sidebar-card recent-news mt-30">
                        <h3>Popular Posts</h3>
                        <div class="recent-news-card">
                            <a href="blog-details.html"><img src="assets/images/inner-images/bds1.jpg" alt="image"></a>
                            <h5><a href="blog-details.html">Responds To Citizenship Advices</a></h5>
                            <p>1st Sep 2024</p>
                        </div>
                        <div class="recent-news-card">
                            <a href="blog-details.html"><img src="assets/images/inner-images/bds2.jpg" alt="image"></a>
                            <h5><a href="blog-details.html">Housing Advisers Program For Beginner</a></h5>
                            <p>4th Sep 2024</p>
                        </div>
                        <div class="recent-news-card">
                            <a href="blog-details.html"><img src="assets/images/inner-images/bds3.jpg" alt="image"></a>
                            <h5><a href="blog-details.html">Responds To a National Reports</a></h5>
                            <p>2nd Sep 2024</p>
                        </div>
                    </div>
                    <div class="sidebar-card sidebar-tag mt-30">
                        <h3>Popular Tags</h3>
                        <ul>
                            <li><a href="{{ route('home.category.show') }}">Councillor</a></li>
                            <li><a href="{{ route('home.category.show') }}">Culture</a></li>
                            <li><a href="{{ route('home.category.show') }}">Business</a></li>
                            <li><a href="{{ route('home.category.show') }}">Citizen</a></li>
                            <li><a href="{{ route('home.category.show') }}">Program</a></li>
                            <li><a href="{{ route('home.category.show') }}">Support</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
