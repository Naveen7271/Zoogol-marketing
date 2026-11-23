@extends('layouts.app')

@section('title', 'How Zoogol Works | Cashback, Moneyback & Profits | Zoogol')
@section('meta_description', 'Shop across 300+ websites and 500+ local stores, get cashback everytime plus earn moneyback and profits with Zoogol.')

@push('styles')
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
@endpush

@section('content')
    <!-- How Zoogol Works - Hero Section (Section 1) -->
    <section class="hzw-hero-section" id="how-zoogol-works-hero">
        <div class="hzw-hero-container">
            <div class="hzw-hero-grid">
                <!-- Left Content Column -->
                <div class="hzw-hero-content">
                    <h1 class="hzw-hero-title">
                        First time ever,<br>
                        Cashback,<br>
                        moneyback, profits.
                    </h1>
                    <p class="hzw-hero-tagline">
                        From the same day to day purchase
                    </p>
                    <p class="hzw-hero-desc">
                        Shop across 300+ websites and 500+ local stores, get cashback everytime plus earn moneyback and profits.
                    </p>
                    <div class="hzw-hero-cta">
                        <a href="{{ route('how-to-start') }}#quick-register" class="btn-hzw-primary" id="btn-hzw-start-saving">
                            <span>Start saving with Zoogol</span>
                            <svg class="btn-arrow-icon" width="18" height="18" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <polyline points="12 5 19 12 12 19"></polyline>
                            </svg>
                        </a>
                        <a href="#how-it-works" class="btn-hzw-secondary" id="btn-hzw-see-how">
                            <span>See how it works</span>
                            <svg class="btn-arrow-icon" width="18" height="18" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <polyline points="12 5 19 12 12 19"></polyline>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Right Visual Column (Drop hero image at public/images/how-zoogol-works-hero.png) -->
                <div class="hzw-hero-visual">
                    <div class="hzw-visual-frame">
                        @if(file_exists(public_path('images/how-zoogol-works-hero.png')))
                            <img src="{{ asset('images/how-zoogol-works-hero.png') }}"
                                alt="How Zoogol Works - Cashback, Moneyback and Profits"
                                class="hzw-visual-img">
                        @else
                            <div class="hzw-visual-placeholder" role="img" aria-label="How Zoogol Works visual placeholder"></div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- How Zoogol Works - Trust Strip & More About Zoogol Wheel Section (Section 2) -->
    <section class="hzw-about-section" id="how-it-works">
        <!-- Top Trust Strip -->
        <div class="hzw-trust-bar">
            <div class="hzw-trust-container">
                <div class="hzw-trust-grid">
                    <!-- 1. Verified deals -->
                    <div class="hzw-trust-item">
                        <span class="hzw-trust-icon" aria-hidden="true">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="rgba(250, 130, 20, 0.12)" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                                <path d="m9 12 2 2 4-4" fill="none"></path>
                            </svg>
                        </span>
                        <div class="hzw-trust-text">
                            <div class="hzw-trust-title">Verified deals</div>
                            <div class="hzw-trust-sub">100% verified offers</div>
                        </div>
                    </div>

                    <!-- 2. Real cashback -->
                    <div class="hzw-trust-item">
                        <span class="hzw-trust-icon" aria-hidden="true">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="rgba(250, 130, 20, 0.12)" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="2" y="5" width="20" height="14" rx="2"></rect>
                                <line x1="2" y1="10" x2="22" y2="10"></line>
                                <line x1="6" y1="15" x2="10" y2="15"></line>
                            </svg>
                        </span>
                        <div class="hzw-trust-text">
                            <div class="hzw-trust-title">Real cashback</div>
                            <div class="hzw-trust-sub">Real money, not coins</div>
                        </div>
                    </div>

                    <!-- 3. Secure payments -->
                    <div class="hzw-trust-item">
                        <span class="hzw-trust-icon" aria-hidden="true">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="rgba(250, 130, 20, 0.12)" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                                <path d="M7 11V7a5 5 0 0 1 10 0v4" fill="none"></path>
                            </svg>
                        </span>
                        <div class="hzw-trust-text">
                            <div class="hzw-trust-title">Secure payments</div>
                            <div class="hzw-trust-sub">100% safe &amp; secure</div>
                        </div>
                    </div>

                    <!-- 4. Customer support -->
                    <div class="hzw-trust-item">
                        <span class="hzw-trust-icon" aria-hidden="true">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="rgba(250, 130, 20, 0.12)" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M3 18v-6a9 9 0 0 1 18 0v6" fill="none"></path>
                                <path d="M21 19a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3zM3 19a2 2 0 0 0 2 2h1a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H3z"></path>
                            </svg>
                        </span>
                        <div class="hzw-trust-text">
                            <div class="hzw-trust-title">Customer support</div>
                            <div class="hzw-trust-sub">We&rsquo;re here for you</div>
                        </div>
                    </div>

                    <!-- 5. Online + offline -->
                    <div class="hzw-trust-item">
                        <span class="hzw-trust-icon" aria-hidden="true">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="rgba(250, 130, 20, 0.12)" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round">
                                <path d="m2 7 4.41-4.41A2 2 0 0 1 7.83 2h8.34a2 2 0 0 1 1.42.59L22 7"></path>
                                <path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8" fill="none"></path>
                                <path d="M15 22v-4a2 2 0 0 0-2-2h-2a2 2 0 0 0-2 2v4" fill="none"></path>
                                <path d="M2 7h20"></path>
                            </svg>
                        </span>
                        <div class="hzw-trust-text">
                            <div class="hzw-trust-title">Online + offline</div>
                            <div class="hzw-trust-sub">Shop everywhere</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Two-Column Content + Interactive Category Wheel -->
        <div class="hzw-about-main">
            <div class="hzw-about-container">
                <div class="hzw-about-grid">
                    <!-- Left Copy Column -->
                    <div class="hzw-about-content">
                        <span class="hzw-about-eyebrow">MORE ABOUT ZOOGOL</span>
                        <h2 class="hzw-about-title">
                            Earn on the things you<br>
                            already buy.
                        </h2>
                        <p class="hzw-about-desc">
                            Zoogol is a smart shopping and earning platform for your day-to-day purchases. From online shopping and travel bookings to salons, fitness, insurance, groceries and local stores, you earn extra cashback, rewards and lifetime earnings.
                        </p>

                        <!-- Online / Offline Stat Switcher -->
                        <div class="hzw-channel-switcher" role="tablist" aria-label="Shopping channels">
                            <button type="button" class="hzw-channel-pill is-active" data-channel="online" role="tab" aria-selected="true">
                                <span class="hzw-channel-name">Online</span>
                                <span class="hzw-channel-stat">300+ websites &amp; brands</span>
                            </button>
                            <button type="button" class="hzw-channel-pill" data-channel="offline" role="tab" aria-selected="false">
                                <span class="hzw-channel-name">Offline</span>
                                <span class="hzw-channel-stat">500+ local stores</span>
                            </button>
                        </div>
                    </div>

                    <!-- Right Interactive Category Wheel Column -->
                    <div class="hzw-about-wheel-col">
                        <div class="hzw-about-wheel-wrap">
                            @php
                                require_once resource_path('category-wheel.php');
                                zgw_render(['default_index' => 2]);
                            @endphp
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- How Zoogol Works - 3-Step Flow Section (Section 3: Discover, Shop. Get Cashback everytime.) -->
    <section class="hzw-steps-section" id="discover-shop-cashback">
        <div class="hzw-steps-container">
            <!-- Section Header Row -->
            <div class="hzw-steps-header">
                <div class="hzw-steps-header-left">
                    <span class="hzw-steps-eyebrow">HOW ZOOGOL WORKS</span>
                    <h2 class="hzw-steps-title">
                        Discover, Shop.<br>
                        Get Cashback everytime.
                    </h2>
                </div>
                <p class="hzw-steps-subtitle">
                    Follow one deal from the search box to your wallet.<br>
                    That is the whole idea behind Zoogol.
                </p>
            </div>

            <!-- Three Step Cards -->
            <div class="hzw-steps-grid">
                <!-- Card 01: Discover deals -->
                <article class="hzw-step-card">
                    <div class="hzw-step-visual hzw-visual-peach">
                        <span class="hzw-step-badge hzw-badge-peach">01</span>

                        <div class="hzw-mockup-search-card">
                            <div class="hzw-search-bar-row">
                                <span class="hzw-search-input-left">
                                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#fa8214" stroke-width="2.3" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                        <circle cx="11" cy="11" r="8"></circle>
                                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                    </svg>
                                    <span class="hzw-search-query">Running shoes</span>
                                </span>
                                <span class="hzw-search-trailing-box" aria-hidden="true"></span>
                            </div>

                            <div class="hzw-search-filters" aria-hidden="true">
                                <span class="hzw-filter-chip is-active">
                                    <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <line x1="2" y1="12" x2="22" y2="12"></line>
                                        <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
                                    </svg>
                                    Online
                                </span>
                                <span class="hzw-filter-chip">
                                    <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                        <circle cx="12" cy="10" r="3"></circle>
                                    </svg>
                                    Nearby
                                </span>
                                <span class="hzw-filter-chip">
                                    <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"></path>
                                        <line x1="7" y1="7" x2="7.01" y2="7"></line>
                                    </svg>
                                    Brands
                                </span>
                            </div>

                            <div class="hzw-search-result-row">
                                <div class="hzw-result-left">
                                    <div class="hzw-store-avatar" aria-hidden="true">S</div>
                                    <div>
                                        <div class="hzw-store-name">SprintMart</div>
                                        <span class="hzw-skeleton-line" aria-hidden="true"></span>
                                    </div>
                                </div>
                                <div class="hzw-result-right">
                                    <div class="hzw-result-price">&#8377;2,999</div>
                                    <div class="hzw-cashback-pill">+ &#8377;129 cashback</div>
                                </div>
                            </div>

                            <div class="hzw-search-skeleton-row" aria-hidden="true">
                                <div class="hzw-result-left">
                                    <span class="hzw-skeleton-avatar"></span>
                                    <div class="hzw-skeleton-stack">
                                        <span class="hzw-skeleton-bar-lg"></span>
                                        <span class="hzw-skeleton-bar-sm"></span>
                                    </div>
                                </div>
                                <span class="hzw-skeleton-pill"></span>
                            </div>
                        </div>
                    </div>

                    <div class="hzw-step-body">
                        <h3 class="hzw-step-title">Discover deals</h3>
                        <p class="hzw-step-desc">Find online deals, local offers and brand discounts in one place.</p>
                    </div>
                </article>

                <!-- Card 02: Shop -->
                <article class="hzw-step-card">
                    <div class="hzw-step-visual hzw-visual-pink">
                        <span class="hzw-step-badge hzw-badge-pink">02</span>

                        <div class="hzw-mockup-map-card">
                            <div class="hzw-map-canvas" aria-hidden="true">
                                <!-- City Block Grid -->
                                <div class="hzw-map-grid">
                                    <span></span><span></span><span></span><span></span><span></span>
                                    <span></span><span class="is-park"></span><span class="is-park"></span><span></span><span></span>
                                    <span></span><span></span><span></span><span></span><span></span>
                                </div>

                                <!-- Dashed Route SVG -->
                                <svg class="hzw-map-route-svg" viewBox="0 0 260 150" preserveAspectRatio="none" fill="none">
                                    <path d="M66 106 L143 106 L143 44" stroke="#9d174d" stroke-width="2.2" vector-effect="non-scaling-stroke" stroke-dasharray="4 4" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <span class="hzw-map-start-dot"></span>

                                <!-- Nearby Store Tooltip -->
                                <div class="hzw-map-tooltip">
                                    <div class="hzw-map-tooltip-title">Green Basket</div>
                                    <div class="hzw-map-tooltip-sub">400 m away</div>
                                </div>

                                <!-- Pink Store Pin -->
                                <div class="hzw-map-pin-halo">
                                    <div class="hzw-map-pin-core">
                                        <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="m2 7 4.41-4.41A2 2 0 0 1 7.83 2h8.34a2 2 0 0 1 1.42.59L22 7"></path>
                                            <path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"></path>
                                            <path d="M2 7h20"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            <!-- Store URL Bar -->
                            <div class="hzw-map-url-bar">
                                <span class="hzw-url-left">
                                    <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="#a855f7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <line x1="2" y1="12" x2="22" y2="12"></line>
                                        <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
                                    </svg>
                                    <span class="hzw-url-text">sprintmart.in</span>
                                </span>
                                <span class="hzw-url-pill">Online</span>
                            </div>
                        </div>
                    </div>

                    <div class="hzw-step-body">
                        <h3 class="hzw-step-title">Shop</h3>
                        <p class="hzw-step-desc">Shop online from top brands or explore exciting offers at nearby stores.</p>
                    </div>
                </article>

                <!-- Card 03: Get Cashback -->
                <article class="hzw-step-card">
                    <div class="hzw-step-visual hzw-visual-blue">
                        <span class="hzw-step-badge hzw-badge-blue">03</span>

                        <div class="hzw-mockup-reward-card">
                            <!-- Decorative Confetti Shapes -->
                            <span class="hzw-confetti-dot hzw-conf-1" aria-hidden="true"></span>
                            <span class="hzw-confetti-dot hzw-conf-2" aria-hidden="true"></span>
                            <span class="hzw-confetti-dot hzw-conf-3" aria-hidden="true"></span>
                            <span class="hzw-confetti-dash hzw-conf-4" aria-hidden="true"></span>
                            <span class="hzw-confetti-dash hzw-conf-5" aria-hidden="true"></span>
                            <span class="hzw-confetti-spark hzw-conf-6" aria-hidden="true">
                                <svg width="11" height="11" viewBox="0 0 24 24" fill="currentColor"><path d="M12 0c.6 6.2 5.8 11.4 12 12-6.2.6-11.4 5.8-12 12C11.4 17.8 6.2 12.6 0 12 6.2 11.4 11.4 6.2 12 0Z"/></svg>
                            </span>
                            <span class="hzw-confetti-spark hzw-conf-7" aria-hidden="true">
                                <svg width="10" height="10" viewBox="0 0 24 24" fill="currentColor"><path d="M12 0c.6 6.2 5.8 11.4 12 12-6.2.6-11.4 5.8-12 12C11.4 17.8 6.2 12.6 0 12 6.2 11.4 11.4 6.2 12 0Z"/></svg>
                            </span>

                            <div class="hzw-reward-check-circle" aria-hidden="true">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12"></polyline>
                                </svg>
                            </div>

                            <div class="hzw-reward-status-pill">
                                <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="2.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                    <polyline points="20 6 9 17 4 12"></polyline>
                                </svg>
                                <span>Cashback earned</span>
                            </div>

                            <div class="hzw-reward-amount">&#8377;129</div>
                        </div>
                    </div>

                    <div class="hzw-step-body">
                        <h3 class="hzw-step-title">Get Cashback</h3>
                        <p class="hzw-step-desc">Shop through Zoogol and get cashback on eligible purchases.</p>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <section class="hzw-reasons-section" id="reasons-to-shop">
        <div class="hzw-reasons-container">
            <header class="hzw-reasons-header">
                <span class="hzw-eyebrow">REASONS TO SHOP VIA ZOOGOL</span>
                <h2 class="hzw-reasons-title">
                    More than shopping.<br>
                    <span>Smarter earning.</span>
                </h2>
                <p class="hzw-reasons-subtitle">Refer and earn upto 111% of your purchase amount.*</p>
            </header>

            <div class="hzw-reasons-banner">
                @if (! empty($reasonsImagePath))
                    <img src="{{ asset($reasonsImagePath) }}" alt="Friends sharing deals and earning Zoogol cashback together" class="hzw-reasons-img">
                @else
                    <div class="hzw-reasons-fallback" aria-label="Reasons to shop via Zoogol banner placeholder">
                        <div class="hzw-reasons-fallback-inner">
                            <span class="hzw-reasons-fallback-badge">Banner Image Slot</span>
                            <p class="hzw-reasons-fallback-text">Add your lifestyle banner image at</p>
                            <code class="hzw-reasons-fallback-path">public/images/how-zoogol-works-reasons.png</code>
                            <span class="hzw-reasons-fallback-hint">(Also supports .png, .jpeg, or .webp)</span>
                        </div>
                    </div>
                @endif
            </div>

            <div class="hzw-reasons-stats">
                <div class="hzw-reason-stat">
                    <div class="hzw-reason-value">111%</div>
                    <h3 class="hzw-reason-label">Money back</h3>
                    <p class="hzw-reason-desc">Everytime when you refer</p>
                </div>

                <div class="hzw-reason-stat">
                    <div class="hzw-reason-value">300+</div>
                    <h3 class="hzw-reason-label">Websites &amp; brands</h3>
                    <p class="hzw-reason-desc">Top global brands. Incredible offers.</p>
                </div>

                <div class="hzw-reason-stat">
                    <div class="hzw-reason-value">500+</div>
                    <h3 class="hzw-reason-label">Local stores</h3>
                    <p class="hzw-reason-desc">Shop local. Earn more.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="hzw-partners-section" id="zoogol-partners">
        <div class="hzw-partners-container">
            <div class="hzw-partners-grid">
                <div class="hzw-partners-visual">
                    @if (! empty($partnersImagePath))
                        <img src="{{ asset($partnersImagePath) }}" alt="Zoogol Partner creator with upgraded account and affiliate earnings" class="hzw-partners-img">
                    @else
                        <div class="hzw-partners-fallback" aria-label="Zoogol Partners image placeholder">
                            <div class="hzw-partners-fallback-inner">
                                <span class="hzw-partners-fallback-badge">Partner Visual Slot</span>
                                <p class="hzw-partners-fallback-text">Add your partner section image at</p>
                                <code class="hzw-partners-fallback-path">public/images/how-zoogol-works-partners.png</code>
                                <span class="hzw-partners-fallback-hint">(Also supports .jpg, .jpeg, or .webp)</span>
                            </div>
                        </div>
                    @endif
                </div>

                <div class="hzw-partners-content">
                    <span class="hzw-eyebrow hzw-eyebrow--partner">ZOOGOL PARTNERS</span>
                    <h2 class="hzw-partners-title">Turn the audience you built into income.</h2>
                    <p class="hzw-partners-subtitle">
                        Selected macro partners get upgraded Zoogol accounts and unique affiliate links to earn commission on every purchase they refer.
                    </p>

                    <div class="hzw-partner-features">
                        <div class="hzw-partner-feature">
                            <span class="hzw-partner-icon" aria-hidden="true">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M3.85 8.62a4 4 0 0 1 4.78-4.77 4 4 0 0 1 6.74 0 4 4 0 0 1 4.78 4.78 4 4 0 0 1 0 6.74 4 4 0 0 1-4.77 4.78 4 4 0 0 1-6.75 0 4 4 0 0 1-4.78-4.77 4 4 0 0 1 0-6.76Z"/>
                                    <path d="m9 12 2 2 4-4"/>
                                </svg>
                            </span>
                            <div class="hzw-partner-feature-copy">
                                <h3 class="hzw-partner-feature-title">An upgraded account</h3>
                                <p class="hzw-partner-feature-desc">Exclusive access for selected partners.</p>
                            </div>
                        </div>

                        <div class="hzw-partner-feature">
                            <span class="hzw-partner-icon" aria-hidden="true">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/>
                                    <path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/>
                                </svg>
                            </span>
                            <div class="hzw-partner-feature-copy">
                                <h3 class="hzw-partner-feature-title">Your own Affiliate links</h3>
                                <p class="hzw-partner-feature-desc">Every sale through your links is credited to you.</p>
                            </div>
                        </div>

                        <div class="hzw-partner-feature">
                            <span class="hzw-partner-icon" aria-hidden="true">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="9"/>
                                    <path d="M9 8h6"/>
                                    <path d="M9 11h6"/>
                                    <path d="m9 14 4.5 4"/>
                                    <path d="M9 14h2.5a2.5 2.5 0 0 0 0-5"/>
                                </svg>
                            </span>
                            <div class="hzw-partner-feature-copy">
                                <h3 class="hzw-partner-feature-title">Commission on every sale</h3>
                                <p class="hzw-partner-feature-desc">Earn on every purchase through your links.</p>
                            </div>
                        </div>
                    </div>

                    <div class="hzw-partners-actions">
                        <a href="{{ route('how-to-start') }}#quick-register" class="btn-hzw-primary">Apply as a partner</a>
                        <a href="{{ route('refer-and-earn') }}" class="btn-hzw-outline">Learn more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="hzw-cta-section" id="ready-to-shop">
        <div class="hzw-cta-arcs" aria-hidden="true">
            <span class="hzw-cta-arc hzw-cta-arc--outer"></span>
            <span class="hzw-cta-arc hzw-cta-arc--mid"></span>
            <span class="hzw-cta-arc hzw-cta-arc--inner"></span>
        </div>

        <div class="hzw-cta-container">
            <span class="hzw-eyebrow hzw-eyebrow--cta">WHEN YOU ARE READY</span>
            <h2 class="hzw-cta-title">What are you buying next?</h2>
            <p class="hzw-cta-subtitle">
                Search it on Zoogol first. Verified deals, extra cashback and money back, online and at local stores.
            </p>

            <form class="hzw-cta-search-form" action="{{ route('home') }}" method="GET" role="search" aria-label="Search Zoogol deals">
                <div class="hzw-cta-search-field">
                    <span class="hzw-cta-search-icon" aria-hidden="true">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="11" cy="11" r="8"></circle>
                            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                        </svg>
                    </span>
                    <input
                        type="search"
                        name="q"
                        class="hzw-cta-search-input"
                        placeholder="Groceries, flights, a haircut, insurance..."
                        aria-label="What are you buying next?"
                    >
                </div>
                <button type="submit" class="hzw-cta-search-btn">
                    <span>Find deals</span>
                    <svg class="btn-arrow-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                        <polyline points="12 5 19 12 12 19"></polyline>
                    </svg>
                </button>
            </form>

            <div class="hzw-cta-auth-row">
                <span class="hzw-cta-auth-prompt">New to Zoogol?</span>
                <a href="{{ route('how-to-start') }}#quick-register" class="hzw-cta-signup-pill">Sign up</a>
                <span class="hzw-cta-auth-or">or</span>
                <a href="{{ route('how-to-start') }}#login" class="hzw-cta-login-link">Log in</a>
            </div>

            <ul class="hzw-cta-checks" aria-label="Zoogol guarantees">
                @foreach (['100% verified offers', 'Real money, not coins', 'Secure payments'] as $guarantee)
                    <li class="hzw-cta-check-item">
                        <svg class="hzw-cta-check-icon" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <polyline points="20 6 9 17 4 12"></polyline>
                        </svg>
                        <span>{{ $guarantee }}</span>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const channelPills = document.querySelectorAll('.hzw-channel-pill');
            channelPills.forEach(function (pill) {
                pill.addEventListener('click', function () {
                    channelPills.forEach(function (item) {
                        item.classList.remove('is-active');
                        item.setAttribute('aria-selected', 'false');
                    });
                    pill.classList.add('is-active');
                    pill.setAttribute('aria-selected', 'true');
                });
            });
        });
    </script>
@endpush
