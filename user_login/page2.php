<!DOCTYPE html>

<head>
   <title>Page 2</title>
</head>
<body>
    <center>
    <?php
    $user=$_COOKIE['username'];
    $pass=$_COOKIE["password"];
    echo "user name in second page :",$user;
    echo "<br>user name in second page :",$pass;
    

    ?>
    </center>
</body>
</html>