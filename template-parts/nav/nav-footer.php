<?php
/**
 * Main navigation file
 * 
 * @package ASM
 */

$menu_class = \ASM_THEME\Inc\Menus::get_instance();
$footer_menu_id = $menu_class->get_menu_id( 'asm-footer-menu' );

$footer_menu = wp_get_nav_menu_items( $footer_menu_id );
?>
<nav class="footer-nav">
<?php 
if( ! empty( $footer_menu ) && is_array( $footer_menu ) ) : 
?>
    <ul>
    <?php 
    foreach( $footer_menu as $menu_item ) : 
        ?>
            <li>
            <a href="<?php echo esc_url( $menu_item->url ) ?>"><?php echo esc_html( $menu_item->title ) ?></a>
            </li>
        <?php 
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
  
</nav>
