<?php
/**
 * The archive file.
 *
 * @package PorchyTenUpTheme
 */

get_header(); ?>

	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
		<div class="entry-content border-left margin-bottom">
			<header>
				<div class="meta-info a--margin-left smaller-font">
					<time pubdate datetime="<?php echo get_the_date( 'Y-m-d' ); ?>" title="<?php echo PorchyTenUpTheme\TemplateTags\post_date_formatted( get_post() ); ?>">
						<?php echo PorchyTenUpTheme\TemplateTags\post_date_formatted( get_post() ); ?>
					</time>
				</div>
				<h2 class="archive--entry-content--h2"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			</header>
			<?php the_excerpt(); ?>
		</div>
		<?php endwhile; ?>
	<?php endif; ?>

<?php
get_footer();
