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
                    <li>Home</li>
                    <li><a href="#layanan">Layanan</a></li>
                    <li>Menjadi Klien</li>
                    <li><a href="#hubungi">Hubungi Kami</a></li>
                    <li>Konselor</li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <div class="container-footer" id="hubungi">
            <h1>Hubungi Kami</h1>
            <p>
                Anda dapat menghubungi kami melalui email atau telepon di bawah ini: <br>

                Email: sobatkonsul@gmail.com<br>

                Telepon: +62 812-3456-7890
            </p>

            <button>Hubungi Sekarang</button>
        </div>

        <div class="footer-nav">
            <nav>
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Tentang Kami </a></li>
                    <li><a href="#layanan">Layanan</a></li>
                    <li><a href="">Menjadi Klien </a></li>
                </ul>
                <ul>
                    <li><a href="#hubungi">Hubungi Kami</a></li>
                    <li><a href="">Kebijakan Privasi</a></li>
                </ul>
            </nav>
        </div>

    </footer>
    <div class="last-foot">
        <p>© 2024 SobatKonsul. All Rights Reserved.</p>
    </div>

</body>

</html>