<!DOCTYPE html>
<html lang="en">
<head>
         <title> PHP Function </title>
</head>
<body>
    <?php
    function sum($a,$b)
    {
        $c = $a+$b;
        echo"Addition is : ".$c;
    }
    sum(10,18);
    echo "<br>";
    sum(14.5,19);
    echo"<br>";
    sum(30,10)
    ?>
    
</body>
</html>