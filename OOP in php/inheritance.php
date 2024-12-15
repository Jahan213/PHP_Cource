<?php
class employee{
    public $name;
    public $age;
    public $salary;
    function __construct($n,$a,$s ){
        $this->name=$n;
        $this->age=$a;
        $this->salary=$s;
    }
    function info(){
        echo "<h3>Employee profile</h3>";
        echo "Employee name: ".$this->name."<br>";
        echo "Employee age: ".$this->age."<br>";
        echo "Employee salary: ".$this->salary."<br>";
    }
}
class manager extends employee{
    function __construct(){
        echo "manager constructor";
    }
}
$e1=new employee("Orange",5,2000);
$e1->info();

?>