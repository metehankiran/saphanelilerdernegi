<div class="footer-content ptb-100">
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="footer-logo-area">
                <a href="{{ route('home.index') }}"><img src="{{ asset('assets') }}/images/logo.png" alt="{{ env('APP_NAME') }} LOGO"></a>
                <p>{{ $setting['footer_description'] }}</p>
                <div class="footer-social-area">
                    <ul>
                        <li><span>Sosyal Medya Hesaplarımız: </span></li>
                    </ul>
                    <ul class="mt-2">
                        @foreach($socials as $social)
                            <li><a href="{{ $social['url'] }}" @if($social->new_window) target="blank" @endif</a><i class="{{ $social['icon'] }}"></i></a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="footer-links footer-contact">
                <h3>İletişim</h3>
                <div class="footer-contact-card">
                    <i class="fas fa-map-marker-alt"></i>
                    <h5>Adres: </h5>
                    <p><a href="{{ $setting['address_url'] }}" target="_blank">{{ $setting['address'] }}</a></p>
                </div>
                <div class="footer-contact-card">
                    <i class="fas fa-envelope"></i>
                    <h5>Email: </h5>
                    <p><a href="mailto:{{ $setting['email'] }}"><span>{{ $setting['email'] }}</span></a>
                    </p>
                </div>
                <div class="footer-contact-card">
                    <i class="fas fa-phone-alt"></i>
                    <h5>Telefon: </h5>
                    <p><a href="tel:+13454567877">{{ $setting['phone'] }}</a></p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="footer-links footer-quick-links">
                <h3>Hızlı Bağlantılar</h3>
                <ul>
                    <li><i class="fas fa-angle-right"></i> <a href="{{ route('corporate.about') }}">Hakkımızda</a></li>
                    <li><i class="fas fa-angle-right"></i> <a href="{{ route('service.show') }}">Duyurular</a></li>
                    <li><i class="fas fa-angle-right"></i> <a href="{{ route('blog.index') }}">Blog</a></li>
                    <li><i class="fas fa-angle-right"></i> <a href="{{ route('project.index') }}">Projeler</a></li>
                    <li><i class="fas fa-angle-right"></i> <a href="{{ route('contact.index') }}">İletişim</a></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="footer-links footer-newsletter">
                <h3>Bülten</h3>
                <p>Güncellemeleri almak için bültenimize abone olun!</p>
                <form class="newsletter-form" data-toggle="validator" method="post" action="{{ route('newsletter.store') }}">
                    <input type="email" class="input-newsletter form-control" placeholder="Email Adresiniz"
                        name="email" required autocomplete="off">
                    <button class="default-button news-btn">Abone Ol</button>
                    <div id="validator-newsletter" class="form-result"></div>
                </form>
            </div>
        </div>
    </div>
</div>
