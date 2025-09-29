<!-- Contact Hero Section -->
<section class="contact-hero-section" style="    background-image: url(https://web.moxcreative.com/kassapay/wp-content/uploads/sites/10/2023/02/young-businesswoman-talking-on-the-phone-while-using-computer-at-home-.jpg);
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;">
    <div class="hero-background">
        <div class="hero-overlay"></div>
    </div>
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-8">
                <div class="hero-content">
                    <h1 class="contact-hero-title">Contact Us</h1>
                    <p class="contact-hero-subtitle">Apollo Fashion International is ready to provide the right solutions tailored to your needs.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Information and Form Section -->
<section class="contact-main-section">
    <div class="container">
        <div class="row g-4">
            <!-- Contact Information Column -->
            <div class="col-lg-6 p-0">
                <div class="contact-info-card">
                    <div class="card-header">
                        <h2 class="contact-info-title">Get in Touch</h2>
                        <p class="contact-info-description">We're here to help and answer any question you might have. We look forward to hearing from you.</p>
                    </div>
                    
                    <!-- Contact Methods -->
                    <div class="contact-methods">
                        <!-- Head Office -->
                        <div class="contact-method-card">
                            <div class="contact-icon-wrapper">
                                <div class="contact-icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                            </div>
                            <div class="contact-details">
                                <h5>Head Office</h5>
                                <p><strong>Apollo Fashion International Limited</strong><br>
                                Leather Garments & Accessories<br>
                                B-21, Sector-65, NOIDA-201301, India<br>
                                Footwear Division<br>
                                C-30, Sector-58, NOIDA-201301, India</p>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="contact-method-card">
                            <div class="contact-icon-wrapper">
                                <div class="contact-icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                            </div>
                            <div class="contact-details">
                                <h5>Email Us</h5>
                                <p><a href="mailto:afil.info@apollofashioncompany.com">afil.info@apollofashioncompany.com</a></p>
                            </div>
                        </div>

                        <!-- Phone -->
                        <div class="contact-method-card">
                            <div class="contact-icon-wrapper">
                                <div class="contact-icon">
                                    <i class="fas fa-phone"></i>
                                </div>
                            </div>
                            <div class="contact-details">
                                <h5>Call Us</h5>
                                <p>Phone: <a href="tel:+0120-4608300">+0120-4608300</a></p>
                            </div>
                        </div>
                    </div>

                    <!-- Social Media -->
                    <div class="social-media-card">
                        <h5>Follow Us on Social Media</h5>
                        <div class="social-links">
                            <a href="#" class="social-link">
                                <i class="fab fa-linkedin"></i>
                            </a>
                            <a href="#" class="social-link">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Form Column -->
            <div class="col-lg-6 p-0">
                <div class="contact-form-card">
                    <div class="form-header">
                        <h2 class="contact-form-title">Send us a message</h2>
                        <p class="form-description">Fill out the form below and we'll get back to you as soon as possible.</p>
                    </div>
                    
                    <?php if (isset($form_submitted)): ?>
                        <div class="alert alert-<?php echo $form_submitted['status'] === 'success' ? 'success' : 'danger'; ?> alert-dismissible fade show" role="alert">
                            <div class="alert-content">
                                <i class="fas fa-<?php echo $form_submitted['status'] === 'success' ? 'check-circle' : 'exclamation-triangle'; ?>"></i>
                                <span><?php echo $form_submitted['message']; ?></span>
                            </div>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php endif; ?>
                    
                    <form class="contact-form" id="contactForm" method="post" action="<?php echo base_url('Contact'); ?>">
                        <div class="form-row">
                            <div class="form-group">
                                <label for="name">Name <span class="required">*</span></label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="company">Company</label>
                                <input type="text" class="form-control" id="company" name="company">
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label for="phone">Phone <span class="required">*</span></label>
                                <input type="tel" class="form-control" id="phone" name="phone" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email <span class="required">*</span></label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="subject">Subject <span class="required">*</span></label>
                            <input type="text" class="form-control" id="subject" name="subject" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="message">Message <span class="required">*</span></label>
                            <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                        </div>
                        
                        <button type="submit" class="btn btn-contact-submit">
                            <span class="btn-text">Send Message</span>
                            <span class="btn-loader" style="display: none;">
                                <i class="fas fa-spinner fa-spin"></i> Sending...
                            </span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Map Section -->
<section class="map-section">
    <div class="container-fluid p-0">
        <div class="map-wrapper">
            <div class="map-overlay">
                <div class="map-info">
                    <h3>Visit Our Office</h3>
                    <p>B-21, Sector-65, NOIDA-201301, India</p>
                </div>
            </div>
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3506.1234567890!2d77.3722!3d28.6129!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce55b0f5b8c1f%3A0x1234567890abcdef!2sSector%2065%2C%20Noida%2C%20Uttar%20Pradesh%20201301!5e0!3m2!1sen!2sin!4v1234567890123!5m2!1sen!2sin" 
                width="100%" 
                height="400" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Form validation and enhancement
    const contactForm = document.getElementById('contactForm');
    const submitBtn = contactForm.querySelector('.btn-contact-submit');
    const btnText = submitBtn.querySelector('.btn-text');
    const btnLoader = submitBtn.querySelector('.btn-loader');
    
    // Add loading state to submit button
    contactForm.addEventListener('submit', function(e) {
        btnText.style.display = 'none';
        btnLoader.style.display = 'inline-block';
        submitBtn.disabled = true;
    });
    
    // Auto-dismiss alerts after 5 seconds
    const alerts = document.querySelectorAll('.alert');
    alerts.forEach(alert => {
        setTimeout(() => {
            if (alert && alert.parentNode) {
                alert.style.opacity = '0';
                setTimeout(() => {
                    if (alert.parentNode) {
                        alert.remove();
                    }
                }, 300);
            }
        }, 5000);
    });
    
    // Form field enhancements
    const formControls = document.querySelectorAll('.form-control');
    formControls.forEach(control => {
        control.addEventListener('focus', function() {
            this.parentElement.classList.add('focused');
        });
        
        control.addEventListener('blur', function() {
            if (this.value === '') {
                this.parentElement.classList.remove('focused');
            } else {
                this.parentElement.classList.add('has-value');
            }
        });
        
        // Check if field has value on page load
        if (control.value !== '') {
            control.parentElement.classList.add('has-value');
        }
    });
    
    // Smooth scroll for internal links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
});
</script>