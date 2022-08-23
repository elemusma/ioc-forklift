<?php

/**

 * Template Name: Inventory Page

 *

 * @package WordPress

 * @subpackage Otherside Consulting

 * @since Otherside Consulting 1.0

 */

get_header(); ?>

<style>
  .row-forklifts .col:first-child:after {
    top: calc(50% - 3rem);
    left: -1px;
    border-right: 0;
    border-left: 3rem solid #fefefe;
    border-top: 3rem solid transparent;
    border-bottom: 3rem solid transparent;
    content: "";
    display: block;
    position: absolute;
    width: 0;
    height: 0;
}
</style>

<?php
if(have_rows('inventory')): 
  $inventoryCounter = 0;
echo '<section class="pt-5 pb-5" style="overflow:hidden;">';
echo '<div class="container">';
  while(have_rows('inventory')): the_row();
  $title = get_sub_field('title');
  $subtitle = get_sub_field('subtitle');
  $content = get_sub_field('content');
  $gallery = get_sub_field('gallery');
  $inventoryCounter++;

  if(is_user_logged_in()){
    echo $inventoryCounter . '<br>';
  }

echo '<div class="row row-forklifts">';
echo '<div class="col-md-3">';
echo '<h2 class="inventory_title">' . $title . '</h2>';
echo '<p class="inventory_category">' . $subtitle . '</p>';
echo '<div style="font-size: 12px;font-family: \'Poppins\',sans-serif;font-weight: 800;">';
echo $content;
echo '</div>';
echo '</div>';

if( $gallery ): 
echo '<div class="col-md-9" style="padding:50px;">';
echo '<div class="row">';
foreach( $gallery as $image ):
  echo '<div class="col-lg-4 col-md-6 col" style="padding:0;position:relative;">';
  // echo '<div class="position-relative">';
  echo '<a href="' . wp_get_attachment_image_url($image['id'], 'full') . '" data-lightbox="image-set' . $inventoryCounter . '">';
  echo wp_get_attachment_image($image['id'], 'full','',['class'=>'w-25 img-portfolio','style'=>'height:300px;object-fit:cover;'] );
  echo '</a>';
  // echo '</div>';
  echo '</div>';
endforeach; 
echo '</div>';
  echo '</div>';
endif;

echo '</div>';
endwhile;
echo '</div>';
echo '</section>';
endif;


?>
<!-- <section class="" style="padding-top: 15px;">
<div class="container">
	<div class="row">
		<div class="col-md-12 text-center">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
the_content();
endwhile; else: ?>
<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>
		</div>
	</div>
	</div>
</section> -->

<!-- <div class="row">
  <div class="text-center col-xs-12">
    <h2>We take Trade-ins &amp; purchase used forklifts. Call for a value on your forklift.</h2>
    <button onclick="window.location.href='tel:3039342111'" class='contact_button' >Call Now</button>
  </div>
</div> -->

<section class="inventory_section">
  <div class="container">

	 
	  
	 <!-- <div class="row inventory_row">

      <div class="col-sm-6">
        <div  class="row">
          <div class="col-sm-6 inventory_info">
            <h2 class="inventory_title">HY246</h2>
            <p class="inventory_category" style="">Pneumatic Forklift</p>
            <ul class="inventory_list">
              <li><strong>Make:</strong> Hyster</li>
              <li><strong>Model:</strong>  H30XM</li>
              <li><strong>Serial Number:</strong> E001H129768</li>
              <li><strong>Year:</strong> 2004</li>
              <li><strong>Capacity:</strong> 3,000 lbs.</li>
              <li><strong>Fuel:</strong> Liquid Propane</li>
              <li><strong>Tires:</strong> Pneumatic</li>
              <li><strong>Functions:</strong> 4-Function (with side-shift &amp; fork positioner)</li>
              <li><strong>Lift Height:</strong>  83” (short mast)</li>
              <li><strong>Misc.:</strong> Monotrol foot pedal (easily switch between forward and reverse with your foot)</li>
              <li><strong>Price:</strong> $12,500</li>
            </ul>
          </div>
          <div class="col-sm-6">
            <div class="inventory_img_right">
              <a href="/wp-content/uploads/2021/09/September-2021-hy246-1.jpg" target="_blank"><img src="/wp-content/uploads/2021/09/September-2021-hy246-1.jpg"></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-6">
        <div  class="row">
          <div class="col-sm-6">
            <div class="">
              <a href="/wp-content/uploads/2019/06/HY246-2.jpg" target="_blank"><img src="/wp-content/uploads/2019/06/HY246-2.jpg"></a>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="">
              <a href="/wp-content/uploads/2019/06/HY246-3.jpg" target="_blank"><img src="/wp-content/uploads/2019/06/HY246-3.jpg"></a>
            </div>
          </div>
        </div>
      </div>

    </div> -->

