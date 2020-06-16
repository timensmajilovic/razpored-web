<?php
session_start();
if($_SESSION['dostop']<3){
    header("Location: ../index/index.php");
    die();
}
else{
    include_once("../db_con/db_con.php");
    $id = $_POST['id'];
    $sql="DELETE FROM uporabniki WHERE id=$id;";
    if(mysqli_query($conn, $sql)){
    header("Location: ../uporabniki/uporabniki_list.php?user=removed");
    die();
        } else {
    header("Location: ../uporabniki/uporabniki_list.php?error=fail");
    die();
    }
   die(); 
}
?>