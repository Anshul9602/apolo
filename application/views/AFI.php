<!-- Hero Video Section -->
<div class="afi-hero-video " style="margin-top:70px;">
    <video autoplay muted loop playsinline class="w-100 h-100">
        <source src="<?php echo base_url('assets/heror.mp4') ?>" type="video/mp4">

    </video>
    <div class="afi-hero-overlay"></div>
</div>
<style>
    .solutions-container {
        position: relative;
        margin-top: 30px;
        display: flex;
        flex-direction: column;
        min-height: 100vh;
        gap: 20px;
    }

    @media (min-width: 768px) {
        .solutions-container {
            flex-direction: row;
            min-height: 50vh;
            gap: 20px;
        }
    }

    @media (min-width: 1024px) {
        .solutions-container {
            min-height: 70vh;
        }
    }

    .solution-item {
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        min-width: 10px;
        height: 300px;
        transition: flex 700ms cubic-bezier(0.25, 0.46, 0.45, 0.94);
        cursor: pointer;
        overflow: hidden;
        border-radius: 8px;
        flex: 4;
    }

    @media (min-width: 768px) {
        .solution-item {
            height: 400px;
        }
    }

    @media (min-width: 1024px) {
        .solution-item {
            min-width: 150px;
            height: 490px;
            flex: 1;
        }
    }

    .solution-item.active {
        flex: 10;
    }

    @media (min-width: 1024px) {
        .solution-item.active {
            flex: 3.5;
        }
    }

    .solution-image {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        z-index: 1;
    }

    .solution-overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        display: flex;
        flex-direction: column;
        gap: 16px;
        min-height: 70px;
        background: linear-gradient(to bottom, transparent 0%, transparent 20%, rgba(0, 0, 0, 0.7) 70%, rgba(0, 0, 0, 1) 100%);
        padding: 8px;
        transition: all 500ms ease;
        z-index: 2;
    }

    @media (min-width: 1024px) {
        .solution-overlay {
            min-height: 100px;
            padding: 16px;
        }
    }

    .solution-item.active .solution-overlay {
        padding: 24px;
        background: linear-gradient(to bottom, transparent 0%, transparent 20%, rgba(0, 0, 0, 0.8) 70%, rgba(0, 0, 0, 1) 100%);
    }

    .solution-heading {
        color: white;
        font-weight: 600;
        margin-bottom: 4px;
        transition: all 1000ms ease;
        transform: translateY(0);
        font-size: 12px;
    }

    @media (min-width: 1024px) {
        .solution-heading {
            font-size: 13px;
        }
    }

    .solution-item.active .solution-heading {
        font-size: 16px;
        margin-bottom: 8px;
        transform: translateY(0);
    }

    @media (min-width: 1024px) {
        .solution-item.active .solution-heading {
            font-size: 24px;
        }
    }

    .solution-item:not(.active) .solution-heading {
        transform: translateY(10px);
    }

    .solution-detail {
        display: none;
        color: white;
        font-size: 12px;
        opacity: 0;
        transform: translateY(5px);
        transition: opacity 300ms ease, transform 300ms ease;
        transition-delay: 0ms;
    }

    @media (min-width: 1024px) {
        .solution-detail {
            font-size: 14px;
        }
    }

    .solution-item.active .solution-detail {
        display: block;
        opacity: 1;
        transform: translateY(0);
        transition-delay: 500ms;
    }

    /* Demo styles */
    .demo-wrapper {
        max-width: 1200px;
        margin: 0 auto;
    }

    .demo-title {
        text-align: center;
        margin-bottom: 40px;
        font-size: 2rem;
        color: #333;
    }
</style>
<section>
    <div class="container">
        <div class="demo-wrapper mt-5 pt-5">
            <h2 class="afi-clientele-title text-center mb-5" style="color:#002D60;">Solutions Component</h2>

            <div id="solutions-container" class="solutions-container">
                <!-- Solutions will be dynamically generated here -->
            </div>
        </div>
    </div>
</section>

