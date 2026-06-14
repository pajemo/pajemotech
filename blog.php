<?php
$pageTitle = 'Blog';
$pageDescription = 'Latest insights on web design, development, SEO, and digital marketing. Expert tips and trends for businesses in Ghana looking to improve their online presence and digital strategy.';
$pageKeywords = 'web design blog, digital marketing tips, SEO best practices, web development trends, Ghana digital marketing, website optimization, online business tips';
include 'includes/header.php';
?>

    <!-- Page Header -->
    <section class="section" style="background: linear-gradient(135deg, var(--primary-color), var(--primary-light)); color: white; padding: 8rem 0 4rem; margin-top: 80px;">
        <div class="container">
            <div class="text-center" data-aos="fade-up">
                <h1 style="color: white; font-size: 4rem; margin-bottom: 1.5rem;">Our Blog</h1>
                <p style="font-size: 1.25rem; color: rgba(255,255,255,0.9); max-width: 600px; margin: 0 auto;">
                    Insights, tips, and trends from the world of web design and development.
                </p>
            </div>
        </div>
    </section>

    <!-- Blog Posts -->
    <section class="section">
        <div class="container">
            <div class="grid grid-cols-3 blog-grid">
                <!-- Blog Post 1 -->
                <div class="card" data-aos="fade-up" data-aos-delay="100">
                    <img src="assets/images/blog-1.JPG" alt="Web Design Trends 2024" style="width: 100%; height: 250px; object-fit: cover;">
                    <div class="card-body">
                        <div style="display: flex; gap: 0.5rem; margin-bottom: 1rem;">
                            <span style="background: var(--accent-color); color: white; padding: 0.25rem 0.75rem; border-radius: 1rem; font-size: 0.75rem;">Design</span>
                            <span style="background: var(--light-gray); color: var(--secondary-color); padding: 0.25rem 0.75rem; border-radius: 1rem; font-size: 0.75rem;">March 15, 2024</span>
                        </div>
                        <h3 style="margin-bottom: 1rem;">Top Web Design Trends for 2025</h3>
                        <p style="color: var(--secondary-color); margin-bottom: 1.5rem;">
                            Discover the latest web design trends that will shape the digital landscape in 2025. From minimalist layouts to interactive elements...
                        </p>
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <a href="blog-trends-2025.php" class="btn btn-outline" style="padding: 0.5rem 1rem;">Read More</a>
                            <span style="color: var(--secondary-color); font-size: 0.875rem;">5 min read</span>
                        </div>
                    </div>
                </div>

                <!-- Blog Post 2 -->
                <div class="card" data-aos="fade-up" data-aos-delay="200">
                    <img src="assets/images/blog-2.JPG" alt="SEO Best Practices" style="width: 100%; height: 250px; object-fit: cover;">
                    <div class="card-body">
                        <div style="display: flex; gap: 0.5rem; margin-bottom: 1rem;">
                            <span style="background: var(--primary-color); color: white; padding: 0.25rem 0.75rem; border-radius: 1rem; font-size: 0.75rem;">SEO</span>
                            <span style="background: var(--light-gray); color: var(--secondary-color); padding: 0.25rem 0.75rem; border-radius: 1rem; font-size: 0.75rem;">December 16, 2025</span>
                        </div>
                        <h3 style="margin-bottom: 1rem;">SEO Best Practices for Modern Websites</h3>
                        <p style="color: var(--secondary-color); margin-bottom: 1.5rem;">
                            Learn essential SEO strategies that will help your website rank higher in search results and attract more organic traffic...
                        </p>
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <a href="seo-best-practices.php" class="btn btn-outline" style="padding: 0.5rem 1rem;">Read More</a>
                            <span style="color: var(--secondary-color); font-size: 0.875rem;">12 min read</span>
                        </div>
                    </div>
                </div>

                <!-- Blog Post 3 -->
                <div class="card" data-aos="fade-up" data-aos-delay="300">
                    <img src="assets/images/blog-3.JPG" alt="E-commerce Development" style="width: 100%; height: 250px; object-fit: cover;">
                    <div class="card-body">
                        <div style="display: flex; gap: 0.5rem; margin-bottom: 1rem;">
                            <span style="background: var(--secondary-color); color: white; padding: 0.25rem 0.75rem; border-radius: 1rem; font-size: 0.75rem;">E-commerce</span>
                            <span style="background: var(--light-gray); color: var(--secondary-color); padding: 0.25rem 0.75rem; border-radius: 1rem; font-size: 0.75rem;">December 16, 2025</span>
                        </div>
                        <h3 style="margin-bottom: 1rem;">Building Successful E-commerce Platforms</h3>
                        <p style="color: var(--secondary-color); margin-bottom: 1.5rem;">
                            Key considerations and best practices for developing e-commerce websites that convert visitors into customers...
                        </p>
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <a href="ecommerce-platforms.php" class="btn btn-outline" style="padding: 0.5rem 1rem;">Read More</a>
                            <span style="color: var(--secondary-color); font-size: 0.875rem;">10 min read</span>
                        </div>
                    </div>
                </div>

                <!-- Blog Post 4 -->
                <div class="card" data-aos="fade-up" data-aos-delay="400">
                    <img src="assets/images/blog-4.JPG" alt="Mobile Optimization" style="width: 100%; height: 250px; object-fit: cover;">
                    <div class="card-body">
                        <div style="display: flex; gap: 0.5rem; margin-bottom: 1rem;">
                            <span style="background: var(--success); color: white; padding: 0.25rem 0.75rem; border-radius: 1rem; font-size: 0.75rem;">Mobile</span>
                            <span style="background: var(--light-gray); color: var(--secondary-color); padding: 0.25rem 0.75rem; border-radius: 1rem; font-size: 0.75rem;">December 14, 2025</span>
                        </div>
                        <h3 style="margin-bottom: 1rem;">Mobile-First Design Principles</h3>
                        <p style="color: var(--secondary-color); margin-bottom: 1.5rem;">
                            Why mobile-first design is crucial for modern websites and how to implement it effectively...
                        </p>
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <a href="mobile-first-design.php" class="btn btn-outline" style="padding: 0.5rem 1rem;">Read More</a>
                            <span style="color: var(--secondary-color); font-size: 0.875rem;">8 min read</span>
                        </div>
                    </div>
                </div>

                <!-- Blog Post 5 -->
                <div class="card" data-aos="fade-up" data-aos-delay="500">
                    <img src="assets/images/blog-5.JPG" alt="Website Security" style="width: 100%; height: 250px; object-fit: cover;">
                    <div class="card-body">
                        <div style="display: flex; gap: 0.5rem; margin-bottom: 1rem;">
                            <span style="background: var(--error); color: white; padding: 0.25rem 0.75rem; border-radius: 1rem; font-size: 0.75rem;">Security</span>
                            <span style="background: var(--light-gray); color: var(--secondary-color); padding: 0.25rem 0.75rem; border-radius: 1rem; font-size: 0.75rem;">December 15, 2025</span>
                        </div>
                        <h3 style="margin-bottom: 1rem;">Essential Website Security Measures</h3>
                        <p style="color: var(--secondary-color); margin-bottom: 1.5rem;">
                            Protect your website and users' data with these essential security practices and tools...
                        </p>
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <a href="website-security.php" class="btn btn-outline" style="padding: 0.5rem 1rem;">Read More</a>
                            <span style="color: var(--secondary-color); font-size: 0.875rem;">9 min read</span>
                        </div>
                    </div>
                </div>

                <!-- Blog Post 6 -->
                <div class="card" data-aos="fade-up" data-aos-delay="600">
                    <img src="assets/images/blog-6.JPG" alt="Performance Optimization" style="width: 100%; height: 250px; object-fit: cover;">
                    <div class="card-body">
                        <div style="display: flex; gap: 0.5rem; margin-bottom: 1rem;">
                            <span style="background: var(--warning); color: white; padding: 0.25rem 0.75rem; border-radius: 1rem; font-size: 0.75rem;">Performance</span>
                            <span style="background: var(--light-gray); color: var(--secondary-color); padding: 0.25rem 0.75rem; border-radius: 1rem; font-size: 0.75rem;">December 16, 2025</span>
                        </div>
                        <h3 style="margin-bottom: 1rem;">Website Performance Optimization Tips</h3>
                        <p style="color: var(--secondary-color); margin-bottom: 1.5rem;">
                            Boost your website's speed and performance with these proven optimization techniques...
                        </p>
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <a href="performance-optimization.php" class="btn btn-outline" style="padding: 0.5rem 1rem;">Read More</a>
                            <span style="color: var(--secondary-color); font-size: 0.875rem;">7 min read</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pagination 
            <div style="text-align: center; margin-top: 3rem;" data-aos="fade-up">
                <div style="display: inline-flex; gap: 0.5rem; align-items: center;">
                    <button class="btn btn-outline" style="padding: 0.5rem 1rem;" disabled>
                        <i class="fas fa-chevron-left"></i> Previous
                    </button>
                    <span style="background: var(--primary-color); color: white; padding: 0.5rem 1rem; border-radius: 0.5rem;">1</span>
                    <a href="#" style="padding: 0.5rem 1rem; color: var(--secondary-color);">2</a>
                    <a href="#" style="padding: 0.5rem 1rem; color: var(--secondary-color);">3</a>
                    <span style="padding: 0.5rem 1rem; color: var(--secondary-color);">...</span>
                    <a href="#" class="btn btn-outline" style="padding: 0.5rem 1rem;">
                        Next <i class="fas fa-chevron-right"></i>
                    </a>
                </div>
            </div>
            -->
        </div>
    </section>

    <!-- Newsletter Section
    <section class="section" style="background: var(--light-gray);">
        <div class="container">
            <div class="text-center" data-aos="fade-up">
                <h2 style="margin-bottom: 1rem;">Stay Updated</h2>
                <p style="color: var(--secondary-color); margin-bottom: 2rem; max-width: 500px; margin-left: auto; margin-right: auto;">
                    Subscribe to our newsletter to get the latest insights, tips, and updates delivered to your inbox.
                </p>
                <form style="max-width: 400px; margin: 0 auto;">
                    <div style="display: flex; gap: 1rem;">
                        <input type="email" placeholder="Enter your email" class="form-input" style="flex: 1;">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-paper-plane"></i> Subscribe
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
     -->
    <!-- CTA Section -->
    <section class="section" style="background: linear-gradient(135deg, var(--primary-color), var(--primary-light)); color: white; text-align: center;">
        <div class="container">
            <div data-aos="fade-up">
                <h2 style="color: white; font-size: 2.5rem; margin-bottom: 1.5rem;">Need Expert Advice?</h2>
                <p style="font-size: 1.125rem; color: rgba(255,255,255,0.9); margin-bottom: 2rem; max-width: 500px; margin-left: auto; margin-right: auto;">
                    Let's discuss your project and see how we can help bring your vision to life.
                </p>
                <a href="contact.php" class="btn btn-accent btn-lg">
                    <i class="fas fa-comment"></i> Get Free Consultation
                </a>
            </div>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>