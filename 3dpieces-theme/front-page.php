<?php
/**
 * Homepage Template
 *
 * @package 3dpieces
 */

get_header();
?>

<main id="main" class="site-main">

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-background">
            <!-- 3D geometric shapes background (can be added with CSS or SVG) -->
        </div>
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title">
                    <?php echo esc_html__('Diamo forma alle tue idee con la stampa 3D', '3dpieces'); ?>
                </h1>
                <p class="hero-subtitle">
                    <?php echo esc_html__('Progettazione e stampa 3D per aziende e professionisti. Prototipi, componenti tecnici e soluzioni su misura.', '3dpieces'); ?>
                </p>
                <div class="hero-buttons">
                    <a href="<?php echo esc_url(home_url('/contatti')); ?>" class="btn btn-primary btn-large">
                        <?php esc_html_e('Richiedi un preventivo', '3dpieces'); ?>
                    </a>
                    <a href="<?php echo esc_url(home_url('/portfolio')); ?>" class="btn btn-secondary btn-large">
                        <?php esc_html_e('Vedi i progetti', '3dpieces'); ?>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Preview Section -->
    <section class="section">
        <div class="container">
            <h2 class="section-title">
                <?php esc_html_e('I Nostri Servizi', '3dpieces'); ?>
            </h2>

            <div class="grid grid-3">
                <!-- Service Card 1: Stampa 3D -->
                <div class="card service-card">
                    <svg class="card-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M12 2L2 7l10 5 10-5-10-5z"></path>
                        <path d="M2 17l10 5 10-5"></path>
                        <path d="M2 12l10 5 10-5"></path>
                    </svg>
                    <h3 class="card-title">
                        <?php esc_html_e('Stampa 3D', '3dpieces'); ?>
                    </h3>
                    <p class="card-text">
                        <?php esc_html_e('Prototipi, ricambi e produzioni in piccola serie con tecnologie di stampa 3D professionale.', '3dpieces'); ?>
                    </p>
                    <a href="<?php echo esc_url(home_url('/servizi')); ?>" class="btn btn-ghost">
                        <?php esc_html_e('Scopri di più →', '3dpieces'); ?>
                    </a>
                </div>

                <!-- Service Card 2: Progettazione CAD -->
                <div class="card service-card">
                    <svg class="card-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                        <line x1="9" y1="9" x2="15" y2="9"></line>
                        <line x1="9" y1="15" x2="15" y2="15"></line>
                    </svg>
                    <h3 class="card-title">
                        <?php esc_html_e('Progettazione CAD', '3dpieces'); ?>
                    </h3>
                    <p class="card-text">
                        <?php esc_html_e('Modellazione 3D professionale con SolidWorks. Dalla progettazione all\'ottimizzazione produttiva.', '3dpieces'); ?>
                    </p>
                    <a href="<?php echo esc_url(home_url('/servizi')); ?>" class="btn btn-ghost">
                        <?php esc_html_e('Scopri di più →', '3dpieces'); ?>
                    </a>
                </div>

                <!-- Service Card 3: Soluzioni Personalizzate -->
                <div class="card service-card">
                    <svg class="card-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="12" r="3"></circle>
                        <path d="M12 1v6m0 6v6M5.6 5.6l4.2 4.2m4.2 4.2l4.2 4.2M1 12h6m6 0h6M5.6 18.4l4.2-4.2m4.2-4.2l4.2-4.2"></path>
                    </svg>
                    <h3 class="card-title">
                        <?php esc_html_e('Soluzioni Personalizzate', '3dpieces'); ?>
                    </h3>
                    <p class="card-text">
                        <?php esc_html_e('Progetti su misura per automotive, industria e applicazioni specifiche.', '3dpieces'); ?>
                    </p>
                    <a href="<?php echo esc_url(home_url('/servizi')); ?>" class="btn btn-ghost">
                        <?php esc_html_e('Scopri di più →', '3dpieces'); ?>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Highlight Section -->
    <section class="section" style="background-color: var(--color-bg-secondary);">
        <div class="container">
            <h2 class="section-title">
                <?php esc_html_e('Progetti Recenti', '3dpieces'); ?>
            </h2>
            <p class="section-subtitle">
                <?php esc_html_e('Alcuni esempi del nostro lavoro in stampa 3D e progettazione CAD', '3dpieces'); ?>
            </p>

            <div class="grid grid-3">
                <?php
                // Query for featured portfolio items
                $portfolio_args = array(
                    'post_type'      => 'portfolio',
                    'posts_per_page' => 3,
                    'orderby'        => 'date',
                    'order'          => 'DESC',
                );
                $portfolio_query = new WP_Query($portfolio_args);

                if ($portfolio_query->have_posts()) :
                    while ($portfolio_query->have_posts()) : $portfolio_query->the_post();
                        $categories = get_the_terms(get_the_ID(), 'portfolio_category');
                        ?>
                        <div class="portfolio-card">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('portfolio-thumb', array('class' => 'portfolio-card-image')); ?>
                            <?php else : ?>
                                <img src="https://via.placeholder.com/600x400/1a1a1a/00a8ff?text=Portfolio" alt="<?php the_title_attribute(); ?>" class="portfolio-card-image">
                            <?php endif; ?>

                            <div class="portfolio-card-overlay">
                                <h3 class="portfolio-card-title"><?php the_title(); ?></h3>
                                <?php if ($categories && !is_wp_error($categories)) : ?>
                                    <span class="portfolio-card-category">
                                        <?php echo esc_html($categories[0]->name); ?>
                                    </span>
                                <?php endif; ?>
                                <p style="margin-top: 0.5rem; color: var(--color-text-secondary);">
                                    <?php echo wp_trim_words(get_the_excerpt(), 15); ?>
                                </p>
                                <a href="<?php the_permalink(); ?>" class="btn btn-ghost" style="margin-top: 0.5rem;">
                                    <?php esc_html_e('Vedi progetto →', '3dpieces'); ?>
                                </a>
                            </div>
                        </div>
                        <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    // Display placeholder cards if no portfolio items exist
                    for ($i = 1; $i <= 3; $i++) :
                        ?>
                        <div class="portfolio-card">
                            <img src="https://via.placeholder.com/600x400/1a1a1a/00a8ff?text=Progetto+<?php echo $i; ?>" alt="Progetto <?php echo $i; ?>" class="portfolio-card-image">
                            <div class="portfolio-card-overlay">
                                <h3 class="portfolio-card-title"><?php echo sprintf(esc_html__('Progetto %d', '3dpieces'), $i); ?></h3>
                                <span class="portfolio-card-category"><?php esc_html_e('Stampa 3D', '3dpieces'); ?></span>
                                <p style="margin-top: 0.5rem; color: var(--color-text-secondary);">
                                    <?php esc_html_e('Esempio di progetto di stampa 3D e progettazione CAD professionale.', '3dpieces'); ?>
                                </p>
                            </div>
                        </div>
                        <?php
                    endfor;
                endif;
                ?>
            </div>

            <div style="text-align: center; margin-top: var(--spacing-lg);">
                <a href="<?php echo esc_url(home_url('/portfolio')); ?>" class="btn btn-primary">
                    <?php esc_html_e('Vedi tutti i progetti', '3dpieces'); ?>
                </a>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="section">
        <div class="container">
            <div class="cta-section">
                <div class="cta-content">
                    <h2 class="cta-title">
                        <?php esc_html_e('Hai un\'idea? Parliamone.', '3dpieces'); ?>
                    </h2>
                    <p class="cta-text">
                        <?php esc_html_e('Trasformiamo le tue esigenze in soluzioni concrete. Contatto diretto, preventivi rapidi, risultati professionali.', '3dpieces'); ?>
                    </p>
                    <div class="cta-buttons">
                        <a href="<?php echo esc_url(home_url('/contatti')); ?>" class="btn btn-primary btn-large" style="background-color: var(--color-bg-primary); color: var(--color-text-primary); border-color: var(--color-bg-primary);">
                            <?php esc_html_e('Contattaci', '3dpieces'); ?>
                        </a>
                        <a href="https://wa.me/393123456789?text=Ciao,%20vorrei%20informazioni" target="_blank" rel="noopener noreferrer" class="btn btn-secondary btn-large" style="background-color: #25D366; color: white; border-color: #25D366;">
                            <svg class="icon" viewBox="0 0 24 24" fill="currentColor" style="width: 20px; height: 20px;">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"></path>
                            </svg>
                            <?php esc_html_e('WhatsApp', '3dpieces'); ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php
get_footer();