<!-- Clientele Section -->
<div class="afi-clientele-section text-center">
    <div class="container">
        <h2 class="afi-clientele-title">Our Clientele</h2>
        <p style="font-size:1.2rem; color:black; opacity:0.8;">Trusted by leading brands worldwide.</p>
        <div>
            <img style="max-width:100%" src="<?= base_url('assets/image.png') ?>" alt="Client Logo">
        </div>
    </div>
</div>




<script>
    // Sample data - replace with your actual data
    const solutionsData = [{
            heading: "Customer-Centric Approach",
            detail: "Every step we take is designed with you in mind. From initial design to final delivery, your satisfaction drives our process.",
            image: "assets/sol/1.jpg"
        },
        {
            heading: "Unmatched Design Expertise",
            detail: "With a team of over 1,200 skilled professionals, we transform cutting-edge trends into versatile realities that anticipate market demands and excite consumers.",
            image: "assets/sol/2.jpg"
        },
        {
            heading: "Efficient and Ethical Production",
            detail: "Our production capabilities are not just robust—they’re responsible. We offer high-quality products while adhering to the strictest ethical standards, ensuring value without compromise.",
            image: "assets/sol/3.jpg"
        },
        {
            heading: "Adaptable to Your Needs",
            detail: "No vision is too big or too small. Our flexible production system can adapt to any requirement, helping brands of all sizes achieve their fashion aspirations.",
            image: "assets/sol/4.jpg"
        },
        {
            heading: "Assured Quality Compliance",
            detail: "Our products are not just made—they’re made right. Certified by leading standards and continuously inspected, we guarantee products that are as durable as they are impressive.",
            image: "assets/sol/5.jpg"
        },
        {
            heading: "Technology-Driven Operations",
            detail: "Leveraging the latest in digital innovations, we ensure that our operations are as efficient, transparent, and future-ready as they are effective, keeping you—and your brand—a step ahead in a competitive world.",
            image: "assets/sol/6.jpg"
        }
    ];

    class Solutions {
        constructor(containerId, data) {
            this.container = document.getElementById(containerId);
            this.data = data;
            this.activeIndex = 0;
            this.init();
        }

        init() {
            this.render();
            this.attachEventListeners();
        }

        render() {
            this.container.innerHTML = '';

            this.data.forEach((solution, index) => {
                const solutionElement = this.createSolutionElement(solution, index);
                this.container.appendChild(solutionElement);
            });

            this.updateActiveState();
        }

        createSolutionElement(solution, index) {
            const div = document.createElement('div');
            div.className = 'solution-item';
            div.dataset.index = index;

            div.innerHTML = `
                    <img 
                        src="${solution.image}" 
                        alt="${solution.heading}" 
                        class="solution-image"
                    />
                    <div class="solution-overlay">
                        <h3 class="solution-heading">${solution.heading}</h3>
                        <p class="solution-detail">${solution.detail}</p>
                    </div>
                `;

            return div;
        }

        attachEventListeners() {
            const solutionItems = this.container.querySelectorAll('.solution-item');

            solutionItems.forEach((item, index) => {
                item.addEventListener('click', () => {
                    this.setActiveIndex(index);
                });
            });
        }

        setActiveIndex(newIndex) {
            if (newIndex !== this.activeIndex) {
                this.activeIndex = newIndex;
                this.updateActiveState();
            }
        }

        updateActiveState() {
            const solutionItems = this.container.querySelectorAll('.solution-item');

            solutionItems.forEach((item, index) => {
                if (index === this.activeIndex) {
                    item.classList.add('active');
                } else {
                    item.classList.remove('active');
                }
            });
        }
    }

    // Initialize the Solutions component when the DOM is loaded
    document.addEventListener('DOMContentLoaded', () => {
        new Solutions('solutions-container', solutionsData);
    });
</script>
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
        .afi-hero-video {
            height: 60vh;
        }

        .afi-clientele-title {
            font-size: 2rem;
        }
    }

    @media (max-width: 480px) {
        .afi-hero-video {
            height: 50vh;
        }

        .afi-clientele-title {
            font-size: 1.5rem;
        }
    }
</style>