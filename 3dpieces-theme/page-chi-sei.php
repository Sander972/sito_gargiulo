<?php
/**
 * Template Name: Chi Sei
 * Template for About Page
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
                <?php esc_html_e('Chi Sono', '3dpieces'); ?>
            </h1>
            <p class="page-subtitle">
                <?php esc_html_e('Passione per la progettazione e la stampa 3D', '3dpieces'); ?>
            </p>
        </div>
    </div>

    <!-- Personal Story Section -->
    <section class="section">
        <div class="container">
            <div class="grid grid-2" style="gap: var(--spacing-xl); align-items: center;">
                <div>
                    <h2 style="font-size: var(--font-size-xl); margin-bottom: var(--spacing-md);">
                        <?php esc_html_e('La Mia Storia', '3dpieces'); ?>
                    </h2>
                    <p style="font-size: var(--font-size-md); margin-bottom: var(--spacing-sm);">
                        <?php esc_html_e('Sono Gargiulo Daniele, fondatore di 3dpieces. Mi occupo di stampa 3D e progettazione CAD con l\'obiettivo di rendere la prototipazione rapida e la produzione personalizzata accessibili ad aziende e professionisti.', '3dpieces'); ?>
                    </p>
                    <p style="font-size: var(--font-size-md); margin-bottom: var(--spacing-sm);">
                        <?php esc_html_e('Con competenze in SolidWorks e tecnologie di stampa 3D, aiuto le aziende a trasformare idee in oggetti reali, rapidamente e senza intermediari.', '3dpieces'); ?>
                    </p>
                    <p style="font-size: var(--font-size-md);">
                        <?php esc_html_e('La mia missione è offrire un servizio diretto, veloce e professionale, eliminando le complicazioni e concentrandomi su ciò che conta davvero: risultati concreti.', '3dpieces'); ?>
                    </p>
                </div>

                <div>
                    <img src="https://via.placeholder.com/600x600/1a1a1a/00a8ff?text=Daniele+Gargiulo" alt="Gargiulo Daniele" style="border-radius: var(--border-radius-lg); width: 100%; box-shadow: var(--shadow-md);">
                </div>
            </div>
        </div>
    </section>

    <!-- Mission/Vision Section -->
    <section class="section" style="background-color: var(--color-bg-secondary);">
        <div class="container">
            <div style="max-width: 800px; margin: 0 auto; text-align: center;">
                <h2 style="font-size: var(--font-size-xl); margin-bottom: var(--spacing-md);">
                    <?php esc_html_e('La Mia Visione', '3dpieces'); ?>
                </h2>
                <p style="font-size: var(--font-size-md); line-height: var(--line-height-relaxed);">
                    <?php esc_html_e('Credo nella produzione flessibile, veloce e accessibile. 3dpieces offre un contatto diretto, tempi rapidi e soluzioni tecniche concrete - senza complicazioni. Il mio approccio si basa sulla trasparenza, sulla competenza tecnica e sul mettere al centro le esigenze del cliente.', '3dpieces'); ?>
                </p>
            </div>
        </div>
    </section>

    <!-- Why Choose 3dpieces -->
    <section class="section">
        <div class="container">
            <h2 class="section-title">
                <?php esc_html_e('Perché Scegliere 3dpieces', '3dpieces'); ?>
            </h2>

            <div class="grid grid-2" style="gap: var(--spacing-lg); margin-top: var(--spacing-lg);">
                <div class="card">
                    <svg class="card-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="12" r="10"></circle>
                        <polyline points="12 6 12 12 16 14"></polyline>
                    </svg>
                    <h3 class="card-title">
                        <?php esc_html_e('Rapidità', '3dpieces'); ?>
                    </h3>
                    <p class="card-text">
                        <?php esc_html_e('Da progetto a oggetto fisico in tempi brevi. Processo snello e diretto senza lungaggini burocratiche.', '3dpieces'); ?>
                    </p>
                </div>

                <div class="card">
                    <svg class="card-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                        <polyline points="22 4 12 14.01 9 11.01"></polyline>
                    </svg>
                    <h3 class="card-title">
                        <?php esc_html_e('Competenza', '3dpieces'); ?>
                    </h3>
                    <p class="card-text">
                        <?php esc_html_e('Esperienza con SolidWorks e tecnologie di stampa professionale. Ogni progetto è seguito con attenzione ai dettagli.', '3dpieces'); ?>
                    </p>
                </div>

                <div class="card">
                    <svg class="card-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M12 2L2 7l10 5 10-5-10-5z"></path>
                        <path d="M2 17l10 5 10-5"></path>
                        <path d="M2 12l10 5 10-5"></path>
                    </svg>
                    <h3 class="card-title">
                        <?php esc_html_e('Flessibilità', '3dpieces'); ?>
                    </h3>
                    <p class="card-text">
                        <?php esc_html_e('Progetti personalizzati, piccole serie, prototipi unici. Mi adatto alle tue esigenze specifiche.', '3dpieces'); ?>
                    </p>
                </div>

                <div class="card">
                    <svg class="card-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                        <circle cx="9" cy="7" r="4"></circle>
                        <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                    </svg>
                    <h3 class="card-title">
                        <?php esc_html_e('Supporto Diretto', '3dpieces'); ?>
                    </h3>
                    <p class="card-text">
                        <?php esc_html_e('Parli direttamente con chi realizza il lavoro. Nessun intermediario, comunicazione chiara e immediata.', '3dpieces'); ?>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Tools & Technologies -->
    <section class="section" style="background-color: var(--color-bg-secondary);">
        <div class="container">
            <h2 class="section-title">
                <?php esc_html_e('Strumenti e Tecnologie', '3dpieces'); ?>
            </h2>
            <p class="section-subtitle">
                <?php esc_html_e('Gli strumenti professionali che utilizzo per i miei progetti', '3dpieces'); ?>
            </p>

            <div class="grid grid-3" style="margin-top: var(--spacing-lg);">
                <!-- SolidWorks -->
                <div class="card" style="text-align: center;">
                    <div style="width: 80px; height: 80px; background-color: var(--color-accent); border-radius: var(--border-radius-lg); display: flex; align-items: center; justify-content: center; margin: 0 auto var(--spacing-sm); font-size: 2rem; font-weight: bold; color: var(--color-bg-primary);">
                        SW
                    </div>
                    <h3 class="card-title">SolidWorks</h3>
                    <p class="card-text">
                        <?php esc_html_e('Software CAD professionale per modellazione 3D parametrica', '3dpieces'); ?>
                    </p>
                </div>

                <!-- 3D Printing -->
                <div class="card" style="text-align: center;">
                    <div style="width: 80px; height: 80px; background-color: var(--color-accent); border-radius: var(--border-radius-lg); display: flex; align-items: center; justify-content: center; margin: 0 auto var(--spacing-sm);">
                        <svg style="width: 48px; height: 48px; color: var(--color-bg-primary);" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 2L2 7l10 5 10-5-10-5z"></path>
                            <path d="M2 17l10 5 10-5"></path>
                            <path d="M2 12l10 5 10-5"></path>
                        </svg>
                    </div>
                    <h3 class="card-title">Stampa 3D FDM/SLA</h3>
                    <p class="card-text">
                        <?php esc_html_e('Tecnologie di stampa professionale per diversi materiali e applicazioni', '3dpieces'); ?>
                    </p>
                </div>

                <!-- Materials -->
                <div class="card" style="text-align: center;">
                    <div style="width: 80px; height: 80px; background-color: var(--color-accent); border-radius: var(--border-radius-lg); display: flex; align-items: center; justify-content: center; margin: 0 auto var(--spacing-sm);">
                        <svg style="width: 48px; height: 48px; color: var(--color-bg-primary);" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="12" cy="12" r="10"></circle>
                            <circle cx="12" cy="12" r="6"></circle>
                            <circle cx="12" cy="12" r="2"></circle>
                        </svg>
                    </div>
                    <h3 class="card-title"><?php esc_html_e('Materiali Vari', '3dpieces'); ?></h3>
                    <p class="card-text">
                        <?php esc_html_e('PLA, ABS, PETG, TPU, resine e altri materiali specializzati', '3dpieces'); ?>
                    </p>
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
                        <?php esc_html_e('Vuoi lavorare insieme?', '3dpieces'); ?>
                    </h2>
                    <p class="cta-text">
                        <?php esc_html_e('Sono sempre disponibile a discutere nuovi progetti e opportunità di collaborazione. Parliamo del tuo prossimo progetto!', '3dpieces'); ?>
                    </p>
                    <div class="cta-buttons">
                        <a href="<?php echo esc_url(home_url('/contatti')); ?>" class="btn btn-primary btn-large" style="background-color: var(--color-bg-primary); color: var(--color-text-primary); border-color: var(--color-bg-primary);">
                            <?php esc_html_e('Contattami', '3dpieces'); ?>
                        </a>
                        <a href="<?php echo esc_url(home_url('/portfolio')); ?>" class="btn btn-secondary btn-large" style="border-color: var(--color-bg-primary); color: var(--color-bg-primary);">
                            <?php esc_html_e('Vedi i Miei Lavori', '3dpieces'); ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php
get_footer();