<!--     <div class="row inventory_row">

       <div class="col-sm-6">
         <div  class="row">
           <div class="col-sm-6 inventory_info">
             <h2 class="inventory_title">DA39</h2>
             <p class="inventory_category" style="color: red;">Pneumatic Forklift</p>
             <ul class="inventory_list">
               <li><strong>Make:</strong> Daewoo</li>
               <li><strong>Model:</strong>  G25P-3</li>
               <li><strong>Serial Number:</strong> KQ-00836</li>
               <li><strong>Hours:</strong> ONLY 5999</li>
               <li><strong>Capacity:</strong> 5,000 lbs.</li>
               <li><strong>Fuel:</strong> Propane</li>
               <li><strong>Tires:</strong> Solid Pneumatic</li>
               <li><strong>Functions:</strong> side shift</li>
               <li><strong>Lift Height:</strong>   189" triple</li>
               <li><strong>Misc.:</strong> GM 3.0 engine</li>
               <li><strong>Price:</strong> $16,000.00</li>
             </ul>
           </div>
           <div class="col-sm-6">
             <div class="inventory_img_right">
               <a href="/wp-content/uploads/2019/09/DA39-1.png"><img src="/wp-content/uploads/2019/09/DA39-1.png"></a>
             </div>
           </div>
         </div>
       </div>

       <div class="col-sm-6">
         <div  class="row">
           <div class="col-sm-6">
             <div class="">
               <a href=""></a>
             </div>
           </div>
           <div class="col-sm-6">
             <div class="">
               <a href=""></a>
             </div>
           </div>
         </div>
       </div>

     </div> -->

    <!-- New Row -->

<!--     <div class="row inventory_row">

      <div class="col-sm-6">
        <div  class="row">
          <div class="col-sm-6 inventory_info">
            <h2 class="inventory_title">NI16</h2>
            <p class="inventory_category">Cushion Forklift</p>
            <ul class="inventory_list">
              <li><strong>Make:</strong> Nissan</li>
              <li><strong>Model:</strong> KCPH02A20PV</li>
              <li><strong>Serial Number:</strong> KCPH02P903754</li>
              <li><strong>Year:</strong> 1995</li>
              <li><strong>Hours:</strong> 2262</li>
              <li><strong>Capacity:</strong> 4,000 lbs.</li>
              <li><strong>Fuel:</strong> Liquid Propane</li>
              <li><strong>Tires:</strong> Cushion</li>
              <li><strong>Lift Height:</strong>  82"</li>
              <li><strong>Price:</strong> $6,500.00</li>
            </ul>
          </div>
          <div class="col-sm-6">
            <div class="inventory_img_right">
              <a href="/wp-content/uploads/2019/05/NI16.jpg" target="_blank"><img src="/wp-content/uploads/2019/05/NI16.jpg"></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-6">
        <div  class="row">
          <div class="col-sm-6">
            <div class="">
              <a href="/wp-content/uploads/2019/05/NI16-2.jpg" target="_blank"><img src="/wp-content/uploads/2019/05/NI16-2.jpg"></a>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="">
              <a href="/wp-content/uploads/2019/05/NI16-3.jpg" target="_blank"><img src="/wp-content/uploads/2019/05/NI16-3.jpg"></a>
            </div>
          </div>
        </div>
      </div>

    </div> -->

    <!-- New Row -->

