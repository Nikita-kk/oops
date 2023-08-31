<?php
// 1 - method

// interface E {
//     function sum($a, $b);
// }

// interface D {
//     function sub($a, $b);
// }

// class C implements D, E {
//     function sum($a, $b)
//      {
        
//         return $a + $b;
//     }
//     function sub($a, $b) {
//         return $a - $b;
//     }
// }
// $obj = new C();
// echo $obj->sum(5, 3);
// echo "<br>";
// echo $obj->sub(10,40 );

  

interface prvna{
    function sum($x,$y);
}
interface twin {
    function sub ($u,$v);
}
class base implements prvna , twin {
    public $x,$y,$z;
    function sum ($x,$y){
        $this->z = $x + $y;
         return $this->z;
    }
    
    function sub($u,$v){
        return $u-$v;
        
     }
}


 $obj=new base ();
  echo $obj->sum( 8,4);
  echo "<br>";
  echo $obj->sub( 8,4);
