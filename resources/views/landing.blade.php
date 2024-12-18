@extends('layouts.app')

@section('title', 'Landing Page')

@section('content')
<div class="hero">
    <div id="overlay"></div>

    <div class="main-hero">
        <h1>Jangkau Konseling dari Mana Saja, Kapan Saja</h1>
        <p>Platform konseling online terpercaya yang siap membantu Anda menemukan solusi terbaik untuk setiap
            masalah.</p>
    </div>
</div>

<div class="layanan-kami" id="layanan">
    <h1>Layanan Kami</h1>
    <p>Kami hadir untuk mendukung Anda melalui berbagai layanan konseling yang dirancang untuk membantu setiap individu mencapai keseimbangan, kebahagiaan, dan kesehatan mental.</p>
    <div class="layanan-cards">
        <!-- Card 1: Konseling Pribadi -->
        <div class="card">
            <img src="{{ asset('assets/orangpusing.png') }}" alt="orang pusing">
            <div class="card-content">
                <h2>Konseling Pribadi</h2>
                <p>Membantu Anda menghadapi berbagai tantangan emosional seperti stres, kecemasan, atau kebingungan dalam membuat keputusan penting.</p>
            </div>
        </div>
        <!-- Card 2: Konseling Masalah Rumah Tangga -->
        <div class="card">
            <img src="{{ asset('assets/keluargaharmoni.png') }}" alt="keluarga harmoni">
            <div class="card-content">
                <h2>Konseling Masalah Rumah Tangga</h2>
                <p>Membangun kembali komunikasi dan keharmonisan dalam hubungan Anda. Layanan ini membantu pasangan dan keluarga untuk mengatasi konflik.</p>
            </div>
        </div>
    </div>
</div>

    <!-- <div class="card-feature">
        <h1>Konseler</h1>
        <p>Kami memiliki tim konselor profesional dengan spesialisasi yang berbeda. Anda dapat memilih konselor yang
            sesuai atau berkonsultasi dengan tim kami untuk menemukan konselor terbaik bagi Anda.</p>
        <button>Pelajari Lebih Lanjut</button>
    </div>
</div> -->

<div class="about">
    <div class="main-about">
        <h1>Siapakah Kami</h1>
        <p>Kami adalah tim konselor dan psikolog profesional yang berdedikasi untuk memberikan layanan konseling
            yang aman, empatik, dan terpercaya.</p>
        <button>Pelajari Lebih Lanjut</button>
    </div>
</div>

@endsection