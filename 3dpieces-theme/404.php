<?php
/**
 * 404 Error Page Template
 *
 * @package 3dpieces
 */

get_header();
?>

<main id="main" class="site-main">

    <!-- 404 Page Content -->
    <section class="section" style="min-height: 60vh; display: flex; align-items: center;">
        <div class="container">
            <div style="max-width: 600px; margin: 0 auto; text-align: center;">

                <!-- 404 Illustration -->
                <div style="margin-bottom: var(--spacing-lg);">
                    <svg style="width: 200px; height: 200px; margin: 0 auto; color: var(--color-accent);" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="12" r="10"></circle>
                        <line x1="12" y1="8" x2="12" y2="12"></line>
                        <line x1="12" y1="16" x2="12.01" y2="16"></line>
                    </svg>
                </div>

                <!-- 404 Title -->
                <h1 style="font-size: var(--font-size-xxl); margin-bottom: var(--spacing-sm); color: var(--color-accent);">
                    404
                </h1>

                <h2 style="font-size: var(--font-size-xl); margin-bottom: var(--spacing-md);">
                    <?php esc_html_e('Pagina Non Trovata', '3dpieces'); ?>
                </h2>

                <p style="font-size: var(--font-size-md); color: var(--color-text-secondary); margin-bottom: var(--spacing-lg);">
                    <?php esc_html_e('Ops! La pagina che stai cercando non esiste o è stata spostata.', '3dpieces'); ?>
                </p>

                <!-- Search Form -->
                <div style="margin-bottom: var(--spacing-lg);">
                    <form role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>" style="max-width: 400px; margin: 0 auto;">
                        <div style="display: flex; gap: var(--spacing-xs);">
                            <input
                                type="search"
                                name="s"
                                class="form-input"
                                placeholder="<?php esc_attr_e('Cerca nel sito...', '3dpieces'); ?>"
                                style="flex: 1;"
                            >
                            <button type="submit" class="btn btn-primary">
                                <?php esc_html_e('Cerca', '3dpieces'); ?>
                            </button>
                        </div>
                    </form>
                </div>

                <!-- Navigation Links -->
                <div style="display: flex; gap: var(--spacing-sm); justify-content: center; flex-wrap: wrap;">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-primary">
                        <?php esc_html_e('Torna alla Home', '3dpieces'); ?>
                    </a>
                    <a href="<?php echo esc_url(home_url('/contatti')); ?>" class="btn btn-secondary">
                        <?php esc_html_e('Contattaci', '3dpieces'); ?>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Helpful Links Section -->
    <section class="section" style="background-color: var(--color-bg-secondary);">
        <div class="container">
            <h2 class="section-title">
                <?php esc_html_e('Link Utili', '3dpieces'); ?>
            </h2>

            <div class="grid grid-3" style="margin-top: var(--spacing-lg);">
                <div class="card" style="text-align: center;">
                    <svg class="card-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="margin: 0 auto var(--spacing-sm);">
                        <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                        <polyline points="9 22 9 12 15 12 15 22"></polyline>
                    </svg>
                    <h3 class="card-title">
                        <a href="<?php echo esc_url(home_url('/')); ?>">
                            <?php esc_html_e('Homepage', '3dpieces'); ?>
                        </a>
                    </h3>
                    <p class="card-text">
                        <?php esc_html_e('Scopri chi siamo e cosa facciamo', '3dpieces'); ?>
                    </p>
                </div>

                <div class="card" style="text-align: center;">
                    <svg class="card-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="margin: 0 auto var(--spacing-sm);">
                        <path d="M12 2L2 7l10 5 10-5-10-5z"></path>
                        <path d="M2 17l10 5 10-5"></path>
                        <path d="M2 12l10 5 10-5"></path>
                    </svg>
                    <h3 class="card-title">
                        <a href="<?php echo esc_url(home_url('/servizi')); ?>">
                            <?php esc_html_e('Servizi', '3dpieces'); ?>
                        </a>
                    </h3>
                    <p class="card-text">
                        <?php esc_html_e('Stampa 3D e progettazione CAD', '3dpieces'); ?>
                    </p>
                </div>

                <div class="card" style="text-align: center;">
                    <svg class="card-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="margin: 0 auto var(--spacing-sm);">
                        <rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect>
                        <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                    </svg>
                    <h3 class="card-title">
                        <a href="<?php echo esc_url(home_url('/portfolio')); ?>">
                            <?php esc_html_e('Portfolio', '3dpieces'); ?>
                        </a>
                    </h3>
                    <p class="card-text">
                        <?php esc_html_e('I nostri progetti realizzati', '3dpieces'); ?>
                    </p>
                </div>
            </div>
        </div>
    </section>

</main>

<?php
get_footer();
