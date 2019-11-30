<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package AML_Global
 */

?>
		</div><!-- .container -->
	</div><!-- #content -->

	<section id="footer-contact">
		<div class="container">
			<div class="image-block">
				<img src="<?php echo get_template_directory_uri().'/images/logo.jpg'; ?>" alt="">
			</div>	
			<div class="block-content">
				<p>AML Global Pte Ltd (www.aml-global.com) was incorporated in Singapore in 2014 to cater to the expanding business activities in the regional utility markets. We seek to be a reliable and trusted global business partner for our customer and business partners. To work with our principals and business partners by seeking out the best opportunities to market their products and services to the potential customers in these markets.  </p>
				<p>※ You can see more information by consulting. <button><a href="#">Contact us</a></button></p>
			</div>
		</div>
	</section>

	<footer id="colophon" class="site-footer">
		<div class="container">
			<div class="footer-brand-name">
				<h1>AML Global Pte Ltd</h1>
				<p>Your Reliable & Trusted Global Business Partner</p>
			</div>
			<div class="footer-brand-content">
				<p>51 Bukit Batok Crescent #06-20 Unity Centre Singapore 658077. <span>AML Global Pte Ltd</span> <span>All Rights Reserved</span></p>
			</div>

			<!-- <div class="site-info">
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'aml-global' ) ); ?>">
					<?php
					/* translators: %s: CMS name, i.e. WordPress. */
					printf( esc_html__( 'Proudly powered by %s', 'aml-global' ), 'WordPress' );
					?>
				</a>
				<span class="sep"> | </span>
					<?php
					/* translators: 1: Theme name, 2: Theme author. */
					printf( esc_html__( 'Theme: %1$s by %2$s.', 'aml-global' ), 'aml-global', '<a href="https://plus.google.com/u/0/113587414402501665542">Khan Vuthy</a>' );
					?>
			</div> -->
			<!-- .site-info -->
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
