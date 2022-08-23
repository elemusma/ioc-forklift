<?php

// Get hashbar option value
function hashbar_wpnb_get_opt($opt_key){
  $options = get_option( 'hashbar_wpnb_opt' );
  if(isset($options[$opt_key])){
      return $options[$opt_key];
  }else{
      return '';
  }
}

function hashbar_wpnb_allporduct_by_cat( $terms = array(), $field = 'slug' ){
  $get_products = get_posts( array(
    'post_type'   => 'product',
    'numberposts' => -1,
    'post_status' => 'publish',
    'tax_query'   => array(
      array(
          'taxonomy' => 'product_cat',
          'field'    => $field,
          'terms'    => $terms,
          'operator' => 'IN',
      )
    ),
  ) );

  $all_product_list = array();
  foreach ($get_products as $porduct) {
      array_push($all_product_list,$porduct->ID);
  }

  return $all_product_list;
}

function hashbar_wpnb_porduct_by_cat($cat_name){
  $get_products = get_posts( array(
    'post_type'   => 'product',
    'numberposts' => -1,
    'post_status' => 'publish',
    'tax_query'   => array(
      array(
          'taxonomy' => 'product_cat',
          'field'    => 'slug',
          'terms'    => $cat_name,
          'operator' => 'IN',
      )
    ),
  ) );

  $category_product_list = array();
  foreach ($get_products as $porduct) {
      $category_product_list[$porduct->ID] = $porduct->post_title;
  }
  return $category_product_list;
}

function hashbar_wpnb_render_html_attr($attr_name, $var){
  if( $var ){
      printf( '%s="%s"', $attr_name, $var);
  }
    
}