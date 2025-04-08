   
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
?>
<?php
// Obtener la URL actual
$url_actual = "https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

// Definir los scripts según la URL
$scripts = [
    "https://www.neivor.com/agenda-demo-condominios/" => "<script charset='utf-8' type='text/javascript' src='//js.hsforms.net/forms/embed/v2.js'></script>
    <script>
      hbspt.forms.create({
        portalId: '20854675',
        formId: '725fe76c-bca3-4fe8-b2d9-06032fa38048',
        region: 'na1'
      });
    </script>",
    
    "https://www.neivor.com/agenda-demo-rentas/" => "<script charset='utf-8' type='text/javascript' src='//js.hsforms.net/forms/embed/v2.js'></script>
    <script>
      hbspt.forms.create({
        portalId: '20854675',
        formId: '87cb95ea-749a-432a-a1c3-e58799839cc7',
        region: 'na1'
      });
    </script>"
];
?>

<section class="hsform-partial-8190bc">
    <?php if (isset($scripts[$url_actual])) echo '<br/>'; ?>
<div class="container">
        <div class="row">
            <div class="col-12">
<?php
    // Imprimir el script correspondiente si la URL está en la lista
    if (isset($scripts[$url_actual])) {
        echo $scripts[$url_actual];
    }
    ?>
	</div>
	</div>
	</div>
	</section>