<!--     <div class="row inventory_row">

      <div class="col-sm-6">
        <div  class="row">
          <div class="col-sm-6 inventory_info">
            <h2 class="inventory_title">MI23</h2>
            <p class="inventory_category">Cushion Forklift</p>
            <ul class="inventory_list">
              <li><strong>Make:</strong> Mitsubishi</li>
              <li><strong>Model:</strong> FGC20K</li>
              <li><strong>Serial Number:</strong> AF82D00532</li>
              <li><strong>Year:</strong> 2002</li>
              <li><strong>Hours:</strong> 11,057</li>
              <li><strong>Capacity:</strong> 4,000 lbs.</li>
              <li><strong>Fuel:</strong> Liquid Propane</li>
              <li><strong>Tires:</strong> Cushion</li>
              <li><strong>Functions:</strong> 3-Function with side-shift</li>
              <li><strong>Lift Height:</strong>  80" (short mast</li>
              <li><strong>Misc.:</strong> smokes but runs well</li>
              <li><strong>Price:</strong> $5,000.00</li>
            </ul>
          </div>
          <div class="col-sm-6">
            <div class="inventory_img_right">
              <a href="/wp-content/uploads/2019/05/MI23.jpg" target="_blank"><img src="/wp-content/uploads/2019/05/MI23.jpg"></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-6">
        <div  class="row">
          <div class="col-sm-6">
            <div class="">
              <a href="/wp-content/uploads/2019/05/MI23-2.jpg" target="_blank"><img src="/wp-content/uploads/2019/05/MI23-2.jpg"></a>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="">
              <a href="/wp-content/uploads/2019/05/MI23-3.jpg" target="_blank"><img src="/wp-content/uploads/2019/05/MI23-3.jpg"></a>
            </div>
          </div>
        </div>
      </div>

    </div> -->

    <!-- New Row -->

<!--     <div class="row inventory_row">

      <div class="col-sm-6">
        <div  class="row">
          <div class="col-sm-6 inventory_info">
            <h2 class="inventory_title">HY231</h2>
            <p class="inventory_category">Cushion Forklift</p>
            <ul class="inventory_list">
              <li><strong>Make:</strong> Hyster</li>
              <li><strong>Model:</strong> S50FT</li>
              <li><strong>Serial Number:</strong> F187V07184D</li>
              <li><strong>Hours:</strong> 4,474</li>
              <li><strong>Capacity:</strong> 5,000 lbs.</li>
              <li><strong>Fuel:</strong> Liquid Propane</li>
              <li><strong>Tires:</strong> Cushion</li>
              <li><strong>Functions:</strong> 3- Function (with side-shift)</li>
              <li><strong>Lift Height:</strong> 189"</li>
              <li><strong>Misc.:</strong> Deluxe Seat, Finger-tip controls, Front and rear work lamps</li>
              <li><strong>Price:</strong> $16,000.00</li>
            </ul>
          </div>
          <div class="col-sm-6">
            <div class="inventory_img_right">
              <a href="/wp-content/uploads/2019/04/hy231.jpg" target="_blank"><img src="/wp-content/uploads/2019/04/hy231.jpg"></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-6">
        <div  class="row">
          <div class="col-sm-6">
            <div class="">
              <a href="/wp-content/uploads/2019/06/HY231-2.jpg" target="_blank"><img src="/wp-content/uploads/2019/06/HY231-2.jpg"></a>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="">
              <a href="/wp-content/uploads/2019/06/HY231-3.jpg" target="_blank"><img src="/wp-content/uploads/2019/06/HY231-3.jpg"></a>
            </div>
          </div>
        </div>
      </div>

    </div> -->

    <!-- New Row -->

