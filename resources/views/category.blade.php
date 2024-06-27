@extends('layouts.app')
@section('content')
<section class="uni-banner">
    <div class="container">
        <div class="uni-banner-text-area">
            <h1>Post Category</h1>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li>Category</li>
            </ul>
        </div>
    </div>
</section>


<section class="blog-details pt-70 pb-100">
    <div class="container">
        <div class="row ">
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="blog-card">
                    <div class="blog-card-img">
                        <a href="blog-details.html"><img src="assets/images/blog/b1.jpg" alt="image"></a>
                    </div>
                    <div class="blog-card-text-area">
                        <div class="blog-date">
                            <ul>
                                <li><i class="fas fa-user"></i> By <a href="posted-by.html">Admin</a></li>
                                <li><i class="far fa-comments"></i> No Comment</li>
                                <li><i class="far fa-calendar-alt"></i> 01 Nov 2024</li>
                            </ul>
                        </div>
                        <h4><a href="blog-details.html">Responds To Citizens Advice</a></h4>
                        <p>Lorem ipsum dolor amet magna set dolor sit amet consectetur adipiscing do elite labore.
                        </p>
                        <a class="read-more-btn" href="blog-details.html">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="blog-card">
                    <div class="blog-card-img">
                        <a href="blog-details.html"><img src="assets/images/blog/b2.jpg" alt="image"></a>
                    </div>
                    <div class="blog-card-text-area">
                        <div class="blog-date">
                            <ul>
                                <li><i class="fas fa-user"></i> By <a href="posted-by.html">Admin</a></li>
                                <li><i class="far fa-comments"></i> No Comment</li>
                                <li><i class="far fa-calendar-alt"></i> 02 Nov 2024</li>
                            </ul>
                        </div>
                        <h4><a href="blog-details.html">Housing Advisers Program</a></h4>
                        <p>Lorem ipsum dolor amet magna set dolor sit amet consectetur adipiscing do elite labore.
                        </p>
                        <a class="read-more-btn" href="blog-details.html">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="blog-card">
                    <div class="blog-card-img">
                        <a href="blog-details.html"><img src="assets/images/blog/b3.jpg" alt="image"></a>
                    </div>
                    <div class="blog-card-text-area">
                        <div class="blog-date">
                            <ul>
                                <li><i class="fas fa-user"></i> By <a href="posted-by.html">Admin</a></li>
                                <li><i class="far fa-comments"></i> No Comment</li>
                                <li><i class="far fa-calendar-alt"></i> 03 Nov 2024</li>
                            </ul>
                        </div>
                        <h4><a href="blog-details.html">Respond To National Report</a></h4>
                        <p>Lorem ipsum dolor amet magna set dolor sit amet consectetur adipiscing do elite labore.
                        </p>
                        <a class="read-more-btn" href="blog-details.html">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="paginations mt-30">
            <ul>
                <li><a class="active" href="{{ route('home.category.show') }}">1</a></li>
                <li><a href="{{ route('home.category.show') }}">2</a></li>
                <li><a href="{{ route('home.category.show') }}">3</a></li>
                <li><a href="{{ route('home.category.show') }}"><i class="fas fa-chevron-right"></i></a></li>
            </ul>
        </div>
    </div>
</section>

@endsection
