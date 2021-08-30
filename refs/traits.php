<?php 
/**
 * trait Say_World {
 *   public function say_hello() {
 *     echo 'Hello Trait';
 *   }
 * }
 * 
 * class Base {
 *   use Say_World;
 * 
 *   public function __contruct() {
 *     //
 *   }
 * }
 * 
 * $base = new Base();
 * $base->say_hello();
 */
/**
 * TRAITS
 * Traits allow us to reuse sets of methods freely in several independent classes living in different class hierarchies.
 * Share functionalities from multiple classes
 * A Trait is similar to a class, but only intended to group functionality in a fine-grained and consistent way.
 * It's not possible to instantiate a Trait on it own.
 * 
*/

trait Say_World {
    public function say_hello() {
    echo 'Hello Trait';
    }
}
    
class Teacher {
    public function say_name() {
        echo 'Teacher';
    }
}

class Base extends Teacher {
    // use the trait method
    use Say_World;

    public function __contruct() {
    //
    }
}

$base = new Base();

/**
 * call the trait method say_hello
 */
$base->say_hello();
/**
 * call the the extened class method say_name()
 */
$base->say_name();

?>