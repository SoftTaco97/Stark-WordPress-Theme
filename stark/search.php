<?php get_header(); ?>

<!-- BLOG STARTS HERE -->
<div class="container">
    <div class="row">

        <?php
// Display optional category description
        if ( category_description() ) : ?>
            <div class="archive-meta">
                <?php echo category_description(); ?>
            </div>
            <?php endif; ?>
            <div class="col-sm-7 blog-main">

                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="row blog-post">
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <?php if ( has_post_thumbnail() ){
                    echo '<div class="col-sm-4">' . '<a href= '. get_permalink() . '>' . get_the_post_thumbnail() . '</a></div>';
                    }
                    ?>
                        <div <?php if ( has_post_thumbnail() ){ echo 'class="col-sm-8">'; } else { echo 'class="col-xs-12">'; } ?>
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
                        <!-- /.col -->
                    </article>
                </div>
                <!-- /.row.blog-post -->
                <!-- /.blog-post -->
                <?php endwhile; else : ?>
                <p>
                    <?php _e( 'Sorry, no posts included the words you typed in the search.', 'stark' ); ?>
                </p>
                <p><?php _e( 'Try the search form again, or try checking in one of these categories:', 'stark' ); ?></p>
                <ul class="searchcatlist">
                    <?php wp_list_categories(array(
                'title_li' => __( '' ),
                'orderby' => 'title',
                'order' => 'ASC',
                ));
                ?>
                </ul>
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
