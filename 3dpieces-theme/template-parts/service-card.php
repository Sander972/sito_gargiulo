<?php
/**
 * Template Part: Service Card
 *
 * @package 3dpieces
 */

$icon = isset($args['icon']) ? $args['icon'] : 'default';
$title = isset($args['title']) ? $args['title'] : '';
$description = isset($args['description']) ? $args['description'] : '';
$link = isset($args['link']) ? $args['link'] : home_url('/servizi');
?>

<div class="card service-card">
    <?php if ($icon === 'print') : ?>
        <svg class="card-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M12 2L2 7l10 5 10-5-10-5z"></path>
            <path d="M2 17l10 5 10-5"></path>
            <path d="M2 12l10 5 10-5"></path>
        </svg>
    <?php elseif ($icon === 'cad') : ?>
        <svg class="card-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
            <line x1="9" y1="9" x2="15" y2="9"></line>
            <line x1="9" y1="15" x2="15" y2="15"></line>
        </svg>
    <?php elseif ($icon === 'custom') : ?>
        <svg class="card-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <circle cx="12" cy="12" r="3"></circle>
            <path d="M12 1v6m0 6v6M5.6 5.6l4.2 4.2m4.2 4.2l4.2 4.2M1 12h6m6 0h6M5.6 18.4l4.2-4.2m4.2-4.2l4.2-4.2"></path>
        </svg>
    <?php else : ?>
        <svg class="card-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <circle cx="12" cy="12" r="10"></circle>
            <polyline points="12 6 12 12 16 14"></polyline>
        </svg>
    <?php endif; ?>

    <h3 class="card-title">
        <?php echo esc_html($title); ?>
    </h3>

    <p class="card-text">
        <?php echo esc_html($description); ?>
    </p>

    <a href="<?php echo esc_url($link); ?>" class="btn btn-ghost">
        <?php esc_html_e('Scopri di più →', '3dpieces'); ?>
    </a>
</div>
