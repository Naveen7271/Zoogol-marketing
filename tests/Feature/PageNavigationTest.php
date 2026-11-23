<?php

namespace Tests\Feature;

use Tests\TestCase;

class PageNavigationTest extends TestCase
{
    /**
     * Test that the homepage loads successfully with required elements.
     */
    public function test_homepage_loads_successfully(): void
    {
        $response = $this->get(route('home'));

        $response->assertStatus(200);
        $response->assertSee('Get Instant');
        $response->assertSee('Cashback');
        $response->assertSee('Every Purchase.');
        $response->assertSee('Extra Deals');
        $response->assertSee('Instant Cashback');
        $response->assertSee('Referral Moneyback');
        $response->assertSee('Categories to Explore');
        $response->assertSee('Top Categories');
        $response->assertSee('Perfumes');
        $response->assertSee('Fine Dine');
        $response->assertSee('Earn While You Shop With Your Favourite Brands');
        $response->assertSee('AJIO');
        $response->assertSee('Local Deals Near You');
        $response->assertSee('JW Marriott');
        $response->assertSee('Looks Salon');
        $response->assertSee('TravMax');
        $response->assertSee('Mehak Florist');
        $response->assertSee('Handpicked Brands');
        $response->assertSee('GIVA');
        $response->assertSee('Trends');
        $response->assertSee('PALMONAS');
        $response->assertSee('Shop With Your Favourite Brands');
        $response->assertSee('salty');
        $response->assertSee('blissclub');
        $response->assertSee('UNIQLO');
        $response->assertSee('TTK Prestige');
        $response->assertSee('Avail Services Via Zoogol');
        $response->assertSee('AC SERVICE');
        $response->assertSee('YOGA');
        $response->assertSee('ADVOCATE');
        $response->assertSee('Shopping Into Rewards');
        $response->assertSee('Shop on Zoogol');
        $response->assertSee('Earn Money back');
        $response->assertSee('Hear It From Zoogolers');
        $response->assertSee('Sarah');
        $response->assertSee('Saved ₹2,500');
        $response->assertSee('Share more.');
        $response->assertSee('Earn more!');
        $response->assertSee('Start Shopping');
        $response->assertSee('Explore Deals');
    }

    /**
     * Test that the 'What is Zoogol' page loads successfully.
     */
    public function test_what_is_zoogol_page_loads_successfully(): void
    {
        $response = $this->get(route('what-is-zoogol'));

        $response->assertStatus(200);
        $response->assertSee('What is');
        $response->assertSee('Zoogol');
        $response->assertSee('The Dual-Engine Earning Model');
        $response->assertSee('The Cash Flow Journey');
    }

    /**
     * Test that the 'Why Zoogol' page loads successfully.
     */
    public function test_why_zoogol_page_loads_successfully(): void
    {
        $response = $this->get(route('why-zoogol'));

        $response->assertStatus(200);
        $response->assertSee('Why Choose');
        $response->assertSee('Zoogol vs Traditional Alternatives');
        $response->assertSee('6 Reasons Why Members Love Us');
    }

    /**
     * Test that the 'How to Start' page loads successfully.
     */
    public function test_how_to_start_page_loads_successfully(): void
    {
        $response = $this->get(route('how-to-start'));

        $response->assertStatus(200);
        $response->assertSee('How to Start with');
        $response->assertSee('Your 4 Steps to Earning Real Cash');
        $response->assertSee('Frequently Asked Questions');
        $response->assertSee('Join Zoogol in 30 Seconds');
    }

