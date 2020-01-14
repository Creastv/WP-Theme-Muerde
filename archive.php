<?php get_header(); ?>
    <div id="header-page">
		<h1 class="page-title">
			<?php
						if ( is_category() ) :
							single_cat_title();

						elseif ( is_tag() ) :
							single_tag_title();

					    elseif ($post->post_type == 'marcas') :
						    printf( 'Nuestras marcas', 'cr');


						elseif ( is_author() ) :
							/* Queue the first post, that way we know
							 * what author we're dealing with (if that is the case).
							*/
							the_post();
							printf( __( 'Author: %s', 'cr' ), '<span class="vcard">' . get_the_author() . '</span>' );
							/* Since we called the_post() above, we need to
							 * rewind the loop back to the beginning that way
							 * we can run the loop properly, in full.
							 */
							rewind_posts();

						elseif ( is_day() ) :
							printf( __( 'Day: %s', 'cr' ), '<span>' . get_the_date() . '</span>' );

						elseif ( is_month() ) :
							printf( __( 'Month: %s', 'cr' ), '<span>' . get_the_date( 'F Y' ) . '</span>' );

						elseif ( is_year() ) :
							printf( __( 'Year: %s', 'cr' ), '<span>' . get_the_date( 'Y' ) . '</span>' );

						elseif ( is_tax( 'post_format', 'post-format-aside' ) ) :
							_e( 'Asides', 'cr' );

						elseif ( is_tax( 'post_format', 'post-format-image' ) ) :
							_e( 'Images', 'cr');

						elseif ( is_tax( 'post_format', 'post-format-video' ) ) :
							_e( 'Videos', 'cr' );

						elseif ( is_tax( 'post_format', 'post-format-quote' ) ) :
							_e( 'Quotes', 'cr' );

						elseif ( is_tax( 'post_format', 'post-format-link' ) ) :
							_e( 'Links', 'cr' );
						else :
							_e( 'Archives', 'cr' );

						endif;
					?>
		</h1>
		<div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
			<?php if(function_exists('bcn_display')) { bcn_display();}?>
		</div>
	</div>
	<img src="<?php echo get_template_directory_uri(); ?>/includes/img/border-slider.png" class="img-fluid border-top" alt="">
	<div id="page" class="container-fluid">
	    <div class="row">
	    	<div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-1 col-xl-1"></div>
			<div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-10 col-xl-10">
	        	<div class="grid">
				    <?php if ( have_posts() ) : ?>
					<?php while ( have_posts() ) : the_post(); ?>
						
						<?php if ($post->post_type == "puntos-informativos") { ?>
							<div class="col-sm-6 col-md-6 col-lg-6 col-xl-4  p-0 grid-item">
						       <?php get_template_part( '/templayts-parts/content-punto', get_post_format() ); ?>
						    </div>
					    <?php } else { ?>
					    	<div class="col-sm-6 col-md-6 col-lg-6 col-xl-4  p-0 grid-item">
					    	   <?php get_template_part( '/content-post', get_post_format() ); ?>
					        </div>
					    <?php } ?>
						
					<?php endwhile; ?>
			    </div>
			    <div class="col-md-12">
					<hr>
					<?php cr_pagination(); ?>	
				</div>
			</div>
             <div class="clearfix"></div>
			
				<?php else : ?>

					<?php get_template_part( 'no-results', 'index' ); ?>

				<?php endif; ?>
		</div>
	</div>	
<?php get_footer(); ?>

<script>
jQuery(window).load(function() {
  var msnry = new Masonry( '.grid', {
	 itemSelector: '.grid-item',
	});
});


</script>