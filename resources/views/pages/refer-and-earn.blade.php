@extends('layouts.app')

@section('title', 'Refer & Earn | Your Network, Their Savings & Your Earnings | Zoogol')
@section('meta_description', 'Invite friends to Zoogol and turn their shopping into extra savings and real rewards for you. Build your referral network and unlock lifetime passive cashback.')

@section('content')
    <!-- Refer & Earn - Hero Section (Section 1) -->
    <section class="refer-hero-section" id="refer-hero"
        style="background-image: url('{{ asset('images/refer-earn.png') }}');">
        <div class="refer-hero-container">
            <div class="refer-hero-grid">
                <!-- Left Content Column -->
                <div class="refer-hero-content">
                    <h1 class="refer-hero-title">
                        Your Network,<br>
                        Their Savings &<br>
                        <span class="refer-highlight-orange">Your Earnings.</span>
                    </h1>
                    <p class="refer-hero-desc">
                        Invite friends to Zoogol and turn their shopping into extra savings and real rewards for you.
                    </p>
                    <div class="refer-hero-cta">
                        <a href="{{ route('how-to-start') }}#quick-register" class="btn-refer-primary"
                            id="btn-start-referring">
                            <span>Start Referring Now</span>
                            <svg class="btn-arrow-icon" width="20" height="20" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <polyline points="12 5 19 12 12 19"></polyline>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Refer & Earn - Video Showcase Section (Section 2) -->
    <section class="refer-video-section" id="refer-video">
        <div class="refer-video-container">
            <div class="refer-video-grid">
                <!-- Left Content Column -->
                <div class="refer-video-content">
                    <span class="refer-video-pre">EARN WITH ZOOGOL</span>
                    <h2 class="refer-video-title">
                        <span class="text-title-muted">Watch how easy it</span><br>
                        <span class="text-title-muted">is to</span> <strong>earn with</strong><br>
                        <strong>Zoogol</strong>
                    </h2>
                    <p class="refer-video-desc">
                        See how you can turn your network into a source of income
                    </p>
                    <button type="button" class="btn-refer-video" id="btn-watch-refer-video" aria-label="Watch Video">
                        <span>Watch Video</span>
                        <span class="btn-play-icon">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <polygon points="6 4 19 12 6 20 6 4" fill="currentColor"></polygon>
                            </svg>
                        </span>
                    </button>
                </div>

                <!-- Right Video Mockup Column -->
                <div class="refer-video-wrapper">
                    <!-- Top Orange Decorative Accent Bar -->
                    <div class="refer-video-accent-bar" aria-hidden="true"></div>

                    <!-- Video Player Card -->
                    <div class="refer-video-mockup" id="refer-video-player" role="button" tabindex="0"
                        aria-label="Play Zoogol referral walkthrough video">
                        <!-- Poster Image & Fallback -->
                        <img src="{{ asset('images/refer/watch-video-thumb.jpg') }}"
                            alt="Watch how easy it is to earn with Zoogol" class="refer-video-poster"
                            onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                        <div class="refer-video-fallback" style="display: none;">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="1.5">
                                <polygon points="6 4 19 12 6 20 6 4"></polygon>
                            </svg>
                            <p>Video Thumbnail Area</p>
                            <span>Drop your thumbnail image file at:</span>
                            <code>public/images/refer/watch-video-thumb.jpg</code>
                        </div>

                        <!-- Centered Play Button with Glow Halo -->
                        <div class="refer-play-btn-wrap" aria-hidden="true">
                            <div class="refer-play-halo">
                                <div class="refer-play-inner">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ffffff"
                                        stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                        <polygon points="7 4 19 12 7 20 7 4" fill="none" stroke="#ffffff"></polygon>
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <!-- Video Controls Overlay Bar -->
                        <div class="refer-video-controls-overlay" aria-hidden="true">
                            <!-- Progress Bar with Scrubber Dot -->
                            <div class="refer-video-progress">
                                <div class="refer-video-progress-fill">
                                    <span class="refer-video-progress-dot"></span>
                                </div>
                            </div>

                            <!-- Controls Row -->
                            <div class="refer-video-control-row">
                                <div class="control-group-left">
                                    <span class="control-icon-btn" style="color: #fa8214;">
                                        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2.5">
                                            <polygon points="6 4 18 12 6 20 6 4" fill="currentColor"></polygon>
                                        </svg>
                                    </span>
                                    <span class="control-icon-btn">
                                        <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2">
                                            <polygon points="11 5 6 9 2 9 2 15 6 15 11 19 11 5"></polygon>
                                            <path d="M15.54 8.46a5 5 0 0 1 0 7.07"></path>
                                        </svg>
                                    </span>
                                    <span class="time-stamp">0:48</span>
                                </div>
                                <div class="control-group-right">
                                    <span class="time-stamp">2:00</span>
                                    <span class="control-icon-btn">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2">
                                            <path
                                                d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3">
                                            </path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Refer & Earn - Why Refer Section (Section 3: Pinned Horizontal Scroll on Vertical Scroll) -->
    <div class="refer-why-pinned-wrapper" id="refer-why-pinned-wrapper">
        <div class="refer-why-sticky-container" id="refer-why-sticky-container">
            <section class="refer-why-section" id="why-refer">
                <div class="refer-why-container">
                    <!-- Top Step Timeline Bar -->
                    <div class="refer-timeline-bar" aria-hidden="true">
                        <div class="timeline-spacer"></div>
                        <div class="timeline-ticks-wrapper">
                            <div class="timeline-tick-item tick-col-1 is-active" id="tick-step-1">
                                <span>01</span>
                            </div>
                            <div class="timeline-tick-item tick-col-2" id="tick-step-2">
                                <span>02 &middot; 03</span>
                            </div>
                            <div class="timeline-tick-item tick-col-3" id="tick-step-3">
                                <span>04 &middot; 05</span>
                            </div>
                            <div class="timeline-tick-item tick-col-4" id="tick-step-4">
                                <span>06</span>
                            </div>
                        </div>
                    </div>

                    <!-- Main Flex Layout: Left Header + Right Cards Track -->
                    <div class="refer-why-main-layout">
                        <!-- Left Content Column -->
                        <div class="refer-why-left-col">
                            <div>
                                <span class="refer-why-pre">BUILT TO REWARD YOU MORE</span>
                                <h2 class="refer-why-title">
                                    Why refer<br>
                                    through<br>
                                    Zoogol?
                                </h2>
                                <p class="refer-why-desc">
                                    Refer your friends and earn every time they shop.
                                </p>
                            </div>

                            <!-- Bottom Indicator & Navigation Controls -->
                            <div class="refer-why-scroll-indicator">
                                <span class="scroll-indicator-text">Six reasons, scroll along</span>
                                <span class="scroll-indicator-line" aria-hidden="true"></span>
                                <div class="scroll-nav-arrows">
                                    <button type="button" class="btn-scroll-arrow" id="btn-scroll-prev"
                                        aria-label="Previous Reason">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                            <polyline points="15 18 9 12 15 6"></polyline>
                                        </svg>
                                    </button>
                                    <button type="button" class="btn-scroll-arrow" id="btn-scroll-next"
                                        aria-label="Next Reason">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                            <polyline points="9 18 15 12 9 6"></polyline>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Right Horizontal Scroll Area -->
                        <div class="refer-why-scroll-area">
                            <div class="refer-cards-track" id="refer-cards-track">
                                <!-- Column 1: Card 01 (Earn on every order) -->
                                <div class="why-col-tall">
                                    <div class="card-reason-01">
                                        <div>
                                            <div class="huge-step-num">01</div>
                                            <h3 class="card-title-lg">Earn on every order</h3>
                                            <p class="card-desc-md">Get rewarded every time your referrals shop.</p>
                                        </div>

                                        <!-- Floating Order Mockup Box -->
                                        <div class="mockup-order-box">
                                            <div class="mockup-order-header">
                                                <div class="order-icon-wrap">
                                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                                                        <line x1="3" y1="6" x2="21" y2="6"></line>
                                                        <path d="M16 10a4 4 0 0 1-8 0"></path>
                                                    </svg>
                                                </div>
                                                <div class="order-meta-info">
                                                    <div class="order-id-text">Order #ZG-20481</div>
                                                    <div class="order-sub-text">Ananya &middot; 2 items</div>
                                                </div>
                                                <span class="badge-delivered">
                                                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="3">
                                                        <polyline points="20 6 9 17 4 12"></polyline>
                                                    </svg>
                                                    Delivered
                                                </span>
                                            </div>

                                            <div class="order-total-row">
                                                <span class="order-total-label">Order total</span>
                                                <span class="order-total-value">&#8377;2,340</span>
                                            </div>

                                            <div class="reward-payout-pill">
                                                <span class="reward-pill-label">Your reward</span>
                                                <span class="reward-pill-amount">+ &#8377;70</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Column 2: Cards 02 & 03 (Stacked) -->
                                <div class="why-col-stacked">
                                    <!-- Card 02: Unlimited earning potential -->
                                    <div class="card-stacked-item card-reason-02">
                                        <div class="card-stacked-content">
                                            <span class="card-step-badge">02</span>
                                            <h3 class="card-title-sm">Unlimited earning potential</h3>
                                            <p class="card-desc-sm">Your earnings grow as your network grows.</p>
                                        </div>
                                        <div class="mockup-network-card">
                                            <div class="network-header-row">
                                                <span class="network-header-title">Your network</span>
                                                <span class="badge-growing">Growing</span>
                                            </div>
                                            <div class="network-avatars-row">
                                                <span class="network-avatar-dot dot-blue">A</span>
                                                <span class="network-avatar-dot dot-sky">R</span>
                                                <span class="network-avatar-dot dot-pink">K</span>
                                                <span class="network-avatar-dot dot-green">M</span>
                                                <span class="network-avatar-dot dot-amber">S</span>
                                                <span class="network-avatar-dot dot-plus">+</span>
                                            </div>
                                            <div class="network-bars-chart">
                                                <span class="chart-bar" style="height: 25%;"></span>
                                                <span class="chart-bar" style="height: 42%;"></span>
                                                <span class="chart-bar" style="height: 55%;"></span>
                                                <span class="chart-bar" style="height: 70%;"></span>
                                                <span class="chart-bar" style="height: 84%;"></span>
                                                <span class="chart-bar" style="height: 100%;"></span>
                                            </div>
                                            <span class="network-caption">Every friend who shops adds to your
                                                earnings</span>
                                        </div>
                                    </div>

                                    <!-- Card 03: Real-time transparency -->
                                    <div class="card-stacked-item card-reason-03">
                                        <div class="mockup-activity-card">
                                            <div class="activity-header-row">
                                                <span class="activity-title">Reward activity</span>
                                                <span class="badge-live-dot">Live</span>
                                            </div>
                                            <div class="activity-list">
                                                <div class="activity-item">
                                                    <span class="activity-dot dot-gray"></span>
                                                    <span class="activity-label">Link opened &middot; <span
                                                            style="color: #9ca3af;">10:02 AM</span></span>
                                                </div>
                                                <div class="activity-item">
                                                    <span class="activity-dot dot-blue-fill"></span>
                                                    <span class="activity-label">Ananya signed up &middot; <span
                                                            style="color: #9ca3af;">10:05 AM</span></span>
                                                </div>
                                                <div class="activity-item">
                                                    <span class="activity-dot dot-orange-fill"></span>
                                                    <span class="activity-label">Order placed &middot; &#8377;2,340</span>
                                                </div>
                                                <div class="activity-item">
                                                    <span class="activity-dot dot-green-fill"></span>
                                                    <span class="activity-label">Reward confirmed</span>
                                                    <span class="activity-badge-green">+ &#8377;70</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-stacked-content">
                                            <span class="card-step-badge">03</span>
                                            <h3 class="card-title-sm">Real-time transparency</h3>
                                            <p class="card-desc-sm">Easily track referrals, rewards and earnings.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Column 3: Cards 05 & 04 (Stacked) -->
                                <div class="why-col-stacked">
                                    <!-- Card 05: Lifetime rewards -->
                                    <div class="card-stacked-item card-reason-05">
                                        <div class="card-stacked-content">
                                            <span class="card-step-badge">05</span>
                                            <h3 class="card-title-sm">Lifetime rewards</h3>
                                            <p class="card-desc-sm">Once your referrals shop, you earn for life, even on
                                                repeat orders.</p>
                                        </div>
                                        <div class="mockup-lifetime-card">
                                            <div class="lifetime-header">
                                                <span class="lifetime-label">Lifetime rewards</span>
                                                <span class="badge-still-earning">Still earning</span>
                                            </div>
                                            <div class="lifetime-amount">&#8377;1,284</div>
                                            <div class="lifetime-sub">From 18 orders, including repeat orders</div>
                                            <div class="repeat-orders-bars">
                                                <span class="dense-bar" style="height: 35%;"></span>
                                                <span class="dense-bar" style="height: 50%;"></span>
                                                <span class="dense-bar" style="height: 40%;"></span>
                                                <span class="dense-bar" style="height: 70%;"></span>
                                                <span class="dense-bar" style="height: 60%;"></span>
                                                <span class="dense-bar" style="height: 85%;"></span>
                                                <span class="dense-bar" style="height: 75%;"></span>
                                                <span class="dense-bar" style="height: 95%;"></span>
                                                <span class="dense-bar" style="height: 100%;"></span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Card 04: Trusted by smart shoppers -->
                                    <div class="card-stacked-item card-reason-04">
                                        <div class="card-stacked-content">
                                            <span class="card-step-badge">04</span>
                                            <h3 class="card-title-sm">Trusted by smart shoppers</h3>
                                            <p class="card-desc-sm">Top brands. Best offers. Happy customers.</p>
                                        </div>
                                        <div class="mockup-confidence-card">
                                            <div class="confidence-header">
                                                <span class="shield-icon-circle">
                                                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2.5">
                                                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                                                    </svg>
                                                </span>
                                                <div class="confidence-header-text">
                                                    <span class="confidence-title">Shop with confidence</span>
                                                    <span class="confidence-sub">Why shoppers choose Zoogol</span>
                                                </div>
                                            </div>
                                            <div class="confidence-features">
                                                <span>&check; Top brands</span>
                                                <span>&check; Best offers</span>
                                                <span>&check; Happy customers</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Column 4: Card 06 (Real-time updates) -->
                                <div class="why-col-tall">
                                    <div class="card-reason-06">
                                        <!-- Smartphone Notification Mockup -->
                                        <div class="mockup-phone-frame">
                                            <div class="phone-dynamic-island"></div>
                                            <div class="phone-lock-time">9:41</div>
                                            <div class="phone-lock-date">Tuesday, 27 October</div>

                                            <div class="phone-notif-card">
                                                <div class="notif-app-icon">Z</div>
                                                <div class="notif-content-wrap">
                                                    <div class="notif-header-line">
                                                        <span>ZOOGOL</span>
                                                        <span>now</span>
                                                    </div>
                                                    <div class="notif-title-line">Ananya just shopped on Zoogol</div>
                                                    <div class="notif-sub-line">&#8377;70 reward added to your wallet</div>
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            <span class="card-step-badge">06</span>
                                            <h3 class="card-title-lg">Real-time updates</h3>
                                            <p class="card-desc-md">Get notified instantly when your referral shops and you
                                                earn rewards.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Bottom Scroll Progress Bar -->
                            <div class="refer-why-progress-track" aria-hidden="true">
                                <div class="refer-why-progress-bar" id="refer-scroll-progress"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <!-- Refer & Earn - Link Journey Section (Section 4: Your link does the work. You collect the rewards) -->
    <section class="refer-how-section" id="how-it-works" style="background-image: url('{{ asset('images/V2.png') }}');">
        <div class="container refer-how-container">
            <!-- Section Header -->
            <div class="refer-how-header">
                <!-- Eyebrow Pill -->
                <div class="refer-how-badge">
                    <span class="how-badge-icon" aria-hidden="true">
                        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="2.5"
                            stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="20 12 20 22 4 22 4 12"></polyline>
                            <rect x="2" y="7" width="20" height="5"></rect>
                            <line x1="12" y1="22" x2="12" y2="7"></line>
                            <path d="M12 7H7.5a2.5 2.5 0 0 1 0-5C11 2 12 7 12 7z"></path>
                            <path d="M12 7h4.5a2.5 2.5 0 0 0 0-5C13 2 12 7 12 7z"></path>
                        </svg>
                    </span>
                    <span class="how-badge-text">Refer &amp; Earn</span>
                </div>

                <!-- Main Heading -->
                <h2 class="refer-how-title">
                    <span>Your link does the work.</span><br>
                    <span class="title-blue-accent">You collect the rewards.</span>
                </h2>

                <!-- Subtitle -->
                <p class="refer-how-subtitle">
                    Share once, in under a minute. Every order your friend places<br class="d-none d-md-inline">
                    sends a reward back to you.
                </p>
            </div>
        </div>
    </section>

    <!-- Refer & Earn - Lifestyle Banner Section (Section 5: More friends. More earnings. Bigger lifestyle.) -->
    <section class="refer-lifestyle-section" id="refer-lifestyle">
        <div class="container refer-lifestyle-container">
            <div class="refer-lifestyle-card">
                <!-- Background Image & Gradient Overlay -->
                <div class="refer-lifestyle-bg">
                    <img src="{{ asset('images/refer/more-friends-banner.png') }}"
                        alt="More friends. More earnings. Bigger lifestyle." class="lifestyle-bg-img"
                        onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                    <!-- Fallback placeholder if user hasn't added the photo yet -->
                    <div class="lifestyle-bg-fallback" style="display: none;">
                        <div class="lifestyle-fallback-sunset-glow"></div>
                        <div class="lifestyle-fallback-note">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="rgba(255,255,255,0.7)"
                                stroke-width="1.5">
                                <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                <circle cx="8.5" cy="8.5" r="1.5"></circle>
                                <polyline points="21 15 16 10 5 21"></polyline>
                            </svg>
                            <p>Rooftop Friends Sunset Banner Photo</p>
                            <span>Place your image file at:</span>
                            <code>public/images/refer/more-friends-banner.jpg</code>
                        </div>
                    </div>
                    <!-- Left-to-Right Dark Vignette Overlay for Crisp Typography Contrast -->
                    <div class="lifestyle-gradient-overlay" aria-hidden="true"></div>
                </div>

                <!-- Text Content on the Left -->
                <div class="refer-lifestyle-content">
                    <h2 class="lifestyle-headline">
                        <span>More friends.</span><br>
                        <span>More earnings.</span><br>
                        <span>Bigger lifestyle.</span>
                    </h2>
                    <p class="lifestyle-subtext">
                        Invite more and earn more.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Optional Interactive Video Modal -->
    <div class="refer-video-modal" id="refer-video-modal" aria-hidden="true" role="dialog" aria-modal="true">
        <div class="refer-video-modal-content">
            <button type="button" class="btn-close-modal" id="btn-close-video-modal"
                aria-label="Close Video">&times;</button>
            <iframe id="refer-video-iframe" width="100%" height="100%" src="" title="Zoogol Walkthrough Video"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen style="border: none;"></iframe>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Video Modal Functionality
            const modal = document.getElementById('refer-video-modal');
            const iframe = document.getElementById('refer-video-iframe');
            const watchBtn = document.getElementById('btn-watch-refer-video');
            const videoMockup = document.getElementById('refer-video-player');
            const closeBtn = document.getElementById('btn-close-video-modal');

            const demoVideoUrl = 'https://www.youtube-nocookie.com/embed/dQw4w9WgXcQ?autoplay=1';

            function openModal() {
                if (modal && iframe) {
                    modal.classList.add('is-active');
                    modal.setAttribute('aria-hidden', 'false');
                    iframe.src = demoVideoUrl;
                }
            }

            function closeModal() {
                if (modal && iframe) {
                    modal.classList.remove('is-active');
                    modal.setAttribute('aria-hidden', 'true');
                    iframe.src = '';
                }
            }

            if (watchBtn) watchBtn.addEventListener('click', openModal);
            if (videoMockup) videoMockup.addEventListener('click', openModal);
            if (closeBtn) closeBtn.addEventListener('click', closeModal);
            if (modal) {
                modal.addEventListener('click', function (e) {
                    if (e.target === modal) closeModal();
                });
            }
            document.addEventListener('keydown', function (e) {
                if (e.key === 'Escape' && modal && modal.classList.contains('is-active')) {
                    closeModal();
                }
            });

            // =========================================================================
            // Pinned Vertical-to-Horizontal Scroll Experience
            // When user reaches this section by scrolling vertically, vertical motion
            // pins in place and scrolling down advances cards horizontally from 01 to 06.
            // =========================================================================
            const pinnedWrapper = document.getElementById('refer-why-pinned-wrapper');
            const stickyContainer = document.getElementById('refer-why-sticky-container');
            const track = document.getElementById('refer-cards-track');
            const scrollArea = document.querySelector('.refer-why-scroll-area');
            const ticksWrapper = document.querySelector('.timeline-ticks-wrapper');
            const progressBar = document.getElementById('refer-scroll-progress');
            const prevBtn = document.getElementById('btn-scroll-prev');
            const nextBtn = document.getElementById('btn-scroll-next');
            const header = document.getElementById('global-header');

            const ticks = [
                document.getElementById('tick-step-1'),
                document.getElementById('tick-step-2'),
                document.getElementById('tick-step-3'),
                document.getElementById('tick-step-4')
            ];

            let maxHorizontal = 0;
            let pinnedScrollDistance = 0;
            let isDesktop = window.innerWidth >= 992;
            let ticking = false;

            function getHeaderOffset() {
                if (!header) return 68;
                return Math.max(60, header.offsetHeight || 68);
            }

            function calculateLayout() {
                isDesktop = window.innerWidth >= 992;
                if (!pinnedWrapper || !track || !scrollArea) return;

                if (!isDesktop) {
                    pinnedWrapper.style.height = 'auto';
                    track.style.transform = '';
                    if (ticksWrapper) ticksWrapper.style.transform = '';
                    return;
                }

                const headerOffset = getHeaderOffset();
                if (stickyContainer) {
                    stickyContainer.style.top = headerOffset + 'px';
                    stickyContainer.style.height = 'calc(100vh - ' + headerOffset + 'px)';
                }

                // Total width of cards minus the visible width of the scroll area
                const totalCardsWidth = track.scrollWidth;
                const visibleWidth = scrollArea.clientWidth;
                maxHorizontal = Math.max(0, totalCardsWidth - visibleWidth + 30);

                // Generous vertical scroll distance (~1800px) so the user experiences
                // a smooth, comfortable glide through all 6 cards
                pinnedScrollDistance = Math.max(1600, Math.round(maxHorizontal * 2.2));
                pinnedWrapper.style.height = (window.innerHeight + pinnedScrollDistance) + 'px';
            }

            function updateScroll(progress) {
                progress = Math.max(0, Math.min(1, progress));

                // 1. Smooth GPU translation of cards track
                const translateX = progress * maxHorizontal;
                track.style.transform = 'translate3d(-' + translateX.toFixed(2) + 'px, 0, 0)';

                // 2. Translate timeline ticks in tandem with the columns
                if (ticksWrapper) {
                    ticksWrapper.style.transform = 'translate3d(-' + translateX.toFixed(2) + 'px, 0, 0)';
                }

                // 3. Update bottom progress bar (25% base up to 100%)
                if (progressBar) {
                    const widthPct = Math.max(25, Math.min(100, 25 + (progress * 75)));
                    progressBar.style.width = widthPct + '%';
                }

                // 4. Highlight current active step in top timeline
                const tickIndex = Math.min(3, Math.floor(progress * 3.99));
                ticks.forEach(function (tick, idx) {
                    if (tick) {
                        tick.classList.toggle('is-active', idx === tickIndex);
                    }
                });
            }

            function onPageScroll() {
                if (!ticking) {
                    window.requestAnimationFrame(function () {
                        handleSync();
                        ticking = false;
                    });
                    ticking = true;
                }
            }

            function handleSync() {
                if (!isDesktop || !pinnedWrapper || maxHorizontal <= 0) return;

                const headerOffset = getHeaderOffset();
                const wrapperRect = pinnedWrapper.getBoundingClientRect();
                const topOffset = headerOffset - wrapperRect.top;

                const startBuffer = 120;
                const endBuffer = 120;
                const activeDistance = Math.max(1, pinnedScrollDistance - startBuffer - endBuffer);

                if (topOffset <= startBuffer) {
                    updateScroll(0);
                } else if (topOffset >= pinnedScrollDistance - endBuffer) {
                    updateScroll(1);
                } else {
                    const progress = (topOffset - startBuffer) / activeDistance;
                    updateScroll(progress);
                }
            }

            // If user tries to swipe sideways on trackpad, convert horizontal wheel delta to vertical page scroll
            if (stickyContainer) {
                stickyContainer.addEventListener('wheel', function (e) {
                    if (!isDesktop) return;
                    if (Math.abs(e.deltaX) > Math.abs(e.deltaY) && Math.abs(e.deltaX) > 8) {
                        window.scrollBy({ top: e.deltaX, behavior: 'auto' });
                        e.preventDefault();
                    }
                }, { passive: false });
            }

            // Arrow navigation buttons
            if (prevBtn) {
                prevBtn.addEventListener('click', function () {
                    if (isDesktop && pinnedScrollDistance > 0) {
                        const stepY = pinnedScrollDistance / 3.2;
                        window.scrollBy({ top: -stepY, behavior: 'smooth' });
                    }
                });
            }

            if (nextBtn) {
                nextBtn.addEventListener('click', function () {
                    if (isDesktop && pinnedScrollDistance > 0) {
                        const stepY = pinnedScrollDistance / 3.2;
                        window.scrollBy({ top: stepY, behavior: 'smooth' });
                    }
                });
            }

            window.addEventListener('scroll', onPageScroll, { passive: true });
            window.addEventListener('resize', function () {
                calculateLayout();
                handleSync();
            });

            // Initial setup and recalculation after fonts/styles settle
            calculateLayout();
            handleSync();
            setTimeout(function () {
                calculateLayout();
                handleSync();
            }, 200);
            setTimeout(function () {
                calculateLayout();
                handleSync();
            }, 800);
        });
    </script>
@endpush