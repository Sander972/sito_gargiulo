<?php
/**
 * Template Part: Hero Section
 *
 * @package 3dpieces
 */
?>

<section class="hero-section">
    <div class="hero-background">
        <!-- Background can be customized with CSS or SVG -->
    </div>
    <div class="container">
        <div class="hero-content">
            <h1 class="hero-title">
                <?php echo isset($args['title']) ? esc_html($args['title']) : esc_html__('Diamo forma alle tue idee', '3dpieces'); ?>
            </h1>
            <p class="hero-subtitle">
                <?php echo isset($args['subtitle']) ? esc_html($args['subtitle']) : esc_html__('Stampa 3D e progettazione CAD professionale', '3dpieces'); ?>
            </p>
            <?php if (isset($args['show_buttons']) && $args['show_buttons']) : ?>
                <div class="hero-buttons">
                    <a href="<?php echo esc_url(home_url('/contatti')); ?>" class="btn btn-primary btn-large">
                        <?php esc_html_e('Contattaci', '3dpieces'); ?>
                    </a>
                    <a href="<?php echo esc_url(home_url('/portfolio')); ?>" class="btn btn-secondary btn-large">
                        <?php esc_html_e('Vedi Portfolio', '3dpieces'); ?>
                    </a>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
