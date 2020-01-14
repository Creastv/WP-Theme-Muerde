
<?php

/**
 * Block Name:  Aktualidad (inicio)
 *
 */
$id = 'participaygana-' . $block['id'];

?>

<div id="actualidad" >
	<div class="col">
		<div class="title-section" data-aos="zoom-in-up">
			<h2><?php the_field('titulo_actualidad'); ?></h2>
		</div>
		<div class="content" data-aos="zoom-in-up">
			<?php the_field('descripcion_actualidad'); ?>
		</div>
		<div class="wraper-posts" data-aos="zoom-in-up">
			<div class="owl-carousel posts" >
				<?php $numero = get_field('entradas'); ?>
			   <?php  $test = array(
	                'posts_per_page'    => $numero,
	                'post_type'         => 'post',
	                'order'             => 'DSC'
	              );
	              query_posts($test); if (have_posts()) : while (have_posts()) : the_post(); ?>
	                <div class="post">
	                  <?php get_template_part( '/content-post-slider', get_post_format() ); ?>   
	                </div> 
	            <?php endwhile; endif; wp_reset_query(); ?>
	          <?php wp_reset_postdata(); ?>
			</div>
		</div>
	</div>
</div>
