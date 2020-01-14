
<?php

/**
 * Block Name:  Tutuł
 *
 */

?>
<?php if (get_field('kontener-block-tytul')): ?>
	<div class="container">
<?php endif ?>
		<div class="row">
			<h2 class="section-title"><?php the_field('tytul-block'); ?> <strong><?php the_field('tytul-block_bold'); ?></strong></h2>
		</div>
<?php if (get_field('kontener-block-tytul')): ?>
    </div>
<?php endif ?>
<style type="text/css">
	.section-title {
		font-family: 'Asap', sans-serif;
		  font-size: 42px;
		  padding: 30px 0px;
		  font-weight: normal;

	}
	.section-title strong{
		  	font-weight: 900;
		  }
</style>