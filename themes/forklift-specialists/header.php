<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<!-- Google Font -->
<link href="https://fonts.googleapis.com/css?family=Khand:300,400,500,600,700|Poppins:300,400,500,600,700,800,900" rel="stylesheet">
<!-- Bootstrap css-->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
<!-- animate css-->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.min.css">
<!-- custom menu css-->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/custom-menu.css">
<!-- Style css-->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
<!-- Responsive css-->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/responsive.css">





<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


<!--header-->
<header>

 <div class="container-fluid">
      <div class="col-md-12">
        <nav class="navbar navbar-expand-sm bg-light">

         <h3 class="head_phone"><a href="tel:3039342111">303-934-2111</a></h3>

        </nav>
      </div>
  </div>


</header>
<!--header-->
<!--slider-->
<?php if ( is_front_page() ) { ?>
<div class="row vertical-align slider_row" style="width:100%;">
    <div class="col-xs-12 col-lg-6 text-center">
      <img src="/wp-content/uploads/2019/03/forklift_logo.png" class="slider_img" alt="forklift specialists logo">
      <h3 class="head_title">Service with Integrity<br><span>Since 1987</span></h3>
    </div>
    <div class="col-xs-12 col-lg-6">
      <img class="truck_img" src="/wp-content/uploads/2019/05/van_updated.jpg">
    </div>
</div>
<?php } else { ?>
  <h3 class="head_home"><a href="/">Home</a></h3>
  <div class="row vertical-align slider_row" style="width:100%;">
      <div class="col-xs-12 col-lg-6 text-center">
        <img src="/wp-content/uploads/2019/03/forklift_logo.png" class="slider_img" alt="forklift specialists logo">
        <h3 class="head_title">Service with Integrity<br><span>Since 1987</span></h3>
      </div>
      <div class="col-xs-12 col-lg-6">
        <?php the_post_thumbnail( '', array('class' => 'truck_img'));?>
      </div>
  </div>

  <div class="quote-section section-padding">
  <div class="fullscreen-container">
    <div class="">
      <div class="col-lg-4 col-sm-4 col-xs-12">
        <div class="text-quote">
          <h3><a href="/services">Request Service</a></h3>
        </div>
      </div>
      <div class="col-lg-4 col-sm-4 col-xs-12">
        <div class="text-quote">
          <h3><a href="/inventory">Search Inventory</a></h3>
        </div>
      </div>
      <div class="col-lg-4 col-sm-4 col-xs-12">
        <div class="text-quote">
          <h3><a href="/rentals">Request Rental</a></h3>
        </div>
      </div>
    </div>
  </div>
</div>

	   <?php } ?>
<!--slider-->
