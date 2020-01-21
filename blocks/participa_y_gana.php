
<?php

/**
 * Block Name:  La campaña (inicio)
 *
 */
$id = 'participaygana-' . $block['id'];

?>

<div id="participa-y-gana" class="<?php echo $id; ?>" data-aos="fade-up" >
	<img class="border-bg" src="<?php the_field('imagen'); ?>" alt="">
	<div class="wraper">
		<div class="center">
			<div class="left text-center" data-aos="zoom-in-up" >
				<img class="desc img-fluid" src="<?php the_field('imagen_participa'); ?>" alt="<?php the_field('titulo_participa'); ?>">
			</div>
			<div class="right">
				
				<div class="content" data-aos="zoom-in-up" >
					<div class="title-section">
						<h2><?php the_field('titulo_participa'); ?></h2>
					</div>
					<?php the_field('descripcion_participa'); ?>
				</div>
				<div class="mobile text-center">
					<img class="img-fluid" src="<?php the_field('imagen_participa'); ?>" alt="<?php the_field('titulo_participa'); ?>">
				</div>
				<?php if( have_rows('lista_participa') ):  ?>
			    <div class="bullets" data-aos="zoom-in-up" >
				     <?php  while ( have_rows('lista_participa') ) : the_row(); ?>
				     	<div class="bulet">
							<div class="nr">
								<span><?php the_sub_field('numero_lacampana_pa'); ?></span>
							</div>
							<div class="desc">
								<h3><?php the_sub_field('titulo_lacampana_pa'); ?></h3>
								<p><?php the_sub_field('paragrafo_pa'); ?></p>
							</div>
						</div>
				<?php endwhile; ?>
				    </div>
				<?php endif; ?>
				<?php if(get_field('enlace_participa') && get_field('button_participa')): ?>
					<div class="buttons" data-aos="zoom-in-up" >
						<?php if(get_field('enlace_participa_dos') && get_field('button_participa_dos')): ?>
						    <a href="<?php the_field('enlace_participa_dos'); ?>" class="btn btn-main"><?php the_field('button_participa_dos'); ?></a>
						<?php endif; ?>
						<a href="<?php the_field('enlace_participa'); ?>" class="btn btn-participa"><?php the_field('button_participa'); ?></a>
					</div>
				<?php endif; ?>
				
			</div>
		</div>
	</div>
	<img class="border-bg" style="background-color:<?php the_field('fondo'); ?>;" src="<?php the_field('imagen_bottom'); ?>" alt="">
</div>




<style type="text/css">
	.editor-block-list__layout .<?php echo $id; ?> .mobile{
		display: none;
	}
	.<?php echo $id; ?> .wraper{
		background-color:<?php the_field('fondo'); ?>;
		padding-top: <?php the_field('padding_top'); ?>px;
		padding-bottom: <?php the_field('padding_bottom'); ?>px;
	}
</style>