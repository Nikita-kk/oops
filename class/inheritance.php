<?php
class A
{
    public $e = 10;
    function get(){
        // echo 's'.$e;
        echo $this->e;   //this for current variable
    }
}
class B extends A
{
    function set()
    {
        echo $this->e;
    }
}
$obj = new B();
$obj->get();


 
//method overriding ....means same function name and variable

// class A {
//     public $e=10;
//    function get(){   
//         
//         echo $this->e;
//     }
    
// } 
// class B extends A{
//  function get(){
//         echo $this->e;
//     }
// }
// $obj =new B();
// $obj->get();



//final keyword

// class A {
//     public $e=10;
//    final function get(){   //final keyword is used for stop the method overriding
//         // echo 's'.$e;
//         echo $this->e;
//     }
    
// } 
// class B extends A{
//  function get(){
//         echo $this->e;
//     }
// }
// $obj =new B();
// $obj->get();
