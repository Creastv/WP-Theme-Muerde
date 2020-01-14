
<?php

/**
 * Block Name:  Recurso
 *
 */
$id = 'recurso-' . $block['id'];

?>
<div id="<?php echo $id ?>" class="recurso">
	<div class="left">
		<img src="<?php the_field('imagen'); ?>" alt="">
	</div>
	<div class="right">
		<?php if( have_rows('botones_') ):
		    while ( have_rows('botones_') ) : the_row(); ?>
		     <div class="button-enlace">
				<p><?php the_sub_field('descripcion'); ?></p>
				<a target="_blank" href=" <?php the_sub_field('enlace'); ?>" class="btn btn-main"><?php the_sub_field('texto'); ?></a>
			</div>
		<?php endwhile; else : ?>

		<?php endif; ?>
	</div>
</div>


