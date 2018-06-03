<?php
/**
*
* Main Sidebar  
*
*/
if ( is_active_sidebar('main-sidebar') ) : ?>
    <?php dynamic_sidebar('main-sidebar'); ?>
    <?php else: ?>
    <div class="sidebar-module">
        <h4><?php _e( 'Add Your Widgets to this Main Sidebar', 'stark' ); ?></h4>
    </div>
<?php endif; ?>
