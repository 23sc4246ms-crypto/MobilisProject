/**
 * Mobilis Car Rental Marketing Portal & Unified App Download Hub
 * Interactive Engine with Theme Switcher (Dark & Light Mode),
 * 3 Role Slides Carousel (Renter, Driver, Partner Host), Fleet Carousel,
 * Testimonials Carousel, Hero Quick-Finder, and 3-Way Estimator.
 */

document.addEventListener('DOMContentLoaded', () => {
    initThemeSwitcher();
    initRoleSlidesCarousel();
    initFleetCarousel();
    initCarCardCarousels();
    initCarGalleryModal();
    initTestimonialsCarousel();
    initCalculators();
    initModals();
    initFaqAccordion();
    initMobileNav();
    initDownloadHandlers();
    initHeroQuickFinder();
});

// ==========================================
// 1. THEME SWITCHER (LIGHT & DARK MODE)
// ==========================================
function initThemeSwitcher() {
    const themeBtn = document.getElementById('theme-toggle-btn');
    const themeIcon = document.getElementById('theme-toggle-icon');
    const themeText = document.getElementById('theme-toggle-text');

    const mobileThemeBtn = document.getElementById('mobile-theme-toggle-btn');
    const mobileThemeIcon = document.querySelector('.mobile-theme-icon');
    const mobileThemeText = document.querySelector('.mobile-theme-text');

    function updateThemeUI(isLight) {
        if (isLight) {
            document.documentElement.classList.add('light');
            document.documentElement.classList.remove('dark');
            if (themeIcon) themeIcon.textContent = '🌙';
            if (themeText) themeText.textContent = 'Dark Mode';
            if (mobileThemeIcon) mobileThemeIcon.textContent = '🌙';
            if (mobileThemeText) mobileThemeText.textContent = 'Dark Mode';
        } else {
            document.documentElement.classList.add('dark');
            document.documentElement.classList.remove('light');
            if (themeIcon) themeIcon.textContent = '☀️';
            if (themeText) themeText.textContent = 'Light Mode';
            if (mobileThemeIcon) mobileThemeIcon.textContent = '☀️';
            if (mobileThemeText) mobileThemeText.textContent = 'Light Mode';
        }
    }

    const currentTheme = localStorage.getItem('mobilis_theme') || 'dark';
    updateThemeUI(currentTheme === 'light');

    function toggleTheme() {
        const isCurrentlyLight = document.documentElement.classList.contains('light');
        const nextTheme = isCurrentlyLight ? 'dark' : 'light';
        localStorage.setItem('mobilis_theme', nextTheme);
        updateThemeUI(nextTheme === 'light');
    }

    if (themeBtn) themeBtn.addEventListener('click', toggleTheme);
    if (mobileThemeBtn) mobileThemeBtn.addEventListener('click', toggleTheme);
}

// ==========================================
// 2. ROLE INTERACTIVE SLIDES CAROUSEL (EXACTLY 3 ROLES)
// ==========================================
function initRoleSlidesCarousel() {
    const slides = document.querySelectorAll('[data-role-slide]');
    const tabs = document.querySelectorAll('[data-slide-tab]');
    const prevBtn = document.getElementById('role-slide-prev');
    const nextBtn = document.getElementById('role-slide-next');
    const dots = document.querySelectorAll('[data-slide-dot]');

    if (!slides.length) return;

    let currentIndex = 0;
    const totalSlides = slides.length;

    function showSlide(index, direction = 'next') {
        if (index < 0) index = totalSlides - 1;
        if (index >= totalSlides) index = 0;
        currentIndex = index;

        slides.forEach((slide, idx) => {
            if (idx === currentIndex) {
                slide.classList.remove('hidden');
                slide.classList.remove('animate-slideLeft', 'animate-slideRight');
                slide.classList.add(direction === 'next' ? 'animate-slideLeft' : 'animate-slideRight');
            } else {
                slide.classList.add('hidden');
            }
        });

        // Update Tabs
        tabs.forEach((tab, idx) => {
            if (idx === currentIndex) {
                tab.classList.add('bg-yellow-gold', 'text-navy-950', 'font-black', 'shadow-xl', 'glow-yellow-sm');
                tab.classList.remove('text-slate-300', 'hover:text-white', 'bg-transparent');
            } else {
                tab.classList.remove('bg-yellow-gold', 'text-navy-950', 'font-black', 'shadow-xl', 'glow-yellow-sm');
                tab.classList.add('text-slate-300', 'hover:text-white');
            }
        });

        // Update Dots
        dots.forEach((dot, idx) => {
            if (idx === currentIndex) {
                dot.classList.add('w-8', 'bg-yellow-gold');
                dot.classList.remove('w-2.5', 'bg-slate-700');
            } else {
                dot.classList.remove('w-8', 'bg-yellow-gold');
                dot.classList.add('w-2.5', 'bg-slate-700');
            }
        });
    }

    if (prevBtn) {
        prevBtn.addEventListener('click', () => showSlide(currentIndex - 1, 'prev'));
    }
    if (nextBtn) {
        nextBtn.addEventListener('click', () => showSlide(currentIndex + 1, 'next'));
    }

    tabs.forEach((tab, idx) => {
        tab.addEventListener('click', () => {
            const dir = idx > currentIndex ? 'next' : 'prev';
            showSlide(idx, dir);
        });
    });

    dots.forEach((dot, idx) => {
        dot.addEventListener('click', () => {
            const dir = idx > currentIndex ? 'next' : 'prev';
            showSlide(idx, dir);
        });
    });
}

