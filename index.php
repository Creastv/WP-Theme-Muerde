<?php get_header(); ?>
	<div id="header-page" >
		<h1 class="page-title">Actualidad</h1>
		<div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
			<?php if(function_exists('bcn_display')) { bcn_display();}?>
		</div>
	</div>
	<img src="<?php echo get_template_directory_uri(); ?>/includes/img/border-slider.png" class="img-fluid border-top" alt="">
    <div id="page" class="container-fluid">
	    <div class="row">
	        <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-1"></div>
			<div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-7 col-xl-7">
				<?php if ( get_option( 'cr_sec_title' ) ) : ?>
					  <?php echo ( get_option( 'cr_sec_title' ) ); ?>
					  <hr>
					<?php endif; ?>
			        <div class="grid">
						<?php if ( have_posts() ) : ?>
						<?php while ( have_posts() ) : the_post(); ?>
							<div class="col-sm-6 col-md-6 col-lg-6 col-xl-4  p-0 grid-item">
								<?php get_template_part( 'content-post', get_post_format() ); ?>
							</div>
							
						<?php endwhile; ?>
					</div>	
				<div class="col-md-12">
					<hr>
					<?php cr_pagination(); ?>	
				</div>	
			</div>
			<div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-4 col-xl-2">
				<?php do_action( 'before_sidebar' ); ?>
				<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>
				<?php endif; ?>
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
  jQuery('.grid').masonry({
    itemSelector: '.grid-item',
  })
});
</script>