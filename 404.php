<?php
/**
 * The main template file
 *
 * @package PorchyTenUpTheme
 */

get_header();

$page              = get_page_by_path( 'four-oh-four' );
$maybe_404_content = ( ! empty( $page ) ) ? get_post_field( 'post_content', $page ) : false;

?>

	<div class="entry-content">
		<?php if ( ! empty( $maybe_404_content ) ) : ?>
			<?php echo wp_kses_post( $maybe_404_content ); ?>
		<?php else : ?>
			<h1>I&rsquo;m sorry, the page you&rsquo;re looking for is not here.</h1>
		<?php endif; ?>
	</div>

<?php
get_footer();