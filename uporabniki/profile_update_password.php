<?php
if(!isset($_POST['starogeslo']) && !isset($_POST['novogeslo']) && !isset($_POST['novogeslo1']))
{
    header("Location: ./profile.php?error=nopass");
    die();
}
else{
    
    session_start();
    include_once("../db_con/db_con.php");
    
    $uid = $_SESSION['uid'];
    $sql="SELECT * FROM uporabniki WHERE uid='$uid';";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
        
    $starogeslo = $_POST['starogeslo'];
    $starogeslo = sha1($starogeslo.$salt);
    $novogeslo = $_POST['novogeslo'];
    $novogeslo1 = $_POST['novogeslo1'];
    
    if($starogeslo != $row['pass']){
        header("Location: ./profile.php?oldpass=invalid");
        die();
    }
    
    if(!preg_match("/[A-Za-z0-9]+/", $novogeslo)) {
        header("Location: ./profile.php?newpass=invalid");
        die();
    }
    
    
    if($novogeslo == $novogeslo1){
        $novogeslo=sha1($novogeslo.$salt);
        
        $sql="UPDATE uporabniki SET pass ='$novogeslo' WHERE uid='$uid';";
        if(mysqli_query($conn, $sql)){
        header("Location: ./profile.php?success=passchanged");
        die();
        } else {
     header("Location: ./profile.php?fail=uidnotchanged");
    die();
    }
        
    }
        else{
        header("Location: ./profile.php?pass=notmatching");
    die();
    }
        
    
}
?>