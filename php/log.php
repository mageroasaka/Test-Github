<?php
    $name = $_POST['username'];
    $pass = $_POST['password'];

    if (empty($name) || empty($pass)) {
        # code...
        echo "please fill in the fields";
    }else {
        $serername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "cheapsneakdb";

        $connect = mysqli_connect($serername,$username,$password,$dbname);


        if (!$connect) {
            die("connection failed: " .  mysqli_connect_error());
        }

        $sql = "SELECT * FROM newusers WHERE username = '$name' AND password='$pass'";

        $result = mysqli_query($connect, $sql);

        $sql = mysqli_query($connect, $sql);

        if(mysqli_num_rows($result) > 0){
            header("location:index.php");
        } else {
            header("loction:signIn.php");
        }

    }
?>