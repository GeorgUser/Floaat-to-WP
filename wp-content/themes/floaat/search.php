<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 * @package Floaat
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<div id="main" class="page__container__all" role="main">

		<?php
		if ( have_posts() ) :
			?>

			<header class="page-header">
				<?php /* translators: %s: search term */ ?>
				<h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'floaat' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content');

			endwhile;

			the_posts_navigation();

			else :

				get_template_part( 'template-parts/content', 'none' );

		endif;
			?>

		</div><!-- #main -->
	</section><!-- #primary -->

<?php
get_sidebar();
get_footer();
