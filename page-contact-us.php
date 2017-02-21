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
                <div class="container">
                    <div class="row main-content">
                        <?php
                        /**
                         * @todo: Should be taken from custom fields rather than hardcoded shortcodes
                         */
                        ?>
                        <div class="col l5 s12"><?php echo do_shortcode('[wpgmza id="1"]'); ?></div>
                        <div class="col offset-l1 l6 s12">
                            <div style="padding: 20px">
                                <?php echo do_shortcode('[contact-form-7 id="3" title="Contact form 1"]'); ?>
                            </div>
                        </div>
                    </div>
                </div>
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