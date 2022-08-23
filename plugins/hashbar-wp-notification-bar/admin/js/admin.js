(function($) {
  "use strict";

  $( document ).ready(function() {

  	//tooltip settings
    $('.tooltip').tooltipster({
      theme: 'tooltipster-light',
      contentCloning: true,
      // trigger: 'click', // used to style the tooltip content
    });

    //Pro version notice
    $('.csf .hashbar_pro_notice, .csf .hashbar_pro_opacity, .wc-metaboxes .hashbar_pro_notice').on('click', function(){
        $('.thickbox.hashbar_trigger_pro_notice').click();
    });
    
  });
})(jQuery);