<?php

get_header();

?>

<div class="content">

    <?php if ( have_posts() ) :

        while ( have_posts() ) : the_post(); ?>

            <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                <div class="post-header section">

                    <div class="post-header-inner section-inner">

                        <?php the_title( '<h1 class="post-title">', '</h1>' ); ?>

                    </div><!-- .post-header-inner section-inner -->

                </div><!-- .post-header section -->


                <div class="post-content">

                    <?php the_content(); ?>

                </div>


            </div><!-- .post -->

            <?php

        endwhile;

    endif; ?>


</div><!-- .content -->

<?php get_footer(); ?>