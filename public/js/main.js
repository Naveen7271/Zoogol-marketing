/**
 * Zoogol Interactive Logic
 */

document.addEventListener('DOMContentLoaded', () => {
  // Sticky Scrolled Navbar for Homepage
  const globalHeader = document.getElementById('global-header');
  if (globalHeader) {
    let ticking = false;
    const isHome = globalHeader.classList.contains('home-scrolled-header');
    const scrollThreshold = 90;

    const handleScroll = () => {
      const scrollY = window.pageYOffset || document.documentElement.scrollTop;
      if (isHome) {
        if (scrollY > scrollThreshold) {
          if (!globalHeader.classList.contains('scrolled-active')) {
            closeAllNavDropdowns();
          }
          globalHeader.classList.add('scrolled-active');
        } else {
          if (globalHeader.classList.contains('scrolled-active')) {
            closeAllNavDropdowns();
          }
          globalHeader.classList.remove('scrolled-active');
        }
      }
      ticking = false;
    };

    window.addEventListener('scroll', () => {
      if (!ticking) {
        window.requestAnimationFrame(handleScroll);
        ticking = true;
      }
    }, { passive: true });

    // Initial check on page load
    handleScroll();
  }

  // Navbar Dropdown Toggle Logic (Categories & Discover Zoogol)
  const catToggles = document.querySelectorAll('.js-cat-dropdown-toggle');
  const catDropdowns = document.querySelectorAll('.js-categories-dropdown');
  const discoverToggles = document.querySelectorAll('.js-discover-dropdown-toggle');
  const discoverDropdowns = document.querySelectorAll('.js-discover-dropdown');
  const catBackdrop = document.getElementById('cat-dropdown-backdrop');

  function closeAllNavDropdowns() {
    [...catDropdowns, ...discoverDropdowns].forEach(dropdown => {
      dropdown.classList.remove('is-open');
    });
    [...catToggles, ...discoverToggles].forEach(btn => {
      btn.classList.remove('is-active');
      btn.setAttribute('aria-expanded', 'false');
    });
    if (catBackdrop) {
      catBackdrop.classList.remove('is-open');
    }
    document.querySelectorAll('.hero-card-banner.has-dropdown-open').forEach(banner => {
      banner.classList.remove('has-dropdown-open');
    });
  }

  function bindDropdownGroup(toggles, fallbackSelector, useBackdrop) {
    toggles.forEach(toggleBtn => {
      toggleBtn.addEventListener('click', (e) => {
        e.preventDefault();
        e.stopPropagation();

        const targetId = toggleBtn.getAttribute('data-target');
        const targetDropdown = targetId
          ? document.getElementById(targetId)
          : toggleBtn.closest('.hero-navbar')?.querySelector(fallbackSelector);

        if (!targetDropdown) return;

        const isCurrentlyOpen = targetDropdown.classList.contains('is-open');

        // Close all open navbar dropdowns first
        closeAllNavDropdowns();

        // If it wasn't open, open it now
        if (!isCurrentlyOpen) {
          targetDropdown.classList.add('is-open');
          toggleBtn.classList.add('is-active');
          toggleBtn.setAttribute('aria-expanded', 'true');
          if (useBackdrop && catBackdrop) {
            catBackdrop.classList.add('is-open');
          }
          const heroBanner = toggleBtn.closest('.hero-card-banner');
          if (heroBanner) {
            heroBanner.classList.add('has-dropdown-open');
          }
        }
      });
    });
  }

  bindDropdownGroup(catToggles, '.js-categories-dropdown', true);
  bindDropdownGroup(discoverToggles, '.js-discover-dropdown', false);

  // Close when clicking on backdrop
  if (catBackdrop) {
    catBackdrop.addEventListener('click', () => {
      closeAllNavDropdowns();
    });
  }

  // Close when clicking outside of navbar & dropdowns
  document.addEventListener('click', (e) => {
    const clickedInsideDropdown =
      e.target.closest('.js-categories-dropdown') ||
      e.target.closest('.js-cat-dropdown-toggle') ||
      e.target.closest('.js-discover-dropdown') ||
      e.target.closest('.js-discover-dropdown-toggle');

    if (!clickedInsideDropdown) {
      closeAllNavDropdowns();
    }
  });

  // Close on Escape key press
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' || e.key === 'Esc') {
      closeAllNavDropdowns();
    }
  });

  // Close when clicking any link inside navbar dropdowns
  document.querySelectorAll('.js-categories-dropdown a, .js-discover-dropdown a').forEach(link => {
    link.addEventListener('click', () => {
      closeAllNavDropdowns();
    });
  });

  // Mobile Discover Submenu Toggle
  document.querySelectorAll('.js-mobile-discover-toggle').forEach(toggleBtn => {
    toggleBtn.addEventListener('click', () => {
      const targetId = toggleBtn.getAttribute('aria-controls');
      const subMenu = targetId ? document.getElementById(targetId) : null;
      if (!subMenu) return;

      const isOpen = subMenu.classList.toggle('is-open');
      subMenu.style.display = isOpen ? 'flex' : 'none';
      toggleBtn.classList.toggle('is-active', isOpen);
      toggleBtn.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
    });
  });

  // Mobile Nav Toggle (handles both static and sticky navbar instances)
  const mobileToggles = document.querySelectorAll('.js-mobile-toggle, #mobile-toggle');
  mobileToggles.forEach(toggleBtn => {
    toggleBtn.addEventListener('click', () => {
      const targetId = toggleBtn.getAttribute('data-target');
      const mobileNav = targetId
        ? document.getElementById(targetId)
        : (toggleBtn.closest('header, nav, .hero-card-banner')?.querySelector('.mobile-nav') || document.getElementById('mobile-nav'));

      if (mobileNav) {
        mobileNav.classList.toggle('open');
        const isOpen = mobileNav.classList.contains('open');
        mobileNav.style.display = isOpen ? 'block' : 'none';
        toggleBtn.setAttribute('aria-expanded', isOpen);
      }
    });
  });

  // Earnings Simulator
  const spendSlider = document.getElementById('spend-slider');
  const spendValDisplay = document.getElementById('spend-val');
  const refSlider = document.getElementById('ref-slider');
  const refValDisplay = document.getElementById('ref-val');

  const totalMonthlyDisplay = document.getElementById('total-monthly');
  const totalAnnualDisplay = document.getElementById('total-annual');
  const personalCashbackDisplay = document.getElementById('personal-cashback');
  const referralBonusDisplay = document.getElementById('referral-bonus');

  function calculateEarnings() {
    if (!spendSlider || !refSlider) return;

    const monthlySpend = parseFloat(spendSlider.value) || 0;
    const referrals = parseInt(refSlider.value, 10) || 0;

    // Avg personal cashback = 6.5% of spend
    const personalCashback = Math.round(monthlySpend * 0.065);

    // Avg referral bonus = Each referred friend spends ~70% of spend, yielding 1.8% bonus to user
    const avgFriendSpend = monthlySpend * 0.7;
    const referralCashback = Math.round(referrals * avgFriendSpend * 0.018);

    const totalMonthly = personalCashback + referralCashback;
    const totalAnnual = totalMonthly * 12;

    if (spendValDisplay) {
      spendValDisplay.textContent = '₹' + monthlySpend.toLocaleString('en-IN');
    }
    if (refValDisplay) {
      refValDisplay.textContent = referrals + (referrals === 1 ? ' friend' : ' friends');
    }
    if (personalCashbackDisplay) {
      personalCashbackDisplay.textContent = '₹' + personalCashback.toLocaleString('en-IN');
    }
    if (referralBonusDisplay) {
      referralBonusDisplay.textContent = '₹' + referralCashback.toLocaleString('en-IN');
    }
    if (totalMonthlyDisplay) {
      totalMonthlyDisplay.textContent = '₹' + totalMonthly.toLocaleString('en-IN');
    }
    if (totalAnnualDisplay) {
      totalAnnualDisplay.textContent = '₹' + totalAnnual.toLocaleString('en-IN');
    }
  }

  if (spendSlider && refSlider) {
    spendSlider.addEventListener('input', calculateEarnings);
    refSlider.addEventListener('input', calculateEarnings);
    calculateEarnings();
  }

  // FAQ Accordion
  const accordionHeaders = document.querySelectorAll('.accordion-header');
  accordionHeaders.forEach(header => {
    header.addEventListener('click', () => {
      const parent = header.closest('.accordion-item');
      if (!parent) return;

      const wasActive = parent.classList.contains('active');

      // Close all siblings in the same accordion
      const allItems = parent.parentElement.querySelectorAll('.accordion-item');
      allItems.forEach(item => item.classList.remove('active'));

      if (!wasActive) {
        parent.classList.add('active');
      }
    });
  });

  // Store Brand Filter
  const filterBtns = document.querySelectorAll('.brand-filter-btn');
  const brandCards = document.querySelectorAll('.brand-card[data-category]');

  filterBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      filterBtns.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');

      const category = btn.getAttribute('data-category');
      brandCards.forEach(card => {
        if (category === 'all' || card.getAttribute('data-category') === category) {
          card.style.display = 'flex';
        } else {
          card.style.display = 'none';
        }
      });
    });
  });

  // Signup Simulation Modal
  const signupForm = document.getElementById('signup-form');
  const modalOverlay = document.getElementById('signup-modal');
  const closeModalBtn = document.getElementById('close-modal-btn');

  if (signupForm && modalOverlay) {
    signupForm.addEventListener('submit', (e) => {
      e.preventDefault();
      const nameInput = document.getElementById('signup-name');
      const userName = nameInput && nameInput.value ? nameInput.value : 'Shopper';
      const welcomeName = document.getElementById('welcome-user-name');
      if (welcomeName) {
        welcomeName.textContent = userName;
      }
      modalOverlay.classList.add('open');
      signupForm.reset();
    });
  }

  if (closeModalBtn && modalOverlay) {
    closeModalBtn.addEventListener('click', () => {
      modalOverlay.classList.remove('open');
    });
  }

  if (modalOverlay) {
    modalOverlay.addEventListener('click', (e) => {
      if (e.target === modalOverlay) {
        modalOverlay.classList.remove('open');
      }
    });
  }
  // Category Carousel Arrows
  const catCarousel = document.getElementById('categories-carousel');
  const catPrevBtn = document.getElementById('cat-prev-btn');
  const catNextBtn = document.getElementById('cat-next-btn');

  if (catCarousel && catPrevBtn && catNextBtn) {
    catPrevBtn.addEventListener('click', () => {
      catCarousel.scrollBy({ left: -260, behavior: 'smooth' });
    });
    catNextBtn.addEventListener('click', () => {
      catCarousel.scrollBy({ left: 260, behavior: 'smooth' });
    });
  }

  // Brand Deals Carousel Arrows
  const brandCarousel = document.getElementById('brand-deals-carousel');
  const brandPrevBtn = document.getElementById('brand-prev-btn');
  const brandNextBtn = document.getElementById('brand-next-btn');

  if (brandCarousel && brandPrevBtn && brandNextBtn) {
    brandPrevBtn.addEventListener('click', () => {
      brandCarousel.scrollBy({ left: -360, behavior: 'smooth' });
    });
    brandNextBtn.addEventListener('click', () => {
      brandCarousel.scrollBy({ left: 360, behavior: 'smooth' });
    });
  }

  // Handpicked Brands Carousel Arrows
  const handpickedCarousel = document.getElementById('handpicked-carousel');
  const handpickedPrevBtn = document.getElementById('handpicked-prev-btn');
  const handpickedNextBtn = document.getElementById('handpicked-next-btn');

  if (handpickedCarousel && handpickedPrevBtn && handpickedNextBtn) {
    handpickedPrevBtn.addEventListener('click', () => {
      handpickedCarousel.scrollBy({ left: -360, behavior: 'smooth' });
    });
    handpickedNextBtn.addEventListener('click', () => {
      handpickedCarousel.scrollBy({ left: 360, behavior: 'smooth' });
    });
  }

  // Testimonial Carousel Interaction
  const testimonialPrevBtn = document.getElementById('testimonial-prev-btn');
  const testimonialNextBtn = document.getElementById('testimonial-next-btn');
  const testimonialQuote = document.getElementById('testimonial-quote');
  const testimonialAuthor = document.getElementById('testimonial-author');

  if (testimonialPrevBtn && testimonialNextBtn && testimonialQuote && testimonialAuthor) {
    const testimonials = [
      {
        quote: '\u201cZOOGOL is my go-to for dining out. I earned \u20b9850 cashback last month alone from just three visits to my favorite restaurant.\u201d',
        author: '-Sarah'
      },
      {
        quote: '\u201cI bought my new laptop through Zoogol and got \u20b93,200 deposited straight into my bank account. No coins, pure cash.\u201d',
        author: '-Rohan'
      },
      {
        quote: '\u201cReferring my friends gave me regular passive income every time they ordered clothes and groceries. Outstanding!\u201d',
        author: '-Priya'
      }
    ];
    let currentIndex = 0;

    function updateTestimonial(index) {
      testimonialQuote.style.transition = 'opacity 0.2s ease';
      testimonialAuthor.style.transition = 'opacity 0.2s ease';
      testimonialQuote.style.opacity = '0';
      testimonialAuthor.style.opacity = '0';
      setTimeout(() => {
        testimonialQuote.textContent = testimonials[index].quote;
        testimonialAuthor.textContent = testimonials[index].author;
        testimonialQuote.style.opacity = '1';
        testimonialAuthor.style.opacity = '1';
      }, 200);
    }

    testimonialPrevBtn.addEventListener('click', () => {
      currentIndex = (currentIndex - 1 + testimonials.length) % testimonials.length;
      updateTestimonial(currentIndex);
    });

    testimonialNextBtn.addEventListener('click', () => {
      currentIndex = (currentIndex + 1) % testimonials.length;
      updateTestimonial(currentIndex);
    });
  }
});
