
		</div><!-- /main-content -->
		<!-- footer -->
		<div class="wrapper">
			<footer class="footer clear" role="contentinfo">
					<div id="footer-newsletter">
						<div class="intitule_newsletter"><p><?php echo get_option('newsletter_text'); ?></p></div>
						<div class="button">
							<div class="wp-block-button">
								<a class="wp-block-button__link" href="/recevoir-des-informations-sur-nos-actions">S'inscrire</a>
							</div>
						</div>
					</div>
			    <div id="footer-menu">
					<nav class="nav" role="navigation">
						<?php wp_nav_menu( array( 'theme_location' => 'footer-menu','link_before' => '<span class="item-nav-text">', 'link_after' => '</span>', ) ); ?>
					</nav>
				</div>
				<!-- copyright -->
				<p class="copyright">
					&copy; <?php echo esc_html( date( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?> - Tous droits réservés
				</p>
				<!-- /copyright -->

			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>


	</body>
</html>
