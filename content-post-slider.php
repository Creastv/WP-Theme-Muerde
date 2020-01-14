<article class="post-grid" id=" post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
		<div class="content-thumbnail">
			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>
	    </div>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<h2 class="page-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
		<div class="meta">
		    <span><i class="fa fa-calendar" aria-hidden="true"></i> <?php the_time('d/m/Y') ?></span>
		</div>
		
		<?php the_excerpt(); ?>
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
