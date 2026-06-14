<?php
$pageTitle = 'Top Web Design Trends for 2025';
$pageDescription = 'Discover the latest web design trends that will shape the digital landscape in 2025. From minimalist layouts to interactive elements, explore what\'s next in web design.';
include 'includes/header.php';
?>

    <!-- Article Header -->
    <section class="section" style="background: linear-gradient(135deg, var(--primary-color), var(--primary-light)); color: white; padding: 8rem 0 4rem; margin-top: 80px;">
        <div class="container">
            <div class="text-center" data-aos="fade-up">
                <div style="background: rgba(255,255,255,0.1); padding: 0.5rem 1.5rem; border-radius: 2rem; display: inline-block; margin-bottom: 2rem;">
                    <span style="color: var(--accent-color); font-weight: 600;">Blog Article</span>
                </div>
                <h1 style="color: white; font-size: 4rem; margin-bottom: 1.5rem; line-height: 1.2;">Top Web Design Trends for 2025</h1>
                <p style="font-size: 1.25rem; color: rgba(255,255,255,0.9); max-width: 800px; margin: 0 auto 2rem;">
                    Discover the latest web design trends that will shape the digital landscape in 2025. From minimalist layouts to interactive elements, explore what's next in web design.
                </p>
                <div style="display: flex; align-items: center; justify-content: center; gap: 2rem; flex-wrap: wrap; color: rgba(255,255,255,0.8);">
                    <div style="display: flex; align-items: center; gap: 0.5rem;">
                        <i class="fas fa-calendar"></i>
                        <span>December 16, 2025</span>
                    </div>
                    <div style="display: flex; align-items: center; gap: 0.5rem;">
                        <i class="fas fa-clock"></i>
                        <span>8 min read</span>
                    </div>
                    <div style="display: flex; align-items: center; gap: 0.5rem;">
                        <i class="fas fa-user"></i>
                        <span>By Andrew Bassey</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Image -->
    <section class="section" style="padding: 0;">
        <div class="container">
            <div data-aos="fade-up">
                <img src="assets/images/web-trends-2025-hero.jpg" alt="Web Design Trends 2025" 
                     style="width: 100%; height: 400px; object-fit: cover; border-radius: 1rem; margin-top: -3rem; box-shadow: 0 20px 40px rgba(0,0,0,0.1);">
            </div>
        </div>
    </section>

    <!-- Article Content -->
    <section class="section" style="padding: 4rem 0;">
        <div class="container">
            <div style="max-width: 800px; margin: 0 auto;">
                
                <!-- Introduction -->
                <div data-aos="fade-up" style="margin-bottom: 3rem;">
                    <p style="font-size: 1.125rem; line-height: 1.8; color: var(--text-color); margin-bottom: 2rem;">
                        As we step into 2025, the web design landscape continues to evolve at an unprecedented pace. The fusion of 
                        artificial intelligence, sustainable design practices, and user-centric approaches are reshaping how we 
                        create digital experiences. Let's explore the trends that will define web design this year.
                    </p>
                </div>

                <!-- Trend 1: AI-Powered Personalization -->
                <div data-aos="fade-up" style="margin-bottom: 4rem;">
                    <h2 style="color: var(--primary-color); font-size: 2.5rem; margin-bottom: 2rem; border-bottom: 3px solid var(--accent-color); padding-bottom: 1rem;">
                        1. AI-Powered Personalization
                    </h2>
                    <div style="background: var(--light-gray); padding: 2rem; border-radius: 1rem; margin-bottom: 2rem;">
                        <img src="assets/images/ai-personalization.jpg" alt="AI Personalization in Web Design" 
                             style="width: 100%; height: 250px; object-fit: cover; border-radius: 0.5rem; margin-bottom: 1.5rem;">
                        <p style="font-size: 1rem; line-height: 1.8; color: var(--text-color);">
                            Artificial Intelligence is revolutionizing how websites adapt to individual users. In 2025, we're seeing 
                            sophisticated AI systems that analyze user behavior in real-time, automatically adjusting layouts, content, 
                            and even color schemes to match user preferences and improve engagement.
                        </p>
                    </div>
                    <div style="background: linear-gradient(135deg, var(--primary-color), var(--primary-light)); padding: 2rem; border-radius: 1rem; color: white; margin-bottom: 2rem;">
                        <h4 style="color: white; margin-bottom: 1rem; display: flex; align-items: center; gap: 0.5rem;">
                            <i class="fas fa-lightbulb"></i>
                            Key Implementation Tips:
                        </h4>
                        <ul style="color: rgba(255,255,255,0.9); line-height: 1.8; padding-left: 1.5rem;">
                            <li>Implement dynamic content blocks that change based on user history</li>
                            <li>Use machine learning algorithms to optimize navigation patterns</li>
                            <li>Create adaptive color themes that respond to user preferences</li>
                            <li>Integrate predictive search functionality</li>
                        </ul>
                    </div>
                </div>

                <!-- Trend 2: Sustainable Web Design -->
                <div data-aos="fade-up" style="margin-bottom: 4rem;">
                    <h2 style="color: var(--primary-color); font-size: 2.5rem; margin-bottom: 2rem; border-bottom: 3px solid var(--accent-color); padding-bottom: 1rem;">
                        2. Sustainable & Eco-Friendly Design
                    </h2>
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 2rem; margin-bottom: 2rem;">
                        <div>
                            <img src="assets/images/sustainable-design.jpg" alt="Sustainable Web Design" 
                                 style="width: 100%; height: 200px; object-fit: cover; border-radius: 0.5rem;">
                        </div>
                        <div style="display: flex; align-items: center;">
                            <p style="font-size: 1rem; line-height: 1.8; color: var(--text-color);">
                                Environmental consciousness is driving a new wave of sustainable web design. Designers are focusing 
                                on reducing carbon footprints through optimized images, efficient code, and minimal resource usage 
                                while maintaining stunning visual appeal.
                            </p>
                        </div>
                    </div>
                    <div style="background: var(--accent-light); padding: 2rem; border-radius: 1rem; border-left: 4px solid var(--accent-color);">
                        <h4 style="color: var(--primary-color); margin-bottom: 1rem;">Sustainable Design Principles:</h4>
                        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1rem;">
                            <div style="text-align: center; padding: 1rem;">
                                <i class="fas fa-leaf" style="font-size: 2rem; color: var(--accent-color); margin-bottom: 0.5rem;"></i>
                                <h5 style="margin-bottom: 0.5rem;">Optimized Images</h5>
                                <p style="font-size: 0.9rem; color: var(--text-color);">WebP and AVIF formats</p>
                            </div>
                            <div style="text-align: center; padding: 1rem;">
                                <i class="fas fa-code" style="font-size: 2rem; color: var(--accent-color); margin-bottom: 0.5rem;"></i>
                                <h5 style="margin-bottom: 0.5rem;">Clean Code</h5>
                                <p style="font-size: 0.9rem; color: var(--text-color);">Minimal CSS and JS</p>
                            </div>
                            <div style="text-align: center; padding: 1rem;">
                                <i class="fas fa-server" style="font-size: 2rem; color: var(--accent-color); margin-bottom: 0.5rem;"></i>
                                <h5 style="margin-bottom: 0.5rem;">Green Hosting</h5>
                                <p style="font-size: 0.9rem; color: var(--text-color);">Renewable energy servers</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Trend 3: Immersive 3D Elements -->
                <div data-aos="fade-up" style="margin-bottom: 4rem;">
                    <h2 style="color: var(--primary-color); font-size: 2.5rem; margin-bottom: 2rem; border-bottom: 3px solid var(--accent-color); padding-bottom: 1rem;">
                        3. Immersive 3D Elements & WebGL
                    </h2>
                    <div style="position: relative; margin-bottom: 2rem;">
                        <img src="assets/images/3d-web-design.jpg" alt="3D Elements in Web Design" 
                             style="width: 100%; height: 300px; object-fit: cover; border-radius: 1rem;">
                        <div style="position: absolute; top: 1rem; right: 1rem; background: rgba(0,0,0,0.8); color: white; padding: 0.5rem 1rem; border-radius: 2rem; font-size: 0.875rem;">
                            <i class="fas fa-cube"></i> 3D Graphics
                        </div>
                    </div>
                    <p style="font-size: 1rem; line-height: 1.8; color: var(--text-color); margin-bottom: 2rem;">
                        Three-dimensional elements are becoming more accessible and performant. WebGL and Three.js are enabling 
                        designers to create immersive experiences that were once only possible in native applications, from 
                        interactive product showcases to atmospheric background elements.
                    </p>
                </div>

                <!-- Trend 4: Voice User Interface -->
                <div data-aos="fade-up" style="margin-bottom: 4rem;">
                    <h2 style="color: var(--primary-color); font-size: 2.5rem; margin-bottom: 2rem; border-bottom: 3px solid var(--accent-color); padding-bottom: 1rem;">
                        4. Voice User Interface Integration
                    </h2>
                    <div style="background: linear-gradient(45deg, #667eea 0%, #764ba2 100%); padding: 3rem; border-radius: 1rem; color: white; margin-bottom: 2rem; text-align: center;">
                        <i class="fas fa-microphone" style="font-size: 4rem; margin-bottom: 1.5rem; opacity: 0.9;"></i>
                        <h3 style="color: white; margin-bottom: 1rem;">Voice-First Design</h3>
                        <p style="color: rgba(255,255,255,0.9); font-size: 1.125rem; max-width: 500px; margin: 0 auto;">
                            Voice interfaces are becoming integral to web design, offering hands-free navigation and 
                            accessibility improvements.
                        </p>
                    </div>
                </div>

                <!-- Trend 5: Micro-Interactions -->
                <div data-aos="fade-up" style="margin-bottom: 4rem;">
                    <h2 style="color: var(--primary-color); font-size: 2.5rem; margin-bottom: 2rem; border-bottom: 3px solid var(--accent-color); padding-bottom: 1rem;">
                        5. Advanced Micro-Interactions
                    </h2>
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 2rem; margin-bottom: 2rem;">
                        <div class="card" style="padding: 2rem; text-align: center; border: 2px solid transparent; transition: all 0.3s ease;" 
                             onmouseover="this.style.borderColor='var(--accent-color)'; this.style.transform='translateY(-5px)'" 
                             onmouseout="this.style.borderColor='transparent'; this.style.transform='translateY(0)'">
                            <i class="fas fa-mouse-pointer" style="font-size: 3rem; color: var(--accent-color); margin-bottom: 1rem;"></i>
                            <h4 style="margin-bottom: 1rem;">Hover Effects</h4>
                            <p style="color: var(--text-color); font-size: 0.9rem;">Sophisticated animations that respond to user interactions</p>
                        </div>
                        <div class="card" style="padding: 2rem; text-align: center; border: 2px solid transparent; transition: all 0.3s ease;" 
                             onmouseover="this.style.borderColor='var(--accent-color)'; this.style.transform='translateY(-5px)'" 
                             onmouseout="this.style.borderColor='transparent'; this.style.transform='translateY(0)'">
                            <i class="fas fa-hand-pointer" style="font-size: 3rem; color: var(--accent-color); margin-bottom: 1rem;"></i>
                            <h4 style="margin-bottom: 1rem;">Loading States</h4>
                            <p style="color: var(--text-color); font-size: 0.9rem;">Engaging animations that make waiting enjoyable</p>
                        </div>
                        <div class="card" style="padding: 2rem; text-align: center; border: 2px solid transparent; transition: all 0.3s ease;" 
                             onmouseover="this.style.borderColor='var(--accent-color)'; this.style.transform='translateY(-5px)'" 
                             onmouseout="this.style.borderColor='transparent'; this.style.transform='translateY(0)'">
                            <i class="fas fa-bell" style="font-size: 3rem; color: var(--accent-color); margin-bottom: 1rem;"></i>
                            <h4 style="margin-bottom: 1rem;">Feedback Systems</h4>
                            <p style="color: var(--text-color); font-size: 0.9rem;">Instant visual confirmation of user actions</p>
                        </div>
                    </div>
                </div>

                <!-- Trend 6: Typography Innovation -->
                <div data-aos="fade-up" style="margin-bottom: 4rem;">
                    <h2 style="color: var(--primary-color); font-size: 2.5rem; margin-bottom: 2rem; border-bottom: 3px solid var(--accent-color); padding-bottom: 1rem;">
                        6. Variable Typography & Custom Fonts
                    </h2>
                    <div style="background: var(--light-gray); padding: 3rem; border-radius: 1rem; margin-bottom: 2rem; text-align: center;">
                        <h3 style="font-size: 3rem; font-weight: 100; margin-bottom: 0.5rem; color: var(--primary-color);">Typography</h3>
                        <h3 style="font-size: 3rem; font-weight: 300; margin-bottom: 0.5rem; color: var(--primary-color);">Typography</h3>
                        <h3 style="font-size: 3rem; font-weight: 600; margin-bottom: 0.5rem; color: var(--primary-color);">Typography</h3>
                        <h3 style="font-size: 3rem; font-weight: 900; margin-bottom: 1rem; color: var(--primary-color);">Typography</h3>
                        <p style="color: var(--text-color);">Variable fonts allow dynamic weight, width, and style adjustments</p>
                    </div>
                </div>

                <!-- Conclusion -->
                <div data-aos="fade-up" style="margin-bottom: 3rem;">
                    <h2 style="color: var(--primary-color); font-size: 2.5rem; margin-bottom: 2rem; border-bottom: 3px solid var(--accent-color); padding-bottom: 1rem;">
                        Looking Ahead: The Future is Now
                    </h2>
                    <p style="font-size: 1.125rem; line-height: 1.8; color: var(--text-color); margin-bottom: 2rem;">
                        The web design trends of 2025 represent a perfect balance between technological innovation and human-centered 
                        design. As we embrace AI, sustainability, and immersive experiences, the key is to always prioritize user 
                        experience while pushing creative boundaries.
                    </p>
                    <div style="background: linear-gradient(135deg, var(--primary-color), var(--accent-color)); padding: 3rem; border-radius: 1rem; color: white; text-align: center;">
                        <h3 style="color: white; margin-bottom: 1rem;">Ready to Implement These Trends?</h3>
                        <p style="color: rgba(255,255,255,0.9); margin-bottom: 2rem; max-width: 600px; margin-left: auto; margin-right: auto;">
                            Our team at PajemoTech specializes in cutting-edge web design that incorporates the latest trends 
                            while maintaining usability and performance.
                        </p>
                        <a href="contact.php" class="btn btn-secondary" style="padding: 1rem 2rem; font-size: 1.125rem;">
                            Start Your Project
                        </a>
                    </div>
                </div>

                <!-- Share Section -->
                <div data-aos="fade-up" style="border-top: 2px solid var(--light-gray); padding-top: 2rem; text-align: center;">
                    <h4 style="margin-bottom: 1.5rem; color: var(--primary-color);">Share This Article</h4>
                    <div style="display: flex; justify-content: center; gap: 1rem; flex-wrap: wrap;">
                        <a href="#" style="display: flex; align-items: center; gap: 0.5rem; background: #1877f2; color: white; padding: 0.75rem 1.5rem; border-radius: 2rem; text-decoration: none; transition: transform 0.3s ease;" 
                           onmouseover="this.style.transform='translateY(-2px)'" onmouseout="this.style.transform='translateY(0)'">
                            <i class="fab fa-facebook-f"></i>
                            <span>Facebook</span>
                        </a>
                        <a href="#" style="display: flex; align-items: center; gap: 0.5rem; background: #1da1f2; color: white; padding: 0.75rem 1.5rem; border-radius: 2rem; text-decoration: none; transition: transform 0.3s ease;" 
                           onmouseover="this.style.transform='translateY(-2px)'" onmouseout="this.style.transform='translateY(0)'">
                            <i class="fab fa-twitter"></i>
                            <span>Twitter</span>
                        </a>
                        <a href="#" style="display: flex; align-items: center; gap: 0.5rem; background: #0077b5; color: white; padding: 0.75rem 1.5rem; border-radius: 2rem; text-decoration: none; transition: transform 0.3s ease;" 
                           onmouseover="this.style.transform='translateY(-2px)'" onmouseout="this.style.transform='translateY(0)'">
                            <i class="fab fa-linkedin-in"></i>
                            <span>LinkedIn</span>
                        </a>
                        <a href="#" style="display: flex; align-items: center; gap: 0.5rem; background: #25d366; color: white; padding: 0.75rem 1.5rem; border-radius: 2rem; text-decoration: none; transition: transform 0.3s ease;" 
                           onmouseover="this.style.transform='translateY(-2px)'" onmouseout="this.style.transform='translateY(0)'">
                            <i class="fab fa-whatsapp"></i>
                            <span>WhatsApp</span>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Related Articles Section -->
    <section class="section" style="background: var(--light-gray); padding: 4rem 0;">
        <div class="container">
            <div class="text-center" data-aos="fade-up" style="margin-bottom: 3rem;">
                <h2 style="color: var(--primary-color); margin-bottom: 1rem;">Related Articles</h2>
                <p style="color: var(--text-color); max-width: 600px; margin: 0 auto;">
                    Explore more insights about web design, development, and digital trends
                </p>
            </div>
            
            <div class="grid grid-cols-3" style="gap: 2rem;">
                <div class="card" data-aos="fade-up" data-aos-delay="100" style="overflow: hidden;">
                    <img src="assets/images/mobile-first-design.jpg" alt="Mobile-First Design" style="width: 100%; height: 200px; object-fit: cover;">
                    <div style="padding: 2rem;">
                        <div style="background: var(--accent-light); color: var(--accent-color); padding: 0.25rem 0.75rem; border-radius: 1rem; font-size: 0.75rem; display: inline-block; margin-bottom: 1rem; font-weight: 600;">
                            DESIGN
                        </div>
                        <h3 style="margin-bottom: 1rem; color: var(--primary-color);">Mobile-First Design Strategies</h3>
                        <p style="color: var(--text-color); font-size: 0.9rem; line-height: 1.6; margin-bottom: 1.5rem;">
                            Learn how to create responsive designs that prioritize mobile user experience.
                        </p>
                        <a href="#" style="color: var(--accent-color); font-weight: 600; text-decoration: none;">Read More →</a>
                    </div>
                </div>
                
                <div class="card" data-aos="fade-up" data-aos-delay="200" style="overflow: hidden;">
                    <img src="assets/images/seo-optimization.jpg" alt="SEO Optimization" style="width: 100%; height: 200px; object-fit: cover;">
                    <div style="padding: 2rem;">
                        <div style="background: var(--accent-light); color: var(--accent-color); padding: 0.25rem 0.75rem; border-radius: 1rem; font-size: 0.75rem; display: inline-block; margin-bottom: 1rem; font-weight: 600;">
                            SEO
                        </div>
                        <h3 style="margin-bottom: 1rem; color: var(--primary-color);">Advanced SEO Techniques for 2025</h3>
                        <p style="color: var(--text-color); font-size: 0.9rem; line-height: 1.6; margin-bottom: 1.5rem;">
                            Master the latest SEO strategies to boost your website's search rankings.
                        </p>
                        <a href="#" style="color: var(--accent-color); font-weight: 600; text-decoration: none;">Read More →</a>
                    </div>
                </div>
                
                <div class="card" data-aos="fade-up" data-aos-delay="300" style="overflow: hidden;">
                    <img src="assets/images/performance-optimization.jpg" alt="Performance Optimization" style="width: 100%; height: 200px; object-fit: cover;">
                    <div style="padding: 2rem;">
                        <div style="background: var(--accent-light); color: var(--accent-color); padding: 0.25rem 0.75rem; border-radius: 1rem; font-size: 0.75rem; display: inline-block; margin-bottom: 1rem; font-weight: 600;">
                            PERFORMANCE
                        </div>
                        <h3 style="margin-bottom: 1rem; color: var(--primary-color);">Website Speed Optimization</h3>
                        <p style="color: var(--text-color); font-size: 0.9rem; line-height: 1.6; margin-bottom: 1.5rem;">
                            Discover techniques to make your website lightning-fast and improve user experience.
                        </p>
                        <a href="#" style="color: var(--accent-color); font-weight: 600; text-decoration: none;">Read More →</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Subscription -->
    <section class="section" style="background: linear-gradient(135deg, var(--primary-color), var(--primary-light)); color: white; padding: 4rem 0;">
        <div class="container">
            <div class="text-center" data-aos="fade-up">
                <h2 style="color: white; margin-bottom: 1rem;">Stay Updated with Design Trends</h2>
                <p style="color: rgba(255,255,255,0.9); margin-bottom: 2rem; max-width: 600px; margin-left: auto; margin-right: auto;">
                    Subscribe to our newsletter and get the latest web design insights delivered to your inbox monthly.
                </p>
                <form style="max-width: 500px; margin: 0 auto; display: flex; gap: 1rem; flex-wrap: wrap; justify-content: center;">
                    <input type="email" placeholder="Enter your email" 
                           style="flex: 1; min-width: 250px; padding: 1rem; border: none; border-radius: 2rem; font-size: 1rem;">
                    <button type="submit" class="btn btn-secondary" style="padding: 1rem 2rem; border-radius: 2rem;">
                        Subscribe
                    </button>
                </form>
            </div>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>