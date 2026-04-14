@extends('layouts.app')

@section('content')
<link href="{{ asset('css/home.css') }}" rel="stylesheet">

<div class="home-wrapper">
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-content">
            <h1>Rasakan <span class="text-red">Pedasnya</span><br>Bikin Nagih!</h1>
            <p>Sensasi cilok kenyal dengan siraman sambal uleg rahasia Mak Pik yang membakar lidah tapi bikin rindu. Berani coba level tertinggi kami?</p>
            <div class="hero-buttons">
                <a href="{{ route('menu') }}" class="btn-custom btn-primary-custom">Lihat Menu</a>
                <a href="{{ route('about') }}" class="btn-custom btn-secondary-custom">Tentang Kami</a>
            </div>
        </div>
        <div class="hero-image-wrapper">
            <div class="hero-blob">
                <div class="hero-chara">
                    <div class="hero-mouth"></div>
                </div>
                <div class="hero-badge-1">
                    <i class="fa-solid fa-check-circle"></i>
                    <div>100%<br>Bahan Fresh</div>
                </div>
                <div class="hero-badge-2">
                    <span style="font-size: 1.2rem;">🌶️</span>
                    <div><span>Mercon Jumbo</span><br>Rp 15k</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features-section">
        <h2 class="section-title">Kenapa <span class="text-red" style="text-decoration: underline; text-decoration-color: #ce1e2e; text-underline-offset: 8px;">Harus</span> Mak Pik?</h2>
        <div class="features-layout">
            <div class="features-left">
                <div class="feature-card card-spicy">
                    <div class="icon-box">
                        <i class="fa-solid fa-fire" style="background:#fee2e2; color:#b91c1c; padding:12px; border-radius:10px;"></i>
                    </div>
                    <h3>Spicy Levels<br>Untuk Semua Lidah</h3>
                    <p>Dari "Anget-Anget Kuku" sampai level "Neraka Bocor". Kami menggunakan 5 jenis cabai pilihan yang diolah segar setiap hari.</p>
                    <div class="tags">
                        <span class="tag tag-yellow">Level 1-10</span>
                        <span class="tag tag-red">Rawit Asli</span>
                    </div>
                </div>
            </div>
            <div class="features-right">
                <div class="feature-card card-price">
                    <div class="icon-box" style="background: rgba(255,255,255,0.2); color:white; padding:12px; border-radius:10px; display:inline-flex; width:auto; height:auto; margin-bottom:15px;">
                        <i class="fa-solid fa-money-bill-wave" style="font-size:1.5rem;"></i>
                    </div>
                    <h3>Harga Ramah Kantong</h3>
                    <p>Nikmati kelezatan premium dengan harga anak sekolahan. Mulai dari Rp 5.000 saja!</p>
                </div>
                <div class="features-right-bottom">
                    <div class="feature-card card-fresh">
                        <div class="icon-box" style="background:#e0f2fe; color:#0284c7; padding:12px; border-radius:10px; display:inline-flex; width:auto; height:auto; margin-bottom:15px;">
                            <i class="fa-solid fa-utensils" style="font-size:1.5rem;"></i>
                        </div>
                        <h3>Freshly Made</h3>
                        <p style="font-size: 0.9rem;">Cilok kami dibuat mendadak setiap hari tanpa bahan pengawet sedikitpun. Sehat dan nikmat!</p>
                    </div>
                    <div class="feature-card card-bumbu">
                        <div class="card-bumbu-content">
                            <h3>Bumbu Rahasia Sejak 2015</h3>
                            <p>Warisan resep Mak Pik yang konsisten pedasnya, gurihnya, dan bikin nagihnya. Tidak ada yang bisa meniru resep otentik kami.</p>
                        </div>
                        <div class="card-bumbu-img"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Location Section -->
    <section class="location-section">
        <div class="location-container">
            <div class="location-content">
                <span class="location-title-small">ALAMAT KAMI</span>
                <h2 class="location-title-large">Kunjungi Kami</h2>
                
                <div class="location-info-item">
                    <div class="loc-icon red">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <div class="loc-details">
                        <h4>Lokasi Outlet</h4>
                        <p>Jl. Ki Ageng Gribig No.1, Madyopuro, Kec. Kedungkandang <br>Kota Malang, Jawa Timur 65139</p>
                    </div>
                </div>
                
                <div class="location-info-item">
                    <div class="loc-icon yellow">
                        <i class="fa-solid fa-clock"></i>
                    </div>
                    <div class="loc-details">
                        <h4>Jam Operasional</h4>
                        <p>Senin - Minggu: 10.00 - 17.00 WIB</p>
                        <span class="text-red">*Kamis Libur</span>
                    </div>
                </div>
                
                <a href="#" class="btn-direction">
                    <i class="fa-solid fa-diamond-turn-right"></i>
                    Petunjuk Arah
                </a>
            </div>
            
            <div class="location-map-wrapper" style="padding: 0; overflow: hidden;">
                <iframe 
                    src="https://maps.google.com/maps?q=Cilok%20Kuah%20Pedas%20Warung%20Mak%20Pik&t=&z=15&ie=UTF8&iwloc=&output=embed" 
                    width="100%" 
                    height="100%" 
                    frameborder="0" 
                    style="border:0; min-height: 400px; width: 100%; border-radius: inherit;" 
                    allowfullscreen="" 
                    aria-hidden="false" 
                    tabindex="0">
                </iframe>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="cta-container">
            <i class="fa-solid fa-cart-shopping cta-bg-icon"></i>
            <h2>Siap Uji Nyali Lidahmu?</h2>
            <p>Pesan sekarang dan rasakan sensasi Pedasnya yang sesungguhnya.</p>
            <a href="{{ route('order') }}" class="btn-wa">
                <i class="fa-solid fa-cart-shopping" style="font-size: 1.2rem;"></i>
                Order Sekarang
            </a>
        </div>
    </section>

    <!-- Footer Area -->
    <footer class="footer-custom">
        <h3 class="footer-title">Cilok Mak Pik</h3>
        <div class="footer-links" style="margin-bottom: 2rem; margin-top: 2rem;">
            <a href="#">Instagram</a>
            <a href="#">TikTok</a>
            <a href="#">WhatsApp</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Contact</a>
        </div>
        <div class="footer-bottom">
            &copy; 2024 Cilok Pedas Mak Pik. All Rights Reserved.
        </div>
    </footer>
</div>
@endsection