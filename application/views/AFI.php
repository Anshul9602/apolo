<!-- Hero Video Section -->
<div class="afi-hero-video ">
    <video autoplay muted loop playsinline class="w-100 h-100">
        <source src="<?php echo base_url('assets/heror.mp4') ?>" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <div class="afi-hero-overlay"></div>
</div>

<!-- Clientele Section -->
<div class="afi-clientele-section text-center">
    <div class="container">
        <h2 class="afi-clientele-title">Our Clientele</h2>
        <p style="font-size:1.2rem; color:black; opacity:0.8;">Trusted by leading brands worldwide.</p>
        <div>
            <img style="max-width:100%" src="<?= base_url('assets/image.png') ?>" alt="Client Logo" >
        </div>
    </div>
</div>

<!-- Styles -->
<style>
/* Hero Video Section */
.afi-hero-video {
    width: 100%;
    height: 100vh;
    overflow: hidden;
    background: #000;
}
.afi-hero-video video {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

 

/* Clientele Section */
.afi-clientele-section {
    width: 100%;
    background: #fff;
    color: #002D60;
    padding: 4rem 1rem;
}
.afi-clientele-title {
    font-size: 2.5rem;
    font-weight: 700;
    margin-bottom: 2rem;
}
.client-logo-container {
    max-width: 300px;
    margin: 0 auto;
}
 

/* Responsive Adjustments */
@media (max-width: 768px) {
    .afi-hero-video { height: 60vh; }
    .afi-clientele-title { font-size: 2rem; }
}
@media (max-width: 480px) {
    .afi-hero-video { height: 50vh; }
    .afi-clientele-title { font-size: 1.5rem; }
}
</style>