<!--     <div class="row inventory_row">

      <div class="col-sm-6">
        <div  class="row">
          <div class="col-sm-6 inventory_info">
            <h2 class="inventory_title">CL82</h2>
            <p class="inventory_category">Cushion Forklift</p>
            <ul class="inventory_list">
              <li><strong>Make:</strong> Clark</li>
              <li><strong>Model:</strong> C25CL</li>
              <li><strong>Serial Number:</strong> C232L-0933-9790KF </li>
              <li><strong>Year:</strong> 2012</li>
              <li><strong>Hours:</strong> 2400</li>
              <li><strong>Capacity:</strong> 5,000 lbs.</li>
              <li><strong>Fuel:</strong> Liquid Propane</li>
              <li><strong>Tires:</strong> Cushion</li>
              <li><strong>Functions:</strong> 3- Function (with side-shift)</li>
              <li><strong>Lift Height:</strong> 189” (Triple Mast)</li>
              <li><strong>Price:</strong> $16,000.00</li>
            </ul>
          </div>
          <div class="col-sm-6">
            <div class="inventory_img_right">
              <a href="/wp-content/uploads/2019/06/CL82.jpg" target="_blank"><img src="/wp-content/uploads/2019/06/CL82.jpg"></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-6">
        <div  class="row">
          <div class="col-sm-6">
            <div class="">
              <a href="/wp-content/uploads/2019/06/CL82-2.jpg" target="_blank"><img src="/wp-content/uploads/2019/06/CL82-2.jpg"></a>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="">
              <a href="/wp-content/uploads/2019/06/CL82-3.jpg" target="_blank"><img src="/wp-content/uploads/2019/06/CL82-3.jpg"></a>
            </div>
          </div>
        </div>
      </div>

    </div> -->

    <!-- Start of New Row -->
    <!-- <div class="row inventory_row">

      <div class="col-sm-6">
        <div  class="row">
          <div class="col-sm-6 inventory_info">
            <h2 class="inventory_title">HY236</h2>
            <p class="inventory_category">Cushion Forklift</p>
            <ul class="inventory_list">
              <li><strong>Make:</strong> Hyster</li>
              <li><strong>Model:</strong> S50FT</li>
              <li><strong>Serial Number:</strong> F187V23234L</li>
              <li><strong>Year:</strong> 2013</li>
              <li><strong>Hours:</strong> 3066</li>
              <li><strong>Capacity:</strong> 5,000 lbs.</li>
              <li><strong>Fuel:</strong> Liquid Propane</li>
              <li><strong>Tires:</strong> Cushion</li>
              <li><strong>Functions:</strong> 3- Function (with side-shift)</li>
              <li><strong>Lift Height:</strong> 189” (Triple Mast)</li>
              <li><strong>Misc.:</strong>Deluxe seat, Front and rear work lamps</li>
              <li><strong>Price:</strong> $17,500.00</li>
            </ul>
          </div>
          <div class="col-sm-6">
            <div class="inventory_img_right">
				<a href="/wp-content/uploads/2020/06/HY236-1.jpg" target="_blank"><img src="/wp-content/uploads/2020/06/HY236-1.jpg"></a>
            </div>
          </div>
        </div>
      </div>
		
		      <div class="col-sm-6">
        <div  class="row">
          <div class="col-sm-6">
            <div class="">
              <a href="/wp-content/uploads/2020/06/HY236-2.jpg" target="_blank"><img src="/wp-content/uploads/2020/06/HY236-2.jpg"></a>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="">
            <a href="/wp-content/uploads/2020/06/HY236-3.jpg" target="_blank"><img src="/wp-content/uploads/2020/06/HY236-3.jpg"></a>
            </div>
          </div>
        </div>
      </div>
    </div> -->

    <!-- End of New Row -->

     <!-- Start of New Row -->
<!--      <div class="row inventory_row">

<div class="col-sm-6">
  <div  class="row">
    <div class="col-sm-6 inventory_info">
      <h2 class="inventory_title">MI40</h2>
      <p class="inventory_category">Cushion Forklift</p>
      <ul class="inventory_list">
        <li><strong>Make:</strong> Mitsubishi</li>
        <li><strong>Model:</strong> FGC15</li>
        <li><strong>Year:</strong> 2000</li>
        <li><strong>Capacity:</strong> 3,000 lbs.</li>
        <li><strong>Fuel:</strong> Liquid Propane</li>
        <li><strong>Tires:</strong> Cushion</li>
        <li><strong>Functions:</strong> 3-function with side-shift</li>
        <li><strong>Lift Height:</strong> 130" triple mast</li>
        <li><strong>Price:</strong> $7,000.00</li>
      </ul>
    </div>
    <div class="col-sm-6">
      <div class="inventory_img_right">
          <a href="/wp-content/uploads/2021/09/September-2021-MI40-1.jpg" target="_blank"><img src="/wp-content/uploads/2021/09/September-2021-MI40-1.jpg"></a>
      </div>
    </div>
  </div>
</div>
  
        <div class="col-sm-6">
  <div  class="row">
    <div class="col-sm-6">
      <div class="">
        <a href="/wp-content/uploads/2021/09/September-2021-MI40-2.jpg" target="_blank"><img src="/wp-content/uploads/2021/09/September-2021-MI40-2.jpg"></a>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="">
      <a href="/wp-content/uploads/2021/09/September-2021-MI40-3.jpg" target="_blank"><img src="/wp-content/uploads/2021/09/September-2021-MI40-3.jpg"></a>
      </div>
    </div>
  </div>
</div>
</div> -->

<!-- End of New Row -->

     <!-- Start of New Row -->
