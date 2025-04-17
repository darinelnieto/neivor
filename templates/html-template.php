<?php
/**
 * 
 * Template Name: html
 * 
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
get_header();
?>
	<main id="html-template-6c9394">
		<section class="htmlform-8190bc">
		<?php get_template_part('partials/globals/html'); ?>
		<?phpif($enable_form === true):?>
			<?= $form; ?>
		<?php endif; ?> 
		</section>
	</main>
<?php get_footer(); ?> 
