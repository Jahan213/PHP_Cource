<html><head><title>PHP</title></head>
<body>
    <center>
        <?php
        $user = $_POST['txtuser'];
        $pass = $_POST['txtpass'];
       
        $ckname ="username";
        $ckvalue=$user;
        $ckpass ="password";
        $ckpassvalue=$pass;
        setcookie($ckname,$ckvalue);
        setcookie($ckpass,$ckpassvalue);
        
        echo "user name :".$user;
        echo "<br>Password :".$pass;


        ?>
        <form method=post action=page2.php>
            <input type="submit" value=submit>
        </form>

    </center>
</body>
</html>