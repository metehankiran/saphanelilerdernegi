<div class="main-nav plr-100">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-md navbar-light">
            <a class="navbar-brand" href="{{ route('home.index') }}">
                {{-- <img src="{{ asset('assets') }}/images/logo.png" alt="logo" /> --}}
                {{ Str::upper(env('APP_NAME')) }}
            </a>
            <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item"><a href="{{ route('home.index') }}" class="nav-link">Anasayfa</a></li>
                    <li class="nav-item">
                        <a href="#" class="nav-link dropdown-toggle">Kurumsal</a>
                        <ul class="dropdown-menu">
                            <li class="nav-item"><a href="{{ route('corporate.about') }}" class="nav-link">Hakkımızda</a></li>
                            <li class="nav-item"><a href="{{ route('corporate.founders') }}" class="nav-link">Kurucular</a></li>
                            <li class="nav-item"><a href="{{ route('corporate.testimonials') }}" class="nav-link">Referanslar</a></li>
                            <li class="nav-item"><a href="{{ route('corporate.faq') }}" class="nav-link">Sıkça Sorulan Sorular</a></li>
                            <li class="nav-item"><a href="{{ route('corporate.privacy') }}" class="nav-link">Gizlilik Politikası</a></li>
                            <li class="nav-item"><a href="{{ route('corporate.terms') }}" class="nav-link">Kullanım Koşulları</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a href="{{ route('home.index') }}" class="nav-link">Duyurular</a></li>
                    <li class="nav-item">
                        <a href="#" class="nav-link dropdown-toggle">Galeri</a>
                        <ul class="dropdown-menu">
                            <li class="nav-item"><a href="{{ route('gallery.index', 'fotograf') }}" class="nav-link">Fotoğraf</a></li>
                            <li class="nav-item"><a href="{{ route('gallery.index', 'video') }}" class="nav-link">Video</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a href="{{ route('home.index') }}" class="nav-link">Projeler</a></li>
                    <li class="nav-item"><a href="{{ route('home.index') }}" class="nav-link">Blog</a></li>
                </ul>
                <div class="menu-sidebar">
                    <ul>
                        <li><a class="default-button" href="{{ route('contact.index') }}">İletişim</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>
