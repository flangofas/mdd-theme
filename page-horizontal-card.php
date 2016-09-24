<?php
/**
 * Template Name: Horizontal Card
 * The template for displaying a horizontal card.
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
                <?php get_template_part( 'template-parts/horizontal', 'card' ); ?>
                </div>
            <?php
                // If comments are open or we have at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;

            endwhile; // End of the loop.
            ?>
        </main><!-- #main -->
    </div><!-- #primary -->
<?php
get_footer();
?>