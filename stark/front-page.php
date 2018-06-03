<?php get_header('alt'); ?>
<!-- Main starts here -->
<main>
    <!-- section#welcome -->
    <section id="welcome">
        <!-- colored bar to seperate sections -->
        <div class="row color">
        </div>
        <!-- /.row color -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <h2>
                    <?php the_title(); ?>
                </h2>
                </div>
                <!-- /.col -->
            </div>
                <div class="row">
                    <div class="col-sm-8">
                        <?php the_content(); ?>
                    </div>
            <?php endwhile; else : ?>
            <p>
                <?php _e( 'Sorry, no posts matched your criteria.', 'stark' ); ?>
            </p>
            <?php endif; ?>
                <div class="col-sm-4 offset-">
                    <img src="<?php echo get_theme_mod('stark_main_image'); ?>" alt="Main Image">
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /section#welcome -->


    <!-- section#add -->
    <section id="add">
        <!-- Colored bar -->
        <div class="row color">
        </div>
        <!-- /.row color -->
        <div class="container-fluid">
            <div class="row testimonial">
                <div class="col-sm-10">
                    <a href="<?php echo get_theme_mod('call_to_action_link'); ?>"><?php echo get_theme_mod('call_to_action_title'); ?></a>
                </div>
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-sm-4 col-sm-offset-1 blog">
                    <?php get_sidebar('main-left'); ?>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 col-sm-offset-2 socialfeed">
                    <?php get_sidebar('main-right'); ?>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /section#add -->
</main>
<!-- MAIN ENDS HERE -->
<?php get_footer(); ?>
