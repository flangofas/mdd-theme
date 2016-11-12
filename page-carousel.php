<?php
/**
 * Template Name: Carousel
 * The template for displaying a gallery.
 *
 * @package Material_Design_Dentistry
 *
 */
get_header();
?>
    <div id="primary">
        <main id="main" class="site-main" role="main">
        <?php
        while ( have_posts() ) : the_post();
            get_template_part( 'template-parts/main', 'title' );
        ?>
            <div class="content-area">
                <div class="container">
                    <div class="row">
                        <div class="col s12">
                            <div class="main-content breathing-space">
                                <?php the_content(); ?>
                                <?php get_template_part( 'template-parts/carousel' ); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        endwhile; // End of the loop.
        ?>
        </main><!-- #main -->
    </div><!-- #primary -->
<?php
get_footer();
?>