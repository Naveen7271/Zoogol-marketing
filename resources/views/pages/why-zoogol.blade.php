@extends('layouts.app')

@section('title', 'Why Zoogol? | The Unmatched Advantages of Zoogol Cashback')
@section('meta_description', 'Compare Zoogol against traditional cashback sites and coupon apps. See why Zoogol delivers higher payouts, real bank transfers, and lifetime referral income.')

@section('content')
<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <div style="max-width: 860px; margin: 0 auto; text-align: center;">
            <span class="badge badge-emerald">Unmatched Value</span>
            <h1 class="hero-title">
                Why Choose <span class="text-gradient">Zoogol</span>?
            </h1>
            <p class="hero-desc">
                Most reward sites lock your money in expiring virtual points or one-off scratch cards. Zoogol was engineered from the ground up to give you real cash in your bank account and lifetime referral wealth.
            </p>
            <div style="display: flex; justify-content: center; gap: 1rem; flex-wrap: wrap;">
                <a href="{{ route('how-to-start') }}" class="btn btn-primary btn-lg">
                    Start Free in 30 Seconds
                </a>
                <a href="#comparison-matrix" class="btn btn-secondary btn-lg">
                    View Comparison Table ↓
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Direct Comparison Matrix -->
<section class="section" id="comparison-matrix" style="background: rgba(17, 24, 39, 0.4); border-top: 1px solid var(--border-subtle); border-bottom: 1px solid var(--border-subtle);">
    <div class="container">
        <div class="section-header">
            <span class="badge badge-glow">Head-to-Head Comparison</span>
            <h2 class="section-title">Zoogol vs Traditional Alternatives</h2>
            <p class="section-subtitle">
                See exactly how Zoogol stands apart from traditional cashback aggregators and generic coupon apps.
            </p>
        </div>

        <div class="comparison-table-wrapper">
            <table class="table">
                <thead>
                    <tr>
                        <th style="width: 32%;">Feature / Benefit</th>
                        <th class="highlight-col" style="width: 26%;">Zoogol Platform</th>
                        <th style="width: 21%;">Standard Cashback Sites</th>
                        <th style="width: 21%;">Generic Coupon Apps</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Payout Form</strong></td>
                        <td class="highlight-col">
                            <span class="check-icon">✓ Real Bank Cash (NEFT/IMPS)</span>
                        </td>
                        <td>Store vouchers or wallet coins</td>
                        <td><span class="cross-icon">✗ Scratch cards with conditions</span></td>
                    </tr>
                    <tr>
                        <td><strong>Referral Earnings</strong></td>
                        <td class="highlight-col">
                            <span class="check-icon">✓ Lifetime Passive Income</span>
                        </td>
                        <td>One-time ₹25 or ₹50 credit</td>
                        <td><span class="cross-icon">✗ Zero ongoing earnings</span></td>
                    </tr>
                    <tr>
                        <td><strong>Supported Brands</strong></td>
                        <td class="highlight-col">
                            <span class="check-icon">✓ 500+ Top National Retailers</span>
                        </td>
                        <td>100 - 200 selective merchants</td>
                        <td>Limited affiliate coupons</td>
                    </tr>
                    <tr>
                        <td><strong>Membership & Fees</strong></td>
                        <td class="highlight-col">
                            <span class="check-icon">✓ 100% Free Lifetime</span>
                        </td>
                        <td>Free with hidden payout fees</td>
                        <td>Ad-heavy and spam popups</td>
                    </tr>
                    <tr>
                        <td><strong>Cash Expiration</strong></td>
                        <td class="highlight-col">
                            <span class="check-icon">✓ Never Expires</span>
                        </td>
                        <td>Expires within 6 to 12 months</td>
                        <td>Expires in 7 to 30 days</td>
                    </tr>
                    <tr>
                        <td><strong>Double Savings</strong></td>
                        <td class="highlight-col">
                            <span class="check-icon">✓ Stacks with credit cards & sales</span>
                        </td>
                        <td>Occasional exclusion of sales</td>
                        <td>Overwrites promotional deals</td>
                    </tr>
                    <tr>
                        <td><strong>Community Support</strong></td>
                        <td class="highlight-col">
                            <span class="check-icon">✓ Dedicated Member Mentorship</span>
                        </td>
                        <td>Ticket support only</td>
                        <td><span class="cross-icon">✗ No personalized support</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- 6 Core Advantages -->
