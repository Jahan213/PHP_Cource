<!DOCTYPE html>

<head>
    <title>My Page</title>
</head>
<body>
    <center>
        <?php
        $user =$_POST['txtuser'];
        $pass =$_POST['txtpass'];
        echo "User Name :".$user;
        echo "<br>Password :".$pass;

        session_start();
        $_SESSION["username"]=$user;
        $_SESSION["password"]=$pass;

        ?>
        <form action="mypage2.php" method=post>
            <input type="submit" name="Submit" id="">
        </form>
    </center>
    
</body>
</html>