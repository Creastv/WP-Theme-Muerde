
<?php get_header(); ?>
    <div id="header-page">
		<h1 class="page-title">404</h1>
		<div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
			<?php if(function_exists('bcn_display')) { bcn_display();}?>
		</div>
	</div>
	<img src="<?php echo get_template_directory_uri(); ?>/includes/img/border-slider.png" class="img-fluid border-top" alt="">
	<section id="nothing">
		<div class="container">
	        <div class="row">
	            <div id="content" class="main-content-inner col-sm-12 col-md-12 text-center">
					<section class="content-padder error-404 not-found ">
						<br><br>
						<header>
							<h2 class=""><?php _e( 'Oops! Something went wrong here.', 'cr' ); ?></h2>
						</header><!-- .page-header -->
						<div class="page-content">
							<p><?php _e( 'Nothing could be found at this location. Maybe try a search?', 'cr' ); ?></p>
							
						</div><!-- .page-content -->
						<br><br>
					</section><!-- .content-padder -->
				</div>
	        </div><!-- close .row -->
	    </div><!-- close .container -->
	</section>
<?php get_footer(); ?>