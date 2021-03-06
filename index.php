<?php
/**
 * The main template file
 *
 * @package PorchyTenUpTheme
 */

get_header(); ?>

	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
		<div class="entry-content">
			<header class="entry-content--header">
				<h2 class="entry-content--h2"><?php the_title(); ?></h2>
				<div class="meta-info">
					<time pubdate datetime="<?php echo get_the_date( 'Y-m-d' ); ?>" title="<?php echo PorchyTenUpTheme\TemplateTags\post_date_formatted( get_post() ); ?>">
						<?php echo PorchyTenUpTheme\TemplateTags\post_date_formatted( get_post() ); ?>
					</time>
				</div>
			</header>
			<?php the_content(); ?>
		</div>
		<?php endwhile; ?>
	<?php endif; ?>

<?php
get_footer();
