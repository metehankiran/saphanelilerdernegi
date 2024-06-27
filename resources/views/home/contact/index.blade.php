@extends('layouts.app')
@section('title', 'İletişim')
@section('content')
    <x-content.banner title="İletişim" main="Anasayfa" sub="İletişim" :href="route('home.index')" />

    <section class="contcat-card-area pt-70 pb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="contact-card">
                        <i class="fas fa-map-marker-alt"></i>
                        <h5>Adres</h5>
                        <p><a href="https://goo.gl/maps/zZEtThmwqkPz2GTE7" target="_blank">CA 560 bush st & 20th ave,
                                apt 5 san francisco, 230909, Canada</a></p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="contact-card">
                        <i class="fas fa-envelope"></i>
                        <h5>Email</h5>
                        <p><a href=""><span>mail</span></a></p>
                        <p><a href=""><span>mail</span></a></p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="contact-card">
                        <i class="fas fa-phone-alt"></i>
                        <h5>Telefon</h5>
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
                <h3>İletişim</h3>
                <p>Bizimle iletişime geçmek için aşağıdaki bilgileri kullanabilirsiniz. Her türlü soru ve öneriniz için bize
                    yazabilirsiniz. Şaphaneliler Derneği her zaman yanınızda.</p>
            </div>
            <div class="section-content">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="google-map pr-20">
                            <iframe class="g-map"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d78339.6186660101!2d-106.73462151445834!3d52.15045315715413!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5304f6bf47ed992b%3A0x5049e3295772690!2sSaskatoon%2C%20SK%2C%20Canada!5e0!3m2!1sen!2sbd!4v1629617114800!5m2!1sen!2sbd"></iframe>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="contact-form-text-area">
                            <form id="contactForm">
                                <div class="row align-items-center">
                                    <div class="col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="İsim" id="name"
                                                required data-error="Lütfen adınızı girin">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control" placeholder="Email"
                                                id="email" required data-error="Lütfen e-posta adresinizi girin">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <input type="text" name="phone_number" class="form-control"
                                                placeholder="Telefon" id="phone_number" required
                                                data-error="Lütfen telefon numaranızı girin">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <input type="text" name="msg_subject" class="form-control" placeholder="Konu"
                                                id="msg_subject" required data-error="Lütfen konu girin">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <textarea name="message" id="message" class="form-control" placeholder="Mesajınız..." cols="30" rows="5"
                                                required data-error="Lütfen mesajınızı girin"></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <div class="form-check">
                                                <input name="gridCheck" value="I agree to the terms and privacy policy."
                                                    class="form-check-input" type="checkbox" id="gridCheck" required>
                                                <label class="form-check-label" for="gridCheck">
                                                    <a target="_blank" href="{{ route('corporate.terms') }}">Kullanıcı
                                                        koşullarını</a> ve <a target="_blank"
                                                        href="{{ route('corporate.privacy') }}">gizlilik politikasını</a>
                                                    okudum ve kabul ediyorum.
                                                </label>
                                                <div class="help-block with-errors gridCheck-error"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-12">
                                        <button class="default-button" type="submit"><span>Mesaj Gönder</span></button>
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
