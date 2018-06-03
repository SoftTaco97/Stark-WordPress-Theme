<?php
/*
*
* Main left Sidebar
*
*/
if ( is_active_sidebar('main-left-sidebar') ) : ?>
    <?php dynamic_sidebar('main-left-sidebar'); ?>
    <?php else: ?>
    <div class="sidebar-module">
        <?php
        $args = array(
            'orderby' => 'date',
            'posts_per_page' => 3,
            'category_name' => 'tips');
    $recent_posts = new WP_Query( $args );?>
            <?php if ( $recent_posts->have_posts() ) : ?>
            <?php while ($recent_posts->have_posts()) : $recent_posts->the_post(); ?>
            <div class="col-sm-12">
                <p>
                <br>
                <a href="<?php the_permalink() ?>">
                    <?php the_post_thumbnail(); ?>
                </a>
                </p>
                <p>
                    <a href="<?php the_permalink() ?>">
                        <?php the_title(); ?>
                    </a>
                </p>
            </div>
            <!-- /.cols -->
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            <?php else : ?>
            <div class="col-xs-12 news-section">
                <p>
                    <?php _e( 'Add widgets to this sidebar.
                                Or create posts and add them to the category: "tips" for them to be displayed here.
                                Make sure to give the post a featured image', 'stark'); ?>
                </p>
            </div>
            <!-- /.col -->
            <?php endif; ?>
    </div>
    <?php endif; ?>
