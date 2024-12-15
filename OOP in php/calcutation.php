<?php
class calculation{
    public $a,$b,$c;
// adding two numbers
    function sum(){
        $this->c=$this->a + $this->b;
        return $this->c;
    }
    // subtract two numbers
    function sub(){
        $this->c=$this->a - $this->b;
        return $this->c;
    }

}

$c1 = new calculation();
$c1->a=70;
$c1->b=40;


$c2 = new calculation();
$c2->a=50;
$c2->b=35;
 echo "sum is c1 :".$c1->sum();
 echo "<br>sub is c2 :".$c2->sub();


?>