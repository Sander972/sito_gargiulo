<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
    <div class="container">
        <div class="header-inner">
            <!-- Logo/Site Branding -->
            <div class="site-branding">
                <?php if (has_custom_logo()) : ?>
                    <?php the_custom_logo(); ?>
                <?php else : ?>
                    <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                        <?php bloginfo('name'); ?>
                    </a>
                <?php endif; ?>
            </div>

            <!-- Desktop Navigation -->
            <nav class="main-navigation" role="navigation" aria-label="<?php esc_attr_e('Primary Menu', '3dpieces'); ?>">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'menu_class'     => 'nav-menu',
                    'container'      => false,
                    'fallback_cb'    => function() {
                        echo '<ul class="nav-menu">';
                        echo '<li><a href="' . esc_url(home_url('/')) . '">Home</a></li>';
                        echo '<li><a href="' . esc_url(home_url('/servizi')) . '">Servizi</a></li>';
                        echo '<li><a href="' . esc_url(home_url('/portfolio')) . '">Portfolio</a></li>';
                        echo '<li><a href="' . esc_url(home_url('/chi-sei')) . '">Chi Sei</a></li>';
                        echo '<li><a href="' . esc_url(home_url('/contatti')) . '">Contatti</a></li>';
                        echo '</ul>';
                    }
                ));
                ?>
            </nav>

            <!-- Mobile Menu Toggle -->
            <button class="mobile-menu-toggle" aria-label="<?php esc_attr_e('Toggle Menu', '3dpieces'); ?>" aria-expanded="false">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </div>
</header>
