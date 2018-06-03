<?php get_header(); ?>

<!-- BLOG STARTS HERE -->
<div class="container">
    <div class="row">

        <div class="col-sm-7 blog-main">
            <div class="row product-archive">

                <?php 
                    $args = array(
                        'post_type' => 'stark_product',
                        'posts_per_page' => 6,
                        'orderby' => 'title',
                        'order' => 'ASC'
                    );
                    $product_query = new WP_Query( $args );
                    if ( $product_query->have_posts() ) :
                ?>
                <?php 
                    while ($product_query->have_posts()) :
                        $product_query->the_post(); 
                ?>
                <div id="post-<?php the_ID(); ?>" <?php post_class( 'col-sm-4' ); ?>>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail(); ?>
                    </a>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                </div>
                <!-- /.cols -->
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
                <?php else : ?>
                <div class="col-xs-12">
                    <p>
                        <?php _e('No Products have been created yet. <br>Add that category and create posts.<br>Be sure to give each product a featured image.', 'stark'); ?></p>
                </div>
                <!-- /.col --->
                <?php endif; ?>
            </div>
            <!-- /.row.blog-post -->
            <!-- /.blog-post -->
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
            <form method="get" id="searchform" class="searchform" action="<?php bloginfo('url'); ?>">
                <div>
                    <input type="text" value="<?php the_search_query(); ?>" name="s" id="s" />
                    <input type="hidden" value="stark_product" name="post_type" />
                    <input type="submit" id="searchsubmit" value="Search Products" />
                </div>
            </form>
        </div>
        <!-- /.blog-sidebar -->
    </div>
    <!-- /.row -->
</div>
<!-- /.container -->
<?php get_footer(); ?>
