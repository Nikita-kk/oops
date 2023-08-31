<?php
abstract  class  cal{
      abstract protected function sum($a,$b);
}
class nik  extends cal{
         public function sum($c,$d){
         echo $c+$d;
        }
    }
  $obj=new nik( );
  $obj->sum(2.,3);

?>