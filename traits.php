<?php
trait car {
public function buy() {
    echo "hello";
  }
}

trait bike{
    public  function sell(){
    echo "hey";
}
}


class Welcome {
  use car , bike;
}

$obj = new Welcome();
$obj->buy();
echo "<br>";
$obj->sell();

?>