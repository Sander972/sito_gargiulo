<?php
/**
 * Template Name: Contatti
 * Template for Contact Page
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
                <?php esc_html_e('Contatti', '3dpieces'); ?>
            </h1>
            <p class="page-subtitle">
                <?php esc_html_e('Hai un progetto in mente? Parliamone insieme', '3dpieces'); ?>
            </p>
        </div>
    </div>

    <!-- Contact Content -->
    <section class="section">
        <div class="container">
            <div class="grid grid-2" style="gap: var(--spacing-xl); align-items: start;">

                <!-- Contact Form -->
                <div>
                    <h2 style="font-size: var(--font-size-lg); margin-bottom: var(--spacing-md);">
                        <?php esc_html_e('Invia un Messaggio', '3dpieces'); ?>
                    </h2>

                    <form id="contact-form" class="contact-form" method="post" action="<?php echo esc_url(admin_url('admin-post.php')); ?>">
                        <input type="hidden" name="action" value="contact_form_submit">
                        <?php wp_nonce_field('contact_form_nonce', 'contact_nonce'); ?>

                        <div class="form-group">
                            <label for="name" class="form-label">
                                <?php esc_html_e('Nome', '3dpieces'); ?> *
                            </label>
                            <input
                                type="text"
                                id="name"
                                name="name"
                                class="form-input"
                                required
                                placeholder="<?php esc_attr_e('Il tuo nome', '3dpieces'); ?>"
                            >
                        </div>

                        <div class="form-group">
                            <label for="email" class="form-label">
                                <?php esc_html_e('Email', '3dpieces'); ?> *
                            </label>
                            <input
                                type="email"
                                id="email"
                                name="email"
                                class="form-input"
                                required
                                placeholder="<?php esc_attr_e('tua@email.com', '3dpieces'); ?>"
                            >
                        </div>

                        <div class="form-group">
                            <label for="phone" class="form-label">
                                <?php esc_html_e('Telefono', '3dpieces'); ?>
                            </label>
                            <input
                                type="tel"
                                id="phone"
                                name="phone"
                                class="form-input"
                                placeholder="<?php esc_attr_e('Opzionale', '3dpieces'); ?>"
                            >
                        </div>

                        <div class="form-group">
                            <label for="project-type" class="form-label">
                                <?php esc_html_e('Tipo di Progetto', '3dpieces'); ?> *
                            </label>
                            <select id="project-type" name="project_type" class="form-select" required>
                                <option value=""><?php esc_html_e('Seleziona...', '3dpieces'); ?></option>
                                <option value="stampa-3d"><?php esc_html_e('Stampa 3D', '3dpieces'); ?></option>
                                <option value="progettazione-cad"><?php esc_html_e('Progettazione CAD', '3dpieces'); ?></option>
                                <option value="consulenza"><?php esc_html_e('Consulenza', '3dpieces'); ?></option>
                                <option value="altro"><?php esc_html_e('Altro', '3dpieces'); ?></option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="message" class="form-label">
                                <?php esc_html_e('Messaggio', '3dpieces'); ?> *
                            </label>
                            <textarea
                                id="message"
                                name="message"
                                class="form-textarea"
                                rows="6"
                                required
                                placeholder="<?php esc_attr_e('Raccontami del tuo progetto...', '3dpieces'); ?>"
                            ></textarea>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-large" style="width: 100%;">
                                <?php esc_html_e('Invia Messaggio', '3dpieces'); ?>
                            </button>
                        </div>

                        <div id="form-messages"></div>
                    </form>

                    <p style="font-size: var(--font-size-sm); color: var(--color-text-tertiary); margin-top: var(--spacing-sm);">
                        <?php esc_html_e('* Campi obbligatori', '3dpieces'); ?>
                    </p>
                </div>

                <!-- Direct Contact Info -->
                <div>
                    <div class="card" style="position: sticky; top: calc(var(--spacing-lg) + 60px);">
                        <h3 style="font-size: var(--font-size-lg); margin-bottom: var(--spacing-md);">
                            <?php esc_html_e('Informazioni di Contatto', '3dpieces'); ?>
                        </h3>

                        <!-- Email -->
                        <div style="margin-bottom: var(--spacing-md);">
                            <div style="display: flex; align-items: center; gap: var(--spacing-sm); margin-bottom: var(--spacing-xs);">
                                <svg class="icon" style="color: var(--color-accent);" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                    <polyline points="22,6 12,13 2,6"></polyline>
                                </svg>
                                <strong><?php esc_html_e('Email', '3dpieces'); ?></strong>
                            </div>
                            <a href="mailto:info@3dpieces.it" style="display: block; margin-left: calc(24px + var(--spacing-sm)); color: var(--color-text-secondary);">
                                info@3dpieces.it
                            </a>
                        </div>

                        <!-- WhatsApp -->
                        <div style="margin-bottom: var(--spacing-md);">
                            <div style="display: flex; align-items: center; gap: var(--spacing-sm); margin-bottom: var(--spacing-xs);">
                                <svg class="icon" style="color: var(--color-accent);" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"></path>
                                </svg>
                                <strong><?php esc_html_e('WhatsApp', '3dpieces'); ?></strong>
                            </div>
                            <p style="margin-left: calc(24px + var(--spacing-sm)); color: var(--color-text-secondary); margin-bottom: var(--spacing-sm);">
                                <?php esc_html_e('Scrivimi direttamente per una risposta rapida', '3dpieces'); ?>
                            </p>
                            <a href="https://wa.me/393123456789?text=Ciao,%20vorrei%20informazioni" target="_blank" rel="noopener noreferrer" class="whatsapp-btn" style="width: 100%;">
                                <svg class="icon" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"></path>
                                </svg>
                                <?php esc_html_e('Apri WhatsApp', '3dpieces'); ?>
                            </a>
                        </div>

                        <!-- Business Hours -->
                        <div style="margin-bottom: var(--spacing-md);">
                            <div style="display: flex; align-items: center; gap: var(--spacing-sm); margin-bottom: var(--spacing-xs);">
                                <svg class="icon" style="color: var(--color-accent);" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <polyline points="12 6 12 12 16 14"></polyline>
                                </svg>
                                <strong><?php esc_html_e('Orari', '3dpieces'); ?></strong>
                            </div>
                            <p style="margin-left: calc(24px + var(--spacing-sm)); color: var(--color-text-secondary);">
                                <?php esc_html_e('Lun-Ven: 9:00 - 18:00', '3dpieces'); ?><br>
                                <?php esc_html_e('Risposta entro 24h', '3dpieces'); ?>
                            </p>
                        </div>

                        <!-- Service Area -->
                        <div>
                            <div style="display: flex; align-items: center; gap: var(--spacing-sm); margin-bottom: var(--spacing-xs);">
                                <svg class="icon" style="color: var(--color-accent);" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                    <circle cx="12" cy="10" r="3"></circle>
                                </svg>
                                <strong><?php esc_html_e('Area di Servizio', '3dpieces'); ?></strong>
                            </div>
                            <p style="margin-left: calc(24px + var(--spacing-sm)); color: var(--color-text-secondary);">
                                <?php esc_html_e('Italia (spedizioni in tutta Italia)', '3dpieces'); ?>
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- FAQ or Additional Info Section -->
    <section class="section" style="background-color: var(--color-bg-secondary);">
        <div class="container">
            <h2 class="section-title">
                <?php esc_html_e('Cosa Succede Dopo?', '3dpieces'); ?>
            </h2>

            <div class="grid grid-3" style="margin-top: var(--spacing-lg);">
                <div style="text-align: center;">
                    <div style="width: 60px; height: 60px; background-color: var(--color-accent); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto var(--spacing-sm); font-size: var(--font-size-lg); font-weight: bold; color: var(--color-bg-primary);">
                        1
                    </div>
                    <h3 style="margin-bottom: var(--spacing-xs);">
                        <?php esc_html_e('Contatto Immediato', '3dpieces'); ?>
                    </h3>
                    <p style="color: var(--color-text-secondary);">
                        <?php esc_html_e('Riceverai una risposta entro 24 ore per discutere il tuo progetto', '3dpieces'); ?>
                    </p>
                </div>

                <div style="text-align: center;">
                    <div style="width: 60px; height: 60px; background-color: var(--color-accent); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto var(--spacing-sm); font-size: var(--font-size-lg); font-weight: bold; color: var(--color-bg-primary);">
                        2
                    </div>
                    <h3 style="margin-bottom: var(--spacing-xs);">
                        <?php esc_html_e('Preventivo Gratuito', '3dpieces'); ?>
                    </h3>
                    <p style="color: var(--color-text-secondary);">
                        <?php esc_html_e('Riceverai un preventivo dettagliato e trasparente senza impegno', '3dpieces'); ?>
                    </p>
                </div>

                <div style="text-align: center;">
                    <div style="width: 60px; height: 60px; background-color: var(--color-accent); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto var(--spacing-sm); font-size: var(--font-size-lg); font-weight: bold; color: var(--color-bg-primary);">
                        3
                    </div>
                    <h3 style="margin-bottom: var(--spacing-xs);">
                        <?php esc_html_e('Realizzazione', '3dpieces'); ?>
                    </h3>
                    <p style="color: var(--color-text-secondary);">
                        <?php esc_html_e('Una volta approvato, iniziamo subito a lavorare sul tuo progetto', '3dpieces'); ?>
                    </p>
                </div>
            </div>
        </div>
    </section>

</main>

<?php
get_footer();
