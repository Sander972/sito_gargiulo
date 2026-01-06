<footer class="site-footer">
    <div class="container">
        <div class="footer-content">
            <!-- Column 1: About -->
            <div class="footer-column">
                <h3><?php esc_html_e('Chi Siamo', '3dpieces'); ?></h3>
                <p>
                    <?php echo esc_html__('3dpieces trasforma idee in oggetti reali attraverso stampa 3D e progettazione CAD professionale.', '3dpieces'); ?>
                </p>
            </div>

            <!-- Column 2: Quick Links -->
            <div class="footer-column">
                <h3><?php esc_html_e('Link Rapidi', '3dpieces'); ?></h3>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer',
                    'menu_class'     => 'footer-menu',
                    'container'      => false,
                    'fallback_cb'    => function() {
                        echo '<ul class="footer-menu">';
                        echo '<li><a href="' . esc_url(home_url('/servizi')) . '">Servizi</a></li>';
                        echo '<li><a href="' . esc_url(home_url('/portfolio')) . '">Portfolio</a></li>';
                        echo '<li><a href="' . esc_url(home_url('/chi-sei')) . '">Chi Sei</a></li>';
                        echo '<li><a href="' . esc_url(home_url('/contatti')) . '">Contatti</a></li>';
                        echo '</ul>';
                    }
                ));
                ?>
            </div>

            <!-- Column 3: Contact Info -->
            <div class="footer-column">
                <h3><?php esc_html_e('Contatti', '3dpieces'); ?></h3>
                <div class="footer-contact-info">
                    <div class="contact-item">
                        <svg class="icon contact-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                            <polyline points="22,6 12,13 2,6"></polyline>
                        </svg>
                        <a href="mailto:info@3dpieces.it">info@3dpieces.it</a>
                    </div>

                    <div class="contact-item">
                        <svg class="icon contact-icon" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"></path>
                        </svg>
                        <a href="https://wa.me/393123456789?text=Ciao,%20vorrei%20informazioni" target="_blank" rel="noopener noreferrer" class="whatsapp-link">
                            <?php esc_html_e('WhatsApp', '3dpieces'); ?>
                        </a>
                    </div>
                </div>

                <!-- WhatsApp Button -->
                <a href="https://wa.me/393123456789?text=Ciao,%20vorrei%20informazioni" target="_blank" rel="noopener noreferrer" class="whatsapp-btn" style="margin-top: 1rem;">
                    <svg class="icon" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"></path>
                    </svg>
                    <?php esc_html_e('Scrivimi su WhatsApp', '3dpieces'); ?>
                </a>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <p>
                &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>.
                <?php esc_html_e('Tutti i diritti riservati.', '3dpieces'); ?>
            </p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
