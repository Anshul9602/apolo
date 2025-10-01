<!-- Styles -->
<style>
    /* Hero Section */
    .heroSectionHeight {
        height: 100vh;
        overflow: hidden;
        position: relative;
    }

    .heroSectionHeight img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .heroSectionHeight .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
    }

    .heroSectionHeight .hero-content {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: #fff;
        text-align: center;
    }

    /* Board of Directors Section */
    .apolo-section-bg {
        background: #fcfbff;
        padding: 4rem 1rem 2rem 1rem;
        text-align: center;
        width: 100%;
        overflow-x: hidden;
    }

    .apolo-title {
        font-weight: 700;
        color: #002E63;
        font-size: 2rem;
        margin-bottom: 1rem;
    }

    .apolo-desc {
        color: #555;
        font-size: 1.05rem;
        margin-bottom: 2rem;
        max-width: 800px;
        margin-left: auto;
        margin-right: auto;
    }

    .apolo-card-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 1.5rem;
        justify-content: center;
        max-width: 1200px;
        margin: 0 auto;
        width: 100%;
        padding: 0 1rem;
        overflow-x: hidden;
    }

    .apolo-card {
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(34, 34, 59, 0.08);
        border: 1px solid #f0eefc;
        padding: 1.5rem;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        border-left: 6px solid #b8f2e6;
        transition: transform 0.3s, box-shadow 0.3s;
        min-height: 120px;
        justify-content: center;
    }

    .apolo-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 20px rgba(34, 34, 59, 0.12);
    }

    .apolo-card strong {
        font-size: 1.1rem;
        color: #002E63;
        font-weight: 600;
        margin-bottom: 0.5rem;
        line-height: 1.3;
    }

    .apolo-card span {
        color: #6c757d;
        font-size: 0.95rem;
        line-height: 1.4;
    }

    /* Reimagine Fashion Together Section */
    .reimagine-section {
        background: #002D60;
        color: #fff;
        padding: 4rem 1rem;
        text-align: center;
        width: 100%;
        overflow-x: hidden;
    }

    .reimagine-section h2 {
        font-size: 2.2rem;
        font-weight: 700;
        margin-bottom: 1rem;
    }

    .reimagine-section p {
        font-size: 1rem;
        max-width: 600px;
        margin: 0 auto 1.5rem auto;
    }

    /* Responsive */
    @media (max-width: 1200px) {
        .apolo-card-grid {
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 1.25rem;
        }
    }

    @media (max-width: 992px) {
        .apolo-section-bg {
            padding: 3rem 1rem 2rem 1rem;
        }

        .apolo-card-grid {
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 1rem;
        }

        .apolo-card {
            padding: 1.25rem;
            min-height: 110px;
        }
    }

    @media (max-width: 768px) {
        .heroSectionHeight {
            height: 50vh;
        }

        .apolo-title {
            font-size: 1.7rem;
            margin-bottom: 0.75rem;
        }

        .apolo-desc {
            font-size: 1rem;
            margin-bottom: 1.5rem;
        }

        .apolo-card-grid {
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 0.875rem;
        }

        .apolo-card {
            padding: 1rem;
            min-height: 100px;
        }

        .apolo-card strong {
            font-size: 1rem;
        }

        .apolo-card span {
            font-size: 0.9rem;
        }

        .reimagine-section {
            padding: 3rem 1rem;
        }

        .reimagine-section h2 {
            font-size: 1.9rem;
        }
    }

    @media (max-width: 576px) {
        .heroSectionHeight {
            height: 45vh;
        }

        .apolo-section-bg {
            padding: 2.5rem 0.75rem 1.5rem 0.75rem;
            width: 100%;
            overflow-x: hidden;
        }

        .apolo-title {
            font-size: 1.5rem;
            margin-bottom: 0.5rem;
        }

        .apolo-desc {
            font-size: 0.95rem;
            margin-bottom: 1.25rem;
        }

        .apolo-card-grid {
            grid-template-columns: 1fr;
            gap: 0.75rem;
            max-width: 400px;
            width: 100%;
            padding: 0 0.5rem;
            overflow-x: hidden;
        }

        .apolo-card {
            padding: 1rem;
            min-height: 90px;
            border-radius: 8px;
            width: 100%;
            max-width: 100%;
        }

        .apolo-card strong {
            font-size: 0.95rem;
            margin-bottom: 0.25rem;
            word-wrap: break-word;
        }

        .apolo-card span {
            font-size: 0.85rem;
            word-wrap: break-word;
        }

        .reimagine-section {
            padding: 2.5rem 0.75rem;
            width: 100%;
            overflow-x: hidden;
        }

        .reimagine-section h2 {
            font-size: 1.6rem;
            margin-bottom: 0.75rem;
        }

        .reimagine-section p {
            font-size: 0.9rem;
            margin-bottom: 1.25rem;
        }

        .reimagine-section .btn {
            font-size: 0.9rem;
            padding: 0.75rem 1.5rem;
        }
    }

    @media (max-width: 480px) {
        .heroSectionHeight {
            height: 40vh;
        }

        .apolo-section-bg {
            padding: 2rem 0.5rem 1rem 0.5rem;
            width: 100%;
            overflow-x: hidden;
        }

        .apolo-title {
            font-size: 1.3rem;
        }

        .apolo-desc {
            font-size: 0.9rem;
        }

        .apolo-card-grid {
            max-width: 350px;
            width: 100%;
            padding: 0 0.25rem;
            overflow-x: hidden;
        }

        .apolo-card {
            padding: 0.875rem;
            min-height: 80px;
            width: 100%;
            max-width: 100%;
        }

        .reimagine-section {
            width: 100%;
            overflow-x: hidden;
        }

        .reimagine-section h2 {
            font-size: 1.4rem;
        }

        .reimagine-section p {
            font-size: 0.85rem;
        }
    }

    .media-thumb {
        height: 200px;
    }

    /* Section 4: Certifications */
    .cert-section {
        background: #f6f8fb;
        padding: 60px 0;
    }

    .cert-title {
        color: #041d52;
        font-weight: 800;
        letter-spacing: .08em;
        text-align: center;
        margin-bottom: 2rem;
    }

    .cert-logos .cert-card {
        background: #fff;
        border: 1px solid rgba(4, 29, 82, .08);
        border-radius: 12px;
        height: 120px;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 6px 18px rgba(0, 0, 0, .06);
    }

    .cert-logos img {
        max-height: 70px;
        max-width: 90%;
        object-fit: contain;
    }

    /* Section 5: 2026 Targets */
    .target-section {
        padding: 70px 0;
        background: #ffffff;
    }

    .target-wrap {
        background: #f8fbff;
        border: 1px solid rgba(4, 29, 82, .08);
        border-radius: 16px;
        overflow: hidden;
    }

    .target-media {
        min-height: 320px;
        background: #e9f2ff url('assets/buld.jpg') center/cover no-repeat;
    }

    .target-content {
        padding: 2rem;
    }

    .target-kicker {
        color: #128C7f;
        font-weight: 700;
        letter-spacing: .1em;
        text-transform: uppercase;
    }

    .target-title {
        color: #041d52;
        font-weight: 800;
        text-align: right;
    }

    .target-text {
        color: #4a5568;
    }

    .target-list {
        color: #041d52;
    }
