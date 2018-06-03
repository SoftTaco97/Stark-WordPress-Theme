<?php
/*
*
* Top Right Sidebar (Two Widget Area Top Page Template)
*
*/
if ( is_active_sidebar('top-right-sidebar') ) : ?>
  <?php dynamic_sidebar('top-right-sidebar'); ?>
<?php else: ?>
  <div class="sidebar-module"> 
    <h4><?php _e( 'Add Your Widgets to this Top Right Sidebar', 'stark' ); ?></h4>
  </div>
<?php endif; ?>