<!--      <div class="row inventory_row">
<div class="col-sm-6">
  <div  class="row">
    <div class="col-sm-6 inventory_info">
      <h2 class="inventory_title">DA44</h2>
      <p class="inventory_category">Cushion Forklift</p>
      <ul class="inventory_list">
        <li><strong>Make:</strong> Daewoo</li>
        <li><strong>Model:</strong> GC20C-2</li>
        <li><strong>Serial Number:</strong> CZ-00243</li>
        <li><strong>Year:</strong> 2001</li>
        <li><strong>Hours:</strong> 1406</li>
        <li><strong>Capacity:</strong> 4,000 lbs.</li>
        <li><strong>Fuel:</strong> Liquid Propane</li>
        <li><strong>Tires:</strong> Cushion</li>
        <li><strong>Functions:</strong> 3-function with side-shift</li>
        <li><strong>Lift Height:</strong> 118" double mast</li>
        <li><strong>Misc.:</strong> work lamps, new tires</li>
        <li><strong>Price:</strong> $11,500.00</li>
      </ul>
    </div>
    <div class="col-sm-6">
      <div class="inventory_img_right">
          <a href="/wp-content/uploads/2021/09/September-2021-DA44-1.jpg" target="_blank"><img src="/wp-content/uploads/2021/09/September-2021-DA44-1.jpg"></a>
      </div>
    </div>
  </div>
</div>
  
        <div class="col-sm-6">
  <div  class="row">
    <div class="col-sm-6">
      <div class="">
        <a href="/wp-content/uploads/2021/09/September-2021-DA44-2.jpg" target="_blank"><img src="/wp-content/uploads/2021/09/September-2021-DA44-2.jpg"></a>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="">
      <a href="/wp-content/uploads/2021/09/September-2021-DA44-3.jpg" target="_blank"><img src="/wp-content/uploads/2021/09/September-2021-DA44-3.jpg"></a>
      </div>
    </div>
  </div>
</div>
</div> -->

<!-- End of New Row -->

     <!-- Start of New Row -->
     <!-- <div class="row inventory_row">

<div class="col-sm-6">
  <div  class="row">
    <div class="col-sm-6 inventory_info">
      <h2 class="inventory_title">HY250</h2>
      <p class="inventory_category">Cushion Forklift</p>
      <ul class="inventory_list">
        <li><strong>Make:</strong> Hyster</li>
        <li><strong>Model:</strong> S50FT</li>
        <li><strong>Serial Number:</strong> F187V06741D</li>
        <li><strong>Year:</strong> 2006</li>
        <li><strong>Hours:</strong> 4058</li>
        <li><strong>Capacity:</strong> 5,000 lbs.</li>
        <li><strong>Fuel:</strong> Liquid Propane</li>
        <li><strong>Tires:</strong> Cushion</li>
        <li><strong>Functions:</strong> 3-function with side-shift</li>
        <li><strong>Lift Height:</strong> 200" triple mast</li>
        <li><strong>Misc.:</strong> work lamps</li>
        <li><strong>Price:</strong> $15,500.00</li>
      </ul>
    </div>
    <div class="col-sm-6">
      <div class="inventory_img_right">
          <a href="/wp-content/uploads/2021/09/September-2021-HY250-1.jpg" target="_blank"><img src="/wp-content/uploads/2021/09/September-2021-HY250-1.jpg"></a>
      </div>
    </div>
  </div>
</div>
  
        <div class="col-sm-6">
  <div  class="row">
    <div class="col-sm-6">
      <div class="">
        <a href="/wp-content/uploads/2021/09/September-2021-HY250-2.jpg" target="_blank"><img src="/wp-content/uploads/2021/09/September-2021-HY250-2.jpg"></a>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="">
      <a href="/wp-content/uploads/2021/09/September-2021-HY250-3.jpg" target="_blank"><img src="/wp-content/uploads/2021/09/September-2021-HY250-3.jpg"></a>
      </div>
    </div>
  </div>
</div>
</div> -->

<!-- End of New Row -->

<!-- Start of New Row -->
     <!-- <div class="row inventory_row">

