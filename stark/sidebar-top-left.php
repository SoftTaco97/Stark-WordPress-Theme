<?php
/*
*
* Top Left Sidebar (Two Widget Area Top Page Template)
*
*/
if ( is_active_sidebar('top-left-sidebar') ) : ?>
  <?php dynamic_sidebar('top-left-sidebar'); ?>
<?php else: ?>
  <div class="sidebar-module"> 
    <h4><?php _e( 'Add Your Widgets to this Top Left Sidebar', 'stark' ); ?></h4>
  </div>
<?php endif; ?>