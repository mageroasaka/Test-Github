<?php
$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$mail = $_POST['email'];
$name = $_POST['username'];
$pass = $_POST['password'];

if (empty($fname) || empty($lname) || empty($mail) || empty($name) || empty($pass)) {
    echo " fill in the input field";
}else {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "cheapsneakdb";


    $connect= mysqli_connect($servername, $username, $password, $dbname);

    if (!$connect) {
        die("connection failed:". mysqli_connect_error());
    }
    else{
        $sql = "INSERT INTO newusers(firstname, lastname, email, username, password) VALUES('$fname', '$lname', ' $mail', '$name', '$pass')";
        if (mysqli_query($connect, $sql)) {
            header("location: signIn.php");
        }else {
            echo "error inserting data" . mysqli_error($connect);
        }
    }
}
?>