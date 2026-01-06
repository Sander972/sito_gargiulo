/**
 * Lightbox JavaScript
 * Simple lightbox for portfolio images
 */

(function() {
    'use strict';

    document.addEventListener('DOMContentLoaded', function() {

        // ============================================
        // Create Lightbox Structure
        // ============================================
        const lightboxHTML = `
            <div id="lightbox" class="lightbox" style="display: none;">
                <div class="lightbox-overlay"></div>
                <div class="lightbox-content">
                    <button class="lightbox-close" aria-label="Close lightbox">&times;</button>
                    <button class="lightbox-prev" aria-label="Previous image">&#10094;</button>
                    <button class="lightbox-next" aria-label="Next image">&#10095;</button>
                    <img src="" alt="" class="lightbox-image">
                    <div class="lightbox-caption"></div>
                </div>
            </div>
        `;

        // Add lightbox to body
        document.body.insertAdjacentHTML('beforeend', lightboxHTML);

        // Add CSS for lightbox
        const style = document.createElement('style');
        style.textContent = `
            .lightbox {
                position: fixed;
                inset: 0;
                z-index: 10000;
                background: rgba(0, 0, 0, 0.95);
                animation: fadeIn 0.3s ease-out;
            }

            .lightbox-overlay {
                position: absolute;
                inset: 0;
            }

            .lightbox-content {
                position: relative;
                height: 100%;
                display: flex;
                align-items: center;
                justify-content: center;
                padding: 2rem;
            }

            .lightbox-image {
                max-width: 90%;
                max-height: 90%;
                object-fit: contain;
                animation: zoomIn 0.3s ease-out;
            }

            .lightbox-close {
                position: absolute;
                top: 1rem;
                right: 1rem;
                background: rgba(255, 255, 255, 0.1);
                border: 2px solid rgba(255, 255, 255, 0.3);
                color: white;
                font-size: 2rem;
                width: 50px;
                height: 50px;
                border-radius: 50%;
                cursor: pointer;
                transition: all 0.3s ease;
                display: flex;
                align-items: center;
                justify-content: center;
                line-height: 1;
            }

            .lightbox-close:hover {
                background: rgba(255, 255, 255, 0.2);
                border-color: white;
                transform: rotate(90deg);
            }

            .lightbox-prev,
            .lightbox-next {
                position: absolute;
                top: 50%;
                transform: translateY(-50%);
                background: rgba(255, 255, 255, 0.1);
                border: 2px solid rgba(255, 255, 255, 0.3);
                color: white;
                font-size: 1.5rem;
                width: 50px;
                height: 50px;
                border-radius: 50%;
                cursor: pointer;
                transition: all 0.3s ease;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .lightbox-prev:hover,
            .lightbox-next:hover {
                background: rgba(255, 255, 255, 0.2);
                border-color: white;
            }

            .lightbox-prev {
                left: 2rem;
            }

            .lightbox-next {
                right: 2rem;
            }

            .lightbox-caption {
                position: absolute;
                bottom: 2rem;
                left: 50%;
                transform: translateX(-50%);
                color: white;
                font-size: 1rem;
                text-align: center;
                max-width: 80%;
            }

            @keyframes fadeIn {
                from {
                    opacity: 0;
                }
                to {
                    opacity: 1;
                }
            }

            @keyframes zoomIn {
                from {
                    transform: scale(0.8);
                    opacity: 0;
                }
                to {
                    transform: scale(1);
                    opacity: 1;
                }
            }

            @media (max-width: 768px) {
                .lightbox-prev,
                .lightbox-next {
                    width: 40px;
                    height: 40px;
                    font-size: 1.2rem;
                }

                .lightbox-prev {
                    left: 1rem;
                }

                .lightbox-next {
                    right: 1rem;
                }

                .lightbox-close {
                    width: 40px;
                    height: 40px;
                    font-size: 1.5rem;
                }
            }
        `;
        document.head.appendChild(style);

        // ============================================
        // Lightbox Functionality
        // ============================================
        const lightbox = document.getElementById('lightbox');
        const lightboxImage = lightbox.querySelector('.lightbox-image');
        const lightboxCaption = lightbox.querySelector('.lightbox-caption');
        const closeBtn = lightbox.querySelector('.lightbox-close');
        const prevBtn = lightbox.querySelector('.lightbox-prev');
        const nextBtn = lightbox.querySelector('.lightbox-next');

        let currentImageIndex = 0;
        let galleryImages = [];

        // Find all gallery images
        function initGallery() {
            const portfolioImages = document.querySelectorAll('.portfolio-card img, .content-area img');
            galleryImages = Array.from(portfolioImages);

            // Add click event to each image
            galleryImages.forEach((img, index) => {
                img.style.cursor = 'pointer';
                img.addEventListener('click', function(e) {
                    e.preventDefault();
                    openLightbox(index);
                });
            });
        }

        // Open lightbox
        function openLightbox(index) {
            currentImageIndex = index;
            updateLightboxImage();
            lightbox.style.display = 'block';
            document.body.style.overflow = 'hidden';
        }

        // Close lightbox
        function closeLightbox() {
            lightbox.style.display = 'none';
            document.body.style.overflow = '';
        }

        // Update lightbox image
        function updateLightboxImage() {
            const img = galleryImages[currentImageIndex];
            lightboxImage.src = img.src;
            lightboxImage.alt = img.alt;
            lightboxCaption.textContent = img.alt;

            // Hide/show navigation buttons
            prevBtn.style.display = currentImageIndex === 0 ? 'none' : 'flex';
            nextBtn.style.display = currentImageIndex === galleryImages.length - 1 ? 'none' : 'flex';
        }

        // Previous image
        function showPrevImage() {
            if (currentImageIndex > 0) {
                currentImageIndex--;
                updateLightboxImage();
            }
        }

        // Next image
        function showNextImage() {
            if (currentImageIndex < galleryImages.length - 1) {
                currentImageIndex++;
                updateLightboxImage();
            }
        }

        // Event listeners
        closeBtn.addEventListener('click', closeLightbox);
        prevBtn.addEventListener('click', showPrevImage);
        nextBtn.addEventListener('click', showNextImage);

        // Close on overlay click
        lightbox.querySelector('.lightbox-overlay').addEventListener('click', closeLightbox);

        // Keyboard navigation
        document.addEventListener('keydown', function(e) {
            if (lightbox.style.display === 'block') {
                if (e.key === 'Escape') {
                    closeLightbox();
                } else if (e.key === 'ArrowLeft') {
                    showPrevImage();
                } else if (e.key === 'ArrowRight') {
                    showNextImage();
                }
            }
        });

        // Initialize gallery
        initGallery();

    });

})();
