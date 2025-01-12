@extends('layouts.app')
@section('content')
<body>
    <main>
    <section class="konseler-section">
            <!-- Tambahkan div untuk circles -->
            <div class="circle circle1"></div>
            <div class="circle circle2"></div>
            <div class="circle circle3"></div>
            <div class="circle circle4"></div>
            <div class="circle circle5"></div>
            
            <div id="konselor" class="konseler-header">
                <h2>Konseler</h2>
                <h3>Mau Mulai Konsultasi?</h3>
                <p>Yuk Kenali Konseler Kami!</p>
            </div>
            <div class="konseler-cards">
                <!-- First Row -->
                <div class="konseler-card">
                    <img src="{{ asset('assets/aanisa.png') }}" alt="Rinda">
                    <h3>Rinda Anisah, M.Psi</h3>
                    <p>Psikolog Klinis spesialis di:</p>
                    <ul>
                        <li>Self-Growth</li>
                        <li>Behavioral Change</li>
                        <li>Love & Marriage</li>
                        <li>Self-control</li>
                    </ul>
                    <button>Book Layanan</button>
                </div>
                
                <div class="konseler-card">
                    <img src="{{ asset('assets/almira.png') }}" alt="Amina">
                    <h3>Amina Devina, M.Psi</h3>
                    <p>Psikolog Klinis spesialis di:</p>
                    <ul>
                        <li>Self-Growth</li>
                        <li>Behavioral Change</li>
                        <li>Love & Marriage</li>
                        <li>Self-control</li>
                    </ul>
                    <button>Book Layanan</button>
                </div>
                
                <!-- Second Row -->
                <div class="konseler-card">
                    <img src="{{ asset('assets/dicky.png') }}" alt="Dicky">
                    <h3>Dicky Sujanto, M.Psi</h3>
                    <p>Psikolog Klinis spesialis di:</p>
                    <ul>
                        <li>Self-Growth</li>
                        <li>Marriage Counselor</li>
                        <li>Love & Marriage</li>
                        <li>Self-control</li>
                    </ul>
                    <button>Book Layanan</button>
                </div>
                
                <div class="konseler-card">
                    <img src="{{ asset('assets/aanisaaxel.png') }}" alt="Anindya">
                    <h3>Anindya Astria, M.Psi</h3>
                    <p>Psikolog Klinis spesialis di:</p>
                    <ul>
                        <li>Career Related</li>
                        <li>Marriage Related</li>
                        <li>Love & Marriage</li>
                        <li>Self-control</li>
                    </ul>
                    <button>Book Layanan</button>
                </div>
            </div>
        </section>
    </main>
</body>
@endsection