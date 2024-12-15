<!DOCTYPE html>

<head>
    <title>Insert Employees</title>
</head>
<body>
    <center>
        <?php
        $eid=501;
        $ename="Monkey";
        $esal=50000;
        $edept="it";
        $mycon=mysqli_connect("localhost","root","","mynewdata");
        echo "connection success";
        $sql="Insert into emp values(?,?,?,?)";
        $ps=$mycon->prepare($sql);
        $ps->bind_param("isis",$eid,$ename,$esal,$edept);
        $ps->execute();
        echo "<br>Record inserted sucessfully";
        ?>
    </center>
    
</body>
</html>