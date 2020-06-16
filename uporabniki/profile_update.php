<?php
if(!isset($_POST['uid']))
{
    header("Location: ./profile.php?error=nouid");
    die();
}
else{
    
    session_start();
    include_once("../db_con/db_con.php");
    
    $newuid = $_POST['uid'];
    $newuid = preg_replace("/[^A-Za-z0-9]/", '', $newuid);
    $olduid = $_SESSION['uid'];
    $olduid = preg_replace("/[^A-Za-z0-9]/", '', $olduid);
    $sql="UPDATE uporabniki SET uid ='$newuid' WHERE uid='$olduid';";
    if(mysqli_query($conn, $sql)){
    $_SESSION['uid'] = $newuid;
    header("Location: ./profile.php?success=uidchanged");
    die();
        } else {
     header("Location: ./profile.php?fail=uidnotchanged");
    die();
    }
    
}
?>