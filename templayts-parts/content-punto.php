
<article class="post-grid" id=" post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
		<h2 class="page-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
		<div class="meta">
		    <p class="place"><?php the_field('adres'); ?>, <strong><?php the_field('provincia'); ?></strong> </p>
		    <p class="time"><strong><?php the_field('time'); ?></strong><p>
		</div>
	</header><!-- .entry-header -->

	<div class="entry-content">
		
		<?php the_excerpt(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'cr' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-meta">
		<a class="vermas" href="<?php the_permalink(); ?>">Ver más</a>
		<?php edit_post_link( __( 'Edit', 'cr' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-meta -->
</article><!-- #post-## -->
