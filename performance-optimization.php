<?php
$pageTitle = 'Website Performance Optimization Tips';
$pageDescription = 'Boost your websites speed and performance with these proven optimization techniques. Learn how to create lightning-fast websites that users love.';
include 'includes/header.php';
?>

    <!-- Article Header -->
    <section class="section" style="background: linear-gradient(135deg, #f59e0b, #d97706); color: white; padding: 8rem 0 4rem; margin-top: 80px;">
        <div class="container">
            <div class="text-center" data-aos="fade-up">
                <div style="background: rgba(255,255,255,0.1); padding: 0.5rem 1.5rem; border-radius: 2rem; display: inline-block; margin-bottom: 2rem;">
                    <span style="color: var(--accent-color); font-weight: 600;">Performance Guide</span>
                </div>
                <h1 style="color: white; font-size: 4rem; margin-bottom: 1.5rem; line-height: 1.2;">Website Performance Optimization Tips</h1>
                <p style="font-size: 1.25rem; color: rgba(255,255,255,0.9); max-width: 800px; margin: 0 auto 2rem;">
                    Boost your website's speed and performance with these proven optimization techniques. Create lightning-fast experiences that users love and search engines reward.
                </p>
                <div style="display: flex; align-items: center; justify-content: center; gap: 2rem; flex-wrap: wrap; color: rgba(255,255,255,0.8);">
                    <div style="display: flex; align-items: center; gap: 0.5rem;">
                        <i class="fas fa-calendar"></i>
                        <span>December 16, 2025</span>
                    </div>
                    <div style="display: flex; align-items: center; gap: 0.5rem;">
                        <i class="fas fa-clock"></i>
                        <span>7 min read</span>
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
                <img src="assets/images/performance-optimization-hero.jpg" alt="Website Performance Optimization" 
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
                        Website performance has become a critical factor for success in 2025. With users expecting 
                        lightning-fast loading times and search engines prioritizing speed in rankings, optimizing 
                        your website's performance is no longer optional—it's essential for survival in the digital landscape.
                    </p>
                    
                    <div style="background: linear-gradient(135deg, #f59e0b, #d97706); padding: 2rem; border-radius: 1rem; color: white; text-align: center; margin-bottom: 2rem;">
                        <h3 style="color: white; margin-bottom: 1rem; display: flex; align-items: center; justify-content: center; gap: 0.5rem;">
                            <i class="fas fa-tachometer-alt"></i>
                            Performance Impact
                        </h3>
                        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(150px, 1fr)); gap: 1rem; margin-top: 1.5rem;">
                            <div>
                                <div style="font-size: 2rem; font-weight: bold; margin-bottom: 0.5rem;">53%</div>
                                <div style="font-size: 0.9rem; opacity: 0.9;">users abandon sites &gt; 3s load time</div>
                            </div>
                            <div>
                                <div style="font-size: 2rem; font-weight: bold; margin-bottom: 0.5rem;">7%</div>
                                <div style="font-size: 0.9rem; opacity: 0.9;">conversion loss per 1s delay</div>
                            </div>
                            <div>
                                <div style="font-size: 2rem; font-weight: bold; margin-bottom: 0.5rem;">2.5s</div>
                                <div style="font-size: 0.9rem; opacity: 0.9;">Google's Core Web Vitals target</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Core Web Vitals -->
                <div data-aos="fade-up" style="margin-bottom: 4rem;">
                    <h2 style="color: var(--primary-color); font-size: 2.5rem; margin-bottom: 2rem; border-bottom: 3px solid var(--accent-color); padding-bottom: 1rem;">
                        1. Understanding Core Web Vitals
                    </h2>
                    <p style="line-height: 1.8; color: var(--text-color); margin-bottom: 2rem;">
                        Core Web Vitals are Google's essential metrics for measuring real-world user experience. These 
                        metrics directly impact your search rankings and user satisfaction.
                    </p>
                    
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 2rem; margin-bottom: 2rem;">
                        <div class="card" style="padding: 2rem; border-left: 4px solid #10b981; text-align: center;">
                            <i class="fas fa-clock" style="font-size: 3rem; color: #10b981; margin-bottom: 1rem;"></i>
                            <h4 style="color: var(--primary-color); margin-bottom: 1rem;">Largest Contentful Paint (LCP)</h4>
                            <p style="color: var(--text-color); margin-bottom: 1rem; line-height: 1.6;">
                                Measures loading performance. Should occur within 2.5 seconds.
                            </p>
                            <div style="background: #d1fae5; padding: 1rem; border-radius: 0.5rem;">
                                <strong style="color: #065f46;">Good: ≤ 2.5s</strong><br>
                                <small style="color: #047857;">Needs Improvement: 2.5s-4.0s</small><br>
                                <small style="color: #dc2626;">Poor: > 4.0s</small>
                            </div>
                        </div>
                        
                        <div class="card" style="padding: 2rem; border-left: 4px solid #3b82f6; text-align: center;">
                            <i class="fas fa-mouse-pointer" style="font-size: 3rem; color: #3b82f6; margin-bottom: 1rem;"></i>
                            <h4 style="color: var(--primary-color); margin-bottom: 1rem;">First Input Delay (FID)</h4>
                            <p style="color: var(--text-color); margin-bottom: 1rem; line-height: 1.6;">
                                Measures interactivity. Should be less than 100 milliseconds.
                            </p>
                            <div style="background: #dbeafe; padding: 1rem; border-radius: 0.5rem;">
                                <strong style="color: #1e40af;">Good: ≤ 100ms</strong><br>
                                <small style="color: #1d4ed8;">Needs Improvement: 100ms-300ms</small><br>
                                <small style="color: #dc2626;">Poor: > 300ms</small>
                            </div>
                        </div>
                        
                        <div class="card" style="padding: 2rem; border-left: 4px solid #8b5cf6; text-align: center;">
                            <i class="fas fa-expand-arrows-alt" style="font-size: 3rem; color: #8b5cf6; margin-bottom: 1rem;"></i>
                            <h4 style="color: var(--primary-color); margin-bottom: 1rem;">Cumulative Layout Shift (CLS)</h4>
                            <p style="color: var(--text-color); margin-bottom: 1rem; line-height: 1.6;">
                                Measures visual stability. Should maintain a score of less than 0.1.
                            </p>
                            <div style="background: #ede9fe; padding: 1rem; border-radius: 0.5rem;">
                                <strong style="color: #6b21a8;">Good: ≤ 0.1</strong><br>
                                <small style="color: #7c3aed;">Needs Improvement: 0.1-0.25</small><br>
                                <small style="color: #dc2626;">Poor: > 0.25</small>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Image Optimization -->
                <div data-aos="fade-up" style="margin-bottom: 4rem;">
                    <h2 style="color: var(--primary-color); font-size: 2.5rem; margin-bottom: 2rem; border-bottom: 3px solid var(--accent-color); padding-bottom: 1rem;">
                        2. Image Optimization Strategies
                    </h2>
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 2rem; margin-bottom: 2rem;">
                        <div>
                            <h4 style="color: var(--primary-color); margin-bottom: 1rem;">Why Images Matter</h4>
                            <p style="line-height: 1.8; color: var(--text-color); margin-bottom: 1.5rem;">
                                Images typically account for 60-70% of a website's total size. Optimizing images can 
                                dramatically improve loading times and user experience.
                            </p>
                            <ul style="color: var(--text-color); line-height: 1.8;">
                                <li>Choose the right format (WebP, AVIF)</li>
                                <li>Compress without quality loss</li>
                                <li>Use appropriate dimensions</li>
                                <li>Implement lazy loading</li>
                                <li>Optimize for retina displays</li>
                            </ul>
                        </div>
                        <div>
                            <img src="assets/images/image-optimization.jpg" alt="Image Optimization" 
                                 style="width: 100%; height: 250px; object-fit: cover; border-radius: 0.5rem;">
                        </div>
                    </div>
                    
                    <div style="background: var(--light-gray); padding: 2rem; border-radius: 1rem;">
                        <h4 style="color: var(--primary-color); margin-bottom: 1rem; text-align: center;">Image Format Comparison</h4>
                        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1.5rem;">
                            <div style="background: white; padding: 1.5rem; border-radius: 0.5rem; text-align: center;">
                                <h5 style="color: #059669; margin-bottom: 0.5rem;">WebP</h5>
                                <p style="font-size: 0.9rem; color: var(--text-color); margin-bottom: 0.5rem;">25-35% smaller than JPEG</p>
                                <small style="color: #059669;">✓ Modern browsers</small>
                            </div>
                            <div style="background: white; padding: 1.5rem; border-radius: 0.5rem; text-align: center;">
                                <h5 style="color: #3b82f6; margin-bottom: 0.5rem;">AVIF</h5>
                                <p style="font-size: 0.9rem; color: var(--text-color); margin-bottom: 0.5rem;">50% smaller than JPEG</p>
                                <small style="color: #3b82f6;">✓ Next-generation format</small>
                            </div>
                            <div style="background: white; padding: 1.5rem; border-radius: 0.5rem; text-align: center;">
                                <h5 style="color: #6b7280; margin-bottom: 0.5rem;">JPEG</h5>
                                <p style="font-size: 0.9rem; color: var(--text-color); margin-bottom: 0.5rem;">Legacy format</p>
                                <small style="color: #6b7280;">✓ Universal support</small>
                            </div>
                            <div style="background: white; padding: 1.5rem; border-radius: 0.5rem; text-align: center;">
                                <h5 style="color: #8b5cf6; margin-bottom: 0.5rem;">SVG</h5>
                                <p style="font-size: 0.9rem; color: var(--text-color); margin-bottom: 0.5rem;">Vector graphics</p>
                                <small style="color: #8b5cf6;">✓ Scalable & small</small>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Code Optimization -->
                <div data-aos="fade-up" style="margin-bottom: 4rem;">
                    <h2 style="color: var(--primary-color); font-size: 2.5rem; margin-bottom: 2rem; border-bottom: 3px solid var(--accent-color); padding-bottom: 1rem;">
                        3. Code Optimization Techniques
                    </h2>
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem;">
                        <div class="card" style="padding: 2rem; border-left: 4px solid var(--accent-color);">
                            <h4 style="color: var(--primary-color); margin-bottom: 1rem; display: flex; align-items: center; gap: 0.5rem;">
                                <i class="fab fa-css3-alt"></i>
                                CSS Optimization
                            </h4>
                            <ul style="color: var(--text-color); line-height: 1.8; margin-bottom: 1rem;">
                                <li>Minimize and compress CSS files</li>
                                <li>Remove unused CSS rules</li>
                                <li>Use CSS sprites for small images</li>
                                <li>Implement critical CSS inlining</li>
                                <li>Optimize CSS delivery</li>
                            </ul>
                            <div style="background: #fef3c7; padding: 1rem; border-radius: 0.5rem; border-left: 4px solid #f59e0b;">
                                <small style="color: #92400e;"><strong>Tip:</strong> Load critical CSS inline and defer non-critical styles</small>
                            </div>
                        </div>
                        
                        <div class="card" style="padding: 2rem; border-left: 4px solid #3b82f6;">
                            <h4 style="color: var(--primary-color); margin-bottom: 1rem; display: flex; align-items: center; gap: 0.5rem;">
                                <i class="fab fa-js-square"></i>
                                JavaScript Optimization
                            </h4>
                            <ul style="color: var(--text-color); line-height: 1.8; margin-bottom: 1rem;">
                                <li>Minify and compress JS files</li>
                                <li>Remove unused JavaScript code</li>
                                <li>Use async and defer attributes</li>
                                <li>Implement code splitting</li>
                                <li>Optimize third-party scripts</li>
                            </ul>
                            <div style="background: #dbeafe; padding: 1rem; border-radius: 0.5rem; border-left: 4px solid #3b82f6;">
                                <small style="color: #1e40af;"><strong>Best Practice:</strong> Load JavaScript after DOM content</small>
                            </div>
                        </div>
                        
                        <div class="card" style="padding: 2rem; border-left: 4px solid #10b981;">
                            <h4 style="color: var(--primary-color); margin-bottom: 1rem; display: flex; align-items: center; gap: 0.5rem;">
                                <i class="fab fa-html5"></i>
                                HTML Optimization
                            </h4>
                            <ul style="color: var(--text-color); line-height: 1.8; margin-bottom: 1rem;">
                                <li>Use semantic HTML structure</li>
                                <li>Minimize DOM complexity</li>
                                <li>Optimize HTML delivery</li>
                                <li>Reduce HTTP requests</li>
                                <li>Implement proper caching headers</li>
                            </ul>
                            <div style="background: #d1fae5; padding: 1rem; border-radius: 0.5rem; border-left: 4px solid #10b981;">
                                <small style="color: #065f46;"><strong>Goal:</strong> Clean, efficient markup with minimal nesting</small>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Caching Strategies -->
                <div data-aos="fade-up" style="margin-bottom: 4rem;">
                    <h2 style="color: var(--primary-color); font-size: 2.5rem; margin-bottom: 2rem; border-bottom: 3px solid var(--accent-color); padding-bottom: 1rem;">
                        4. Caching & CDN Implementation
                    </h2>
                    <div style="background: linear-gradient(135deg, #6366f1, #4f46e5); padding: 3rem; border-radius: 1rem; color: white; margin-bottom: 2rem;">
                        <h3 style="color: white; margin-bottom: 2rem; text-align: center;">Caching Layers</h3>
                        <div style="display: grid; grid-template-columns: repeat(auto-fit, minWidth(200px, 1fr)); gap: 2rem;">
                            <div style="text-align: center; background: rgba(255,255,255,0.1); padding: 2rem; border-radius: 1rem;">
                                <i class="fas fa-globe" style="font-size: 3rem; margin-bottom: 1rem; opacity: 0.9;"></i>
                                <h4 style="color: white; margin-bottom: 0.5rem;">Browser Cache</h4>
                                <p style="color: rgba(255,255,255,0.9); font-size: 0.9rem;">Stores resources locally</p>
                                <strong style="color: var(--accent-color);">Client-side caching</strong>
                            </div>
                            <div style="text-align: center; background: rgba(255,255,255,0.1); padding: 2rem; border-radius: 1rem;">
                                <i class="fas fa-server" style="font-size: 3rem; margin-bottom: 1rem; opacity: 0.9;"></i>
                                <h4 style="color: white; margin-bottom: 0.5rem;">Server Cache</h4>
                                <p style="color: rgba(255,255,255,0.9); font-size: 0.9rem;">Caches dynamic content</p>
                                <strong style="color: var(--accent-color);">Server-side caching</strong>
                            </div>
                            <div style="text-align: center; background: rgba(255,255,255,0.1); padding: 2rem; border-radius: 1rem;">
                                <i class="fas fa-cloud" style="font-size: 3rem; margin-bottom: 1rem; opacity: 0.9;"></i>
                                <h4 style="color: white; margin-bottom: 0.5rem;">CDN Cache</h4>
                                <p style="color: rgba(255,255,255,0.9); font-size: 0.9rem;">Global distribution</p>
                                <strong style="color: var(--accent-color);">Edge caching</strong>
                            </div>
                        </div>
                    </div>

                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 2rem;">
                        <div style="background: var(--light-gray); padding: 2rem; border-radius: 1rem;">
                            <h4 style="color: var(--primary-color); margin-bottom: 1rem;">Caching Benefits</h4>
                            <ul style="color: var(--text-color); line-height: 1.8;">
                                <li>Faster page load times</li>
                                <li>Reduced server load</li>
                                <li>Lower bandwidth usage</li>
                                <li>Improved user experience</li>
                                <li>Better search rankings</li>
                                <li>Cost-effective scaling</li>
                            </ul>
                        </div>
                        <div style="background: var(--light-gray); padding: 2rem; border-radius: 1rem;">
                            <h4 style="color: var(--primary-color); margin-bottom: 1rem;">CDN Advantages</h4>
                            <ul style="color: var(--text-color); line-height: 1.8;">
                                <li>Global content distribution</li>
                                <li>Reduced latency</li>
                                <li>DDoS protection</li>
                                <li>Automatic optimization</li>
                                <li>Traffic load balancing</li>
                                <li>Improved availability</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Database Optimization -->
                <div data-aos="fade-up" style="margin-bottom: 4rem;">
                    <h2 style="color: var(--primary-color); font-size: 2.5rem; margin-bottom: 2rem; border-bottom: 3px solid var(--accent-color); padding-bottom: 1rem;">
                        5. Database & Server Optimization
                    </h2>
                    <div style="position: relative; margin-bottom: 2rem;">
                        <img src="assets/images/database-optimization.jpg" alt="Database Optimization" 
                             style="width: 100%; height: 300px; object-fit: cover; border-radius: 1rem;">
                        <div style="position: absolute; top: 1rem; right: 1rem; background: rgba(0,0,0,0.8); color: white; padding: 0.5rem 1rem; border-radius: 2rem; font-size: 0.875rem;">
                            <i class="fas fa-database"></i> Database Tuning
                        </div>
                    </div>
                    
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 2rem;">
                        <div class="card" style="padding: 2rem; text-align: center; transition: transform 0.3s ease;" 
                             onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='translateY(0)'">
                            <i class="fas fa-search" style="font-size: 3rem; color: var(--accent-color); margin-bottom: 1rem;"></i>
                            <h4 style="margin-bottom: 1rem;">Query Optimization</h4>
                            <p style="color: var(--text-color); font-size: 0.9rem;">Optimize database queries for faster data retrieval</p>
                        </div>
                        
                        <div class="card" style="padding: 2rem; text-align: center; transition: transform 0.3s ease;" 
                             onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='translateY(0)'">
                            <i class="fas fa-sort" style="font-size: 3rem; color: var(--accent-color); margin-bottom: 1rem;"></i>
                            <h4 style="margin-bottom: 1rem;">Index Creation</h4>
                            <p style="color: var(--text-color); font-size: 0.9rem;">Create indexes on frequently queried columns</p>
                        </div>
                        
                        <div class="card" style="padding: 2rem; text-align: center; transition: transform 0.3s ease;" 
                             onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='translateY(0)'">
                            <i class="fas fa-memory" style="font-size: 3rem; color: var(--accent-color); margin-bottom: 1rem;"></i>
                            <h4 style="margin-bottom: 1rem;">Memory Management</h4>
                            <p style="color: var(--text-color); font-size: 0.9rem;">Optimize server memory allocation and usage</p>
                        </div>
                        
                        <div class="card" style="padding: 2rem; text-align: center; transition: transform 0.3s ease;" 
                             onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='translateY(0)'">
                            <i class="fas fa-compress" style="font-size: 3rem; color: var(--accent-color); margin-bottom: 1rem;"></i>
                            <h4 style="margin-bottom: 1rem;">Compression</h4>
                            <p style="color: var(--text-color); font-size: 0.9rem;">Enable Gzip compression for faster data transfer</p>
                        </div>
                    </div>
                </div>

                <!-- Performance Testing -->
                <div data-aos="fade-up" style="margin-bottom: 4rem;">
                    <h2 style="color: var(--primary-color); font-size: 2.5rem; margin-bottom: 2rem; border-bottom: 3px solid var(--accent-color); padding-bottom: 1rem;">
                        6. Performance Testing & Monitoring Tools
                    </h2>
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 2rem;">
                        <div class="card" style="padding: 2rem; text-align: center; transition: transform 0.3s ease;" 
                             onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='translateY(0)'">
                            <i class="fab fa-google" style="font-size: 3rem; color: #4285f4; margin-bottom: 1rem;"></i>
                            <h4 style="margin-bottom: 1rem;">PageSpeed Insights</h4>
                            <p style="color: var(--text-color); font-size: 0.9rem; margin-bottom: 1rem;">Google's official performance testing tool</p>
                            <div style="background: #4285f4; color: white; padding: 0.5rem 1rem; border-radius: 1rem; font-size: 0.8rem;">
                                FREE
                            </div>
                        </div>
                        
                        <div class="card" style="padding: 2rem; text-align: center; transition: transform 0.3s ease;" 
                             onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='translateY(0)'">
                            <i class="fas fa-lighthouse" style="font-size: 3rem; color: #ff6b35; margin-bottom: 1rem;"></i>
                            <h4 style="margin-bottom: 1rem;">Lighthouse</h4>
                            <p style="color: var(--text-color); font-size: 0.9rem; margin-bottom: 1rem;">Comprehensive web app auditing tool</p>
                            <div style="background: #ff6b35; color: white; padding: 0.5rem 1rem; border-radius: 1rem; font-size: 0.8rem;">
                                FREE
                            </div>
                        </div>
                        
                        <div class="card" style="padding: 2rem; text-align: center; transition: transform 0.3s ease;" 
                             onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='translateY(0)'">
                            <i class="fas fa-chart-line" style="font-size: 3rem; color: #10b981; margin-bottom: 1rem;"></i>
                            <h4 style="margin-bottom: 1rem;">GTmetrix</h4>
                            <p style="color: var(--text-color); font-size: 0.9rem; margin-bottom: 1rem;">Detailed performance analysis and monitoring</p>
                            <div style="background: #10b981; color: white; padding: 0.5rem 1rem; border-radius: 1rem; font-size: 0.8rem;">
                                FREEMIUM
                            </div>
                        </div>
                        
                        <div class="card" style="padding: 2rem; text-align: center; transition: transform 0.3s ease;" 
                             onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='translateY(0)'">
                            <i class="fas fa-stopwatch" style="font-size: 3rem; color: #8b5cf6; margin-bottom: 1rem;"></i>
                            <h4 style="margin-bottom: 1rem;">WebPageTest</h4>
                            <p style="color: var(--text-color); font-size: 0.9rem; margin-bottom: 1rem;">Deep performance insights and waterfall charts</p>
                            <div style="background: #8b5cf6; color: white; padding: 0.5rem 1rem; border-radius: 1rem; font-size: 0.8rem;">
                                FREE
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Performance Checklist -->
                <div data-aos="fade-up" style="margin-bottom: 4rem;">
                    <h2 style="color: var(--primary-color); font-size: 2.5rem; margin-bottom: 2rem; border-bottom: 3px solid var(--accent-color); padding-bottom: 1rem;">
                        Performance Optimization Checklist
                    </h2>
                    <div style="background: var(--light-gray); padding: 2rem; border-radius: 1rem;">
                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 3rem;">
                            <div>
                                <h4 style="color: var(--primary-color); margin-bottom: 1.5rem;">✅ Front-End Optimization</h4>
                                <ul style="color: var(--text-color); line-height: 1.8; list-style: none; padding: 0;">
                                    <li style="margin-bottom: 0.5rem;">☐ Images optimized and compressed</li>
                                    <li style="margin-bottom: 0.5rem;">☐ CSS and JavaScript minified</li>
                                    <li style="margin-bottom: 0.5rem;">☐ Critical CSS inlined</li>
                                    <li style="margin-bottom: 0.5rem;">☐ Lazy loading implemented</li>
                                    <li style="margin-bottom: 0.5rem;">☐ HTTP requests minimized</li>
                                    <li style="margin-bottom: 0.5rem;">☐ Browser caching configured</li>
                                    <li style="margin-bottom: 0.5rem;">☐ CDN implemented</li>
                                </ul>
                            </div>
                            <div>
                                <h4 style="color: var(--primary-color); margin-bottom: 1.5rem;">✅ Back-End Optimization</h4>
                                <ul style="color: var(--text-color); line-height: 1.8; list-style: none; padding: 0;">
                                    <li style="margin-bottom: 0.5rem;">☐ Database queries optimized</li>
                                    <li style="margin-bottom: 0.5rem;">☐ Server response time &lt; 200ms</li>
                                    <li style="margin-bottom: 0.5rem;">☐ Gzip compression enabled</li>
                                    <li style="margin-bottom: 0.5rem;">☐ Server-side caching active</li>
                                    <li style="margin-bottom: 0.5rem;">☐ Resource loading optimized</li>
                                    <li style="margin-bottom: 0.5rem;">☐ Third-party scripts audited</li>
                                    <li style="margin-bottom: 0.5rem;">☐ Performance monitoring setup</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Conclusion -->
                <div data-aos="fade-up" style="margin-bottom: 3rem;">
                    <h2 style="color: var(--primary-color); font-size: 2.5rem; margin-bottom: 2rem; border-bottom: 3px solid var(--accent-color); padding-bottom: 1rem;">
                        The Need for Speed in 2025
                    </h2>
                    <p style="font-size: 1.125rem; line-height: 1.8; color: var(--text-color); margin-bottom: 2rem;">
                        Website performance optimization is an ongoing process that requires attention to multiple areas—from 
                        front-end assets to back-end infrastructure. By implementing these techniques and continuously 
                        monitoring your site's performance, you'll create faster, more engaging experiences that keep users 
                        happy and search engines satisfied.
                    </p>
                    <div style="background: linear-gradient(135deg, #f59e0b, var(--accent-color)); padding: 3rem; border-radius: 1rem; color: white; text-align: center;">
                        <h3 style="color: white; margin-bottom: 1rem;">Ready to Speed Up Your Website?</h3>
                        <p style="color: rgba(255,255,255,0.9); margin-bottom: 2rem; max-width: 600px; margin-left: auto; margin-right: auto;">
                            Our performance optimization experts at PajemoTech can analyze your website and implement 
                            proven strategies to dramatically improve your loading times and user experience.
                        </p>
                        <a href="contact.php" class="btn btn-secondary" style="padding: 1rem 2rem; font-size: 1.125rem;">
                            Get Performance Audit
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>