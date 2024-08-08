<?php 
// Static properties can be called directly - without creating an instance of a class.
class Staticproerties {
    public static $name = "John";
    public static $age = 25;
}
echo Staticproerties::$age;

class Pi{
    public static $value = 3.14159;
    public function staticvalue(){
        return self::$value;
    }
}
$pi = new Pi();
echo $pi->staticvalue()
?>