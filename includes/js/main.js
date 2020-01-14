
  console.log("test");
  AOS.init();

  jQuery(window).scroll(function() {    
      var scroll = jQuery(window).scrollTop();

      if (scroll >= 10) {
          jQuery("#header").addClass("header-scroll");
      } else {
          jQuery("#header").removeClass("header-scroll");
      }
  });



jQuery('#menu-toggle').click(function(){
  jQuery(this).toggleClass('open');
})


function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}
function topFunction() {
   jQuery('html, body').animate({scrollTop:0}, 'slow');
}




var sidebarSticky = function() {
      document.querySelector('.sidebar-template').style.height = document.getElementById('content').clientHeight + 'px';
      setTimeout(function() {
          document.querySelector('#content').style.minHeight = document.querySelector('.sidebar').clientHeight + 'px';
      }, 100);

      var nav = jQuery('#sidebar'),
          startPosition = nav.offset().top,
          stopPosition = jQuery('.scroll-bottom').offset().bottom - jQuery(window).height();
     jQuery(document).scroll(function() {
          //stick nav to top of page 
          var y = jQuery(this).scrollTop()

          if (y > startPosition) {
              nav.addClass('sticky');
              if (y > stopPosition) {
                  nav.css('top', stopPosition - y);
              } else {
                  nav.css('top', 0);
              }
          } else {
              nav.removeClass('sticky');
          }
      });
      var lastScroll = 0;
      jQuery(window).on('scroll', function() {
          var scroll = jQuery(window).scrollTop();
          if (lastScroll - scroll > 0) {
              jQuery(".sticky").addClass("topNav");
          } else {
              jQuery(".sticky").removeClass("topNav");
          }
          lastScroll = scroll;
      });
  };


  // mobile navwalker
jQuery(function($) {
    // Bootstrap menu magic
    jQuery(window).resize(function() {
        if (jQuery(window).width() < 768) {
            jQuery(".dropdown-toggle").attr('data-toggle', 'dropdown');
        } else {
            jQuery(".dropdown-toggle").removeAttr('data-toggle dropdown');
        }
    });
});




// a href smothe scroll to a anchor
jQuery(function() {
    jQuery('a[href*=#]:not([href=#])').click(function() {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {

            var target = jQuery(this.hash);
            target = target.length ? target : jQuery('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                jQuery('html,body').animate({
                    scrollTop: target.offset().top - 100
                }, 1000);
                return false;
            }
        }
    });
});


