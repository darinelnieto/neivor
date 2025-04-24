<?php
/**
 * 
 * Header.
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title><?php wp_title('|', true, 'right'); ?> <?php bloginfo('name'); ?></title>
  <meta name="viewport" content="width=device-width">
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
  <?php wp_head(); ?>
  <script>
    const _dittoURI_ = "<?= get_template_directory_uri() ?>",
          _dittoURL_ = "<?= get_site_url() ?>";
  </script>
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=AW-352383489"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'AW-352383489');
  </script>
  <!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '197329169765507');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=197329169765507&ev=PageView&noscript=1"
/></noscript>
</head>

<body <?php body_class(); ?>>
<div id="page"> <!-- +Page container -->
  <header id="header-wrapper">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-2">
          <?= get_custom_logo(); ?>
          <div class="close-submenu-movil"></div>
        </div>
        <div class="col-10">
          <div class="bar-menu">
            <span class="top"></span>
            <span class="center"></span>
            <span class="bottom"></span>
          </div>
          <div class="nav-contain">
            <?php get_template_part('partials/globals/nav-menu'); ?>
          </div>
        </div>
      </div>
    </div>
  </header>
