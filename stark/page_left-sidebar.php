<?php 
/**
* Template Name: Left Sidebar
*/

get_header(); ?>

<!-- BLOG STARTS HERE -->
<div class="container">

    <div class="row">
        <!-- Sidebar -->
         <div class="col-sm-3 blog-sidebar">
            <?php get_sidebar(); ?>
        </div>
        <!-- /.blog-sidebar -->
        
        <div class="col-sm-7 col-sm-offset-1 blog-main">

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
    </div>
    <!-- /.row -->
</div>
<!-- /.container -->
    <?php get_footer(); ?>