<?php
/**
 * The template for displaying all single posts.
 *
 * @package yellowbird1
 */

get_header(); ?>
<div class="container">
     <div class="row">
	<div id="primary" class="col-lg-12 content-area">
	
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>

			<?php //the_post_navigation(); ?>

		<?php endwhile; // end of the loop. ?>
                <br/><br/>
		</main><!-- #main -->
	</div><!-- #primary -->
     </div>
</div>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>