<div class="col-sm-6">
  <div  class="row">
    <div class="col-sm-6 inventory_info">
      <h2 class="inventory_title">MI38</h2>
      <p class="inventory_category">Pneumatic Forklift</p>
      <ul class="inventory_list">
        <li><strong>Make:</strong> Mitsubishi</li>
        <li><strong>Model:</strong> FG25N</li>
        <li><strong>Serial Number:</strong> AF17D01641</li>
        <li><strong>Year:</strong> 2004</li>
        <li><strong>Capacity:</strong> 5,000 lbs.</li>
        <li><strong>Fuel:</strong> Liquid Propane</li>
        <li><strong>Tires:</strong> Solid pneumatic non-marking</li>
        <li><strong>Functions:</strong> 3-function with side-shift</li>
        <li><strong>Lift Height:</strong> 189" triple mast</li>
        <li><strong>Misc.:</strong> work lamps, backup alarm, new transmission</li>
        <li><strong>Price:</strong> $19,500.00</li>
      </ul>
    </div>
    <div class="col-sm-6">
      <div class="inventory_img_right">
          <a href="/wp-content/uploads/2021/09/September-2021-MI38-1.jpg" target="_blank"><img src="/wp-content/uploads/2021/09/September-2021-MI38-1.jpg"></a>
      </div>
    </div>
  </div>
</div>
  
        <div class="col-sm-6">
  <div  class="row">
    <div class="col-sm-6">
      <div class="">
        <a href="/wp-content/uploads/2021/09/September-2021-MI38-2.jpg" target="_blank"><img src="/wp-content/uploads/2021/09/September-2021-MI38-2.jpg"></a>
      </div>
    </div>
  </div>
</div>
</div> -->

<!-- End of New Row -->

<!-- Start of New Row -->
     <!-- <div class="row inventory_row">

<div class="col-sm-6">
  <div  class="row">
    <div class="col-sm-6 inventory_info">
      <h2 class="inventory_title">KO40</h2>
      <p class="inventory_category">Pneumatic Forklift</p>
      <ul class="inventory_list">
        <li><strong>Make:</strong> Komatsu</li>
        <li><strong>Model:</strong> FG25T-14</li>
        <li><strong>Serial Number:</strong> 580769A</li>
        <li><strong>Year:</strong> 2004</li>
        <li><strong>Hours:</strong> 6954</li>
        <li><strong>Capacity:</strong> 5,000 lbs.</li>
        <li><strong>Fuel:</strong> Liquid Propane</li>
        <li><strong>Tires:</strong> Pneumatic</li>
        <li><strong>Functions:</strong> 3-function with side-shift</li>
        <li><strong>Lift Height:</strong> 188" triple mast</li>
        <li><strong>Misc.:</strong> work lamps, strobe light</li>
        <li><strong>Price:</strong> $16,500.00</li>
      </ul>
    </div>
    <div class="col-sm-6">
      <div class="inventory_img_right">
          <a href="/wp-content/uploads/2021/09/September-2021-KO40-1.jpg" target="_blank"><img src="/wp-content/uploads/2021/09/September-2021-KO40-1.jpg"></a>
      </div>
    </div>
  </div>
</div>
  
        <div class="col-sm-6">
  <div  class="row">
    <div class="col-sm-6">
      <div class="">
        <a href="/wp-content/uploads/2021/09/September-2021-KO40-2.jpg" target="_blank"><img src="/wp-content/uploads/2021/09/September-2021-KO40-2.jpg"></a>
      </div>
    </div>
  </div>
</div>
</div> -->

<!-- End of New Row -->

<!--     <div class="row inventory_row">

      <div class="col-sm-6">
        <div  class="row">
          <div class="col-sm-6 inventory_info">
            <h2 class="inventory_title">KO35</h2>
            <p class="inventory_category">Cushion Forklift</p>
            <ul class="inventory_list">
              <li><strong>Make:</strong> Komatsu</li>
              <li><strong>Model:</strong> FG25ST-14</li>
              <li><strong>Serial Number:</strong> 592506A</li>
              <li><strong>Year:</strong> 2007</li>
              <li><strong>Hours:</strong> 5628</li>
              <li><strong>Capacity:</strong> 5,000 lbs.</li>
              <li><strong>Fuel:</strong> Liquid Propane</li>
              <li><strong>Tires:</strong> Cushion</li>
              <li><strong>Functions:</strong> 3- Function</li>
              <li><strong>Lift Height:</strong> 188” (Triple Mast)</li>
              <li><strong>Misc.:</strong>New paint, Work lamps</li>
              <li><strong>Price:</strong> $15,000.00</li>
            </ul>
          </div>
          <div class="col-sm-6">
            <div class="inventory_img_right">
              <a href="/wp-content/uploads/2019/04/ko35.jpg" target="_blank"><img src="/wp-content/uploads/2019/04/ko35.jpg"></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-6">
        <div  class="row">
          <div class="col-sm-6">
            <div class="">
              <a href="/wp-content/uploads/2019/06/KO35-2.jpg" target="_blank"><img src="/wp-content/uploads/2019/06/KO35-2.jpg"></a>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="">
            <a href="/wp-content/uploads/2019/06/KO35-3.jpg" target="_blank"><img src="/wp-content/uploads/2019/06/KO35-3.jpg"></a>
            </div>
          </div>
        </div>
      </div>

    </div> -->
	  