// ==========================================
// 3. FLEET HORIZONTAL CAROUSEL & FILTERS
// ==========================================
function initFleetCarousel() {
    const track = document.getElementById('fleet-track');
    const prevBtn = document.getElementById('fleet-prev-btn');
    const nextBtn = document.getElementById('fleet-next-btn');
    const filterBtns = document.querySelectorAll('[data-fleet-filter]');
    const carCards = document.querySelectorAll('[data-car-category]');

    if (prevBtn && track) {
        prevBtn.addEventListener('click', () => {
            track.scrollBy({ left: -380, behavior: 'smooth' });
        });
    }

    if (nextBtn && track) {
        nextBtn.addEventListener('click', () => {
            track.scrollBy({ left: 380, behavior: 'smooth' });
        });
    }

    filterBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            const category = btn.getAttribute('data-fleet-filter');

            filterBtns.forEach(b => {
                if (b === btn) {
                    b.classList.add('bg-yellow-gold', 'text-navy-950', 'font-black', 'glow-yellow-sm');
                    b.classList.remove('bg-navy-800', 'text-slate-300');
                } else {
                    b.classList.remove('bg-yellow-gold', 'text-navy-950', 'font-black', 'glow-yellow-sm');
                    b.classList.add('bg-navy-800', 'text-slate-300');
                }
            });

            carCards.forEach(card => {
                const cardCat = card.getAttribute('data-car-category');
                if (category === 'all' || cardCat.toLowerCase() === category.toLowerCase()) {
                    card.style.display = 'flex';
                    card.classList.add('animate-fadeIn');
                } else {
                    card.style.display = 'none';
                    card.classList.remove('animate-fadeIn');
                }
            });

            if (track) track.scrollTo({ left: 0, behavior: 'smooth' });
        });
    });
}

// ==========================================
// 4. TESTIMONIALS SLIDER CAROUSEL
// ==========================================
function initTestimonialsCarousel() {
    const testimonialSlides = document.querySelectorAll('[data-testimonial-slide]');
    const prevBtn = document.getElementById('testimonial-prev');
    const nextBtn = document.getElementById('testimonial-next');
    const dots = document.querySelectorAll('[data-testimonial-dot]');

    if (!testimonialSlides.length) return;

    let currentIndex = 0;
    const total = testimonialSlides.length;

    function showTestimonial(index, direction = 'next') {
        if (index < 0) index = total - 1;
        if (index >= total) index = 0;
        currentIndex = index;

        testimonialSlides.forEach((slide, idx) => {
            if (idx === currentIndex) {
                slide.classList.remove('hidden');
                slide.classList.remove('animate-slideLeft', 'animate-slideRight');
                slide.classList.add(direction === 'next' ? 'animate-slideLeft' : 'animate-slideRight');
            } else {
                slide.classList.add('hidden');
            }
        });

        dots.forEach((dot, idx) => {
            if (idx === currentIndex) {
                dot.classList.add('w-8', 'bg-yellow-gold');
                dot.classList.remove('w-2.5', 'bg-slate-700');
            } else {
                dot.classList.remove('w-8', 'bg-yellow-gold');
                dot.classList.add('w-2.5', 'bg-slate-700');
            }
        });
    }

    if (prevBtn) {
        prevBtn.addEventListener('click', () => showTestimonial(currentIndex - 1, 'prev'));
    }
    if (nextBtn) {
        nextBtn.addEventListener('click', () => showTestimonial(currentIndex + 1, 'next'));
    }

    dots.forEach((dot, idx) => {
        dot.addEventListener('click', () => {
            const dir = idx > currentIndex ? 'next' : 'prev';
            showTestimonial(idx, dir);
        });
    });

    setInterval(() => {
        showTestimonial(currentIndex + 1, 'next');
    }, 7000);
}

