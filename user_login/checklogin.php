<html><head><title>PHP</title></head></html>
<body>
    <center>
        <?php
        $user=$_POST['txtuser'];
        $pass=$_POST['txtpass'];
        // echo $user;
        // echo $pass;
        if(strcmp($user,"mithil")==0 and strcasecmp($pass,"pakhi"))
        echo "<font color = green size=6>you are valid user</font>";       
        else
        echo "<font color = green size=5>you are invalid user</font>";

        ?>
    </center>
</body>