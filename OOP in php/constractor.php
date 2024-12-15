<?php
 class person{
    public $name,$age;

    function show(){
        echo $this->name ." - ".$this->age;
    }

 }

 $p1=new person();
 $p1->name="saturday";
 $p1->age=22;
$p1->show();
?>