// ==========================================
// 5. HERO QUICK-FINDER BAR
// ==========================================
function initHeroQuickFinder() {
    const searchBtn = document.getElementById('hero-quick-search-btn');
    if (searchBtn) {
        searchBtn.addEventListener('click', (e) => {
            e.preventDefault();
            openModal('app-download-notice-modal');
        });
    }
}

// ==========================================
// 6. LIVE 3-WAY ESTIMATOR CALCULATOR
// ==========================================
function initCalculators() {
    // Top 3-Way Tabs
    const calcTabs = document.querySelectorAll('[data-calc-tab]');
    const calcViews = document.querySelectorAll('[data-calc-view]');

    calcTabs.forEach(tab => {
        tab.addEventListener('click', () => {
            const viewTarget = tab.getAttribute('data-calc-tab');
            calcTabs.forEach(t => {
                const active = t.getAttribute('data-calc-tab') === viewTarget;
                if (active) {
                    t.classList.add('bg-yellow-gold', 'text-navy-950', 'font-black', 'shadow-md');
                    t.classList.remove('text-slate-400', 'hover:text-white');
                } else {
                    t.classList.remove('bg-yellow-gold', 'text-navy-950', 'font-black', 'shadow-md');
                    t.classList.add('text-slate-400', 'hover:text-white');
                }
            });

            calcViews.forEach(v => {
                if (v.getAttribute('data-calc-view') === viewTarget) {
                    v.classList.remove('hidden');
                } else {
                    v.classList.add('hidden');
                }
            });
        });
    });

    // 1. RENTER CALCULATOR (HOURLY & DAILY)
    const renterModeTabs = document.querySelectorAll('[data-renter-mode-tab]');
    let renterRentalType = 'daily';

    const renterCarSelect = document.getElementById('calc-renter-car');
    const renterDurationRange = document.getElementById('calc-renter-duration');
    const renterDurationVal = document.getElementById('calc-renter-duration-val');
    const renterDurationLabel = document.getElementById('calc-renter-duration-label');
    const renterDriverToggle = document.getElementById('calc-renter-driver');
    const renterDriverFeeText = document.getElementById('calc-renter-driver-fee-text');
    const renterTotalEl = document.getElementById('calc-renter-total');
    const renterSubrateEl = document.getElementById('calc-renter-subrate');
    const renterDiscountEl = document.getElementById('calc-renter-discount');
    const renterTicksEl = document.getElementById('calc-renter-ticks');

    renterModeTabs.forEach(tab => {
        tab.addEventListener('click', () => {
            renterRentalType = tab.getAttribute('data-renter-mode-tab');
            renterModeTabs.forEach(t => {
                const active = t.getAttribute('data-renter-mode-tab') === renterRentalType;
                if (active) {
                    t.classList.add('bg-yellow-gold', 'text-navy-950', 'font-black');
                    t.classList.remove('text-slate-400', 'hover:text-white');
                } else {
                    t.classList.remove('bg-yellow-gold', 'text-navy-950', 'font-black');
                    t.classList.add('text-slate-400', 'hover:text-white');
                }
            });

            if (renterRentalType === 'hourly') {
                if (renterDurationRange) {
                    renterDurationRange.min = 1;
                    renterDurationRange.max = 24;
                    renterDurationRange.value = 4;
                }
                if (renterDurationLabel) {
                    renterDurationLabel.textContent = 'RENTAL DURATION (HOURS):';
                }
                if (renterDriverFeeText) {
                    renterDriverFeeText.textContent = 'Chauffeur fee: +₱150 per hour';
                }
                if (renterTicksEl) {
                    renterTicksEl.innerHTML = '<span>1 hr</span><span>4 hrs (Half-day)</span><span>12 hrs</span><span>24 hrs</span>';
                }
            } else {
                if (renterDurationRange) {
                    renterDurationRange.min = 1;
                    renterDurationRange.max = 30;
                    renterDurationRange.value = 3;
                }
                if (renterDurationLabel) {
                    renterDurationLabel.textContent = 'RENTAL DURATION (DAYS):';
                }
                if (renterDriverFeeText) {
                    renterDriverFeeText.textContent = 'Chauffeur fee: +₱800 per day';
                }
                if (renterTicksEl) {
                    renterTicksEl.innerHTML = '<span>1 day</span><span>7 days (15% off)</span><span>14+ days (20% off)</span><span>30 days</span>';
                }
            }
            updateRenterCalc();
        });
    });

    function updateRenterCalc() {
        if (!renterCarSelect || !renterDurationRange) return;

        const selectedOption = renterCarSelect.options[renterCarSelect.selectedIndex];
        const dailyRate = parseInt(selectedOption.getAttribute('data-daily'), 10) || 1800;
        const hourlyRate = parseInt(selectedOption.getAttribute('data-hourly'), 10) || 180;
        const duration = parseInt(renterDurationRange.value, 10) || 1;
        const withDriver = renterDriverToggle && renterDriverToggle.checked;

        if (renterRentalType === 'hourly') {
            const driverHourlyFee = withDriver ? 150 : 0;
            const subtotal = (hourlyRate + driverHourlyFee) * duration;

            if (renterDurationVal) {
                renterDurationVal.textContent = `${duration} ${duration > 1 ? 'Hours' : 'Hour'}`;
            }

            if (renterTotalEl) renterTotalEl.textContent = '₱' + Math.round(subtotal).toLocaleString();
            if (renterSubrateEl) renterSubrateEl.textContent = '₱' + hourlyRate.toLocaleString() + ' / hour';
            if (renterDiscountEl) {
                renterDiscountEl.textContent = 'Flexible per-hour booking via Mobilis App!';
            }
        } else {
            const driverDailyFee = withDriver ? 800 : 0;
            let discountPercent = 0;
            if (duration >= 14) discountPercent = 0.20;
            else if (duration >= 7) discountPercent = 0.15;
            else if (duration >= 3) discountPercent = 0.08;

            const subtotal = (dailyRate + driverDailyFee) * duration;
            const discountAmount = subtotal * discountPercent;
            const finalTotal = subtotal - discountAmount;
            const effectiveDaily = finalTotal / duration;

            if (renterDurationVal) {
                renterDurationVal.textContent = `${duration} ${duration > 1 ? 'Days' : 'Day'}`;
            }

            if (renterTotalEl) renterTotalEl.textContent = '₱' + Math.round(finalTotal).toLocaleString();
            if (renterSubrateEl) renterSubrateEl.textContent = '₱' + Math.round(effectiveDaily).toLocaleString() + ' / day';
            if (renterDiscountEl) {
                if (discountPercent > 0) {
                    renterDiscountEl.textContent = `Save ₱${Math.round(discountAmount).toLocaleString()} (${discountPercent * 100}% Discount)`;
                } else {
                    renterDiscountEl.textContent = 'Save up to 20% on rentals 7+ days in the app!';
                }
            }
        }
    }

    if (renterCarSelect) renterCarSelect.addEventListener('change', updateRenterCalc);
    if (renterDurationRange) renterDurationRange.addEventListener('input', updateRenterCalc);
    if (renterDriverToggle) renterDriverToggle.addEventListener('change', updateRenterCalc);
    updateRenterCalc();

    // 2. DRIVER SALARY ESTIMATOR
    const driverHoursRange = document.getElementById('calc-driver-hours');
    const driverHoursVal = document.getElementById('calc-driver-hours-val');
    const driverDaysRange = document.getElementById('calc-driver-days');
    const driverDaysVal = document.getElementById('calc-driver-days-val');
    const driverTripTypeSelect = document.getElementById('calc-driver-trip-type');

    const driverDailySalaryEl = document.getElementById('calc-driver-daily-salary');
    const driverMonthlySalaryEl = document.getElementById('calc-driver-monthly-salary');
    const driverAnnualSalaryEl = document.getElementById('calc-driver-annual-salary');

    function updateDriverCalc() {
        if (!driverHoursRange || !driverDaysRange) return;

        const hoursPerDay = parseInt(driverHoursRange.value, 10) || 8;
        const daysPerMonth = parseInt(driverDaysRange.value, 10) || 22;
        const tripRateTier = parseInt(driverTripTypeSelect ? driverTripTypeSelect.value : 250, 10) || 250;

        if (driverHoursVal) {
            driverHoursVal.textContent = `${hoursPerDay} Hours / Day`;
        }

        if (driverDaysVal) {
            driverDaysVal.textContent = `${daysPerMonth} Days / Month`;
        }

        const dailyBase = hoursPerDay * tripRateTier;
        const dailyTipsBonus = Math.round(hoursPerDay * 40);
        const totalDaily = dailyBase + dailyTipsBonus;
        const monthlyTotal = totalDaily * daysPerMonth;
        const annualTotal = monthlyTotal * 12;

        if (driverDailySalaryEl) driverDailySalaryEl.textContent = '₱' + Math.round(totalDaily).toLocaleString() + ' / day';
        if (driverMonthlySalaryEl) driverMonthlySalaryEl.textContent = '₱' + Math.round(monthlyTotal).toLocaleString();
        if (driverAnnualSalaryEl) {
            driverAnnualSalaryEl.textContent = '₱' + Math.round(annualTotal).toLocaleString() + ' / year';
        }
    }

    if (driverHoursRange) driverHoursRange.addEventListener('input', updateDriverCalc);
    if (driverDaysRange) driverDaysRange.addEventListener('input', updateDriverCalc);
    if (driverTripTypeSelect) driverTripTypeSelect.addEventListener('change', updateDriverCalc);
    updateDriverCalc();

    // 3. PARTNER HOST ESTIMATOR
    const hostCarSelect = document.getElementById('calc-host-car');
    const hostDaysRange = document.getElementById('calc-host-days');
    const hostDaysVal = document.getElementById('calc-host-days-val');
    const hostEarningsEl = document.getElementById('calc-host-earnings');
    const hostAnnualEl = document.getElementById('calc-host-annual');

    function updateHostCalc() {
        if (!hostCarSelect || !hostDaysRange) return;

        const baseDailyRate = parseInt(hostCarSelect.value, 10) || 2000;
        const bookedDays = parseInt(hostDaysRange.value, 10) || 18;

        if (hostDaysVal) {
            hostDaysVal.textContent = `${bookedDays} Days / Month (${Math.round((bookedDays / 30) * 100)}% Utilization)`;
        }

        const gross = baseDailyRate * bookedDays;
        const netMonthly = gross * 0.75;
        const annualEstimate = netMonthly * 12;

        if (hostEarningsEl) hostEarningsEl.textContent = '₱' + Math.round(netMonthly).toLocaleString();
        if (hostAnnualEl) {
            hostAnnualEl.textContent = '₱' + Math.round(annualEstimate).toLocaleString() + ' / year (est.)';
        }
    }

    if (hostCarSelect) hostCarSelect.addEventListener('change', updateHostCalc);
    if (hostDaysRange) hostDaysRange.addEventListener('input', updateHostCalc);
    updateHostCalc();
}

