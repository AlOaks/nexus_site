<?php
/**
 * The template for displaying the footer.
 *
 * @package Nexus_Theme
 */

?>

			</div><!-- #content -->

		<footer id="colophon" class="site-footer" role="contentinfo">


			<?php get_sidebar();?>


		<div class="footer_hidden--container">
			<div class="footer__site-info hidden">
				<div class="footer_hidden_anchor">
					<a href="<?php echo home_url(); ?>">© Copyright - Nexus Exchange 2017</a>			
				</div>
				
				<div class="footer__desktop--nav">

					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>

				</div>
			</div>
		</div>
			<?php wp_footer(); ?>
		</footer>
	</body>
</html>
