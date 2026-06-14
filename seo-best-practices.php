<?php
$pageTitle = 'SEO Best Practices for Modern Websites';
$pageDescription = 'Learn essential SEO strategies that will help your website rank higher in search results and attract more organic traffic. Comprehensive guide to modern SEO techniques.';
include 'includes/header.php';
?>

    <!-- Article Header -->
    <section class="section" style="background: linear-gradient(135deg, var(--primary-color), var(--primary-light)); color: white; padding: 8rem 0 4rem; margin-top: 80px;">
        <div class="container">
            <div class="text-center" data-aos="fade-up">
                <div style="background: rgba(255,255,255,0.1); padding: 0.5rem 1.5rem; border-radius: 2rem; display: inline-block; margin-bottom: 2rem;">
                    <span style="color: var(--accent-color); font-weight: 600;">SEO Guide</span>
                </div>
                <h1 style="color: white; font-size: 4rem; margin-bottom: 1.5rem; line-height: 1.2;">SEO Best Practices for Modern Websites</h1>
                <p style="font-size: 1.25rem; color: rgba(255,255,255,0.9); max-width: 800px; margin: 0 auto 2rem;">
                    Learn essential SEO strategies that will help your website rank higher in search results and attract more organic traffic. A comprehensive guide to modern SEO techniques.
                </p>
                <div style="display: flex; align-items: center; justify-content: center; gap: 2rem; flex-wrap: wrap; color: rgba(255,255,255,0.8);">
                    <div style="display: flex; align-items: center; gap: 0.5rem;">
                        <i class="fas fa-calendar"></i>
                        <span>December 16, 2025</span>
                    </div>
                    <div style="display: flex; align-items: center; gap: 0.5rem;">
                        <i class="fas fa-clock"></i>
                        <span>12 min read</span>
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
                <img src="assets/images/seo-best-practices-hero.jpg" alt="SEO Best Practices 2025" 
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
                        Search Engine Optimization (SEO) continues to evolve rapidly in 2025, with new algorithms, 
                        AI-powered search features, and changing user behaviors reshaping the digital landscape. 
                        This comprehensive guide covers the essential SEO strategies that will help your website 
                        achieve better rankings and attract quality organic traffic.
                    </p>
                    
                    <div style="background: linear-gradient(135deg, var(--accent-color), #f39c12); padding: 2rem; border-radius: 1rem; color: white; text-align: center; margin-bottom: 2rem;">
                        <h3 style="color: white; margin-bottom: 1rem; display: flex; align-items: center; justify-content: center; gap: 0.5rem;">
                            <i class="fas fa-chart-line"></i>
                            SEO Impact Statistics
                        </h3>
                        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(150px, 1fr)); gap: 1rem; margin-top: 1.5rem;">
                            <div>
                                <div style="font-size: 2rem; font-weight: bold; margin-bottom: 0.5rem;">68%</div>
                                <div style="font-size: 0.9rem; opacity: 0.9;">of online experiences begin with search</div>
                            </div>
                            <div>
                                <div style="font-size: 2rem; font-weight: bold; margin-bottom: 0.5rem;">53%</div>
                                <div style="font-size: 0.9rem; opacity: 0.9;">of website traffic comes from organic search</div>
                            </div>
                            <div>
                                <div style="font-size: 2rem; font-weight: bold; margin-bottom: 0.5rem;">92%</div>
                                <div style="font-size: 0.9rem; opacity: 0.9;">of search traffic goes to page 1 results</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- SEO Fundamentals -->
                <div data-aos="fade-up" style="margin-bottom: 4rem;">
                    <h2 style="color: var(--primary-color); font-size: 2.5rem; margin-bottom: 2rem; border-bottom: 3px solid var(--accent-color); padding-bottom: 1rem;">
                        1. SEO Fundamentals: The Foundation
                    </h2>
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 2rem; margin-bottom: 2rem;">
                        <div>
                            <h4 style="color: var(--primary-color); margin-bottom: 1rem; display: flex; align-items: center; gap: 0.5rem;">
                                <i class="fas fa-search"></i>
                                Keyword Research & Strategy
                            </h4>
                            <p style="line-height: 1.8; color: var(--text-color); margin-bottom: 1.5rem;">
                                Effective SEO starts with understanding what your audience searches for. Modern keyword 
                                research goes beyond simple terms to include user intent, semantic keywords, and 
                                long-tail phrases.
                            </p>
                            <ul style="color: var(--text-color); line-height: 1.8; padding-left: 1.5rem;">
                                <li>Focus on user search intent</li>
                                <li>Target long-tail keywords</li>
                                <li>Analyze competitor keywords</li>
                                <li>Use semantic keyword clusters</li>
                            </ul>
                        </div>
                        <div>
                            <img src="assets/images/keyword-research.jpg" alt="Keyword Research Tools" 
                                 style="width: 100%; height: 250px; object-fit: cover; border-radius: 0.5rem;">
                        </div>
                    </div>
                </div>

                <!-- On-Page SEO -->
                <div data-aos="fade-up" style="margin-bottom: 4rem;">
                    <h2 style="color: var(--primary-color); font-size: 2.5rem; margin-bottom: 2rem; border-bottom: 3px solid var(--accent-color); padding-bottom: 1rem;">
                        2. On-Page SEO Optimization
                    </h2>
                    <div style="background: var(--light-gray); padding: 2rem; border-radius: 1rem; margin-bottom: 2rem;">
                        <h4 style="color: var(--primary-color); margin-bottom: 1.5rem; text-align: center;">Critical On-Page Elements</h4>
                        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 1.5rem;">
                            <div class="card" style="padding: 1.5rem; text-align: center; background: white;">
                                <i class="fas fa-heading" style="font-size: 2.5rem; color: var(--accent-color); margin-bottom: 1rem;"></i>
                                <h5 style="margin-bottom: 1rem;">Title Tags</h5>
                                <p style="color: var(--text-color); font-size: 0.9rem;">50-60 characters, include primary keyword, compelling and descriptive</p>
                            </div>
                            <div class="card" style="padding: 1.5rem; text-align: center; background: white;">
                                <i class="fas fa-align-left" style="font-size: 2.5rem; color: var(--accent-color); margin-bottom: 1rem;"></i>
                                <h5 style="margin-bottom: 1rem;">Meta Descriptions</h5>
                                <p style="color: var(--text-color); font-size: 0.9rem;">150-160 characters, include keywords, call-to-action</p>
                            </div>
                            <div class="card" style="padding: 1.5rem; text-align: center; background: white;">
                                <i class="fas fa-link" style="font-size: 2.5rem; color: var(--accent-color); margin-bottom: 1rem;"></i>
                                <h5 style="margin-bottom: 1rem;">URL Structure</h5>
                                <p style="color: var(--text-color); font-size: 0.9rem;">Clean, descriptive URLs with keywords, avoid parameters</p>
                            </div>
                            <div class="card" style="padding: 1.5rem; text-align: center; background: white;">
                                <i class="fas fa-list" style="font-size: 2.5rem; color: var(--accent-color); margin-bottom: 1rem;"></i>
                                <h5 style="margin-bottom: 1rem;">Header Tags</h5>
                                <p style="color: var(--text-color); font-size: 0.9rem;">Hierarchical structure H1-H6, include keywords naturally</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Content Optimization -->
                    <div style="background: linear-gradient(135deg, var(--primary-color), var(--primary-light)); padding: 3rem; border-radius: 1rem; color: white; margin-bottom: 2rem;">
                        <h4 style="color: white; margin-bottom: 1.5rem; text-align: center;">Content Optimization Checklist</h4>
                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 2rem;">
                            <div>
                                <ul style="color: rgba(255,255,255,0.9); line-height: 1.8;">
                                    <li>✓ Include primary keyword in first 100 words</li>
                                    <li>✓ Use keyword variations and synonyms</li>
                                    <li>✓ Write comprehensive, valuable content</li>
                                    <li>✓ Optimize images with alt text</li>
                                </ul>
                            </div>
                            <div>
                                <ul style="color: rgba(255,255,255,0.9); line-height: 1.8;">
                                    <li>✓ Include internal and external links</li>
                                    <li>✓ Use schema markup where applicable</li>
                                    <li>✓ Optimize for featured snippets</li>
                                    <li>✓ Ensure content readability</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Technical SEO -->
                <div data-aos="fade-up" style="margin-bottom: 4rem;">
                    <h2 style="color: var(--primary-color); font-size: 2.5rem; margin-bottom: 2rem; border-bottom: 3px solid var(--accent-color); padding-bottom: 1rem;">
                        3. Technical SEO Excellence
                    </h2>
                    <div style="position: relative; margin-bottom: 2rem;">
                        <img src="assets/images/technical-seo.jpg" alt="Technical SEO" 
                             style="width: 100%; height: 300px; object-fit: cover; border-radius: 1rem;">
                        <div style="position: absolute; top: 1rem; left: 1rem; background: rgba(0,0,0,0.8); color: white; padding: 0.5rem 1rem; border-radius: 2rem; font-size: 0.875rem;">
                            <i class="fas fa-cog"></i> Technical Optimization
                        </div>
                    </div>
                    
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem;">
                        <div style="background: white; border: 2px solid var(--light-gray); border-radius: 1rem; padding: 2rem;">
                            <h4 style="color: var(--primary-color); margin-bottom: 1.5rem; display: flex; align-items: center; gap: 0.5rem;">
                                <i class="fas fa-tachometer-alt"></i>
                                Page Speed Optimization
                            </h4>
                            <ul style="color: var(--text-color); line-height: 1.8; margin-bottom: 1rem;">
                                <li>Optimize images and use WebP format</li>
                                <li>Minimize CSS and JavaScript</li>
                                <li>Enable browser caching</li>
                                <li>Use Content Delivery Network (CDN)</li>
                                <li>Implement lazy loading</li>
                            </ul>
                            <div style="background: var(--accent-light); padding: 1rem; border-radius: 0.5rem; text-align: center;">
                                <strong style="color: var(--accent-color);">Target: &lt; 3 seconds load time</strong>
                            </div>
                        </div>
                        
                        <div style="background: white; border: 2px solid var(--light-gray); border-radius: 1rem; padding: 2rem;">
                            <h4 style="color: var(--primary-color); margin-bottom: 1.5rem; display: flex; align-items: center; gap: 0.5rem;">
                                <i class="fas fa-mobile-alt"></i>
                                Mobile Optimization
                            </h4>
                            <ul style="color: var(--text-color); line-height: 1.8; margin-bottom: 1rem;">
                                <li>Responsive design implementation</li>
                                <li>Mobile-friendly navigation</li>
                                <li>Optimized tap targets</li>
                                <li>Fast mobile page loading</li>
                                <li>Mobile Core Web Vitals</li>
                            </ul>
                            <div style="background: var(--accent-light); padding: 1rem; border-radius: 0.5rem; text-align: center;">
                                <strong style="color: var(--accent-color);">Mobile-First Indexing</strong>
                            </div>
                        </div>
                        
                        <div style="background: white; border: 2px solid var(--light-gray); border-radius: 1rem; padding: 2rem;">
                            <h4 style="color: var(--primary-color); margin-bottom: 1.5rem; display: flex; align-items: center; gap: 0.5rem;">
                                <i class="fas fa-sitemap"></i>
                                Site Structure
                            </h4>
                            <ul style="color: var(--text-color); line-height: 1.8; margin-bottom: 1rem;">
                                <li>XML sitemap creation</li>
                                <li>Robots.txt optimization</li>
                                <li>Breadcrumb navigation</li>
                                <li>Internal linking strategy</li>
                                <li>Canonical tags implementation</li>
                            </ul>
                            <div style="background: var(--accent-light); padding: 1rem; border-radius: 0.5rem; text-align: center;">
                                <strong style="color: var(--accent-color);">Clear Site Hierarchy</strong>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Core Web Vitals -->
                <div data-aos="fade-up" style="margin-bottom: 4rem;">
                    <h2 style="color: var(--primary-color); font-size: 2.5rem; margin-bottom: 2rem; border-bottom: 3px solid var(--accent-color); padding-bottom: 1rem;">
                        4. Core Web Vitals & User Experience
                    </h2>
                    <div style="background: linear-gradient(45deg, #667eea 0%, #764ba2 100%); padding: 3rem; border-radius: 1rem; color: white; margin-bottom: 2rem;">
                        <h3 style="color: white; margin-bottom: 2rem; text-align: center;">Core Web Vitals Metrics</h3>
                        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 2rem;">
                            <div style="text-align: center; background: rgba(255,255,255,0.1); padding: 2rem; border-radius: 1rem;">
                                <i class="fas fa-clock" style="font-size: 3rem; margin-bottom: 1rem; opacity: 0.9;"></i>
                                <h4 style="color: white; margin-bottom: 0.5rem;">LCP</h4>
                                <p style="color: rgba(255,255,255,0.9); font-size: 0.9rem;">Largest Contentful Paint</p>
                                <strong style="color: var(--accent-color);">&lt; 2.5 seconds</strong>
                            </div>
                            <div style="text-align: center; background: rgba(255,255,255,0.1); padding: 2rem; border-radius: 1rem;">
                                <i class="fas fa-mouse-pointer" style="font-size: 3rem; margin-bottom: 1rem; opacity: 0.9;"></i>
                                <h4 style="color: white; margin-bottom: 0.5rem;">FID</h4>
                                <p style="color: rgba(255,255,255,0.9); font-size: 0.9rem;">First Input Delay</p>
                                <strong style="color: var(--accent-color);">&lt; 100 milliseconds</strong>
                            </div>
                            <div style="text-align: center; background: rgba(255,255,255,0.1); padding: 2rem; border-radius: 1rem;">
                                <i class="fas fa-expand-arrows-alt" style="font-size: 3rem; margin-bottom: 1rem; opacity: 0.9;"></i>
                                <h4 style="color: white; margin-bottom: 0.5rem;">CLS</h4>
                                <p style="color: rgba(255,255,255,0.9); font-size: 0.9rem;">Cumulative Layout Shift</p>
                                <strong style="color: var(--accent-color);">&lt; 0.1</strong>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Local SEO -->
                <div data-aos="fade-up" style="margin-bottom: 4rem;">
                    <h2 style="color: var(--primary-color); font-size: 2.5rem; margin-bottom: 2rem; border-bottom: 3px solid var(--accent-color); padding-bottom: 1rem;">
                        5. Local SEO Optimization
                    </h2>
                    <div style="display: grid; grid-template-columns: 2fr 1fr; gap: 2rem; margin-bottom: 2rem;">
                        <div>
                            <p style="line-height: 1.8; color: var(--text-color); margin-bottom: 2rem;">
                                Local SEO is crucial for businesses serving specific geographic areas. With the rise of 
                                "near me" searches and mobile usage, local optimization can significantly impact your 
                                visibility in local search results.
                            </p>
                            <div style="background: var(--light-gray); padding: 1.5rem; border-radius: 1rem;">
                                <h4 style="color: var(--primary-color); margin-bottom: 1rem;">Local SEO Essentials:</h4>
                                <ul style="color: var(--text-color); line-height: 1.8;">
                                    <li>Claim and optimize Google Business Profile</li>
                                    <li>Consistent NAP (Name, Address, Phone) across platforms</li>
                                    <li>Collect and respond to customer reviews</li>
                                    <li>Create location-specific content</li>
                                    <li>Build local backlinks and citations</li>
                                    <li>Use local schema markup</li>
                                </ul>
                            </div>
                        </div>
                        <div>
                            <img src="assets/images/local-seo.jpg" alt="Local SEO" 
                                 style="width: 100%; height: 300px; object-fit: cover; border-radius: 1rem;">
                        </div>
                    </div>
                </div>

                <!-- SEO Tools -->
                <div data-aos="fade-up" style="margin-bottom: 4rem;">
                    <h2 style="color: var(--primary-color); font-size: 2.5rem; margin-bottom: 2rem; border-bottom: 3px solid var(--accent-color); padding-bottom: 1rem;">
                        6. Essential SEO Tools & Analytics
                    </h2>
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 1.5rem;">
                        <div class="card" style="padding: 2rem; text-align: center; transition: transform 0.3s ease;" 
                             onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='translateY(0)'">
                            <i class="fab fa-google" style="font-size: 3rem; color: #4285f4; margin-bottom: 1rem;"></i>
                            <h4 style="margin-bottom: 1rem;">Google Analytics 4</h4>
                            <p style="color: var(--text-color); font-size: 0.9rem; margin-bottom: 1rem;">Track website performance and user behavior</p>
                            <div style="background: #4285f4; color: white; padding: 0.5rem 1rem; border-radius: 1rem; font-size: 0.8rem;">
                                FREE
                            </div>
                        </div>
                        
                        <div class="card" style="padding: 2rem; text-align: center; transition: transform 0.3s ease;" 
                             onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='translateY(0)'">
                            <i class="fab fa-google" style="font-size: 3rem; color: #00ac47; margin-bottom: 1rem;"></i>
                            <h4 style="margin-bottom: 1rem;">Google Search Console</h4>
                            <p style="color: var(--text-color); font-size: 0.9rem; margin-bottom: 1rem;">Monitor search performance and indexing</p>
                            <div style="background: #00ac47; color: white; padding: 0.5rem 1rem; border-radius: 1rem; font-size: 0.8rem;">
                                FREE
                            </div>
                        </div>
                        
                        <div class="card" style="padding: 2rem; text-align: center; transition: transform 0.3s ease;" 
                             onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='translateY(0)'">
                            <i class="fas fa-chart-bar" style="font-size: 3rem; color: var(--accent-color); margin-bottom: 1rem;"></i>
                            <h4 style="margin-bottom: 1rem;">SEMrush / Ahrefs</h4>
                            <p style="color: var(--text-color); font-size: 0.9rem; margin-bottom: 1rem;">Comprehensive SEO analysis and keyword research</p>
                            <div style="background: var(--accent-color); color: white; padding: 0.5rem 1rem; border-radius: 1rem; font-size: 0.8rem;">
                                PREMIUM
                            </div>
                        </div>
                        
                        <div class="card" style="padding: 2rem; text-align: center; transition: transform 0.3s ease;" 
                             onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='translateY(0)'">
                            <i class="fas fa-tachometer-alt" style="font-size: 3rem; color: #ff6b35; margin-bottom: 1rem;"></i>
                            <h4 style="margin-bottom: 1rem;">PageSpeed Insights</h4>
                            <p style="color: var(--text-color); font-size: 0.9rem; margin-bottom: 1rem;">Analyze page speed and Core Web Vitals</p>
                            <div style="background: #ff6b35; color: white; padding: 0.5rem 1rem; border-radius: 1rem; font-size: 0.8rem;">
                                FREE
                            </div>
                        </div>
                    </div>
                </div>

                <!-- SEO Checklist -->
                <div data-aos="fade-up" style="margin-bottom: 4rem;">
                    <h2 style="color: var(--primary-color); font-size: 2.5rem; margin-bottom: 2rem; border-bottom: 3px solid var(--accent-color); padding-bottom: 1rem;">
                        7. Complete SEO Checklist
                    </h2>
                    <div style="background: var(--light-gray); padding: 2rem; border-radius: 1rem;">
                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 3rem;">
                            <div>
                                <h4 style="color: var(--primary-color); margin-bottom: 1.5rem;">✅ Technical Foundation</h4>
                                <ul style="color: var(--text-color); line-height: 1.8; list-style: none; padding: 0;">
                                    <li style="margin-bottom: 0.5rem;">☐ SSL certificate installed</li>
                                    <li style="margin-bottom: 0.5rem;">☐ Mobile-responsive design</li>
                                    <li style="margin-bottom: 0.5rem;">☐ Fast loading speed (&lt;3s)</li>
                                    <li style="margin-bottom: 0.5rem;">☐ XML sitemap created</li>
                                    <li style="margin-bottom: 0.5rem;">☐ Robots.txt configured</li>
                                    <li style="margin-bottom: 0.5rem;">☐ Google Analytics setup</li>
                                    <li style="margin-bottom: 0.5rem;">☐ Search Console verified</li>
                                </ul>
                            </div>
                            <div>
                                <h4 style="color: var(--primary-color); margin-bottom: 1.5rem;">✅ Content Optimization</h4>
                                <ul style="color: var(--text-color); line-height: 1.8; list-style: none; padding: 0;">
                                    <li style="margin-bottom: 0.5rem;">☐ Keyword research completed</li>
                                    <li style="margin-bottom: 0.5rem;">☐ Title tags optimized</li>
                                    <li style="margin-bottom: 0.5rem;">☐ Meta descriptions written</li>
                                    <li style="margin-bottom: 0.5rem;">☐ Header tags structured</li>
                                    <li style="margin-bottom: 0.5rem;">☐ Images alt text added</li>
                                    <li style="margin-bottom: 0.5rem;">☐ Internal linking implemented</li>
                                    <li style="margin-bottom: 0.5rem;">☐ Schema markup added</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Conclusion -->
                <div data-aos="fade-up" style="margin-bottom: 3rem;">
                    <h2 style="color: var(--primary-color); font-size: 2.5rem; margin-bottom: 2rem; border-bottom: 3px solid var(--accent-color); padding-bottom: 1rem;">
                        Conclusion: SEO Success in 2025
                    </h2>
                    <p style="font-size: 1.125rem; line-height: 1.8; color: var(--text-color); margin-bottom: 2rem;">
                        SEO in 2025 is about creating exceptional user experiences while satisfying search engine requirements. 
                        Focus on providing value to your users, ensure technical excellence, and stay updated with the latest 
                        algorithm changes. Remember, SEO is a long-term strategy that requires patience and consistency.
                    </p>
                    <div style="background: linear-gradient(135deg, var(--primary-color), var(--accent-color)); padding: 3rem; border-radius: 1rem; color: white; text-align: center;">
                        <h3 style="color: white; margin-bottom: 1rem;">Need Professional SEO Help?</h3>
                        <p style="color: rgba(255,255,255,0.9); margin-bottom: 2rem; max-width: 600px; margin-left: auto; margin-right: auto;">
                            Our SEO experts at PajemoTech can help you implement these best practices and develop a 
                            comprehensive SEO strategy for your website.
                        </p>
                        <a href="contact.php" class="btn btn-secondary" style="padding: 1rem 2rem; font-size: 1.125rem;">
                            Get SEO Consultation
                        </a>
                    </div>
                </div>

                <!-- Share Section -->
                <div data-aos="fade-up" style="border-top: 2px solid var(--light-gray); padding-top: 2rem; text-align: center;">
                    <h4 style="margin-bottom: 1.5rem; color: var(--primary-color);">Share This Guide</h4>
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
                <h2 style="color: var(--primary-color); margin-bottom: 1rem;">Related SEO Articles</h2>
                <p style="color: var(--text-color); max-width: 600px; margin: 0 auto;">
                    Deepen your SEO knowledge with these comprehensive guides
                </p>
            </div>
            
            <div class="grid grid-cols-3" style="gap: 2rem;">
                <div class="card" data-aos="fade-up" data-aos-delay="100" style="overflow: hidden;">
                    <img src="assets/images/content-marketing-seo.jpg" alt="Content Marketing SEO" style="width: 100%; height: 200px; object-fit: cover;">
                    <div style="padding: 2rem;">
                        <div style="background: var(--accent-light); color: var(--accent-color); padding: 0.25rem 0.75rem; border-radius: 1rem; font-size: 0.75rem; display: inline-block; margin-bottom: 1rem; font-weight: 600;">
                            CONTENT SEO
                        </div>
                        <h3 style="margin-bottom: 1rem; color: var(--primary-color);">Content Marketing & SEO Strategy</h3>
                        <p style="color: var(--text-color); font-size: 0.9rem; line-height: 1.6; margin-bottom: 1.5rem;">
                            Learn how to create content that ranks well and engages your audience.
                        </p>
                        <a href="#" style="color: var(--accent-color); font-weight: 600; text-decoration: none;">Read More →</a>
                    </div>
                </div>
                
                <div class="card" data-aos="fade-up" data-aos-delay="200" style="overflow: hidden;">
                    <img src="assets/images/link-building.jpg" alt="Link Building" style="width: 100%; height: 200px; object-fit: cover;">
                    <div style="padding: 2rem;">
                        <div style="background: var(--accent-light); color: var(--accent-color); padding: 0.25rem 0.75rem; border-radius: 1rem; font-size: 0.75rem; display: inline-block; margin-bottom: 1rem; font-weight: 600;">
                            LINK BUILDING
                        </div>
                        <h3 style="margin-bottom: 1rem; color: var(--primary-color);">Advanced Link Building Strategies</h3>
                        <p style="color: var(--text-color); font-size: 0.9rem; line-height: 1.6; margin-bottom: 1.5rem;">
                            Master the art of earning high-quality backlinks for better rankings.
                        </p>
                        <a href="#" style="color: var(--accent-color); font-weight: 600; text-decoration: none;">Read More →</a>
                    </div>
                </div>
                
                <div class="card" data-aos="fade-up" data-aos-delay="300" style="overflow: hidden;">
                    <img src="assets/images/ecommerce-seo.jpg" alt="E-commerce SEO" style="width: 100%; height: 200px; object-fit: cover;">
                    <div style="padding: 2rem;">
                        <div style="background: var(--accent-light); color: var(--accent-color); padding: 0.25rem 0.75rem; border-radius: 1rem; font-size: 0.75rem; display: inline-block; margin-bottom: 1rem; font-weight: 600;">
                            E-COMMERCE
                        </div>
                        <h3 style="margin-bottom: 1rem; color: var(--primary-color);">E-commerce SEO Guide</h3>
                        <p style="color: var(--text-color); font-size: 0.9rem; line-height: 1.6; margin-bottom: 1.5rem;">
                            Optimize your online store for better product visibility and sales.
                        </p>
                        <a href="#" style="color: var(--accent-color); font-weight: 600; text-decoration: none;">Read More →</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SEO Tools Section -->
    <section class="section" style="background: linear-gradient(135deg, var(--primary-color), var(--primary-light)); color: white; padding: 4rem 0;">
        <div class="container">
            <div class="text-center" data-aos="fade-up">
                <h2 style="color: white; margin-bottom: 1rem;">Free SEO Tools & Resources</h2>
                <p style="color: rgba(255,255,255,0.9); margin-bottom: 3rem; max-width: 600px; margin-left: auto; margin-right: auto;">
                    Use these free tools to analyze and improve your website's SEO performance
                </p>
                <div style="display: flex; justify-content: center; gap: 2rem; flex-wrap: wrap;">
                    <a href="https://pagespeed.web.dev/" target="_blank" class="btn btn-secondary" style="padding: 1rem 2rem;">
                        <i class="fas fa-tachometer-alt"></i> PageSpeed Test
                    </a>
                    <a href="https://search.google.com/search-console" target="_blank" class="btn btn-secondary" style="padding: 1rem 2rem;">
                        <i class="fab fa-google"></i> Search Console
                    </a>
                    <a href="https://analytics.google.com/" target="_blank" class="btn btn-secondary" style="padding: 1rem 2rem;">
                        <i class="fas fa-chart-line"></i> Google Analytics
                    </a>
                </div>
            </div>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>