// ==========================================
// 7. MODALS
// ==========================================
function initModals() {
    document.querySelectorAll('[data-open-modal]').forEach(trigger => {
        trigger.addEventListener('click', (e) => {
            e.preventDefault();
            const modalId = trigger.getAttribute('data-open-modal');
            openModal(modalId);
        });
    });

    document.querySelectorAll('[data-close-modal]').forEach(btn => {
        btn.addEventListener('click', () => {
            const modal = btn.closest('.mobilis-modal');
            if (modal) closeModal(modal.id);
        });
    });

    document.querySelectorAll('.mobilis-modal').forEach(modal => {
        modal.addEventListener('click', (e) => {
            if (e.target === modal) {
                closeModal(modal.id);
            }
        });
    });

    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') {
            document.querySelectorAll('.mobilis-modal:not(.hidden)').forEach(modal => {
                closeModal(modal.id);
            });
        }
    });
}

function openModal(modalId) {
    const modal = document.getElementById(modalId);
    if (!modal) return;

    modal.classList.remove('hidden');
    document.body.style.overflow = 'hidden';
}

function closeModal(modalId) {
    const modal = document.getElementById(modalId);
    if (!modal) return;

    modal.classList.add('hidden');
    document.body.style.overflow = '';
}

// ==========================================
// 8. FAQ ACCORDION
// ==========================================
function initFaqAccordion() {
    const faqItems = document.querySelectorAll('.faq-item');
    faqItems.forEach(item => {
        const header = item.querySelector('.faq-header');
        const content = item.querySelector('.faq-content');
        const icon = item.querySelector('.faq-icon');

        if (header && content) {
            header.addEventListener('click', () => {
                const isOpen = !content.classList.contains('hidden');
                faqItems.forEach(other => {
                    const otherContent = other.querySelector('.faq-content');
                    const otherIcon = other.querySelector('.faq-icon');
                    if (otherContent) otherContent.classList.add('hidden');
                    if (otherIcon) otherIcon.style.transform = 'rotate(0deg)';
                });

                if (!isOpen) {
                    content.classList.remove('hidden');
                    if (icon) icon.style.transform = 'rotate(180deg)';
                }
            });
        }
    });

    const faqFilters = document.querySelectorAll('[data-faq-filter]');
    faqFilters.forEach(btn => {
        btn.addEventListener('click', () => {
            const filter = btn.getAttribute('data-faq-filter');
            faqFilters.forEach(b => {
                if (b === btn) {
                    b.classList.add('bg-yellow-gold', 'text-navy-950', 'font-black');
                    b.classList.remove('bg-navy-800', 'text-slate-300');
                } else {
                    b.classList.remove('bg-yellow-gold', 'text-navy-950', 'font-black');
                    b.classList.add('bg-navy-800', 'text-slate-300');
                }
            });

            faqItems.forEach(item => {
                const cat = item.getAttribute('data-faq-cat');
                if (filter === 'all' || cat === filter) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });
}

// ==========================================
// 9. MOBILE NAVIGATION
// ==========================================
function initMobileNav() {
    const toggleBtn = document.getElementById('mobile-nav-toggle');
    const closeBtn = document.getElementById('mobile-nav-close');
    const menu = document.getElementById('mobile-menu');
    const links = document.querySelectorAll('.mobile-nav-link');

    if (toggleBtn && menu) {
        toggleBtn.addEventListener('click', () => {
            menu.classList.remove('translate-x-full');
            document.body.style.overflow = 'hidden';
        });
    }

    if (closeBtn && menu) {
        closeBtn.addEventListener('click', () => {
            menu.classList.add('translate-x-full');
            document.body.style.overflow = '';
        });
    }

    links.forEach(link => {
        link.addEventListener('click', () => {
            if (menu) {
                menu.classList.add('translate-x-full');
                document.body.style.overflow = '';
            }
        });
    });
}

// ==========================================
// 10. UNIFIED APP DOWNLOAD HANDLER
// ==========================================
function initDownloadHandlers() {
    const downloadBtns = document.querySelectorAll('[data-direct-download]');
    downloadBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            showDownloadProgressToast();
        });
    });
}