<section class="section">
    <div class="container">
        <div class="section-header">
            <span class="badge badge-glow">The Zoogol Advantage</span>
            <h2 class="section-title">6 Reasons Why Members Love Us</h2>
            <p class="section-subtitle">
                Designed to empower every consumer with real financial upside on their essential monthly expenditure.
            </p>
        </div>

        <div class="grid-3">
            <div class="card card-gradient-top">
                <div class="icon-box">💰</div>
                <h3 style="font-size: 1.25rem; font-weight: 700; color: var(--text-white); margin-bottom: 0.75rem;">
                    1. Real Money in Your Bank
                </h3>
                <p style="color: var(--text-muted); font-size: 0.9375rem; line-height: 1.6;">
                    No gift cards you'll never use. Withdraw your cash directly into any bank account across India. Spend it on fuel, rent, investments, or anything you desire.
                </p>
            </div>

            <div class="card card-emerald-top">
                <div class="icon-box emerald">📈</div>
                <h3 style="font-size: 1.25rem; font-weight: 700; color: var(--text-white); margin-bottom: 0.75rem;">
                    2. Exponential Passive Scale
                </h3>
                <p style="color: var(--text-muted); font-size: 0.9375rem; line-height: 1.6;">
                    When your network shops for groceries, flight tickets, or electronics, you earn cash rewards. The larger your community grows, the higher your monthly passive inflow.
                </p>
            </div>

            <div class="card card-gradient-top">
                <div class="icon-box">🛡️</div>
                <h3 style="font-size: 1.25rem; font-weight: 700; color: var(--text-white); margin-bottom: 0.75rem;">
                    3. Zero Investment & Zero Risk
                </h3>
                <p style="color: var(--text-muted); font-size: 0.9375rem; line-height: 1.6;">
                    You will never be asked to pay any registration fee or buy products you don't need. You simply shop for what you already purchase and reap the rewards.
                </p>
            </div>

            <div class="card card-emerald-top">
                <div class="icon-box emerald">🏬</div>
                <h3 style="font-size: 1.25rem; font-weight: 700; color: var(--text-white); margin-bottom: 0.75rem;">
                    4. Trusted Brand Partnerships
                </h3>
                <p style="color: var(--text-muted); font-size: 0.9375rem; line-height: 1.6;">
                    Direct affiliate tie-ups with leading giants including Amazon, Flipkart, Myntra, Swiggy, Zomato, MakeMyTrip, and hundreds of local merchant partners.
                </p>
            </div>

            <div class="card card-gradient-top">
                <div class="icon-box">🔐</div>
                <h3 style="font-size: 1.25rem; font-weight: 700; color: var(--text-white); margin-bottom: 0.75rem;">
                    5. Bank-Grade Security
                </h3>
                <p style="color: var(--text-muted); font-size: 0.9375rem; line-height: 1.6;">
                    Enterprise 256-bit SSL encryption safeguards your data. We never sell your personal information or request sensitive banking passwords or OTPs.
                </p>
            </div>

            <div class="card card-emerald-top">
                <div class="icon-box emerald">🤝</div>
                <h3 style="font-size: 1.25rem; font-weight: 700; color: var(--text-white); margin-bottom: 0.75rem;">
                    6. Community & Mentorship
                </h3>
                <p style="color: var(--text-muted); font-size: 0.9375rem; line-height: 1.6;">
                    Gain access to exclusive community workshops, smart shopping guides, and training on how to optimize your network's earnings and grow your passive income.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Trust & Security Details -->
