<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package AML_Global
 */

get_header();
?>
	
	<section id="intro-info">
		<div class="container">
			<p class="intro">
				Originally, Asia Market Link Consultancy & Trading (www.asiamarketlink.com) a trading company was incorporated in Singapore in 2004 for consultancy & trading of spare parts and related supply to the diesel power plants and utilities companies in the regional markets.
			</p>
		</div>
	</section>
	
	<section id="our-mission">
		<div class="mission">
			<div class="image">
				<img class="image-mission" src="<?php echo get_template_directory_uri().'/images/img_02-1.jpg'; ?>">
			</div>
			<div class="short-brief">
				<h1>OUR MISSION</h1>
				<p>We seek to be a reliable and trusted global business partner for our customer and business partners.</p>
				<p>To serve our valued customers by creating value added services, competitive pricing and quality products to meet our customers’ operational requirement.</p>
				<p>To work with our international principals and business partners to provide the most comprehensive   products and services to meet the requirement of our customers. </p>
				<button class="btn"><a href="#">Read more</a></button>
			</div>
		</div>
	</section>

	<section id="our-international-pather">
		<div class="container">
			<div class="content">
				<h1>Our Global Principals and Partners</h1>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
			</div>
			<div class="grid-image">
				<div><img src="<?php echo get_template_directory_uri().'/images/logo/1-1.png'; ?>" alt=""></div>
				<div><img src="<?php echo get_template_directory_uri().'/images/logo/1-1.png'; ?>" alt=""></div>
				<div><img src="<?php echo get_template_directory_uri().'/images/logo/1-1.png'; ?>" alt=""></div>
				<div><img src="<?php echo get_template_directory_uri().'/images/logo/1-1.png'; ?>" alt=""></div>
				<div><img src="<?php echo get_template_directory_uri().'/images/logo/1-1.png'; ?>" alt=""></div>
				<div><img src="<?php echo get_template_directory_uri().'/images/logo/1-1.png'; ?>" alt=""></div>
				<div><img src="<?php echo get_template_directory_uri().'/images/logo/1-1.png'; ?>" alt=""></div>
				<div><img src="<?php echo get_template_directory_uri().'/images/logo/1-1.png'; ?>" alt=""></div>
			</div>
		</div>
	</section>

	<section id="scope-of-supply">
		<div class="container">
			<div class="inner">
				<div class="content">
					<h1>SCOPE OF SUPPLY</h1>
					<p>Our scope of supply includes equipment, spare parts, related services and solutions from major international makers and suppliers for the utility markets.</p>
					<p>
						Supply of spare parts for various makes diesel & gas engines, all auxiliary systems & equipment related to the power plant applications.
					</p>
					<p>
						These include spare parts for diesel & gas engines, its auxiliary systems including turbocharger, fuel & lube oil separators, engine governor, lube oil cooler, charge air cooler, heater, air compressor, pump, automation system, electrical and electronic systems.
					</p>
					<button class="btn">
						<a href="#">Read more</a>
					</button>
				</div>
				<div class="images">
					<div>
						<div><img src="<?php echo get_template_directory_uri().'/images/reciprocating-engine-for-power-generation-introduction-2.jpg'; ?>" alt=""></div>
						<div><img src="<?php echo get_template_directory_uri(). '/images/12.jpg'; ?>" alt=""></div>
					</div>
					<div><img src="<?php echo get_template_directory_uri(). '/images/12.jpg'; ?>" alt=""></div>
				</div>

			</div>
		</div>
	</section>


<?php
get_footer();
