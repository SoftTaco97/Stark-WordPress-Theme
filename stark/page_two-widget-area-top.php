<?php

/*
* Template Name: Two Widget Area on Top
*/

get_header(); ?>

    <!-- BLOG STARTS HERE -->
    <div class="container">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="row">
            <h1 class="blog-post-title">
                <?php the_title(); ?>
            </h1>
        </div>
        <!-- /.row -->
        <div class="row">
            <!-- SIDEBAR STARTS HERE -->
            <div class="col-sm-3 col-sm-offset-1 blog-sidebar contact-sidebar one">
                <?php get_sidebar('top-left'); ?>
            </div>
            <!-- /.blog-sidebar -->
            <!-- SIDEBAR STARTS HERE -->
            <div class="col-sm-7 col-sm-offset-1 contact-sidebar">
                <?php get_sidebar('top-right'); ?>
            </div>
            <!-- /.blog-sidebar -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="blog-post">
                <?php the_content(); ?>
            </div>
            <!-- /.blog-post -->
        </div>
        <!-- /.row -->
        <?php endwhile; else : ?>
        <p>
            <?php _e( 'Sorry, no posts matched your criteria.', 'stark' ); ?>
        </p>
        <?php endif; ?>
    </div>
    <!-- /.container -->
    <?php get_footer(); ?>

    
