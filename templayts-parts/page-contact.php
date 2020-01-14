<?php
/**
*
* Template name: Contact
*/
get_header(); ?>
<?php get_header(); ?>
    <div id="header-page" class="img-header" title="<?php the_title(); ?>" alt="<?php the_title(); ?>">
		<div class="wrap-header">
			<div class="container-fluid">
				<div class="row">
					<div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-1"></div>
					<div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-10">
						<h1 class="page-title"><?php the_title(); ?></h1>
					</div>
				</div>
			</div>
    	</div>
	</div>
	<div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-1"></div>
				<div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-10">
		            <?php if(function_exists('bcn_display')) { bcn_display();}?>
		        </div>
		    </div>
		</div>
	</div>
	<img src="<?php echo get_template_directory_uri(); ?>/includes/img/border-slider.png" class="img-fluid border-top" alt="">

    <div class="container-fluid">
	    <div class="row">
	    	<div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-1"></div>
			<div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-10">
				<?php while ( have_posts() ) : the_post(); ?>
				    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				    	<div class="row">
				    		<div class="col-12 col-md-12">
				    			<div class="entry-content">
									<?php the_content(); ?>
								</div><!-- .entry-content -->
				    			<?php echo do_shortcode('[contact-form-7 id="8123" title="contact form"]'); ?>
				    		</div>
				    		<div class="col-12 col-md-12">
				    			<br><br>
				    			<h5>Direcciones de nuestras tiendas:</h5>
								<div class="owl-carousel owl-direcciones">
									<?php query_posts( array( 'post_type' => 'tiendas',  'posts_per_page' => -1 ) );
							            while (have_posts()) : the_post();?><!-- begin of loop -->
							                <article class="card card-contacto" >
												<div class="card-body">
												    <a href="<?php the_permalink(); ?>"><h5 class="card-title"><?php the_title(); ?></h5></a>
												    <div class="card-text">
												    	<?php if( have_rows('localizacion') ): while( have_rows('localizacion') ) : the_row();  ?>
									                    	<?php if (get_sub_field('enlace')): ?>
									                           <?php the_sub_field('enlace'); ?>
									                    	<?php endif ?>
									                    <?php endwhile; endif; ?>
												    </div>
												    <div class="wraper">
												        <?php if( have_rows('telefono') ): while( have_rows('telefono') ) : the_row();  ?>
												    		<?php if ( !empty(get_sub_field('telefono'))): ?>
															    <h6>Datos de contacto:</h6>
											                    <a target="_blank" href="tel:<?php the_sub_field('telefono'); ?>"><i class="fa fa-phone" aria-hidden="true"></i> <?php the_sub_field('telefono'); ?></a> 
											                 <?php endif ?>
										                <?php endwhile; endif; ?>
									                    <?php if( have_rows('web') ): while( have_rows('web') ) : the_row();  ?>
									                    	<?php if ( !empty(get_sub_field('enlace'))): ?>
									                           <a target="_blank" href="<?php the_sub_field('enlace'); ?>"><i class="fa fa-link" aria-hidden="true"></i> <?php the_sub_field('enlace'); ?></a>
									                        <?php endif ?>
									                    <?php endwhile; endif; ?>
									                    <?php if( have_rows('coreo_electronico') ): while( have_rows('coreo_electronico') ) : the_row();  ?>
									                    	<?php if ( !empty(get_sub_field('email'))): ?>
									                            <a target="_blank" href="mailto:<?php the_sub_field('email'); ?>"><i class="fa fa-envelope" aria-hidden="true"></i> <?php the_sub_field('email'); ?></a>
									                        <?php endif ?>
									                    <?php endwhile; endif; ?>
												    </div>
												</div>
												<footer>
													<?php edit_post_link( __( 'Edit', 'cr' ), '<span class="edit-link">', '</span>' ); ?>
												</footer>
											</article>
							        <?php endwhile; wp_reset_query(); ?><!-- end of loop -->
								</div>
				    		</div>
				    	</div>
						<footer class="entry-meta">				
							<?php edit_post_link( __( 'Edit', 'cr' ), '<span class="edit-link">', '</span>' ); ?>
						</footer><!-- .entry-meta -->
					</article><!-- #post-## -->
				<?php endwhile; ?>
			</div>
		</div>
	</div>	
