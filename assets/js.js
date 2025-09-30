// DOM Content Loaded
document.addEventListener('DOMContentLoaded', function() {
    console.log('DOM Content Loaded - Initializing...');
    // Initialize all functionality

    initSmoothScrolling();
    initNavbarScroll();
    initAnimations();
    initRollingStats();

    // Initialize Splide carousel
    setTimeout(() => {
        console.log('Initializing Splide carousel...');
        initSplideCarousel();
    }, 500);

    // Initialize Honours & Accolades slider
    setTimeout(() => {
        console.log('Initializing Honours & Accolades slider...');
        initHonoursSlider();
    }, 600);
});



// Smooth Scrolling for Navigation Links
function initSmoothScrolling() {
    const navLinks = document.querySelectorAll('a[href^="#"]');

    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();

            const targetId = this.getAttribute('href');
            const targetSection = document.querySelector(targetId);

            if (targetSection) {
                const offsetTop = targetSection.offsetTop - 80; // Account for fixed header

                window.scrollTo({
                    top: offsetTop,
                    behavior: 'smooth'
                });
            }
        });
    });
}

// Navbar Scroll Effect
function initNavbarScroll() {
    const navbar = document.querySelector('.navbar');
    const navLinks = document.querySelectorAll('.nav-link');

    // Update active nav link based on scroll position
    window.addEventListener('scroll', function() {
        const sections = document.querySelectorAll('section[id]');
        const scrollPosition = window.pageYOffset + 100;

        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.offsetHeight;
            const sectionId = section.getAttribute('id');

            if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
                navLinks.forEach(link => {
                    link.classList.remove('active');
                    if (link.getAttribute('href') === `#${sectionId}`) {
                        link.classList.add('active');
                    }
                });
            }
        });
    });
}

// Animation on Scroll
function initAnimations() {
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('fade-in-up');
            }
        });
    }, observerOptions);

    // Observe elements for animation
    const animatedElements = document.querySelectorAll('.stat-item, .rate-card, .accordion-item');
    animatedElements.forEach(el => {
        observer.observe(el);
    });
}

// Mobile Menu Toggle
function initMobileMenu() {
    const navbarToggler = document.querySelector('.navbar-toggler');
    const navbarCollapse = document.querySelector('.navbar-collapse');
    const mobileCloseBtn = document.querySelector('.mobile-close-btn');

    if (navbarToggler && navbarCollapse) {
        // Toggle menu with hamburger button
        navbarToggler.addEventListener('click', function() {
            const isExpanded = navbarCollapse.classList.contains('show');

            if (isExpanded) {
                navbarCollapse.classList.remove('show');
                navbarToggler.setAttribute('aria-expanded', 'false');
            } else {
                navbarCollapse.classList.add('show');
                navbarToggler.setAttribute('aria-expanded', 'true');
            }
        });

        // Close menu with close button
        if (mobileCloseBtn) {
            mobileCloseBtn.addEventListener('click', function() {
                navbarCollapse.classList.remove('show');
                navbarToggler.setAttribute('aria-expanded', 'false');
            });
        }

        // Close mobile menu when clicking on a link
        const navLinks = document.querySelectorAll('.nav-link');
        navLinks.forEach(link => {
            link.addEventListener('click', function() {
                navbarCollapse.classList.remove('show');
                navbarToggler.setAttribute('aria-expanded', 'false');
            });
        });

        // Close menu when clicking outside
        document.addEventListener('click', function(event) {
            const isClickInsideNav = navbarCollapse.contains(event.target) || navbarToggler.contains(event.target);

            if (!isClickInsideNav && navbarCollapse.classList.contains('show')) {
                navbarCollapse.classList.remove('show');
                navbarToggler.setAttribute('aria-expanded', 'false');
            }
        });

        // Close menu on escape key
        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape' && navbarCollapse.classList.contains('show')) {
                navbarCollapse.classList.remove('show');
                navbarToggler.setAttribute('aria-expanded', 'false');
            }
        });

        // Prevent body scroll when menu is open
        const observer = new MutationObserver(function(mutations) {
            mutations.forEach(function(mutation) {
                if (mutation.type === 'attributes' && mutation.attributeName === 'class') {
                    if (navbarCollapse.classList.contains('show')) {
                        document.body.style.overflow = 'hidden';
                    } else {
                        document.body.style.overflow = '';
                    }
                }
            });
        });

        observer.observe(navbarCollapse, {
            attributes: true,
            attributeFilter: ['class']
        });
    }
}

// Initialize mobile menu
initMobileMenu();

