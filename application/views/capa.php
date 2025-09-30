<style>
    .heroSectionHeight {
        height: 100vh;
        overflow: hidden;
    }

    @media (max-width: 600px) {
        .heroSectionHeight {
            height: 50vh;
            overflow: hidden !important;
        }

        .display-3 {
            font-size: 22px;
        }

        .fs-4 {
            font-size: 16px !important;
        }


    }
</style>

<body class="bg-dark text-white">
    <div class="d-flex justify-content-center align-items-center position-relative heroSectionHeight">

        <!-- Background image -->
        <img src="assets/cppp.jpg" alt="Close-up shoemaker using sewing machine" class="position-absolute top-0 start-0 w-100 h-100 img-fluid" style="object-fit:cover; object-position:center; z-index:0;">

        <!-- Overlay -->
        <div class="position-absolute top-0 start-0 w-100 h-100" style="background:rgba(0,0,0,0.5); z-index:1;"></div>

        <!-- Content -->
        <div class="text-center position-relative" style="z-index:2;">
            <h1 class="fw-bold display-3 text-white">Unmatched. Unstoppable.</h1>

        </div>
    </div>
    <div class="d-flex justify-content-center align-items-center text-center bg-light" style="height:auto; padding:4rem 2rem;">
        <div class="container" style="max-width:900px;">
            <p class="fs-6 fw-normal text-dark">
                At <span class="fw-bold" style="color:#002D60;">Apollo Fashion International Limited</span>, precision defines our approach to fashion manufacturing.
                Our process starts with selecting premium materials, ensuring that only the best is used for our footwear, outerwear, and accessories.
                From there, every piece undergoes a series of detailed checks at each stage of production, ensuring consistency and excellence.
            </p>
        </div>
    </div>
    <div class="d-flex flex-column justify-content-center align-items-center text-center" style="height:50vh; background:#fff; padding:2rem;">

        <!-- Heading -->
        <h3 class="fw-bold mb-1 pb-5" style="color:#002D60; font-size:2rem;">
            Annual Production Capacity
        </h3>

        <!-- Stats Grid -->
        <div class="container">
            <div class="row g-4 justify-content-center">

                <!-- Footwear -->
                <div class="col-6 col-md-3">
                    <h3 class="fw-bold counter" data-target="850000" style="color:#000000; font-size:2rem;">0</h3>
                    <p class="text-dark">Footwear (pairs)</p>
                </div>

                <!-- Outerwear -->
                <div class="col-6 col-md-3">
                    <h3 class="fw-bold counter" data-target="400000" style="color:#000000; font-size:2rem;">0</h3>
                    <p class="text-dark">Outerwear (garments)</p>
                </div>

                <!-- Bags -->
                <div class="col-6 col-md-3">
                    <h3 class="fw-bold counter" data-target="300000" style="color:#000000; font-size:2rem;">0</h3>
                    <p class="text-dark">Bags (units)</p>
                </div>

                <!-- Belts & SLGs -->
                <div class="col-6 col-md-3">
                    <h3 class="fw-bold counter" data-target="700000" style="color:#000000; font-size:2rem;">0</h3>
                    <p class="text-dark">Belts & SLGs (units)</p>
                </div>

            </div>
        </div>
    </div>
    <div class="d-flex flex-column justify-content-center align-items-center" style="min-height:100vh; background:#f9f9f9; padding:3rem 1rem;">

        <div class="container">
            <div class="row g-4 justify-content-center">

                <!-- Card 1 -->
                <div class="col-12 col-md-4">
                    <div class="card h-100 shadow-lg border-0" style="border-radius:20px; overflow:hidden;">
                        <img src="assets/part.jpg" class="card-img-top" alt="Your Partner in Growth" style="height:250px; object-fit:cover;">
                        <div class="card-body text-center p-4">
                            <h4 class="fw-bold mb-3" style="color:#002D60;">Your Partner in Growth</h4>
                            <p class="text-muted">
                                We unite craftsmanship and technology to create sustainable, trendsetting products with uncompromising quality.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-12 col-md-4">
                    <div class="card h-100 shadow-lg border-0" style="border-radius:20px; overflow:hidden;">
                        <img src="assets/eth.jpg" class="card-img-top" alt="Ethical & Sustainable" style="height:250px; object-fit:cover;">
                        <div class="card-body text-center p-4">
                            <h4 class="fw-bold mb-3" style="color:#002D60;">Ethical & Sustainable</h4>
                            <p class="text-muted">
                                Sustainability drives us—responsible sourcing, minimal impact, uncompromising ethics.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-12 col-md-4">
                    <div class="card h-100 shadow-lg border-0" style="border-radius:20px; overflow:hidden;">
                        <img src="assets/des.jpg" class="card-img-top" alt="Designed for Tomorrow" style="height:250px; object-fit:cover;">
                        <div class="card-body text-center p-4">
                            <h4 class="fw-bold mb-3" style="color:#002D60;">Designed for Tomorrow</h4>
                            <p class="text-muted">
                                Designing timeless fashion that shapes trends and leaves impact.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Count-up Animation Script -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            function animateCounter(counter) {
                const target = +counter.getAttribute('data-target');
                const duration = 2000; // 2 seconds
                const stepTime = Math.max(Math.floor(duration / target), 1);
                let current = 0;

                const timer = setInterval(() => {
                    current += Math.ceil(target / (duration / stepTime));
                    if (current >= target) {
                        current = target;
                        clearInterval(timer);
                    }
                    counter.innerText = current.toLocaleString();
                }, stepTime);
            }

            // Run when in viewport
            const counters = document.querySelectorAll('.counter');
            const observer = new IntersectionObserver((entries, obs) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        animateCounter(entry.target);
                        obs.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.5
            });

            counters.forEach(counter => observer.observe(counter));
        });
    </script>