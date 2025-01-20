@extends('layouts.app')
@section('title', 'Landing Page')
@section('content')
    <div class="hero">
        <div id="overlay"></div>
        <div class="main-hero">
            <h1>Jangkau Konseling dari Mana Saja, Kapan Saja</h1>
            <p>Platform konseling online terpercaya yang siap membantu Anda menemukan solusi terbaik untuk setiap masalah.
            </p>
        </div>
    </div>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <section class="layanan-section">
        <!-- Circles for decoration -->
        <div class="circle circle1"></div>
        <div class="circle circle2"></div>
        <div class="circle circle3"></div>
        <div class="circle circle4"></div>

        <div class="layanan-header">
            <h2 id="layanan">Layanan Kami</h2>
            <p>Kami hadir untuk mendukung Anda melalui berbagai layanan konseling yang dirancang untuk membantu setiap
                individu mencapai keseimbangan, kebahagiaan, dan kesehatan mental.</p>
        </div>

        <div class="layanan-cards">
            <!-- Card 1: Konseling Pribadi -->
            <div class="layanan-card">
                <img src="{{ asset('assets/orangpusing.jpeg') }}" alt="Konseling Pribadi">
                <div class="card-content">
                    <h3>Konseling Pribadi</h3>
                    <p>Membantu Anda menghadapi berbagai tantangan emosional seperti stres, kecemasan, atau kebingungan
                        dalam membuat keputusan penting.</p>
                </div>
            </div>

            <!-- Card 2: Konseling Masalah Rumah Tangga -->
            <div class="layanan-card">
                <img src="{{ asset('assets/keluargaharmoni.jpeg') }}" alt="Konseling Masalah Rumah Tangga">
                <div class="card-content">
                    <h3>Konseling Masalah Rumah Tangga</h3>
                    <p>Membangun kembali komunikasi dan keharmonisan dalam hubungan Anda. Layanan ini membantu pasangan dan
                        keluarga untuk mengatasi konflik.</p>
                </div>
            </div>
        </div>
    </section>

    <div class="about">
        <div class="main-about">
            <h1>Siapakah Kami</h1>
            <p>Kami adalah tim konselor dan psikolog profesional yang berdedikasi untuk memberikan layanan konseling yang
                aman, empatik, dan terpercaya.</p>
            <button>Pelajari Lebih Lanjut</button>
        </div>
    </div>
    <section class="statistics-section">
        <div class="statistics-header">
            <h2>Team psikolog kami telah membantu</h2>
            <div class="count">16.689+</div>
            <p>orang dengan permasalahan:</p>
        </div>

        <div class="issues-grid">
            <div class="issue-item">
                <i class="fas fa-check-circle"></i>
                <span>Karir & Pekerjaan</span>
            </div>
            <div class="issue-item">
                <i class="fas fa-check-circle"></i>
                <span>Masalah Rumah Tangga</span>
            </div>
            <div class="issue-item">
                <i class="fas fa-check-circle"></i>
                <span>Trauma Masa Lalu</span>
            </div>
            <div class="issue-item">
                <i class="fas fa-check-circle"></i>
                <span>Gangguan Kepribadian</span>
            </div>
            <div class="issue-item">
                <i class="fas fa-check-circle"></i>
                <span>Depresi</span>
            </div>
            <div class="issue-item">
                <i class="fas fa-check-circle"></i>
                <span>Hubungan Interpersonal</span>
            </div>
            <div class="issue-item">
                <i class="fas fa-check-circle"></i>
                <span>Anak & Remaja</span>
            </div>
            <div class="issue-item">
                <i class="fas fa-check-circle"></i>
                <span>Hubungan Percintaan</span>
            </div>
        </div>
    </section>
    <section class="counselor-section">
        <!-- Decorative bubbles -->
        <div class="bubble bubble-1"></div>
        <div class="bubble bubble-2"></div>
        <div class="bubble bubble-3"></div>

        <div class="counselor-header">
            <h2>Profil Konseler sobatkonsul</h2>
            <p>Yuk kenali 42+ psikolog yang ahli dalam permasalahan keluarga & siap membantumu menemukan jalan keluar!</p>
        </div>

        <div class="counselor-cards">
            <!-- Counselor Card 1 -->
            <div class="counselor-card">
                <div class="counselor-image">
                    <img src="{{ asset('assets/aanisa.png') }}" alt="Rinda Aanisah">
                </div>
                <div class="counselor-info">
                    <h3>Rinda Aanisah, M.Psi.</h3>
                    <p class="specialization-title">Psikolog Rinda spesialis di :</p>
                    <ul class="specialization-list">
                        <li class="specialization-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Depresi</span>
                        </li>
                        <li class="specialization-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Masalah Keluarga</span>
                        </li>
                        <li class="specialization-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Hubungan Percintaan</span>
                        </li>
                        <li class="specialization-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Karir & Pekerjaan</span>
                        </li>
                        <li class="specialization-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Dan lainnya</span>
                        </li>
                    </ul>
                    <a href="#" class="profile-button">Profil Lengkap</a>
                </div>
            </div>

            <!-- Counselor Card 2 -->
            <div class="counselor-card">
                <div class="counselor-image">
                    <img src="{{ asset('assets/almira.png') }}" alt="Almira Devina">
                </div>
                <div class="counselor-info">
                    <h3>Almira Devina, M.Psi.</h3>
                    <p class="specialization-title">Psikolog Almira spesialis di :</p>
                    <ul class="specialization-list">
                        <li class="specialization-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Depresi</span>
                        </li>
                        <li class="specialization-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Masalah Keluarga</span>
                        </li>
                        <li class="specialization-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Hubungan Percintaan</span>
                        </li>
                        <li class="specialization-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Karir & Pekerjaan</span>
                        </li>
                        <li class="specialization-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Dan lainnya</span>
                        </li>
                    </ul>
                    <a href="#" class="profile-button">Profil Lengkap</a>
                </div>
            </div>
        </div>
    </section>
@endsection
