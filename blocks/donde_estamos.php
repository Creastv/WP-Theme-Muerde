
<?php

/**
 * Block Name:  Donde estamos (inicio)
 *
 */
$id = 'participaygana-' . $block['id'];

?>
<div id="donde-estamos" class="<?php echo $id; ?>">
  <?php if (get_field('image')): ?>
     <img class="border-bg" src="<?php the_field('imagen'); ?>" alt="">
  <?php endif ?>
 
  <div class="wraper">
		<div class="title-section" data-aos="zoom-in-up">
			<h2><?php the_field('titulo_dondeestamos'); ?></h2>
		</div>
    <div class="content" data-aos="zoom-in-up">
      <?php the_field('descripcion_dondeestamos'); ?>
      <?php if (get_field('button_text_de')): ?>
        <a class="btn btn-main" href="<?php the_field('button_link_de') ?>" ><?php the_field('button_text_de') ?></a>
      <?php endif ?>
    </div>
		
  
  	<div class="bottom" data-aos="fade-up">
  		<div class="map-wraper">
  			<div id="map" ></div>
  			<div class="list">
            <div id="style-3" class="wraper-points-2">
        				  <?php       
        						$args = array(
        						    'post_type' => 'puntos-informativos', 
        						    'posts_per_page'=>-1, 
        						    'orderby'=>'menu_order', 
        						    'order'=>'asc'
        						  );
        						$loop = new WP_Query( $args ); ?>
        						
                            

        					   <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

        					   	<?php $class='parent';
        							  $header='h1';
        							  if ($loop->post->post_parent !== 0) {
        							    $class='child';
        							    $header='h2';
        							  }  ?>
                        <?php 
        					       $nombre =  get_field('nombre', get_the_ID());
        					       $provincia = get_field('provincia', get_the_ID()); 
        					       $adres = get_field('adres', get_the_ID());
        					       $time = get_field('time', get_the_ID());
        				        ?>
        				        <?php  if ($loop->post->post_parent == 0) { ?>
        				          <h3 class="provincia"><?php echo $provincia ?></h3>
        				        <?php } ?>
        	
        						  	<div class="<?php echo $class ?> " >
                           <div class="div">
                                <div class="left">
                                  <?php  if ($loop->post->post_parent == 0) { ?>
                                    <img class="pine" src="<?php echo get_template_directory_uri(); ?>/includes/img/pin.png" alt="">
                                  <?php } else {?>
                                    <img class="pine" src="<?php echo get_template_directory_uri(); ?>/includes/img/pin2.png" alt="">
                                  <?php  } ?>
                                </div>
                                <a href="<?php the_permalink(); ?>" class="center">
                                    <?php if ($time): ?>
                                      <strong ><?php echo $time ?></strong><br>
                                    <?php endif ?>
                                    <strong><?php echo $nombre ?></strong><br>
                                    <?php echo $adres ?><br>
                                </a>
                                <div class="right">
                                  <!-- <a class="btn btn-main btn-map" href="<?php the_permalink(); ?>">Lee más</a> <br> -->
                                </div>
                              </div>
        			         </div>
        					<?php endwhile; wp_reset_query(); ?>
        						<?php wp_reset_postdata(); ?>
            </div>

  			</div>
  		</div>
  	</div>
  </div>
  <?php if (get_field('imagen_bottom')): ?>
     <img class="border-bg" src="<?php the_field('imagen_bottom'); ?>" alt="">
  <?php endif ?>
</div>



