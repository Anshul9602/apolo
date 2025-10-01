<style>
    /* Global Box Sizing */
    * {
        box-sizing: border-box;
    }

    /* Card hover effect */
    .card-hover:hover {
        transform: translateY(-10px) scale(1.03);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        transition: transform 0.4s, box-shadow 0.4s;
    }

    /* Hero section height */
    .heroSectionHeight {
        height: 100vh;
        overflow: hidden;
    }

    @media only screen and (max-width: 600px) {
        .heroSectionHeight {
            height: 50vh;
            overflow: hidden !important;
        }
    }
</style>

<body class="text-white">

    <!-- Section-1: Hero Video -->
    <div style="margin-top:70px;" class="d-flex justify-content-center align-items-center position-relative heroSectionHeight">
        <div class="position-relative w-100" style="height:100%; overflow:hidden;">
            <video autoplay muted loop playsinline class="position-absolute top-0 start-0 w-100 h-100" style="object-fit:cover; object-position:center; z-index:0;">
                <source src="<?php echo base_url('assets/bags.mp4') ?>" type="video/mp4">

            </video>
            <div class="position-absolute top-0 start-0 w-100 h-100" style="background:rgba(0,0,0,0.5); z-index:1;"></div>

            <div class="text-center position-relative d-flex flex-column justify-content-center align-items-center" style="height:100%; z-index:2;">
                <h1 class="fw-bold display-3 text-white">Future of Fashion</h1>

                <a href="<?php echo base_url('Contact') ?>" class="btn btn-primary mt-4" style="background-color: transparent;border: 1px solid;padding:12px 30px;font-weight:bold;border-radius:8px;">Contact
                    Us</a>
            </div>
        </div>
    </div>



    <!-- Section-4: Benefits Grid Layout (3 x 2 Cards) -->
    <section class="container my-5 py-5">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-2 g-4">
            <!-- Card: Streamlined Design Process -->
            <div class="col">
                <div class="info-card bg-soft-purple">
                    <div class="info-card-top">
                        <span class="salary"></span>
                        <button class="bookmark-btn" aria-label="save">&#9734;</button>
                    </div>
                    <h4 class="info-title">Streamlined Design Process</h4>
                    <p class="info-text">• Revolutionizing Prototypes: We leverage digital sampling to transform design concepts into highly accurate digital prototypes, significantly reducing the need for physical samples.</p>
                    <p class="info-text">• Creative Freedom: Our efficient digital processes empower designers to push creative boundaries with fewer environmental impacts.</p>
                    <div class="info-meta">
                        <div class="meta-left">
                            <img src="<?php echo base_url('assets/logo.webp') ?>" alt="Brand" class="company-logo">

                        </div>
                        <a href="#contact" class="view-btn">View</a>
                    </div>
                </div>
            </div>

            <!-- Card: Creative Freedom -->
            <div class="col">
                <div class="info-card bg-soft-yellow">
                    <div class="info-card-top">
                        <span class="salary"></span>
                        <button class="bookmark-btn" aria-label="save">&#9734;</button>
                    </div>
                    <h4 class="info-title">Rapid Prototyping</h4>
                    <p class="info-text">• Accelerated Feedback Integration: Virtual sampling enables quick adaptations based on real-time client feedback, ensuring products meet exact specifications.</p>
                    <p class="info-text">• Trend Leadership: By rapidly prototyping designs, we stay ahead of the industry—delivering products that align with evolving consumer demands and preferences.</p>
                    <div class="info-meta">
                        <div class="meta-left">
                            <img src="<?php echo base_url('assets/flogo.webp') ?>" alt="Brand" class="company-logo">

                        </div>
                        <a href="#contact" class="view-btn">View</a>
                    </div>
                </div>
            </div>

            <!-- Card: Rapid Prototyping -->
            <div class="col">
                <div class="info-card bg-soft-green">
                    <div class="info-card-top">
                        <span class="salary"></span>
                        <button class="bookmark-btn" aria-label="save">&#9734;</button>
                    </div>
                    <h4 class="info-title">Optimized Material Use</h4>
                    <p class="info-text">• Precision Pattern Making: Advanced technology ensures precise cuts and minimizes fabric waste.</p>
                    <p class="info-text">• Sustainable Practices: Reflecting our commitment to sustainability, we significantly reduce material waste while respecting valuable resources.</p>
                    <div class="info-meta">
                        <div class="meta-left">
                            <img src="<?php echo base_url('assets/logo.webp') ?>" alt="Brand" class="company-logo">

                        </div>
                        <a href="#contact" class="view-btn">View</a>
                    </div>
                </div>
            </div>

            <!-- Card: Trend Leadership -->
            <div class="col">
                <div class="info-card bg-soft-green">
                    <div class="info-card-top">
                        <span class="salary"></span>
                        <button class="bookmark-btn" aria-label="save">&#9734;</button>
                    </div>
                    <h4 class="info-title">Enhanced Production Oversight</h4>
                    <p class="info-text">• Real-Time Monitoring: Advanced systems track every stage of production, ensuring impeccable quality control and timely adjustments.</p>
                    <div class="info-meta">
                        <div class="meta-left">
                            <img src="<?php echo base_url('assets/logo.webp') ?>" alt="Brand" class="company-logo">

                        </div>
                        <a href="#contact" class="view-btn">View</a>
                    </div>
                </div>
            </div>


        </div>
    </section>