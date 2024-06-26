@extends('layouts.app')
@section('content')
<section class="uni-banner">
    <div class="container">
        <div class="uni-banner-text-area">
            <h1>Our Blog</h1>
            <ul>
                <li><a href="{{ route('home.index') }}">Home</a></li>
                <li>Blogs With Sidebar</li>
            </ul>
        </div>
    </div>
</section>


<section class="blog-details ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="blog-card mt-0">
                            <div class="blog-card-img">
                                <a href="{{ route('blog.show') }}"><img src="assets/images/blog/b1.jpg" alt="image"></a>
                            </div>
                            <div class="blog-card-text-area">
                                <div class="blog-date">
                                    <ul>
                                        <li><i class="fas fa-user"></i> By <a href="posted-by.html">Admin</a></li>
                                        <li><i class="far fa-comments"></i> No Comment</li>
                                        <li><i class="far fa-calendar-alt"></i> 01 Nov 2024</li>
                                    </ul>
                                </div>
                                <h4><a href="{{ route('blog.show') }}">Responds To Citizens Advice</a></h4>
                                <p>Lorem ipsum dolor amet magna set dolor sit amet consectetur adipiscing do elite labore.
                                </p>
                                <a class="read-more-btn" href="{{ route('blog.show') }}">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="blog-card">
                            <div class="blog-card-img">
                                <a href="{{ route('blog.show') }}"><img src="assets/images/blog/b2.jpg" alt="image"></a>
                            </div>
                            <div class="blog-card-text-area">
                                <div class="blog-date">
                                    <ul>
                                        <li><i class="fas fa-user"></i> By <a href="posted-by.html">Admin</a></li>
                                        <li><i class="far fa-comments"></i> No Comment</li>
                                        <li><i class="far fa-calendar-alt"></i> 02 Nov 2024</li>
                                    </ul>
                                </div>
                                <h4><a href="{{ route('blog.show') }}">Housing Advisers Program</a></h4>
                                <p>Lorem ipsum dolor amet magna set dolor sit amet consectetur adipiscing do elite labore.
                                </p>
                                <a class="read-more-btn" href="{{ route('blog.show') }}">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="blog-card">
                            <div class="blog-card-img">
                                <a href="{{ route('blog.show') }}"><img src="assets/images/blog/b3.jpg" alt="image"></a>
                            </div>
                            <div class="blog-card-text-area">
                                <div class="blog-date">
                                    <ul>
                                        <li><i class="fas fa-user"></i> By <a href="posted-by.html">Admin</a></li>
                                        <li><i class="far fa-comments"></i> No Comment</li>
                                        <li><i class="far fa-calendar-alt"></i> 03 Nov 2024</li>
                                    </ul>
                                </div>
                                <h4><a href="{{ route('blog.show') }}">Respond To National Report</a></h4>
                                <p>Lorem ipsum dolor amet magna set dolor sit amet consectetur adipiscing do elite labore.
                                </p>
                                <a class="read-more-btn" href="{{ route('blog.show') }}">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="paginations mt-30">
                    <ul>
                        <li><a class="active" href="{{ route('blog.index') }}">1</a></li>
                        <li><a href="{{ route('blog.index') }}">2</a></li>
                        <li><a href="{{ route('blog.index') }}">3</a></li>
                        <li><a href="{{ route('blog.index') }}"><i class="fas fa-chevron-right"></i></a></li>
                    </ul>
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
                            <li><a href="{{ route('blog.show') }}"><i class="fas fa-angle-right"></i> Adveresting
                                    Permits</a></li>
                            <li><a href="{{ route('blog.show') }}"><i class="fas fa-angle-right"></i> Animal Health And
                                    Welfare</a></li>
                            <li><a href="{{ route('blog.show') }}"><i class="fas fa-angle-right"></i> Animal Health And
                                    Welfare</a></li>
                            <li><a href="{{ route('blog.show') }}"><i class="fas fa-angle-right"></i> Drainage Services</a>
                            </li>
                            <li><a href="{{ route('blog.show') }}"><i class="fas fa-angle-right"></i> Enviromental
                                    Services</a></li>
                            <li><a href="{{ route('blog.show') }}"><i class="fas fa-angle-right"></i> Survey Services</a>
                            </li>
                        </ul>
                    </div>
                    <div class="sidebar-card recent-news mt-30">
                        <h3>Popular Posts</h3>
                        <div class="recent-news-card">
                            <a href="{{ route('blog.show') }}"><img src="assets/images/inner-images/bds1.jpg" alt="image"></a>
                            <h5><a href="{{ route('blog.show') }}">Responds To Citizens Advice</a></h5>
                            <p>1st Sep 2024</p>
                        </div>
                        <div class="recent-news-card">
                            <a href="{{ route('blog.show') }}"><img src="assets/images/inner-images/bds2.jpg" alt="image"></a>
                            <h5><a href="{{ route('blog.show') }}">Housing Advisers Program</a></h5>
                            <p>4th Sep 2024</p>
                        </div>
                        <div class="recent-news-card">
                            <a href="{{ route('blog.show') }}"><img src="assets/images/inner-images/bds3.jpg" alt="image"></a>
                            <h5><a href="{{ route('blog.show') }}">Responds To a National Reports</a></h5>
                            <p>2nd Sep 2024</p>
                        </div>
                    </div>
                    <div class="sidebar-card sidebar-tag mt-30">
                        <h3>Popular Tags</h3>
                        <ul>
                            <li><a href="{{ route('category.index') }}">Councillor</a></li>
                            <li><a href="{{ route('category.index') }}">Culture</a></li>
                            <li><a href="{{ route('category.index') }}">Business</a></li>
                            <li><a href="{{ route('category.index') }}">Citizen</a></li>
                            <li><a href="{{ route('category.index') }}">Program</a></li>
                            <li><a href="{{ route('category.index') }}">Support</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
