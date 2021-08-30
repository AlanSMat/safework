<?php 

trait MyTraitSingleton {
   
    public static function get_instance() {
        static $instance = [];

        $called_class = get_called_class();

        if( ! isset( $instance[ $called_class ]) ) {
            $instance[ $called_class ] = new get_called_class();
        }

        return $instance[ $called_class ];
    }

}

class User {
    // use the MyTraitSingleton trait
    use MyTraitSingleton;

    public function __construct() {
        echo 'User';
    }
}

// call the MyTraitSingleton trait, instantiate the called User class, if it has not already been instantiated, copy returned array into calling variable $user_one
$user_one = User::get_instance();
?>