<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBBQRXJhrLd1J9IgAg8kcFUJkCBk8Mq5-c&initialize"></script>
<script>

      <?php $args = array('posts_per_page' => -1, 'post_type' => 'puntos-informativos', 'order' => 'ASC');
        query_posts($args); if (have_posts()) : while (have_posts()) : the_post(); ?>

          
          <?php 
            $nombre =  get_field('nombre', get_the_ID());
            $provincia = get_field('provincia', get_the_ID()); 
            $adres = get_field('adres', get_the_ID());
            $time = get_field('time', get_the_ID());
            $lat = get_field('lat', get_the_ID());
            $long = get_field('long', get_the_ID());
          ?>
              var <?php echo $provincia ?><?php echo get_the_ID(); ?> = {
                info: '<strong><?php echo $nombre ?></strong><br>\
                      <?php echo $adres ?><br>\
                      <strong><?php echo $time ?></strong><br>\
                      <a class="btn btn-main btn-map" href="<?php the_permalink(); ?>">Lee más</a>',
                lat: <?php echo $lat ?>,
                long:<?php echo $long ?>
              };
            

    <?php endwhile; endif; wp_reset_query(); ?>
    <?php wp_reset_postdata(); ?> 
    var gmarkers1 = [];
    var markers1 = [];
   
    // Our markers
    var  markers1 = [
          <?php $args = array('posts_per_page' => -1, 'post_type' => 'puntos-informativos', 'order' => 'ASC' );
              query_posts($args); if (have_posts()) : while (have_posts()) : the_post(); ?>
               <?php 
                    $nombre =  get_field('nombre', get_the_ID());
                    $provincia = get_field('provincia', get_the_ID()); 
                    $adres = get_field('adres', get_the_ID());
                    $time = get_field('time', get_the_ID());
                    $lat = get_field('lat', get_the_ID());
                     $long = get_field('long', get_the_ID());
              ?>
              ['<?php echo get_the_ID(); ?>', <?php echo $provincia ?><?php echo get_the_ID(); ?>.info,  <?php echo $provincia ?><?php echo get_the_ID(); ?>.lat,  <?php echo $provincia ?><?php echo get_the_ID(); ?>.long, ['puntos-informativos'], '<?php echo get_template_directory_uri(); ?>/includes/img/pin.png'],
             
          <?php endwhile; endif; wp_reset_query(); ?>
          <?php wp_reset_postdata(); ?>     

    ];

    var markerCount = markers1.length
    
    
    // initialize();
    // Function to add marker to map
    function addMarker(marker) {
        var category = marker[4];
        var title = marker[1];
        var pos = new google.maps.LatLng(marker[2], marker[3]);
        var content = marker[1];
        var icon = marker[5]
        var marker1 = new google.maps.Marker({
            title: title,
            position: pos,
            category: category,
            map: map,
            icon: icon
        });

        gmarkers1.push(marker1);

        // Marker click listener
        google.maps.event.addListener(marker1, 'click', (function(marker1, content) {
            return function() {
                console.log('Gmarker 1 gets pushed');
                infowindow.setContent(content);
                infowindow.open(map, marker1);
                map.panTo(this.getPosition());
                map.setZoom(12);
            }
        })(marker1, content));

        var infowindow = new google.maps.InfoWindow({
            content: ''
        });
    }


// Function to init map
    function initialize() {

        mapOptions = {
            zoom: 8,
            center: new google.maps.LatLng(37.5442706, -4.727752799999962),
            styles: [{"featureType": "administrative", "elementType": "labels.text.fill", "stylers": [{"color": "#444444"} ] }, {"featureType": "landscape", "elementType": "all", "stylers": [{"color": "#f2f2f2"} ] }, {"featureType": "poi", "elementType": "all", "stylers": [{"visibility": "off"} ] }, {"featureType": "road", "elementType": "all", "stylers": [{"saturation": -100 }, {"lightness": 45 } ] }, {"featureType": "road.highway", "elementType": "all", "stylers": [{"visibility": "simplified"} ] }, {"featureType": "road.arterial", "elementType": "labels.icon", "stylers": [{"visibility": "off"} ] }, {"featureType": "transit", "elementType": "all", "stylers": [{"visibility": "off"} ] }, {"featureType": "water", "elementType": "all", "stylers": [{"color": "#46bcec"}, {"visibility": "on"} ] } ]
            // mapTypeId: google.maps.MapTypeId.TERRAIN
        };
        map = new google.maps.Map(document.getElementById('map'), mapOptions);

        
        for (i = 0; i < markerCount; i++) {
            addMarker(markers1[i]);
        }
       
    }
   
   
    // Init map
    initialize();
    // google.maps.event.addDomListener(window, "load", initialize);
    </script>

<style type="text/css">
  .<?php echo $id; ?> .wraper{
    background-color:<?php the_field('fondo'); ?>;
    padding-top: <?php the_field('padding_top'); ?>px;
    padding-bottom: <?php the_field('padding_bottom'); ?>px;
  }
</style>