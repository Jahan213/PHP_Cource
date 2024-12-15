<?php
interface parent1{
    function calc($a,$b);

}
interface parent2{
    function sub($c,$d);

}
class child implements parent1, parent2{
  public function calc($a,$b){
    echo $a + $b;
  }
  public function sub($c,$d){
    echo $c - $d;
  }
}
$test = new child();
$test->calc(20,46);
echo "<br>";
$test->sub(39,22);
?>