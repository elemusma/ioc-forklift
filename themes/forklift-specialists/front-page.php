<?php

/**

 * Template Name: Home Page

 *

 * @package WordPress

 * @subpackage Otherside Consulting

 * @since Otherside Consulting 1.0

 */


get_header(); ?>

<div class="quote-section section-padding">
  <div class="fullscreen-container">
   <div class="">
     <div class="col-lg-4 col-sm-4 col-xs-12">
       <div class="text-quote">
         <h3><a href="<?php echo home_url(); ?>/services">Request Service</a></h3>
       </div>
     </div>
     <div class="col-lg-4 col-sm-4 col-xs-12">
       <div class="text-quote">
         <h3><a href="<?php echo home_url(); ?>/inventory">Search Inventory</a></h3>
       </div>
     </div>
     <div class="col-lg-4 col-sm-4 col-xs-12">
       <div class="text-quote">
         <h3><a href="<?php echo home_url(); ?>/rentals">Request Rental</a></h3>
       </div>
     </div>
   </div>
  </div>
</div>


<div class="photo-section">
  <div class="container-fluid">
    <div class="">
      <div class="home_photo col-md-4 col-sm-8 col-xs-12">
        <div>
          <img src="<?php echo home_url(); ?>/wp-content/uploads/2019/04/postion_1.jpg">
        </div>
      </div>
      <div class="home_photo col-md-4 col-sm-4 col-xs-12">
        <div>
          <img src="<?php echo home_url(); ?>/wp-content/uploads/2019/04/position_2.jpg">
        </div>
      </div>
      <div class="home_photo col-md-4 col-sm-4 col-xs-12">
        <div>
          <img src="<?php echo home_url(); ?>/wp-content/uploads/2019/05/position_3.1.jpg">
        </div>
      </div>
    </div>
  </div>
</div>

<!--/.about-section-->
<!--/.service -section-->
<section class="flower_bg">
  <div class="container">

    <div class="row h-100">
      <div class="my-auto col-sm-12 service_intro">
        <p>Forklift Specialists, Inc. is a family owned business that has been serving the local community for 32 years. We offer fast response time, especially if your forklift is broken down. When you call us you will always get someone to talk to, not an automated phone system. We will service your equipment with integrity and a true desire to always do our best. Our staff is a talented group of hard-working people and we are qualified to repair most brands of forklifts.</p>
      </div>
    </div>

    <div class="service_section">
      <div class="container">
          <div class="home_photo col-md-4 col-sm-8 col-xs-12">
            <div class="serivce_mark_container">
              <img class="checkmark" src="<?php echo home_url(); ?>/wp-content/uploads/2019/03/check_button.png">
              <h2>Fast Service</h2>
            </div>
          </div>
          <div class="home_photo col-md-4 col-sm-4 col-xs-12">
            <div class="serivce_mark_container">
              <img class="checkmark" src="<?php echo home_url(); ?>/wp-content/uploads/2019/03/check_button.png">
              <h2>Personalized Support</h2>
            </div>
          </div>
          <div class="home_photo col-md-4 col-sm-4 col-xs-12">
            <div class="serivce_mark_container">
              <img class="checkmark" src="<?php echo home_url(); ?>/wp-content/uploads/2019/03/check_button.png">
              <h2>Family Owned</h2>
            </div>
          </div>
          <h2 style="color: #FF0000;">We take Trade-ins &amp; Buy Used Forklifts</h2>
      </div>
    </div>

  </div>
</section>

        <div class="clearfix"></div>
        <!--/.instagram-->
        <section class="container inventory_container col-sm-12">
            <h2>View our Inventory</h2>
            <div><a href="<?php echo home_url(); ?>/inventory">
              <?php
                echo do_shortcode('[stack_slider id="58"]	');
              ?></a>
            </div>
        </section>



<?php get_footer();