</style>

<!-- Hero Section -->
<div class="heroSectionHeight" style="margin-top:70px;">
    <img src="assets/people.jpg" alt="Close-up shoemaker using sewing machine">
    <div class="overlay"></div>
    <div class="hero-content">
        <h1 class="fw-bold display-3 text-white">FASHIONING A GREENER FUTURE</h1>
    </div>
</div>

<!-- Board of Directors Section -->
<div class="apolo-section-bg">

    <div class="apolo-desc">
        At Apollo Fashion International Limited, sustainability is not an afterthought or a response to external
        pressures, it is a core part of who we are and what we stand for as a leading fashion manufacturer. We are
        dedicated to advancing responsible fashion practices globally. Our sustainability efforts are focused on
        practical and achievable initiatives.
    </div>

</div>

<section class="container my-5 py-4">
    <div class="media-list">

        <div class="media-item row align-items-start g-3 mb-4 mt-3">
            <div class="col-md-4">
                <div class="media-thumb rounded overflow-hidden shadow-sm"><img src="<?php echo base_url('assets/ad.jpg') ?>" alt="Ethical Material Sourcing" class="img-fluid w-100 h-100" style="object-fit:cover;"></div>
            </div>
            <div class="col-md-8">
                <h5 class="media-title mb-2">Ethical Material Sourcing</h5>
                <p class="media-text mb-3">All our materials come from sources that align with our vision of
                    sustainability. We proudly utilize vegetable-tanned leathers and Chrome-free leathers from
                    Gold-rated LWG tanneries,
                    ensuring that our products are not only of the highest quality but also responsibly made.
                </p><a href="https://www.freepik.com/free-photo/scenery-designers-work_32473607.htm#fromView=search&page=1&position=0&uuid=7eb889c3-d14f-4fc1-aa38-4af88513a137&query=ethical+material+sourcing" target="_blank" rel="noopener" class="btn btn-availability">VIEW AVAILABILITY</a>
            </div>
        </div>

        <div class="media-item row align-items-start g-3 mb-4 mt-3">
            <div class="col-md-4">
                <div class="media-thumb rounded overflow-hidden shadow-sm"><img src="<?php echo base_url('assets/ri.jpg') ?>" alt="Aiming for Zero Waste" class="img-fluid w-100 h-100" style="object-fit:cover;"></div>
            </div>
            <div class="col-md-8">
                <h5 class="media-title mb-2">Aiming for Zero Waste</h5>
                <p class="media-text mb-3">Our design philosophy centers around minimizing waste. By
                    integrating recycled fabrics and utilizing metal-free,
                    chrome-free leather,
                    while actively reducing our environmental footprint,
                    we make a real difference. Today,
                    85% of our production uses recycled zippers and linings—further strengthening our
                    commitment to sustainable fashion practices.</p><a href="http://freepik.com/free-ai-image/close-up-hands-clothing-pile_82426873.htm#fromView=search&page=1&position=27&uuid=97f12854-215e-4d38-8414-0aa6b04dd05d&query=zero+waste+clothing+" target="_blank" rel="noopener" class="btn btn-availability">VIEW AVAILABILITY</a>
            </div>
        </div>

        <div class="media-item row align-items-start g-3 mb-4 mt-3">
            <div class="col-md-4">
                <div class="media-thumb rounded overflow-hidden shadow-sm"><img src="<?php echo base_url('assets/pr.jpg') ?>" alt="Energy Consciousness in Action" class="img-fluid w-100 h-100" style="object-fit:cover;"></div>
            </div>
            <div class="col-md-8">
                <h5 class="media-title mb-2">Energy Consciousness in Action</h5>
                <p class="media-text mb-3">We are transitioning from conventional fuels to cleaner
                    energy alternatives. Piped Natural Gas (PNG) powers our boilers and generators,
                    while CNG (Compressed Natural Gas) and Diesel are used in company vehicles. Our
                    facilities are fitted with LED lighting,
                    optimizing energy use without compromising on quality.</p><a href="https://www.freepik.com/free-ai-image/planet-earth-globe-surrounded-by-vegetation-nature_210190505.htm#fromView=search&page=1&position=7&uuid=e553131c-7022-4167-89ed-f6f294d9fa97&query=planet+earth+sustainablityiii" target="_blank" rel="noopener" class="btn btn-availability">VIEW AVAILABILITY</a>
            </div>
        </div>

        <div class="media-item row align-items-start g-3 mb-2 mt-3">
            <div class="col-md-4">
                <div class="media-thumb rounded overflow-hidden shadow-sm"><img src="<?php echo base_url('assets/s1.jpeg') ?>" alt="Water – Our Precious Resource" class="img-fluid w-100 h-100" style="object-fit:cover;"></div>
            </div>
            <div class="col-md-8">
                <h5 class="media-title mb-2">Water – Our Precious Resource</h5>
                <p class="media-text mb-3">We treat water as a responsibility,
                    not just a resource. Our Effluent Treatment Plants exemplify our commitment,
                    treating wastewater efficiently and reusing or channeling it responsibly. Today,
                    we fulfill almost 30% of our water needs through recycling.</p><a href="https://www.freepik.com/free-ai-image/view-realistic-hands-touching-clear-flowing-water_138361282.htm#fromView=search&page=1&position=27&uuid=14268ba8-eda2-43f3-add1-b84f2c8ac2d3&query=water+cleanlienss" target="_blank" rel="noopener" class="btn btn-availability">VIEW
                    AVAILABILITY</a>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 4: Certifications -->
