<?php get_header(); ?>
<div id="header-page" class="text-center single-post-art">
	<h1 class="single-title"><?php the_title(); ?></h1>
	<div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
		<?php if(function_exists('bcn_display')) { bcn_display();}?>
	</div>
	<div class="data">
		<div class="meta">
			<p ><span><i class="fa fa-calendar" aria-hidden="true"></i> <?php the_time('d/m/Y') ?></p>
		</div>
		<div class="category-meta">
			<?php the_category(); ?>
		</div>
	</div>
</div>
<img src="<?php echo get_template_directory_uri(); ?>/includes/img/border-slider.png" class="img-fluid border-top" alt="">
<div id="single" class="container-fluid">
    <div class="row">
    	<div class="col-xl-3 col-lg-1 col-md-1"></div>
		<div class="col-xl-6 col-lg-10 col-md-10">
			<?php while ( have_posts() ) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<hr>
					<img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid thumb" style="width: 100%;" alt="<?php the_title(); ?>">
					
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

<?php get_footer(); ?>

