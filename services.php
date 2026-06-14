<?php
$pageTitle = 'Services';
$pageDescription = 'Comprehensive web design and development services in Ghana. We offer responsive web design, e-commerce development, SEO, digital marketing, and branding solutions for businesses in Accra and across Ghana.';
$pageKeywords = 'web design services Ghana, web development Accra, e-commerce development, SEO services Ghana, digital marketing, responsive web design, branding services, website maintenance Ghana';
include 'includes/header.php';
?>

    <!-- Page Header -->
    <section class="section" style="background: linear-gradient(135deg, var(--primary-color), var(--primary-light)); color: white; padding: 8rem 0 4rem; margin-top: 80px;">
        <div class="container">
            <div class="text-center" data-aos="fade-up">
                <h1 style="color: white; font-size: 4rem; margin-bottom: 1.5rem;">Our Services</h1>
                <p style="font-size: 1.25rem; color: rgba(255,255,255,0.9); max-width: 600px; margin: 0 auto;">
                    Comprehensive digital solutions to help your business succeed online.
                </p>
            </div>
        </div>
    </section>

    <!-- Services Overview -->
    <section class="section">
        <div class="container">
            <div class="grid grid-cols-2 services-grid">
                <!-- Web Design -->
                <div class="card" data-aos="fade-up" data-aos-delay="100" id="web-design">
                    <div class="card-body" style="padding: 3rem;">
                        <div style="display: flex; align-items: flex-start; gap: 2rem; margin-bottom: 2rem;">
                            <div style="width: 80px; height: 80px; background: linear-gradient(135deg, var(--accent-color), var(--accent-dark)); border-radius: 1rem; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                <i class="fas fa-palette" style="color: white; font-size: 2rem;"></i>
                            </div>
                            <div>
                                <h3 style="margin-bottom: 1rem; font-size: 1.75rem;">Web Design</h3>
                                <p style="color: var(--secondary-color); font-size: 1.125rem;">
                                    Create stunning, user-centered designs that captivate your audience and drive conversions.
                                </p>
                            </div>
                        </div>
                        
                        <div style="margin-bottom: 2rem;">
                            <h4 style="margin-bottom: 1rem; color: var(--primary-color);">What's Included:</h4>
                            <ul style="list-style: none; color: var(--secondary-color);">
                                <li style="margin-bottom: 0.75rem; display: flex; align-items: center;"><i class="fas fa-check" style="color: var(--accent-color); margin-right: 0.75rem;"></i> Custom UI/UX Design</li>
                                <li style="margin-bottom: 0.75rem; display: flex; align-items: center;"><i class="fas fa-check" style="color: var(--accent-color); margin-right: 0.75rem;"></i> Responsive Design for All Devices</li>
                                <li style="margin-bottom: 0.75rem; display: flex; align-items: center;"><i class="fas fa-check" style="color: var(--accent-color); margin-right: 0.75rem;"></i> Brand Identity Integration</li>
                                <li style="margin-bottom: 0.75rem; display: flex; align-items: center;"><i class="fas fa-check" style="color: var(--accent-color); margin-right: 0.75rem;"></i> Wireframing & Prototyping</li>
                                <li style="margin-bottom: 0.75rem; display: flex; align-items: center;"><i class="fas fa-check" style="color: var(--accent-color); margin-right: 0.75rem;"></i> User Experience Optimization</li>
                                <li style="display: flex; align-items: center;"><i class="fas fa-check" style="color: var(--accent-color); margin-right: 0.75rem;"></i> Style Guide & Asset Delivery</li>
                            </ul>
                        </div>
                        
                        <a href="contact.php" class="btn btn-primary">
                            <i class="fas fa-arrow-right"></i> Get Quote
                        </a>
                    </div>
                </div>
                
                <!-- Web Development -->
                <div class="card" data-aos="fade-up" data-aos-delay="200" id="web-development">
                    <div class="card-body" style="padding: 3rem;">
                        <div style="display: flex; align-items: flex-start; gap: 2rem; margin-bottom: 2rem;">
                            <div style="width: 80px; height: 80px; background: linear-gradient(135deg, var(--primary-color), var(--primary-light)); border-radius: 1rem; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                <i class="fas fa-code" style="color: white; font-size: 2rem;"></i>
                            </div>
                            <div>
                                <h3 style="margin-bottom: 1rem; font-size: 1.75rem;">Web Development</h3>
                                <p style="color: var(--secondary-color); font-size: 1.125rem;">
                                    Build robust, scalable web applications with cutting-edge technologies and best practices.
                                </p>
                            </div>
                        </div>
                        
                        <div style="margin-bottom: 2rem;">
                            <h4 style="margin-bottom: 1rem; color: var(--primary-color);">What's Included:</h4>
                            <ul style="list-style: none; color: var(--secondary-color);">
                                <li style="margin-bottom: 0.75rem; display: flex; align-items: center;"><i class="fas fa-check" style="color: var(--accent-color); margin-right: 0.75rem;"></i> Frontend Development (HTML, CSS, JS)</li>
                                <li style="margin-bottom: 0.75rem; display: flex; align-items: center;"><i class="fas fa-check" style="color: var(--accent-color); margin-right: 0.75rem;"></i> Backend Development (PHP, MySQL)</li>
                                <li style="margin-bottom: 0.75rem; display: flex; align-items: center;"><i class="fas fa-check" style="color: var(--accent-color); margin-right: 0.75rem;"></i> Content Management System</li>
                                <li style="margin-bottom: 0.75rem; display: flex; align-items: center;"><i class="fas fa-check" style="color: var(--accent-color); margin-right: 0.75rem;"></i> Database Design & Optimization</li>
                                <li style="margin-bottom: 0.75rem; display: flex; align-items: center;"><i class="fas fa-check" style="color: var(--accent-color); margin-right: 0.75rem;"></i> API Integration</li>
                                <li style="display: flex; align-items: center;"><i class="fas fa-check" style="color: var(--accent-color); margin-right: 0.75rem;"></i> Security Implementation</li>
                            </ul>
                        </div>
                        
                        <a href="contact.php" class="btn btn-primary">
                            <i class="fas fa-arrow-right"></i> Get Quote
                        </a>
                    </div>
                </div>
                
                <!-- E-commerce -->
                <div class="card" data-aos="fade-up" data-aos-delay="300" id="ecommerce">
                    <div class="card-body" style="padding: 3rem;">
                        <div style="display: flex; align-items: flex-start; gap: 2rem; margin-bottom: 2rem;">
                            <div style="width: 80px; height: 80px; background: linear-gradient(135deg, var(--secondary-color), var(--secondary-dark)); border-radius: 1rem; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                <i class="fas fa-shopping-cart" style="color: white; font-size: 2rem;"></i>
                            </div>
                            <div>
                                <h3 style="margin-bottom: 1rem; font-size: 1.75rem;">E-commerce Solutions</h3>
                                <p style="color: var(--secondary-color); font-size: 1.125rem;">
                                    Complete online store solutions that drive sales and provide seamless shopping experiences.
                                </p>
                            </div>
                        </div>
                        
                        <div style="margin-bottom: 2rem;">
                            <h4 style="margin-bottom: 1rem; color: var(--primary-color);">What's Included:</h4>
                            <ul style="list-style: none; color: var(--secondary-color);">
                                <li style="margin-bottom: 0.75rem; display: flex; align-items: center;"><i class="fas fa-check" style="color: var(--accent-color); margin-right: 0.75rem;"></i> Custom Store Design</li>
                                <li style="margin-bottom: 0.75rem; display: flex; align-items: center;"><i class="fas fa-check" style="color: var(--accent-color); margin-right: 0.75rem;"></i> Payment Gateway Integration</li>
                                <li style="margin-bottom: 0.75rem; display: flex; align-items: center;"><i class="fas fa-check" style="color: var(--accent-color); margin-right: 0.75rem;"></i> Inventory Management</li>
                                <li style="margin-bottom: 0.75rem; display: flex; align-items: center;"><i class="fas fa-check" style="color: var(--accent-color); margin-right: 0.75rem;"></i> Order Processing System</li>
                                <li style="margin-bottom: 0.75rem; display: flex; align-items: center;"><i class="fas fa-check" style="color: var(--accent-color); margin-right: 0.75rem;"></i> Shopping Cart & Checkout</li>
                                <li style="display: flex; align-items: center;"><i class="fas fa-check" style="color: var(--accent-color); margin-right: 0.75rem;"></i> Admin Dashboard</li>
                            </ul>
                        </div>
                        
                        <a href="contact.php" class="btn btn-primary">
                            <i class="fas fa-arrow-right"></i> Get Quote
                        </a>
                    </div>
                </div>
                
                <!-- Digital Marketing -->
                <div class="card" data-aos="fade-up" data-aos-delay="400" id="digital-marketing">
                    <div class="card-body" style="padding: 3rem;">
                        <div style="display: flex; align-items: flex-start; gap: 2rem; margin-bottom: 2rem;">
                            <div style="width: 80px; height: 80px; background: linear-gradient(135deg, var(--info), #3182ce); border-radius: 1rem; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                <i class="fas fa-bullhorn" style="color: white; font-size: 2rem;"></i>
                            </div>
                            <div>
                                <h3 style="margin-bottom: 1rem; font-size: 1.75rem;">Digital Marketing</h3>
                                <p style="color: var(--secondary-color); font-size: 1.125rem;">
                                    Comprehensive digital marketing strategies to increase your online visibility and drive traffic.
                                </p>
                            </div>
                        </div>
                        
                        <div style="margin-bottom: 2rem;">
                            <h4 style="margin-bottom: 1rem; color: var(--primary-color);">What's Included:</h4>
                            <ul style="list-style: none; color: var(--secondary-color);">
                                <li style="margin-bottom: 0.75rem; display: flex; align-items: center;"><i class="fas fa-check" style="color: var(--accent-color); margin-right: 0.75rem;"></i> SEO Optimization</li>
                                <li style="margin-bottom: 0.75rem; display: flex; align-items: center;"><i class="fas fa-check" style="color: var(--accent-color); margin-right: 0.75rem;"></i> Social Media Management</li>
                                <li style="margin-bottom: 0.75rem; display: flex; align-items: center;"><i class="fas fa-check" style="color: var(--accent-color); margin-right: 0.75rem;"></i> Content Marketing</li>
                                <li style="margin-bottom: 0.75rem; display: flex; align-items: center;"><i class="fas fa-check" style="color: var(--accent-color); margin-right: 0.75rem;"></i> Google Ads Management</li>
                                <li style="margin-bottom: 0.75rem; display: flex; align-items: center;"><i class="fas fa-check" style="color: var(--accent-color); margin-right: 0.75rem;"></i> Analytics & Reporting</li>
                                <li style="display: flex; align-items: center;"><i class="fas fa-check" style="color: var(--accent-color); margin-right: 0.75rem;"></i> Email Marketing</li>
                            </ul>
                        </div>
                        
                        <a href="contact.php" class="btn btn-primary">
                            <i class="fas fa-arrow-right"></i> Get Quote
                        </a>
                    </div>
                </div>
                
                <!-- Branding & Identity -->
                <div class="card" data-aos="fade-up" data-aos-delay="500" id="branding">
                    <div class="card-body" style="padding: 3rem;">
                        <div style="display: flex; align-items: flex-start; gap: 2rem; margin-bottom: 2rem;">
                            <div style="width: 80px; height: 80px; background: linear-gradient(135deg, var(--warning), #d69e2e); border-radius: 1rem; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                <i class="fas fa-star" style="color: white; font-size: 2rem;"></i>
                            </div>
                            <div>
                                <h3 style="margin-bottom: 1rem; font-size: 1.75rem;">Branding & Identity</h3>
                                <p style="color: var(--secondary-color); font-size: 1.125rem;">
                                    Build a strong, memorable brand identity that resonates with your target audience.
                                </p>
                            </div>
                        </div>
                        
                        <div style="margin-bottom: 2rem;">
                            <h4 style="margin-bottom: 1rem; color: var(--primary-color);">What's Included:</h4>
                            <ul style="list-style: none; color: var(--secondary-color);">
                                <li style="margin-bottom: 0.75rem; display: flex; align-items: center;"><i class="fas fa-check" style="color: var(--accent-color); margin-right: 0.75rem;"></i> Logo Design & Variations</li>
                                <li style="margin-bottom: 0.75rem; display: flex; align-items: center;"><i class="fas fa-check" style="color: var(--accent-color); margin-right: 0.75rem;"></i> Color Palette & Typography</li>
                                <li style="margin-bottom: 0.75rem; display: flex; align-items: center;"><i class="fas fa-check" style="color: var(--accent-color); margin-right: 0.75rem;"></i> Brand Guidelines Manual</li>
                                <li style="margin-bottom: 0.75rem; display: flex; align-items: center;"><i class="fas fa-check" style="color: var(--accent-color); margin-right: 0.75rem;"></i> Business Card Design</li>
                                <li style="margin-bottom: 0.75rem; display: flex; align-items: center;"><i class="fas fa-check" style="color: var(--accent-color); margin-right: 0.75rem;"></i> Social Media Templates</li>
                                <li style="display: flex; align-items: center;"><i class="fas fa-check" style="color: var(--accent-color); margin-right: 0.75rem;"></i> Marketing Materials</li>
                            </ul>
                        </div>
                        
                        <a href="contact.php" class="btn btn-primary">
                            <i class="fas fa-arrow-right"></i> Get Quote
                        </a>
                    </div>
                </div>
                
                <!-- Website Maintenance & Support -->
                <div class="card" data-aos="fade-up" data-aos-delay="600" id="maintenance">
                    <div class="card-body" style="padding: 3rem;">
                        <div style="display: flex; align-items: flex-start; gap: 2rem; margin-bottom: 2rem;">
                            <div style="width: 80px; height: 80px; background: linear-gradient(135deg, var(--success), #38a169); border-radius: 1rem; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                <i class="fas fa-tools" style="color: white; font-size: 2rem;"></i>
                            </div>
                            <div>
                                <h3 style="margin-bottom: 1rem; font-size: 1.75rem;">Maintenance & Support</h3>
                                <p style="color: var(--secondary-color); font-size: 1.125rem;">
                                    Keep your website secure, updated, and running smoothly with ongoing support.
                                </p>
                            </div>
                        </div>
                        
                        <div style="margin-bottom: 2rem;">
                            <h4 style="margin-bottom: 1rem; color: var(--primary-color);">What's Included:</h4>
                            <ul style="list-style: none; color: var(--secondary-color);">
                                <li style="margin-bottom: 0.75rem; display: flex; align-items: center;"><i class="fas fa-check" style="color: var(--accent-color); margin-right: 0.75rem;"></i> Regular Security Updates</li>
                                <li style="margin-bottom: 0.75rem; display: flex; align-items: center;"><i class="fas fa-check" style="color: var(--accent-color); margin-right: 0.75rem;"></i> Content Updates & Changes</li>
                                <li style="margin-bottom: 0.75rem; display: flex; align-items: center;"><i class="fas fa-check" style="color: var(--accent-color); margin-right: 0.75rem;"></i> Performance Optimization</li>
                                <li style="margin-bottom: 0.75rem; display: flex; align-items: center;"><i class="fas fa-check" style="color: var(--accent-color); margin-right: 0.75rem;"></i> 24/7 Monitoring</li>
                                <li style="margin-bottom: 0.75rem; display: flex; align-items: center;"><i class="fas fa-check" style="color: var(--accent-color); margin-right: 0.75rem;"></i> Bug Fixes & Support</li>
                                <li style="display: flex; align-items: center;"><i class="fas fa-check" style="color: var(--accent-color); margin-right: 0.75rem;"></i> Monthly Reports</li>
                            </ul>
                        </div>
                        
                        <a href="contact.php" class="btn btn-primary">
                            <i class="fas fa-arrow-right"></i> Get Quote
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="section" style="background: var(--light-gray);">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2 class="section-title">Our Process</h2>
                <p class="section-subtitle">
                    A proven methodology that ensures successful project delivery from start to finish.
                </p>
            </div>
            
            <div class="grid grid-cols-4">
                <div class="text-center" data-aos="fade-up" data-aos-delay="100">
                    <div style="width: 80px; height: 80px; background: var(--accent-color); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; position: relative;">
                        <span style="color: white; font-size: 1.5rem; font-weight: bold;">1</span>
                    </div>
                    <h4 style="margin-bottom: 1rem;">Discovery</h4>
                    <p style="color: var(--secondary-color);">
                        We learn about your business, goals, and target audience to create a tailored strategy.
                    </p>
                </div>
                
                <div class="text-center" data-aos="fade-up" data-aos-delay="200">
                    <div style="width: 80px; height: 80px; background: var(--primary-color); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem;">
                        <span style="color: white; font-size: 1.5rem; font-weight: bold;">2</span>
                    </div>
                    <h4 style="margin-bottom: 1rem;">Design</h4>
                    <p style="color: var(--secondary-color);">
                        Our design team creates mockups and prototypes that align with your brand and objectives.
                    </p>
                </div>
                
                <div class="text-center" data-aos="fade-up" data-aos-delay="300">
                    <div style="width: 80px; height: 80px; background: var(--secondary-color); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem;">
                        <span style="color: white; font-size: 1.5rem; font-weight: bold;">3</span>
                    </div>
                    <h4 style="margin-bottom: 1rem;">Development</h4>
                    <p style="color: var(--secondary-color);">
                        We build your solution using the latest technologies and best practices for optimal performance.
                    </p>
                </div>
                
                <div class="text-center" data-aos="fade-up" data-aos-delay="400">
                    <div style="width: 80px; height: 80px; background: var(--success); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem;">
                        <span style="color: white; font-size: 1.5rem; font-weight: bold;">4</span>
                    </div>
                    <h4 style="margin-bottom: 1rem;">Launch</h4>
                    <p style="color: var(--secondary-color);">
                        We deploy your project and provide ongoing support to ensure everything runs smoothly.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="section" style="background: linear-gradient(135deg, var(--primary-color), var(--primary-light)); color: white; text-align: center;">
        <div class="container">
            <div data-aos="fade-up">
                <h2 style="color: white; font-size: 2.5rem; margin-bottom: 1.5rem;">Ready to Get Started?</h2>
                <p style="font-size: 1.125rem; color: rgba(255,255,255,0.9); margin-bottom: 2rem; max-width: 500px; margin-left: auto; margin-right: auto;">
                    Contact us today to discuss your project and receive a custom quote.
                </p>
                <div style="display: flex; gap: 1.5rem; justify-content: center; flex-wrap: wrap;">
                    <a href="contact.php" class="btn btn-accent btn-lg">
                        <i class="fas fa-envelope"></i> Get Free Quote
                    </a>
                    <a href="tel:+1234567890" class="btn btn-outline btn-lg" style="border-color: white; color: white;">
                        <i class="fas fa-phone"></i> Call Us
                    </a>
                </div>
            </div>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>