    /**
     * Test that the 'How Zoogol Works' page loads successfully.
     */
    public function test_how_zoogol_works_page_loads_successfully(): void
    {
        $response = $this->get(route('how-zoogol-works'));

        $response->assertOk();
        $response->assertSee('First time ever,');
        $response->assertSee('Cashback,');
        $response->assertSee('moneyback, profits.');
        $response->assertSee('From the same day to day purchase');
        $response->assertSee('Shop across 300+ websites and 500+ local stores, get cashback everytime plus earn moneyback and profits.');
        $response->assertSee('Start saving with Zoogol');
        $response->assertSee('See how it works');
        $response->assertSee('Verified deals');
        $response->assertSee('Real cashback');
        $response->assertSee('Secure payments');
        $response->assertSee('Customer support');
        $response->assertSee('Online + offline');
        $response->assertSee('MORE ABOUT ZOOGOL');
        $response->assertSee('Earn on the things you');
        $response->assertSee('already buy.');
        $response->assertSee('300+ websites &amp; brands', false);
        $response->assertSee('500+ local stores');
        $response->assertSee('Grocery');
        $response->assertSee('Online shopping');
        $response->assertSee('id="zgw1"', false);
        $response->assertSee('.zgw-stage', false);
        $response->assertSee('initWheel', false);
        $response->assertSee('HOW ZOOGOL WORKS');
        $response->assertSee('Discover, Shop.');
        $response->assertSee('Get Cashback everytime.');
        $response->assertSee('Follow one deal from the search box to your wallet.');
        $response->assertSee('Discover deals');
        $response->assertSee('SprintMart');
        $response->assertSee('Green Basket');
        $response->assertSee('Get Cashback');
        $response->assertSee('Cashback earned');
        $response->assertSee('id="reasons-to-shop"', false);
        $response->assertSee('REASONS TO SHOP VIA ZOOGOL');
        $response->assertSee('More than shopping.');
        $response->assertSee('Smarter earning.');
        $response->assertSee('Refer and earn upto 111% of your purchase amount.*');
        $response->assertSee('111%');
        $response->assertSee('Money back');
        $response->assertSee('Everytime when you refer');
        $response->assertSee('300+');
        $response->assertSee('Websites &amp; brands', false);
        $response->assertSee('Top global brands. Incredible offers.');
        $response->assertSee('500+');
        $response->assertSee('Local stores');
        $response->assertSee('Shop local. Earn more.');
        $response->assertSee('id="zoogol-partners"', false);
        $response->assertSee('ZOOGOL PARTNERS');
        $response->assertSee('Turn the audience you built into income.');
        $response->assertSee('Selected macro partners get upgraded Zoogol accounts and unique affiliate links to earn commission on every purchase they refer.');
        $response->assertSee('An upgraded account');
        $response->assertSee('Exclusive access for selected partners.');
        $response->assertSee('Your own Affiliate links');
        $response->assertSee('Every sale through your links is credited to you.');
        $response->assertSee('Commission on every sale');
        $response->assertSee('Earn on every purchase through your links.');
        $response->assertSee('Apply as a partner');
        $response->assertSee('Learn more');
        $response->assertSee('id="ready-to-shop"', false);
        $response->assertSee('WHEN YOU ARE READY');
        $response->assertSee('What are you buying next?');
        $response->assertSee('Search it on Zoogol first. Verified deals, extra cashback and money back, online and at local stores.');
        $response->assertSee('Groceries, flights, a haircut, insurance...');
        $response->assertSee('Find deals');
        $response->assertSee('New to Zoogol?');
        $response->assertSee('Sign up');
        $response->assertSee('Log in');
        $response->assertSee('100% verified offers');
        $response->assertSee('Real money, not coins');
        $response->assertSee('Secure payments');
    }

