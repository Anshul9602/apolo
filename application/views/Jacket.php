

<style>
  /* Global Box Sizing */
  * {
    box-sizing: border-box;
  }

  /* Card hover effect */
  .card-hover:hover {
    transform: translateY(-10px) scale(1.03);
    box-shadow: 0 15px 30px rgba(0,0,0,0.2);
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
<div class="d-flex justify-content-center align-items-center position-relative heroSectionHeight">
  <div class="position-relative w-100" style="height:100vh; overflow:hidden;">
    <video autoplay muted loop playsinline 
           class="position-absolute top-0 start-0 w-100 h-100" 
           style="object-fit:cover; object-position:center; z-index:0;">
      <source src="<?php echo base_url('assets/jacket.mp4') ?>" type="video/mp4">
      Your browser does not support the video tag.
    </video>
    <div class="position-absolute top-0 start-0 w-100 h-100" style="background:rgba(0,0,0,0.5); z-index:1;"></div>

    <div class="text-center position-relative d-flex flex-column justify-content-center align-items-center" 
         style="height:100%; z-index:2;">
      <h1 class="fw-bold display-3 text-white">Unmatched. Unstoppable.</h1>
      <p class="text-white fs-4 mt-3">Crafted with precision. Designed for excellence.</p>
      <a href="#" class="btn btn-primary mt-4" style="background-color:#002D60; border:none; padding:12px 30px; font-weight:bold; border-radius:8px;">Contact Us</a>
    </div>
  </div>
</div>

<!-- Section-2 -->
<div class="d-flex mt-5 justify-content-center align-items-center text-center bg-light" style="height:50vh; padding:2rem;">
  <div class="container" style="max-width:900px;">
    <h2 style="color:#002D60">Quality, Customization, and Durability</h2>
    <p class="fs-4 fw-normal text-dark">
      At Apollo Fashion International Limited (AFIL), we are a trusted name in the global leather jacket manufacturing industry. Our commitment to quality, innovative designs, and attention to detail has made us a preferred partner for businesses worldwide. Whether you need timeless leather classics or custom-made jackets tailored to your brand’s unique identity, AFIL delivers excellence in every piece.
    </p>
  </div>
</div>

<!-- Section-3 -->
<div class="container py-5" style="background:#fff;">
  <div class="row align-items-center g-5">

    <!-- Left Side Image -->
    <div class="col-lg-6 col-md-12">
      <img src="https://picsum.photos/400/300?random=1" 
           alt="Random Image"
           class="w-100"
           style="border-radius:15px; box-shadow:0 10px 30px rgba(0,0,0,0.1); transition: transform 0.3s;">
    </div>

    <!-- Right Side Cards -->
    <div class="col-lg-6 col-md-12">
      <div class="d-flex flex-column gap-3">

        <!-- Card 1 -->
        <div class="card-hover d-flex align-items-start p-3" style="background:#fff; border:1px solid #e5e5e5; border-radius:12px;">
          <div class="d-flex align-items-center justify-content-center me-3" style="width:40px; height:40px; border-radius:50%; background:#002D60; color:#fff; font-weight:600; font-size:16px; flex-shrink:0;">
            1
          </div>
          <div>
            <h5 style="margin:0; font-size:17px; font-weight:600; color:#002D60;">Craftsmanship</h5>
            <p style="margin:5px 0 0; font-size:14px; color:#555; line-height:1.5;">
              Timeless artistry meets precision. Every jacket is expertly crafted to deliver durability, style, and a flawless fit that lasts.
            </p>
          </div>
        </div>

        <!-- Card 2 -->
        <div class="card-hover d-flex align-items-start p-3" style="background:#fff; border:1px solid #e5e5e5; border-radius:12px;">
          <div class="d-flex align-items-center justify-content-center me-3" style="width:40px; height:40px; border-radius:50%; background:#002D60; color:#fff; font-weight:600; font-size:16px; flex-shrink:0;">
            2
          </div>
          <div>
            <h5 style="margin:0; font-size:17px; font-weight:600; color:#002D60;">Tailored To Your Brand</h5>
            <p style="margin:5px 0 0; font-size:14px; color:#555; line-height:1.5;">
              Your vision, our craft. From bespoke designs to private labeling, we create leather jackets that elevate and define your brand.
            </p>
          </div>
        </div>

        <!-- Card 3 -->
        <div class="card-hover d-flex align-items-start p-3" style="background:#fff; border:1px solid #e5e5e5; border-radius:12px;">
          <div class="d-flex align-items-center justify-content-center me-3" style="width:40px; height:40px; border-radius:50%; background:#002D60; color:#fff; font-weight:600; font-size:16px; flex-shrink:0;">
            3
          </div>
          <div>
            <h5 style="margin:0; font-size:17px; font-weight:600; color:#002D60;">Trusted by Global Brands</h5>
            <p style="margin:5px 0 0; font-size:14px; color:#555; line-height:1.5;">
              Chosen by leading names worldwide. With large-scale production and strict quality standards, we deliver consistency you can count on.
            </p>
          </div>
        </div>

      </div>
    </div>

  </div>
</div>

<!-- Section-4: Full Screen Cards -->
<section id="quality-section" style="min-height: 100vh; background-color: #f8f9fa; display: flex; flex-direction: column; justify-content: center; align-items: center; padding: 50px 20px;">
  <h2 class="gsap-headline" style="font-size: 2.5rem; font-weight: bold; text-align: center; margin-bottom: 50px; color: #002D60;">
    Our Commitment to Unmatched Quality
  </h2>

  <div class="container">
    <div class="row g-4 justify-content-center">

      <!-- Card 1 -->
      <div class="col-12 col-md-6 col-lg-4">
        <div class="card card-hover gsap-card h-100 shadow" style="border-radius: 15px;">
          <img src="https://images.unsplash.com/photo-1581091870625-51f2db07e4bb?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=400" class="card-img-top" alt="Premium Materials" style="border-radius: 15px 15px 0 0; height: 250px; object-fit: cover;">
          <div class="card-body">
            <h5 class="card-title" style="font-weight: bold;">Premium Materials</h5>
            <p class="card-text" style="font-size: 0.95rem; color: #555;">
              Ethically sourced, high-quality leathers crafted for luxury and sustainability.
            </p>
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-12 col-md-6 col-lg-4">
        <div class="card card-hover gsap-card h-100 shadow" style="border-radius: 15px;">
          <img src="https://images.unsplash.com/photo-1581091215365-d7c5c933f230?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=400" class="card-img-top" alt="Advanced Manufacturing" style="border-radius: 15px 15px 0 0; height: 250px; object-fit: cover;">
          <div class="card-body">
            <h5 class="card-title" style="font-weight: bold;">Advanced Manufacturing</h5>
            <p class="card-text" style="font-size: 0.95rem; color: #555;">
              Blending timeless craftsmanship with modern facilities to deliver jackets that meet global standards of quality.
            </p>
          </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col-12 col-md-6 col-lg-4">
        <div class="card card-hover gsap-card h-100 shadow" style="border-radius: 15px;">
          <img src="https://images.unsplash.com/photo-1581091012184-72f39d3c7f48?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=400" class="card-img-top" alt="Rigorous Quality Controls" style="border-radius: 15px 15px 0 0; height: 250px; object-fit: cover;">
          <div class="card-body">
            <h5 class="card-title" style="font-weight: bold;">Rigorous Quality Controls</h5>
            <p class="card-text" style="font-size: 0.95rem; color: #555;">
              Every jacket is tested through strict quality checks, ensuring consistency, durability, and excellence.
            </p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Section-5 -->
<section class="container my-5">
  <div class="row align-items-center g-3">

    <!-- Image Left -->
    <div class="col-md-6 col-12 mb-4 mb-md-0">
      <img src="https://picsum.photos/800/500?random=2" 
           alt="AFIL Leather Jackets" 
           class="w-100"
           style="border-radius:15px; box-shadow:0 10px 30px rgba(0,0,0,0.1); transition: transform 0.3s;">
    </div>

    <!-- Content Right -->
    <div class="col-md-6 col-12" style="color:#000;">
      <p style="font-size:18px; line-height:1.7;">
        At <span style="color:#002D60; font-weight:bold;">AFIL</span>, we understand the unique demands of different businesses. Whether you’re a premium fashion brand, a retailer, or a boutique label, we provide customized solutions that align with your vision.
      </p>
      <p style="font-size:16px; line-height:1.7;">
        From personalized designs and logo embossing to private labeling and exclusive packaging, our services cater to diverse business requirements. With the ability to handle large-scale production and ensure on-time delivery, <span style="color:#002D60; font-weight:bold;">AFIL</span> is the ideal choice for businesses seeking a reliable leather jacket manufacturer.
      </p>
      <a href="#" 
         class="btn" 
         style="background-color:#002D60; color:#fff; padding:12px 30px; font-weight:bold; border-radius:8px; transition: all 0.3s; display:inline-block; margin-top:10px;"
         onmouseover="this.style.backgroundColor='#001f40';" 
         onmouseout="this.style.backgroundColor='#002D60';">
         Contact Us Today
      </a>
    </div>

  </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
  AOS.init({
    duration: 1000,
    once: true
  });
</script>

<?php $this->load->view('common/footer'); ?>
