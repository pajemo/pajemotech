<?php
$pageTitle = 'Essential Website Security Measures';
$pageDescription = 'Protect your website and users data with these essential security practices and tools. Comprehensive guide to website security implementation.';
include 'includes/header.php';
?>

    <!-- Article Header -->
    <section class="section" style="background: linear-gradient(135deg, #dc2626, #991b1b); color: white; padding: 8rem 0 4rem; margin-top: 80px;">
        <div class="container">
            <div class="text-center" data-aos="fade-up">
                <div style="background: rgba(255,255,255,0.1); padding: 0.5rem 1.5rem; border-radius: 2rem; display: inline-block; margin-bottom: 2rem;">
                    <span style="color: var(--accent-color); font-weight: 600;">Security Guide</span>
                </div>
                <h1 style="color: white; font-size: 4rem; margin-bottom: 1.5rem; line-height: 1.2;">Essential Website Security Measures</h1>
                <p style="font-size: 1.25rem; color: rgba(255,255,255,0.9); max-width: 800px; margin: 0 auto 2rem;">
                    Protect your website and users' data with these essential security practices and tools. Build a fortress around your digital assets.
                </p>
                <div style="display: flex; align-items: center; justify-content: center; gap: 2rem; flex-wrap: wrap; color: rgba(255,255,255,0.8);">
                    <div style="display: flex; align-items: center; gap: 0.5rem;">
                        <i class="fas fa-calendar"></i>
                        <span>December 16, 2025</span>
                    </div>
                    <div style="display: flex; align-items: center; gap: 0.5rem;">
                        <i class="fas fa-clock"></i>
                        <span>9 min read</span>
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
                <img src="assets/images/website-security-hero.jpg" alt="Website Security Measures" 
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
                        Website security has become more critical than ever, with cyber attacks increasing by 38% in 2025. 
                        A single security breach can devastate your business reputation, compromise user data, and result 
                        in significant financial losses. This comprehensive guide covers essential security measures every 
                        website owner must implement.
                    </p>
                    
                    <div style="background: linear-gradient(135deg, #dc2626, #991b1b); padding: 2rem; border-radius: 1rem; color: white; text-align: center; margin-bottom: 2rem;">
                        <h3 style="color: white; margin-bottom: 1rem; display: flex; align-items: center; justify-content: center; gap: 0.5rem;">
                            <i class="fas fa-shield-alt"></i>
                            Cyber Security Threats
                        </h3>
                        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(150px, 1fr)); gap: 1rem; margin-top: 1.5rem;">
                            <div>
                                <div style="font-size: 2rem; font-weight: bold; margin-bottom: 0.5rem;">38%</div>
                                <div style="font-size: 0.9rem; opacity: 0.9;">increase in cyber attacks</div>
                            </div>
                            <div>
                                <div style="font-size: 2rem; font-weight: bold; margin-bottom: 0.5rem;">$4.45M</div>
                                <div style="font-size: 0.9rem; opacity: 0.9;">average cost of data breach</div>
                            </div>
                            <div>
                                <div style="font-size: 2rem; font-weight: bold; margin-bottom: 0.5rem;">280</div>
                                <div style="font-size: 0.9rem; opacity: 0.9;">days average breach detection</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- SSL and HTTPS -->
                <div data-aos="fade-up" style="margin-bottom: 4rem;">
                    <h2 style="color: var(--primary-color); font-size: 2.5rem; margin-bottom: 2rem; border-bottom: 3px solid var(--accent-color); padding-bottom: 1rem;">
                        1. SSL Certificates & HTTPS Implementation
                    </h2>
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 2rem; margin-bottom: 2rem;">
                        <div>
                            <h4 style="color: var(--primary-color); margin-bottom: 1rem;">Why SSL is Essential</h4>
                            <p style="line-height: 1.8; color: var(--text-color); margin-bottom: 1.5rem;">
                                SSL (Secure Socket Layer) certificates encrypt data transmitted between your website and 
                                users' browsers, protecting sensitive information from interception by malicious actors.
                            </p>
                            <ul style="color: var(--text-color); line-height: 1.8;">
                                <li>Encrypts data transmission</li>
                                <li>Improves search engine rankings</li>
                                <li>Builds user trust and credibility</li>
                                <li>Required for modern browsers</li>
                            </ul>
                        </div>
                        <div>
                            <img src="assets/images/ssl-certificate.jpg" alt="SSL Certificate" 
                                 style="width: 100%; height: 250px; object-fit: cover; border-radius: 0.5rem;">
                        </div>
                    </div>
                    
                    <div style="background: var(--light-gray); padding: 2rem; border-radius: 1rem;">
                        <h4 style="color: var(--primary-color); margin-bottom: 1rem; text-align: center;">SSL Certificate Types</h4>
                        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 1.5rem;">
                            <div style="background: white; padding: 1.5rem; border-radius: 0.5rem; text-align: center;">
                                <i class="fas fa-certificate" style="font-size: 2rem; color: #10b981; margin-bottom: 1rem;"></i>
                                <h5 style="margin-bottom: 0.5rem;">Domain Validation (DV)</h5>
                                <p style="font-size: 0.9rem; color: var(--text-color);">Basic encryption, quick setup</p>
                                <strong style="color: #10b981;">Best for: Personal sites</strong>
                            </div>
                            <div style="background: white; padding: 1.5rem; border-radius: 0.5rem; text-align: center;">
                                <i class="fas fa-building" style="font-size: 2rem; color: #f59e0b; margin-bottom: 1rem;"></i>
                                <h5 style="margin-bottom: 0.5rem;">Organization Validation (OV)</h5>
                                <p style="font-size: 0.9rem; color: var(--text-color);">Moderate trust level</p>
                                <strong style="color: #f59e0b;">Best for: Business sites</strong>
                            </div>
                            <div style="background: white; padding: 1.5rem; border-radius: 0.5rem; text-align: center;">
                                <i class="fas fa-shield-alt" style="font-size: 2rem; color: #dc2626; margin-bottom: 1rem;"></i>
                                <h5 style="margin-bottom: 0.5rem;">Extended Validation (EV)</h5>
                                <p style="font-size: 0.9rem; color: var(--text-color);">Highest trust level</p>
                                <strong style="color: #dc2626;">Best for: E-commerce</strong>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Strong Authentication -->
                <div data-aos="fade-up" style="margin-bottom: 4rem;">
                    <h2 style="color: var(--primary-color); font-size: 2.5rem; margin-bottom: 2rem; border-bottom: 3px solid var(--accent-color); padding-bottom: 1rem;">
                        2. Strong Authentication & Access Control
                    </h2>
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem;">
                        <div class="card" style="padding: 2rem; border-left: 4px solid var(--accent-color);">
                            <h4 style="color: var(--primary-color); margin-bottom: 1rem; display: flex; align-items: center; gap: 0.5rem;">
                                <i class="fas fa-key"></i>
                                Password Security
                            </h4>
                            <ul style="color: var(--text-color); line-height: 1.8; margin-bottom: 1rem;">
                                <li>Minimum 12 characters</li>
                                <li>Mix of letters, numbers, symbols</li>
                                <li>Unique passwords for each account</li>
                                <li>Regular password updates</li>
                                <li>Password manager usage</li>
                            </ul>
                            <div style="background: #fef3c7; padding: 1rem; border-radius: 0.5rem; border-left: 4px solid #f59e0b;">
                                <small style="color: #92400e;"><strong>Tip:</strong> Use passphrases like "Coffee-Mountain-Sunset-42!" for better security</small>
                            </div>
                        </div>
                        
                        <div class="card" style="padding: 2rem; border-left: 4px solid #10b981;">
                            <h4 style="color: var(--primary-color); margin-bottom: 1rem; display: flex; align-items: center; gap: 0.5rem;">
                                <i class="fas fa-mobile-alt"></i>
                                Two-Factor Authentication
                            </h4>
                            <ul style="color: var(--text-color); line-height: 1.8; margin-bottom: 1rem;">
                                <li>SMS verification codes</li>
                                <li>Authenticator apps (Google, Authy)</li>
                                <li>Hardware security keys</li>
                                <li>Biometric authentication</li>
                                <li>Backup recovery codes</li>
                            </ul>
                            <div style="background: #d1fae5; padding: 1rem; border-radius: 0.5rem; border-left: 4px solid #10b981;">
                                <small style="color: #065f46;"><strong>Benefit:</strong> 2FA reduces breach risk by 99.9%</small>
                            </div>
                        </div>
                        
                        <div class="card" style="padding: 2rem; border-left: 4px solid #6366f1;">
                            <h4 style="color: var(--primary-color); margin-bottom: 1rem; display: flex; align-items: center; gap: 0.5rem;">
                                <i class="fas fa-users-cog"></i>
                                Access Management
                            </h4>
                            <ul style="color: var(--text-color); line-height: 1.8; margin-bottom: 1rem;">
                                <li>Role-based permissions</li>
                                <li>Principle of least privilege</li>
                                <li>Regular access reviews</li>
                                <li>Immediate access revocation</li>
                                <li>Session timeout policies</li>
                            </ul>
                            <div style="background: #e0e7ff; padding: 1rem; border-radius: 0.5rem; border-left: 4px solid #6366f1;">
                                <small style="color: #3730a3;"><strong>Rule:</strong> Only grant access that's absolutely necessary</small>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Regular Updates -->
                <div data-aos="fade-up" style="margin-bottom: 4rem;">
                    <h2 style="color: var(--primary-color); font-size: 2.5rem; margin-bottom: 2rem; border-bottom: 3px solid var(--accent-color); padding-bottom: 1rem;">
                        3. Regular Updates & Patch Management
                    </h2>
                    <div style="background: linear-gradient(135deg, #6366f1, #4f46e5); padding: 3rem; border-radius: 1rem; color: white; margin-bottom: 2rem;">
                        <h3 style="color: white; margin-bottom: 2rem; text-align: center;">Update Priority Matrix</h3>
                        <div style="display: grid; grid-template-columns: repeat(auto-fit, minWidth(200px, 1fr)); gap: 2rem;">
                            <div style="text-align: center; background: rgba(255,255,255,0.1); padding: 2rem; border-radius: 1rem;">
                                <i class="fas fa-exclamation-triangle" style="font-size: 3rem; margin-bottom: 1rem; color: #fbbf24;"></i>
                                <h4 style="color: white; margin-bottom: 0.5rem;">Critical</h4>
                                <p style="color: rgba(255,255,255,0.9); font-size: 0.9rem;">Security patches</p>
                                <strong style="color: #fbbf24;">Within 24 hours</strong>
                            </div>
                            <div style="text-align: center; background: rgba(255,255,255,0.1); padding: 2rem; border-radius: 1rem;">
                                <i class="fas fa-arrow-up" style="font-size: 3rem; margin-bottom: 1rem; color: #f97316;"></i>
                                <h4 style="color: white; margin-bottom: 0.5rem;">High</h4>
                                <p style="color: rgba(255,255,255,0.9); font-size: 0.9rem;">Feature updates</p>
                                <strong style="color: #f97316;">Within 1 week</strong>
                            </div>
                            <div style="text-align: center; background: rgba(255,255,255,0.1); padding: 2rem; border-radius: 1rem;">
                                <i class="fas fa-clock" style="font-size: 3rem; margin-bottom: 1rem; color: #10b981;"></i>
                                <h4 style="color: white; margin-bottom: 0.5rem;">Medium</h4>
                                <p style="color: rgba(255,255,255,0.9); font-size: 0.9rem;">Minor updates</p>
                                <strong style="color: #10b981;">Within 1 month</strong>
                            </div>
                        </div>
                    </div>
                    
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 2rem;">
                        <div style="background: var(--light-gray); padding: 2rem; border-radius: 1rem;">
                            <h4 style="color: var(--primary-color); margin-bottom: 1rem;">What to Update Regularly</h4>
                            <ul style="color: var(--text-color); line-height: 1.8;">
                                <li>Content Management System (CMS)</li>
                                <li>Plugins and extensions</li>
                                <li>Themes and templates</li>
                                <li>Server operating system</li>
                                <li>Web server software</li>
                                <li>Database management systems</li>
                            </ul>
                        </div>
                        <div style="background: var(--light-gray); padding: 2rem; border-radius: 1rem;">
                            <h4 style="color: var(--primary-color); margin-bottom: 1rem;">Update Best Practices</h4>
                            <ul style="color: var(--text-color); line-height: 1.8;">
                                <li>Test updates on staging environment</li>
                                <li>Create full backups before updates</li>
                                <li>Schedule maintenance windows</li>
                                <li>Monitor for post-update issues</li>
                                <li>Keep update logs and documentation</li>
                                <li>Enable automatic security updates</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Backup and Recovery -->
                <div data-aos="fade-up" style="margin-bottom: 4rem;">
                    <h2 style="color: var(--primary-color); font-size: 2.5rem; margin-bottom: 2rem; border-bottom: 3px solid var(--accent-color); padding-bottom: 1rem;">
                        4. Backup & Disaster Recovery
                    </h2>
                    <div style="position: relative; margin-bottom: 2rem;">
                        <img src="assets/images/backup-recovery.jpg" alt="Backup and Recovery" 
                             style="width: 100%; height: 300px; object-fit: cover; border-radius: 1rem;">
                        <div style="position: absolute; top: 1rem; right: 1rem; background: rgba(0,0,0,0.8); color: white; padding: 0.5rem 1rem; border-radius: 2rem; font-size: 0.875rem;">
                            <i class="fas fa-database"></i> Data Protection
                        </div>
                    </div>
                    
                    <div style="background: var(--light-gray); padding: 2rem; border-radius: 1rem; margin-bottom: 2rem;">
                        <h4 style="color: var(--primary-color); margin-bottom: 1.5rem; text-align: center;">3-2-1 Backup Strategy</h4>
                        <div style="display: grid; grid-template-columns: repeat(auto-fit, minwidth(200px, 1fr)); gap: 2rem;">
                            <div style="text-align: center; background: white; padding: 2rem; border-radius: 1rem;">
                                <div style="font-size: 3rem; font-weight: bold; color: var(--accent-color); margin-bottom: 0.5rem;">3</div>
                                <h5 style="margin-bottom: 0.5rem;">Backup Copies</h5>
                                <p style="color: var(--text-color); font-size: 0.9rem;">Keep three copies of important data</p>
                            </div>
                            <div style="text-align: center; background: white; padding: 2rem; border-radius: 1rem;">
                                <div style="font-size: 3rem; font-weight: bold; color: var(--accent-color); margin-bottom: 0.5rem;">2</div>
                                <h5 style="margin-bottom: 0.5rem;">Different Media</h5>
                                <p style="color: var(--text-color); font-size: 0.9rem;">Store on two different media types</p>
                            </div>
                            <div style="text-align: center; background: white; padding: 2rem; border-radius: 1rem;">
                                <div style="font-size: 3rem; font-weight: bold; color: var(--accent-color); margin-bottom: 0.5rem;">1</div>
                                <h5 style="margin-bottom: 0.5rem;">Off-Site Copy</h5>
                                <p style="color: var(--text-color); font-size: 0.9rem;">Keep one copy off-site or in cloud</p>
                            </div>
                        </div>
                    </div>

                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 2rem;">
                        <div style="background: white; border: 2px solid var(--light-gray); border-radius: 1rem; padding: 2rem;">
                            <h4 style="color: var(--primary-color); margin-bottom: 1.5rem; display: flex; align-items: center; gap: 0.5rem;">
                                <i class="fas fa-save"></i>
                                Backup Types
                            </h4>
                            <ul style="color: var(--text-color); line-height: 1.8; margin-bottom: 1rem;">
                                <li><strong>Full Backup:</strong> Complete copy of all data</li>
                                <li><strong>Incremental:</strong> Only changed files since last backup</li>
                                <li><strong>Differential:</strong> Changes since last full backup</li>
                                <li><strong>Automated:</strong> Scheduled regular backups</li>
                            </ul>
                        </div>
                        
                        <div style="background: white; border: 2px solid var(--light-gray); border-radius: 1rem; padding: 2rem;">
                            <h4 style="color: var(--primary-color); margin-bottom: 1.5rem; display: flex; align-items: center; gap: 0.5rem;">
                                <i class="fas fa-redo"></i>
                                Recovery Planning
                            </h4>
                            <ul style="color: var(--text-color); line-height: 1.8; margin-bottom: 1rem;">
                                <li>Document recovery procedures</li>
                                <li>Test backup restoration regularly</li>
                                <li>Define Recovery Time Objectives (RTO)</li>
                                <li>Assign responsible team members</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Security Tools -->
                <div data-aos="fade-up" style="margin-bottom: 4rem;">
                    <h2 style="color: var(--primary-color); font-size: 2.5rem; margin-bottom: 2rem; border-bottom: 3px solid var(--accent-color); padding-bottom: 1rem;">
                        5. Essential Security Tools & Services
                    </h2>
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 2rem;">
                        <div class="card" style="padding: 2rem; text-align: center; transition: transform 0.3s ease;" 
                             onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='translateY(0)'">
                            <i class="fas fa-shield-virus" style="font-size: 3rem; color: #dc2626; margin-bottom: 1rem;"></i>
                            <h4 style="margin-bottom: 1rem;">Web Application Firewall</h4>
                            <p style="color: var(--text-color); font-size: 0.9rem; margin-bottom: 1rem;">Filters malicious traffic and blocks common attacks</p>
                            <div style="background: #fef2f2; padding: 0.5rem 1rem; border-radius: 1rem; font-size: 0.8rem; color: #dc2626;">
                                Cloudflare, Sucuri
                            </div>
                        </div>
                        
                        <div class="card" style="padding: 2rem; text-align: center; transition: transform 0.3s ease;" 
                             onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='translateY(0)'">
                            <i class="fas fa-bug" style="font-size: 3rem; color: #059669; margin-bottom: 1rem;"></i>
                            <h4 style="margin-bottom: 1rem;">Malware Scanner</h4>
                            <p style="color: var(--text-color); font-size: 0.9rem; margin-bottom: 1rem;">Regular scans for malicious code and vulnerabilities</p>
                            <div style="background: #d1fae5; padding: 0.5rem 1rem; border-radius: 1rem; font-size: 0.8rem; color: #059669;">
                                Wordfence, SiteLock
                            </div>
                        </div>
                        
                        <div class="card" style="padding: 2rem; text-align: center; transition: transform 0.3s ease;" 
                             onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='translateY(0)'">
                            <i class="fas fa-eye" style="font-size: 3rem; color: #7c3aed; margin-bottom: 1rem;"></i>
                            <h4 style="margin-bottom: 1rem;">Security Monitoring</h4>
                            <p style="color: var(--text-color); font-size: 0.9rem; margin-bottom: 1rem;">24/7 monitoring for suspicious activities</p>
                            <div style="background: #ede9fe; padding: 0.5rem 1rem; border-radius: 1rem; font-size: 0.8rem; color: #7c3aed;">
                                Jetpack, iThemes
                            </div>
                        </div>
                        
                        <div class="card" style="padding: 2rem; text-align: center; transition: transform 0.3s ease;" 
                             onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='translateY(0)'">
                            <i class="fas fa-user-lock" style="font-size: 3rem; color: #f59e0b; margin-bottom: 1rem;"></i>
                            <h4 style="margin-bottom: 1rem;">Login Protection</h4>
                            <p style="color: var(--text-color); font-size: 0.9rem; margin-bottom: 1rem;">Prevents brute force attacks and unauthorized access</p>
                            <div style="background: #fef3c7; padding: 0.5rem 1rem; border-radius: 1rem; font-size: 0.8rem; color: #f59e0b;">
                                Limit Login Attempts
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Security Checklist -->
                <div data-aos="fade-up" style="margin-bottom: 4rem;">
                    <h2 style="color: var(--primary-color); font-size: 2.5rem; margin-bottom: 2rem; border-bottom: 3px solid var(--accent-color); padding-bottom: 1rem;">
                        Website Security Checklist
                    </h2>
                    <div style="background: var(--light-gray); padding: 2rem; border-radius: 1rem;">
                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 3rem;">
                            <div>
                                <h4 style="color: var(--primary-color); margin-bottom: 1.5rem;">✅ Technical Security</h4>
                                <ul style="color: var(--text-color); line-height: 1.8; list-style: none; padding: 0;">
                                    <li style="margin-bottom: 0.5rem;">☐ SSL certificate installed and configured</li>
                                    <li style="margin-bottom: 0.5rem;">☐ Strong passwords and 2FA enabled</li>
                                    <li style="margin-bottom: 0.5rem;">☐ Regular security updates applied</li>
                                    <li style="margin-bottom: 0.5rem;">☐ Web Application Firewall active</li>
                                    <li style="margin-bottom: 0.5rem;">☐ Malware scanning scheduled</li>
                                    <li style="margin-bottom: 0.5rem;">☐ Automated backups configured</li>
                                    <li style="margin-bottom: 0.5rem;">☐ Security headers implemented</li>
                                </ul>
                            </div>
                            <div>
                                <h4 style="color: var(--primary-color); margin-bottom: 1.5rem;">✅ Operational Security</h4>
                                <ul style="color: var(--text-color); line-height: 1.8; list-style: none; padding: 0;">
                                    <li style="margin-bottom: 0.5rem;">☐ Security policy documented</li>
                                    <li style="margin-bottom: 0.5rem;">☐ User access controls in place</li>
                                    <li style="margin-bottom: 0.5rem;">☐ Incident response plan ready</li>
                                    <li style="margin-bottom: 0.5rem;">☐ Regular security audits conducted</li>
                                    <li style="margin-bottom: 0.5rem;">☐ Staff security training completed</li>
                                    <li style="margin-bottom: 0.5rem;">☐ Data protection compliance verified</li>
                                    <li style="margin-bottom: 0.5rem;">☐ Vendor security assessments done</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Incident Response -->
                <div data-aos="fade-up" style="margin-bottom: 4rem;">
                    <h2 style="color: var(--primary-color); font-size: 2.5rem; margin-bottom: 2rem; border-bottom: 3px solid var(--accent-color); padding-bottom: 1rem;">
                        Incident Response Plan
                    </h2>
                    <div style="background: #fef2f2; border: 2px solid #fecaca; border-radius: 1rem; padding: 2rem; margin-bottom: 2rem;">
                        <h4 style="color: #dc2626; margin-bottom: 1.5rem; display: flex; align-items: center; gap: 0.5rem;">
                            <i class="fas fa-exclamation-triangle"></i>
                            What to Do If Your Site Gets Hacked
                        </h4>
                        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1.5rem;">
                            <div style="background: white; padding: 1.5rem; border-radius: 0.5rem;">
                                <h5 style="color: #dc2626; margin-bottom: 1rem;">1. Immediate Actions</h5>
                                <ul style="color: #7f1d1d; font-size: 0.9rem; line-height: 1.6;">
                                    <li>Take site offline if necessary</li>
                                    <li>Change all passwords immediately</li>
                                    <li>Contact your hosting provider</li>
                                    <li>Preserve evidence for investigation</li>
                                </ul>
                            </div>
                            <div style="background: white; padding: 1.5rem; border-radius: 0.5rem;">
                                <h5 style="color: #dc2626; margin-bottom: 1rem;">2. Assessment</h5>
                                <ul style="color: #7f1d1d; font-size: 0.9rem; line-height: 1.6;">
                                    <li>Scan for malware and backdoors</li>
                                    <li>Identify the attack vector</li>
                                    <li>Assess data compromise</li>
                                    <li>Document all findings</li>
                                </ul>
                            </div>
                            <div style="background: white; padding: 1.5rem; border-radius: 0.5rem;">
                                <h5 style="color: #dc2626; margin-bottom: 1rem;">3. Recovery</h5>
                                <ul style="color: #7f1d1d; font-size: 0.9rem; line-height: 1.6;">
                                    <li>Restore from clean backup</li>
                                    <li>Apply security patches</li>
                                    <li>Implement additional security</li>
                                    <li>Monitor for reinfection</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Conclusion -->
                <div data-aos="fade-up" style="margin-bottom: 3rem;">
                    <h2 style="color: var(--primary-color); font-size: 2.5rem; margin-bottom: 2rem; border-bottom: 3px solid var(--accent-color); padding-bottom: 1rem;">
                        Building a Security-First Culture
                    </h2>
                    <p style="font-size: 1.125rem; line-height: 1.8; color: var(--text-color); margin-bottom: 2rem;">
                        Website security is not a one-time setup but an ongoing commitment. By implementing these essential 
                        security measures and maintaining vigilance, you can protect your website, safeguard user data, 
                        and maintain the trust that is fundamental to your online success.
                    </p>
                    <div style="background: linear-gradient(135deg, #dc2626, var(--accent-color)); padding: 3rem; border-radius: 1rem; color: white; text-align: center;">
                        <h3 style="color: white; margin-bottom: 1rem;">Need Professional Security Implementation?</h3>
                        <p style="color: rgba(255,255,255,0.9); margin-bottom: 2rem; max-width: 600px; margin-left: auto; margin-right: auto;">
                            Our security experts at PajemoTech can audit your website, implement robust security measures, 
                            and provide ongoing monitoring to keep your site protected.
                        </p>
                        <a href="contact.php" class="btn btn-secondary" style="padding: 1rem 2rem; font-size: 1.125rem;">
                            Get Security Audit
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>