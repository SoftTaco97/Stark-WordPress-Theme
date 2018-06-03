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
                <p><?php the_post_thumbnail(); ?></p>
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

        </div>
        <!-- /.blog-main -->

        <!-- SIDEBAR STARTS HERE -->
        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
            <?php get_sidebar(); ?>
        </div>
        <!-- /.blog-sidebar -->
        </div>
    </div>
    <!-- /.container -->
    <?php get_footer(); ?>