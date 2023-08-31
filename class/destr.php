<?php
// class cal{
//      private $a, $b, $c;

//       private function __construct($a=0, $b=1)        //default value
//     {
//          $this->a=$a;
//          $this->b=$b;
//     }
//     function sum(){
//         $this->c = $this->a + $this->b;
//         return $this->c;
//     }
//     function sub(){
//         $this->c = $this->a - $this->b;
//         return $this->c;
//     }
//     function __destruct()
//     {
//         $this->c = $this->a - $this->b;
//         echo $this->c;
//     }  
// }
// $obj=new cal( ,10);
// // echo $obj->sum();

// ----------------------------------------------------------------

class cal {
    private $a, $b, $c;

    public function __construct($a, $b) {
        $this->a = $a;
        $this->b = $b;
    }

    public function sum() {
        $this->c = $this->a + $this->b;
        return $this->c;
    }

    public function sub() {
        $this->c = $this->a - $this->b;
        return $this->c;
    }

    public function __destruct() {
        echo "Object destroyed, result: " . $this->c;
    }
}

$obj = new cal(20, 10);
echo "Sum: " . $obj->sum() . "<br>";
echo "Subtraction: " . $obj->sub() . "<br>";
// The destructor will be automatically called here.

?>