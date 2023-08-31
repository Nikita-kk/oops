<?php

// access modifier , 
class cal
{
    protected  $a, $b, $c;
     function __construct($a, $b)  //by default value 
    {
        $this->a = $a;
        $this->b = $b;
    }
    protected  function sum()
    {
        $this->c = $this->a + $this->b;
        return $this->c;
    }  
}

class derived extends cal
{
    function sumnew()
    {
        $this->c = $this->a + $this->b;
        return $this->c;
    }
}



$obj = new derived(10, 1);
echo $obj->sumnew();