function showDownloadProgressToast() {
    const appName = 'Mobilis All-In-One App (APK)';

    let toast = document.getElementById('download-toast');
    if (!toast) {
        toast = document.createElement('div');
        toast.id = 'download-toast';
        toast.className = 'fixed bottom-6 right-6 z-50 max-w-sm w-full glass-card p-5 rounded-3xl shadow-2xl border border-yellow-gold/40 glow-yellow-sm transition-all duration-500 transform translate-y-20 opacity-0';
        document.body.appendChild(toast);
    }

    toast.innerHTML = `
        <div class="flex items-start gap-4">
            <div class="w-12 h-12 rounded-2xl bg-yellow-gold text-navy-950 flex items-center justify-center font-bold text-xl flex-shrink-0 animate-pulse">
                ↓
            </div>
            <div class="flex-1 min-w-0">
                <h4 class="text-sm font-bold text-white mb-1">Downloading ${appName}...</h4>
                <p class="text-xs text-slate-300 mb-3">Hourly & Daily car rental experience.</p>
                <div class="w-full bg-navy-950 rounded-full h-2 overflow-hidden border border-white/10">
                    <div id="toast-progress-bar" class="bg-yellow-gold h-2 rounded-full transition-all duration-300" style="width: 15%"></div>
                </div>
            </div>
        </div>
    `;

    setTimeout(() => {
        toast.classList.remove('translate-y-20', 'opacity-0');
    }, 50);

    const bar = document.getElementById('toast-progress-bar');
    let progress = 15;
    const interval = setInterval(() => {
        progress += Math.floor(Math.random() * 25) + 15;
        if (progress >= 100) {
            progress = 100;
            clearInterval(interval);
            if (bar) bar.style.width = '100%';
            
            window.location.href = '/download';

            setTimeout(() => {
                toast.innerHTML = `
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-2xl bg-emerald-500 text-navy-950 flex items-center justify-center font-bold text-xl flex-shrink-0">
                            ✓
                        </div>
                        <div class="flex-1">
                            <h4 class="text-sm font-bold text-white">Download Complete!</h4>
                            <p class="text-xs text-slate-300">Open the Mobilis APK file in your Downloads folder to install.</p>
                        </div>
                    </div>
                `;

                setTimeout(() => {
                    toast.classList.add('translate-y-20', 'opacity-0');
                }, 5000);
            }, 600);
        } else {
            if (bar) bar.style.width = progress + '%';
        }
    }, 250);
}

