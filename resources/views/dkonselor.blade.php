@extends('layouts.app')

@section('title', 'Konsultasi Sekarang')

@section('content')
<div class="konsultasi-container">
    <h1 class="konsultasi-title">Konsultasi Sekarang</h1>

    <div class="konselor-profile">
        <div class="profile-image">
            @if($profile_image)
            <img src="{{ asset($konselor->profile_image) }}" alt="{{ $konselor->name }}">
            @else
                <img src="{{ asset('images/default-profile.jpg') }}" alt="Default Profile Image">
            @endif
        </div>
        
        <div class="profile-info">
            <h2>{{ $name }}</h2>
            <p class="profession">Psikolog Klinis</p>
            
            <div class="specialties">
                <h3>Spesialis :</h3>
                <ul>
                    @if(is_array($specializations))
                        @foreach($specializations as $specialty)
                            <li>{{ $specialty }}</li>
                        @endforeach
                    @else
                        <li>Data spesialisasi belum tersedia</li>
                    @endif
                </ul>
            </div>
        </div>
    </div>

    <div class="about-section">
        <div class="section-icon">
            <i class="profile-icon"></i>
        </div>
        <h3>Tentang Saya</h3>
        <p class="about-text">
            {!! nl2br(e($about_me)) !!}
        </p>
    </div>

    <div class="cases-section">
        <div class="section-icon">
            <i class="cases-icon"></i>
        </div>
        <h3>Kasus Yang Di Tangani</h3>
        <p>{{ $handled_cases }}</p>
    </div>

    <div class="approach-section">
        <div class="section-icon">
            <i class="approach-icon"></i>
        </div>
        <h3>Pendekatan Klinis</h3>
        <p>{{ $clinical_approaches }}</p>
    </div>

    <div class="cta-section">
        <button class="konsultasi-btn">
            Konsultasi Sekarang
        </button>
    </div>
</div>
@endsection