<?php
/**
*
* Template name: Coming soon
*/
get_header('coming'); ?>
<div class="div" style="overflow-x: hidden;">
<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
	<?php the_content(); ?>
<?php endwhile; ?>
<?php endif; ?>
</div>



