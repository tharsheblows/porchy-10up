<?php
/**
 * The template for displaying the footer.
 *
 * @package PorchyTenUpTheme
 */

?>
	<footer class="site-footer">
		<ul class="no-bullets">
			<li>
				<a href="https://profiles.wordpress.org/tharsheblows/" class="center-contents">
					<?php PorchyTenUpTheme\TemplateTags\the_company_logo( 'wordpress' )?>
					<span class="margin-left">tharsheblows on WordPress</span>
				</a>
			</li>
			<li>
				<a href="https://www.linkedin.com/in/jjjay/" class="center-contents">
					<?php PorchyTenUpTheme\TemplateTags\the_company_logo( 'linkedin' )?>
					<span class="margin-left">Mary J Jay on LinkedIn</span>
				</a>
			</li>
			<li>
				<a href="https://twitter.com/tharsheblows" class="center-contents">
					<?php PorchyTenUpTheme\TemplateTags\the_company_logo( 'twitter' )?>
					<span class="margin-left">tharsheblows on Twitter</span>
				</a>
			</li>
		</ul>
		<ul class="no-bullets alignright">
			<li>Porchy Ltd is a company registered in England, no. 12035925</li>
			<li>VAT Registration no. 331196421</li>
			© 2019 - <?php echo date_format( new DateTime(), 'Y' ); ?>
		</ul>
	</footer>
	<?php wp_footer(); ?>
	</body>
</html>
