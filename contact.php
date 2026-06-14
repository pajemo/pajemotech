<?php
$pageTitle = 'Contact Us';
$pageDescription = 'Contact Pajemotech for professional web design and development services in Ghana. Get a free quote for your website project. Located in Accra, serving businesses across Ghana.';
$pageKeywords = 'contact web designer Ghana, web development quote Accra, Ghana web design consultation, website project quote, professional web services Ghana';
include 'includes/header.php';

// Handle session messages from mailer
$message = '';
$messageType = '';
if (isset($_SESSION['contact_message'])) {
    $message = $_SESSION['contact_message'];
    $messageType = $_SESSION['contact_success'] ? 'success' : 'error';
    unset($_SESSION['contact_message']);
    unset($_SESSION['contact_success']);
}
?>

    <!-- Page Header -->
    <section class="section" style="background: linear-gradient(135deg, var(--primary-color), var(--primary-light)); color: white; padding: 8rem 0 4rem; margin-top: 80px;">
        <div class="container">
            <div class="text-center" data-aos="fade-up">
                <h1 style="color: white; font-size: 4rem; margin-bottom: 1.5rem;">Contact Us</h1>
                <p style="font-size: 1.25rem; color: rgba(255,255,255,0.9); max-width: 600px; margin: 0 auto;">
                    Ready to start your project? Get in touch and let's create something amazing together.
                </p>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="section">
        <div class="container">
            <div class="grid contact-form-wrapper" style="grid-template-columns: 2fr 1fr; gap: 4rem; align-items: flex-start;">
                <!-- Contact Form 
                <div data-aos="fade-right">
                    <div class="card">
                        <div class="card-body" style="padding: 3rem;">
                            <h2 style="margin-bottom: 1.5rem;">Send Us a Message</h2>
                            <p style="color: var(--secondary-color); margin-bottom: 2rem;">
                                Fill out the form below and we'll get back to you within 24 hours. All fields marked with * are required.
                            </p>

                            <?php if ($message): ?>
                            <div style="padding: 15px 20px; margin: 0 0 2rem; border-radius: 8px; font-weight: 500; <?php echo $messageType === 'success' ? 'background: #d4edda; color: #155724; border: 1px solid #c3e6cb;' : 'background: #f8d7da; color: #721c24; border: 1px solid #f5c6cb;'; ?>">
                                <i class="fas <?php echo $messageType === 'success' ? 'fa-check-circle' : 'fa-exclamation-triangle'; ?>"></i>
                                <?php echo htmlspecialchars($message); ?>
                            </div>
                            <?php endif; ?>

                            <form action="mailer.php" method="POST" id="contactForm">
                                <div class="grid grid-cols-2" style="gap: 1.5rem;">
                                    <div class="form-group">
                                        <label for="name" class="form-label">Full Name *</label>
                                        <input type="text" id="name" name="name" class="form-input" required>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="email" class="form-label">Email Address *</label>
                                        <input type="email" id="email" name="email" class="form-input" required>
                                    </div>
                                </div>
                                
                                <div class="grid grid-cols-2" style="gap: 1.5rem;">
                                    <div class="form-group">
                                        <label for="phone" class="form-label">Phone Number</label>
                                        <input type="tel" id="phone" name="phone" class="form-input">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="company" class="form-label">Company Name</label>
                                        <input type="text" id="company" name="company" class="form-input">
                                    </div>
                                </div>
                                
                                <div class="grid grid-cols-2" style="gap: 1.5rem;">
                                    <div class="form-group">
                                        <label for="service" class="form-label">Service Interested In</label>
                                        <select id="service" name="service" class="form-select">
                                            <option value="">Select a service</option>
                                            <option value="web-design">Web Design</option>
                                            <option value="web-development">Web Development</option>
                                            <option value="ecommerce">E-commerce Solutions</option>
                                            <option value="digital-marketing">Digital Marketing</option>
                                            <option value="branding">Branding & Identity</option>
                                            <option value="consultation">Free Consultation</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="budget" class="form-label">Project Budget</label>
                                        <select id="budget" name="budget" class="form-select">
                                            <option value="">Select budget range</option>
                                            <option value="under-5k">Under $5,000</option>
                                            <option value="5k-10k">$5,000 - $10,000</option>
                                            <option value="10k-25k">$10,000 - $25,000</option>
                                            <option value="25k-50k">$25,000 - $50,000</option>
                                            <option value="over-50k">Over $50,000</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="subject" class="form-label">Subject *</label>
                                    <input type="text" id="subject" name="subject" class="form-input" required placeholder="Brief description of your project">
                                </div>
                                
                                <div class="form-group">
                                    <label for="message" class="form-label">Project Details *</label>
                                    <textarea id="message" name="message" class="form-textarea" rows="6" required placeholder="Tell us about your project, goals, timeline, and any specific requirements..."></textarea>
                                </div>
                                
                                <div style="text-align: center; margin-top: 2rem;">
                                    <button type="submit" class="btn btn-primary btn-lg submit-btn">
                                        <i class="fas fa-paper-plane"></i> Send Message
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                -->
                <!-- Contact Information -->
                <div data-aos="fade-left">
                    <!-- Contact Details Card -->
                    <div class="card" style="margin-bottom: 2rem;">
                        <div class="card-body" style="padding: 2rem;">
                            <h3 style="margin-bottom: 1.5rem;">Get In Touch</h3>
                            
                            <!-- Contact Items Container -->
                            <div class="contact-items-container">
                                <div class="contact-item" style="display: flex; align-items: flex-start; gap: 1rem; margin-bottom: 1.5rem;">
                                    <div style="width: 50px; height: 50px; background: var(--accent-color); border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                        <i class="fas fa-envelope" style="color: white;"></i>
                                    </div>
                                    <div>
                                        <h4 style="margin-bottom: 0.5rem; color: var(--primary-color);">Email Us</h4>
                                        <p style="color: var(--secondary-color); margin-bottom: 0.5rem;">Send us an email anytime</p>
                                        <a href="mailto:Info@pajemotech.com" style="color: var(--accent-color); font-weight: 500;">Info@pajemotech.com</a>
                                    </div>
                                </div>
                                
                                <div class="contact-item" style="display: flex; align-items: flex-start; gap: 1rem; margin-bottom: 1.5rem;">
                                    <div style="width: 50px; height: 50px; background: var(--primary-color); border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                        <i class="fas fa-phone" style="color: white;"></i>
                                    </div>
                                    <div>
                                        <h4 style="margin-bottom: 0.5rem; color: var(--primary-color);">Call Us</h4>
                                        <p style="color: var(--secondary-color); margin-bottom: 0.5rem;">Mon-Fri 9am-6pm EST</p>
                                        <a href="tel:+233543943204" style="color: var(--accent-color); font-weight: 500;">+233 54 394 3204</a>
                                    </div>
                                </div>
                                
                                <div class="contact-item" style="display: flex; align-items: flex-start; gap: 1rem; margin-bottom: 1.5rem;">
                                    <div style="width: 50px; height: 50px; background: var(--secondary-color); border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                        <i class="fas fa-map-marker-alt" style="color: white;"></i>
                                    </div>
                                    <div>
                                        <h4 style="margin-bottom: 0.5rem; color: var(--primary-color);">Visit Us</h4>
                                        <p style="color: var(--secondary-color); margin: 0;">
                                            45 Danso St<br>
                                            Accra, Ghana
                                        </p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="contact-item business-hours-item" style="display: flex; align-items: flex-start; gap: 1rem;">
                                <div style="width: 50px; height: 50px; background: var(--success); border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                    <i class="fas fa-clock" style="color: white;"></i>
                                </div>
                                <div>
                                    <h4 style="margin-bottom: 0.5rem; color: var(--primary-color);">Business Hours</h4>
                                    <p style="color: var(--secondary-color); margin: 0;">
                                        Monday - Friday: 9:00 AM - 6:00 PM<br>
                                        Saturday: 10:00 AM - 4:00 PM<br>
                                        Sunday: Closed
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Quick Actions Card -->
                    <div class="card">
                        <div class="card-body" style="padding: 2rem;">
                            <h3 style="margin-bottom: 1.5rem;">Quick Actions</h3>
                            
                            <div style="margin-bottom: 1.5rem;">
                                <a href="tel:+233543943204" class="btn btn-primary" style="width: 100%; margin-bottom: 1rem;">
                                    <i class="fas fa-phone"></i> Call Now
                                </a>
                                <a href="mailto:Info@pajemotech.com" class="btn btn-outline" style="width: 100%; margin-bottom: 1rem;">
                                    <i class="fas fa-envelope"></i> Send Email
                                </a>
                                <a href="https://wa.me/233542387361" class="btn btn-success" style="width: 100%; margin-bottom: 1rem; background: #25d366;">
                                    <i class="fab fa-whatsapp"></i> WhatsApp Us
                                </a>
                                <a href="portfolio.php" class="btn btn-accent" style="width: 100%;">
                                    <i class="fas fa-eye"></i> View Portfolio
                                </a>
                            </div>
                            
                            <!-- Social Links 
                            <div>
                                <h4 style="margin-bottom: 1rem; color: var(--primary-color);">Follow Us</h4>
                                <div style="display: flex; gap: 0.5rem;">
                                    <a href="#" style="width: 40px; height: 40px; background: #3b5998; color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; transition: var(--transition-normal);">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a href="#" style="width: 40px; height: 40px; background: #1da1f2; color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; transition: var(--transition-normal);">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a href="#" style="width: 40px; height: 40px; background: #0077b5; color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; transition: var(--transition-normal);">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                    <a href="#" style="width: 40px; height: 40px; background: #e4405f; color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; transition: var(--transition-normal);">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                    <a href="#" style="width: 40px; height: 40px; background: #1769ff; color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; transition: var(--transition-normal);">
                                        <i class="fab fa-behance"></i>
                                    </a>
                                </div>
                            </div>
                            -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="section" style="background: var(--light-gray);">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2 class="section-title">Frequently Asked Questions</h2>
                <p class="section-subtitle">
                    Quick answers to common questions about our services and process.
                </p>
            </div>
            
            <div class="grid grid-cols-2" style="gap: 2rem;">
                <div class="card" data-aos="fade-up" data-aos-delay="100">
                    <div class="card-body">
                        <h4 style="margin-bottom: 1rem; color: var(--primary-color);">How long does a typical project take?</h4>
                        <p style="color: var(--secondary-color);">
                            Project timelines vary based on complexity. A simple website typically takes 2-4 weeks, 
                            while complex web applications can take 8-12 weeks. We'll provide a detailed timeline during consultation.
                        </p>
                    </div>
                </div>
                
                <div class="card" data-aos="fade-up" data-aos-delay="200">
                    <div class="card-body">
                        <h4 style="margin-bottom: 1rem; color: var(--primary-color);">What's included in your web design service?</h4>
                        <p style="color: var(--secondary-color);">
                            Our web design service includes custom UI/UX design, responsive layouts, brand integration, 
                            wireframing, prototyping, and style guide delivery.
                        </p>
                    </div>
                </div>
                
                <div class="card" data-aos="fade-up" data-aos-delay="300">
                    <div class="card-body">
                        <h4 style="margin-bottom: 1rem; color: var(--primary-color);">Do you provide ongoing support?</h4>
                        <p style="color: var(--secondary-color);">
                            Yes! We offer 24/7 support and maintenance packages to keep your website running smoothly, 
                            secure, and up-to-date with the latest features.
                        </p>
                    </div>
                </div>
                
                <div class="card" data-aos="fade-up" data-aos-delay="400">
                    <div class="card-body">
                        <h4 style="margin-bottom: 1rem; color: var(--primary-color);">Can you work with existing websites?</h4>
                        <p style="color: var(--secondary-color);">
                            Absolutely! We can redesign, optimize, or add new features to existing websites. 
                            We'll assess your current site and recommend the best approach.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="section" style="padding: 0;">
        <div style="width: 100%; height: 400px; background: var(--gray); position: relative;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7942.273762460394!2d-0.2465015298186191!3d5.54671481938071!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdf97ee8221d635%3A0xef4f0c5be0b1d8ce!2sEuroPool!5e0!3m2!1sen!2sgh!4v1765909860441!5m2!1sen!2sgh"
                title="Pajemotech Office Location - 45 Danso St, Accra, Ghana"
                width="100%"
                height="100%"
                style="border:0;"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
            
            <!-- Map Overlay -->
            <div style="position: absolute; top: 20px; left: 20px; background: white; padding: 1.5rem; border-radius: 1rem; box-shadow: var(--shadow-lg); max-width: 300px;">
                <h4 style="margin-bottom: 1rem; color: var(--primary-color);">Visit Our Office</h4>
                <p style="color: var(--secondary-color); margin-bottom: 1rem;">
                    45 Danso St<br>
                    Accra, Ghana
                </p>
                <a href="https://maps.google.com/?q=45+Danso+Street+Accra+Ghana" target="_blank" class="btn btn-primary">
                    <i class="fas fa-directions"></i> Get Directions
                </a>
            </div>
        </div>
    </section>

<style>
/* Form enhancements */
.form-input:focus,
.form-textarea:focus,
.form-select:focus {
    border-color: var(--accent-color);
    box-shadow: 0 0 0 3px rgba(212, 175, 55, 0.1);
}

/* Social link hover effects */
.card-body a[style*="border-radius: 50%"]:hover {
    transform: translateY(-2px);
    box-shadow: var(--shadow-md);
}

/* Contact items hover */
.contact-item:hover .contact-item > div:first-child {
    transform: scale(1.05);
}

/* FAQ cards hover */
.card:hover {
    transform: translateY(-2px);
    box-shadow: var(--shadow-lg);
}

/* Success/Error message animation */
@keyframes slideDown {
    from {
        opacity: 0;
        transform: translateY(-10px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.card-body > div[style*="background: #d4edda"],
.card-body > div[style*="background: #f8d7da"] {
    animation: slideDown 0.3s ease;
}
</style>

<?php include 'includes/footer.php'; ?>