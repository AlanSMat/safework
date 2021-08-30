<?php 
/**
 * SINGLETON
 * 
 * It's used to restrict the instantiation of a class to a single object
 * Useful when only one object is requited across the system
 * Ensures a single class instance an that is global at it's point of access
 */

class User {
    // Hold the class instance.
    private static $instance = null;
    
    // The constructor is private
    // to prevent initiation with outer code.
    private function __construct()
    {
      // The expensive process (e.g.,db connection) goes here.
    }
   
    // The object is created from within the class itself
    // only if the class has no instance.
    public static function get_instance()
    {
      if ( ! isset( self::$instance ) )
      {
        self::$instance = new User();
      }
   
      return self::$instance;
    }
}

$user1 = User::get_instance();
$user2 = User::get_instance();
$user3 = User::get_instance();
?>