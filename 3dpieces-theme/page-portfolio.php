<?php
/**
 * Template Name: Portfolio
 * Template for Portfolio Page
 *
 * @package 3dpieces
 */

get_header();
?>

<main id="main" class="site-main">

    <!-- Page Header -->
    <div class="page-header">
        <div class="container">
            <h1 class="page-title">
                <?php esc_html_e('Portfolio', '3dpieces'); ?>
            </h1>
            <p class="page-subtitle">
                <?php esc_html_e('I nostri progetti di stampa 3D e progettazione CAD', '3dpieces'); ?>
            </p>
        </div>
    </div>

    <!-- Filter Buttons -->
    <section class="section-sm">
        <div class="container">
            <div class="filter-buttons">
                <button class="filter-btn active" data-filter="all">
                    <?php esc_html_e('Tutti', '3dpieces'); ?>
                </button>
                <button class="filter-btn" data-filter="stampa-3d">
                    <?php esc_html_e('Stampa 3D', '3dpieces'); ?>
                </button>
                <button class="filter-btn" data-filter="progettazione-cad">
                    <?php esc_html_e('Progettazione CAD', '3dpieces'); ?>
                </button>
                <button class="filter-btn" data-filter="automotive">
                    <?php esc_html_e('Automotive', '3dpieces'); ?>
                </button>
                <button class="filter-btn" data-filter="industriale">
                    <?php esc_html_e('Industriale', '3dpieces'); ?>
                </button>
            </div>
        </div>
    </section>

    <!-- Portfolio Grid -->
    <section class="section">
        <div class="container">
            <div class="grid grid-3" id="portfolio-grid">
                <?php
                $portfolio_args = array(
                    'post_type'      => 'portfolio',
                    'posts_per_page' => -1,
                    'orderby'        => 'date',
                    'order'          => 'DESC',
                );
                $portfolio_query = new WP_Query($portfolio_args);

                if ($portfolio_query->have_posts()) :
                    while ($portfolio_query->have_posts()) : $portfolio_query->the_post();
                        $categories = get_the_terms(get_the_ID(), 'portfolio_category');
                        $category_slug = '';
                        if ($categories && !is_wp_error($categories)) {
                            $category_slug = $categories[0]->slug;
                        }
                        ?>
                        <div class="portfolio-card portfolio-item" data-category="<?php echo esc_attr($category_slug); ?>">
                            <a href="<?php the_permalink(); ?>">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('portfolio-thumb', array('class' => 'portfolio-card-image')); ?>
                                <?php else : ?>
                                    <img src="https://via.placeholder.com/600x400/1a1a1a/00a8ff?text=<?php echo urlencode(get_the_title()); ?>" alt="<?php the_title_attribute(); ?>" class="portfolio-card-image">
                                <?php endif; ?>

                                <div class="portfolio-card-overlay">
                                    <h3 class="portfolio-card-title"><?php the_title(); ?></h3>
                                    <?php if ($categories && !is_wp_error($categories)) : ?>
                                        <span class="portfolio-card-category">
                                            <?php echo esc_html($categories[0]->name); ?>
                                        </span>
                                    <?php endif; ?>
                                    <?php if (get_the_excerpt()) : ?>
                                        <p style="margin-top: 0.5rem; color: var(--color-text-secondary); font-size: var(--font-size-sm);">
                                            <?php echo wp_trim_words(get_the_excerpt(), 12); ?>
                                        </p>
                                    <?php endif; ?>
                                </div>
                            </a>
                        </div>
                        <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    // Display placeholder portfolio items
                    $placeholders = array(
                        array('title' => 'Prototipo Automotive', 'category' => 'automotive', 'cat_name' => 'Automotive'),
                        array('title' => 'Componente Industriale', 'category' => 'industriale', 'cat_name' => 'Industriale'),
                        array('title' => 'Progetto CAD Custom', 'category' => 'progettazione-cad', 'cat_name' => 'Progettazione CAD'),
                        array('title' => 'Stampa 3D FDM', 'category' => 'stampa-3d', 'cat_name' => 'Stampa 3D'),
                        array('title' => 'Ricambio Tecnico', 'category' => 'stampa-3d', 'cat_name' => 'Stampa 3D'),
                        array('title' => 'Modellazione SolidWorks', 'category' => 'progettazione-cad', 'cat_name' => 'Progettazione CAD'),
                    );

                    foreach ($placeholders as $placeholder) :
                        ?>
                        <div class="portfolio-card portfolio-item" data-category="<?php echo esc_attr($placeholder['category']); ?>">
                            <img src="https://via.placeholder.com/600x400/1a1a1a/00a8ff?text=<?php echo urlencode($placeholder['title']); ?>" alt="<?php echo esc_attr($placeholder['title']); ?>" class="portfolio-card-image">
                            <div class="portfolio-card-overlay">
                                <h3 class="portfolio-card-title"><?php echo esc_html($placeholder['title']); ?></h3>
                                <span class="portfolio-card-category">
                                    <?php echo esc_html($placeholder['cat_name']); ?>
                                </span>
                                <p style="margin-top: 0.5rem; color: var(--color-text-secondary); font-size: var(--font-size-sm);">
                                    <?php esc_html_e('Esempio di progetto professionale di stampa 3D e progettazione CAD.', '3dpieces'); ?>
                                </p>
                            </div>
                        </div>
                        <?php
                    endforeach;
                endif;
                ?>
            </div>

            <?php if (!$portfolio_query->have_posts()) : ?>
                <div style="text-align: center; margin-top: var(--spacing-lg);">
                    <p style="color: var(--color-text-secondary);">
                        <?php esc_html_e('Questi sono progetti di esempio. I progetti reali verranno aggiunti presto.', '3dpieces'); ?>
                    </p>
                </div>
            <?php endif; ?>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="section" style="background-color: var(--color-bg-secondary);">
        <div class="container" style="text-align: center;">
            <h2 style="font-size: var(--font-size-xl); margin-bottom: var(--spacing-sm);">
                <?php esc_html_e('Hai un progetto in mente?', '3dpieces'); ?>
            </h2>
            <p style="font-size: var(--font-size-md); color: var(--color-text-secondary); margin-bottom: var(--spacing-md);">
                <?php esc_html_e('Contattaci per discutere come possiamo aiutarti', '3dpieces'); ?>
            </p>
            <a href="<?php echo esc_url(home_url('/contatti')); ?>" class="btn btn-primary btn-large">
                <?php esc_html_e('Contattaci Ora', '3dpieces'); ?>
            </a>
        </div>
    </section>

</main>

<?php
get_footer();
