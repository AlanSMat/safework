<?php  
/**
 * Singleton trait file for theme.
 *
 * @package SWA
 */


namespace SWA_Theme\Inc\Traits;

trait Singleton {
    
    public function __construct() {
       
    }

    public function __clone() {

    }

    final public static function get_instance() {
        static $instance = [];

        // assign WP method get_called_class() to a variable
        $called_class = get_called_class();

        if( ! isset( $instance[  $called_class ] ) ) {
            $instance[ $called_class ] = new $called_class();

            do_action( sprintf( 'swa_theme_singleton_int%s', $called_class ) );
        }

        return $instance[ $called_class ];
    }
}

?>