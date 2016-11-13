<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Material_Design_Dentistry
 */

?>
	<footer class="page-footer">
		<div class="container">
			<div class="row">
				<div class="col l4 s12">
					<h6>NAVIGATION LINKS</h6>
					<?php
						$args = [
							'menu' => 'Footer left',
							'theme_location' => 'footer-left',
							'menu_class' => 'menu-footer-left'
						];
						wp_nav_menu( $args );
					?>
				</div>
				<div class="col l4 s12">
					<h6>CONTACT US</h6>
					<p><i class="tiny material-icons">location_on</i> Agias Zonis 29, 1st Floor</p>
					<p><i class="tiny material-icons">call</i> 25 55 8899</p>
					<p><i class="tiny material-icons">print</i> 25 55 8899</p>
					<p><i class="tiny material-icons">email</i> <a class="grey-text text-darken-4" href="mailto:info@drleonidou.com">info@drleonidou.com</a></p>
				</div>
				<div class="col l4 s12">
					<h6>SOCIAL MEDIA</h6>
					<?php
						$args = [
							'menu' => 'Footer social media',
							'theme_location' => 'footer-social-media',
							'menu_class' => 'list-inline menu-footer-social-media'
						];
						wp_nav_menu( $args );
					?>
					<div class="fb-like" data-href="https://www.facebook.com/Dr.Leonidou" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
				</div>
			</div>
		</div>
		<div class="footer-copyright">
			<div class="container grey-text text-darken-4">
			© <?php echo date('Y') ?> Copyright Text
			<a class="grey-text text-darken-4 right" href="#!">Developed by Antonis Flangofas</a>
			</div>
		</div>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
