// DOM Content Loaded
document.addEventListener('DOMContentLoaded', function() {
    console.log('DOM Content Loaded - Initializing...');
    // Initialize all functionality
    initScrollEffects();
    initSmoothScrolling();
    initDownloadButtons();
    initAccordion();
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

// Scroll Effects
function initScrollEffects() {
    const fixedDownload = document.querySelector('.fixed-download');

    window.addEventListener('scroll', function() {
        const scrollPosition = window.pageYOffset;

        // Show/hide fixed download button
        if (scrollPosition > 500) {
            fixedDownload.classList.add('show');
        } else {
            fixedDownload.classList.remove('show');
        }

        // Add scroll effect to navbar
        const navbar = document.querySelector('.header');
        if (scrollPosition > 100) {
            navbar.style.background = 'rgba(255, 255, 255, 0.98)';
            navbar.style.boxShadow = '0 2px 20px rgba(0, 0, 0, 0.1)';
        } else {
            navbar.style.background = 'rgba(255, 255, 255, 0.95)';
            navbar.style.boxShadow = '0 2px 10px rgba(0, 0, 0, 0.05)';
        }
    });
}

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

// Download Button Functionality
function initDownloadButtons() {
    const downloadButtons = document.querySelectorAll('.download-btn');

    downloadButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Simulate download action
            showNotification('Download started! Please check your downloads folder.', 'success');

            // In a real application, this would trigger the actual download
            // For demo purposes, we'll just show a notification
        });
    });
}

// Social Media Button Functionality
function initSocialButtons() {
    const whatsappBtn = document.querySelector('a[href*="whatsapp"]');
    const telegramBtn = document.querySelector('a[href*="telegram"]');

    if (whatsappBtn) {
        whatsappBtn.addEventListener('click', function(e) {
            e.preventDefault();
            // Open WhatsApp in new tab
            window.open('https://wa.me/918502875679', '_blank');
        });
    }

    if (telegramBtn) {
        telegramBtn.addEventListener('click', function(e) {
            e.preventDefault();
            // Open Telegram in new tab
            window.open('https://t.me/mama567matka', '_blank');
        });
    }
}

// Accordion Functionality
function initAccordion() {
    const accordionButtons = document.querySelectorAll('.accordion-button');

    accordionButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Remove active class from all buttons
            accordionButtons.forEach(btn => {
                btn.classList.remove('active');
            });

            // Add active class to clicked button
            this.classList.add('active');
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

// Notification System
function showNotification(message, type = 'info') {
    // Create notification element
    const notification = document.createElement('div');
    notification.className = `notification notification-${type}`;
    notification.innerHTML = `
        <div class="notification-content">
            <i class="fas fa-${type === 'success' ? 'check-circle' : 'info-circle'}"></i>
            <span>${message}</span>
        </div>
    `;

    // Add styles
    notification.style.cssText = `
        position: fixed;
        top: 20px;
        right: 20px;
        background: ${type === 'success' ? '#28a745' : '#007bff'};
        color: white;
        padding: 1rem 1.5rem;
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        z-index: 9999;
        transform: translateX(100%);
        transition: transform 0.3s ease;
        max-width: 300px;
    `;

    // Add to DOM
    document.body.appendChild(notification);

    // Animate in
    setTimeout(() => {
        notification.style.transform = 'translateX(0)';
    }, 100);

    // Remove after 3 seconds
    setTimeout(() => {
        notification.style.transform = 'translateX(100%)';
        setTimeout(() => {
            if (notification.parentNode) {
                notification.parentNode.removeChild(notification);
            }
        }, 300);
    }, 3000);
}

// Game Rate Tab Functionality
function initGameTabs() {
    const tabButtons = document.querySelectorAll('[data-bs-toggle="pill"]');

    tabButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Remove active class from all tabs
            tabButtons.forEach(btn => {
                btn.classList.remove('active');
            });

            // Add active class to clicked tab
            this.classList.add('active');
        });
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

// Rate Card Hover Effects
function initRateCardEffects() {
    const rateCards = document.querySelectorAll('.rate-card');

    rateCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-5px) scale(1.02)';
            this.style.boxShadow = '0 8px 25px rgba(4, 29, 82, 0.15)';
        });

        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0) scale(1)';
            this.style.boxShadow = '0 2px 4px rgba(0, 0, 0, 0.1)';
        });
    });
}

// Initialize rate card effects
initRateCardEffects();

// Lazy Loading for Images
function initLazyLoading() {
    const images = document.querySelectorAll('img[data-src]');

    const imageObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.src = img.dataset.src;
                img.classList.remove('lazy');
                imageObserver.unobserve(img);
            }
        });
    });

    images.forEach(img => imageObserver.observe(img));
}

// Initialize lazy loading
initLazyLoading();

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

// Splide Carousel Initialization
function initSplideCarousel() {
    const carouselElement = document.querySelector('#offerings-carousel');

    if (!carouselElement) {
        console.error('Splide carousel element not found');
        return;
    }

    console.log('Initializing Splide carousel...');

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
        },

        classes: {
            arrow: 'splide__arrow custom-arrow',
            prev: 'splide__arrow--prev custom-prev',
            next: 'splide__arrow--next custom-next',
            pagination: 'splide__pagination custom-pagination',
            page: 'splide__pagination__page custom-page',
        }
    });

    // Mount the carousel
    try {
        splide.mount();
        console.log('Splide carousel mounted successfully');

        // Add success indicator
        const successIndicator = document.createElement('div');
        successIndicator.innerHTML = '<i class="fas fa-check-circle"></i> Splide Carousel Active';
        successIndicator.style.cssText = `
            position: absolute;
            top: 20px;
            right: 20px;
            background: rgba(0, 255, 127, 0.1);
            color: rgba(0, 255, 127, 0.9);
            padding: 0.5rem 1rem;
            border-radius: 20px;
            font-size: 0.8rem;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(0, 255, 127, 0.3);
            z-index: 10;
            box-shadow: 0 4px 12px rgba(0, 255, 127, 0.2);
        `;

        const section = document.querySelector('.offerings-carousel-section .container-fluid');
        if (section) {
            section.style.position = 'relative';
            section.appendChild(successIndicator);

            // Hide indicator after 4 seconds
            setTimeout(() => {
                successIndicator.style.opacity = '0';
                successIndicator.style.transition = 'opacity 0.5s ease';
                setTimeout(() => {
                    if (successIndicator.parentNode) {
                        successIndicator.parentNode.removeChild(successIndicator);
                    }
                }, 500);
            }, 4000);
        }

        // Event listeners for debugging
        splide.on('moved', function(newIndex, prevIndex) {
            console.log('Splide moved from slide', prevIndex, 'to slide', newIndex);
        });

        splide.on('autoplay:playing', function() {
            console.log('Splide autoplay started');
        });

        splide.on('autoplay:pause', function() {
            console.log('Splide autoplay paused');
        });

        // Store splide instance globally for debugging
        window.splideCarousel = splide;

    } catch (error) {
        console.error('Failed to mount Splide carousel:', error);
    }
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
        });

        honoursSplide.mount();
        window.honoursSplide = honoursSplide;
    } catch (e) {
        console.error('Failed to initialize honours slider', e);
    }
}

// Console Welcome Message
console.log('%c🏭 Welcome to Apollo Fashion International! 🏭', 'color: #041d52; font-size: 16px; font-weight: bold;');
console.log('%cBuilt with ❤️ using HTML, CSS & JavaScript + Splide.js', 'color: #128C7f; font-size: 12px;');