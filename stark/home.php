<?php get_header('alt'); ?>

<!-- BLOG STARTS HERE -->
<div class="container">
    <div class="blog-header">
        <h1 class="blog-title contacttitle"><?php the_title(); ?></h1>
    </div>

    <div class="row">

        <div class="col-sm-7 blog-main">

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <div class="blog-post">
                <h2 class="blog-post-title">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                </h2>
                <p class="blog-post-meta">
                    <?php echo get_the_date(); ?>
                    <?php _e( 'by', 'snark' ); ?>
                    <a href="#">
                        <?php the_author(); ?>
                    </a><br>
                    <?php get_template_part('content', 'comments'); ?>
                </p>

                <?php the_excerpt(); ?>

                <ul class="pager">
                    <li><a href="<?php echo get_permalink(); ?>">Read More</a></li>
                </ul>

            </div>
            <!-- /.blog-post -->

            <?php endwhile; else : ?>
            <p>
                <?php _e( 'Sorry, no posts matched your criteria.', 'stark' ); ?>
            </p>
            <?php endif; ?>
            
            <nav>
                <ul class="pager">
                    <li>
                        <?php next_posts_link('&larr; Older Posts'); ?>
                    </li>
                    <li>
                        <?php previous_posts_link('Newer Posts &rarr;'); ?>
                    </li>
                </ul>
            </nav>

        </div>
        <!-- /.blog-main -->

        <!-- SIDEBAR STARTS HERE -->
        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
            <?php get_sidebar(); ?>
        </div>
        <!-- /.blog-sidebar -->
    </div>
    <!-- /.container -->
</div>
    <?php get_footer(); ?>
