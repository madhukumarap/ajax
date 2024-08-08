<?php 
// Static methods can be called directly - without creating an instance of the class first.
class Classname{
    public static function staticMethod(){
        echo "This is a static method";
    }
}
//statci method call without objcet or instenace of class
Classname::staticMethod();

class greeting {
    public static function welcome() {
      echo "Hello World!";
    }
  
    public function __construct() {
      self::welcome();
    }
  }
  
  new greeting();
  class A {
    public static function welcome() {
      echo "Hello World!";
    }
  }
  
  class B {
    public function message() {
      A::welcome();
    }
  }
  
  $obj = new B();
  echo $obj -> message();
?>