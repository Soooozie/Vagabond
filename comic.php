<?php
/**
 * The template for displaying comics.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package LeL
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<?php
			if ( have_posts() ):
				while (have_posts() ): the_post();

				get_template_part( 'template-parts/content', 'comic' );

			endwhile;

		else:

			get_template_part('no-results', 'index');
		endif;
			?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php
get_footer();?>
