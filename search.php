<?php get_header(); ?>
<div id="header-page">
    <h1 class="page-title">Busqueda</h1>
	<div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
		<?php if(function_exists('bcn_display')) { bcn_display();}?>
	</div>
</div>
<img src="<?php echo get_template_directory_uri(); ?>/includes/img/border-slider.png" class="img-fluid border-top" alt="">
<div class="container-fluid">
    <div class="row">
		<?php if ( have_posts() ) : ?>
			    <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-1"></div>
				<div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-10">
				<div class="card-columns">
					<?php while ( have_posts() ) : the_post(); ?>
						<?php get_template_part( 'content-post', get_post_format() ); ?>
					<?php endwhile; ?>
				</div>
			</div>
			

			<div class="col-md-12">
				<?php the_posts_pagination(); ?>
			</div> <?php else : ?>	
    </div><!-- close .row -->
</div><!-- close .container -->
<div class="container-fluid">
    <div class="row">
    	<div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-1"></div>
	    <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-10">
			<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
				<p><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'cr' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>
			<?php elseif ( is_search() ) : ?>
				<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'cr' ); ?></p>
				<br><br>
			<?php else : ?>
				<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'cr' ); ?></p>
				<br><br>
			<?php endif; ?>		
		</div>
    </div>
</div>

				  
		<?php endif; ?>
</div>
<?php get_footer(); ?>