// ==========================================
// 11. CAR CARD INTERACTIVE IMAGE CAROUSELS
// ==========================================
function initCarCardCarousels() {
    const carousels = document.querySelectorAll('[data-car-carousel]');

    carousels.forEach(carousel => {
        const slides = carousel.querySelectorAll('[data-car-slide]');
        const prevBtn = carousel.querySelector('[data-car-carousel-prev]');
        const nextBtn = carousel.querySelector('[data-car-carousel-next]');
        const dots = carousel.querySelectorAll('[data-car-dot]');
        const counter = carousel.querySelector('[data-car-counter]');

        if (slides.length <= 1) return;

        let currentIndex = 0;
        const total = slides.length;

        function updateSlide(newIndex) {
            if (newIndex < 0) newIndex = total - 1;
            if (newIndex >= total) newIndex = 0;
            currentIndex = newIndex;

            slides.forEach((slide, idx) => {
                if (idx === currentIndex) {
                    slide.classList.remove('opacity-0', 'pointer-events-none', 'z-0');
                    slide.classList.add('opacity-100', 'z-10');
                } else {
                    slide.classList.remove('opacity-100', 'z-10');
                    slide.classList.add('opacity-0', 'pointer-events-none', 'z-0');
                }
            });

            dots.forEach((dot, idx) => {
                if (idx === currentIndex) {
                    dot.classList.add('w-4', 'bg-yellow-gold');
                    dot.classList.remove('w-1.5', 'bg-white/50');
                } else {
                    dot.classList.remove('w-4', 'bg-yellow-gold');
                    dot.classList.add('w-1.5', 'bg-white/50');
                }
            });

            if (counter) {
                counter.textContent = `${currentIndex + 1}/${total}`;
            }
        }

        if (prevBtn) {
            prevBtn.addEventListener('click', (e) => {
                e.preventDefault();
                e.stopPropagation();
                updateSlide(currentIndex - 1);
            });
        }

        if (nextBtn) {
            nextBtn.addEventListener('click', (e) => {
                e.preventDefault();
                e.stopPropagation();
                updateSlide(currentIndex + 1);
            });
        }

        dots.forEach((dot, idx) => {
            dot.addEventListener('click', (e) => {
                e.preventDefault();
                e.stopPropagation();
                updateSlide(idx);
            });
        });

        // Touch Swipe Support
        let startX = 0;
        carousel.addEventListener('touchstart', (e) => {
            startX = e.touches[0].clientX;
        }, { passive: true });

        carousel.addEventListener('touchend', (e) => {
            const diffX = e.changedTouches[0].clientX - startX;
            if (Math.abs(diffX) > 40) {
                if (diffX < 0) {
                    updateSlide(currentIndex + 1);
                } else {
                    updateSlide(currentIndex - 1);
                }
            }
        }, { passive: true });
    });
}

