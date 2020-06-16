<?php
session_start();

include_once("../db_con/db_con.php");


if (isset($_POST['uid']) and isset($_POST['pass'])){
    
    $uid = $_POST['uid'];
    $pass = $_POST['pass'];
    $pass = sha1($pass.$salt);
    $query = "SELECT * FROM `uporabniki` WHERE uid='$uid' and pass='$pass'";
     
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
    $count = mysqli_num_rows($result);

    if ($count == 1){
    $_SESSION['uid'] = $uid;
    $row = $result->fetch_assoc();
    $_SESSION['dostop'] = $row['dostop'];
    $_SESSION['id'] = $row['id'];
    header("Location: ../index/index.php");
    $_SESSION['stranid'] = "home"; 
    die();
    }

    else{
    header("Location: ../login/login.php?error=wrong");
    die();
    }

    }
    if (isset($_SESSION['uid'])){
        header("Location: ../index/index.php");
        die();
    }
    else{
    header("Location: ../login/login.php");
    die();
}
?>