<!-- 	  <div class="row inventory_row">

      <div class="col-sm-6">
        <div  class="row">
          <div class="col-sm-6 inventory_info">
            <h2 class="inventory_title">NI35</h2>
            <p class="inventory_category" style="color: red;">Pneumatic Forklift</p>
            <ul class="inventory_list">
              <li><strong>Make:</strong> Nissan</li>
              <li><strong>Model:</strong> KPH01A15V</li>
              <li><strong>Serial Number:</strong> KPH01-900755</li>
              <li><strong>Year:</strong> 2003</li>
              <li><strong>Hours:</strong> 3010</li>
              <li><strong>Capacity:</strong> 3,000 lbs.</li>
              <li><strong>Fuel:</strong> Liquid Propane</li>
              <li><strong>Tires:</strong> Solid Pneumatic</li>
              <li><strong>Functions:</strong> 3-function (with side shift)</li>
              <li><strong>Lift Height:</strong>  188”</li>
              <li><strong>Misc.:</strong> work lamps</li>
              <li><strong>Price:</strong> $9,750</li>
            </ul>
          </div>
          <div class="col-sm-6">
            <div class="inventory_img_right">
              <a href="/wp-content/uploads/2020/10/Forklift-Specialist-Inventory-NI35-1.jpg" target="_blank"><img src="/wp-content/uploads/2020/10/Forklift-Specialist-Inventory-NI35-1.jpg"></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-6">
        <div  class="row">
          <div class="col-sm-6">
            <div class="">
              <a href="/wp-content/uploads/2020/10/Forklift-Specialist-Inventory-NI35-2.jpg" target="_blank"><img src="/wp-content/uploads/2020/10/Forklift-Specialist-Inventory-NI35-2.jpg"></a>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="">
              <a href="/wp-content/uploads/2020/10/Forklift-Specialist-Inventory-NI35-3.jpg" target="_blank"><img src="/wp-content/uploads/2020/10/Forklift-Specialist-Inventory-NI35-3.jpg"></a>
            </div>
          </div>
        </div>
      </div>

    </div> -->

<!--     <div class="row inventory_row">

      <div class="col-sm-6">
        <div  class="row">
          <div class="col-sm-6 inventory_info">
            <h2 class="inventory_title">HY247</h2>
            <p class="inventory_category">Cushion Forklift</p>
            <ul class="inventory_list">
              <li><strong>Make:</strong> Hyster</li>
              <li><strong>Model:</strong> S50FT</li>
              <li><strong>Serial Number:</strong> F187V08096D</li>
              <li><strong>Hours:</strong> 8,999</li>
              <li><strong>Capacity:</strong> 5,000 lbs.</li>
              <li><strong>Fuel:</strong> Liquid Propane</li>
              <li><strong>Tires:</strong> Cushion</li>
              <li><strong>Functions:</strong> 3- Function (with side shift)</li>
              <li><strong>Lift Height:</strong>  240.2” (quad mast)</li>
              <li><strong>Misc.:</strong>Front Work Lamps</li>
              <li><strong>Price:</strong> $14,500.00</li>
            </ul>
          </div>
          <div class="col-sm-6">
            <div class="inventory_img_right">
              <a href="/wp-content/uploads/2019/06/HY247.jpg" target="_blank"><img src="/wp-content/uploads/2019/06/HY247.jpg"></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-6">
        <div  class="row">
          <div class="col-sm-6">
            <div class="">
              <a href="/wp-content/uploads/2019/06/HY247-2.jpg" target="_blank"><img src="/wp-content/uploads/2019/06/HY247-2.jpg"></a>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="">
              <a href="/wp-content/uploads/2019/06/HY247-3.jpg" target="_blank"><img src="/wp-content/uploads/2019/06/HY247-3.jpg"></a>
            </div>
          </div>
        </div>
      </div>

    </div> -->
	  
