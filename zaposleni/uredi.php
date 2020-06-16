<?php
$servername = "localhost";
$username = "timensma_timen";
$password = "o6+Kj.56$%ox";
$dbname = "timensma_razpored";


$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if(!isset($_GET['delavecid'])){
    header("Location: ../zaposleni/zaposleni.php?error=noaccess");
    die();

}
else{
    $delavecid=$_GET['delavecid'];
    header("Location: ../zaposleni/zaposleni.php?statusedit=true&delavecid=".$delavecid);
    die();
}



mysqli_close($conn);



?>