<section class="section" id="security-transparency" style="background: rgba(17, 24, 39, 0.4); border-top: 1px solid var(--border-subtle); border-bottom: 1px solid var(--border-subtle);">
    <div class="container">
        <div class="grid-2" style="align-items: center;">
            <div>
                <span class="badge badge-emerald">Trust & Compliance</span>
                <h2 class="section-title" style="text-align: left; margin-bottom: 1.25rem;">
                    Your Security is Our Top Priority
                </h2>
                <p style="color: var(--text-muted); font-size: 1rem; line-height: 1.7; margin-bottom: 1.5rem;">
                    Zoogol operates under strict ethical guidelines and regulatory standards. We are an affiliate technology platform that respects consumer privacy, never requests payment card details, and uses automated banking rails for all member disbursements.
                </p>
                <div style="display: flex; flex-direction: column; gap: 0.75rem;">
                    <div style="display: flex; align-items: center; gap: 0.75rem; color: var(--text-white); font-weight: 600;">
                        <span style="color: #34d399;">✓</span> End-to-end 256-bit SSL Data Encryption
                    </div>
                    <div style="display: flex; align-items: center; gap: 0.75rem; color: var(--text-white); font-weight: 600;">
                        <span style="color: #34d399;">✓</span> Automated Bank Transfer via RBI-approved NEFT/IMPS rails
                    </div>
                    <div style="display: flex; align-items: center; gap: 0.75rem; color: var(--text-white); font-weight: 600;">
                        <span style="color: #34d399;">✓</span> Zero Spam Guarantee &bull; 100% Privacy Protection
                    </div>
                </div>
            </div>

            <div style="background: rgba(18, 25, 41, 0.85); border: 1px solid var(--border-glow); border-radius: var(--radius-xl); padding: 2.5rem; box-shadow: var(--shadow-glow);">
                <h3 style="font-size: 1.25rem; font-weight: 700; color: var(--text-white); margin-bottom: 1.25rem;">
                    Platform Trust Metrics
                </h3>
                <div style="display: flex; flex-direction: column; gap: 1.25rem;">
                    <div>
                        <div style="display: flex; justify-content: space-between; font-size: 0.875rem; margin-bottom: 0.35rem;">
                            <span style="color: var(--text-muted);">Payout Success Rate</span>
                            <span style="color: #34d399; font-weight: 700;">99.8%</span>
                        </div>
                        <div style="width: 100%; height: 6px; background: rgba(255,255,255,0.06); border-radius: 3px; overflow: hidden;">
                            <div style="width: 99.8%; height: 100%; background: var(--grad-emerald);"></div>
                        </div>
                    </div>

                    <div>
                        <div style="display: flex; justify-content: space-between; font-size: 0.875rem; margin-bottom: 0.35rem;">
                            <span style="color: var(--text-muted);">Affiliate Tracking Accuracy</span>
                            <span style="color: #818cf8; font-weight: 700;">98.5%</span>
                        </div>
                        <div style="width: 100%; height: 6px; background: rgba(255,255,255,0.06); border-radius: 3px; overflow: hidden;">
                            <div style="width: 98.5%; height: 100%; background: var(--grad-primary);"></div>
                        </div>
                    </div>

                    <div>
                        <div style="display: flex; justify-content: space-between; font-size: 0.875rem; margin-bottom: 0.35rem;">
                            <span style="color: var(--text-muted);">Member Retention & Activity</span>
                            <span style="color: #fbbf24; font-weight: 700;">94.2%</span>
                        </div>
                        <div style="width: 100%; height: 6px; background: rgba(255,255,255,0.06); border-radius: 3px; overflow: hidden;">
                            <div style="width: 94.2%; height: 100%; background: linear-gradient(135deg, #f59e0b, #ec4899);"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Banner -->
<section class="section">
    <div class="container">
        <div class="cta-banner">
            <span class="badge badge-emerald" style="margin-bottom: 1rem;">Join Free Today</span>
            <h2 style="font-family: var(--font-display); font-size: 2.5rem; font-weight: 800; color: #fff; margin-bottom: 1rem;">
                Why Wait? Start Saving and Earning Now
            </h2>
            <p style="color: var(--text-muted); font-size: 1.125rem; max-width: 600px; margin: 0 auto 2rem; line-height: 1.6;">
                It takes under 30 seconds to join. Zero risk, zero cost, and immediate cash rewards.
            </p>
            <div style="display: flex; justify-content: center; gap: 1rem; flex-wrap: wrap;">
                <a href="{{ route('how-to-start') }}" class="btn btn-primary btn-lg">
                    Get Started Free in 4 Steps &rarr;
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