<!-- 	  <div class="row inventory_row">

      <div class="col-sm-6">
        <div  class="row">
          <div class="col-sm-6 inventory_info">
            <h2 class="inventory_title">CL83</h2>
            <p class="inventory_category">Walkie Straddle Reach</p>
            <ul class="inventory_list">
              <li><strong>Make:</strong> Clark</li>
              <li><strong>Model:</strong> SP20</li>
              <li><strong>Serial Number:</strong> 0241 PM-6550</li>
              <li><strong>Hours:</strong> 15,227</li>
              <li><strong>Capacity:</strong> 1,750 lbs. at Full Height</li>
              <li><strong>Fuel:</strong> 12v Electric</li>
              <li><strong>Functions:</strong> 3- Function (with side shift)</li>
              <li><strong>Lift Height:</strong>  127"</li>
              <li><strong>Misc.:</strong>42.5" ID Outriggers, Non-Adjustable <br>Single Phase 12v Charger</li>
              <li><strong>Price:</strong> $3,750.00</li>
            </ul>
          </div>
          <div class="col-sm-6">
            <div class="inventory_img_right">
              <a href="/wp-content/uploads/2020/01/CL83-1-ClarkLift.jpg" target="_blank"><img src="/wp-content/uploads/2020/01/CL83-1-ClarkLift.jpg" alt="ClarkLift PowerWorker"></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-6">
        <div  class="row">
          <div class="col-sm-6">
            <div class="">
              <a href="/wp-content/uploads/2020/01/CL83-2-ClarkLift.jpg" target="_blank"><img src="/wp-content/uploads/2020/01/CL83-2-ClarkLift.jpg" alt="ClarkLift PowerWorker"></a>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="">
              <a href="/wp-content/uploads/2020/01/CL83-3-ClarkLift.jpg" target="_blank"><img src="/wp-content/uploads/2020/01/CL83-3-ClarkLift.jpg" alt="ClarkLift PowerWorker"></a>
            </div>
          </div>
        </div>
      </div>

    </div> -->
	  
	  <!-- New Row -->

<!--     <div class="row inventory_row" id="YA94">

      <div class="col-sm-6">
        <div  class="row">
          <div class="col-sm-6 inventory_info">
            <h2 class="inventory_title">YA94</h2>
            <p class="inventory_category">Cushion Forklift</p>
            <ul class="inventory_list">
              <li><strong>Make:</strong> Yale</li>
              <li><strong>Model:</strong> GLC035VXNUSV082</li>
              <li><strong>Serial Number:</strong> C809V05506J</li>
              <li><strong>Hours:</strong> 8966</li>
              <li><strong>Capacity:</strong> 3350 lbs.</li>
              <li><strong>Fuel:</strong> Liquid Propane</li>
              <li><strong>Tires:</strong> Cushion</li>
              <li><strong>Functions:</strong> 3-function (with side shift)</li>
              <li><strong>Lift Height:</strong>  127.2"</li>
              <li><strong>Misc.:</strong> fingertip controls</li>
              <li><strong>Price:</strong> $9,500</li>
            </ul>
          </div>
          <div class="col-sm-6">
            <div class="inventory_img_right">
              <a href="/wp-content/uploads/2020/03/Forklift-Specialists-YA94_1.jpg" target="_blank"><img src="/wp-content/uploads/2020/03/Forklift-Specialists-YA94_1.jpg" alt="Forklift Specialists YA94_1"></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-6">
        <div  class="row">
          
          <div class="col-sm-6">
            <div class="">
              <a href="/wp-content/uploads/2020/03/Forklift-Specialists-YA94_3.jpg" target="_blank"><img src="/wp-content/uploads/2020/03/Forklift-Specialists-YA94_3.jpg" alt="Forklift Specialists YA94_3"></a>
            </div>
          </div>
			<div class="col-sm-6">
            <div class="">
              <a href="/wp-content/uploads/2020/03/Forklift-Specialists-YA94_2.jpg" target="_blank"><img src="/wp-content/uploads/2020/03/Forklift-Specialists-YA94_2.jpg" alt="Forklift Specialists YA94_2"></a>
            </div>
          </div>
        </div>
      </div>

    </div> -->

  </div>
</section>


<?php
get_footer();
