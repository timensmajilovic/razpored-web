<?php
include_once("../db_con/db_con.php");
$id=$_GET['delavecid'];
$sql = "SELECT * FROM delavci WHERE id='$id'"; 
$result = $conn->query($sql); 
$row = $result->fetch_assoc();
$ime= $_POST['ime'];
$priimek = $_POST['priimek'];
$ime = preg_replace("/[^abcčdefghijklmnoprsštuvzžćđywxABCČDEFGHIJKLMNOPRSŠTUVZŽĐĆYWX0123456789]/", '', $ime);
$priimek = preg_replace("/[^abcčdefghijklmnoprsštuvzžćđywxABCČDEFGHIJKLMNOPRSŠTUVZŽĐĆYWX0123456789]/", '', $priimek);

$sql="UPDATE delavci SET ime ='$ime', priimek='$priimek' WHERE id='$id';";
    if(mysqli_query($conn, $sql)){
    header("Location: ../zaposleni/zaposleni_edit.php?delavecid=$id&success=imechanged");
    die();
        } else {
     header("Location: ../zaposleni/zaposleni_edit.php?delavecid=$id&success=imenotchanged");
    die();
    }
?>
