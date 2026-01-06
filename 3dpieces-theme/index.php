<?php
/**
 * The main template file (fallback)
 *
 * @package 3dpieces
 */

get_header();
?>

<main id="main" class="site-main">
    <div class="container">
        <div class="content-area">
            <?php
            if (have_posts()) :
                while (have_posts()) :
                    the_post();
                    ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <header class="entry-header">
                            <h1 class="entry-title"><?php the_title(); ?></h1>
                        </header>
                        <div class="entry-content">
                            <?php the_content(); ?>
                        </div>
                    </article>
                    <?php
                endwhile;
            else :
                ?>
                <p><?php esc_html_e('No content found', '3dpieces'); ?></p>
                <?php
            endif;
            ?>
        </div>
    </div>
</main>

<?php
get_footer();
