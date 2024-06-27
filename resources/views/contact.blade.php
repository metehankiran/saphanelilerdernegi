@extends('layouts.app')
@section('content')
<section class="uni-banner">
    <div class="container">
        <div class="uni-banner-text-area">
            <h1>İletişim</h1>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li>İletişim</li>
            </ul>
        </div>
    </div>
</section>


<section class="contcat-card-area pt-70 pb-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="contact-card">
                    <i class="fas fa-map-marker-alt"></i>
                    <h5>Our Location</h5>
                    <p><a href="https://goo.gl/maps/zZEtThmwqkPz2GTE7" target="_blank">CA 560 bush st & 20th ave,
                            apt 5 san francisco, 230909, Canada</a></p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="contact-card">
                    <i class="fas fa-envelope"></i>
                    <h5>Our Email</h5>
                    <p><a href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#e088858c8c8fa08d85849a8fce838f8d"><span
                                class="__cf_email__"
                                data-cfemail="afc7cac3c3c0efc2cacbd5c081ccc0c2">[email&#160;protected]</span></a>
                    </p>
                    <p><a href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#d5bcbbb3ba95b8b0b1afbafbb6bab8"><span
                                class="__cf_email__"
                                data-cfemail="eb82858d84ab868e8f9184c5888486">[email&#160;protected]</span></a></p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="contact-card">
                    <i class="fas fa-phone-alt"></i>
                    <h5>Our Location</h5>
                    <p><a href="tel:+44587154756"> +44 587 154756</a></p>
                    <p><a href="tel:+44587154757"> +44 587 154757</a></p>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="contact-form-area pb-100">
    <div class="container">
        <div class="default-section-title default-section-title-middle">
            <h3>Get In Touch</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua quis ipsum suspendisse</p>
        </div>
        <div class="section-content">
            <div class="row">
                <div class="col-lg-4">
                    <div class="google-map pr-20">
                        <iframe class="g-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d78339.6186660101!2d-106.73462151445834!3d52.15045315715413!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5304f6bf47ed992b%3A0x5049e3295772690!2sSaskatoon%2C%20SK%2C%20Canada!5e0!3m2!1sen!2sbd!4v1629617114800!5m2!1sen!2sbd"></iframe>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="contact-form-text-area">
                        <form id="contactForm">
                            <div class="row align-items-center">
                                <div class="col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Name" id="name" required data-error="Please enter your name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder="Email" id="email" required data-error="Please enter your Email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <input type="text" name="phone_number" class="form-control" placeholder="Phone Number" id="phone_number" required data-error="Please enter your phone number">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <input type="text" name="msg_subject" class="form-control" placeholder="Subject" id="msg_subject" required data-error="Please enter your subject">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-12">
                                    <div class="form-group">
                                        <textarea name="message" id="message" class="form-control" placeholder="Your Messages.." cols="30" rows="5" required data-error="Please enter your message"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <div class="form-check">
                                            <input name="gridCheck" value="I agree to the terms and privacy policy." class="form-check-input" type="checkbox" id="gridCheck" required>
                                            <label class="form-check-label" for="gridCheck">
                                                I agree to the <a href="{{ route('home.contact') }}#">terms</a> and <a
                                                    href="{{ route('home.contact') }}#">privacy policy</a>
                                            </label>
                                            <div class="help-block with-errors gridCheck-error"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-12">
                                    <button class="default-button" type="submit"><span>Send Message</span></button>
                                    <div id="msgSubmit" class="h6 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
