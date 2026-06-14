<?php
$pageTitle = 'About Us';
$pageDescription = 'Learn about Pajemotech - Ghana\'s leading web design and development company. Our expert team creates innovative digital solutions for businesses across Accra and Ghana. Discover our story and mission.';
$pageKeywords = 'about Pajemotech, Ghana web design company, web development team Accra, digital agency Ghana, professional web designers, experienced developers Ghana, web design company history';
include 'includes/header.php';
?>

    <!-- Page Header -->
    <section class="section" style="background: linear-gradient(135deg, var(--primary-color), var(--primary-light)); color: white; padding: 8rem 0 4rem; margin-top: 80px;">
        <div class="container">
            <div class="text-center" data-aos="fade-up">
                <h1 style="color: white; font-size: 4rem; margin-bottom: 1.5rem;">About Pajemotech</h1>
                <p style="font-size: 1.25rem; color: rgba(255,255,255,0.9); max-width: 600px; margin: 0 auto;">
                    Passionate about creating exceptional digital experiences that drive business success.
                </p>
            </div>
        </div>
    </section>

    <!-- Company Story -->
    <section class="section">
        <div class="container">
            <div class="grid grid-cols-2" style="gap: 4rem; align-items: center;">
                <div data-aos="fade-right">
                    <h2 style="font-size: 2.5rem; margin-bottom: 2rem;">Our Story</h2>
                    <p style="font-size: 1.125rem; margin-bottom: 1.5rem; color: var(--secondary-color);">
                        Founded with a vision to bridge the gap between exceptional design and robust functionality, 
                        Pajemotech has been at the forefront of digital innovation. We believe that every business 
                        deserves a powerful online presence that truly represents their brand and drives growth.
                    </p>
                    <p style="font-size: 1.125rem; margin-bottom: 1.5rem; color: var(--secondary-color);">
                        Our journey began with a simple mission: to help businesses thrive in the digital landscape 
                        through cutting-edge web solutions. Today, we're proud to have served over 100 clients 
                        across various industries, delivering projects that exceed expectations.
                    </p>
                    <p style="font-size: 1.125rem; color: var(--secondary-color);">
                        We're not just developers and designers – we're digital strategists, problem solvers, 
                        and partners in your success.
                    </p>
                </div>
                
                <div data-aos="fade-left">
                    <img src="assets/images/our-story.png" alt="Our Story" 
                         style="width: 100%; height: 450px; object-fit: cover; border-radius: 1rem; box-shadow: var(--shadow-lg);">
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="section" style="background: var(--light-gray);">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2 class="section-title">Our Values</h2>
                <p class="section-subtitle">
                    The principles that guide everything we do and define who we are as a company.
                </p>
            </div>
            
            <div class="grid grid-cols-3">
                <div class="card" data-aos="fade-up" data-aos-delay="100">
                    <div class="card-body" style="text-align: center; padding: 3rem 2rem;">
                        <div style="width: 80px; height: 80px; background: linear-gradient(135deg, var(--accent-color), var(--accent-dark)); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 2rem;">
                            <i class="fas fa-heart" style="color: white; font-size: 2rem;"></i>
                        </div>
                        <h3 style="margin-bottom: 1rem;">Passion</h3>
                        <p style="color: var(--secondary-color);">
                            We're passionate about what we do. Every project is an opportunity to create 
                            something amazing that makes a real difference.
                        </p>
                    </div>
                </div>
                
                <div class="card" data-aos="fade-up" data-aos-delay="200">
                    <div class="card-body" style="text-align: center; padding: 3rem 2rem;">
                        <div style="width: 80px; height: 80px; background: linear-gradient(135deg, var(--primary-color), var(--primary-light)); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 2rem;">
                            <i class="fas fa-shield-alt" style="color: white; font-size: 2rem;"></i>
                        </div>
                        <h3 style="margin-bottom: 1rem;">Integrity</h3>
                        <p style="color: var(--secondary-color);">
                            Honesty and transparency are at the core of our relationships. We believe in 
                            clear communication and ethical business practices.
                        </p>
                    </div>
                </div>
                
                <div class="card" data-aos="fade-up" data-aos-delay="300">
                    <div class="card-body" style="text-align: center; padding: 3rem 2rem;">
                        <div style="width: 80px; height: 80px; background: linear-gradient(135deg, var(--secondary-color), var(--secondary-dark)); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 2rem;">
                            <i class="fas fa-rocket" style="color: white; font-size: 2rem;"></i>
                        </div>
                        <h3 style="margin-bottom: 1rem;">Innovation</h3>
                        <p style="color: var(--secondary-color);">
                            We stay ahead of the curve, constantly learning and adopting new technologies 
                            to deliver cutting-edge solutions.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="section">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2 class="section-title">Meet Our Team</h2>
                <p class="section-subtitle">
                    The talented individuals who bring creativity, expertise, and dedication to every project.
                </p>
            </div>
            
            <div class="grid grid-cols-3 team-grid">
                <div class="card" data-aos="fade-up" data-aos-delay="100">
                    <div style="position: relative; overflow: hidden;">
                        <img src="assets/images/team-1.jpeg" alt="Team Member" 
                             style="width: 100%; height: 300px; object-fit: cover; object-position: center 20%;">
                        <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(transparent, rgba(26, 54, 93, 0.9)); padding: 2rem; color: white;">
                            <h4 style="color: white; margin-bottom: 0.5rem;">Andrew Bassey</h4>
                            <p style="color: rgba(255,255,255,0.8); margin-bottom: 1rem;">CEO & Lead Developer</p>
                            <div style="display: flex; gap: 0.5rem;">
                                <a href="#" style="width: 35px; height: 35px; background: rgba(255,255,255,0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white;">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                                <a href="#" style="width: 35px; height: 35px; background: rgba(255,255,255,0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white;">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="card" data-aos="fade-up" data-aos-delay="200">
                    <div style="position: relative; overflow: hidden;">
                        <img src="assets/images/team-2.jpg" alt="Team Member" 
                             style="width: 100%; height: 300px; object-fit: cover; object-position: center 20%;">
                        <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(transparent, rgba(26, 54, 93, 0.9)); padding: 2rem; color: white;">
                            <h4 style="color: white; margin-bottom: 0.5rem;">Jane Smith</h4>
                            <p style="color: rgba(255,255,255,0.8); margin-bottom: 1rem;">UI/UX Designer</p>
                            <div style="display: flex; gap: 0.5rem;">
                                <a href="#" style="width: 35px; height: 35px; background: rgba(255,255,255,0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white;">
                                    <i class="fab fa-dribbble"></i>
                                </a>
                                <a href="#" style="width: 35px; height: 35px; background: rgba(255,255,255,0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white;">
                                    <i class="fab fa-behance"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="card" data-aos="fade-up" data-aos-delay="300">
                    <div style="position: relative; overflow: hidden;">
                        <img src="assets/images/team-3.jpg" alt="Team Member" 
                             style="width: 100%; height: 300px; object-fit: cover; object-position: center 20%;">
                        <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(transparent, rgba(26, 54, 93, 0.9)); padding: 2rem; color: white;">
                            <h4 style="color: white; margin-bottom: 0.5rem;">Mike Johnson</h4>
                            <p style="color: rgba(255,255,255,0.8); margin-bottom: 1rem;">Project Manager</p>
                            <div style="display: flex; gap: 0.5rem;">
                                <a href="#" style="width: 35px; height: 35px; background: rgba(255,255,255,0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white;">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                                <a href="#" style="width: 35px; height: 35px; background: rgba(255,255,255,0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white;">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="section" style="background: linear-gradient(135deg, var(--primary-color), var(--primary-light)); color: white; text-align: center;">
        <div class="container">
            <div data-aos="fade-up">
                <h2 style="color: white; font-size: 2.5rem; margin-bottom: 1.5rem;">Ready to Work With Us?</h2>
                <p style="font-size: 1.125rem; color: rgba(255,255,255,0.9); margin-bottom: 2rem; max-width: 500px; margin-left: auto; margin-right: auto;">
                    Let's discuss your project and see how we can help bring your vision to life.
                </p>
                <a href="contact.php" class="btn btn-accent btn-lg">
                    <i class="fas fa-arrow-right"></i> Get In Touch
                </a>
            </div>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>