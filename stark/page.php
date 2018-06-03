<?php get_header(); ?>

<!-- BLOG STARTS HERE -->
<div class="container">

    <div class="row">

        <div class="col-sm-7 blog-main">

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <div class="blog-post">
                <h2 class="blog-post-title">
                    <?php the_title(); ?>
                </h2>
                <?php the_content(); ?>

            </div>
            <!-- /.blog-post -->

            <?php endwhile; else : ?>
            <p>
                <?php _e( 'Sorry, no posts matched your criteria.', 'stark' ); ?>
            </p>
            <?php endif; ?>

        </div>
        <!-- /.blog-main -->


        <!-- SIDEBAR STARTS HERE -->
        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
            <?php get_sidebar(); ?>
        </div>
        <!-- /.blog-sidebar -->
    </div>
    <!-- /.row -->
</div>
<!-- /.container -->
    <?php get_footer(); ?>
