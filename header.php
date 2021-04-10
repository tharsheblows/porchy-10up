<?php
/**
 * The template for displaying the header.
 *
 * @package PorchyTenUpTheme
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<?php wp_body_open(); ?>
		<header class="site-header">
			<h1><a href="/" class="blank"><img src="<?php PorchyTenUpTheme\TemplateTags\the_logo(); ?>" width="150px" alt="Porchy Ltd"></a></h1>
			<?php
				wp_nav_menu(
					[
						'menu'       => 'top',
						'menu_class' => 'horizontal-list no-bullets alignright hide-small-width',
						'container'  => 'nav',
					]
				);
				// Put mobile menu here.
			?>
		</header>
