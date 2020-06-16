<?php
 $servername = "localhost";
$username = "timensma_timen";
$password = "o6+Kj.56$%ox";
$dbname = "timensma_razpored";

 
 $conn = new mysqli($servername, $username, $password, $dbname);
 if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
 }

$delavecid = $_GET['delavecid'];
if(isset($delavecid)){
    //$sql = "DELETE FROM delavci INNER JOIN statusi ON delavci.id=statusi.delavec_id WHERE delavec.id='$delavecid'; DELETE FROM statusi WHERE statusi.delavec_id = '$delavecid'; DELETE FROM delavci WHERE delavci.id='$delavecid';";
    /*$sql = "DELETE FROM delavci WHERE id='$delavecid'";
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
    $sql = "DELETE FROM delavci WHERE delavec_id='$delavecid'";
    */
    $sql = "DELETE FROM statusi WHERE delavec_id='$delavecid';";
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
    $sql = "DELETE FROM delavci WHERE id='$delavecid'";
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
    header("Location: ../zaposleni/zaposleni.php?remove=success");
    die();
}
else{
    header("Location: ../zaposleni/zaposleni.php?remove=noaccess");
    die();
}


?>