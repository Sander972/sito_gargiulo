<?php
/**
 * Single Portfolio Template
 *
 * @package 3dpieces
 */

get_header();
?>

<main id="main" class="site-main">

    <?php while (have_posts()) : the_post(); ?>

        <!-- Project Header -->
        <div class="page-header">
            <div class="container">
                <div style="max-width: 800px; margin: 0 auto;">
                    <?php
                    $categories = get_the_terms(get_the_ID(), 'portfolio_category');
                    if ($categories && !is_wp_error($categories)) :
                        ?>
                        <div style="margin-bottom: var(--spacing-sm);">
                            <?php foreach ($categories as $category) : ?>
                                <span class="badge badge-primary" style="margin-right: 0.5rem;">
                                    <?php echo esc_html($category->name); ?>
                                </span>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>

                    <h1 class="page-title" style="margin-bottom: var(--spacing-sm);">
                        <?php the_title(); ?>
                    </h1>

                    <?php if (get_the_excerpt()) : ?>
                        <p class="page-subtitle">
                            <?php the_excerpt(); ?>
                        </p>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <!-- Main Image -->
        <section class="section-sm">
            <div class="container container-wide">
                <?php if (has_post_thumbnail()) : ?>
                    <div style="border-radius: var(--border-radius-lg); overflow: hidden;">
                        <?php the_post_thumbnail('portfolio-large', array('style' => 'width: 100%; height: auto;')); ?>
                    </div>
                <?php else : ?>
                    <div style="border-radius: var(--border-radius-lg); overflow: hidden;">
                        <img src="https://via.placeholder.com/1200x800/1a1a1a/00a8ff?text=<?php echo urlencode(get_the_title()); ?>" alt="<?php the_title_attribute(); ?>" style="width: 100%; height: auto;">
                    </div>
                <?php endif; ?>
            </div>
        </section>

        <!-- Project Details -->
        <section class="section">
            <div class="container container-narrow">
                <div class="content-area">
                    <?php the_content(); ?>

                    <?php
                    // Get custom fields (you would use ACF or custom meta boxes here)
                    // For now, we'll use placeholder structure
                    ?>

                    <div style="margin-top: var(--spacing-xl);">
                        <div class="grid grid-2" style="gap: var(--spacing-lg);">
                            <!-- Problem -->
                            <div class="card">
                                <h3 style="color: var(--color-accent); margin-bottom: var(--spacing-sm);">
                                    <?php esc_html_e('Problema', '3dpieces'); ?>
                                </h3>
                                <p>
                                    <?php
                                    // This would come from custom field
                                    echo get_post_meta(get_the_ID(), 'problema', true) ?: esc_html__('Descrizione della sfida o del problema da risolvere.', '3dpieces');
                                    ?>
                                </p>
                            </div>

                            <!-- Solution -->
                            <div class="card">
                                <h3 style="color: var(--color-accent); margin-bottom: var(--spacing-sm);">
                                    <?php esc_html_e('Soluzione', '3dpieces'); ?>
                                </h3>
                                <p>
                                    <?php
                                    // This would come from custom field
                                    echo get_post_meta(get_the_ID(), 'soluzione', true) ?: esc_html__('Come abbiamo risolto il problema con le nostre competenze.', '3dpieces');
                                    ?>
                                </p>
                            </div>

                            <!-- Result -->
                            <div class="card">
                                <h3 style="color: var(--color-accent); margin-bottom: var(--spacing-sm);">
                                    <?php esc_html_e('Risultato', '3dpieces'); ?>
                                </h3>
                                <p>
                                    <?php
                                    // This would come from custom field
                                    echo get_post_meta(get_the_ID(), 'risultato', true) ?: esc_html__('Il risultato finale e i benefici ottenuti.', '3dpieces');
                                    ?>
                                </p>
                            </div>

                            <!-- Technologies -->
                            <div class="card">
                                <h3 style="color: var(--color-accent); margin-bottom: var(--spacing-sm);">
                                    <?php esc_html_e('Tecnologie', '3dpieces'); ?>
                                </h3>
                                <p>
                                    <?php
                                    // This would come from custom field
                                    $technologies = get_post_meta(get_the_ID(), 'tecnologie', true);
                                    echo $technologies ?: esc_html__('SolidWorks, Stampa 3D FDM, Materiali PLA/ABS', '3dpieces');
                                    ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Navigation to other projects -->
        <section class="section" style="background-color: var(--color-bg-secondary);">
            <div class="container">
                <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: var(--spacing-sm);">
                    <div>
                        <?php
                        $prev_post = get_previous_post();
                        if ($prev_post) :
                            ?>
                            <a href="<?php echo get_permalink($prev_post); ?>" class="btn btn-secondary">
                                ← <?php esc_html_e('Progetto Precedente', '3dpieces'); ?>
                            </a>
                        <?php endif; ?>
                    </div>

                    <div>
                        <a href="<?php echo esc_url(home_url('/portfolio')); ?>" class="btn btn-ghost">
                            <?php esc_html_e('Tutti i Progetti', '3dpieces'); ?>
                        </a>
                    </div>

                    <div>
                        <?php
                        $next_post = get_next_post();
                        if ($next_post) :
                            ?>
                            <a href="<?php echo get_permalink($next_post); ?>" class="btn btn-secondary">
                                <?php esc_html_e('Progetto Successivo', '3dpieces'); ?> →
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="section">
            <div class="container">
                <div class="cta-section">
                    <div class="cta-content">
                        <h2 class="cta-title">
                            <?php esc_html_e('Ti piace questo progetto?', '3dpieces'); ?>
                        </h2>
                        <p class="cta-text">
                            <?php esc_html_e('Possiamo realizzare qualcosa di simile anche per te. Contattaci per discutere il tuo progetto.', '3dpieces'); ?>
                        </p>
                        <div class="cta-buttons">
                            <a href="<?php echo esc_url(home_url('/contatti')); ?>" class="btn btn-primary btn-large" style="background-color: var(--color-bg-primary); color: var(--color-text-primary); border-color: var(--color-bg-primary);">
                                <?php esc_html_e('Contattaci', '3dpieces'); ?>
                            </a>
                            <a href="<?php echo esc_url(home_url('/servizi')); ?>" class="btn btn-secondary btn-large" style="border-color: var(--color-bg-primary); color: var(--color-bg-primary);">
                                <?php esc_html_e('I Nostri Servizi', '3dpieces'); ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <?php endwhile; ?>

</main>

<?php
get_footer();
