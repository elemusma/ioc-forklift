<?php

/**

 * Template Name: Services Page

 *

 * @package WordPress

 * @subpackage Otherside Consulting

 * @since Otherside Consulting 1.0

 */

get_header(); ?>

<div class="row">
  <div class="text-center col-xs-12">
    <h2>We are qualified to perform maintenance and repairs on most brands of forklifts</h2>
    <button type="button" class="contact_button" data-toggle="modal" data-target="#exampleModalCenter">
      Email Us For Service
    </button>
  </div>
</div>

<!-- Modal -->

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <!-- <h5 class="modal-title" id="exampleModalLongTitle">You will be contacted within 20 minutes if the request is between 7:30 and 4:30 weekdays.</h5> -->
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php echo do_shortcode( '[ninja_form id=1]	' ); ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- /Modal -->


<section class="about-section">
  <div class="container d-flex">
    <div class=" row justify-content-center align-self-center h-100">
      <div class="col-md-6 col-sm-6 my-auto">
        <div class="about-inner-text-content">
            <h2><span>Scheduled Maintenance (Propane)</span></h2>
           <div class="about-inner">
              <p class="text">During a scheduled maintenance, we change the oil and oil filter.  We check the air filter and transmission filter (change as needed).  We inspect oil levels in the differential, steering box, hydraulic reservoir, brake fluid reservoir, and transmission (adjust as required).  We lube and grease the forklift, which includes jacking up the steer axle to grease and inspect the steering components and wheel bearings. We check the battery, clean and grease the terminals, check the tires and brake performance, steering, hydraulic system, mast, carriage, forks, chains, and cooling system (hoses and cap).  We will also advise on charging, starting, and safety systems. </p>
            </div>
        </div>
      </div>

      <div class="col-md-6 col-sm-12 text-center my-auto">
        <img class="about_img" src="<?php echo home_url(); ?>/wp-content/uploads/2019/04/about_img.jpg">
      </div>

      <div class="clearfix"></div>
    </div>

    <div class=" row justify-content-center align-self-center h-100">

      <div class="col-md-6 col-sm-6 my-auto">
        <img class="about_img" src="<?php echo home_url(); ?>/wp-content/uploads/2019/05/position_6.jpg">
      </div>

      <div class="col-md-6 col-sm-12 my-auto">
        <div class="about-inner-text-content">
            <h2><span>Scheduled Maintenance (Electric)</span></h2>
           <div class="about-inner">
              <p class="text">During scheduled maintenance service, we lube and grease the forklift including the mast, steer axle, linkages and chains, check the transmission, hydraulic and brake fluids, inspect the contact tips and electrical connections, check and water the battery, inspect the motor brushes, drive test and complete a safety inspection.</p>
            </div>
        </div>
      </div>


      <div class="clearfix"></div>
    </div>
  </div>
</section>




<?php
get_footer();
