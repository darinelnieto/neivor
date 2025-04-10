   
<?php
/**
 * 
 * Partial Name: how-to-hire-it
 * 
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
$enable_form = get_field('enable_form_hs');
$form = get_field('script_form');
if($enable_form === true):
?>
<section class="hsform-partial-8190bc">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <?= $form; ?>
      </div>
    </div>
  </div>  
</section>
<?php endif; ?>