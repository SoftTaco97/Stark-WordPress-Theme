<?php get_header(); ?>

<!-- BLOG STARTS HERE -->
<div class="container">

    <div class="row">

        <div class="col-sm-7 blog-main">
            <h2><?php _e('Page Not Found', 'stark'); ?></h2>
            <p><?php _e("We're sorry, we can't find what you're looking for.", "stark"); ?></p>
            <p><?php _e('Please use the menu above, or the search form below to find what you are looking for.', 'stark'); ?></p>
            <div class="well">
            <?php get_search_form(); ?>
            </div>
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
