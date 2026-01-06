/**
 * Animations JavaScript
 * Handles scroll animations and visual effects
 */

(function() {
    'use strict';

    document.addEventListener('DOMContentLoaded', function() {

        // ============================================
        // Intersection Observer for Fade-In Animations
        // ============================================

        // Check if IntersectionObserver is supported
        if ('IntersectionObserver' in window) {

            // Elements to animate
            const animatedElements = document.querySelectorAll(
                '.card, .portfolio-card, .service-card, .cta-section, .section-title, .hero-content > *'
            );

            // Observer options
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            // Create observer
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        // Add animation class
                        entry.target.classList.add('animate-in');

                        // Stop observing this element
                        observer.unobserve(entry.target);
                    }
                });
            }, observerOptions);

            // Observe all elements
            animatedElements.forEach(el => {
                // Add initial state
                el.style.opacity = '0';
                el.style.transform = 'translateY(20px)';
                el.style.transition = 'opacity 0.6s ease-out, transform 0.6s ease-out';

                // Observe element
                observer.observe(el);
            });

            // Add CSS for animation
            const style = document.createElement('style');
            style.textContent = `
                .animate-in {
                    opacity: 1 !important;
                    transform: translateY(0) !important;
                }
            `;
            document.head.appendChild(style);

        } else {
            // Fallback for browsers that don't support IntersectionObserver
            const animatedElements = document.querySelectorAll(
                '.card, .portfolio-card, .service-card, .cta-section'
            );

            animatedElements.forEach(el => {
                el.style.opacity = '1';
                el.style.transform = 'none';
            });
        }

        // ============================================
        // Parallax Effect for Hero Background
        // ============================================
        const heroSection = document.querySelector('.hero-section');

        if (heroSection) {
            window.addEventListener('scroll', function() {
                const scrolled = window.pageYOffset;
                const parallaxSpeed = 0.5;

                if (scrolled < window.innerHeight) {
                    heroSection.style.transform = `translateY(${scrolled * parallaxSpeed}px)`;
                }
            });
        }

        // ============================================
        // Counter Animation (for stats, if needed)
        // ============================================
        function animateCounter(element, target, duration = 2000) {
            const start = 0;
            const increment = target / (duration / 16); // 60fps
            let current = start;

            const timer = setInterval(() => {
                current += increment;
                if (current >= target) {
                    current = target;
                    clearInterval(timer);
                }
                element.textContent = Math.floor(current);
            }, 16);
        }

        // Find counter elements (add data-count attribute to elements)
        const counters = document.querySelectorAll('[data-count]');

        if (counters.length > 0 && 'IntersectionObserver' in window) {
            const counterObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const target = parseInt(entry.target.getAttribute('data-count'));
                        animateCounter(entry.target, target);
                        counterObserver.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.5 });

            counters.forEach(counter => counterObserver.observe(counter));
        }

        // ============================================
        // Staggered Animation for Grid Items
        // ============================================
        const grids = document.querySelectorAll('.grid');

        grids.forEach(grid => {
            const items = grid.querySelectorAll('.card, .portfolio-card');

            items.forEach((item, index) => {
                // Add stagger delay
                const delay = index * 100; // 100ms between each item
                item.style.transitionDelay = `${delay}ms`;
            });
        });

        // ============================================
        // Hover Effect Enhancement for Cards
        // ============================================
        const cards = document.querySelectorAll('.card, .portfolio-card, .service-card');

        cards.forEach(card => {
            card.addEventListener('mouseenter', function(e) {
                const rect = this.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;

                // Create ripple effect
                const ripple = document.createElement('div');
                ripple.style.position = 'absolute';
                ripple.style.left = x + 'px';
                ripple.style.top = y + 'px';
                ripple.style.width = '0';
                ripple.style.height = '0';
                ripple.style.borderRadius = '50%';
                ripple.style.background = 'rgba(0, 168, 255, 0.1)';
                ripple.style.transform = 'translate(-50%, -50%)';
                ripple.style.transition = 'width 0.6s, height 0.6s';
                ripple.style.pointerEvents = 'none';

                this.style.position = 'relative';
                this.style.overflow = 'hidden';
                this.appendChild(ripple);

                // Trigger animation
                setTimeout(() => {
                    ripple.style.width = '300px';
                    ripple.style.height = '300px';
                }, 10);

                // Remove ripple after animation
                setTimeout(() => {
                    ripple.remove();
                }, 600);
            });
        });

        // ============================================
        // Smooth Reveal for Images
        // ============================================
        const images = document.querySelectorAll('img[loading="lazy"]');

        if (images.length > 0) {
            images.forEach(img => {
                img.addEventListener('load', function() {
                    this.style.opacity = '0';
                    this.style.transition = 'opacity 0.5s ease-in';

                    setTimeout(() => {
                        this.style.opacity = '1';
                    }, 10);
                });
            });
        }

    });

})();
