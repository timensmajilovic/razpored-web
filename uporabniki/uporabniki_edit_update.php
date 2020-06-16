<?php
session_start();
include_once("../db_con/db_con.php");
if($_SESSION['dostop']!=3){
    header("Location: ../index/index.php");
    die();
}
$id = $_POST['id'];
$uid = $_POST['uid'];
$uid = preg_replace("/[^A-Za-z0-9]/", '', $uid);
$dostop = $_POST['dostop'];
$pass = $_POST['geslo'];
$pass = sha1($pass.$salt);
$sql="UPDATE uporabniki SET uid='$uid', dostop='$dostop', pass='$pass' WHERE (id=$id)";
if(mysqli_query($conn, $sql)){
    header("Location: ./uporabniki_edit.php?success=userchanged&id=$id");
    die();
        } else {
     header("Location: ./uporabniki_edit.php?fail=usernotchanged&id=$id");
    die();
    }
?>