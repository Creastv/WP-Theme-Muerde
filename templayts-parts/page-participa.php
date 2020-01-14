<?php
/**
*
* Template name: Participa y gana
*/
get_header(); ?>
    <div id="header-page">
		<h1 class="page-title"><?php the_title(); ?></h1>
		<div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
			<?php if(function_exists('bcn_display')) { bcn_display();}?>
		</div>
	</div>
	<img src="<?php echo get_template_directory_uri(); ?>/includes/img/border-slider.png" class="img-fluid border-top" alt="">

	<div id="page" class="container-fluid">
	    <div class="row">
	        <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-0 col-xl-1"></div>
	        <div class=" col-12 col-xs-12 col-sm-12 col-md-12 col-lg-4 col-xl-2">
	        	<div class="sidebar-template">
	        	<div class="sidebar" id="sidebar">
					<?php do_action( 'before_sidebar' ); ?>
					<?php if ( ! dynamic_sidebar( 'sidebar-4' ) ) : ?>
					<?php endif; ?>
				</div>
				</div>
			</div>
	       	
			<div id="content" class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-7 col-xl-8 order-first order-lg-1">
				<?php while ( have_posts() ) : the_post(); ?>
				    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<div class="entry-content">
							<?php the_content(); ?>
						</div><!-- .entry-content -->
						<footer class="entry-meta">				
							<?php edit_post_link( __( 'Edit', 'cr' ), '<span class="edit-link">', '</span>' ); ?>
						</footer><!-- .entry-meta -->
					</article><!-- #post-## -->
				<?php endwhile; ?>
            </div>
            
		</div>
	</div>
	<div class="scroll-bottom"></div>	

<?php get_footer(); ?>
<script>
    if (jQuery(window).width() > 768) {
       sidebarSticky();  
    }
</script>

