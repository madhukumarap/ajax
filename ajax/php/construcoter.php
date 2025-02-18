<?php  
//creation of class
class Fruit {
    //properties
    public $name;
    public $color;

    //define construct
    // A constructor allows you to initialize an object's properties upon creation of the object.
    // If you create a __construct() function, PHP will automatically call this function when you create an object from a class.



    function __construct($name, $color){
        $this->name = $name;
        $this->color = $color;
    }
    function get_name(){
        return $this->name;
    }
    function get_color(){
        return $this->color;
    }

}
$apple = new Fruit('Apple', 'red');
$banana = new Fruit('Banana', 'green');
echo $apple->get_name();
echo "<br>";
echo $banana->get_name();
echo "<br>";
echo $apple->get_color();
echo "<br>";
echo $banana->get_color();

?>

