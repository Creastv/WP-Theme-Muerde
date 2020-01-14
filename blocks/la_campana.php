
<?php

/**
 * Block Name:  La campaña (inicio)
 *
 */
$id = 'lacampana-' . $block['id'];

?>
<div class="<?php echo $id; ?>"  id="la-campana" style="background-image:url(<?php the_field('imagen_fondo_lacampana'); ?>); background-repeat: no-repeat; background-position: top right;" data-aos="fade-up" >
	<div class="left">
		<div class="title-section" data-aos="fade-up">
			<h2><?php the_field('titulo_lacampana'); ?></h2>
		</div>
		<div class="content" data-aos="fade-up">
			<?php the_field('descripcion_lacampana'); ?>
			<?php if (get_field('button_text_lc')): ?>
		      <a class="btn btn-main" href="<?php the_field('button_link_lc') ?>" ><?php the_field('button_text_lc') ?></a>
		    <?php endif ?>
		</div>
	</div>
	<div class="right" data-aos="zoom-out-up"  data-aos-delay="300">
		<img src="<?php the_field('imagen_lacampana'); ?>" alt="">
	</div>
</div>



<style type="text/css">
	.<?php echo $id; ?> .img {
		background: url(<?php the_field('imagen_lacampana'); ?>)!important;
	}
	.<?php echo $id; ?> .img {
		background: url(<?php the_field('imagen_lacampana'); ?>)!important;
	}
</style>