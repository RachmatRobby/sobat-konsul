@extends('layouts.app')
@section('content')
<section class="welcome-section">
    <!-- Decorative circles -->
    <div class="circle circle-1"></div>
    <div class="circle circle-2"></div>
    <div class="circle circle-3"></div>
    <div class="circle circle-4"></div>
    <div class="circle circle-5"></div>

    <!-- Content -->
    <div class="welcome-content">
        <h3 class="welcome-subtitle">Tentang Kami</h3>
        <h2 class="welcome-title">
            Selamat Datang di
            <span class="welcome-highlight">SobatKonsul</span>
        </h2>
        <p class="welcome-description">
            SobatKonsul adalah platform konseling online yang hadir untuk membantu Anda mengatasi
            tantangan kehidupan saat ini. Kami adalah teman kesehatan mental dalam perjalanan untuk
            menghadapi hidup yang penuh tantangan. Melalui platform konseling online yang nyaman dan
            terpercaya, kami menjadi tempat aman bagi Anda untuk berbagi cerita, mendapatkan dukungan,
            dan menemukan solusi terbaik.
        </p>
        <p class="welcome-description">
            Dengan didukung oleh tim konselor profesional yang berpengalaman dan terlatih, SobatKonsul siap menemani
            Anda di setiap langkah perjalanan menuju kesejahteraan emosional dan kesehatan mental yang
            lebih baik.
        </p>
    </div>
</section>
<section class="vision-mission">
    <div class="vision-mission-header">
        <h2>VISI & MISI</h2>
    </div>

    <div class="vision-mission-cards">
        <div class="vision-card">
            <h3 class="card-title">VISI</h3>
            <p class="vision-text">
                Menjadi platform konseling terpercaya yang mendukung kesehatan mental masyarakat, sehingga setiap individu dapat menjalani hidup dengan kualitas terbaik.
            </p>
        </div>

        <div class="mission-card">
            <h3 class="card-title">MISI</h3>
            <ul class="mission-list">
                <li>Memberikan Layanan Profesional: Menyediakan layanan konseling berkualitas dengan pendekatan yang ramah dan solutif.</li>
                <li>Meningkatkan kesadaran Kesehatan Mental: Mengedukasi masyarakat agar lebih peduli terhadap kesehatan mental melalui kampanye dan program edukasi.</li>
                <li>Aksesibilitas yang Mudah: Memastikan layanan konseling dapat diakses kapan saja dan di mana saja melalui teknologi digital.</li>
                <li>Mendukung Kerahasiaan dan Kepercayaan: Menjamin privasi dan kenyamanan setiap klien dalam berbagi cerita dan menjalani sesi konseling.</li>
                <li>Mendampingi Perjalanan Anda: Menjadi mitra terpercaya dalam setiap perjalanan hidup Anda, baik dalam menghadapi tantangan pribadi, keluarga, maupun profesi.</li>
            </ul>
        </div>
    </div>
</section>
<section class="layanan-section">
    <!-- Circles for decoration -->
    <div class="circle circle1"></div>
    <div class="circle circle2"></div>
    <div class="circle circle3"></div>
    <div class="circle circle4"></div>
    
    <div class="layanan-header">
    <h2 id="layanan">Layanan Kami</h2>
        <p>Kami hadir untuk mendukung Anda melalui berbagai layanan konseling yang dirancang untuk membantu setiap individu mencapai keseimbangan, kebahagiaan, dan kesehatan mental.</p>
    </div>
    
    <div class="layanan-cards">
        <!-- Card 1: Konseling Pribadi -->
        <div class="layanan-card">
            <img src="{{ asset('assets/orangpusing.jpeg') }}" alt="Konseling Pribadi">
            <div class="card-content">
                <h3>Konseling Pribadi</h3>
                <p>Membantu Anda menghadapi berbagai tantangan emosional seperti stres, kecemasan, atau kebingungan dalam membuat keputusan penting.</p>
            </div>
        </div>

        <!-- Card 2: Konseling Masalah Rumah Tangga -->
        <div class="layanan-card">
            <img src="{{ asset('assets/keluargaharmoni.jpeg') }}" alt="Konseling Masalah Rumah Tangga">
            <div class="card-content">
                <h3>Konseling Masalah Rumah Tangga</h3>
                <p>Membangun kembali komunikasi dan keharmonisan dalam hubungan Anda. Layanan ini membantu pasangan dan keluarga untuk mengatasi konflik.</p>
            </div>
        </div>
    </div>
</section>

@endsection