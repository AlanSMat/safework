<?php
/**
 * Main navigation file
 * 
 * @package ASM
 */

$menu_class = \ASM_THEME\Inc\Menus::get_instance();
$top_bar_menu_id = $menu_class->get_menu_id( 'asm-top-bar-menu' );

$top_bar_menus = wp_get_nav_menu_items( $top_bar_menu_id );
?>
<nav class="navbar navbar-expand-lg navbar-dark top-nav">
  <?php get_template_part('template-parts/icons/social-media','blue'); ?>    
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse justify-content-lg-end" id="navbarSupportedContent">
    <?php 
    if( ! empty( $top_bar_menus ) && is_array( $top_bar_menus ) ) : 
    ?>
      <ul class="navbar-nav">
        <?php 
        foreach( $top_bar_menus as $menu_item ) : 

          if( ! $menu_item->menu_item_parent ) : 
            // get child menu items if applicable
            $child_menu_items = $menu_class->get_child_menu_items( $top_bar_menus, $menu_item->ID );
            // set boolean menu item has children
            $has_children = ! empty( $child_menu_items ) && is_array( $child_menu_items );

            if( ! $has_children ) :
            ?>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo esc_url( $menu_item->url ) ?>"><?php echo esc_html( $menu_item->title ) ?></a>
              </li>
            <?php 
              else :  
            ?>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <?php echo $menu_item->title ?>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <?php  
                  foreach( $child_menu_items as $child_menu_item ) : 
                  ?>
                    <a class="dropdown-item" href="<?php echo esc_html( $child_menu_item->url ) ?>">
                      <?php echo esc_html( $child_menu_item->title ) ?>
                    </a>
                  <?php  
                  endforeach;
                  ?>
                </div>
              </li>
            <?php 
            endif; // has children 
          endif; // ! menu item has parent 
        endforeach; 
        ?>
      </ul>
    <?php 
    endif 
    ?>
    <!-- <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> -->
  </div>
</nav>
