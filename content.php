<article class="post-grid" id=" post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="content-thumbnail">
			<?php the_post_thumbnail('medium'); ?>
	</div>
	<header>
		<h2 class="page-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
		<p class="subtitle"><?php echo get_post_meta($post->ID, 'subtitle', true); ?></p>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<div class="meta">
			<p ><span><i class="fa fa-calendar" aria-hidden="true"></i> <?php the_time('d/m/Y') ?> <i class="fa fa-user" aria-hidden="true"></i>  <?php the_author_posts_link(); ?></span></p>
		</div>
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'cr' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