// ==========================================
// 12. CAR PHOTO GALLERY LIGHTBOX MODAL
// ==========================================
function initCarGalleryModal() {
    const galleryTriggers = document.querySelectorAll('[data-open-gallery]');
    const modal = document.getElementById('car-gallery-modal');
    if (!modal) return;

    const modalTitle = document.getElementById('gallery-modal-title');
    const modalBadge = document.getElementById('gallery-modal-badge');
    const mainImg = document.getElementById('gallery-modal-main-img');
    const prevBtn = document.getElementById('gallery-modal-prev');
    const nextBtn = document.getElementById('gallery-modal-next');
    const counterEl = document.getElementById('gallery-modal-counter');
    const thumbsContainer = document.getElementById('gallery-modal-thumbnails');
    const seatsEl = document.getElementById('gallery-modal-seats');
    const transEl = document.getElementById('gallery-modal-trans');
    const fuelEl = document.getElementById('gallery-modal-fuel');
    const rateEl = document.getElementById('gallery-modal-rate');

    let currentImages = [];
    let activeIndex = 0;

    function renderGallerySlide(index) {
        if (!currentImages.length) return;
        if (index < 0) index = currentImages.length - 1;
        if (index >= currentImages.length) index = 0;
        activeIndex = index;

        if (mainImg) {
            mainImg.src = currentImages[activeIndex];
        }

        if (counterEl) {
            counterEl.textContent = `${activeIndex + 1} / ${currentImages.length}`;
        }

        if (thumbsContainer) {
            const thumbBtns = thumbsContainer.querySelectorAll('button');
            thumbBtns.forEach((btn, idx) => {
                if (idx === activeIndex) {
                    btn.classList.add('border-yellow-gold', 'ring-2', 'ring-yellow-gold/50');
                    btn.classList.remove('border-white/10', 'opacity-60');
                } else {
                    btn.classList.remove('border-yellow-gold', 'ring-2', 'ring-yellow-gold/50');
                    btn.classList.add('border-white/10', 'opacity-60');
                }
            });
        }
    }

    galleryTriggers.forEach(trigger => {
        trigger.addEventListener('click', (e) => {
            const card = trigger.closest('[data-car-card-id]');
            if (!card) return;

            const carName = card.querySelector('h3')?.textContent.trim() || 'Mobilis Fleet Vehicle';
            const carCategory = card.querySelector('.uppercase')?.textContent.trim() || 'Sedan';
            const imgElements = card.querySelectorAll('[data-car-slide] img');
            const specItems = card.querySelectorAll('.border-y > div');

            currentImages = Array.from(imgElements).map(img => img.src);
            if (!currentImages.length) return;

            if (modalTitle) modalTitle.textContent = carName;
            if (modalBadge) modalBadge.textContent = carCategory;

            // Extract specs
            if (specItems.length >= 3) {
                if (seatsEl) seatsEl.textContent = '👥 ' + specItems[0]?.textContent.trim();
                if (transEl) transEl.textContent = '⚙️ ' + specItems[1]?.textContent.trim();
                if (fuelEl) fuelEl.textContent = '⛽ ' + specItems[2]?.textContent.trim();
            }

            // Extract pricing
            const hourly = card.querySelector('.font-display')?.textContent.trim();
            const daily = card.querySelectorAll('.font-display')[1]?.textContent.trim();
            if (rateEl && hourly && daily) {
                rateEl.textContent = `${hourly}/hr • ${daily}/day`;
            }

            // Build Thumbnails
            if (thumbsContainer) {
                thumbsContainer.innerHTML = '';
                currentImages.forEach((imgUrl, idx) => {
                    const thumbBtn = document.createElement('button');
                    thumbBtn.type = 'button';
                    thumbBtn.className = `w-16 h-12 rounded-xl overflow-hidden border-2 transition-all flex-shrink-0 ${idx === 0 ? 'border-yellow-gold ring-2 ring-yellow-gold/50' : 'border-white/10 opacity-60 hover:opacity-100'}`;
                    thumbBtn.innerHTML = `<img src="${imgUrl}" class="w-full h-full object-cover">`;
                    thumbBtn.addEventListener('click', () => renderGallerySlide(idx));
                    thumbsContainer.appendChild(thumbBtn);
                });
            }

            renderGallerySlide(0);
            openModal('car-gallery-modal');
        });
    });

    if (prevBtn) {
        prevBtn.addEventListener('click', () => renderGallerySlide(activeIndex - 1));
    }
    if (nextBtn) {
        nextBtn.addEventListener('click', () => renderGallerySlide(activeIndex + 1));
    }
}
