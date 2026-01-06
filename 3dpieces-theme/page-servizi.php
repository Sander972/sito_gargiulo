<?php
/**
 * Template Name: Servizi
 * Template for Services Page
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
                <?php esc_html_e('I Nostri Servizi', '3dpieces'); ?>
            </h1>
            <p class="page-subtitle">
                <?php esc_html_e('Soluzioni pratiche per la tua produzione, dalla progettazione alla realizzazione', '3dpieces'); ?>
            </p>
        </div>
    </div>

    <!-- Service 1: Stampa 3D -->
    <section class="section">
        <div class="container">
            <div class="grid grid-2" style="gap: var(--spacing-xl); align-items: center;">
                <div>
                    <h2 style="font-size: var(--font-size-xl); margin-bottom: var(--spacing-md);">
                        <?php esc_html_e('Stampa 3D Professionale', '3dpieces'); ?>
                    </h2>
                    <p style="font-size: var(--font-size-md); margin-bottom: var(--spacing-md);">
                        <?php esc_html_e('Tecnologie di stampa 3D all\'avanguardia per trasformare i tuoi progetti in oggetti reali, funzionali e personalizzati.', '3dpieces'); ?>
                    </p>

                    <div class="grid grid-2" style="gap: var(--spacing-md); margin-top: var(--spacing-lg);">
                        <div>
                            <h3 style="font-size: var(--font-size-md); color: var(--color-accent); margin-bottom: var(--spacing-xs);">
                                ✓ <?php esc_html_e('Prototipi funzionali', '3dpieces'); ?>
                            </h3>
                            <p><?php esc_html_e('Valida le tue idee con prototipi fisici rapidi e accurati', '3dpieces'); ?></p>
                        </div>

                        <div>
                            <h3 style="font-size: var(--font-size-md); color: var(--color-accent); margin-bottom: var(--spacing-xs);">
                                ✓ <?php esc_html_e('Parti tecniche e ricambi', '3dpieces'); ?>
                            </h3>
                            <p><?php esc_html_e('Produciamo componenti tecnici e ricambi anche per pezzi non più disponibili', '3dpieces'); ?></p>
                        </div>

                        <div>
                            <h3 style="font-size: var(--font-size-md); color: var(--color-accent); margin-bottom: var(--spacing-xs);">
                                ✓ <?php esc_html_e('Piccole serie', '3dpieces'); ?>
                            </h3>
                            <p><?php esc_html_e('Produzioni in quantità limitate senza costi di attrezzaggio', '3dpieces'); ?></p>
                        </div>

                        <div>
                            <h3 style="font-size: var(--font-size-md); color: var(--color-accent); margin-bottom: var(--spacing-xs);">
                                ✓ <?php esc_html_e('Gadget personalizzati', '3dpieces'); ?>
                            </h3>
                            <p><?php esc_html_e('Oggetti promozionali e gadget aziendali unici', '3dpieces'); ?></p>
                        </div>
                    </div>
                </div>

                <div>
                    <img src="https://via.placeholder.com/600x400/1a1a1a/00a8ff?text=Stampa+3D" alt="Stampa 3D" style="border-radius: var(--border-radius-lg); width: 100%;">
                </div>
            </div>
        </div>
    </section>

    <!-- Service 2: Progettazione CAD -->
    <section class="section" style="background-color: var(--color-bg-secondary);">
        <div class="container">
            <div class="grid grid-2" style="gap: var(--spacing-xl); align-items: center;">
                <div style="order: 2;">
                    <h2 style="font-size: var(--font-size-xl); margin-bottom: var(--spacing-md);">
                        <?php esc_html_e('Progettazione 3D CAD', '3dpieces'); ?>
                    </h2>
                    <p style="font-size: var(--font-size-md); margin-bottom: var(--spacing-md);">
                        <?php esc_html_e('Modellazione professionale con SolidWorks per progetti tecnici, industriali e personalizzati.', '3dpieces'); ?>
                    </p>

                    <div style="margin-top: var(--spacing-lg);">
                        <div style="margin-bottom: var(--spacing-md);">
                            <h3 style="font-size: var(--font-size-md); color: var(--color-accent); margin-bottom: var(--spacing-xs);">
                                ✓ <?php esc_html_e('Modellazione da zero', '3dpieces'); ?>
                            </h3>
                            <p><?php esc_html_e('Trasformiamo le tue specifiche in modelli 3D pronti per la produzione', '3dpieces'); ?></p>
                        </div>

                        <div style="margin-bottom: var(--spacing-md);">
                            <h3 style="font-size: var(--font-size-md); color: var(--color-accent); margin-bottom: var(--spacing-xs);">
                                ✓ <?php esc_html_e('Ottimizzazione', '3dpieces'); ?>
                            </h3>
                            <p><?php esc_html_e('Miglioriamo pezzi esistenti per prestazioni, costi o producibilità', '3dpieces'); ?></p>
                        </div>

                        <div>
                            <h3 style="font-size: var(--font-size-md); color: var(--color-accent); margin-bottom: var(--spacing-xs);">
                                ✓ <?php esc_html_e('Reverse Engineering', '3dpieces'); ?>
                            </h3>
                            <p><?php esc_html_e('Ricreiamo modelli CAD da oggetti fisici esistenti', '3dpieces'); ?></p>
                        </div>
                    </div>
                </div>

                <div style="order: 1;">
                    <img src="https://via.placeholder.com/600x400/1a1a1a/00a8ff?text=CAD+Design" alt="Progettazione CAD" style="border-radius: var(--border-radius-lg); width: 100%;">
                </div>
            </div>
        </div>
    </section>

    <!-- Service 3: Soluzioni Personalizzate -->
    <section class="section">
        <div class="container">
            <div class="grid grid-2" style="gap: var(--spacing-xl); align-items: center;">
                <div>
                    <h2 style="font-size: var(--font-size-xl); margin-bottom: var(--spacing-md);">
                        <?php esc_html_e('Progetti Su Misura', '3dpieces'); ?>
                    </h2>
                    <p style="font-size: var(--font-size-md); margin-bottom: var(--spacing-md);">
                        <?php esc_html_e('Supporto completo per progetti specifici in ambito automotive, industriale e oltre.', '3dpieces'); ?>
                    </p>

                    <div style="margin-top: var(--spacing-lg);">
                        <div style="margin-bottom: var(--spacing-md);">
                            <h3 style="font-size: var(--font-size-md); color: var(--color-accent); margin-bottom: var(--spacing-xs);">
                                🚗 <?php esc_html_e('Automotive', '3dpieces'); ?>
                            </h3>
                            <p><?php esc_html_e('Componenti e soluzioni per il settore automotive', '3dpieces'); ?></p>
                        </div>

                        <div style="margin-bottom: var(--spacing-md);">
                            <h3 style="font-size: var(--font-size-md); color: var(--color-accent); margin-bottom: var(--spacing-xs);">
                                🏭 <?php esc_html_e('Industria', '3dpieces'); ?>
                            </h3>
                            <p><?php esc_html_e('Attrezzature, maschere e supporti produttivi', '3dpieces'); ?></p>
                        </div>

                        <div>
                            <h3 style="font-size: var(--font-size-md); color: var(--color-accent); margin-bottom: var(--spacing-xs);">
                                ⚙️ <?php esc_html_e('Custom', '3dpieces'); ?>
                            </h3>
                            <p><?php esc_html_e('Qualsiasi progetto particolare che richiede competenza tecnica', '3dpieces'); ?></p>
                        </div>
                    </div>
                </div>

                <div>
                    <img src="https://via.placeholder.com/600x400/1a1a1a/00a8ff?text=Custom+Solutions" alt="Soluzioni Personalizzate" style="border-radius: var(--border-radius-lg); width: 100%;">
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose 3dpieces -->
    <section class="section" style="background: linear-gradient(135deg, var(--color-accent-dark) 0%, var(--color-accent) 100%);">
        <div class="container">
            <h2 style="text-align: center; font-size: var(--font-size-xl); margin-bottom: var(--spacing-lg); color: var(--color-bg-primary);">
                <?php esc_html_e('Perché Scegliere 3dpieces', '3dpieces'); ?>
            </h2>

            <div class="grid grid-3">
                <div class="card" style="background-color: rgba(255, 255, 255, 0.1); backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.2); text-align: center;">
                    <svg class="card-icon" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" style="margin: 0 auto var(--spacing-sm); color: white;">
                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                        <circle cx="9" cy="7" r="4"></circle>
                        <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                    </svg>
                    <h3 style="color: white; margin-bottom: var(--spacing-sm);">
                        <?php esc_html_e('Contatto Diretto', '3dpieces'); ?>
                    </h3>
                    <p style="color: rgba(255, 255, 255, 0.9);">
                        <?php esc_html_e('Senza intermediari. Parli direttamente con chi realizza il lavoro.', '3dpieces'); ?>
                    </p>
                </div>

                <div class="card" style="background-color: rgba(255, 255, 255, 0.1); backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.2); text-align: center;">
                    <svg class="card-icon" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" style="margin: 0 auto var(--spacing-sm); color: white;">
                        <circle cx="12" cy="12" r="10"></circle>
                        <polyline points="12 6 12 12 16 14"></polyline>
                    </svg>
                    <h3 style="color: white; margin-bottom: var(--spacing-sm);">
                        <?php esc_html_e('Tempi Rapidi', '3dpieces'); ?>
                    </h3>
                    <p style="color: rgba(255, 255, 255, 0.9);">
                        <?php esc_html_e('Da progetto a oggetto fisico in tempi brevi. Flessibilità massima.', '3dpieces'); ?>
                    </p>
                </div>

                <div class="card" style="background-color: rgba(255, 255, 255, 0.1); backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.2); text-align: center;">
                    <svg class="card-icon" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" style="margin: 0 auto var(--spacing-sm); color: white;">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                        <polyline points="14 2 14 8 20 8"></polyline>
                        <line x1="16" y1="13" x2="8" y2="13"></line>
                        <line x1="16" y1="17" x2="8" y2="17"></line>
                        <polyline points="10 9 9 9 8 9"></polyline>
                    </svg>
                    <h3 style="color: white; margin-bottom: var(--spacing-sm);">
                        <?php esc_html_e('Competenza Tecnica', '3dpieces'); ?>
                    </h3>
                    <p style="color: rgba(255, 255, 255, 0.9);">
                        <?php esc_html_e('Esperienza con SolidWorks e tecnologie di stampa professionale.', '3dpieces'); ?>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="section">
        <div class="container" style="text-align: center;">
            <h2 style="font-size: var(--font-size-xl); margin-bottom: var(--spacing-sm);">
                <?php esc_html_e('Vuoi discutere il tuo progetto?', '3dpieces'); ?>
            </h2>
            <p style="font-size: var(--font-size-md); color: var(--color-text-secondary); margin-bottom: var(--spacing-md); max-width: 600px; margin-left: auto; margin-right: auto;">
                <?php esc_html_e('Contattami per un preventivo gratuito e senza impegno', '3dpieces'); ?>
            </p>
            <div style="display: flex; gap: var(--spacing-sm); justify-content: center; flex-wrap: wrap;">
                <a href="<?php echo esc_url(home_url('/contatti')); ?>" class="btn btn-primary btn-large">
                    <?php esc_html_e('Contattaci', '3dpieces'); ?>
                </a>
                <a href="<?php echo esc_url(home_url('/portfolio')); ?>" class="btn btn-secondary btn-large">
                    <?php esc_html_e('Vedi Portfolio', '3dpieces'); ?>
                </a>
            </div>
        </div>
    </section>

</main>

<?php
get_footer();
