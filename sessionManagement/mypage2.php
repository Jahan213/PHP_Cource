<!DOCTYPE html>

<head>
    <title>Web page 2</title>
</head>
<body>
    <center>
        <?php
        session_start();
        $uname=$_SESSION['username'];
        $upass=$_SESSION['password'];

        echo "User name in next page :".$uname;
        echo "<br>user password in second page :".$upass;
        session_unset();
        session_destroy();
        ?>
    </center>
    
</body>
</html>