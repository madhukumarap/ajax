<?php  
// PHP only supports single inheritance: a child class can inherit only from one single parent.
// So, what if a class needs to inherit multiple behaviors? OOP traits solve this problem.

// Traits are used to declare methods that can be used in multiple classes. Traits can have methods and abstract methods that can be used in multiple classes, and the methods can have any access modifier (public, private, or protected).

// Traits are declared with the trait keyword:
trait message1{
    public function mesg1(){
        echo "OOP is FUN";
    }
}
class Welcome{
    use message1;
}
$obj = new Welcome();
$obj->mesg1();

?>