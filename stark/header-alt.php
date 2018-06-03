<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <!-- START OF HEADER -->
    <header>
        <!-- START OF NAV -->
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="color"></div>
            <div class="container-fluid navtop">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only"><?php _e('Toggle navigation', 'stark'); ?></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
                    </button>
                    <?php if ( display_header_text() ) : ?>
                        <?php if(has_custom_logo()) : ?>
                            <?php the_custom_logo(); ?>
                        <?php else : ?>
	                       <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
		                  <?php echo get_bloginfo( 'name' ); ?>
                            </a>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
                <!-- /.navbar-header -->
                <div id="navbar" class="navbar-collapse collapse">
                    <?php
                        wp_nav_menu( array(
                            'menu'              => 'primary',
                            'theme_location'    => 'primary',
                            'depth'             => 2,
                            'container'         => false,
                            'menu_class'        => 'nav navbar-nav navbar-right',
                            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                            'walker'            => new WP_Bootstrap_Navwalker())
                                   );
                    ?>
                </div>
                <!--/#navbar -->
            </div>
            <!-- /.container-fluid -->
        </nav>
        <!-- END OF NAV -->
        <!-- FEATURE SECTION -->
        <div class="container-fluid">
            <div class="row feature">
                <img src="<?php header_image(); ?>" alt="Custom Hero Image">
                <div class="feature-text col-xs-10 col-md-8 col-lg-6 col-xs-offset-1 col-md-offset-2 col-lg-offset-3">
                    <p><?php echo html_entity_decode(get_bloginfo('description')); ?></p>
                </div>
                <!-- /.feature-text -->
            </div>
            <!-- /.row .feature -->
        </div>
        <!-- /.container-fluid -->
    </header>
    <!-- END OF HEADER -->