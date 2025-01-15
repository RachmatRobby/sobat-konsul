<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Name - @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <header>
        <div class="container-nav">
            <div class="logo">
                <img src="{{ asset('assets/logo.png') }}" alt="LOGO">
                <h2>SobatKonsul</h2>
            </div>

            <nav>
                <ul>
                    <li><a href="{{route('landing') }}">Home</a></li>
                    <li><a href="{{route('about')}}">Tentang Kami</a></li>
                    <li><a href="#layanan">Layanan</a></li>
                    <li><a href={{route('hubungi')}}>Hubungi Kami</a></li>
                    <li><a href="{{ route('konselor') }}">Konselor</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
    <div class="footer-content">
        <div class="footer-brand">
            <div class="footer-logo">
                <img src="{{ asset('assets/logo.png') }}" alt="SobatKonsul">
                <span id="hubungi">SobatKonsul</span>
            </div>
            <div class="company-info">
                <h4>PT. Sobat Konsulin Dong</h4>
                <p>Jl. Raya Tidar No.100, Karangbesuki, Kec. Sukun, Kota Malang, Jawa Timur 65146</p>
                <p class="tagline">"Siap untuk perubahan positif? Bergabunglah dengan SobatKonsul sekarang!"</p>
            </div>
        </div>

        <div class="footer-links">
            <div class="footer-section">
                <h4>Daftar</h4>
                <ul>
                    <li><a href="#">Konseling Online</a></li>
                    <li><a href="#">Konseling Tatap Muka</a></li>
                </ul>
            </div>

            <div class="footer-section">
                <h4>Pelajari</h4>
                <ul>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Panduan Konseling</a></li>
                    <li><a href="#">Peraturan Konseling</a></li>
                    <li><a href="#">Kebijakan Privasi</a></li>
                    <li><a href="#">Indonesia Sehat Mental</a></li>
                </ul>
            </div>

            <div class="footer-section">
                <h4>Hubungi Kami</h4>
                <p>Email: sobatkonsul@gmail.com</p>
                <p>Telepon: +62 812-3456-7890</p>
            </div>

            <div class="footer-section">
                <h4>Unduh Aplikasi</h4>
                <div class="app-buttons">
                    <a href="#" class="app-button">
                        <img src="{{ asset('assets/google-play-badge-logo.svg') }}" alt="Get it on Google Play">
                    </a>
                    <a href="#" class="app-button">
                        <img src="{{ asset('assets/app store.svg') }}" alt="Download on App Store">
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="copyright">
    <p>© 2024 SobatKonsul. All Rights Reserved.</p>
</div>

</body>

</html>