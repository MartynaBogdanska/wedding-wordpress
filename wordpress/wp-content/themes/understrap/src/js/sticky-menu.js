jQuery(function() {
  /* Selecting the navigation */
  var $nav = jQuery("#wrapper-navbar");
  /* Determing navigation Size */
  var $navSize =$nav.outerHeight();
  /* Detecting scroll event */
  jQuery(window).scroll(function() {
    /* Determing the position of the scroll */
    var $scrollPos = jQuery(window).scrollTop();
    /* If it's bigger thant the navigation size */
    if ($scrollPos >= 200) {
      /* Adding the class scrolled  */
      $nav.addClass("scrolled");
      /* If it's not, then */
    } else {
      /* Removing the class */
      $nav.removeClass("scrolled");
    }
  });
});
