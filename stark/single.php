<?php get_header(); ?>

<!-- BLOG STARTS HERE -->
<div class="container">

    <div class="row">

        <div class="col-sm-7 blog-main">

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class( 'blog-post' ); ?>>
                <h1 class="blog-post-title">
                    <?php the_title(); ?>
                </h1>
                <p class="blog-post-meta">
                    <?php echo get_the_date(); ?>

                    <?php _e( 'by', 'stark' ); ?>

                    <?php the_author_posts_link(); ?><br>
                    <?php get_template_part( 'content', 'comments' ); ?>
                    <?php _e('','stark'); ?>
                    <?php the_category(', ');?>
                </p>

                <?php the_content(); ?>
                <?php
                    $defaults = array(
                        'before'           => '<p class="pagination">',
                        'after'            => '</p>',
                        'link_before'      => '<span>',
                        'link_after'       => '</span>',
                        'next_or_number'   => 'number',
                        'separator'        => ' &nbsp;&nbsp;',
                        'nextpagelink'     => __( 'Next page' ),
                        'previouspagelink' => __( 'Previous page' ),
                        'pagelink'         => '%',
                        'echo'             => 1
                                        );
                wp_link_pages( $defaults ); 
                ?>
                    <p>
                        <?php the_tags();?>
                    </p>
            </article>
            <!-- /.blog-post -->
            <?php if ( get_the_author_meta( 'description' ) != '' ) : ?>
            <!-- AUTHOR SECTION -->
            <div id="author-meta">
                <?php if ( function_exists( 'get_avatar' ) ) {
			echo get_avatar( get_the_author_meta( 'email' ), '80' );} ?>
                <div class="about-author">
                    <p>
                    <?php _e( 'About', 'stark' ); ?>
                    <?php the_author_posts_link(); ?>
                    </p>
                </div>
                <p>
                    <?php the_author_meta( 'description' ) ?>
                </p>
            </div>
            <!-- /author-meta -->
            <?php endif; // no description, no author's meta ?>
            <?php endwhile; else : ?>
            <p>
                <?php _e( 'Sorry, no posts matched your criteria.', 'stark' ); ?>
            </p>
            <?php endif; ?>
            <nav>
                <ul class="pager">
                    <li>
                        <?php previous_post_link('%link', '&larr; Previous post in category', TRUE); ?>
                    </li>
                    <li>
                        <?php next_post_link( '%link', 'Next post in category &rarr;', TRUE); ?>
                    </li>
                </ul>
            </nav>
            <?php
                if ( comments_open() ) {
                  echo '<div class="well">';
                  comments_template();
                  echo '</div>';
                }
            ?>
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
