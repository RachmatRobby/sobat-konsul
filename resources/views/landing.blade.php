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

<div class="feature">
    <div class="card-feature">
        <h1>Layanan Kami</h1>
        <p>Di SobatKonsul, kami berkomitmen untuk menyediakan layanan konseling yang mudah diakses dan sesuai dengan
            kebutuhan Anda.</p>
        <button>Pelajari Lebih Lanjut</button>
    </div>
    <div class="card-feature">
        <h1>Konseler</h1>
        <p>Kami memiliki tim konselor profesional dengan spesialisasi yang berbeda. Anda dapat memilih konselor yang
            sesuai atau berkonsultasi dengan tim kami untuk menemukan konselor terbaik bagi Anda.</p>
        <button>Pelajari Lebih Lanjut</button>
    </div>
</div>

<div class="about">
    <div class="main-about">
        <h1>Siapakah Kami</h1>
        <p>Kami adalah tim konselor dan psikolog profesional yang berdedikasi untuk memberikan layanan konseling
            yang aman, empatik, dan terpercaya.</p>
        <button>Pelajari Lebih Lanjut</button>
    </div>
</div>

@endsection