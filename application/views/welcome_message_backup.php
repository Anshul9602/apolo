<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apollo Fashion International Limited | Leading Leather Product Manufacturer</title>
    <meta name="description"
        content="Apollo Fashion International Limited is a specialized leather product manufacturer delivering high-quality footwear, outerwear, and leather accessories for leading fashion brands with sustainable practices.">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/style.css">
</head>

<body>
    <!-- Header -->
    <header class="header">
        <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center" href="#">
                    <img src="assets/logo.webp" alt="" class="logo" style="width: 250px;">
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="#home">About us</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="capabilitiesDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Capabilities
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="capabilitiesDropdown">
                                <li><a class="dropdown-item" href="#leather-bag">Leather Bag</a></li>
                                <li><a class="dropdown-item" href="#leather-jacket">Leather Jacket</a></li>
                                <li><a class="dropdown-item" href="#leather-shoes">Leather Shoes</a></li>
                                <li><a class="dropdown-item" href="#leather-belt">Leather Belt</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#afi-edge">The AFI Edge</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#technology">Technology</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#people-planet">People & Planet</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="investorDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Investor Relations
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="investorDropdown">
                                <li><a class="dropdown-item" href="#board-directors">Board of Directors</a></li>
                                <li><a class="dropdown-item" href="#policies">Policies</a></li>
                                <li><a class="dropdown-item" href="#annual-reports">Annual Reports</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="contactDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Contact
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="contactDropdown">
                                <li><a class="dropdown-item" href="#careers">Careers</a></li>
                            </ul>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
    </header>

    <!-- Hero Video Section -->
    <section id="home" class="hero-video-section">
        <div class="video-background">
            <video autoplay muted loop playsinline style="width: 100%; ">
                <source src="assets/large.mp4" type="video/mp4">
                <!-- Fallback image if video doesn't load -->
                <img src="assets/images/leather-workshop-fallback.jpg" alt="Leather crafting workshop"
                    class="fallback-image">
            </video>
            <div class="video-overlay"></div>
        </div>
        <div class="hero-content">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-8">
                        <h1 class="hero-video-title">Fashion Made Responsibly</h1>
                        <div class="hero-video-buttons">
                            <a href="#contact" class="btn btn-hero-primary">Start a Project</a>
                            <a href="#capabilities" class="btn btn-hero-secondary">Our Capabilities</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 2: Creative Visions -->
    <section class="creative-visions-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h2 class="section-heading">Translating Creative Visions into Fashion Masterpieces</h2>
                </div>
                <div class="col-lg-6">
                    <p class="section-description">Apollo Fashion International Limited specializes in manufacturing
                        premium leather footwear, outerwear, and accessories for leading fashion brands. From sketch to
                        store, we fuse atelier craftsmanship with advanced manufacturing and uncompromising quality
                        systems, delivering market-ready collections produced responsibly and to exacting global
                        standards.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 3: Discover Our Offerings Carousel -->
    <section id="capabilities" class="offerings-carousel-section" style="position: relative;">
        <div class="container-fluid">
            <div class="text-center mb-5">
                <h2 class="section-title">Discover Our Offerings</h2>
                <p class="section-subtitle">At Apollo Fashion International Limited, every piece we produce is defined
                    by uncompromising craftsmanship and meticulous detail.</p>
            </div>

            <div class="offerings-carousel-container">
                <button class="carousel-nav-btn carousel-prev" id="prevBtn">
                    <i class="fas fa-chevron-left"></i>
                </button>

                <div class="offerings-carousel-wrapper">
                    <div class="offerings-carousel-track" id="carouselTrack">
                        <!-- Footwear Card -->
                        <div class="offering-carousel-card active">
                            <div class="offering-card-image">
                                <img src="https://images.unsplash.com/photo-1549298916-b41d501d3772?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80"
                                    alt="Footwear" class="card-bg-image">
                                <div class="card-overlay"></div>
                                <div class="offering-card-content">
                                    <div class="offering-icon">
                                        <i class="fas fa-shoe-prints"></i>
                                    </div>
                                    <h3 class="offering-title">Footwear</h3>
                                    <p class="offering-description">From sturdy everyday wear to elegant high-fashion
                                        designs</p>
                                </div>
                            </div>
                        </div>

                        <!-- Outerwear Card -->
                        <div class="offering-carousel-card">
                            <div class="offering-card-image">
                                <img src="https://images.unsplash.com/photo-1551028719-00167b16eac5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80"
                                    alt="Outerwear" class="card-bg-image">
                                <div class="card-overlay"></div>
                                <div class="offering-card-content">
                                    <div class="offering-icon">
                                        <i class="fas fa-tshirt"></i>
                                    </div>
                                    <h3 class="offering-title">Outerwear</h3>
                                    <p class="offering-description">Leather jackets and coats that blend style with
                                        durability.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Bags Card -->
                        <div class="offering-carousel-card">
                            <div class="offering-card-image">
                                <img src="https://images.unsplash.com/photo-1553062407-98eeb64c6a62?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80"
                                    alt="Bags" class="card-bg-image">
                                <div class="card-overlay"></div>
                                <div class="offering-card-content">
                                    <div class="offering-icon">
                                        <i class="fas fa-shopping-bag"></i>
                                    </div>
                                    <h3 class="offering-title">Bags</h3>
                                    <p class="offering-description">Versatile leather bags, crafted for both
                                        functionality and style</p>
                                </div>
                            </div>
                        </div>

                        <!-- Belts Card -->
                        <div class="offering-carousel-card">
                            <div class="offering-card-image">
                                <img src="https://images.unsplash.com/photo-1553062407-98eeb64c6a62?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80"
                                    alt="Belts" class="card-bg-image">
                                <div class="card-overlay"></div>
                                <div class="offering-card-content">
                                    <div class="offering-icon">
                                        <i class="fas fa-belt"></i>
                                    </div>
                                    <h3 class="offering-title">Belts</h3>
                                    <p class="offering-description">A diverse collection of belts, from classic to
                                        contemporary.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <button class="carousel-nav-btn carousel-next" id="nextBtn">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>

            <!-- Carousel Indicators -->
            <div class="carousel-indicators">
                <button class="indicator active" data-slide="0">
                    <div class="indicator-progress"></div>
                </button>
                <button class="indicator" data-slide="1">
                    <div class="indicator-progress"></div>
                </button>
                <button class="indicator" data-slide="2">
                    <div class="indicator-progress"></div>
                </button>
                <button class="indicator" data-slide="3">
                    <div class="indicator-progress"></div>
                </button>
            </div>
        </div>
    </section>

    <!-- Section 4: Sustainable Production -->
    <section id="people-planet" class="sustainability-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="sustainability-image">
                        <img src="assets/sll.jpg"
                            alt="Aerial view of island" class="img-fluid rounded">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div style="position: relative;">
                        <h2 class="sustainability-title">Sustainable Production, Ethical Practices</h2>
                        <!-- Auto-slide indicator -->
                        
                    </div>
                    <div class="sustainability-stats">
                        <!-- Rolling Stats Container -->
                        <div class="rolling-stats-container">
                            <div class="rolling-stat-item active" data-stat="0">
                                <span class="stat-number-small">90%</span>
                                <span class="stat-text">leather sourced from LWG certified tanneries</span>
                            </div>
                            <div class="rolling-stat-item" data-stat="1">
                                <span class="stat-number-small">80-85%</span>
                                <span class="stat-text">sustainable attributes in production</span>
                            </div>
                            <div class="rolling-stat-item" data-stat="2">
                                <span class="stat-number-small">30%</span>
                                <span class="stat-text">water needs met through rainwater harvesting</span>
                            </div>
                            <div class="rolling-stat-item" data-stat="3">
                                <span class="stat-number-small">Zero</span>
                                <span class="stat-text">waste initiatives in leather production</span>
                            </div>
                            <div class="rolling-stat-item" data-stat="4">
                                <span class="stat-number-small">90%</span>
                                <span class="stat-text">recycled packaging in shipments</span>
                            </div>
                            <div class="rolling-stat-item" data-stat="5">
                                <span class="stat-number-small">80%</span>
                                <span class="stat-text">movement of materials through sea freight</span>
                            </div>
                            <div class="rolling-stat-item" data-stat="6">
                                <span class="stat-number-small">70%</span>
                                <span class="stat-text">reduction in diesel consumption</span>
                            </div>
                            <div class="rolling-stat-item" data-stat="7">
                                <span class="stat-number-small">5-10%</span>
                                <span class="stat-text">reduction in electricity consumption</span>
                            </div>
                        </div>
                        
                        <!-- Progress Indicators -->
                        <div class="rolling-stats-indicators">
                            <div class="rolling-indicator active" data-indicator="0"></div>
                            <div class="rolling-indicator" data-indicator="1"></div>
                            <div class="rolling-indicator" data-indicator="2"></div>
                            <div class="rolling-indicator" data-indicator="3"></div>
                            <div class="rolling-indicator" data-indicator="4"></div>
                            <div class="rolling-indicator" data-indicator="5"></div>
                            <div class="rolling-indicator" data-indicator="6"></div>
                            <div class="rolling-indicator" data-indicator="7"></div>
                        </div>
                    </div>
                    <a href="#people-planet" class="sustainability-link">View 2026 Targets →</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 5: Ready to Build -->
    <section class="build-section">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8">
                    <h2 class="build-title">Ready to build responsibly?</h2>
                    <p class="build-description">We match your vision with disciplined execution, for outcomes that
                        compound. Send us a brief or a tech pack—we'll revert with a plan and a timeline.</p>
                    <div class="build-buttons">
                        <a href="#contact" class="btn btn-primary btn-lg me-3">Start a Project</a>
                        <a href="#contact" class="btn btn-outline-primary btn-lg">Talk to Manufacturing</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 6: Careers -->
    <section class="careers-section">
        <div class="careers-background">
            <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2071&q=80" alt="Team collaboration" class="careers-bg-image">
            <div class="careers-overlay"></div>
        </div>
        <div class="careers-content">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-8">
                        <div class="careers-badge">CAREERS AT AFIL</div>
                        <h2 class="careers-main-title">Join the team behind the future of work</h2>
                        <p class="careers-main-description">At Apollo, we are building the tools that help companies thrive, and we are looking for people who want to shape how teams collaborate, grow, and succeed.</p>
                        
                        <div class="careers-form-container">
                            <form class="careers-form">
                                <div class="form-row">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Department" required>
                                        <i class="fas fa-chevron-down form-icon"></i>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Type" required>
                                        <i class="fas fa-chevron-down form-icon"></i>
                                    </div>
                                    <button type="submit" class="btn btn-careers-primary">View open positions</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 7: News & Insights -->
    <section class="news-insights-section">
        <div class="container">
            <div class="news-header">
                <h2 class="news-main-title">News, insights and more from Apollo Fashion</h2>
                <div class="news-navigation">
                    <nav class="news-nav">
                        <a href="#" class="nav-item active">All</a>
                        <a href="#" class="nav-item">Company</a>
                        <a href="#" class="nav-item">Marketing</a>
                        <a href="#" class="nav-item">Resources</a>
                        <a href="#" class="nav-item">Trends</a>
                        <a href="#" class="nav-item">Sustainability</a>
                        <a href="#" class="nav-item">More</a>
                    </nav>
                </div>
            </div>

            <div class="news-grid">
                <!-- Featured Article 1 -->
                <article class="news-article featured large">
                    <div class="article-gradient gradient-blue-purple"></div>
                    <div class="article-content">
                        <div class="article-meta">
                            <span class="article-date">Aug 14, 2024</span>
                        </div>
                        <h3 class="article-title">Embracing Next-Culture Strategies for Success in a Distributed Workforce</h3>
                        <p class="article-excerpt">How forward-thinking companies are adapting their business operations globally</p>
                        <div class="article-author">
                            <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=40&h=40&fit=crop&crop=face" alt="Author" class="author-avatar">
                            <span class="author-name">Matthew King</span>
                        </div>
                    </div>
                </article>

                <!-- Featured Article 2 -->
                <article class="news-article featured">
                    <div class="article-gradient gradient-red-orange"></div>
                    <div class="article-content">
                        <div class="article-meta">
                            <span class="article-date">Aug 12, 2024</span>
                        </div>
                        <h3 class="article-title">The Top Industries Investing in Artificial Intelligence Using AI for Fraud Prevention and Detection</h3>
                        <p class="article-excerpt">Data prevention and detection.</p>
                        <div class="article-author">
                            <img src="https://images.unsplash.com/photo-1494790108755-2616b2e46b9e?w=40&h=40&fit=crop&crop=face" alt="Author" class="author-avatar">
                            <span class="author-name">Matthew King</span>
                        </div>
                    </div>
                </article>

                <!-- Regular Articles -->
                <article class="news-article regular">
                    <div class="article-gradient gradient-purple-blue"></div>
                    <div class="article-content">
                        <div class="article-meta">
                            <span class="article-date">Aug 10, 2024</span>
                        </div>
                        <h3 class="article-title">Sustainable Manufacturing: The Future of Fashion Production</h3>
                        <p class="article-excerpt">How Apollo Fashion is leading the industry in sustainable practices</p>
                        <div class="article-author">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=40&h=40&fit=crop&crop=face" alt="Author" class="author-avatar">
                            <span class="author-name">Sarah Chen</span>
                        </div>
                    </div>
                </article>

                <article class="news-article regular">
                    <div class="article-gradient gradient-green-blue"></div>
                    <div class="article-content">
                        <div class="article-meta">
                            <span class="article-date">Aug 8, 2024</span>
                        </div>
                        <h3 class="article-title">Leather Innovation: From Traditional Craftsmanship to Modern Technology</h3>
                        <p class="article-excerpt">Exploring the evolution of leather manufacturing processes</p>
                        <div class="article-author">
                            <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=40&h=40&fit=crop&crop=face" alt="Author" class="author-avatar">
                            <span class="author-name">David Kumar</span>
                        </div>
                    </div>
                </article>

                <article class="news-article regular">
                    <div class="article-gradient gradient-orange-pink"></div>
                    <div class="article-content">
                        <div class="article-meta">
                            <span class="article-date">Aug 6, 2024</span>
                        </div>
                        <h3 class="article-title">Global Fashion Trends: What's Driving Consumer Preferences in 2024</h3>
                        <p class="article-excerpt">Market insights and consumer behavior analysis</p>
                        <div class="article-author">
                            <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=40&h=40&fit=crop&crop=face" alt="Author" class="author-avatar">
                            <span class="author-name">Lisa Thompson</span>
                        </div>
                    </div>
                </article>

                <article class="news-article regular">
                    <div class="article-gradient gradient-teal-green"></div>
                    <div class="article-content">
                        <div class="article-meta">
                            <span class="article-date">Aug 4, 2024</span>
                        </div>
                        <h3 class="article-title">Supply Chain Resilience in the Post-Pandemic Era</h3>
                        <p class="article-excerpt">Building robust manufacturing networks for the future</p>
                        <div class="article-author">
                            <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=40&h=40&fit=crop&crop=face" alt="Author" class="author-avatar">
                            <span class="author-name">Michael Rodriguez</span>
                        </div>
                    </div>
                </article>
            </div>

            <div class="more-articles">
                <h3 class="more-title">More Articles</h3>
                <div class="more-articles-grid">
                    <div class="more-article-item">
                        <h4>Fashion Week Trends Analysis</h4>
                        <span class="more-date">Aug 2, 2024</span>
                    </div>
                    <div class="more-article-item">
                        <h4>Ethical Manufacturing Standards</h4>
                        <span class="more-date">Jul 30, 2024</span>
                    </div>
                    <div class="more-article-item">
                        <h4>Digital Transformation in Fashion</h4>
                        <span class="more-date">Jul 28, 2024</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="contact" class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="footer-brand">
                        <img src="assets/flogo.webp" alt="Apollo Fashion International" class="footer-logo"
                            style="width: 200px; margin-bottom: 1rem;">
                    </div>
                    <p class="footer-text">Specialized leather product manufacturer delivering high-quality footwear,
                        outerwear, and leather accessories for leading fashion brands.</p>
                </div>
                <div class="col-md-6">
                    <div class="footer-contact">
                        <h5>Contact Information</h5>
                        <p><i class="fas fa-phone me-2"></i>01204608300</p>
                        <p><i class="fas fa-envelope me-2"></i>info@apollofashioncompany.com</p>
                        <div class="footer-addresses">
                            <div class="address-item mb-3">
                                <h6>Footwear Division</h6>
                                <p>C-30, Sector-58, NOIDA-201301, India</p>
                            </div>
                            <div class="address-item">
                                <h6>Leather Garments & Accessories</h6>
                                <p>B-21, Sector-65, NOIDA-201301, India</p>
                            </div>
                        </div>
                        <div class="footer-social mt-3">
                            <a href="#" class="social-link me-3"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="social-link me-3"><i class="fab fa-linkedin"></i></a>
                            <a href="#" class="social-link"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="my-4">
            <div class="row">
                <div class="col-12 text-center">
                    <p class="mb-0">&copy; 2025 Apollo Fashion International Limited. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script src="assets/js.js"></script>
</body>

</html>