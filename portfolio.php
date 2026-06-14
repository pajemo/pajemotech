<?php
$pageTitle = 'Portfolio';
$pageDescription = 'Explore our portfolio of successful web design and development projects in Ghana. See websites, e-commerce platforms, and digital solutions we\'ve created for businesses in Accra and across Ghana.';
$pageKeywords = 'web design portfolio Ghana, website examples, Ghana web development projects, e-commerce websites, business websites Accra, responsive web design examples';
include 'includes/header.php';
?>

    <!-- Page Header -->
    <section class="section" style="background: linear-gradient(135deg, var(--primary-color), var(--primary-light)); color: white; padding: 8rem 0 4rem; margin-top: 80px;">
        <div class="container">
            <div class="text-center" data-aos="fade-up">
                <h1 style="color: white; font-size: 4rem; margin-bottom: 1.5rem;">Our Portfolio</h1>
                <p style="font-size: 1.25rem; color: rgba(255,255,255,0.9); max-width: 600px; margin: 0 auto;">
                    Discover our recent projects and see how we've helped businesses achieve their digital goals.
                </p>
            </div>
        </div>
    </section>

    <!-- Portfolio Filter -->
    <section class="section" style="padding: 2rem 0;">
        <div class="container">
            <div class="text-center" data-aos="fade-up">
                <div style="display: inline-flex; gap: 1rem; flex-wrap: wrap; justify-content: center; background: var(--light-gray); padding: 1rem; border-radius: 1rem;">
                    <button class="portfolio-filter-btn btn btn-outline active" data-filter="all">All Projects</button>
                    <button class="portfolio-filter-btn btn btn-outline" data-filter="web-design">Web Design</button>
                    <button class="portfolio-filter-btn btn btn-outline" data-filter="web-development">Web Development</button>
                    <button class="portfolio-filter-btn btn btn-outline" data-filter="ecommerce">E-commerce</button>
                    <button class="portfolio-filter-btn btn btn-outline" data-filter="branding">Branding</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Grid -->
    <section class="section" style="padding-top: 0;">
        <div class="container">
            <div class="grid grid-cols-3 portfolio-grid">
                <!-- Project 1 -->
                <div class="card portfolio-item" data-category="web-development ecommerce" data-aos="fade-up" data-aos-delay="100">
                    <div style="position: relative; overflow: hidden;">
                        <img src="assets/images/portfolio-1.jpg" alt="TechStore E-commerce" style="width: 100%; height: 300px; object-fit: cover; transition: transform 0.3s ease;">
                        <div style="position: absolute; inset: 0; background: linear-gradient(135deg, rgba(26, 54, 93, 0.95), rgba(212, 175, 55, 0.95)); opacity: 0; transition: opacity 0.3s ease; display: flex; align-items: center; justify-content: center; flex-direction: column; color: white; text-align: center; padding: 2rem;">
                            <h3 style="color: white; margin-bottom: 1rem; font-size: 1.5rem;">TechStore E-commerce</h3>
                            <p style="margin-bottom: 2rem; color: rgba(255,255,255,0.9);">
                                Complete online electronics store with advanced filtering, payment processing, and inventory management.
                            </p>
                            <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
                                <span style="background: rgba(255,255,255,0.2); padding: 0.5rem 1rem; border-radius: 1rem; font-size: 0.875rem;">E-commerce</span>
                                <span style="background: rgba(255,255,255,0.2); padding: 0.5rem 1rem; border-radius: 1rem; font-size: 0.875rem;">PHP</span>
                                <span style="background: rgba(255,255,255,0.2); padding: 0.5rem 1rem; border-radius: 1rem; font-size: 0.875rem;">MySQL</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h4 style="margin-bottom: 0.5rem;">TechStore E-commerce Platform</h4>
                        <p style="color: var(--secondary-color); margin-bottom: 1rem;">Modern electronics store with seamless shopping experience</p>
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <span style="color: var(--accent-color); font-weight: 500;">E-commerce Development</span>
                            <a href="#" style="color: var(--primary-color);">
                                <i class="fas fa-external-link-alt"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Project 2 -->
                <div class="card portfolio-item" data-category="web-design branding" data-aos="fade-up" data-aos-delay="200">
                    <div style="position: relative; overflow: hidden;">
                        <img src="assets/images/portfolio-2.jpg" alt="Creative Agency Website" style="width: 100%; height: 300px; object-fit: cover; transition: transform 0.3s ease;">
                        <div style="position: absolute; inset: 0; background: linear-gradient(135deg, rgba(26, 54, 93, 0.95), rgba(212, 175, 55, 0.95)); opacity: 0; transition: opacity 0.3s ease; display: flex; align-items: center; justify-content: center; flex-direction: column; color: white; text-align: center; padding: 2rem;">
                            <h3 style="color: white; margin-bottom: 1rem; font-size: 1.5rem;">Creative Agency Rebrand</h3>
                            <p style="margin-bottom: 2rem; color: rgba(255,255,255,0.9);">
                                Complete brand redesign and website development for a creative marketing agency.
                            </p>
                            <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
                                <span style="background: rgba(255,255,255,0.2); padding: 0.5rem 1rem; border-radius: 1rem; font-size: 0.875rem;">Branding</span>
                                <span style="background: rgba(255,255,255,0.2); padding: 0.5rem 1rem; border-radius: 1rem; font-size: 0.875rem;">Web Design</span>
                                <span style="background: rgba(255,255,255,0.2); padding: 0.5rem 1rem; border-radius: 1rem; font-size: 0.875rem;">React</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h4 style="margin-bottom: 0.5rem;">Creative Agency Rebrand</h4>
                        <p style="color: var(--secondary-color); margin-bottom: 1rem;">Brand identity and website for marketing agency</p>
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <span style="color: var(--accent-color); font-weight: 500;">Branding & Design</span>
                            <a href="#" style="color: var(--primary-color);">
                                <i class="fas fa-external-link-alt"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Project 3 -->
                <div class="card portfolio-item" data-category="web-development" data-aos="fade-up" data-aos-delay="300">
                    <div style="position: relative; overflow: hidden;">
                        <img src="assets/images/portfolio-3.jpg" alt="Restaurant Management" style="width: 100%; height: 300px; object-fit: cover; transition: transform 0.3s ease;">
                        <div style="position: absolute; inset: 0; background: linear-gradient(135deg, rgba(26, 54, 93, 0.95), rgba(212, 175, 55, 0.95)); opacity: 0; transition: opacity 0.3s ease; display: flex; align-items: center; justify-content: center; flex-direction: column; color: white; text-align: center; padding: 2rem;">
                            <h3 style="color: white; margin-bottom: 1rem; font-size: 1.5rem;">Restaurant Management</h3>
                            <p style="margin-bottom: 2rem; color: rgba(255,255,255,0.9);">
                                Custom restaurant management system with online ordering and table reservations.
                            </p>
                            <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
                                <span style="background: rgba(255,255,255,0.2); padding: 0.5rem 1rem; border-radius: 1rem; font-size: 0.875rem;">Web App</span>
                                <span style="background: rgba(255,255,255,0.2); padding: 0.5rem 1rem; border-radius: 1rem; font-size: 0.875rem;">Laravel</span>
                                <span style="background: rgba(255,255,255,0.2); padding: 0.5rem 1rem; border-radius: 1rem; font-size: 0.875rem;">Vue.js</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h4 style="margin-bottom: 0.5rem;">Restaurant Management System</h4>
                        <p style="color: var(--secondary-color); margin-bottom: 1rem;">Complete solution for restaurant operations</p>
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <span style="color: var(--accent-color); font-weight: 500;">Web Application</span>
                            <a href="#" style="color: var(--primary-color);">
                                <i class="fas fa-external-link-alt"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Project 4 -->
                <div class="card portfolio-item" data-category="web-design web-development" data-aos="fade-up" data-aos-delay="400">
                    <div style="position: relative; overflow: hidden;">
                        <img src="assets/images/portfolio-4.JPG" alt="Healthcare Platform" style="width: 100%; height: 300px; object-fit: cover; transition: transform 0.3s ease;">
                        <div style="position: absolute; inset: 0; background: linear-gradient(135deg, rgba(26, 54, 93, 0.95), rgba(212, 175, 55, 0.95)); opacity: 0; transition: opacity 0.3s ease; display: flex; align-items: center; justify-content: center; flex-direction: column; color: white; text-align: center; padding: 2rem;">
                            <h3 style="color: white; margin-bottom: 1rem; font-size: 1.5rem;">Healthcare Platform</h3>
                            <p style="margin-bottom: 2rem; color: rgba(255,255,255,0.9);">
                                Patient management system with appointment scheduling and telemedicine features.
                            </p>
                            <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
                                <span style="background: rgba(255,255,255,0.2); padding: 0.5rem 1rem; border-radius: 1rem; font-size: 0.875rem;">Healthcare</span>
                                <span style="background: rgba(255,255,255,0.2); padding: 0.5rem 1rem; border-radius: 1rem; font-size: 0.875rem;">PHP</span>
                                <span style="background: rgba(255,255,255,0.2); padding: 0.5rem 1rem; border-radius: 1rem; font-size: 0.875rem;">Bootstrap</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h4 style="margin-bottom: 0.5rem;">Healthcare Management Platform</h4>
                        <p style="color: var(--secondary-color); margin-bottom: 1rem;">Digital solution for medical practices</p>
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <span style="color: var(--accent-color); font-weight: 500;">Full Stack Development</span>
                            <a href="#" style="color: var(--primary-color);">
                                <i class="fas fa-external-link-alt"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Project 5 -->
                <div class="card portfolio-item" data-category="ecommerce web-development" data-aos="fade-up" data-aos-delay="500">
                    <div style="position: relative; overflow: hidden;">
                        <img src="assets/images/portfolio-5.PNG" alt="Fashion Store" style="width: 100%; height: 300px; object-fit: cover; transition: transform 0.3s ease;">
                        <div style="position: absolute; inset: 0; background: linear-gradient(135deg, rgba(26, 54, 93, 0.95), rgba(212, 175, 55, 0.95)); opacity: 0; transition: opacity 0.3s ease; display: flex; align-items: center; justify-content: center; flex-direction: column; color: white; text-align: center; padding: 2rem;">
                            <h3 style="color: white; margin-bottom: 1rem; font-size: 1.5rem;">Fashion E-commerce</h3>
                            <p style="margin-bottom: 2rem; color: rgba(255,255,255,0.9);">
                                Luxury fashion store with advanced product filtering and wishlist functionality.
                            </p>
                            <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
                                <span style="background: rgba(255,255,255,0.2); padding: 0.5rem 1rem; border-radius: 1rem; font-size: 0.875rem;">Fashion</span>
                                <span style="background: rgba(255,255,255,0.2); padding: 0.5rem 1rem; border-radius: 1rem; font-size: 0.875rem;">WooCommerce</span>
                                <span style="background: rgba(255,255,255,0.2); padding: 0.5rem 1rem; border-radius: 1rem; font-size: 0.875rem;">WordPress</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h4 style="margin-bottom: 0.5rem;">Luxury Fashion E-commerce</h4>
                        <p style="color: var(--secondary-color); margin-bottom: 1rem;">High-end fashion online boutique</p>
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <span style="color: var(--accent-color); font-weight: 500;">E-commerce Design</span>
                            <a href="#" style="color: var(--primary-color);">
                                <i class="fas fa-external-link-alt"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Project 6 -->
                <div class="card portfolio-item" data-category="web-design branding" data-aos="fade-up" data-aos-delay="600">
                    <div style="position: relative; overflow: hidden;">
                        <img src="assets/images/portfolio-6.PNG" alt="Real Estate Portal" style="width: 100%; height: 300px; object-fit: cover; transition: transform 0.3s ease;">
                        <div style="position: absolute; inset: 0; background: linear-gradient(135deg, rgba(26, 54, 93, 0.95), rgba(212, 175, 55, 0.95)); opacity: 0; transition: opacity 0.3s ease; display: flex; align-items: center; justify-content: center; flex-direction: column; color: white; text-align: center; padding: 2rem;">
                            <h3 style="color: white; margin-bottom: 1rem; font-size: 1.5rem;">Real Estate Portal</h3>
                            <p style="margin-bottom: 2rem; color: rgba(255,255,255,0.9);">
                                Modern property listing platform with advanced search and virtual tours.
                            </p>
                            <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
                                <span style="background: rgba(255,255,255,0.2); padding: 0.5rem 1rem; border-radius: 1rem; font-size: 0.875rem;">Real Estate</span>
                                <span style="background: rgba(255,255,255,0.2); padding: 0.5rem 1rem; border-radius: 1rem; font-size: 0.875rem;">Laravel</span>
                                <span style="background: rgba(255,255,255,0.2); padding: 0.5rem 1rem; border-radius: 1rem; font-size: 0.875rem;">Maps API</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h4 style="margin-bottom: 0.5rem;">Real Estate Portal</h4>
                        <p style="color: var(--secondary-color); margin-bottom: 1rem;">Advanced property listing platform</p>
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <span style="color: var(--accent-color); font-weight: 500;">Web Platform</span>
                            <a href="#" style="color: var(--primary-color);">
                                <i class="fas fa-external-link-alt"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="section" style="background: var(--light-gray);">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2 class="section-title">Project Statistics</h2>
                <p class="section-subtitle">
                    Numbers that speak to our commitment to excellence and client satisfaction.
                </p>
            </div>
            
            <div class="grid grid-cols-4 stats-grid">
                <div class="text-center" data-aos="fade-up" data-aos-delay="100">
                    <div style="width: 100px; height: 100px; background: linear-gradient(135deg, var(--accent-color), var(--accent-dark)); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem;">
                        <i class="fas fa-project-diagram" style="color: white; font-size: 2.5rem;"></i>
                    </div>
                    <h3 style="font-size: 2.5rem; color: var(--accent-color); margin-bottom: 0.5rem;" class="counter" data-target="150">150</h3>
                    <p style="color: var(--secondary-color); font-weight: 500;">Projects Completed</p>
                </div>
                
                <div class="text-center" data-aos="fade-up" data-aos-delay="200">
                    <div style="width: 100px; height: 100px; background: linear-gradient(135deg, var(--primary-color), var(--primary-light)); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem;">
                        <i class="fas fa-users" style="color: white; font-size: 2.5rem;"></i>
                    </div>
                    <h3 style="font-size: 2.5rem; color: var(--primary-color); margin-bottom: 0.5rem;" class="counter" data-target="100">100</h3>
                    <p style="color: var(--secondary-color); font-weight: 500;">Happy Clients</p>
                </div>
                
                <div class="text-center" data-aos="fade-up" data-aos-delay="300">
                    <div style="width: 100px; height: 100px; background: linear-gradient(135deg, var(--secondary-color), var(--secondary-dark)); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem;">
                        <i class="fas fa-clock" style="color: white; font-size: 2.5rem;"></i>
                    </div>
                    <h3 style="font-size: 2.5rem; color: var(--secondary-color); margin-bottom: 0.5rem;" class="counter" data-target="98">98</h3>
                    <p style="color: var(--secondary-color); font-weight: 500;">% On-Time Delivery</p>
                </div>
                
                <div class="text-center" data-aos="fade-up" data-aos-delay="400">
                    <div style="width: 100px; height: 100px; background: linear-gradient(135deg, var(--success), #38a169); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem;">
                        <i class="fas fa-star" style="color: white; font-size: 2.5rem;"></i>
                    </div>
                    <h3 style="font-size: 2.5rem; color: var(--success); margin-bottom: 0.5rem;" class="counter" data-target="5">5</h3>
                    <p style="color: var(--secondary-color); font-weight: 500;">Years Experience</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="section" style="background: linear-gradient(135deg, var(--primary-color), var(--primary-light)); color: white; text-align: center;">
        <div class="container">
            <div data-aos="fade-up">
                <h2 style="color: white; font-size: 2.5rem; margin-bottom: 1.5rem;">Like What You See?</h2>
                <p style="font-size: 1.125rem; color: rgba(255,255,255,0.9); margin-bottom: 2rem; max-width: 500px; margin-left: auto; margin-right: auto;">
                    Let's discuss your project and create something amazing together.
                </p>
                <a href="contact.php" class="btn btn-accent btn-lg">
                    <i class="fas fa-rocket"></i> Start Your Project
                </a>
            </div>
        </div>
    </section>

<style>
/* Portfolio hover effects */
.portfolio-item:hover img {
    transform: scale(1.05);
}

.portfolio-item:hover > div > div:last-child {
    opacity: 1;
}

/* Filter button styles */
.portfolio-filter-btn.active {
    background: var(--primary-color);
    color: white;
    border-color: var(--primary-color);
}
</style>

<?php include 'includes/footer.php'; ?>