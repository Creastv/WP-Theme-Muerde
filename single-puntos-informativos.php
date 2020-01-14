<?php get_header(); ?>
<div id="header-page" class="text-center single-post-art">
	<h1 class="single-title"><?php the_title(); ?></h1>
	<div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
		<?php if(function_exists('bcn_display')) { bcn_display();}?>
	</div>
	<div class="data">
		<div class="meta">
			<p class="place"><?php the_field('adres'); ?>, <strong><?php the_field('provincia'); ?></strong> </p>
		</div>
	</div>
	<h4 class="time"><strong><?php the_field('time'); ?></strong></h4>
</div>
<img src="<?php echo get_template_directory_uri(); ?>/includes/img/border-slider.png" class="img-fluid border-top" alt="">
<div id="single" class="container-fluid">
    <div class="row">
    	<div class="col-xl-3 col-lg-1 col-md-1"></div>
		<div class="col-xl-6 col-lg-10 col-md-10">
			<?php while ( have_posts() ) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<hr>
					<div id="map-header"></div>
					
					<div class="entry-content">
						<br>
						<?php the_content(); ?>
						<?php
							wp_link_pages( array(
								'before' => '<div class="page-links">' . __( 'Pages:', 'cr' ),
								'after'  => '</div>',
							) );
						?>
					</div><!-- .entry-content -->
					<footer class="entry-meta">
						<?php edit_post_link( __( 'Edit', 'cr' ), '<span class="edit-link">', '</span>' ); ?>
					</footer><!-- .entry-meta -->
				</article><!-- #post-## -->
				    <hr>
				    <?php cr_content_nav( 'nav-below' ); ?>
				    <hr>
			<?php endwhile; // end of the loop. ?>
	    </div>	
    </div><!-- close .row -->
</div><!-- close .container -->
 <script type="text/javascript">
                    function initMap() {
                         var <?php the_field('provincia'); ?><?php echo $post->ID; ?> = {
                          info: '<strong><?php the_field('provincia'); ?></strong><br>\
                                <?php the_field('adres'); ?><br>\
                                <strong><?php the_field('time'); ?></strong>',
                          lat: <?php the_field('lat'); ?>,
                          long:<?php the_field('long'); ?>
                        };

                    var locations = [
                        [<?php the_field('provincia'); ?><?php echo $post->ID; ?>.info,  <?php the_field('provincia'); ?><?php echo $post->ID; ?>.lat,  <?php the_field('provincia'); ?><?php echo $post->ID; ?>.long, 0],
                    ];

                      var map = new google.maps.Map(document.getElementById('map-header'), {
                        zoom: 13,
                        center: new google.maps.LatLng(<?php the_field('lat'); ?>, <?php the_field('long'); ?>),
                         styles: 
                                [{"featureType": "administrative", "elementType": "labels.text.fill", "stylers": [{"color": "#444444"} ] }, {"featureType": "landscape", "elementType": "all", "stylers": [{"color": "#f2f2f2"} ] }, {"featureType": "poi", "elementType": "all", "stylers": [{"visibility": "off"} ] }, {"featureType": "road", "elementType": "all", "stylers": [{"saturation": -100 }, {"lightness": 45 } ] }, {"featureType": "road.highway", "elementType": "all", "stylers": [{"visibility": "simplified"} ] }, {"featureType": "road.arterial", "elementType": "labels.icon", "stylers": [{"visibility": "off"} ] }, {"featureType": "transit", "elementType": "all", "stylers": [{"visibility": "off"} ] }, {"featureType": "water", "elementType": "all", "stylers": [{"color": "#46bcec"}, {"visibility": "on"} ] } ],
                        mapTypeId: google.maps.MapTypeId.ROADMAP
                      });

                      var infowindow = new google.maps.InfoWindow({});

                      var marker, i;

                      for (i = 0; i < locations.length; i++) {
                        marker = new google.maps.Marker({
                          position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                          map: map,
                          icon: '<?php echo get_template_directory_uri(); ?>/includes/img/pin.png'
                        });

                        google.maps.event.addListener(marker, 'click', (function (marker, i) {
                          return function () {
                            infowindow.setContent(locations[i][0]);
                            infowindow.open(map, marker);
                          }
                        })(marker, i));
                      }
                    }
                  
            </script>
             <script defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBBQRXJhrLd1J9IgAg8kcFUJkCBk8Mq5-c&callback=initMap" type="text/javascript"></script>
        </div>


<?php get_footer(); ?>

