<?php
/**
 * The front page template.
 *
 * @package PorchyTenUpTheme
 */

get_header(); ?>
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="entry-content"><?php the_content(); ?></div>
		<?php endwhile; ?>
	<?php endif; ?>

<?php
get_footer();