<div id="map-contact" style="width: 100%; height: 450px; margin-top: 50px;"></div>

 <script type="text/javascript">
  function initialize() {
    var locations = [
        ['<h6>Green Motor</h6><p>Calle del Motor, 17, 41007 Sevilla</p>', 37.3980574, -5.9539788, 3],
        ['<h6>Todomoto Ocaslón</h6><p>Calle Jardín de la Isla, 41014  Sevilla</p><hr><h6>Todomoto Sevilla</h6><p>Calle Jardín de la Isla, 41014  Sevilla</p><hr><h6>Harley Davidson Sevilla</h6><p>Calle Jardín de la Isla, 6, 41014 Sevilla</p>', 37.3336854, -5.9693836, 2],
        ['<h6>Todomoto Córdoba</h6><p>Av. Conde de Vallellano, 4, 14004 Córdoba</p>', 37.8916, -4.7727, 1]
    ];

    window.map = new google.maps.Map(document.getElementById('map-contact'), {
        mapTypeId: google.maps.MapTypeId.ROADMAP,
         styles:[{"featureType": "all", "elementType": "labels.text.fill", "stylers": [{"color": "#000000"} ] }, {"featureType": "all", "elementType": "labels.text.stroke", "stylers": [{"visibility": "on"}, {"color": "#ffffff"}, {"weight": "4"} ] }, {"featureType": "all", "elementType": "labels.icon", "stylers": [{"visibility": "on"}, {"saturation": "-100"} ] }, {"featureType": "administrative", "elementType": "geometry.fill", "stylers": [{"color": "#ffffff"}, {"lightness": 20 }, {"visibility": "on"} ] }, {"featureType": "administrative", "elementType": "geometry.stroke", "stylers": [{"color": "#000000"}, {"lightness": 17 }, {"weight": 1.2 } ] }, {"featureType": "administrative.locality", "elementType": "all", "stylers": [{"visibility": "on"} ] }, {"featureType": "administrative.neighborhood", "elementType": "all", "stylers": [{"visibility": "on"} ] }, {"featureType": "administrative.land_parcel", "elementType": "all", "stylers": [{"visibility": "on"}, {"lightness": "80"} ] }, {"featureType": "landscape", "elementType": "all", "stylers": [{"visibility": "simplified"}, {"color": "#797979"} ] }, {"featureType": "landscape", "elementType": "geometry", "stylers": [{"color": "#ffffff"}, {"lightness": 20 } ] }, {"featureType": "landscape.man_made", "elementType": "all", "stylers": [{"visibility": "on"} ] }, {"featureType": "landscape.natural.landcover", "elementType": "all", "stylers": [{"visibility": "on"} ] }, {"featureType": "landscape.natural.terrain", "elementType": "all", "stylers": [{"visibility": "off"} ] }, {"featureType": "poi", "elementType": "geometry", "stylers": [{"color": "#dfdfdf"}, {"lightness": 21 }, {"visibility": "on"} ] }, {"featureType": "road.highway", "elementType": "geometry.fill", "stylers": [{"color": "#fed41c"}, {"visibility": "on"}, {"weight": "3.00"} ] }, {"featureType": "road.highway", "elementType": "geometry.stroke", "stylers": [{"color": "#fed41c"}, {"gamma": "0.6"} ] }, {"featureType": "road.highway.controlled_access", "elementType": "geometry", "stylers": [{"visibility": "on"}, {"color": "#fed41c"}, {"weight": "4.00"} ] }, {"featureType": "road.highway.controlled_access", "elementType": "geometry.stroke", "stylers": [{"weight": "1"}, {"gamma": "0.6"} ] }, {"featureType": "road.arterial", "elementType": "geometry", "stylers": [{"color": "#aeaeae"}, {"lightness": 18 }, {"visibility": "on"} ] }, {"featureType": "road.arterial", "elementType": "geometry.stroke", "stylers": [{"color": "#b6b6b6"} ] }, {"featureType": "road.local", "elementType": "all", "stylers": [{"visibility": "on"}, {"color": "#656565"} ] }, {"featureType": "road.local", "elementType": "geometry", "stylers": [{"color": "#c6c6c6"}, {"lightness": 16 } ] }, {"featureType": "road.local", "elementType": "geometry.stroke", "stylers": [{"color": "#b1b1b1"}, {"visibility": "on"} ] }, {"featureType": "road.local", "elementType": "labels.text.stroke", "stylers": [{"visibility": "on"}, {"color": "#ffffff"} ] }, {"featureType": "transit", "elementType": "geometry", "stylers": [{"color": "#bdbdbd"}, {"lightness": 19 }, {"visibility": "on"} ] }, {"featureType": "water", "elementType": "geometry", "stylers": [{"color": "#c0d8e3"}, {"lightness": 17 }, {"visibility": "on"} ] } ]
    });

    var infowindow = new google.maps.InfoWindow();

    var bounds = new google.maps.LatLngBounds();

    for (i = 0; i < locations.length; i++) {
        marker = new google.maps.Marker({
            position: new google.maps.LatLng(locations[i][1], locations[i][2]),
            map: map,
            icon:	'<?php echo get_template_directory_uri() ?>/includes/img/pin.png'
        });

        bounds.extend(marker.position);

        google.maps.event.addListener(marker, 'click', (function (marker, i) {
            return function () {
                infowindow.setContent(locations[i][0]);
                infowindow.open(map, marker);
            }
        })(marker, i));
    }

    map.fitBounds(bounds);

    var listener = google.maps.event.addListener(map, "idle", function () {
        map.setZoom(8);
        google.maps.event.removeListener(listener);
    });
}

function loadScript() {
    var script = document.createElement('script');
    script.type = 'text/javascript';
    script.src = 'https://maps.googleapis.com/maps/api/js?key=AIzaSyCIXFTZ5TWh5sJutqQeoiXH3aNRScmIxBw&' + 'callback=initialize';
    document.body.appendChild(script);
}

window.onload = loadScript;
  </script>



<script>
    jQuery(document).ready(function() {
    var owl = jQuery(".owl-direcciones");
    owl.owlCarousel({
        lazyLoad: true,
        margin: 15,
        loop: false,
        autoplay: 900, //Set AutoPlay to 3 seconds
        nav: true,
         navContainer: '.owl-nav',
        navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
        responsive: {
            0: {
                items: 1,
                // autoHeight: true,
                // autoHeightClass: 'owl-height',
            },
            // breakpoint from 480 up
            576: {
                items: 1,
            },
            // breakpoint from 768 up
            768: {
                items: 2,
            },
            992: {
                items: 3
            },
            1200: {
                items: 5
            },
            1400: {
                items: 5
            }
        }
    });
});
</script>
<?php get_footer(); ?>
