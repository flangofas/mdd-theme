<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Material_Design_Dentistry
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <div class="content-area">
                <div class="container">
                    <div class="row">
                        <div class="col s12">
                            <div class="main-content breathing-space">
                            <?php
                            while ( have_posts() ) : the_post();
                                if (has_post_thumbnail()) : ?>
                                    <img class="responsive-img" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_post_thumbnail_caption() ?>">
                                <?php
                                endif;
                                the_content();
                            endwhile; // End of the loop.
                            ?>
                            </div>
                        </div><!-- col -->
                    </div><!-- row -->
                </div><!-- content-area -->
            </div><!-- container -->
        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_sidebar();
get_footer();
