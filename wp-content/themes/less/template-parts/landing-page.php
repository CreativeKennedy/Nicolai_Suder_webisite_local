<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


	<?php
    $enable_vc = get_post_meta(get_the_ID(), '_wpb_vc_js_status', true);
    if (!$enable_vc) {
        ?>








	<header class="entry-header">


		<div class="container-fluid pl-0 pr-0">
			<?php if (have_rows('Header-Section')): ?>
				<?php while (have_rows('Header-Section')): the_row(); ?>
					<?php if (get_row_layout() == 'section-header'): ?>
						<?php get_template_part('template-parts/layout/' . get_row_layout()) ?>
						<?php endif; ?>
		<?php endwhile; ?>
		<?php endif; ?>
	</div>
	</header><!-- .entry-header -->




	<?php
    } ?>

	<div class="entry-content">




		<section class="container-fluid">



	</section>

	<section class="container-fluid">

<!-- body sections -->
		<?php if (have_rows('body_section')): ?>
		<?php while (have_rows('body_section')): the_row(); ?>
		<?php if (get_row_layout() == 'section-features'): ?>
		<?php get_template_part('template-parts/layout/' . get_row_layout()) ?>
		<?php endif; ?>

		<?php if (get_row_layout() == 'section-projects-one'): ?>
		<?php get_template_part('template-parts/layout/' . get_row_layout()) ?>
		<?php endif; ?>

		<?php if (get_row_layout() == 'section-projects-two'): ?>
		<?php get_template_part('template-parts/layout/' . get_row_layout()) ?>
		<?php endif; ?>

		<?php if (get_row_layout() == 'section-projects-three'): ?>
		<?php get_template_part('template-parts/layout/' . get_row_layout()) ?>
		<?php endif; ?>

		<?php endwhile; ?>
		<?php endif; ?>

		<?php if (have_rows('card-section')): ?>
		<?php while (have_rows('card-section')): the_row(); ?>
		<?php if (get_row_layout() == 'services-section'): ?>
		<?php get_template_part('template-parts/layout/services/' . get_row_layout()) ?>


		<?php endif; ?>
		<?php endwhile; ?>
		<?php endif; ?>

	</section>

		<?php
            the_content();

            wp_link_pages(array(
                'before' => '<div class="page-links">' . esc_html__('Pages:', 'wp-bootstrap-starter'),
                'after'  => '</div>',
            ));
        ?>
	</div><!-- .entry-content -->

	<?php if (get_edit_post_link() && !$enable_vc) : ?>
	<footer class="entry-footer">
		<?php
                edit_post_link(
            sprintf(
                        /* translators: %s: Name of current post */
                        esc_html__('Edit %s', 'wp-bootstrap-starter'),
                the_title('<span class="screen-reader-text">"', '"</span>', false)
                    ),
            '<span class="edit-link">',
            '</span>'
                );
            ?>
	</footer><!-- .entry-footer -->

	<?php endif; ?>
</article><!-- #post-## -->
