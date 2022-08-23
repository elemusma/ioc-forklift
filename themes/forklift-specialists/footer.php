<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>


		<!--/.footer area-->

    <div class="text-center bottom_logo"><img src="/wp-content/uploads/2019/03/forklift_logo.png" alt=""/>
    <h3 class="head_title">Service with Integrity<br><span>Since 1987</span></h3></div>

<div class="clearfix"></div>
<section class="footer-area">
  <div class="container">
    <?php wp_nav_menu( array('menu' => 'primary', 'container_class' => 'text-center', 'container_id' => 'forklift_menu', 'items_wrap' => '<ul class="">%3$s</ul>' )); ?>

    <p class="text-center">2975 South Wyandot Street, Englewood, CO 80110 • 303.934.2111</p>
    <p class="text-center"><strong>Forkliftspecialists.com</strong></p>
	   <p class="text-center" style="color: #fff;"><strong>Proudly Powered by<a href="http://insideoutfocus.com"> Inside Out Creative</a></strong></p>
  </div>
  <!--/.contianer-->
</section>
<!--/.footer area-->

<?php wp_footer(); ?>

</body>
</html>
