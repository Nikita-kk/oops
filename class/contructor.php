<?php
class cal{
     public $a, $b, $c;

    function __construct($a, $b)  //by default value 
    {
         $this->a=$a;
         $this->b=$b;
    }
    function sum(){
        $this->c = $this->a + $this->b;
        return $this->c;
    }
    function sub(){
        $this->c = $this->a - $this->b;
        return $this->c;
    }
}
$obj=new cal( 9,10);
echo $obj->sum();
?>