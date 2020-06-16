<?php
include_once("../db_con/db_con.php");
$id=$_GET['delavecid'];
$statusid = $_GET['statusid'];
$show = $_GET['show'];
$status = $_POST['status'];
$zacetek = $_POST['zacetek'];
$konec = $_POST['konec'];
if($status == "empty"){
    header("Location: ../zaposleni/zaposleni_edit.php?delavecid=$id&status=empty&statusid=$statusid&show=$show#$statusid");
    die();
}else{

$sql="UPDATE statusi SET ime ='$status', datum_z='$zacetek', datum_k='$konec' WHERE (id=$statusid AND delavec_id=$id);";
    if(mysqli_query($conn, $sql)){
        header("Location: ../zaposleni/zaposleni_edit.php?delavecid=$id&success=statuschanged&show=$show#$statusid");
        die();
        } else {
     header("Location: ../zaposleni/zaposleni_edit.php?delavecid=$id&success=statusnotchanged&show=$show#$statusid");
    die();
    }
}
?>
