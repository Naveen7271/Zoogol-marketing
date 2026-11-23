<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="@yield('meta_description', 'Get instant cashback on every purchase with Zoogol. Discover great deals, shop top brands, and get rewarded every time you spend.')">
    <meta name="keywords" content="Zoogol, cashback, instant cashback, referral moneyback, extra deals, shopping rewards">
    <title>@yield('title', 'Zoogol | Get Instant Cashback on Every Purchase')</title>

    <!-- Google Fonts: Sora (Headlines & Body), Poppins (Buttons), Urbanist (Category Titles) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&family=Sora:wght@300;400;500;600;700;800&family=Urbanist:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @stack('styles')
</head>
<body>
    <!-- Sticky Scrolled Header (Persistent on inner pages, activates on scroll on home) -->
    <header class="global-header {{ request()->routeIs('home') ? 'home-scrolled-header' : 'is-visible' }}" id="global-header">
        <div class="container header-container">
            @include('partials.navbar', ['isSticky' => true])
        </div>
    </header>

    <!-- Categories Dropdown Backdrop Overlay -->
    <div class="categories-dropdown-backdrop js-cat-dropdown-backdrop" id="cat-dropdown-backdrop" aria-hidden="true"></div>

    <!-- Main Page Content -->
    <main>
        @yield('content')
    </main>

    <!-- Brand Footer -->
    <footer class="main-footer">
        <div class="container">
            <div class="footer-columns">
                <div class="footer-col">
                    <a href="{{ route('home') }}" class="brand-wrap" style="margin-bottom: 1rem;">
                        <img src="{{ asset('images/zoogollogo.png') }}" alt="Zoogol" class="brand-img" onerror="this.style.display='none'; this.nextElementSibling.style.display='inline-flex';">
                        <div class="brand-fallback" style="display: none;">
                            <div class="brand-blocks">
                                <span></span><span></span><span></span><span></span><span></span>
                            </div>
                            <span class="brand-name-text">Zoo<span>gol</span></span>
                        </div>
                    </a>
                    <p style="color: #9ca3af; font-size: 0.9375rem; margin-top: 0.75rem; line-height: 1.6;">
                        Discover great deals, shop top brands, and get rewarded every time you spend. Transform everyday shopping into instant cashback and referral moneyback.
                    </p>
                </div>

                <div class="footer-col">
                    <h4>Navigation</h4>
                    <ul class="footer-links-list">
                        <li><a href="{{ route('home') }}">Categories</a></li>
                        <li><a href="{{ route('what-is-zoogol') }}">What is ZOOGOL</a></li>
                        <li><a href="{{ route('why-zoogol') }}">Why ZOOGOL</a></li>
                        <li><a href="{{ route('how-to-start') }}">HOW TO START</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Core Benefits</h4>
                    <ul class="footer-links-list">
                        <li><a href="{{ route('home') }}#extra-deals">Extra Deals</a></li>
                        <li><a href="{{ route('home') }}#instant-cashback">Instant Cashback</a></li>
                        <li><a href="{{ route('home') }}#referral-moneyback">Referral Moneyback</a></li>
                        <li><a href="{{ route('how-to-start') }}#faq-section">FAQs & Help</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Trust & Security</h4>
                    <p style="color: #9ca3af; font-size: 0.875rem; margin-bottom: 1rem; line-height: 1.6;">
                        Direct bank transfers via NEFT/IMPS. No virtual points trap or hidden fees.
                    </p>
                    <div style="background: rgba(255, 255, 255, 0.04); border: 1px solid rgba(255, 255, 255, 0.08); padding: 0.85rem 1rem; border-radius: 12px;">
                        <div style="font-size: 0.8125rem; color: #d1d5db; display: flex; align-items: center; gap: 0.5rem;">
                            <span style="color: #22c55e; font-weight: bold;">✓</span> 256-Bit SSL Encrypted
                        </div>
                        <div style="font-size: 0.8125rem; color: #d1d5db; display: flex; align-items: center; gap: 0.5rem; margin-top: 0.35rem;">
                            <span style="color: #22c55e; font-weight: bold;">✓</span> 500+ Official Partner Retailers
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-bottom-bar">
                <p>&copy; {{ date('Y') }} Zoogol. All rights reserved. Get instant cashback on every purchase.</p>
                <p>100% Free Lifetime Membership</p>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="{{ asset('js/main.js') }}"></script>
    @stack('scripts')
</body>
</html>
