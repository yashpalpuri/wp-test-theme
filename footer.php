<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
			<footer id="site-footer" role="contentinfo" class="header-footer-group">
				<div class="footer-inner">
					<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
						<div id="footer-sidebar">
							<?php dynamic_sidebar( 'footer-1' ); ?>
						</div>
					<?php endif; ?>
				</div>
			</footer><!-- #site-footer -->
		<?php wp_footer(); ?>
	</body>
</html>
