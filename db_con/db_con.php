<?php
$servername = "localhost";
$username = "timensma_timen";
$password = "o6+Kj.56$%ox";
$dbname = "timensma_razpored";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$salt = ".-dfgfd384zsdcHJFSOGndsfuv9344rlfdsHofh8903kfd0923d,k%ZU)#()OU)=Z)/Z)!%vRFfdsgdfg";
?>