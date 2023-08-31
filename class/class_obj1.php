<?php
 class Fruit {
    public $name, $color;   // properties
        
    function setName($name) {
        $this->name = $name;
        return $this->name;
    }

    function setColor($color) {
        $this->color = $color;
        return $this->color;
    }
    
}

$obj= new Fruit();   // create an object
echo $obj->setName("Apple");  // set the name
echo $obj->setColor("Red");   // set the color


