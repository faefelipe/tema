<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Felipe
 */

get_header(); ?>

<div class="col-xs-12 col-md-8">

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php woocommerce_content(); ?>
		</main>
	</div>

</div>

<div class="col-xs-12 col-md-4">
	<?php get_sidebar(); ?>
</div>

<?php get_footer();