// Rolling Stats Functionality
function initRollingStats() {
    const statsContainer = document.querySelector('.rolling-stats-container');
    const statItems = document.querySelectorAll('.rolling-stat-item');
    const indicators = document.querySelectorAll('.rolling-indicator');

    if (!statsContainer || statItems.length === 0) {
        console.log('Rolling stats not found, skipping initialization');
        return;
    }

    let currentStatIndex = 0;
    const totalStats = statItems.length;

    console.log('Rolling stats initialized with', totalStats, 'items');

    // Update active stat
    function updateRollingStat() {
        // Remove active class from all items
        statItems.forEach(item => {
            item.classList.remove('active', 'exit');
        });
        indicators.forEach(indicator => {
            indicator.classList.remove('active');
        });

        // Add exit class to current item (slide out left)
        if (statItems[currentStatIndex]) {
            statItems[currentStatIndex].classList.add('exit');
        }

        // Move to next stat
        currentStatIndex = (currentStatIndex + 1) % totalStats;

        // After a short delay, show the new stat (slide in from right)
        setTimeout(() => {
            statItems[currentStatIndex].classList.add('active');
            indicators[currentStatIndex].classList.add('active');
            console.log('Rolling to stat:', currentStatIndex + 1, 'of', totalStats);
        }, 200);
    }

    // Auto-roll every 2.5 seconds (faster for better visibility)
    let rollingInterval = setInterval(updateRollingStat, 2500);

    // Click indicators to jump to specific stat
    indicators.forEach((indicator, index) => {
        indicator.addEventListener('click', () => {
            clearInterval(rollingInterval);

            // Remove active from all
            statItems.forEach(item => item.classList.remove('active', 'exit'));
            indicators.forEach(ind => ind.classList.remove('active'));

            // Add exit to current
            statItems[currentStatIndex].classList.add('exit');

            // Update index and show new stat
            currentStatIndex = index;
            setTimeout(() => {
                statItems[currentStatIndex].classList.add('active');
                indicators[currentStatIndex].classList.add('active');
            }, 200);

            // Restart auto-roll
            rollingInterval = setInterval(updateRollingStat, 2500);
        });
    });

    // Pause on hover
    statsContainer.addEventListener('mouseenter', () => {
        clearInterval(rollingInterval);
        console.log('Rolling stats paused');
    });

    statsContainer.addEventListener('mouseleave', () => {
        rollingInterval = setInterval(updateRollingStat, 2500);
        console.log('Rolling stats resumed');
    });

    console.log('Rolling stats auto-play started (2.5 second intervals)');
}

// Honours & Accolades Slider Initialization
function initHonoursSlider() {
    const honoursEl = document.querySelector('#honours-slider');

    if (!honoursEl) {
        return;
    }

    try {
        const honoursSplide = new Splide('#honours-slider', {
            type: 'loop',
            drag: true,
            perPage: 3,
            gap: '0px',
            autoplay: true,
            interval: 3500,
            pauseOnHover: true,
            pauseOnFocus: true,
            arrows: true,
            pagination: true,
            speed: 700,
            easing: 'cubic-bezier(0.22, 1, 0.36, 1)',
            keyboard: 'global',
            breakpoints: {
                1200: {
                    perPage: 3,
                    gap: '0px'
                },
                992: {
                    perPage: 1,
                    gap: '0px'
                },
                768: {
                    perPage: 1,
                    gap: '0px'
                }
            }
        });

        honoursSplide.mount();
        window.honoursSplide = honoursSplide;
    } catch (e) {
        console.error('Failed to initialize honours slider', e);
    }
}

// Splide Carousel Initialization (for main offerings carousel)
function initSplideCarousel() {
    const carouselElement = document.querySelector('#offerings-carousel');

    if (!carouselElement) {
        console.error('Splide carousel element not found');
        return;
    }

    console.log('Initializing Splide carousel...');

    try {
        // Initialize Splide with infinite scroll configuration
        const splide = new Splide('#offerings-carousel', {
            type: 'loop',
            drag: true,
            snap: true,
            perPage: 4,
            perMove: 1,
            gap: '10px',
            padding: '-8rem',
            focus: 'center',
            trimSpace: false,
            autoplay: true,
            interval: 3000,
            pauseOnHover: true,
            pauseOnFocus: true,
            resetProgress: false,
            arrows: true,
            pagination: false,
            speed: 700,
            easing: 'cubic-bezier(0.22, 1, 0.36, 1)',
            keyboard: 'global',
            wheel: false,

            breakpoints: {
                1200: {
                    perPage: 2,
                    padding: '5rem',
                    gap: '22px',
                },
                768: {
                    perPage: 1,
                    padding: '2.5rem',
                    gap: '16px',
                },
                480: {
                    perPage: 1,
                    padding: '1.25rem',
                    gap: '12px',
                }
            }
        });

        splide.mount();
        window.splideCarousel = splide;

    } catch (error) {
        console.error('Failed to mount Splide carousel:', error);
    }
}

// Performance Optimization
function optimizePerformance() {
    // Debounce scroll events
    let scrollTimeout;
    const originalScrollHandler = window.onscroll;

    window.onscroll = function() {
        if (scrollTimeout) {
            clearTimeout(scrollTimeout);
        }

        scrollTimeout = setTimeout(() => {
            if (originalScrollHandler) {
                originalScrollHandler();
            }
        }, 10);
    };
}

// Initialize performance optimizations
optimizePerformance();

// Error Handling
window.addEventListener('error', function(e) {
    console.error('JavaScript Error:', e.error);
    // In production, you might want to send this to an error tracking service
});