    /**
     * Test that the 'Refer and Earn' page loads successfully.
     */
    public function test_refer_and_earn_page_loads_successfully(): void
    {
        $response = $this->get(route('refer-and-earn'));

        $response->assertStatus(200);
        $response->assertSee('Your Network,');
        $response->assertSee('Their Savings &');
        $response->assertSee('Your Earnings.');
        $response->assertSee('Start Referring Now');
        $response->assertSee('₹12,450');
        $response->assertSee('₹2,450');
        $response->assertSee('EARN WITH ZOOGOL');
        $response->assertSee('Watch how easy it');
        $response->assertSee('earn with');
        $response->assertSee('Zoogol');
        $response->assertSee('See how you can turn your network into a source of income');
        $response->assertSee('Watch Video');
        $response->assertSee('BUILT TO REWARD YOU MORE');
        $response->assertSee('Why refer');
        $response->assertSee('Earn on every order');
        $response->assertSee('Unlimited earning potential');
        $response->assertSee('Real-time transparency');
        $response->assertSee('Lifetime rewards');
        $response->assertSee('Trusted by smart shoppers');
        $response->assertSee('Real-time updates');
        $response->assertSee('Six reasons, scroll along');
        $response->assertSee('Your link does the work.');
        $response->assertSee('You collect the rewards.');
        $response->assertSee('Share once, in under a minute.');
        $response->assertSee('Invite your friend');
        $response->assertSee('They save big');
        $response->assertSee('You earn rewards');
        $response->assertSee('Friend joins Zoogol');
        $response->assertSee('Order placed');
        $response->assertSee('Saved ₹980');
        $response->assertSee('₹4,860');
        $response->assertSee('More friends.');
        $response->assertSee('More earnings.');
        $response->assertSee('Bigger lifestyle.');
        $response->assertSee('Invite more and earn more.');
    }

    /**
     * Test that the Categories Mega Dropdown renders correctly in navigation.
     */
    public function test_categories_dropdown_renders_correctly(): void
    {
        $response = $this->get(route('home'));

        $response->assertStatus(200);
        $response->assertSee('js-cat-dropdown-toggle');
        $response->assertSee('categories-dropdown-menu');
        $response->assertSee('SHOP');
        $response->assertSee('SERVICES');
        $response->assertSee('Fashion');
        $response->assertSee('Electronics');
        $response->assertSee('Groceries');
        $response->assertSee('Travel');
        $response->assertSee('Home &amp; Kitchen', false);
        $response->assertSee('Beauty');
        $response->assertSee('Baby &amp; Kids', false);
        $response->assertSee('Fine Dine');
        $response->assertSee('AC Service');
        $response->assertSee('Yoga');
        $response->assertSee('Advocate');
        $response->assertSee('Dry Cleaning');
        $response->assertSee('Insurance');
        $response->assertSee('Plumber');
        $response->assertSee('Tax Lawyer');
        $response->assertSee('Advertising');
        $response->assertSee('View all categories');
    }

    /**
     * Test that the updated navbar renders its three options and Discover Zoogol dropdown.
     */
    public function test_navbar_renders_updated_options_and_discover_dropdown(): void
    {
        $response = $this->get(route('home'));

        $response->assertStatus(200);
        $response->assertSee('Categories');
        $response->assertSee('Discover Zoogol');
        $response->assertSee('Refer &amp; Earn', false);
        $response->assertSee('js-discover-dropdown-toggle');
        $response->assertSee('discover-dropdown-menu');
        $response->assertSee('What is Zoogol?');
        $response->assertSee('What Zoogol is and how you save');
        $response->assertSee('How Zoogol works');
        $response->assertSee('From first search to first cashback');
        $response->assertSee(route('what-is-zoogol'), false);
        $response->assertSee(route('how-zoogol-works'), false);
        $response->assertSee(route('refer-and-earn'), false);

        $whatIsResponse = $this->get(route('what-is-zoogol'));
        $whatIsResponse->assertStatus(200);
        $whatIsResponse->assertSee('js-discover-dropdown-toggle active', false);
        $whatIsResponse->assertSee('discover-drop-item is-current', false);
    }

    /**
     * Test that the Privacy Policy page loads successfully.
     */
    public function test_privacy_policy_page_loads_successfully(): void
    {
        $response = $this->get(route('privacy-policy'));

        $response->assertStatus(200);
        $response->assertSee('Privacy Policy');
        $response->assertSee('TRUST & TRANSPARENCY', false);
        $response->assertSee('Table of Contents');
        $response->assertSee('Our Core Privacy Commitment');
        $response->assertSee('Information We Collect');
        $response->assertSee('How We Use Your Information');
        $response->assertSee('Affiliate Tracking & Merchant Cookies', false);
        $response->assertSee('Data Security & Storage', false);
        $response->assertSee('privacy@zoogol.in');
    }
}
