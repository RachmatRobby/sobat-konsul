@extends('layouts.app')

@section('content')
<div class="hubungi-page">
    <div class="circle-bg circle-1"></div>
    <div class="circle-bg circle-2"></div>
    <div class="circle-bg circle-3"></div>
    <div class="circle-bg circle-4"></div>
    <div class="circle-bg circle-5"></div>

    <div class="hubungi-content">
        <h1 class="hubungi-title">Konseler</h1>
        
        <div class="contact-section">
            <h2>Ada pertanyaan tentang layanan <span class="text-brand">SobatKonsul</span>?</h2>
            <p class="contact-desc">Jangan ragu untuk hubungi kami!</p>
            
            <p class="contact-subtitle">Ajukan pertannyaan kamu!</p>

            <form class="contact-form">
                <div class="form-group">
                    <input type="text" name="nama" placeholder="Nama" class="form-input">
                </div>

                <div class="form-group">
                    <input type="email" name="email" placeholder="Email" class="form-input">
                </div>

                <div class="form-group">
                    <textarea name="pertanyaan" placeholder="Pertanyaan" class="form-textarea"></textarea>
                </div>

                <div class="form-group">
                    <button type="submit" class="submit-btn">Kirim Pesan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection