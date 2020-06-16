<?php
$servername = "localhost";
$username = "timensma_timen";
$password = "o6+Kj.56$%ox";
$dbname = "timensma_razpored";


$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$ime=$_POST['ime'];
$priimek=$_POST['priimek'];
$ime = preg_replace("/[^abcčdefghijklmnoprsštuvzžćđywxABCČDEFGHIJKLMNOPRSŠTUVZŽĐĆYWX0123456789]/", '', $ime);
$priimek = preg_replace("/[^abcčdefghijklmnoprsštuvzžćđywxABCČDEFGHIJKLMNOPRSŠTUVZŽĐĆYWX0123456789]/", '', $priimek);
$sql = "INSERT INTO delavci (ime, priimek)
    VALUES ('".$_POST["ime"]."','".$_POST["priimek"]."')";

/*if($status=="empty"){
    header("Location: ../zaposleni/zaposleni.php?add=statusempty");
    die();
}*/

if (mysqli_query($conn, $sql)) {
    header("Location: ../zaposleni/zaposleni.php?add=success");
    die();
} else {
    header("Location: ../zaposleni/zaposleni.php?add=fail");
    die();

}

mysqli_close($conn);
?>