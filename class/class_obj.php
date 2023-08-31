<?php
class Calculation {
    public $a, $b, $c;   //properties

    function sum() {
        $this->c = $this->a + $this->b;
        return $this->c;
    }

    function sub() {
        $this->c = $this->a - $this->b;
        return $this->c;
    }
}

$c = new Calculation();   //object
$c->a=10;
$c->b=20; 
echo $c->sum();
echo $c->sub();

?>