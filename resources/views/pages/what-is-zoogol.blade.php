@extends('layouts.app')

@section('title', 'What is Zoogol? | The Smart Shopping & Cashback Revolution')
@section('meta_description', 'Learn what Zoogol is, how it transforms retail advertising budgets into real consumer cash rewards, and how the dual-engine cashback system works.')

@section('content')
<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <div style="max-width: 860px; margin: 0 auto; text-align: center;">
            <span class="badge badge-glow">Platform Overview</span>
            <h1 class="hero-title">
                What is <span class="text-gradient">Zoogol</span>?
            </h1>
            <p class="hero-desc">
                Zoogol is a disruptive smart-shopping ecosystem that redirects multi-billion dollar corporate marketing budgets straight into consumer pockets. Earn direct cash on your purchases, and generate recurring passive income when your friends shop.
            </p>
            <div style="display: flex; justify-content: center; gap: 1rem; flex-wrap: wrap;">
                <a href="{{ route('how-to-start') }}" class="btn btn-primary btn-lg">
                    Join Zoogol Free
                </a>
                <a href="{{ route('why-zoogol') }}" class="btn btn-secondary btn-lg">
                    Why Zoogol Beats Others
                </a>
            </div>
        </div>
    </div>
</section>

<!-- The Traditional Model vs The Zoogol Model -->
<section class="section" style="background: rgba(17, 24, 39, 0.4); border-top: 1px solid var(--border-subtle); border-bottom: 1px solid var(--border-subtle);">
    <div class="container">
        <div class="section-header">
            <span class="badge badge-emerald">The Core Philosophy</span>
            <h2 class="section-title">Turning Ad Budgets into Community Wealth</h2>
            <p class="section-subtitle">
                Understand how big tech advertising used to work, and how Zoogol creates a win-win financial model for everyday shoppers.
            </p>
        </div>

        <div class="grid-2">
            <!-- Traditional Shopping Card -->
            <div class="card" style="border-left: 3px solid #f43f5e;">
                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1rem;">
                    <span class="badge badge-amber" style="background: rgba(244, 63, 94, 0.15); color: #f43f5e; border-color: rgba(244, 63, 94, 0.3);">
                        Traditional System
                    </span>
                    <span style="font-size: 1.5rem;">❌</span>
                </div>
                <h3 style="font-size: 1.35rem; font-weight: 700; color: var(--text-white); margin-bottom: 1rem;">
                    How E-Commerce Usually Works
                </h3>
                <ul style="list-style: none; display: flex; flex-direction: column; gap: 1rem; color: var(--text-muted); font-size: 0.9375rem;">
                    <li style="display: flex; gap: 0.75rem;">
                        <span style="color: #f43f5e; font-weight: bold;">&bull;</span>
                        <span>Retail brands spend billions on search engines, billboard banners, and social network ads to get you to purchase.</span>
                    </li>
                    <li style="display: flex; gap: 0.75rem;">
                        <span style="color: #f43f5e; font-weight: bold;">&bull;</span>
                        <span>Big advertising platforms take 100% of this money into Silicon Valley bank accounts.</span>
                    </li>
                    <li style="display: flex; gap: 0.75rem;">
                        <span style="color: #f43f5e; font-weight: bold;">&bull;</span>
                        <span>You pay full retail price and walk away with zero financial benefit after the purchase.</span>
                    </li>
                    <li style="display: flex; gap: 0.75rem;">
                        <span style="color: #f43f5e; font-weight: bold;">&bull;</span>
                        <span>If you recommend a product to a family member, you receive ₹0 in gratitude.</span>
                    </li>
                </ul>
            </div>

            <!-- Zoogol Model Card -->
            <div class="card" style="border-left: 3px solid #10b981;">
                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1rem;">
                    <span class="badge badge-emerald">The Zoogol Model</span>
                    <span style="font-size: 1.5rem;">✅</span>
                </div>
                <h3 style="font-size: 1.35rem; font-weight: 700; color: var(--text-white); margin-bottom: 1rem;">
                    How Zoogol Rewards You
                </h3>
                <ul style="list-style: none; display: flex; flex-direction: column; gap: 1rem; color: var(--text-muted); font-size: 0.9375rem;">
                    <li style="display: flex; gap: 0.75rem;">
                        <span style="color: #34d399; font-weight: bold;">&bull;</span>
                        <span>Partner stores pay Zoogol an agreed affiliate marketing commission on every verified customer purchase.</span>
                    </li>
                    <li style="display: flex; gap: 0.75rem;">
                        <span style="color: #34d399; font-weight: bold;">&bull;</span>
                        <span>Zoogol transfers the majority of this commission straight back into <strong>your personal bank account</strong>.</span>
                    </li>
                    <li style="display: flex; gap: 0.75rem;">
                        <span style="color: #34d399; font-weight: bold;">&bull;</span>
                        <span>A portion is also shared with the friend who introduced you, creating sustainable passive community income.</span>
                    </li>
                    <li style="display: flex; gap: 0.75rem;">
                        <span style="color: #34d399; font-weight: bold;">&bull;</span>
                        <span>You pay the exact same or lower price at checkout while earning cold, hard cash.</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- The Dual Engine Architecture -->
<section class="section" id="cashback-engine">
    <div class="container">
        <div class="section-header">
            <span class="badge badge-glow">The Core Mechanism</span>
            <h2 class="section-title">The Dual-Engine Earning Model</h2>
            <p class="section-subtitle">
                Two synchronized revenue engines power the Zoogol platform, offering members immediate savings and exponential wealth generation.
            </p>
        </div>

        <div class="grid-2">
            <!-- Engine 1 -->
            <div class="card card-gradient-top">
                <div class="icon-box">🛒</div>
                <span class="badge badge-glow" style="margin-bottom: 0.75rem;">Engine #1</span>
                <h3 style="font-size: 1.5rem; font-weight: 700; color: var(--text-white); margin-bottom: 1rem;">
                    Personal Shopping Engine
                </h3>
                <p style="color: var(--text-muted); font-size: 1rem; line-height: 1.6; margin-bottom: 1.5rem;">
                    Every single time you shop through Zoogol at any of our 500+ affiliated merchants (Amazon, Flipkart, Ajio, Swiggy, MakeMyTrip, etc.), you receive real cashback deposited into your Zoogol wallet.
                </p>
                <div style="background: rgba(255, 255, 255, 0.03); border: 1px solid var(--border-subtle); padding: 1.25rem; border-radius: var(--radius-md);">
                    <div style="font-size: 0.875rem; font-weight: 600; color: var(--text-white); margin-bottom: 0.5rem;">Highlights:</div>
                    <ul style="list-style: none; font-size: 0.875rem; color: var(--text-muted); display: flex; flex-direction: column; gap: 0.4rem;">
                        <li>✔ Over & above existing store coupons and credit card points</li>
                        <li>✔ Up to 15% cashback across electronics, fashion, beauty & food</li>
                        <li>✔ Direct withdrawal into any Indian bank via NEFT/IMPS</li>
                    </ul>
                </div>
            </div>

            <!-- Engine 2 -->
            <div class="card card-emerald-top" id="network-multiplier">
                <div class="icon-box emerald">🌐</div>
                <span class="badge badge-emerald" style="margin-bottom: 0.75rem;">Engine #2</span>
                <h3 style="font-size: 1.5rem; font-weight: 700; color: var(--text-white); margin-bottom: 1rem;">
                    Network Multiplier Engine
                </h3>
                <p style="color: var(--text-muted); font-size: 1rem; line-height: 1.6; margin-bottom: 1.5rem;">
                    Word of mouth is the most powerful marketing force in the world. When you invite your family, friends, and colleagues to shop with Zoogol, you earn a percentage bonus on their purchases, forever.
                </p>
                <div style="background: rgba(255, 255, 255, 0.03); border: 1px solid var(--border-subtle); padding: 1.25rem; border-radius: var(--radius-md);">
                    <div style="font-size: 0.875rem; font-weight: 600; color: var(--text-white); margin-bottom: 0.5rem;">Highlights:</div>
                    <ul style="list-style: none; font-size: 0.875rem; color: var(--text-muted); display: flex; flex-direction: column; gap: 0.4rem;">
                        <li>✔ True passive income that continues every time your network shops</li>
                        <li>✔ You never have to sell, carry inventory, or handle shipping</li>
                        <li>✔ Real-time tracking dashboard showing all community credits</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Visual Step Journey Flow -->
<section class="section" style="background: rgba(17, 24, 39, 0.4); border-top: 1px solid var(--border-subtle); border-bottom: 1px solid var(--border-subtle);">
    <div class="container">
        <div class="section-header">
            <span class="badge badge-glow">The Cash Flow Journey</span>
            <h2 class="section-title">How the Money Moves: End-to-End</h2>
            <p class="section-subtitle">
                Complete transparency from the moment you click until the funds arrive in your bank account.
            </p>
        </div>

        <div class="grid-4">
            <div class="card" style="text-align: center;">
                <div style="font-size: 2.5rem; margin-bottom: 1rem;">1️⃣</div>
                <h4 style="color: var(--text-white); font-size: 1.125rem; margin-bottom: 0.5rem;">User Action</h4>
                <p style="font-size: 0.875rem; color: var(--text-muted);">
                    You or a friend click on a partner retailer link inside Zoogol and complete an order normally.
                </p>
            </div>

            <div class="card" style="text-align: center;">
                <div style="font-size: 2.5rem; margin-bottom: 1rem;">2️⃣</div>
                <h4 style="color: var(--text-white); font-size: 1.125rem; margin-bottom: 0.5rem;">Merchant Tracking</h4>
                <p style="font-size: 0.875rem; color: var(--text-muted);">
                    The store's affiliate tracking pixel logs the transaction and updates Zoogol within 24 to 72 hours.
                </p>
            </div>

            <div class="card" style="text-align: center;">
                <div style="font-size: 2.5rem; margin-bottom: 1rem;">3️⃣</div>
                <h4 style="color: var(--text-white); font-size: 1.125rem; margin-bottom: 0.5rem;">Cash Allocation</h4>
                <p style="font-size: 0.875rem; color: var(--text-muted);">
                    Once the return window closes, the merchant sends commission funds to Zoogol, and the cash status changes to "Confirmed".
                </p>
            </div>

            <div class="card" style="text-align: center;">
                <div style="font-size: 2.5rem; margin-bottom: 1rem;">4️⃣</div>
                <h4 style="color: var(--text-white); font-size: 1.125rem; margin-bottom: 0.5rem;">Bank Transfer</h4>
                <p style="font-size: 0.875rem; color: var(--text-muted);">
                    Request a withdrawal with 1 click. Cash is deposited directly into your bank account via NEFT/IMPS.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Banner -->
<section class="section">
    <div class="container">
        <div class="cta-banner">
            <span class="badge badge-glow" style="margin-bottom: 1rem;">Join the Community</span>
            <h2 style="font-family: var(--font-display); font-size: 2.5rem; font-weight: 800; color: #fff; margin-bottom: 1rem;">
                Experience the Power of Zoogol Today
            </h2>
            <p style="color: var(--text-muted); font-size: 1.125rem; max-width: 600px; margin: 0 auto 2rem; line-height: 1.6;">
                Get started in 30 seconds with zero fees and start earning cash rewards on your next shopping order.
            </p>
            <div style="display: flex; justify-content: center; gap: 1rem; flex-wrap: wrap;">
                <a href="{{ route('how-to-start') }}" class="btn btn-primary btn-lg">
                    How to Start Earning &rarr;
                </a>
                <a href="{{ route('why-zoogol') }}" class="btn btn-secondary btn-lg">
                    Compare Zoogol Advantages
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
