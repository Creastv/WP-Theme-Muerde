
</main><!-- close .main-content -->
<div class="anime">
  <img class="animal img-fluid" src="<?php echo get_template_directory_uri(); ?>/includes/img/kv-footer.png" class="img-fluid" alt="">
  <img class="circulos img-fluid" src="<?php echo get_template_directory_uri(); ?>/includes/img/circulos-footer.png" class="img-fluid" alt="">
</div>

<img src="<?php echo get_template_directory_uri(); ?>/includes/img/border-bottom-footer.png" class="img-fluid" alt="">
<footer id="footer">
  <div class="container-fluid">
  	<div class="row">
  		<div class="col text-center">
  			 <?php if ( get_theme_mod( 'cr_logo_pie' ) ) : ?>
               <a target="_blank" href='<?php echo get_option('cr_logo_enlace'); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img class="logo img-fluid" src='<?php echo esc_url( get_theme_mod( 'cr_logo_pie', 'medium' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a>
	        <?php else : ?>
	          <hgroup>
	            <h3 class='site-title'><a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><?php bloginfo( 'name' ); ?></a></h3>
	             <p class=""><?php bloginfo( 'description' ); ?></p> 
	          </hgroup>
	        <?php endif; ?>
	        <?php if ( get_option( 'cr_des' ) ) : ?>   
	           <p class="des"><?php echo get_option('cr_des'); ?></p>
	        <?php endif; ?>
  		</div>
  	</div>

    <div class="row">
      <div class="col text-center">
        <div class="social-contact">
          <span >Síguenos en redes sociales:</span>
          <ul>
              <?php if ( get_option( 'cr_twitter' ) ) : ?>
                   <li class="twitter"><a target="_blank" href="<?php echo get_option('cr_twitter'); ?>"><i class="fa fa-twitter" aria-hidden="true"></i> <small><?php echo get_option('cr_twitter_title'); ?></small></a></li>
              <?php endif; ?>
              <?php if ( get_option( 'cr_facebook' ) ) : ?>
                   <li class="facebook"><a target="_blank" href="<?php echo get_option('cr_facebook'); ?>"><i class="fa fa-facebook" aria-hidden="true"></i> <small><?php echo get_option('cr_facebook_title'); ?></small></a></li>
              <?php endif; ?>
              <?php if ( get_option( 'cr_instagram' ) ) : ?>
                   <li class="instagram"><a target="_blank" href="<?php echo get_option('cr_instagram'); ?>"><i class="fa fa-instagram" aria-hidden="true"></i> <small><?php echo get_option('cr_instagram_title'); ?></small></a></li>
                <?php endif; ?>
            </ul>
        </div>
        
      </div>
    </div>
    
  	<div class="row text-center">
  		<?php wp_nav_menu( array(
			'theme_location' => 'secundary', // Defined when registering the menu
			'menu_id'        => 'secundary-menu',
			'container'      => false,
			'depth'          => 2,
			'menu_class'     => 'navbar ',
			'fallback_cb' 	 => 'wp_bootstrap_navwalker::fallback',
			'walker' 		 => new wp_bootstrap_navwalker()
		) ); ?>
  	</div>
    
    <div class="row text-center">
      <?php wp_nav_menu( array(
      'theme_location' => 'tercero', // Defined when registering the menu
      'menu_id'        => 'tercero-menu',
      'container'      => false,
      'depth'          => 2,
      'menu_class'     => 'navbar ',
      'fallback_cb'    => 'wp_bootstrap_navwalker::fallback',
      'walker'     => new wp_bootstrap_navwalker()
    ) ); ?>
    </div>

    <div class="row"  id="info">
      <div class="col text-center">
        <hr>
        <p>© 2020 | Consejo Andaluz de Colegios Oficiales de Dentistas</p>
        <p>Campaña desarrollada por Descubre Comunicación</p>
      </div>
    </div>
  </div>
</footer>
<button onclick="topFunction()" id="goToTop" title="Go to top"><i class="fa fa-arrow-up"></i></button>

<div id="participa-cta">
  <div id="wraper-cta">
    <div onclick="openPromo()" id="easylink_8854167">

      
    </div>
  </div>
</div>
<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <iframe id="iframe" src="" width="100%" height="500" frameborder="0" webkitallowfullscreen="true" mozallowfullscreen="true" allowfullscreen="true"></iframe>
  </div>
</div>
<script>

setTimeout(function() {
  var f = document.getElementById('iframe');
  f.src = 'https://pr.easypromosapp.com/p/885416?micro=1&utm_source=widget&utm_medium=embed';
}, 2000);

if (jQuery(window).width() > 768) {
    var modal = document.getElementById("myModal");
    var span = document.getElementsByClassName("close")[0];
    function openPromo() {
      modal.style.display = "block";
    }
    span.onclick = function() {
      modal.style.display = "none";
    }
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
} else {
  function openPromo() {
      window.open("https://pr.easypromosapp.com/p/885416?micro=1&utm_source=widget&utm_medium=embed");
}
};
</script>
<?php wp_footer(); ?>

<script>
  <?php if ( is_front_page() ){ ?>
    if (jQuery(window).width() < 1024) {
      var header = document.getElementById("header");
      var body = document.getElementById("body");
      body.style.paddingTop = header.offsetHeight + "px";
    }
  <?php } else { ?>
      var header = document.getElementById("header");
      var body = document.getElementById("body");
      body.style.paddingTop = header.offsetHeight + "px";
  <?php } ?>
</script>
<script>
   // Function on Change of checkbox
    updateView = function(element) {
        if (element) {
            //Get array with names of the checked boxes
            checkedBoxes = ([...document.querySelectorAll('input[type=checkbox]:checked')]).map(function(o) { 
                return o.id;
            });
            for (i = 0; i < markerCount; i++) {
                marker = gmarkers1[i];
                if (typeof marker.category == 'object' && checkedBoxes.every(function(o) {
                        return (marker.category).indexOf(o) >= 0;
                    })) {
                    marker.setVisible(false);
                    console.log('test');
                } else {
                    marker.setVisible(true);
                }
            }
        } else {
            console.log('No param given');
        }
    }
</script>

<script>
    jQuery(window).load(function() {
        if(!localStorage.shown) {
            var jsBox = jQuery('\
                <div class="circle-banner"><div class="anime"></div></div>\
                <div class="circle-banner2"><div class="anime"></div></div>\
                <img src="<?php echo get_template_directory_uri(); ?>/includes/img/banner-participa.png" alt="">\
            ').hide().fadeIn(1000);

            var jsBoxClose = jQuery('\
                <span id="close-promo" class="close">x</span>\
            ').hide().fadeIn(1000);
            jQuery('#easylink_8854167').append(jsBox);
            jQuery('#wraper-cta').append(jsBoxClose);
            
        }
        jQuery("#close-promo").click(function() {
            jQuery('#participa-cta').fadeOut(200);
            console.log('logout');
            localStorage.shown = true;
        });

    });
</script>
<script>
  jQuery(document).ready(function() {
  jQuery("#body").animsition({
    inClass: 'fade-in',
    outClass: 'fade-out',
    inDuration: 0,
    outDuration: 100,
    linkElement: 'a:not([target="_blank"])',
    timeout: true,
    timeoutCountdown: 5000,
    onLoadEvent: true,
    browser: [ 'animation-duration', '-webkit-animation-duration'],
    transition: function(url){ window.location.href = url; }
  });
});
</script>



    

</body>
</html>
