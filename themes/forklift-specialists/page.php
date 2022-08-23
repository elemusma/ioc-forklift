<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<section class="about-section">
  <div class="fullscreen-container">
    <div class=" row-eq-height">
       <?php
			
				// Start the Loop.
				while ( have_posts() ) : the_post();
					 the_content(); 	

				endwhile;  
				?> 
    </div>
    <!--/.row--> 
  </div>
  <!--/.container--> 
</section><!-- .wrap -->



<?php get_footer();
