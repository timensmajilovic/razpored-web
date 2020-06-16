<?php
$servername = "localhost";
$username = "timensma_timen";
$password = "o6+Kj.56$%ox";
$dbname = "timensma_razpored";


$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$delavecid = $_POST['delavecid'];
if (!isset($_POST['delavecid'])) {
    header("Location: ../zaposleni/zaposleni.php?error=noaccess");
    die();
} else if (!isset($_POST['statusedit'])) {
    header("Location: ../zaposleni/zaposleni.php?error=nostatus&delavecid=" . $delavecid . "");
    die();
} else if (isset($_POST['status'])) {
    if ($_POST['status'] == "empty") {
        header("Location: ../zaposleni/zaposleni.php?error=statusempty&statusedit=true&delavecid=" . $delavecid . "");
        die();
    } else {
        $status = $_POST['status'];
        $datum_z = $_POST['zacetek'];
        $datum_k = $_POST['konec'];

        $sql = "INSERT INTO statusi (ime, datum_z, datum_k, delavec_id)
                VALUES ('" . $status . "','" . $datum_z . "' , '" . $datum_k . "' , '" . $delavecid . "')";


        if (mysqli_query($conn, $sql)) {
            header("Location: ../zaposleni/zaposleni.php?statusadd=success");
            die();
        } else {
            header("Location: ../zaposleni/zaposleni.php?statusadd=fail");
            die();
        }

        mysqli_close($conn);
    }
} else {
    header("Location: ../zaposleni/zaposleni.php?error=error");
    die();
}
mysqli_close($conn);
