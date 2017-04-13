<?php
/**
 * Template Name: Blog Template
* Template Post Type: blog
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="header-hero">
			  <div class="hero-img">
			  </div>
			  <div class="post-title yellow">
			    <h1>Choosing the perfect charcoal grill</h1>
			  </div>
			</div>
			<main>
			  <span> SUSAN Richie</span>
			  <span> 11 June 2017</span>
			  <p>Hydroderm is the highly desired anti-aging cream on the block. This serum restricts the occurrence of early aging sings on the skin and keeps the skin younger, tighter and healthier. It reduces the wrinkles and loosening of skin. This cream nourishes the skin and brings back the glow that had lost in the run of hectic years.</p>
			  <div class="quotes">
			    <img src="" alt="quote">
			    <div>Promotional Advertising Specialty You Ve Waited Long Enough</div>
			    <span class="speaker"> Jame Marvin </span>
			    <img src="" alt="quote">
			  </div>
			  <p>HThe most essential ingredient that makes hydroderm so effective is Vyo-Serum, which is a product of natural selected proteins. This concentrate works actively in bringing about the natural youthful glow of the skin. It tightens the skin along with its moisturizing effect on the skin. The other important ingredient, making hydroderm so effective is “marine collagen” which along with Vyo-Serum helps revitalize the skin. Vyo-Serum along with tightening the skin also reduces the fine lines indicating aging of skin. Problems like dark circles, puffiness, and crow’s feet can be control from the strong effects of this serum.
			Collagen is nothing but a protein that acts as a protective shield for the skin which is has basically a high molecular weight that helps in staining moisture in skin. The presence of collagen in hydroderm has made the serum all the more effective since it is supplied to the skin directly, and stops clogging of pores of skin.</p>
			</main>
			<aside class="share-buttons">
			  <span class="facebook"> Facebook</span>
			  <span class="twitter"> Twitter</span>
			  <span class="email"> Email</span>
			  <span class="read-later">read later </span>
			</aside>

			<div class="related-post row">
			  <div class="previous-post">
			    <h4></h4>
			    <p></p>
			    <span class="author"></span>
			  </div>
			  <div class="next-post">
			    <h4></h4>
			    <p></p>
			    <span class="author"></span>
			  </div>

			</div>

			<?php
                /* Start the Loop */
                while (have_posts()) : the_post();

                    get_template_part('template-parts/post/content', get_post_format());

                    // If comments are open or we have at least one comment, load up the comment template.
                    if (comments_open() || get_comments_number()) :
                        comments_template();
                    endif;

                    the_post_navigation(array(
                        'prev_text' => '<span class="screen-reader-text">' . __('Previous Post', 'twentyseventeen') . '</span><span aria-hidden="true" class="nav-subtitle">' . __('Previous', 'twentyseventeen') . '</span> <span class="nav-title"><span class="nav-title-icon-wrapper">' . twentyseventeen_get_svg(array( 'icon' => 'arrow-left' )) . '</span>%title</span>',
                        'next_text' => '<span class="screen-reader-text">' . __('Next Post', 'twentyseventeen') . '</span><span aria-hidden="true" class="nav-subtitle">' . __('Next', 'twentyseventeen') . '</span> <span class="nav-title">%title<span class="nav-title-icon-wrapper">' . twentyseventeen_get_svg(array( 'icon' => 'arrow-right' )) . '</span></span>',
                    ));

                endwhile; // End of the loop.
            ?>

		</main><!-- #main -->
	</div><!-- #primary -->
	<?php get_sidebar(); ?>
</div><!-- .wrap -->

<?php get_footer();
