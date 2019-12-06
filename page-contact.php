<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 * Template Name: Page contact
*Template Post Type: post, page, product
 *
 * @package storefront
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="row">
				<div class="col-md-3">
					<?php
					while ( have_posts() ) :
						the_post();
						

						do_action( 'storefront_page_before' );

						get_template_part( 'content', 'page' );

						/**
						 * Functions hooked in to storefront_page_after action
						 *
						 * @hooked storefront_display_comments - 10
						 */
						do_action( 'storefront_page_after' );

					endwhile; // End of the loop.
					?>
				</div>
				<div class="col-md-9">
				<?php //echo do_shortcode( '[contact-form-7 id="64" title="Formulaire de contact 1"]' ); ?>
				</div>	

			</div>
			<div class="row">
				<div class="col-md-12" id="map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11088.591412789747!2d4.705685549999999!3d45.98827709999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4851a5c6d0df1%3A0x7f34761798c1574a!2sAuchan%20SUPERMARCHE%20VILLEFRANCHE!5e0!3m2!1sfr!2sfr!4v1575216103202!5m2!1sfr!2sfr" width="1150" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
				</div>
			</div>		

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
do_action( 'storefront_sidebar' );
get_footer();
