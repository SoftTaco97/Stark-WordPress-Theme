<?php 
/**

* Template Name: Blog Posts Highlights

*/

get_header(); ?>

<!-- BLOG STARTS HERE -->
<div class="container">

    <div class="row">

        <div class="blog-main">

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
    <div class="row">
        <?php
    $args = array(
       'orderby' => 'rand',
	   'posts_per_page' => 3,
    );
    $recent_posts = new WP_Query( $args );
?>
            <?php if ( $recent_posts->have_posts() ) : ?>
            <?php while ($recent_posts->have_posts()) : $recent_posts->the_post(); ?>
            <div class="col-sm-4 postimage">
                <a href="<?php the_permalink() ?>">
                <?php if ( has_post_thumbnail() ) {
                        the_post_thumbnail();
                    }
                   else {
                       echo '<img src="' . 
                       get_template_directory_uri() . 
                        '/images/placeholder-image.jpg" alt="Placehoder image">';
                       
                   }
                    ?>
                </a>
                <a href="<?php the_permalink() ?>">
                    <?php the_title(); ?>
                </a>
            </div>
            <!-- /.cols -->
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            <?php else : ?>
            <div class="col-xs-12 news-section">
                <p>
                    <?php _e( 'No posts have been created yet.<br>
Create posts and be sure to give each post a featured image.', 'stark'); ?></p>
            </div>
            <!-- /.col -->
            <?php endif; ?>
    </div>
</div>
<!-- /.container -->
<?php get_footer(); ?> s