<section class="cert-section">
    <div class="container">
        <h2 class="cert-title">CERTIFIED FOR EXCELLENCE</h2>
        <div class="row cert-logos g-3 row-cols-2 row-cols-md-3 row-cols-lg-6 justify-content-center">
            <!-- Replace placeholders with actual certification images -->
            <div class="col">
                <div class="cert-card"><img src="<?php echo base_url('assets/logo.webp') ?>" alt="Certification"></div>
            </div>
            <div class="col">
                <div class="cert-card"><img src="<?php echo base_url('assets/flogo.webp') ?>" alt="Certification"></div>
            </div>
            <div class="col">
                <div class="cert-card"><img src="<?php echo base_url('assets/image.png') ?>" alt="Certification"></div>
            </div>
            <div class="col">
                <div class="cert-card"><img src="<?php echo base_url('assets/j1.png') ?>" alt="Certification"></div>
            </div>
            <div class="col">
                <div class="cert-card"><img src="<?php echo base_url('assets/b1.png') ?>" alt="Certification"></div>
            </div>
            <div class="col">
                <div class="cert-card"><img src="<?php echo base_url('assets/found1.jpg') ?>" alt="Certification"></div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: 2026 Sustainability Targets -->
<section class="target-section">
    <div class="container">
        <div class="row target-wrap g-0 align-items-stretch">
            <div class="col-lg-6 target-media"></div>
            <div class="col-lg-6 d-flex align-items-center">
                <div class="target-content w-100">
                    <div class="target-kicker mb-2 text-end">Reference: apollo-greenenergy.com</div>
                    <h2 class="target-title mb-3">2026 SUSTAINABILITY TARGETS</h2>
                    <p class="target-text mb-3">Sustainability at AFIL is not static—it’s a journey of continuous improvement. While we’ve made significant strides in ethical sourcing, waste reduction, and energy efficiency, our focus is now on setting ambitious goals for the future. By 2026, we aim to:</p>
                    <ul class="target-list">
                        <li>100% leather sourced from LWG-certified tanneries</li>
                        <li>Implementation of enhanced water efficiency systems and leak detection</li>
                        <li>Comprehensive waste management plan</li>
                        <li>Regular supplier and tannery audits for ethical compliance</li>
                        <li>GRS certification completion</li>
                        <li>Further reduction in overall carbon footprint</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Reimagine Fashion Together Section -->
<div class="reimagine-section">
    <h2>REIMAGINE FASHION TOGETHER</h2>
    <p>
        Explore the possibilities of fashion innovation. Partner with us to bring your visions to life.
    </p>
    <a href="mailto:info@apollofashion.com" class="btn btn-lg btn-light fw-bold px-4 py-2" style="color:#002D60;">
        Start a conversation
    </a>
</div>