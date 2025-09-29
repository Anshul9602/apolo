

<!-- Styles -->
<style>
/* Global overflow fix */
* {
    box-sizing: border-box;
}

html, body {
    overflow-x: hidden;
    max-width: 100%;
}


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
    top: 0; left: 0;
    width: 100%; height: 100%;
    background: rgba(0,0,0,0.5);
}
.heroSectionHeight .hero-content {
    position: absolute;
    top: 50%; left: 50%;
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
    box-shadow: 0 4px 12px rgba(34,34,59,0.08);
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
    box-shadow: 0 8px 20px rgba(34,34,59,0.12);
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
</style>

<!-- Hero Section -->
<div class="heroSectionHeight">
    <img src="https://img.freepik.com/free-photo/close-up-shoemaker-using-sewing-machine_171337-12305.jpg" 
         alt="Close-up shoemaker using sewing machine">
    <div class="overlay"></div>
    <div class="hero-content">
        <h1 class="fw-bold display-3 text-white">Board of Directors</h1>
    </div>
</div>

<!-- Board of Directors Section -->
<div class="apolo-section-bg">
    <div class="apolo-title">Board of Directors</div>
    <div class="apolo-desc">
        The Board of Directors of the company have envisioned the organisation to new heights. The company is well managed under the foray of these individuals:
    </div>
    <div class="apolo-card-grid">
        <div class="apolo-card">
            <strong>Mr. Raaja Kanwar</strong>
            <span>Vice Chairman and Managing Director</span>
        </div>
        <div class="apolo-card">
            <strong>Mr. Sunil Agrawal</strong>
            <span>Independent Director</span>
        </div>
        <div class="apolo-card">
            <strong>Mr. Ravikant Umakant Mishra</strong>
            <span>Independent Director</span>
        </div>
        <div class="apolo-card">
            <strong>Mr. Shiraz Askari</strong>
            <span>Whole Time Director</span>
        </div>
        <div class="apolo-card">
            <strong>Mr. Zeefan O S Kanwar</strong>
            <span>Director</span>
        </div>
    </div>
</div>

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

