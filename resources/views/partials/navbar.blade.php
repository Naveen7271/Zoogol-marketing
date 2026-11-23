@php
    $suffix = !empty($isSticky) ? '-sticky' : '-static';
    $isDiscoverRoute = request()->routeIs('what-is-zoogol', 'how-zoogol-works');
@endphp
<nav class="hero-navbar {{ !empty($isSticky) ? 'navbar-sticky-instance' : '' }}" aria-label="Main Navigation">
    <!-- Brand Logo -->
    <a href="{{ route('home') }}" class="brand-wrap" aria-label="Zoogol">
        <img src="{{ asset('images/zoogollogo.png') }}" alt="Zoogol" class="brand-img" onerror="this.style.display='none'; this.nextElementSibling.style.display='inline-flex';">
        <div class="brand-fallback" style="display: none;">
            <div class="brand-blocks">
                <span></span><span></span><span></span><span></span><span></span>
            </div>
            <span class="brand-name-text">Zoo<span>gol</span></span>
        </div>
    </a>

    <!-- Center Navigation Links -->
    <ul class="hero-nav-menu">
        <li class="nav-dropdown-item">
            <button type="button"
                    class="hero-nav-link nav-dropdown-toggle js-cat-dropdown-toggle"
                    id="cat-toggle{{ $suffix }}"
                    data-target="categories-dropdown{{ $suffix }}"
                    aria-expanded="false"
                    aria-haspopup="true"
                    aria-controls="categories-dropdown{{ $suffix }}">
                <span>Categories</span>
                <svg class="dropdown-arrow-icon" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <polyline points="6 9 12 15 18 9"></polyline>
                </svg>
            </button>
        </li>
        <li class="nav-dropdown-item nav-discover-item">
            <button type="button"
                    class="hero-nav-link nav-dropdown-toggle nav-discover-toggle js-discover-dropdown-toggle {{ $isDiscoverRoute ? 'active' : '' }}"
                    id="discover-toggle{{ $suffix }}"
                    data-target="discover-dropdown{{ $suffix }}"
                    aria-expanded="false"
                    aria-haspopup="true"
                    aria-controls="discover-dropdown{{ $suffix }}">
                <span>Discover Zoogol</span>
                <svg class="dropdown-arrow-icon" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <polyline points="6 9 12 15 18 9"></polyline>
                </svg>
            </button>

            <div class="discover-dropdown-menu js-discover-dropdown" id="discover-dropdown{{ $suffix }}" role="menu" aria-label="Discover Zoogol">
                <a href="{{ route('what-is-zoogol') }}"
                   class="discover-drop-item {{ request()->routeIs('what-is-zoogol') ? 'is-current' : '' }}"
                   role="menuitem">
                    <span class="discover-drop-title">What is Zoogol?</span>
                    <span class="discover-drop-desc">What Zoogol is and how you save</span>
                </a>
                <a href="{{ route('how-zoogol-works') }}"
                   class="discover-drop-item {{ request()->routeIs('how-zoogol-works') ? 'is-current' : '' }}"
                   role="menuitem">
                    <span class="discover-drop-title">How Zoogol works</span>
                    <span class="discover-drop-desc">From first search to first cashback</span>
                </a>
            </div>
        </li>
        <li>
            <a href="{{ route('refer-and-earn') }}" class="hero-nav-link {{ request()->routeIs('refer-and-earn') ? 'active' : '' }}">
                Refer &amp; Earn
            </a>
        </li>
    </ul>

    <!-- Right Action Buttons -->
    <div class="hero-nav-actions">
        <a href="{{ route('how-to-start') }}#login" class="btn-pill-login">Login</a>
        <a href="{{ route('how-to-start') }}#quick-register" class="btn-pill-signup">Signup</a>
        <button class="mobile-nav-btn js-mobile-toggle" id="mobile-toggle{{ $suffix }}" data-target="mobile-nav{{ $suffix }}" aria-label="Toggle navigation">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <line x1="3" y1="12" x2="21" y2="12"></line>
                <line x1="3" y1="6" x2="21" y2="6"></line>
                <line x1="3" y1="18" x2="21" y2="18"></line>
            </svg>
        </button>
    </div>
    <!-- Mega Categories Dropdown Menu -->
    <div class="categories-dropdown-menu js-categories-dropdown" id="categories-dropdown{{ $suffix }}" role="region" aria-label="Categories Directory">
        @include('partials.categories-dropdown')
    </div>
</nav>

<!-- Mobile Navigation Menu -->
<div class="mobile-nav js-mobile-nav" id="mobile-nav{{ $suffix }}" style="display: none; background: #181311; padding: 1.5rem; border-bottom: 1px solid rgba(255,255,255,0.1);">
    <ul style="list-style: none; display: flex; flex-direction: column; gap: 1rem;">
        <li><a href="{{ route('home') }}#categories" class="hero-nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Categories</a></li>
        <li>
            <button type="button"
                    class="hero-nav-link nav-dropdown-toggle js-mobile-discover-toggle {{ $isDiscoverRoute ? 'active' : '' }}"
                    aria-expanded="false"
                    aria-controls="mobile-discover-sub{{ $suffix }}"
                    style="width: 100%; justify-content: space-between;">
                <span>Discover Zoogol</span>
                <svg class="dropdown-arrow-icon" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <polyline points="6 9 12 15 18 9"></polyline>
                </svg>
            </button>
            <ul class="mobile-discover-sub" id="mobile-discover-sub{{ $suffix }}" style="display: none; list-style: none; padding-left: 0.9rem; margin-top: 0.75rem; border-left: 2px solid rgba(250, 130, 20, 0.35); flex-direction: column; gap: 0.65rem;">
                <li>
                    <a href="{{ route('what-is-zoogol') }}" class="mobile-discover-link {{ request()->routeIs('what-is-zoogol') ? 'active' : '' }}">
                        <span class="mobile-discover-title">What is Zoogol?</span>
                        <span class="mobile-discover-desc">What Zoogol is and how you save</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('how-zoogol-works') }}" class="mobile-discover-link {{ request()->routeIs('how-zoogol-works') ? 'active' : '' }}">
                        <span class="mobile-discover-title">How Zoogol works</span>
                        <span class="mobile-discover-desc">From first search to first cashback</span>
                    </a>
                </li>
            </ul>
        </li>
        <li><a href="{{ route('refer-and-earn') }}" class="hero-nav-link {{ request()->routeIs('refer-and-earn') ? 'active' : '' }}">Refer &amp; Earn</a></li>
        <li style="display: flex; gap: 0.75rem; margin-top: 0.5rem;">
            <a href="{{ route('how-to-start') }}#login" class="btn-pill-login" style="flex: 1; text-align: center;">Login</a>
            <a href="{{ route('how-to-start') }}#quick-register" class="btn-pill-signup" style="flex: 1; text-align: center;">Signup</a>
        </li>
    </ul>
</div>
