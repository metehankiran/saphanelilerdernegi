@extends('layouts.app')
@section('content')
<section class="uni-banner">
    <div class="container">
        <div class="uni-banner-text-area">
            <h1>FAQ's</h1>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li>FAQ,s</li>
            </ul>
        </div>
    </div>
</section>


<section class="faq ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="faq-img-area">
                    <img src="assets/images/faq-bg.jpg" alt="image">
                    <a class="video-popup" href="https://www.youtube.com/watch?v=ukfISpWHVWI"><i
                            class="fas fa-play"></i></a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="faq-text-area">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item mt-0">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">How Can I Receive Municipality Services?<i
                                        class="fas fa-plus-circle"></i> <i class="fas fa-minus-circle"></i></button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse show" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit diam nonummy nibh sed euismod tincidunt ut laoreet dolore magna aliquam erat volutpat ut wisi enim minim veniam lorem dolore magna aliqua.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    How Can I Book A Playground In Public Parks?<i class="fas fa-plus-circle"></i>
                                    <i class="fas fa-minus-circle"></i>
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit diam nonummy nibh sed euismod tincidunt ut laoreet dolore magna aliquam erat volutpat ut wisi enim minim veniam lorem dolore magna aliqua.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    How Can I apply For A Job At Municipality? <i class="fas fa-plus-circle"></i> <i
                                        class="fas fa-minus-circle"></i>
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit diam nonummy nibh sed euismod tincidunt ut laoreet dolore magna aliquam erat volutpat ut wisi enim minim veniam lorem dolore magna aliqua.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Can I Make Company Schedule Change? <i class="fas fa-plus-circle"></i> <i
                                        class="fas fa-minus-circle"></i>
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit diam nonummy nibh sed euismod tincidunt ut laoreet dolore magna aliquam erat volutpat ut wisi enim minim veniam lorem dolore magna aliqua.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Do You Offer A Free Initial Consultation? <i class="fas fa-plus-circle"></i> <i
                                        class="fas fa-minus-circle"></i>
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit diam nonummy nibh sed euismod tincidunt ut laoreet dolore magna aliquam erat volutpat ut wisi enim minim veniam lorem dolore magna aliqua.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
