@extends('layouts.app')
@section('content')

<section class="uni-banner">
    <div class="container">
        <div class="uni-banner-text-area">
            <h1>Blog Details</h1>
            <ul>
                <li><a href="{{ route('home.index') }}">Home</a></li>
                <li>Blog Details</li>
            </ul>
        </div>
    </div>
</section>


<section class="blog-details ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="blog-details-text-area details-text-area">
                    <img src="assets/images/inner-images/bd1.jpg" alt="image">
                    <div class="blog-date">
                        <ul>
                            <li><i class="fas fa-user"></i> By <a href="posted-by.html">Admin</a></li>
                            <li><i class="far fa-comments"></i> No Comment</li>
                            <li><i class="far fa-calendar-alt"></i> 01 Nov 2024</li>
                        </ul>
                    </div>
                    <h3 class="mt-0">Responds To Citizens Advice</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua Ut enim ad minim veniam, quis nostrud exercitation ullamc laboris nisi ut aliquip commodo consequat. Duis aute
                        irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur commodo.</p>
                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium sed doloremque laudantium, totam rem aperiam,
                        eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                    <div class="blog-quote">
                        <i class="flaticon-right-quote"></i>
                        <p>“ Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temporincididunt ut labore dolore magna aliqua.”</p>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua Ut enim ad minim veniam, quis nostrud exercitation ullamc laboris nisi ut aliquip commodo consequat. Duis aute
                        irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur commodo.</p>
                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspici unde omnis iste natus error sit voluptatem accusantium sed doloremque laudantium.</p>
                </div>
                <div class="blog-text-footer mt-30">
                    <div class="tag-area">
                        <ul>
                            <li><i class="fas fa-tags"></i></li>
                            <li><a href="{{ route('category.index') }}">Culture,</a></li>
                            <li><a href="{{ route('category.index') }}">Business,</a></li>
                            <li><a href="{{ route('category.index') }}">Citizen</a></li>
                        </ul>
                    </div>
                    <div class="social-icons">
                        <ul>
                            <li><span>Share:</span></li>
                            <li><a href="https://www.facebook.com/" target="_blank"><i
                                        class="fab fa-facebook-f"></i></a></li>
                            <li><a href="https://www.linkedin.com/" target="_blank"><i
                                        class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li><a href="https://www.instagram.com/" target="_blank"><i
                                        class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="bd-comments details-text-area">
                    <h3>Comments</h3>
                    <div class="comment-card">
                        <img src="assets/images/feedback/f2.jpg" alt="image">
                        <h5>David Makel</h5>
                        <p>The bee's knees bite your arm off bits and bobs he nicked it gosh gutted mate blimey, old off his nut argy bargy vagabond buggered dropped.</p>
                        <a href="{{ route('blog.show') }}#bd-form">Reply</a>
                    </div>
                    <div class="comment-card">
                        <img src="assets/images/feedback/f1.jpg" alt="image">
                        <h5>Jemmy Makel</h5>
                        <p>The bee's knees bite your arm off bits and bobs he nicked it gosh gutted mate blimey, old off his nut argy bargy vagabond buggered dropped.</p>
                        <a href="{{ route('blog.show') }}#bd-form">Reply</a>
                    </div>
                </div>
                <div class="bd-form details-text-area" id="bd-form">
                    <h3>Leave A Reply</h3>
                    <p>Your email address will not be published. Required fields are marked*</p>
                    <form>
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-12">
                                <input type="text" class="form-control" placeholder="Name*" required>
                            </div>
                            <div class="col-md-6 col-sm-12 col-12">
                                <input type="email" class="form-control" placeholder="Email*" required>
                            </div>
                            <div class="col-md-6 col-sm-12 col-12">
                                <input type="text" class="form-control" placeholder="Phone*" required>
                            </div>
                            <div class="col-md-6 col-sm-12 col-12">
                                <input type="text" class="form-control" placeholder="Subject*" required>
                            </div>
                            <div class="col-md-12">
                                <textarea rows="5" class="form-control" placeholder="Message*" required></textarea>
                            </div>
                            <div class="col-md-12">
                                <button class="default-button" type="submit">Post A Comment</button>
                            </div>
                        </div>
                    </form>
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
                            <h5><a href="{{ route('blog.show') }}">Responds To Citizenship Advices</a></h5>
                            <p>1st Sep 2024</p>
                        </div>
                        <div class="recent-news-card">
                            <a href="{{ route('blog.show') }}"><img src="assets/images/inner-images/bds2.jpg" alt="image"></a>
                            <h5><a href="{{ route('blog.show') }}">Housing Advisers Program For Beginner</a></h5>
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
