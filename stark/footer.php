    <!-- FOOTER STARTS HERE -->
    <footer>
        <div class="color"></div>
        <!-- /.color -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-2 col-sm-offset-1 contact">
                   <?php get_sidebar('footer'); ?>
                </div>
                <!-- /.col -->
                <div class="col-sm-2 col-sm-offset-2 social">
                    <?php get_sidebar('footer-center'); ?>
                </div>
                <!-- /.col -->
                <div class="col-sm-2 col-sm-offset-2 bottomnav">
                    <?php
                    wp_nav_menu( array(
                        'menu'              => 'secondary',
                        'theme_location'    => 'secondary',
                        'depth'             => 2,
                        'container'         => false,
                        'menu_class'        => '',
                               ) );
                    ?>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
        <div class="container-fluid">
            <div class="row">
                <div class="bottomfooter">
                    <h2><?php _e( 'Stark WordPress Theme &nbsp;&copy;&nbsp;', 'stark'); ?><?php echo date('Y'); ?></h2>
                </div>
                <!-- /.bottomfooter -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </footer>
<?php wp_footer(); ?>
</body>

</html>