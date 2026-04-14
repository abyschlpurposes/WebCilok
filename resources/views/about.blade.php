@extends('layouts.app')

@section('content')
<link href="{{ asset('css/about.css') }}" rel="stylesheet">

<div class="about-page-wrapper">
    <!-- Hero Section -->
    <section class="about-hero">
        <div class="hero-left">
            <div class="hero-badge">
                <i class="fa-solid fa-fire"></i> THE SPICY HERITAGE
            </div>
            <h1 class="hero-title">The Heart Behind the <span class="text-red">Heat</span></h1>
            <p class="hero-desc">More than just street food, Cilok Pedas Mak Pik is a tribute to the bustling night markets and the legendary recipe passed down through generations.</p>
        </div>
        <div class="hero-right">
            <div class="hero-img-box">
                <!-- Using a placeholder or styled background if the image isn't available, but we'll put an img tag that can be easily replaced -->
                <img src="https://images.unsplash.com/photo-1563514253100-348638bd1b49?auto=format&fit=crop&w=400&q=80" alt="Artisan Spicy Cilok" onerror="this.style.display='none'" style="border-radius: 20px; box-shadow: 0 10px 20px rgba(0,0,0,0.5);">
            </div>
            <div class="hero-quote-card">
                <div class="hero-quote-text">"Authenticity in every bite."</div>
                <div class="hero-quote-author">— Mak Pik herself</div>
            </div>
        </div>
    </section>

    <!-- Our Journey -->
    <section class="journey-section">
        <div class="section-header">
            <h2>Our Journey</h2>
            <p>From a small humble cart to the city's favorite spicy destination, we've stayed true to our roots.</p>
        </div>
        <div class="journey-grid">
            <!-- 1. The Vision -->
            <div class="j-card card-vision">
                <div class="card-vision-content">
                    <div class="j-icon">
                        <i class="fa-solid fa-eye"></i>
                    </div>
                    <h3 class="j-title">The Vision</h3>
                    <p class="j-desc">To revolutionize the street food experience by blending traditional heirloom recipes with modern branding, making Mak Pik the global standard for Indonesian spicy snacks.</p>
                </div>
                <div class="card-vision-img">
                    <span>Spicy Vibes</span>
                </div>
            </div>

            <!-- 2. Our Mission -->
            <div class="j-card card-mission">
                <div class="j-icon">
                    <i class="fa-solid fa-rocket"></i>
                </div>
                <h3 class="j-title" style="color: white;">Our Mission</h3>
                <p class="j-desc">To serve happiness through high-quality, safe, and mouth-watering spicy snacks that ignite the spirit of the Indonesian night market.</p>
            </div>

            <!-- 3. The Origin -->
            <div class="j-card card-origin">
                <div class="j-icon">
                    <i class="fa-solid fa-arrow-up-right-dots"></i>
                </div>
                <h3 class="j-title">The Origin</h3>
                <p class="j-desc">Started in 2012 by Mak Pik, whose secret sauce became a neighborhood legend. She believed that "heat" shouldn't just hurt — it should dance on the palate.</p>
                <div class="founder-box">
                    <div class="founder-avatar" style="background-image: url('https://randomuser.me/api/portraits/women/68.jpg');"></div>
                    <div class="founder-name">Founded by Mak Pik</div>
                </div>
            </div>

            <!-- 4. The Secret Craft -->
            <div class="j-card card-craft">
                <div class="card-craft-content">
                    <div class="craft-tags">
                        <span>100% HANDMADE</span>
                        <span class="tag-red">SPICE SCALE 10+</span>
                    </div>
                    <h3 class="j-title">The Secret Craft</h3>
                    <p class="j-desc">Our cilok is kneaded daily using premium tapioca flour and steamed to the perfect 'chewy' consistency that locals love.</p>
                </div>
                <div class="card-craft-img" style="background-image: url('https://images.unsplash.com/photo-1615486511484-92e172fc34ea?auto=format&fit=crop&w=500&q=80');"></div>
            </div>
        </div>
    </section>

    <!-- Our Spicy Values -->
    <section class="values-section">
        <div class="values-left">
            <h2>Our Spicy<br>Values</h2>
            <p>We are guided by the heat of our passion and the warmth of our community.</p>
        </div>
        <div class="values-right">
            <div class="val-card">
                <div class="val-icon">
                    <i class="fa-solid fa-heart"></i>
                </div>
                <h3>Passion First</h3>
                <p>Every bowl is served with genuine Indonesian hospitality.</p>
            </div>
            <div class="val-card">
                <div class="val-icon">
                    <i class="fa-solid fa-leaf"></i>
                </div>
                <h3>Pure Quality</h3>
                <p>We source only the freshest bird's eye chilies from local farmers.</p>
            </div>
            <div class="val-card">
                <div class="val-icon">
                    <i class="fa-solid fa-users"></i>
                </div>
                <h3>Inclusion</h3>
                <p>Street food for everyone, from teenagers to spice veterans.</p>
            </div>
        </div>
    </section>

    <!-- Dark CTA -->
    <section class="dark-cta-section">
        <div class="dark-cta">
            <h2>Ready to test your limits?</h2>
            <p>Join thousands of heat-seekers who have discovered the legendary taste of Mak Pik.</p>
            <div class="dark-cta-buttons">
                <a href="{{ route('menu') }}" class="btn-cta-red">Explore Our Menu</a>
                <a href="{{ route('home') }}" class="btn-cta-grey">Find a Branch</a>
            </div>
        </div>
    </section>

    <!-- Footer Area (Same as Homepage) -->
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