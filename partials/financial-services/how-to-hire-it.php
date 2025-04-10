<?php
/**
 * 
 * Partial Name: how-to-hire-it
 * 
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

$cta = get_field('request_advice', 'option');

// Obtener la URL actual
$current_url = home_url( add_query_arg( [], $GLOBALS['wp']->request ) );

// Definir redirección según URL actual
$redirect_url = '#'; // Valor por defecto

if ( strpos($current_url, 'agenda-demo-condominios') !== false ) {
    $redirect_url = 'https://share.hsforms.com/1cl_nbLyjT-iy2QYDL6OASAcezkj';
} elseif ( strpos($current_url, 'agenda-demo-rentas') !== false ) {
    $redirect_url = 'https://share.hsforms.com/1h8uV6nSaQyqhw-WHmYOcxwcezkj';
}
?>

<section class="how-to-hire-it-partial-117e5e">
    <div class="container">
        <div class="row">
            <div class="col-12 card-purple">
                <h2><?= get_field('how_to_hire_it_title', 'option'); ?></h2>
                <p><?= get_field('how_to_hire_it_description', 'option'); ?></p>
                <a href="<?= $redirect_url; ?>" target="<?= $cta['target']; ?>">
                    <span><?= $cta['title']; ?></span>
                </a>
            </div>
        </div>
    </div>
</section>
