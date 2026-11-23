@extends('layouts.app')

@section('title', 'Zoogol | Get Instant Cashback on Every Purchase')
@section('meta_description', 'Discover great deals, shop top brands, and get rewarded every time you spend. Get instant cashback on every purchase with Zoogol.')

@section('content')
    <!-- Hero Card Banner Container (Matches Design) -->
    <div class="container" style="padding-top: 0.5rem;">
        <div class="hero-card-banner">
            <!-- Integrated Top Navigation Bar -->
            @include('partials.navbar')

            <!-- Hero Main Grid -->
            <div class="hero-main-grid">
                <div>
                    <h1 class="hero-headline">
                        Get Instant<br>
                        <span class="text-orange">Cashback</span> on<br>
                        Every Purchase.
                    </h1>
                    <p class="hero-description">
                        Discover great deals, shop top brands, and get rewarded every time you spend.
                    </p>
                    <div class="hero-cta-group">
                        <a href="#categories" class="btn-hero-primary">
                            Start Shopping
                        </a>
                        <a href="{{ route('how-to-start') }}" class="btn-hero-outline">
                            Explore Deals
                        </a>
                    </div>
                </div>

                <!-- Hero Visual / Shopper Image Area (Ready for manual image placement) -->
                <div class="hero-visual-wrap">
                    <img src="{{ asset('images/hero-shopper.png') }}" alt="Zoogol Shopper" class="hero-shopper-image"
                        onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                    <div class="hero-image-placeholder-frame" style="display: none;">
                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.5">
                            <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                            <circle cx="8.5" cy="8.5" r="1.5"></circle>
                            <polyline points="21 15 16 10 5 21"></polyline>
                        </svg>
                        <p>Shopper Image Area</p>
                        <span>Place your image at:<br><code>public/images/hero-shopper.png</code></span>
                    </div>
                </div>
            </div>

            <!-- Hero Bottom 3-Item Feature Strip -->
            <div class="hero-feature-strip">
                <!-- 1. Extra Deals -->
                <div class="feature-strip-item" id="extra-deals">
                    <div class="feature-strip-icon">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M19 11V6a2 2 0 0 0-2-2H7a2 2 0 0 0-2 2v5"></path>
                            <rect x="3" y="11" width="18" height="11" rx="2"></rect>
                            <circle cx="12" cy="16" r="2"></circle>
                        </svg>
                    </div>
                    <div class="feature-strip-title">Extra Deals</div>
                    <div class="feature-strip-desc">Same brands. Same spend.<br>Extra savings every time.</div>
                </div>

                <!-- 2. Instant Cashback -->
                <div class="feature-strip-item" id="instant-cashback">
                    <div class="feature-strip-icon">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                        </svg>
                    </div>
                    <div class="feature-strip-title">Instant Cashback</div>
                    <div class="feature-strip-desc">Get instant cashback on every purchase<br>you do.</div>
                </div>

                <!-- 3. Referral Moneyback -->
                <div class="feature-strip-item" id="referral-moneyback">
                    <div class="feature-strip-icon">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="2" y="6" width="20" height="12" rx="2"></rect>
                            <circle cx="12" cy="12" r="2"></circle>
                            <path d="M6 12h.01M18 12h.01"></path>
                        </svg>
                    </div>
                    <div class="feature-strip-title">Referral Moneyback</div>
                    <div class="feature-strip-desc">Share deals & Earn money back when<br>others shop.</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Categories to Explore Section (Matches Design) -->
    <section class="categories-section" id="categories">
        <div class="categories-header">
            <h2 class="categories-title">Categories to Explore</h2>
            <div class="categories-arrows">
                <button class="cat-arrow-btn" id="cat-prev-btn" aria-label="Previous categories">&lsaquo;</button>
                <button class="cat-arrow-btn" id="cat-next-btn" aria-label="Next categories">&rsaquo;</button>
            </div>
        </div>

        <div class="categories-grid" id="categories-carousel">
            <!-- 1. Fashion -->
            <a href="{{ route('how-to-start') }}" class="category-card">
                <span class="category-card-title">Fashion</span>
                <div class="category-card-img-wrap">
                    <img src="{{ asset('images/categories/fashion.png') }}" alt="Fashion" class="category-card-img"
                        onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                    <div class="category-placeholder-box" style="display: none;">
                        <span>Fashion Image</span>
                        <code>fashion.png</code>
                    </div>
                </div>
            </a>

            <!-- 2. Electronics -->
            <a href="{{ route('how-to-start') }}" class="category-card">
                <span class="category-card-title">Electronics</span>
                <div class="category-card-img-wrap">
                    <img src="{{ asset('images/categories/electronics.png') }}" alt="Electronics" class="category-card-img"
                        onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                    <div class="category-placeholder-box" style="display: none;">
                        <span>Electronics Image</span>
                        <code>electronics.png</code>
                    </div>
                </div>
            </a>

            <!-- 3. Groceries -->
            <a href="{{ route('how-to-start') }}" class="category-card">
                <span class="category-card-title">Groceries</span>
                <div class="category-card-img-wrap">
                    <img src="{{ asset('images/categories/groceries.png') }}" alt="Groceries" class="category-card-img"
                        onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                    <div class="category-placeholder-box" style="display: none;">
                        <span>Groceries Image</span>
                        <code>groceries.png</code>
                    </div>
                </div>
            </a>

            <!-- 4. Travel -->
            <a href="{{ route('how-to-start') }}" class="category-card">
                <span class="category-card-title">Travel</span>
                <div class="category-card-img-wrap">
                    <img src="{{ asset('images/categories/travel.png') }}" alt="Travel" class="category-card-img"
                        onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                    <div class="category-placeholder-box" style="display: none;">
                        <span>Travel Image</span>
                        <code>travel.png</code>
                    </div>
                </div>
            </a>

            <!-- 5. Home & Kitchen -->
            <a href="{{ route('how-to-start') }}" class="category-card">
                <span class="category-card-title">Home &<br>Kitchen</span>
                <div class="category-card-img-wrap">
                    <img src="{{ asset('images/categories/home-kitchen.png') }}" alt="Home & Kitchen"
                        class="category-card-img"
                        onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                    <div class="category-placeholder-box" style="display: none;">
                        <span>Home Image</span>
                        <code>home-kitchen.png</code>
                    </div>
                </div>
            </a>

            <!-- 6. Beauty -->
            <a href="{{ route('how-to-start') }}" class="category-card">
                <span class="category-card-title">Beauty</span>
                <div class="category-card-img-wrap">
                    <img src="{{ asset('images/categories/beauty.png') }}" alt="Beauty" class="category-card-img"
                        onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                    <div class="category-placeholder-box" style="display: none;">
                        <span>Beauty Image</span>
                        <code>beauty.png</code>
                    </div>
                </div>
            </a>

            <!-- 7. Baby & Kids -->
            <a href="{{ route('how-to-start') }}" class="category-card">
                <span class="category-card-title">Baby & Kids</span>
                <div class="category-card-img-wrap">
                    <img src="{{ asset('images/categories/baby-kids.png') }}" alt="Baby & Kids" class="category-card-img"
                        onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                    <div class="category-placeholder-box" style="display: none;">
                        <span>Baby & Kids</span>
                        <code>baby-kids.png</code>
                    </div>
                </div>
            </a>

            <!-- 8. Fine Dine -->
            <a href="{{ route('how-to-start') }}" class="category-card">
                <span class="category-card-title">Fine Dine</span>
                <div class="category-card-img-wrap">
                    <img src="{{ asset('images/categories/fine-dine.png') }}" alt="Fine Dine" class="category-card-img"
                        onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                    <div class="category-placeholder-box" style="display: none;">
                        <span>Fine Dine</span>
                        <code>fine-dine.png</code>
                    </div>
                </div>
            </a>
        </div>
    </section>

    <!-- Top Categories Bento Gallery (Matches Screenshot) -->
    <section class="top-categories-section">
        <h2 class="top-categories-title">Top Categories</h2>

        <div class="top-categories-bento">
            <!-- Left: Electronics (Tall Card) -->
            <a href="{{ route('how-to-start') }}" class="bento-card bento-card-tall">
                <img src="{{ asset('images/top-categories/electronics.jpg') }}" alt="Electronics" class="bento-img"
                    onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                <div class="bento-fallback-bg" style="display: none;">
                    <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <path d="M3 18v-6a9 9 0 0 1 18 0v6"></path>
                        <path
                            d="M21 19a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3zM3 19a2 2 0 0 0 2 2h1a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H3z">
                        </path>
                    </svg>
                    <span>Image: <code>top-categories/electronics.jpg</code></span>
                </div>
                <div class="bento-gradient-overlay"></div>
                <div class="bento-content">
                    <h3 class="bento-title">Electronics</h3>
                    <p class="bento-meta">56 deals &bull; Up to 20% cashback</p>
                </div>
            </a>

            <!-- Middle Column: Fashion (Top) & Perfumes (Bottom) -->
            <div class="bento-middle-col">
                <!-- Fashion -->
                <a href="{{ route('how-to-start') }}" class="bento-card bento-card-half">
                    <img src="{{ asset('images/top-categories/fashion.jpg') }}" alt="Fashion" class="bento-img"
                        onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                    <div class="bento-fallback-bg" style="display: none;">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.5">
                            <path
                                d="M20.38 3.46 16 2a4 4 0 0 1-8 0L3.62 3.46a2 2 0 0 0-1.34 2.23l.58 3.47a1 1 0 0 0 .99.84H6v10c0 1.1.9 2 2 2h8a2 2 0 0 0 2-2V10h2.15a1 1 0 0 0 .99-.84l.58-3.47a2 2 0 0 0-1.34-2.23z">
                            </path>
                        </svg>
                        <span>Image: <code>top-categories/fashion.jpg</code></span>
                    </div>
                    <div class="bento-gradient-overlay"></div>
                    <div class="bento-content">
                        <h3 class="bento-title">Fashion</h3>
                        <p class="bento-meta">86 deals &bull; Up to 25% off</p>
                    </div>
                </a>

                <!-- Perfumes -->
                <a href="{{ route('how-to-start') }}" class="bento-card bento-card-half">
                    <img src="{{ asset('images/top-categories/perfumes.jpg') }}" alt="Perfumes" class="bento-img"
                        onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                    <div class="bento-fallback-bg" style="display: none;">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.5">
                            <path d="M10 2h4"></path>
                            <path d="M12 2v3"></path>
                            <rect x="6" y="5" width="12" height="17" rx="3"></rect>
                            <circle cx="12" cy="14" r="3"></circle>
                        </svg>
                        <span>Image: <code>top-categories/perfumes.jpg</code></span>
                    </div>
                    <div class="bento-gradient-overlay"></div>
                    <div class="bento-content">
                        <h3 class="bento-title">Perfumes</h3>
                        <p class="bento-meta">20 deals &bull; Up to 60% off</p>
                    </div>
                </a>
            </div>

            <!-- Right: Fine Dine (Tall Card) -->
            <a href="{{ route('how-to-start') }}" class="bento-card bento-card-tall">
                <img src="{{ asset('images/top-categories/fine-dine.jpg') }}" alt="Fine Dine" class="bento-img"
                    onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                <div class="bento-fallback-bg" style="display: none;">
                    <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <path d="M18 8h1a4 4 0 0 1 0 8h-1"></path>
                        <path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"></path>
                        <line x1="6" y1="1" x2="6" y2="4"></line>
                        <line x1="10" y1="1" x2="10" y2="4"></line>
                        <line x1="14" y1="1" x2="14" y2="4"></line>
                    </svg>
                    <span>Image: <code>top-categories/fine-dine.jpg</code></span>
                </div>
                <div class="bento-gradient-overlay"></div>
                <div class="bento-content">
                    <h3 class="bento-title">Fine Dine</h3>
                    <p class="bento-meta">73 deals &bull; Up to 20% cashback</p>
                </div>
            </a>
        </div>
    </section>

    <!-- Earn While You Shop With Your Favourite Brands (Matches Screenshot) -->
    <section class="featured-brands-banner">
        <div class="featured-brands-box">
            <div class="featured-brands-header">
                <div>
                    <h2 class="featured-brands-title">Earn While You Shop With Your Favourite Brands</h2>
                    <p class="featured-brands-sub">Exclusive deals from trusted businesses around you.</p>
                </div>
                <div class="categories-arrows">
                    <button class="cat-arrow-btn" id="brand-prev-btn" aria-label="Previous brands">&lsaquo;</button>
                    <button class="cat-arrow-btn" id="brand-next-btn" aria-label="Next brands">&rsaquo;</button>
                </div>
            </div>

            <div class="brand-deals-grid" id="brand-deals-carousel">
                <!-- 1. AJIO -->
                <div class="brand-deal-card">
                    <div class="deal-banner-wrapper">
                        <img src="{{ asset('images/deals/ajio-deal.jpg') }}" alt="AJIO Big Bold Sale"
                            class="deal-banner-img"
                            onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                        <div class="deal-fallback-box" style="display: none;">
                            <span>Banner Image:</span>
                            <code>deals/ajio-deal.jpg</code>
                        </div>
                    </div>
                    <div class="deal-footer-info">
                        <h3 class="deal-brand-name">AJIO</h3>
                        <a href="{{ route('how-to-start') }}" class="btn-deal-dark">
                            Shop deal &rarr;
                        </a>
                    </div>
                </div>

                <!-- 2. Amazon -->
                <div class="brand-deal-card">
                    <div class="deal-banner-wrapper">
                        <img src="{{ asset('images/deals/amazon-deal.jpg') }}" alt="Amazon Prime Day"
                            class="deal-banner-img"
                            onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                        <div class="deal-fallback-box" style="display: none;">
                            <span>Banner Image:</span>
                            <code>deals/amazon-deal.jpg</code>
                        </div>
                    </div>
                    <div class="deal-footer-info">
                        <h3 class="deal-brand-name">Amazon</h3>
                        <a href="{{ route('how-to-start') }}" class="btn-deal-outline">
                            Shop deal &rarr;
                        </a>
                    </div>
                </div>

                <!-- 3. Myntra -->
                <div class="brand-deal-card">
                    <div class="deal-banner-wrapper">
                        <img src="{{ asset('images/deals/myntra-deal.jpg') }}" alt="Myntra Black Friday Sale"
                            class="deal-banner-img"
                            onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                        <div class="deal-fallback-box" style="display: none;">
                            <span>Banner Image:</span>
                            <code>deals/myntra-deal.jpg</code>
                        </div>
                    </div>
                    <div class="deal-footer-info">
                        <h3 class="deal-brand-name">Myntra</h3>
                        <a href="{{ route('how-to-start') }}" class="btn-deal-outline">
                            Shop deal &rarr;
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Local Deals Near You (Matches Screenshot) -->
    <section class="local-deals-section">
        <div class="local-deals-header">
            <div>
                <h2 class="local-deals-title">Local Deals Near You</h2>
                <p class="local-deals-sub">Exclusive deals from trusted businesses around you.</p>
            </div>
            <a href="{{ route('how-to-start') }}" class="btn-view-all-pill">
                View all
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                    <polyline points="6 9 12 15 18 9"></polyline>
                </svg>
            </a>
        </div>

        <div class="local-deals-grid">
            <!-- 1. JW Marriott -->
            <div class="local-deal-card">
                <div class="local-deal-img-wrapper">
                    <img src="{{ asset('images/local-deals/jw-marriott.jpg') }}" alt="JW Marriott" class="local-deal-img"
                        onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                    <div class="deal-fallback-box" style="display: none;">
                        <span>Photo:</span>
                        <code>local-deals/jw-marriott.jpg</code>
                    </div>
                    <span class="flat-off-badge">FLAT ₹300 OFF</span>
                </div>
                <div class="local-deal-content">
                    <span class="local-deal-category">FOOD & DRINKS</span>
                    <h3 class="local-deal-name">JW Marriott</h3>
                    <div class="local-deal-location">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                            <circle cx="12" cy="10" r="3"></circle>
                        </svg>
                        <span>Sector 35 B, Chandigarh</span>
                    </div>
                    <a href="{{ route('how-to-start') }}" class="btn-visit-store">
                        Visit store &rarr;
                    </a>
                </div>
            </div>

            <!-- 2. Looks Salon -->
            <div class="local-deal-card">
                <div class="local-deal-img-wrapper">
                    <img src="{{ asset('images/local-deals/looks-salon.jpg') }}" alt="Looks Salon" class="local-deal-img"
                        onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                    <div class="deal-fallback-box" style="display: none;">
                        <span>Photo:</span>
                        <code>local-deals/looks-salon.jpg</code>
                    </div>
                    <span class="flat-off-badge">FLAT ₹300 OFF</span>
                </div>
                <div class="local-deal-content">
                    <span class="local-deal-category">SALON</span>
                    <h3 class="local-deal-name">Looks Salon</h3>
                    <div class="local-deal-location">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                            <circle cx="12" cy="10" r="3"></circle>
                        </svg>
                        <span>Sector 9, Madhya Marg</span>
                    </div>
                    <a href="{{ route('how-to-start') }}" class="btn-visit-store">
                        Visit store &rarr;
                    </a>
                </div>
            </div>

            <!-- 3. TravMax -->
            <div class="local-deal-card">
                <div class="local-deal-img-wrapper">
                    <img src="{{ asset('images/local-deals/travmax.jpg') }}" alt="TravMax" class="local-deal-img"
                        onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                    <div class="deal-fallback-box" style="display: none;">
                        <span>Photo:</span>
                        <code>local-deals/travmax.jpg</code>
                    </div>
                    <span class="flat-off-badge">FLAT ₹599 OFF</span>
                </div>
                <div class="local-deal-content">
                    <span class="local-deal-category">TRAVEL</span>
                    <h3 class="local-deal-name">TravMax</h3>
                    <div class="local-deal-location">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                            <circle cx="12" cy="10" r="3"></circle>
                        </svg>
                        <span>Sector 17 D, Chandigarh</span>
                    </div>
                    <a href="{{ route('how-to-start') }}" class="btn-visit-store">
                        Visit store &rarr;
                    </a>
                </div>
            </div>

            <!-- 4. Mehak Florist -->
            <div class="local-deal-card">
                <div class="local-deal-img-wrapper">
                    <img src="{{ asset('images/local-deals/mehak-florist.jpg') }}" alt="Mehak Florist"
                        class="local-deal-img"
                        onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                    <div class="deal-fallback-box" style="display: none;">
                        <span>Photo:</span>
                        <code>local-deals/mehak-florist.jpg</code>
                    </div>
                    <span class="flat-off-badge">FLAT ₹299 OFF</span>
                </div>
                <div class="local-deal-content">
                    <span class="local-deal-category">FLORIST</span>
                    <h3 class="local-deal-name">Mehak Florist</h3>
                    <div class="local-deal-location">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                            <circle cx="12" cy="10" r="3"></circle>
                        </svg>
                        <span>Sector 35, Chandigarh</span>
                    </div>
                    <a href="{{ route('how-to-start') }}" class="btn-visit-store">
                        Visit store &rarr;
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Handpicked Brands Carousel Section (Matches Screenshot) -->
    <section class="handpicked-section">
        <div class="handpicked-header">
            <div>
                <h2 class="handpicked-title">Handpicked Brands</h2>
                <p class="handpicked-sub">Curated cashback offers from premium partners</p>
            </div>
            <div class="categories-arrows">
                <button class="cat-arrow-btn" id="handpicked-prev-btn"
                    aria-label="Previous handpicked brands">&lsaquo;</button>
                <button class="cat-arrow-btn" id="handpicked-next-btn" aria-label="Next handpicked brands">&rsaquo;</button>
            </div>
        </div>

        <div class="handpicked-carousel-wrapper" id="handpicked-carousel">
            <!-- 1. GIVA -->
            <div class="handpicked-card">
                <div class="handpicked-banner-wrapper">
                    <img src="{{ asset('images/handpicked/giva.jpg') }}" alt="GIVA Jewellery Fest"
                        class="handpicked-banner-img"
                        onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                    <div class="deal-fallback-box" style="display: none;">
                        <span>Banner:</span>
                        <code>handpicked/giva.jpg</code>
                    </div>
                </div>
                <div class="handpicked-meta-row">
                    <span class="cashback-pill">
                        <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"></path>
                            <line x1="7" y1="7" x2="7.01" y2="7"></line>
                        </svg>
                        Up to 10% cashback
                    </span>
                    <span class="featured-offer-label">Featured offer</span>
                </div>
                <h3 class="handpicked-brand-name">GIVA</h3>
                <a href="{{ route('how-to-start') }}" class="btn-shop-deal-outline">
                    Shop deal &rarr;
                </a>
            </div>

            <!-- 2. Trends -->
            <div class="handpicked-card">
                <div class="handpicked-banner-wrapper">
                    <img src="{{ asset('images/handpicked/trends.jpg') }}" alt="Trends Sale" class="handpicked-banner-img"
                        onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                    <div class="deal-fallback-box" style="display: none;">
                        <span>Banner:</span>
                        <code>handpicked/trends.jpg</code>
                    </div>
                </div>
                <div class="handpicked-meta-row">
                    <span class="cashback-pill">
                        <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"></path>
                            <line x1="7" y1="7" x2="7.01" y2="7"></line>
                        </svg>
                        Up to 10% cashback
                    </span>
                    <span class="featured-offer-label">Featured offer</span>
                </div>
                <h3 class="handpicked-brand-name">Trends</h3>
                <a href="{{ route('how-to-start') }}" class="btn-shop-deal-outline">
                    Shop deal &rarr;
                </a>
            </div>

            <!-- 3. PALMONAS -->
            <div class="handpicked-card">
                <div class="handpicked-banner-wrapper">
                    <img src="{{ asset('images/handpicked/palmonas.jpg') }}" alt="PALMONAS" class="handpicked-banner-img"
                        onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                    <div class="deal-fallback-box" style="display: none;">
                        <span>Banner:</span>
                        <code>handpicked/palmonas.jpg</code>
                    </div>
                </div>
                <div class="handpicked-meta-row">
                    <span class="cashback-pill">
                        <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"></path>
                            <line x1="7" y1="7" x2="7.01" y2="7"></line>
                        </svg>
                        Up to 10% cashback
                    </span>
                    <span class="featured-offer-label">Featured offer</span>
                </div>
                <h3 class="handpicked-brand-name">PALMONAS</h3>
                <a href="{{ route('how-to-start') }}" class="btn-shop-deal-outline">
                    Shop deal &rarr;
                </a>
            </div>

            <!-- 4. Marks & Spencer -->
            <div class="handpicked-card">
                <div class="handpicked-banner-wrapper">
                    <img src="{{ asset('images/handpicked/marks-spencer.jpg') }}" alt="Marks & Spencer"
                        class="handpicked-banner-img"
                        onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                    <div class="deal-fallback-box" style="display: none;">
                        <span>Banner:</span>
                        <code>handpicked/marks-spencer.jpg</code>
                    </div>
                </div>
                <div class="handpicked-meta-row">
                    <span class="cashback-pill">
                        <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"></path>
                            <line x1="7" y1="7" x2="7.01" y2="7"></line>
                        </svg>
                        Up to 10% cashback
                    </span>
                    <span class="featured-offer-label">Featured offer</span>
                </div>
                <h3 class="handpicked-brand-name">Marks & Spencer</h3>
                <a href="{{ route('how-to-start') }}" class="btn-shop-deal-outline">
                    Shop deal &rarr;
                </a>
            </div>
        </div>
    </section>

    <!-- Shop With Your Favourite Brands (Matches Screenshot) -->
    <section class="fav-brands-section">
        <div class="fav-brands-header">
            <h2 class="fav-brands-title">Shop With Your Favourite Brands</h2>
            <a href="{{ route('how-to-start') }}" class="btn-view-all-pill">
                View all
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                    <polyline points="6 9 12 15 18 9"></polyline>
                </svg>
            </a>
        </div>

        <div class="fav-brands-grid">
            <!-- 1. PALMONAS -->
            <a href="{{ route('how-to-start') }}" class="fav-brand-card">
                <div class="fav-brand-banner-wrap">
                    <img src="{{ asset('images/favourite-brands/palmonas-banner.png') }}" alt="PALMONAS"
                        class="fav-brand-banner-img"
                        onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                    <div class="deal-fallback-box" style="display: none;">
                        <span>Banner:</span>
                        <code>favourite-brands/palmonas-banner.jpg</code>
                    </div>
                </div>
                <div class="fav-brand-identity">
                    <img src="{{ asset('images/favourite-brands/palmonas-logo.png') }}" alt="PALMONAS"
                        class="fav-brand-logo-img"
                        onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
                    <span class="fav-brand-text">PALMONAS</span>
                </div>
                <span class="fav-brand-discount">up to 50% off</span>
            </a>

            <!-- 2. salty -->
            <a href="{{ route('how-to-start') }}" class="fav-brand-card">
                <div class="fav-brand-banner-wrap">
                    <img src="{{ asset('images/favourite-brands/salty-banner.jpg') }}" alt="salty"
                        class="fav-brand-banner-img"
                        onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                    <div class="deal-fallback-box" style="display: none;">
                        <span>Banner:</span>
                        <code>favourite-brands/salty-banner.jpg</code>
                    </div>
                </div>
                <div class="fav-brand-identity">
                    <img src="{{ asset('images/favourite-brands/salty-logo.png') }}" alt="salty" class="fav-brand-logo-img"
                        onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
                    <span class="fav-brand-text" style="color: #ff6a00; font-weight: 900;">salty</span>
                </div>
                <span class="fav-brand-discount">up to 50% off</span>
            </a>

            <!-- 3. blissclub -->
            <a href="{{ route('how-to-start') }}" class="fav-brand-card">
                <div class="fav-brand-banner-wrap">
                    <img src="{{ asset('images/favourite-brands/blissclub-banner.jpg') }}" alt="blissclub"
                        class="fav-brand-banner-img"
                        onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                    <div class="deal-fallback-box" style="display: none;">
                        <span>Banner:</span>
                        <code>favourite-brands/blissclub-banner.jpg</code>
                    </div>
                </div>
                <div class="fav-brand-identity">
                    <img src="{{ asset('images/favourite-brands/blissclub-logo.png') }}" alt="blissclub"
                        class="fav-brand-logo-img"
                        onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
                    <span class="fav-brand-text" style="letter-spacing: normal;">&bull; blissclub</span>
                </div>
                <span class="fav-brand-discount">up to 50% off</span>
            </a>

            <!-- 4. MALABAR GOLD & DIAMONDS -->
            <a href="{{ route('how-to-start') }}" class="fav-brand-card">
                <div class="fav-brand-banner-wrap">
                    <img src="{{ asset('images/favourite-brands/malabar-banner.jpg') }}" alt="Malabar"
                        class="fav-brand-banner-img"
                        onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                    <div class="deal-fallback-box" style="display: none;">
                        <span>Banner:</span>
                        <code>favourite-brands/malabar-banner.jpg</code>
                    </div>
                </div>
                <div class="fav-brand-identity">
                    <img src="{{ asset('images/favourite-brands/malabar-logo.png') }}" alt="Malabar"
                        class="fav-brand-logo-img"
                        onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
                    <span class="fav-brand-text" style="font-size: 0.95rem; color: #a21caf;">MALABAR</span>
                </div>
                <span class="fav-brand-discount">up to 50% off</span>
            </a>

            <!-- 5. UNIQLO -->
            <a href="{{ route('how-to-start') }}" class="fav-brand-card">
                <div class="fav-brand-banner-wrap">
                    <img src="{{ asset('images/favourite-brands/uniqlo-banner.jpg') }}" alt="UNIQLO"
                        class="fav-brand-banner-img"
                        onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                    <div class="deal-fallback-box" style="display: none;">
                        <span>Banner:</span>
                        <code>favourite-brands/uniqlo-banner.jpg</code>
                    </div>
                </div>
                <div class="fav-brand-identity">
                    <img src="{{ asset('images/favourite-brands/uniqlo-logo.png') }}" alt="UNIQLO"
                        class="fav-brand-logo-img"
                        onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
                    <span class="fav-brand-text"
                        style="color: #ef4444; font-weight: 900; letter-spacing: 0.08em;">UNIQLO</span>
                </div>
                <span class="fav-brand-discount">up to 50% off</span>
            </a>

            <!-- 6. HYPHEN -->
            <a href="{{ route('how-to-start') }}" class="fav-brand-card">
                <div class="fav-brand-banner-wrap">
                    <img src="{{ asset('images/favourite-brands/hyphen-banner.jpg') }}" alt="HYPHEN"
                        class="fav-brand-banner-img"
                        onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                    <div class="deal-fallback-box" style="display: none;">
                        <span>Banner:</span>
                        <code>favourite-brands/hyphen-banner.jpg</code>
                    </div>
                </div>
                <div class="fav-brand-identity">
                    <img src="{{ asset('images/favourite-brands/hyphen-logo.png') }}" alt="HYPHEN"
                        class="fav-brand-logo-img"
                        onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
                    <span class="fav-brand-text" style="letter-spacing: 0.25em;">H Y P H E N</span>
                </div>
                <span class="fav-brand-discount">up to 50% off</span>
            </a>

            <!-- 7. TTK Prestige -->
            <a href="{{ route('how-to-start') }}" class="fav-brand-card">
                <div class="fav-brand-banner-wrap">
                    <img src="{{ asset('images/favourite-brands/prestige-banner.jpg') }}" alt="TTK Prestige"
                        class="fav-brand-banner-img"
                        onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                    <div class="deal-fallback-box" style="display: none;">
                        <span>Banner:</span>
                        <code>favourite-brands/prestige-banner.jpg</code>
                    </div>
                </div>
                <div class="fav-brand-identity">
                    <img src="{{ asset('images/favourite-brands/prestige-logo.png') }}" alt="TTK Prestige"
                        class="fav-brand-logo-img"
                        onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
                    <span class="fav-brand-text" style="color: #dc2626; font-size: 1.1rem;">TTK Prestige</span>
                </div>
                <span class="fav-brand-discount">up to 50% off</span>
            </a>

            <!-- 8. SLEEPY OWL COFFEE -->
            <a href="{{ route('how-to-start') }}" class="fav-brand-card">
                <div class="fav-brand-banner-wrap">
                    <img src="{{ asset('images/favourite-brands/sleepy-owl-banner.jpg') }}" alt="Sleepy Owl"
                        class="fav-brand-banner-img"
                        onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                    <div class="deal-fallback-box" style="display: none;">
                        <span>Banner:</span>
                        <code>favourite-brands/sleepy-owl-banner.jpg</code>
                    </div>
                </div>
                <div class="fav-brand-identity">
                    <img src="{{ asset('images/favourite-brands/sleepy-owl-logo.png') }}" alt="Sleepy Owl"
                        class="fav-brand-logo-img"
                        onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
                    <span class="fav-brand-text" style="font-size: 1.05rem;">SLEEPY OWL</span>
                </div>
                <span class="fav-brand-discount">up to 50% off</span>
            </a>
        </div>
    </section>

    <!-- Avail Services Via Zoogol - Get Extra (Matches Screenshot) -->
    <section class="services-section">
        <h2 class="services-title">Avail Services Via Zoogol – Get Extra</h2>

        <div class="services-grid">
            <!-- 1. AC SERVICE -->
            <a href="{{ route('how-to-start') }}" class="service-card">
                <img src="{{ asset('images/services/ac-service.jpg') }}" alt="AC Service" class="service-card-img"
                    onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                <div class="service-fallback-box" style="display: none;">
                    <span>Photo:</span>
                    <code>services/ac-service.jpg</code>
                </div>
                <span class="service-card-title">AC SERVICE</span>
            </a>

            <!-- 2. YOGA -->
            <a href="{{ route('how-to-start') }}" class="service-card">
                <img src="{{ asset('images/services/yoga.jpg') }}" alt="Yoga" class="service-card-img"
                    onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                <div class="service-fallback-box" style="display: none;">
                    <span>Photo:</span>
                    <code>services/yoga.jpg</code>
                </div>
                <span class="service-card-title">YOGA</span>
            </a>

            <!-- 3. ADVOCATE -->
            <a href="{{ route('how-to-start') }}" class="service-card">
                <img src="{{ asset('images/services/advocate.jpg') }}" alt="Advocate" class="service-card-img"
                    onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                <div class="service-fallback-box" style="display: none;">
                    <span>Photo:</span>
                    <code>services/advocate.jpg</code>
                </div>
                <span class="service-card-title">ADVOCATE</span>
            </a>

            <!-- 4. Dry Cleaning -->
            <a href="{{ route('how-to-start') }}" class="service-card">
                <img src="{{ asset('images/services/dry-cleaning.jpg') }}" alt="Dry Cleaning" class="service-card-img"
                    onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                <div class="service-fallback-box" style="display: none;">
                    <span>Photo:</span>
                    <code>services/dry-cleaning.jpg</code>
                </div>
                <span class="service-card-title">Dry Cleaning</span>
            </a>

            <!-- 5. Insurance -->
            <a href="{{ route('how-to-start') }}" class="service-card">
                <img src="{{ asset('images/services/insurance.jpg') }}" alt="Insurance" class="service-card-img"
                    onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                <div class="service-fallback-box" style="display: none;">
                    <span>Photo:</span>
                    <code>services/insurance.jpg</code>
                </div>
                <span class="service-card-title">Insurance</span>
            </a>

            <!-- 6. PLUMBER -->
            <a href="{{ route('how-to-start') }}" class="service-card">
                <img src="{{ asset('images/services/plumber.jpg') }}" alt="Plumber" class="service-card-img"
                    onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                <div class="service-fallback-box" style="display: none;">
                    <span>Photo:</span>
                    <code>services/plumber.jpg</code>
                </div>
                <span class="service-card-title">PLUMBER</span>
            </a>

            <!-- 7. Tax Lawyer -->
            <a href="{{ route('how-to-start') }}" class="service-card">
                <img src="{{ asset('images/services/tax-lawyer.jpg') }}" alt="Tax Lawyer" class="service-card-img"
                    onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                <div class="service-fallback-box" style="display: none;">
                    <span>Photo:</span>
                    <code>services/tax-lawyer.jpg</code>
                </div>
                <span class="service-card-title">Tax Lawyer</span>
            </a>

            <!-- 8. Advertising -->
            <a href="{{ route('how-to-start') }}" class="service-card">
                <img src="{{ asset('images/services/advertising.jpg') }}" alt="Advertising" class="service-card-img"
                    onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                <div class="service-fallback-box" style="display: none;">
                    <span>Photo:</span>
                    <code>services/advertising.jpg</code>
                </div>
                <span class="service-card-title">Advertising</span>
            </a>
        </div>
    </section>

    <!-- How Zoogol Turns Shopping Into Rewards (Matches Screenshot) -->
    <section class="how-it-works-section">
        <div class="hiw-container-box">
            <!-- Top Row (Left text, Right video mockup) -->
            <div class="hiw-top-row">
                <div>
                    <span class="hiw-pre-title">HOW IT WORKS</span>
                    <h2 class="hiw-title">
                        <span class="title-light">How Zoogle Turns</span><br>
                        <span class="title-dark">Shopping Into Rewards</span>
                    </h2>
                    <p class="hiw-subtitle">
                        Discover great deals, shop from your favourite brands, and earn cashback every time you spend.
                    </p>
                    <a href="{{ route('how-to-start') }}" class="btn-watch-video">
                        Watch Video
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                            <polygon points="5 3 19 12 5 21 5 3"></polygon>
                        </svg>
                    </a>
                </div>

                <!-- Video Player Mockup -->
                <div class="hiw-video-mockup">
                    <img src="{{ asset('images/how-it-works-video.jpg') }}" alt="How Zoogol Works Video"
                        class="hiw-video-poster"
                        onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                    <div class="service-fallback-box" style="display: none; background: #111827; color: #9ca3af;">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.5">
                            <polygon points="5 3 19 12 5 21 5 3"></polygon>
                        </svg>
                        <span>Video Poster: <code>how-it-works-video.jpg</code></span>
                    </div>
                    <div class="hiw-play-btn" aria-label="Play Video">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor">
                            <polygon points="5 3 19 12 5 21 5 3"></polygon>
                        </svg>
                    </div>
                    <div class="hiw-video-controls">
                        <div class="hiw-progress-bar">
                            <div class="hiw-progress-fill"></div>
                        </div>
                        <div class="hiw-control-row">
                            <span>0:48</span>
                            <span>2:00</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom 4 Process Step Cards (01, 02, 03, 04) -->
            <div class="hiw-steps-grid">
                <!-- 01: Orange Card -->
                <div class="hiw-step-card hiw-step-orange">
                    <div class="hiw-step-num">01</div>
                    <div>
                        <h3 class="hiw-step-title">Shop on Zoogol</h3>
                        <p class="hiw-step-desc">Browse exclusive offers from your favourite brands.</p>
                    </div>
                </div>

                <!-- 02: White Card -->
                <div class="hiw-step-card hiw-step-white">
                    <div class="hiw-step-num">02</div>
                    <div>
                        <h3 class="hiw-step-title">Get Cashback</h3>
                        <p class="hiw-step-desc">Real savings on every purchase on Zoogol.</p>
                    </div>
                </div>

                <!-- 03: White Card -->
                <div class="hiw-step-card hiw-step-white">
                    <div class="hiw-step-num">03</div>
                    <div>
                        <h3 class="hiw-step-title">Share</h3>
                        <p class="hiw-step-desc">Share deals with your friends and family.</p>
                    </div>
                </div>

                <!-- 04: Blue Card -->
                <div class="hiw-step-card hiw-step-blue">
                    <div class="hiw-step-num">04</div>
                    <div>
                        <h3 class="hiw-step-title">Earn Money back</h3>
                        <p class="hiw-step-desc">Get rewarded when every time they shop</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials - Hear It From Zoogolers (Matches Screenshot) -->
    <section class="testimonials-section">
        <div class="testimonials-pre-title">TESTIMONIALS</div>
        <h2 class="testimonials-heading">Hear It From Zoogolers</h2>
        <p class="testimonials-sub">Real reviews from shoppers who are making every purchase more rewarding.</p>

        <div class="testimonial-card-blue">
            <div class="testimonial-inner-grid">
                <!-- Left Side: Review Content -->
                <div class="testimonial-left-col">
                    <div class="testimonial-top-meta">
                        <div class="rating-stars-wrap">
                            <span class="star-icon">&#9733;</span>
                            <span class="star-icon">&#9733;</span>
                            <span class="star-icon">&#9733;</span>
                            <span class="star-icon">&#9733;</span>
                            <span class="star-icon">&#9733;</span>
                            <span class="rating-score-text">4.5 rating</span>
                        </div>
                        <span class="saved-amount-badge">Saved ₹2,500</span>
                    </div>

                    <div class="quote-symbol">&ldquo;</div>

                    <blockquote class="testimonial-quote-text" id="testimonial-quote">
                        &ldquo;ZOOGOL is my go-to for dining out. I earned ₹850 cashback last month alone from just three
                        visits to my favorite restaurant.&rdquo;
                    </blockquote>

                    <div class="testimonial-author-name" id="testimonial-author">-Sarah</div>

                    <div class="testimonial-avatar-stack">
                        <div class="avatar-stack-item">
                            <img src="{{ asset('images/testimonials/avatar1.jpg') }}" alt="Zoogoler Member 1"
                                class="avatar-stack-img"
                                onerror="this.onerror=null; this.src='https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=100&auto=format&fit=crop&q=80';">
                        </div>
                        <div class="avatar-stack-item">
                            <img src="{{ asset('images/testimonials/avatar2.jpg') }}" alt="Zoogoler Member 2"
                                class="avatar-stack-img"
                                onerror="this.onerror=null; this.src='https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=100&auto=format&fit=crop&q=80';">
                        </div>
                        <div class="avatar-stack-item">
                            <img src="{{ asset('images/testimonials/avatar3.jpg') }}" alt="Zoogoler Member 3"
                                class="avatar-stack-img"
                                onerror="this.onerror=null; this.src='https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=100&auto=format&fit=crop&q=80';">
                        </div>
                        <div class="avatar-stack-item">
                            <img src="{{ asset('images/testimonials/avatar4.jpg') }}" alt="Zoogoler Member 4"
                                class="avatar-stack-img"
                                onerror="this.onerror=null; this.src='https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=100&auto=format&fit=crop&q=80';">
                        </div>
                        <div class="avatar-stack-item">
                            <img src="{{ asset('images/testimonials/avatar5.jpg') }}" alt="Zoogoler Member 5"
                                class="avatar-stack-img"
                                onerror="this.onerror=null; this.src='https://images.unsplash.com/photo-1544005313-94ddf0286df2?w=100&auto=format&fit=crop&q=80';">
                        </div>
                    </div>
                </div>

                <!-- Right Side: Sarah Portrait in Orange Arch Frame -->
                <div class="testimonial-right-col">
                    <div class="testimonial-arch-frame">
                        <img src="{{ asset('images/testimonials/sarah.png') }}" alt="Sarah - Zoogoler"
                            id="testimonial-person-img" class="testimonial-person-img"
                            onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                        <div class="testimonial-person-fallback" style="display: none;">
                            <svg width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="1.5">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                            <span style="font-weight: 700;">Sarah</span>
                            <code style="font-size: 0.75rem;">testimonials/sarah.png</code>
                        </div>
                    </div>

                    <!-- Navigation Arrow Buttons -->
                    <div class="testimonial-nav-arrows">
                        <button class="btn-testimonial-nav" id="testimonial-prev-btn" aria-label="Previous Testimonial">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2.5">
                                <line x1="19" y1="12" x2="5" y2="12"></line>
                                <polyline points="12 19 5 12 12 5"></polyline>
                            </svg>
                        </button>
                        <button class="btn-testimonial-nav" id="testimonial-next-btn" aria-label="Next Testimonial">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2.5">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <polyline points="12 5 19 12 12 19"></polyline>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Share more. Earn more! Banner (Matches Screenshot) -->
    <section class="share-earn-banner-wrapper">
        <div class="share-earn-banner">
            <div class="share-earn-grid">
                <!-- Left Content Column -->
                <div class="share-earn-content">
                    <h2 class="share-earn-headline">
                        Share more.<br>
                        Earn more!
                    </h2>
                    <p class="share-earn-desc">
                        Share your link with friends and family. Earn every time they shop.
                    </p>
                    <div class="share-earn-cta-group">
                        <a href="{{ route('how-to-start') }}" class="btn-share-orange">
                            Start Shopping
                        </a>
                        <a href="{{ route('what-is-zoogol') }}" class="btn-share-deals">
                            Explore Deals
                        </a>
                    </div>
                </div>

                <!-- Right Graphic Column -->
                <div class="share-earn-graphic-wrap">
                    <img src="{{ asset('images/refer-and-earn-banner.png') }}" alt="Refer and Earn With Zoogol"
                        class="share-earn-img"
                        onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                    <div class="share-earn-fallback-box" style="display: none;">
                        <svg width="56" height="56" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.5">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>
                        <span style="font-weight: 700; font-size: 1rem;">Refer & Earn 3D Illustration</span>
                        <span style="font-size: 0.8125rem; color: #9ca3af;">Drop graphic file at:</span>
                        <code
                            style="background: rgba(255,255,255,0.1); padding: 0.25rem 0.5rem; border-radius: 6px;">images/refer-and-earn-banner.png</code>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection