@extends('layouts.app')

@section('title', 'How to Start with Zoogol | Step-by-Step Onboarding Guide')
@section('meta_description', 'Learn how to start earning cashback with Zoogol in 4 simple steps. Free registration, store activation, tracking, bank payouts, and FAQs.')

@section('content')
<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <div style="max-width: 860px; margin: 0 auto; text-align: center;">
            <span class="badge badge-glow">Quick Start Guide</span>
            <h1 class="hero-title">
                How to Start with <span class="text-gradient">Zoogol</span>
            </h1>
            <p class="hero-desc">
                Follow this simple 4-step onboarding roadmap to activate your free account, shop at top brands, withdraw real cash into your bank account, and unlock passive referral earnings.
            </p>
            <div style="display: flex; justify-content: center; gap: 1rem; flex-wrap: wrap;">
                <a href="#quick-register" class="btn btn-primary btn-lg">
                    Join Free Right Now
                </a>
                <a href="#faq-section" class="btn btn-secondary btn-lg">
                    Read FAQs ↓
                </a>
            </div>
        </div>
    </div>
</section>

<!-- The 4-Step Action Roadmap -->
<section class="section" style="background: rgba(17, 24, 39, 0.4); border-top: 1px solid var(--border-subtle); border-bottom: 1px solid var(--border-subtle);">
    <div class="container">
        <div class="section-header">
            <span class="badge badge-emerald">Step-by-Step Roadmap</span>
            <h2 class="section-title">Your 4 Steps to Earning Real Cash</h2>
            <p class="section-subtitle">
                Clear, simple, and effortless. You do not need any special technical skills or financial investment.
            </p>
        </div>

        <div class="grid-2">
            <!-- Step 1 -->
            <div class="card card-gradient-top">
                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1.25rem;">
                    <div class="icon-box" style="margin-bottom: 0;">1</div>
                    <span class="badge badge-glow">Takes 30 Seconds</span>
                </div>
                <h3 style="font-size: 1.35rem; font-weight: 700; color: var(--text-white); margin-bottom: 0.75rem;">
                    Step 1: Create Your Free Account
                </h3>
                <p style="color: var(--text-muted); font-size: 0.9375rem; line-height: 1.6; margin-bottom: 1rem;">
                    Sign up with your basic contact information. You will never be asked for credit card numbers or upfront membership charges.
                </p>
                <div style="background: rgba(255, 255, 255, 0.03); border: 1px solid var(--border-subtle); padding: 1rem; border-radius: var(--radius-md); font-size: 0.875rem; color: #34d399;">
                    ✔ Instant verification &bull; Zero joining fee forever
                </div>
            </div>

            <!-- Step 2 -->
            <div class="card card-emerald-top">
                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1.25rem;">
                    <div class="icon-box emerald" style="margin-bottom: 0;">2</div>
                    <span class="badge badge-emerald">500+ Partner Stores</span>
                </div>
                <h3 style="font-size: 1.35rem; font-weight: 700; color: var(--text-white); margin-bottom: 0.75rem;">
                    Step 2: Browse Stores & Activate Deal
                </h3>
                <p style="color: var(--text-muted); font-size: 0.9375rem; line-height: 1.6; margin-bottom: 1rem;">
                    Whenever you need to shop (groceries, smartphones, flight bookings, apparel), log into Zoogol, search for the store, and click <strong>"Activate Cashback"</strong>.
                </p>
                <div style="background: rgba(255, 255, 255, 0.03); border: 1px solid var(--border-subtle); padding: 1rem; border-radius: var(--radius-md); font-size: 0.875rem; color: #34d399;">
                    ✔ Redirects safely to the merchant's official portal
                </div>
            </div>

            <!-- Step 3 -->
            <div class="card card-gradient-top">
                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1.25rem;">
                    <div class="icon-box" style="margin-bottom: 0;">3</div>
                    <span class="badge badge-glow">Zero Extra Cost</span>
                </div>
                <h3 style="font-size: 1.35rem; font-weight: 700; color: var(--text-white); margin-bottom: 0.75rem;">
                    Step 3: Shop & Check Out As Usual
                </h3>
                <p style="color: var(--text-muted); font-size: 0.9375rem; line-height: 1.6; margin-bottom: 1rem;">
                    Browse products, add items to cart, and apply your normal store coupon codes or credit card offers. The checkout experience is 100% normal.
                </p>
                <div style="background: rgba(255, 255, 255, 0.03); border: 1px solid var(--border-subtle); padding: 1rem; border-radius: var(--radius-md); font-size: 0.875rem; color: #34d399;">
                    ✔ Same original merchant warranty & return policies
                </div>
            </div>

            <!-- Step 4 -->
            <div class="card card-emerald-top">
                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1.25rem;">
                    <div class="icon-box emerald" style="margin-bottom: 0;">4</div>
                    <span class="badge badge-emerald">Direct NEFT / IMPS</span>
                </div>
                <h3 style="font-size: 1.35rem; font-weight: 700; color: var(--text-white); margin-bottom: 0.75rem;">
                    Step 4: Track Cashback & Withdraw Cash
                </h3>
                <p style="color: var(--text-muted); font-size: 0.9375rem; line-height: 1.6; margin-bottom: 1rem;">
                    Cashback appears in your dashboard as "Tracked" within 24-72 hours. Once verified by the merchant, click "Withdraw" to transfer real cash directly to your bank account!
                </p>
                <div style="background: rgba(255, 255, 255, 0.03); border: 1px solid var(--border-subtle); padding: 1rem; border-radius: var(--radius-md); font-size: 0.875rem; color: #34d399;">
                    ✔ Real cash deposited straight into your bank account
                </div>
            </div>
        </div>

        <!-- Bonus Step Ribbon -->
        <div style="margin-top: 2rem; background: linear-gradient(135deg, rgba(99, 102, 241, 0.15), rgba(16, 185, 129, 0.15)); border: 1px solid var(--border-glow); border-radius: var(--radius-lg); padding: 1.75rem; display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 1.5rem;">
            <div style="display: flex; align-items: center; gap: 1rem;">
                <div style="font-size: 2.25rem;">🚀</div>
                <div>
                    <h4 style="color: var(--text-white); font-size: 1.125rem; font-weight: 700;">Bonus Step: Share Your Referral Link</h4>
                    <p style="color: var(--text-muted); font-size: 0.9375rem;">Unlock continuous passive income whenever friends in your network make everyday purchases.</p>
                </div>
            </div>
            <a href="#quick-register" class="btn btn-emerald btn-sm">
                Get Your Referral Link
            </a>
        </div>
    </div>
</section>

<!-- Quick Registration Interactive Simulation Form -->
<section class="section" id="quick-register">
    <div class="container">
        <div class="section-header">
            <span class="badge badge-glow">Instant Access</span>
            <h2 class="section-title">Join Zoogol in 30 Seconds</h2>
            <p class="section-subtitle">
                Fill in your details below to activate your free lifetime membership and begin earning real cashback on 500+ top brands.
            </p>
        </div>

        <div class="signup-card">
            <form id="signup-form">
                <div class="form-group">
                    <label class="form-label" for="signup-name">Full Name</label>
                    <input type="text" id="signup-name" class="form-control" placeholder="e.g. Ramesh Patel" required>
                </div>

                <div class="form-group">
                    <label class="form-label" for="signup-email">Email Address</label>
                    <input type="email" id="signup-email" class="form-control" placeholder="name@example.com" required>
                </div>

                <div class="form-group">
                    <label class="form-label" for="signup-mobile">Mobile Number</label>
                    <input type="tel" id="signup-mobile" class="form-control" placeholder="10-digit mobile number" pattern="[0-9]{10}" required>
                </div>

                <div class="form-group">
                    <label class="form-label" for="signup-ref">Referral Code (Optional)</label>
                    <input type="text" id="signup-ref" class="form-control" placeholder="Enter friend's referral code or leave empty" value="ZOOGOLVIP">
                </div>

                <div style="margin: 1.5rem 0 1rem; display: flex; align-items: flex-start; gap: 0.75rem;">
                    <input type="checkbox" id="terms-agree" checked required style="margin-top: 0.25rem; accent-color: var(--primary);">
                    <label for="terms-agree" style="font-size: 0.8125rem; color: var(--text-muted);">
                        I agree to Zoogol's Free Terms & Privacy Policy. 100% free lifetime membership with zero hidden fees.
                    </label>
                </div>

                <button type="submit" class="btn btn-primary btn-lg" style="width: 100%;">
                    Create Free Account & Start Earning
                </button>
            </form>
        </div>
    </div>
</section>

<!-- Registration Success Modal Simulation -->
<div class="modal-overlay" id="signup-modal" role="dialog" aria-modal="true" aria-labelledby="modal-title">
    <div class="modal-content">
        <div style="font-size: 3.5rem; margin-bottom: 1rem;">🎉</div>
        <h3 id="modal-title" style="font-size: 1.75rem; font-weight: 800; color: var(--text-white); margin-bottom: 0.5rem;">
            Welcome to Zoogol, <span id="welcome-user-name" style="color: #34d399;">Shopper</span>!
        </h3>
        <p style="color: var(--text-muted); font-size: 0.9375rem; line-height: 1.6; margin-bottom: 1.5rem;">
            Your free lifetime membership has been activated. A bonus credit has been initiated in your demo portfolio, and your custom referral link is ready.
        </p>

        <div style="background: rgba(16, 185, 129, 0.1); border: 1px solid var(--border-emerald); padding: 1rem; border-radius: var(--radius-md); margin-bottom: 1.5rem;">
            <div style="font-size: 0.8125rem; color: var(--text-muted);">Starter Welcome Bonus</div>
            <div style="font-size: 1.5rem; font-weight: 800; color: #34d399;">₹50.00 Added</div>
        </div>

        <button type="button" class="btn btn-primary" id="close-modal-btn" style="width: 100%;">
            Explore Partner Brands Now
        </button>
    </div>
</div>

<!-- FAQ Accordion Section -->
<section class="section" id="faq-section" style="background: rgba(17, 24, 39, 0.4); border-top: 1px solid var(--border-subtle); border-bottom: 1px solid var(--border-subtle);">
    <div class="container">
        <div class="section-header">
            <span class="badge badge-emerald">Got Questions?</span>
            <h2 class="section-title">Frequently Asked Questions</h2>
            <p class="section-subtitle">
                Everything you need to know about registering, tracking cashback, and receiving real cash in your bank.
            </p>
        </div>

        <div class="accordion">
            <div class="accordion-item active">
                <button class="accordion-header" type="button">
                    <span>Is joining Zoogol really 100% free?</span>
                    <span class="accordion-icon">▼</span>
                </button>
                <div class="accordion-body">
                    Yes, absolutely 100% free forever. There is zero registration fee, zero monthly maintenance fee, and zero renewal cost. We never ask for debit card, credit card, or net banking credentials.
                </div>
            </div>

            <div class="accordion-item">
                <button class="accordion-header" type="button">
                    <span>How does Zoogol pay cashback to members?</span>
                    <span class="accordion-icon">▼</span>
                </button>
                <div class="accordion-body">
                    When you shop at any of our 500+ affiliate partner stores (like Amazon, Flipkart, Myntra, Swiggy, MakeMyTrip) via Zoogol, the store pays us an advertising commission for referring you. Zoogol simply passes the majority of this commission directly back to you as real bank cash.
                </div>
            </div>

            <div class="accordion-item">
                <button class="accordion-header" type="button">
                    <span>Does shopping through Zoogol make products more expensive?</span>
                    <span class="accordion-icon">▼</span>
                </button>
                <div class="accordion-body">
                    Never! You pay the exact same price as any other customer directly on the merchant's official website or app. In fact, you can combine Zoogol cashback with merchant sales, coupon promo codes, and credit card rewards to save even more.
                </div>
            </div>

            <div class="accordion-item">
                <button class="accordion-header" type="button">
                    <span>How do I withdraw cash into my bank account?</span>
                    <span class="accordion-icon">▼</span>
                </button>
                <div class="accordion-body">
                    Once your tracked cashback is confirmed by the merchant (after the standard return/exchange window closes), you can withdraw it directly to your bank account via NEFT or IMPS. Simply enter your account number and IFSC code in your dashboard.
                </div>
            </div>

            <div class="accordion-item">
                <button class="accordion-header" type="button">
                    <span>How does the Referral Network passive income work?</span>
                    <span class="accordion-icon">▼</span>
                </button>
                <div class="accordion-body">
                    Each member receives a unique referral link. When you share this link with friends, family, or social media followers and they sign up, they become part of your community. Whenever anyone in your network shops, you earn a percentage bonus on their purchases automatically, providing long-term recurring income.
                </div>
            </div>

            <div class="accordion-item">
                <button class="accordion-header" type="button">
                    <span>How long does it take for cashback to show in my dashboard?</span>
                    <span class="accordion-icon">▼</span>
                </button>
                <div class="accordion-body">
                    Most partner stores track transactions and report them to Zoogol within 24 to 72 hours as "Pending / Tracked". The status becomes "Confirmed" once the return or cancellation period for that item ends (usually 30 to 60 days depending on the store).
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Final Call to Action -->
<section class="section">
    <div class="container">
        <div class="cta-banner">
            <span class="badge badge-glow" style="margin-bottom: 1rem;">Ready to Begin?</span>
            <h2 style="font-family: var(--font-display); font-size: 2.5rem; font-weight: 800; color: #fff; margin-bottom: 1rem;">
                Start Saving and Earning Today
            </h2>
            <p style="color: var(--text-muted); font-size: 1.125rem; max-width: 600px; margin: 0 auto 2rem; line-height: 1.6;">
                Join the smart shopper community and unlock continuous cash benefits on everything you purchase online.
            </p>
            <div style="display: flex; justify-content: center; gap: 1rem; flex-wrap: wrap;">
                <a href="#quick-register" class="btn btn-primary btn-lg">
                    Join Free Now
                </a>
                <a href="{{ route('home') }}" class="btn btn-secondary btn-lg">
                    Back to Homepage
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
