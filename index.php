<?php
$pageTitle = 'Home';
$pageDescription = 'Pajemotech - Leading Web Design & Development Company in Ghana. We create stunning, responsive websites, e-commerce platforms, and digital solutions that drive business growth. Professional web services in Accra and across Ghana.';
$pageKeywords = 'web design Ghana, web development Accra, Ghana website design, e-commerce development, digital marketing Ghana, responsive web design, SEO services Ghana, professional website design Accra, Ghana web developers, business websites Ghana';
include 'includes/header.php';
?>

    <!-- Hero Carousel Section -->
    <section class="hero-carousel">
        <div class="carousel-container">
            <!-- Slide 1 -->
            <div class="carousel-slide active" style="background-image: linear-gradient(135deg, rgba(26, 54, 93, 0.8), rgba(44, 82, 130, 0.8)), url('assets/images/hero-1.jpg');">
                <div class="carousel-overlay">
                    <div class="carousel-content" data-aos="fade-up">
                        <p class="carousel-subtitle">Where Innovation Meets Design</p>
                        <p class="carousel-description">
                            We transform your ideas into powerful digital experiences that captivate your audience and drive business growth.
                        </p>
                        <div class="carousel-buttons">
                            <a href="portfolio.php" class="btn btn-accent btn-lg">
                                <i class="fas fa-eye"></i> View Our Work
                            </a>
                            <a href="contact.php" class="btn btn-outline btn-lg">
                                <i class="fas fa-comment"></i> Start Project
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Slide 2 -->
            <div class="carousel-slide" style="background-image: linear-gradient(135deg, rgba(26, 54, 93, 0.8), rgba(44, 82, 130, 0.8)), url('assets/images/hero-2.PNG');">
                <div class="carousel-overlay">
                    <div class="carousel-content" data-aos="fade-up">
                        <p class="carousel-subtitle">Responsive • Fast • Secure</p>
                        <p class="carousel-description">
                            Custom web development tailored to your business needs. From concept to launch, we deliver exceptional results.
                        </p>
                        <div class="carousel-buttons">
                            <a href="services.php" class="btn btn-accent btn-lg">
                                <i class="fas fa-cogs"></i> Our Services
                            </a>
                            <a href="about.php" class="btn btn-outline btn-lg">
                                <i class="fas fa-users"></i> About Us
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Slide 3 -->
            <div class="carousel-slide" style="background-image: linear-gradient(135deg, rgba(26, 54, 93, 0.8), rgba(44, 82, 130, 0.8)), url('assets/images/hero-3.JPG');">
                <div class="carousel-overlay">
                    <div class="carousel-content" data-aos="fade-up">
                        <p class="carousel-subtitle">Premium Quality • Timely Delivery</p>
                        <p class="carousel-description">
                            Partner with us for innovative solutions that elevate your brand and exceed your expectations.
                        </p>
                        <div class="carousel-buttons">
                            <a href="contact.php" class="btn btn-accent btn-lg">
                                <i class="fas fa-rocket"></i> Get Started
                            </a>
                            <a href="blog.php" class="btn btn-outline btn-lg">
                                <i class="fas fa-lightbulb"></i> Learn More
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Carousel Navigation -->
        <div class="carousel-nav">
            <span class="carousel-dot active" data-slide="0"></span>
            <span class="carousel-dot" data-slide="1"></span>
            <span class="carousel-dot" data-slide="2"></span>
        </div>
        
        <!-- Carousel Arrows -->
        <button class="carousel-arrow prev" aria-label="Previous slide">
            <i class="fas fa-chevron-left"></i>
        </button>
        <button class="carousel-arrow next" aria-label="Next slide">
            <i class="fas fa-chevron-right"></i>
        </button>
    </section>

    <!-- About Section -->
    <section class="section" id="about">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2 class="section-title">Why Choose Pajemotech?</h2>
                <p class="section-subtitle">
                    We combine creativity with technical expertise to deliver outstanding digital solutions that drive real business results.
                </p>
            </div>
            
            <div class="grid grid-cols-2" style="gap: 4rem; align-items: center;">
                <div data-aos="fade-right">
                    <h3 style="font-size: 2.25rem; margin-bottom: 1.5rem;">
                        Transforming Ideas Into Digital Reality
                    </h3>
                    <p style="font-size: 1.125rem; margin-bottom: 2rem; color: var(--secondary-color);">
                        At Pajemotech, we don't just build websites – we craft digital experiences that tell your story, engage your audience, and drive your business forward. Our team of passionate designers and developers brings years of expertise to every project.
                    </p>
                    
                    <div style="margin-bottom: 2rem;">
                        <div style="display: flex; align-items: center; gap: 1rem; margin-bottom: 1rem;">
                            <div style="width: 50px; height: 50px; background: var(--accent-color); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-award" style="color: white; font-size: 1.25rem;"></i>
                            </div>
                            <div>
                                <h4 style="margin: 0; color: var(--primary-color);">Premium Quality</h4>
                                <p style="margin: 0; color: var(--secondary-color);">Exceptional standards in every project</p>
                            </div>
                        </div>
                        
                        <div style="display: flex; align-items: center; gap: 1rem; margin-bottom: 1rem;">
                            <div style="width: 50px; height: 50px; background: var(--accent-color); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-clock" style="color: white; font-size: 1.25rem;"></i>
                            </div>
                            <div>
                                <h4 style="margin: 0; color: var(--primary-color);">Timely Delivery</h4>
                                <p style="margin: 0; color: var(--secondary-color);">On-time project completion, every time</p>
                            </div>
                        </div>
                        
                        <div style="display: flex; align-items: center; gap: 1rem;">
                            <div style="width: 50px; height: 50px; background: var(--accent-color); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-headset" style="color: white; font-size: 1.25rem;"></i>
                            </div>
                            <div>
                                <h4 style="margin: 0; color: var(--primary-color);">24/7 Support</h4>
                                <p style="margin: 0; color: var(--secondary-color);">Ongoing support and maintenance</p>
                            </div>
                        </div>
                    </div>
                    
                    <a href="about.php" class="btn btn-primary">
                        <i class="fas fa-arrow-right"></i> Learn More About Us
                    </a>
                </div>
                
                <div data-aos="fade-left">
                    <div style="position: relative;">
                        <img src="assets/images/about-us.JPG" alt="About Pajemotech" 
                             style="width: 100%; height: 400px; object-fit: cover; border-radius: 1rem; box-shadow: var(--shadow-lg);">
                        
                        <!-- Stats Overlay -->
                        <div style="position: absolute; bottom: -30px; left: 30px; right: 30px; background: white; padding: 2rem; border-radius: 1rem; box-shadow: var(--shadow-xl);">
                            <div class="grid grid-cols-3" style="gap: 1rem; text-align: center;">
                                <div>
                                    <h4 style="font-size: 2rem; color: var(--accent-color); margin: 0;">150+</h4>
                                    <p style="margin: 0; font-size: 0.875rem; color: var(--secondary-color);">Projects Done</p>
                                </div>
                                <div>
                                    <h4 style="font-size: 2rem; color: var(--accent-color); margin: 0;">100+</h4>
                                    <p style="margin: 0; font-size: 0.875rem; color: var(--secondary-color);">Happy Clients</p>
                                </div>
                                <div>
                                    <h4 style="font-size: 2rem; color: var(--accent-color); margin: 0;">5+</h4>
                                    <p style="margin: 0; font-size: 0.875rem; color: var(--secondary-color);">Years Experience</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="section" style="background: var(--light-gray);" id="services">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2 class="section-title">Our Services</h2>
                <p class="section-subtitle">
                    From concept to launch, we offer comprehensive digital solutions to help your business thrive online.
                </p>
            </div>
            
            <div class="grid grid-cols-3 services-grid">
                <div class="card service-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="card-body" style="text-align: center; padding: 3rem 2rem;">
                        <div style="width: 80px; height: 80px; background: linear-gradient(135deg, var(--accent-color), var(--accent-dark)); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 2rem;">
                            <i class="fas fa-palette" style="color: white; font-size: 2rem;"></i>
                        </div>
                        <h3 style="margin-bottom: 1rem;">Web Design</h3>
                        <p style="margin-bottom: 2rem;">
                            Beautiful, user-friendly designs that capture your brand essence and engage your visitors.
                        </p>
                        <ul style="list-style: none; text-align: left; color: var(--secondary-color);">
                            <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--accent-color); margin-right: 0.5rem;"></i> Custom UI/UX Design</li>
                            <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--accent-color); margin-right: 0.5rem;"></i> Responsive Layouts</li>
                            <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--accent-color); margin-right: 0.5rem;"></i> Brand Identity</li>
                            <li><i class="fas fa-check" style="color: var(--accent-color); margin-right: 0.5rem;"></i> Wireframing & Prototyping</li>
                        </ul>
                    </div>
                </div>
                
                <div class="card service-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="card-body" style="text-align: center; padding: 3rem 2rem;">
                        <div style="width: 80px; height: 80px; background: linear-gradient(135deg, var(--primary-color), var(--primary-light)); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 2rem;">
                            <i class="fas fa-code" style="color: white; font-size: 2rem;"></i>
                        </div>
                        <h3 style="margin-bottom: 1rem;">Web Development</h3>
                        <p style="margin-bottom: 2rem;">
                            Robust, scalable web applications built with the latest technologies and best practices.
                        </p>
                        <ul style="list-style: none; text-align: left; color: var(--secondary-color);">
                            <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--accent-color); margin-right: 0.5rem;"></i> Frontend Development</li>
                            <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--accent-color); margin-right: 0.5rem;"></i> Backend Development</li>
                            <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--accent-color); margin-right: 0.5rem;"></i> Database Design</li>
                            <li><i class="fas fa-check" style="color: var(--accent-color); margin-right: 0.5rem;"></i> API Integration</li>
                        </ul>
                    </div>
                </div>
                
                <div class="card service-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="card-body" style="text-align: center; padding: 3rem 2rem;">
                        <div style="width: 80px; height: 80px; background: linear-gradient(135deg, var(--secondary-color), var(--secondary-dark)); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 2rem;">
                            <i class="fas fa-shopping-cart" style="color: white; font-size: 2rem;"></i>
                        </div>
                        <h3 style="margin-bottom: 1rem;">E-commerce Solutions</h3>
                        <p style="margin-bottom: 2rem;">
                            Complete online store solutions that drive sales and provide seamless shopping experiences.
                        </p>
                        <ul style="list-style: none; text-align: left; color: var(--secondary-color);">
                            <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--accent-color); margin-right: 0.5rem;"></i> Custom Store Design</li>
                            <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--accent-color); margin-right: 0.5rem;"></i> Payment Integration</li>
                            <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--accent-color); margin-right: 0.5rem;"></i> Inventory Management</li>
                            <li><i class="fas fa-check" style="color: var(--accent-color); margin-right: 0.5rem;"></i> Order Processing</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div style="text-align: center; margin-top: 3rem;" data-aos="fade-up">
                <a href="services.php" class="btn btn-primary btn-lg">
                    <i class="fas fa-arrow-right"></i> View All Services
                </a>
            </div>
        </div>
    </section>

    <!-- Portfolio Showcase -->
    <section class="section" id="portfolio">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2 class="section-title">Latest Work</h2>
                <p class="section-subtitle">
                    Discover our recent projects and see how we've helped businesses achieve their digital goals.
                </p>
            </div>
            
            <div class="grid grid-cols-3 portfolio-grid">
                <div class="card" data-aos="fade-up" data-aos-delay="100">
                    <div style="position: relative; overflow: hidden;">
                        <img src="assets/images/portfolio-1.JPG" alt="E-commerce Platform" 
                             style="width: 100%; height: 250px; object-fit: cover; transition: transform 0.3s ease;">
                        <div style="position: absolute; inset: 0; background: linear-gradient(135deg, rgba(26, 54, 93, 0.9), rgba(212, 175, 55, 0.9)); opacity: 0; transition: opacity 0.3s ease; display: flex; align-items: center; justify-content: center; flex-direction: column; color: white; text-align: center; padding: 2rem;">
                            <br>
                        <h4 style="color: white; margin-bottom: 1rem;">E-commerce Platform</h4>
                            <p style="margin-bottom: 1.5rem; color: rgba(255,255,255,0.9);">Modern online store with advanced features</p>
                            <a href="portfolio.php" class="btn btn-accent">View Project</a>
                        </div>
                    </div>
                </div>
                
                <div class="card" data-aos="fade-up" data-aos-delay="200">
                    <div style="position: relative; overflow: hidden;">
                        <img src="assets/images/portfolio-2.jpg" alt="Corporate Website" 
                             style="width: 100%; height: 250px; object-fit: cover; transition: transform 0.3s ease;">
                        <div style="position: absolute; inset: 0; background: linear-gradient(135deg, rgba(26, 54, 93, 0.9), rgba(212, 175, 55, 0.9)); opacity: 0; transition: opacity 0.3s ease; display: flex; align-items: center; justify-content: center; flex-direction: column; color: white; text-align: center; padding: 2rem;">
                            <h4 style="color: white; margin-bottom: 1rem;">Corporate Website</h4>
                            <p style="margin-bottom: 1.5rem; color: rgba(255,255,255,0.9);">Professional business presence online</p>
                            <a href="portfolio.php" class="btn btn-accent">View Project</a>
                        </div>
                    </div>
                </div>
                
                <div class="card" data-aos="fade-up" data-aos-delay="300">
                    <div style="position: relative; overflow: hidden;">
                        <img src="assets/images/portfolio-3.jpg" alt="Mobile App" 
                             style="width: 100%; height: 250px; object-fit: cover; transition: transform 0.3s ease;">
                        <div style="position: absolute; inset: 0; background: linear-gradient(135deg, rgba(26, 54, 93, 0.9), rgba(212, 175, 55, 0.9)); opacity: 0; transition: opacity 0.3s ease; display: flex; align-items: center; justify-content: center; flex-direction: column; color: white; text-align: center; padding: 2rem;">
                            <h4 style="color: white; margin-bottom: 1rem;">Mobile Application</h4>
                            <p style="margin-bottom: 1.5rem; color: rgba(255,255,255,0.9);">Cross-platform mobile solution</p>
                            <a href="portfolio.php" class="btn btn-accent">View Project</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div style="text-align: center; margin-top: 3rem;" data-aos="fade-up">
                <a href="portfolio.php" class="btn btn-primary btn-lg">
                    <i class="fas fa-eye"></i> View Full Portfolio
                </a>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="section" style="background: linear-gradient(135deg, var(--primary-color), var(--primary-light)); color: white; text-align: center;">
        <div class="container">
            <div data-aos="fade-up">
                <h2 style="color: white; font-size: 3rem; margin-bottom: 1.5rem;">Ready to Start Your Project?</h2>
                <p style="font-size: 1.25rem; color: rgba(255,255,255,0.9); margin-bottom: 2.5rem; max-width: 600px; margin-left: auto; margin-right: auto;">
                    Let's transform your ideas into a powerful digital presence that drives real results for your business.
                </p>
                <div style="display: flex; gap: 1.5rem; justify-content: center; flex-wrap: wrap;">
                    <a href="contact.php" class="btn btn-accent btn-lg">
                        <i class="fas fa-rocket"></i> Start Your Project
                    </a>
                    <a href="tel:+233543943204" class="btn btn-outline btn-lg" style="border-color: white; color: white;">
                        <i class="fas fa-phone"></i> Call Us Now
                    </a>
                </div>
            </div>
        </div>
    </section>

<style>
/* Portfolio hover effects */
.portfolio-grid .card:hover img {
    transform: scale(1.05);
}

.portfolio-grid .card:hover > div > div:last-child {
    opacity: 1;
}

/* Service card hover effects */
.service-card:hover {
    transform: translateY(-10px);
}

/* Enhanced animations */
@keyframes fadeOut {
    from { opacity: 1; }
    to { opacity: 0; }
}

/* Mobile menu overlay */
body.mobile-menu-open::before {
    content: '';
    position: fixed;
    inset: 0;
    background: rgba(0, 0, 0, 0.5);
    z-index: var(--z-sticky);
}
</style>

<?php include 'includes/footer.php'; ?>