<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_sidebar( 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer" id="colophon">

					<div class="site-info">
						<div class="row">
  							<div class="col-md-6">
								<h5>ABOUT</h5>
								<p class="small">Arondale is a Queensland privately-owned commercial construction company founded in 1989 by Darryl Standfield. We focus on four key verticals: Medical, Education, Retail and Aged Care/Retirement.</p>
								<p class="small">We pride ourselves on delivering complicated projects for our clients on-time, within budget and to a very high level of finish.</p>
							</div>
							<div class="col-md-3">
								<h5>CONTACT</h5>
								<p class="small">Arondale</p>
								<p class="small">Unit 2 / 16 Perrin Place<br>Salisbury, QLD 4107</p>
								<p class="small">enquiries@arondale.com.au</p>
								<p class="small">+61 (07) 3277 8000</p>
							</div>
							<div class="col-md-3">
								<h5>SITE MAP</h5>
								<p class="small"><a href="../#about">About</a></p>
								<p class="small"><a href="../#pojects">Project</a></p>
								<p class="small"><a href="../#careers">Careers</a></p>
								<p class="small"><a href="/terms-of-use">Terms of use</a></p>
								<p class="small"><a href="/privacy-policy">Privacy policy</a></p>
							</div>
						</div>
					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

	<div class="site-rights text-center">
		<div class="container small">
			© Valiant Interiors Pty Ltd (trading as Arondale Interiors) 2018
		</div>
	</div><!-- .site-rights -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>
