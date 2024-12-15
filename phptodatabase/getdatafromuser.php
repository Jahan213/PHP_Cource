<!DOCTYPE html>

<head>
    <title>Insert Employees</title>
</head>
<body>
    <center>
        <form method=post action="insertemp.php">
            Id:<input type="text" name="txtid" id="">
            <br>
            Name:<input type="text" name="txtname" id="">
            <br>
            Salary:<input type="text" name="txtsal" id="">
            <br>
            Department:<input type="text" name="txtdept" id="">
            <br>
            <input type="submit" name="btn-Submit" id="" value=submit>
        </form>
        <?php
        if(isset($_POST['btn-submit']))
        {
        $eid=$_POST['txtid'];
        $ename=$_POST['txtname'];
        $esal=$_POST['txtsal'];
        $edept=$_POST['txtdept'];
        $mycon=mysqli_connect("localhost","root","","mynewdata");
        echo "connection success";
        $sql="Insert into emp values(?,?,?,?)";
        $ps=$mycon->prepare($sql);
        $ps->bind_param("isis",$eid,$ename,$esal,$edept);
        $ps->execute();
        echo "<br>Record inserted sucessfully";
        }
        ?>
    </center>
    
</body>
</html>