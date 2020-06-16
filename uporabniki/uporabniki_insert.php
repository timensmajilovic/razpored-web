<?php

include_once("../db_con/db_con.php");
$uid = $_POST['uid'];
$dostop = $_POST['dostop'];
$pass = $_POST['geslo'];
$pass= sha1($pass.$salt);

if(!empty($uid) && !empty($dostop) && !empty($pass))
{
    $dostopobiskovalca = $_SESSION['dostop'];
    if($dostopobiskovalca==1 || $dostopobiskovalca==2){
    header("Location: ../index/index.php?dostop=toolow");
    die();

}

    $result= $conn->query("SELECT uid FROM uporabniki where uid='$uid'");
    if($result->num_rows == 0){
        $query = sprintf("INSERT INTO uporabniki (uid, pass, dostop)"
            ."VALUES ('%s', '%s', '%s')",
            mysqli_real_escape_string($conn,$uid),
            mysqli_real_escape_string($conn,$pass),
            mysqli_real_escape_string($conn,$dostop) );
    
    if (mysqli_query($conn, $query)) {
            header("Location: ../uporabniki/uporabniki_add.php?add=success");
            die();
        } else {
            header("Location: ../uporabniki/uporabniki_add.php?add=fail");
            die();
        } 
    }else{
        header("Location: ../uporabniki/uporabniki_add.php?add=exists");
            die();
    }
    
 $conn->close();   
}
?>