/**
 * Main JavaScript file
 * Handles mobile menu, smooth scroll, and core functionality
 */

(function() {
    'use strict';

    // Wait for DOM to be ready
    document.addEventListener('DOMContentLoaded', function() {

        // ============================================
        // Mobile Menu Toggle
        // ============================================
        const mobileMenuToggle = document.querySelector('.mobile-menu-toggle');
        const mainNavigation = document.querySelector('.main-navigation');
        const body = document.body;

        if (mobileMenuToggle && mainNavigation) {
            mobileMenuToggle.addEventListener('click', function() {
                this.classList.toggle('active');
                mainNavigation.classList.toggle('active');
                body.classList.toggle('menu-open');

                // Update aria-expanded
                const isExpanded = this.classList.contains('active');
                this.setAttribute('aria-expanded', isExpanded);
            });

            // Close menu when clicking on a link
            const navLinks = mainNavigation.querySelectorAll('a');
            navLinks.forEach(link => {
                link.addEventListener('click', function() {
                    mobileMenuToggle.classList.remove('active');
                    mainNavigation.classList.remove('active');
                    body.classList.remove('menu-open');
                    mobileMenuToggle.setAttribute('aria-expanded', 'false');
                });
            });

            // Close menu when clicking outside
            document.addEventListener('click', function(e) {
                if (!mainNavigation.contains(e.target) &&
                    !mobileMenuToggle.contains(e.target) &&
                    mainNavigation.classList.contains('active')) {
                    mobileMenuToggle.classList.remove('active');
                    mainNavigation.classList.remove('active');
                    body.classList.remove('menu-open');
                    mobileMenuToggle.setAttribute('aria-expanded', 'false');
                }
            });
        }

        // ============================================
        // Sticky Header on Scroll
        // ============================================
        const siteHeader = document.querySelector('.site-header');

        if (siteHeader) {
            let lastScrollTop = 0;

            window.addEventListener('scroll', function() {
                const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

                if (scrollTop > 100) {
                    siteHeader.classList.add('scrolled');
                } else {
                    siteHeader.classList.remove('scrolled');
                }

                lastScrollTop = scrollTop;
            });
        }

        // ============================================
        // Smooth Scroll for Anchor Links
        // ============================================
        const anchorLinks = document.querySelectorAll('a[href^="#"]');

        anchorLinks.forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                const targetId = this.getAttribute('href');

                // Skip if it's just "#" or if target doesn't exist
                if (targetId === '#' || targetId === '#0') {
                    return;
                }

                const targetElement = document.querySelector(targetId);

                if (targetElement) {
                    e.preventDefault();

                    const headerOffset = 80; // Account for sticky header
                    const elementPosition = targetElement.getBoundingClientRect().top;
                    const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                    window.scrollTo({
                        top: offsetPosition,
                        behavior: 'smooth'
                    });
                }
            });
        });

        // ============================================
        // Portfolio Filtering
        // ============================================
        const filterButtons = document.querySelectorAll('.filter-btn');
        const portfolioItems = document.querySelectorAll('.portfolio-item');

        if (filterButtons.length > 0 && portfolioItems.length > 0) {
            filterButtons.forEach(btn => {
                btn.addEventListener('click', function() {
                    // Remove active class from all buttons
                    filterButtons.forEach(b => b.classList.remove('active'));
                    // Add active class to clicked button
                    this.classList.add('active');

                    const filter = this.getAttribute('data-filter');

                    // Filter portfolio items
                    portfolioItems.forEach(item => {
                        const category = item.getAttribute('data-category');

                        if (filter === 'all' || category === filter) {
                            item.style.display = 'block';
                            // Trigger fade-in animation
                            setTimeout(() => {
                                item.style.opacity = '1';
                                item.style.transform = 'scale(1)';
                            }, 10);
                        } else {
                            item.style.opacity = '0';
                            item.style.transform = 'scale(0.9)';
                            setTimeout(() => {
                                item.style.display = 'none';
                            }, 300);
                        }
                    });
                });
            });
        }

        // ============================================
        // Contact Form Handler (Basic)
        // ============================================
        const contactForm = document.getElementById('contact-form');
        const formMessages = document.getElementById('form-messages');

        if (contactForm && formMessages) {
            contactForm.addEventListener('submit', function(e) {
                e.preventDefault();

                const formData = new FormData(this);

                // Show loading state
                const submitBtn = this.querySelector('button[type="submit"]');
                const originalText = submitBtn.textContent;
                submitBtn.textContent = 'Invio in corso...';
                submitBtn.disabled = true;

                // Send form data via AJAX
                fetch(this.action, {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    // Reset button
                    submitBtn.textContent = originalText;
                    submitBtn.disabled = false;

                    if (data.success) {
                        // Success message
                        formMessages.innerHTML = '<div class="form-success" style="padding: 1rem; background: rgba(68, 255, 68, 0.1); border-radius: var(--border-radius); color: #44ff44; margin-top: 1rem;">' +
                            data.message +
                            '</div>';
                        contactForm.reset();
                    } else {
                        // Error message
                        formMessages.innerHTML = '<div class="form-error" style="padding: 1rem; background: rgba(255, 68, 68, 0.1); border-radius: var(--border-radius); color: #ff4444; margin-top: 1rem;">' +
                            data.message +
                            '</div>';
                    }

                    // Clear message after 5 seconds
                    setTimeout(() => {
                        formMessages.innerHTML = '';
                    }, 5000);
                })
                .catch(error => {
                    console.error('Error:', error);
                    submitBtn.textContent = originalText;
                    submitBtn.disabled = false;

                    formMessages.innerHTML = '<div class="form-error" style="padding: 1rem; background: rgba(255, 68, 68, 0.1); border-radius: var(--border-radius); color: #ff4444; margin-top: 1rem;">Si è verificato un errore. Riprova più tardi.</div>';
                });
            });
        }

        // ============================================
        // Add current menu item highlighting
        // ============================================
        const currentLocation = window.location.pathname;
        const menuLinks = document.querySelectorAll('.nav-menu a');

        menuLinks.forEach(link => {
            if (link.getAttribute('href') === currentLocation) {
                link.classList.add('current-menu-item');
            }
        });

    });

})();
