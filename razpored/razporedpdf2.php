<?php
session_start();
//call the FPDF library
require("../razpored/fpdflib/fpdf.php");

if(isset($_POST['zacetek'])){
    $zacetek = $_POST['zacetek'];
    $zacetek = date("d.m.Y", strtotime($zacetek)); 
}
else{
    $zacetek = "";
}
//DATUM KONEC
if(isset($_POST['konec'])){
    $konec = $_POST['konec'];
    $konec = date("d.m.Y", strtotime($konec)); 
}
else{
    $konec = "";
}

$servername = "localhost";
$username = "timensma_timen";
$password = "o6+Kj.56$%ox";
$dbname = "timensma_razpored";

    $date = date('Y-m-d');
    $date2 = new DateTimeImmutable();
    $date2->modify('+6 day');

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }


//------------
//1.IZMENA
//------------
//vodja skupine
$prva_vodja_skupine = "";
if(isset($_POST['prva_vodja_skupine'])){
    $prva_vodja_skupine  = $_POST['prva_vodja_skupine'];
    
    $sql = "SELECT * FROM delavci WHERE id='$prva_vodja_skupine';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $prva_vodja_skupine = $row['priimek'];
            }
        } else {
            $prva_vodja_skupine = "";
        }
        $prva_vodja_skupine = iconv('UTF-8', '', $prva_vodja_skupine);
}
else{
    $prva_vodja_skupine = "";
}

//vstavljanje mag 1
$prva_vstavljanje_mag_prvi_1 = "";
if(isset($_POST['prva_vstavljanje_mag_prvi_1'])){
    $prva_vstavljanje_mag_prvi_1  = $_POST['prva_vstavljanje_mag_prvi_1'];
    
    $sql = "SELECT * FROM delavci WHERE id='$prva_vstavljanje_mag_prvi_1';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $prva_vstavljanje_mag_prvi_1 = $row['priimek'];
            }
        } else {
            $prva_vstavljanje_mag_prvi_1 = "";
        }
        $prva_vstavljanje_mag_prvi_1 = iconv('UTF-8', '', $prva_vstavljanje_mag_prvi_1);
}
else{
    $prva_vstavljanje_mag_prvi_1 = "";
}

//varjenje 1
$prva_varjenje1 = "";
if(isset($_POST['prva_varjenje1'])){
    $prva_varjenje1  = $_POST['prva_varjenje1'];
    
    $sql = "SELECT * FROM delavci WHERE id='$prva_varjenje1';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $prva_varjenje1 = $row['priimek'];
            }
        } else {
            $prva_varjenje1 = "";
        }
        $prva_varjenje1 = iconv('UTF-8', '', $prva_varjenje1);
}
else{
    $prva_varjenje1 = "";
}

//varjenje 2
$prva_varjenje2 = "";
if(isset($_POST['prva_varjenje2'])){
    $prva_varjenje2  = $_POST['prva_varjenje2'];
    
    $sql = "SELECT * FROM delavci WHERE id='$prva_varjenje2';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $prva_varjenje2 = $row['priimek'];
            }
        } else {
            $prva_varjenje2 = "";
        }
        $prva_varjenje2 = iconv('UTF-8', '', $prva_varjenje2);
}
else{
    $prva_varjenje2 = "";
}

//varjenje 3
$prva_varjenje3 = "";
if(isset($_POST['prva_varjenje3'])){
    $prva_varjenje3  = $_POST['prva_varjenje3'];
    
    $sql = "SELECT * FROM delavci WHERE id='$prva_varjenje3';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $prva_varjenje3 = $row['priimek'];
            }
        } else {
            $prva_varjenje3 = "";
        }
        $prva_varjenje3 = iconv('UTF-8', '', $prva_varjenje3);
}
else{
    $prva_varjenje3 = "";
}

//varjenje 4
$prva_varjenje4 = "";
if(isset($_POST['prva_varjenje4'])){
    $prva_varjenje4  = $_POST['prva_varjenje4'];
    
    $sql = "SELECT * FROM delavci WHERE id='$prva_varjenje4';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $prva_varjenje4 = $row['priimek'];
            }
        } else {
            $prva_varjenje4 = "";
        }
        $prva_varjenje4 = iconv('UTF-8', '', $prva_varjenje4);
}
else{
    $prva_varjenje4 = "";
}

//varjenje 5
$prva_varjenje5 = "";
if(isset($_POST['prva_varjenje5'])){
    $prva_varjenje5  = $_POST['prva_varjenje5'];
    
    $sql = "SELECT * FROM delavci WHERE id='$prva_varjenje5';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $prva_varjenje5 = $row['priimek'];
            }
        } else {
            $prva_varjenje5 = "";
        }
        $prva_varjenje5 = iconv('UTF-8', '', $prva_varjenje5);
}
else{
    $prva_varjenje5 = "";
}

//varjenje 6
$prva_varjenje6 = "";
if(isset($_POST['prva_varjenje6'])){
    $prva_varjenje6  = $_POST['prva_varjenje6'];
    
    $sql = "SELECT * FROM delavci WHERE id='$prva_varjenje6';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $prva_varjenje6 = $row['priimek'];
            }
        } else {
            $prva_varjenje6 = "";
        }
        $prva_varjenje6 = iconv('UTF-8', '', $prva_varjenje6);
}
else{
    $prva_varjenje6 = "";
}

//Mletje pvc
$prva_mletje_pvc1 = "";
if(isset($_POST['prva_mletje_pvc1'])){
    $prva_mletje_pvc1  = $_POST['prva_mletje_pvc1'];
    
    $sql = "SELECT * FROM delavci WHERE id='$prva_mletje_pvc1';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $prva_mletje_pvc1 = $row['priimek'];
            }
        } else {
            $prva_mletje_pvc1 = "";
        }
        $prva_mletje_pvc1 = iconv('UTF-8', '', $prva_mletje_pvc1);
}
else{
    $change = "";
}
//ekstruder 1
$prva_ekstruder_prvi1 = "";
if(isset($_POST['prva_ekstruder_prvi1'])){
    $prva_ekstruder_prvi1  = $_POST['prva_ekstruder_prvi1'];
    
    $sql = "SELECT * FROM delavci WHERE id='$prva_ekstruder_prvi1';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $prva_ekstruder_prvi1 = $row['priimek'];
            }
        } else {
            $prva_ekstruder_prvi1 = "";
        }
        $prva_ekstruder_prvi1 = iconv('UTF-8', '', $prva_ekstruder_prvi1);
}
else{
    $change = "";
}
//ekstruder 2
$prva_ekstruder_drugi1 = "";
if(isset($_POST['prva_ekstruder_drugi1'])){
    $prva_ekstruder_drugi1  = $_POST['prva_ekstruder_drugi1'];
    
    $sql = "SELECT * FROM delavci WHERE id='$prva_ekstruder_drugi1';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $prva_ekstruder_drugi1 = $row['priimek'];
            }
        } else {
            $prva_ekstruder_drugi1 = "";
        }
        $prva_ekstruder_drugi1 = iconv('UTF-8', '', $prva_ekstruder_drugi1);
}
else{
    $prva_ekstruder_drugi1 = "";
}
//pakiranje 1
$prva_pakiranje1 = "";
if(isset($_POST['prva_pakiranje1'])){
    $prva_pakiranje1  = $_POST['prva_pakiranje1'];
    
    $sql = "SELECT * FROM delavci WHERE id='$prva_pakiranje1';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $prva_pakiranje1 = $row['priimek'];
            }
        } else {
            $prva_pakiranje1 = "";
        }
        $prva_pakiranje1 = iconv('UTF-8', '', $prva_pakiranje1);
}
else{
    $prva_pakiranje1 = "";
}
//pakiranje 2
$prva_pakiranje2 = "";
if(isset($_POST['prva_pakiranje2'])){
    $prva_pakiranje2  = $_POST['prva_pakiranje2'];
    
    $sql = "SELECT * FROM delavci WHERE id='$prva_pakiranje2';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $prva_pakiranje2 = $row['priimek'];
            }
        } else {
            $prva_pakiranje2 = "";
        }
        $prva_pakiranje2 = iconv('UTF-8', '', $prva_pakiranje2);
}
else{
    $prva_pakiranje2 = "";
}

//------------
//2.IZMENA
//------------
//vodja skupine
$druga_vodja_skupine = "";
if(isset($_POST['druga_vodja_skupine'])){
    $druga_vodja_skupine  = $_POST['druga_vodja_skupine'];
    
    $sql = "SELECT * FROM delavci WHERE id='$druga_vodja_skupine';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $druga_vodja_skupine = $row['priimek'];
            }
        } else {
            $druga_vodja_skupine = "";
        }
        $druga_vodja_skupine = iconv('UTF-8', '', $druga_vodja_skupine);
}
else{
    $druga_vodja_skupine = "";
}
//vstavljanje mag 1
$druga_vstavljanje_mag_prvi1 = "";
if(isset($_POST['druga_vstavljanje_mag_prvi1'])){
    $druga_vstavljanje_mag_prvi1  = $_POST['druga_vstavljanje_mag_prvi1'];
    
    $sql = "SELECT * FROM delavci WHERE id='$druga_vstavljanje_mag_prvi1';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $druga_vstavljanje_mag_prvi1 = $row['priimek'];
            }
        } else {
            $druga_vstavljanje_mag_prvi1 = "";
        }
        $druga_vstavljanje_mag_prvi1 = iconv('UTF-8', '', $druga_vstavljanje_mag_prvi1);
}
else{
    $druga_vstavljanje_mag_prvi1 = "";
}
//varjenje 1
$druga_varjenje1 = "";
if(isset($_POST['druga_varjenje1'])){
    $druga_varjenje1  = $_POST['druga_varjenje1'];
    
    $sql = "SELECT * FROM delavci WHERE id='$druga_varjenje1';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $druga_varjenje1 = $row['priimek'];
            }
        } else {
            $druga_varjenje1 = "";
        }
        $druga_varjenje1 = iconv('UTF-8', '', $druga_varjenje1);
}
else{
    $druga_varjenje1 = "";
}
//varjenje 2
$druga_varjenje2 = "";
if(isset($_POST['druga_varjenje2'])){
    $druga_varjenje2  = $_POST['druga_varjenje2'];
    
    $sql = "SELECT * FROM delavci WHERE id='$druga_varjenje2';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $druga_varjenje2 = $row['priimek'];
            }
        } else {
            $druga_varjenje2 = "";
        }
        $druga_varjenje2 = iconv('UTF-8', '', $druga_varjenje2);
}
else{
    $druga_varjenje2 = "";
}
//varjenje 3
$druga_varjenje3 = "";
if(isset($_POST['druga_varjenje3'])){
    $druga_varjenje3  = $_POST['druga_varjenje3'];
    
    $sql = "SELECT * FROM delavci WHERE id='$druga_varjenje3';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $druga_varjenje3 = $row['priimek'];
            }
        } else {
            $druga_varjenje3 = "";
        }
        $druga_varjenje3 = iconv('UTF-8', '', $druga_varjenje3);
}
else{
    $druga_varjenje3 = "";
}
//varjenje 4
$druga_varjenje4 = "";
if(isset($_POST['druga_varjenje4'])){
    $druga_varjenje4  = $_POST['druga_varjenje4'];
    
    $sql = "SELECT * FROM delavci WHERE id='$druga_varjenje4';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $druga_varjenje4 = $row['priimek'];
            }
        } else {
            $druga_varjenje4 = "";
        }
        $druga_varjenje4 = iconv('UTF-8', '', $druga_varjenje4);
}
else{
    $druga_varjenje4 = "";
}
    
//mletje pvc
$druga_mletje_pvc1 = "";
if(isset($_POST['druga_mletje_pvc1'])){
    $druga_mletje_pvc1  = $_POST['druga_mletje_pvc1'];
    
    $sql = "SELECT * FROM delavci WHERE id='$druga_mletje_pvc1';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $druga_mletje_pvc1 = $row['priimek'];
            }
        } else {
            $druga_mletje_pvc1 = "";
        }
        $druga_mletje_pvc1 = iconv('UTF-8', '', $druga_mletje_pvc1);
}
else{
    $druga_mletje_pvc1 = "";
}
    
//ekstruder 1
$druga_ekstruder_prvi1 = "";
if(isset($_POST['druga_ekstruder_prvi1'])){
    $druga_ekstruder_prvi1  = $_POST['druga_ekstruder_prvi1'];
    
    $sql = "SELECT * FROM delavci WHERE id='$druga_ekstruder_prvi1';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $druga_ekstruder_prvi1 = $row['priimek'];
            }
        } else {
            $druga_ekstruder_prvi1 = "";
        }
        $druga_ekstruder_prvi1 = iconv('UTF-8', '', $druga_ekstruder_prvi1);
}
else{
    $druga_ekstruder_prvi1 = "";
}

//ekstruder 2
$druga_ekstruder_drugi1 = "";
if(isset($_POST['druga_ekstruder_drugi1'])){
    $druga_ekstruder_drugi1  = $_POST['druga_ekstruder_drugi1'];
    
    $sql = "SELECT * FROM delavci WHERE id='$druga_ekstruder_drugi1';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $druga_ekstruder_drugi1 = $row['priimek'];
            }
        } else {
            $druga_ekstruder_drugi1 = "";
        }
        $druga_ekstruder_drugi1 = iconv('UTF-8', '', $druga_ekstruder_drugi1);
}
else{
    $druga_ekstruder_drugi1 = "";
}

//pakiranje 1
$druga_pakiranje1 = "";
if(isset($_POST['druga_pakiranje1'])){
    $druga_pakiranje1  = $_POST['druga_pakiranje1'];
    
    $sql = "SELECT * FROM delavci WHERE id='$druga_pakiranje1';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $druga_pakiranje1 = $row['priimek'];
            }
        } else {
            $druga_pakiranje1 = "";
        }
        $druga_pakiranje1 = iconv('UTF-8', '', $druga_pakiranje1);
}
else{
    $druga_pakiranje1 = "";
}

//pakiranje 2
$druga_pakiranje2 = "";
if(isset($_POST['druga_pakiranje2'])){
    $druga_pakiranje2  = $_POST['druga_pakiranje2'];
    
    $sql = "SELECT * FROM delavci WHERE id='$druga_pakiranje2';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $druga_pakiranje2 = $row['priimek'];
            }
        } else {
            $druga_pakiranje2 = "";
        }
        $druga_pakiranje2 = iconv('UTF-8', '', $druga_pakiranje2);
}
else{
    $druga_pakiranje2 = "";
}

//------------
//3.IZMENA
//------------
//vodja skupine
$tretja_vojda_skupine = "";
if(isset($_POST['tretja_vojda_skupine'])){
    $tretja_vojda_skupine  = $_POST['tretja_vojda_skupine'];
    
    $sql = "SELECT * FROM delavci WHERE id='$tretja_vojda_skupine';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $tretja_vojda_skupine = $row['priimek'];
            }
        } else {
            $tretja_vojda_skupine = "";
        }
        $tretja_vojda_skupine = iconv('UTF-8', '', $tretja_vojda_skupine);
}
else{
    $tretja_vojda_skupine = "";
}

//vstavljanje mag 1
$tretja_vstavljanje_mag_prvi1 = "";
if(isset($_POST['tretja_vstavljanje_mag_prvi1'])){
    $tretja_vstavljanje_mag_prvi1  = $_POST['tretja_vstavljanje_mag_prvi1'];
    
    $sql = "SELECT * FROM delavci WHERE id='$tretja_vstavljanje_mag_prvi1';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $tretja_vstavljanje_mag_prvi1 = $row['priimek'];
            }
        } else {
            $tretja_vstavljanje_mag_prvi1 = "";
        }
        $tretja_vstavljanje_mag_prvi1 = iconv('UTF-8', '', $tretja_vstavljanje_mag_prvi1);
}
else{
    $tretja_vstavljanje_mag_prvi1 = "";
}

//vstavljanje mag 2
$tretja_vstavljanje_mag_drugi1 = "";
if(isset($_POST['tretja_vstavljanje_mag_drugi1'])){
    $tretja_vstavljanje_mag_drugi1  = $_POST['tretja_vstavljanje_mag_drugi1'];
    
    $sql = "SELECT * FROM delavci WHERE id='$tretja_vstavljanje_mag_drugi1';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $tretja_vstavljanje_mag_drugi1 = $row['priimek'];
            }
        } else {
            $tretja_vstavljanje_mag_drugi1 = "";
        }
        $tretja_vstavljanje_mag_drugi1 = iconv('UTF-8', '', $tretja_vstavljanje_mag_drugi1);
}
else{
    $tretja_vstavljanje_mag_drugi1 = "";
}

//varjenje 1
$tretja_varjenje1 = "";
if(isset($_POST['tretja_varjenje1'])){
    $tretja_varjenje1  = $_POST['tretja_varjenje1'];
    
    $sql = "SELECT * FROM delavci WHERE id='$tretja_varjenje1';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $tretja_varjenje1 = $row['priimek'];
            }
        } else {
            $tretja_varjenje1 = "";
        }
        $tretja_varjenje1 = iconv('UTF-8', '', $tretja_varjenje1);
}
else{
    $tretja_varjenje1 = "";
}

//varjenje 2
$tretja_varjenje2 = "";
if(isset($_POST['tretja_varjenje2'])){
    $tretja_varjenje2  = $_POST['tretja_varjenje2'];
    
    $sql = "SELECT * FROM delavci WHERE id='$tretja_varjenje2';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $tretja_varjenje2 = $row['priimek'];
            }
        } else {
            $tretja_varjenje2 = "";
        }
        $tretja_varjenje2 = iconv('UTF-8', '', $tretja_varjenje2);
}
else{
    $tretja_varjenje2 = "";
}

//varjenje 3
$tretja_varjenje3 = "";
if(isset($_POST['tretja_varjenje3'])){
    $tretja_varjenje3  = $_POST['tretja_varjenje3'];
    
    $sql = "SELECT * FROM delavci WHERE id='$tretja_varjenje3';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $tretja_varjenje3 = $row['priimek'];
            }
        } else {
            $tretja_varjenje3 = "";
        }
        $tretja_varjenje3 = iconv('UTF-8', '', $tretja_varjenje3);
}
else{
    $tretja_varjenje3 = "";
}

//mletje pvc
$tretja_mletje_pvc1 = "";
if(isset($_POST['tretja_mletje_pvc1'])){
    $tretja_mletje_pvc1  = $_POST['tretja_mletje_pvc1'];
    
    $sql = "SELECT * FROM delavci WHERE id='$tretja_mletje_pvc1';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $tretja_mletje_pvc1 = $row['priimek'];
            }
        } else {
            $tretja_mletje_pvc1 = "";
        }
        $tretja_mletje_pvc1 = iconv('UTF-8', '', $tretja_mletje_pvc1);
}
else{
    $tretja_mletje_pvc1 = "";
}

//leplenje profilleiste 1
$tretja_leplenje_profilleiste1 = "";
if(isset($_POST['tretja_leplenje_profilleiste1'])){
    $tretja_leplenje_profilleiste1  = $_POST['tretja_leplenje_profilleiste1'];
    
    $sql = "SELECT * FROM delavci WHERE id='$tretja_leplenje_profilleiste1';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $tretja_leplenje_profilleiste1 = $row['priimek'];
            }
        } else {
            $tretja_leplenje_profilleiste1 = "";
        }
        $tretja_leplenje_profilleiste1 = iconv('UTF-8', '', $tretja_leplenje_profilleiste1);
}
else{
    $tretja_leplenje_profilleiste1 = "";
}

//leplenje profilleiste 2
$tretja_leplenje_profilleiste2 = "";
if(isset($_POST['tretja_leplenje_profilleiste2'])){
    $tretja_leplenje_profilleiste2  = $_POST['tretja_leplenje_profilleiste2'];
    
    $sql = "SELECT * FROM delavci WHERE id='$tretja_leplenje_profilleiste2';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $tretja_leplenje_profilleiste2 = $row['priimek'];
            }
        } else {
            $tretja_leplenje_profilleiste2 = "";
        }
        $tretja_leplenje_profilleiste2 = iconv('UTF-8', '', $tretja_leplenje_profilleiste2);
}
else{
    $tretja_leplenje_profilleiste2 = "";
}

//ekstruder 1 1
$tretja_ekstruder_prvi1 = "";
if(isset($_POST['tretja_ekstruder_prvi1'])){
    $tretja_ekstruder_prvi1  = $_POST['tretja_ekstruder_prvi1'];
    
    $sql = "SELECT * FROM delavci WHERE id='$tretja_ekstruder_prvi1';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $tretja_ekstruder_prvi1 = $row['priimek'];
            }
        } else {
            $tretja_ekstruder_prvi1 = "";
        }
        $tretja_ekstruder_prvi1 = iconv('UTF-8', '', $tretja_ekstruder_prvi1);
}
else{
    $tretja_ekstruder_prvi1 = "";
}

//ekstruder 2 1
$tretja_ekstruder_drugi1 = "";
if(isset($_POST['tretja_ekstruder_drugi1'])){
    $tretja_ekstruder_drugi1  = $_POST['tretja_ekstruder_drugi1'];
    
    $sql = "SELECT * FROM delavci WHERE id='$tretja_ekstruder_drugi1';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $tretja_ekstruder_drugi1 = $row['priimek'];
            }
        } else {
            $tretja_ekstruder_drugi1 = "";
        }
        $tretja_ekstruder_drugi1 = iconv('UTF-8', '', $tretja_ekstruder_drugi1);
}
else{
    $tretja_ekstruder_drugi1 = "";
}

//ekstruder 2 2
$tretja_ekstruder_drugi2 = "";
if(isset($_POST['tretja_ekstruder_drugi2'])){
    $tretja_ekstruder_drugi2  = $_POST['tretja_ekstruder_drugi2'];
    
    $sql = "SELECT * FROM delavci WHERE id='$tretja_ekstruder_drugi2';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $tretja_ekstruder_drugi2 = $row['priimek'];
            }
        } else {
            $tretja_ekstruder_drugi2 = "";
        }
        $tretja_ekstruder_drugi2 = iconv('UTF-8', '', $tretja_ekstruder_drugi2);
}
else{
    $tretja_ekstruder_drugi2 = "";
}

//pakiranje tesnil 1
$tretja_pakiranje_tesnil1 = "";
if(isset($_POST['tretja_pakiranje_tesnil1'])){
    $tretja_pakiranje_tesnil1  = $_POST['tretja_pakiranje_tesnil1'];
    
    $sql = "SELECT * FROM delavci WHERE id='$tretja_pakiranje_tesnil1';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $tretja_pakiranje_tesnil1 = $row['priimek'];
            }
        } else {
            $tretja_pakiranje_tesnil1 = "";
        }
        $tretja_pakiranje_tesnil1 = iconv('UTF-8', '', $tretja_pakiranje_tesnil1);
}
else{
    $tretja_pakiranje_tesnil1 = "";
}

//pakiranje tesnil 2
$tretja_pakiranje_tesnil2 = "";
if(isset($_POST['tretja_pakiranje_tesnil2'])){
    $tretja_pakiranje_tesnil2  = $_POST['tretja_pakiranje_tesnil2'];
    
    $sql = "SELECT * FROM delavci WHERE id='$tretja_pakiranje_tesnil2';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $tretja_pakiranje_tesnil2 = $row['priimek'];
            }
        } else {
            $tretja_pakiranje_tesnil2 = "";
        }
        $tretja_pakiranje_tesnil2 = iconv('UTF-8', '', $tretja_pakiranje_tesnil2);
}
else{
    $tretja_pakiranje_tesnil2 = "";
}



//create pdf object
$pdf = new FPDF('P','mm','A4');
//add new page
$pdf->AddPage();

//logo
$pdf->Cell(189 ,23,"",0,1);
$pdf->Image("../header/turnalogo.png",119,10,80,22);

//set font to arial, bold, 14pt
$pdf->SetFont('Arial','B',25);

//Cell(width , height , text , border , end line , [align] )
//Proizvodnja in razpored dela napis
$pdf->Cell(189 ,9,"P R O I Z V O D N J A",0,1,'C');
$pdf->SetFont('Arial','U',12);
$pdf->Cell(189 ,7,"RAZPORED DELA ZA DNE: ".$zacetek." - ".$konec."",0,1,'C');

$pdf->SetFont('Arial','B',12);
$pdf->Cell(189 ,6,"1. IZMENA",1,1,'L');//end of line

$pdf->Cell(63 ,5,"VODJA SKUPINE:",1,0);
$pdf->Cell(63 ,5,"VSTAVLJANJE MAG.:",1,0);
$pdf->Cell(63 ,5,"VARJENJE:",1,1);//end of line

$pdf->SetFont('Times','');
$pdf->Cell(63 ,5,"1.".$prva_vodja_skupine,1,0); //vodja skupine
$pdf->Cell(63 ,5,"1.".$prva_vstavljanje_mag_prvi_1,1,0); //stavljanje mag.
$pdf->Cell(63 ,5,"1.".$prva_varjenje1,1,1); //varjenje //end of line

$pdf->SetFont('Arial','B',12);
$pdf->Cell(126 ,5,"MLETJA PVC:",1,0);
$pdf->SetFont('Times','');
$pdf->Cell(63 ,5,"2.".$prva_varjenje2,1,1); //varjenje //end of line

$pdf->Cell(126 ,5,"1.".$prva_mletje_pvc1,1,0); //mletja pvc
$pdf->Cell(63 ,5,"3.".$prva_varjenje3,1,1); //varjenje //end of line

$pdf->Cell(126 ,5,"",1,0); 
$pdf->Cell(63 ,5,"4.".$prva_varjenje4,1,1); //varjenje //end of line

$pdf->Cell(126 ,5,"",1,0); 
$pdf->Cell(63 ,5,"5.".$prva_varjenje5,1,1); //varjenje //end of line

$pdf->SetFont('Arial','B',12);
$pdf->Cell(63 ,5,"EKSTRUDER 1:",1,0);
$pdf->Cell(63 ,5,"PAKIRANJE:",1,0);
$pdf->SetFont('Times','');
$pdf->Cell(63 ,5,"6.".$prva_varjenje6,1,1); //varjenje //end of line

$pdf->Cell(63 ,5,"1.".$prva_ekstruder_prvi1,1,0); //ekstruder
$pdf->Cell(63 ,5,"1.".$prva_pakiranje1,1,0); //pakiranje
$pdf->Cell(63 ,5,"",1,1); //end of line

$pdf->SetFont('Arial','B',12);
$pdf->Cell(63 ,5,"EKSTRUDER 2:",1,0);
$pdf->SetFont('Times','');
$pdf->Cell(63 ,5,"2.".$prva_pakiranje2,1,0); //pakiranje
$pdf->Cell(63 ,5,"",1,1); //end of line

$pdf->Cell(63 ,5,"1.".$prva_ekstruder_drugi1,1,0); //ekstruder 2
$pdf->Cell(63 ,5,"",1,0);
$pdf->Cell(63 ,5,"",1,1); //end of line

$pdf->Cell(63 ,5,"",1,0);
$pdf->Cell(63 ,5,"",1,0);
$pdf->Cell(63 ,5,"",1,1); //end of line

//----------------------------
//2.IZMENA
//----------------------------
$pdf->SetFont('Arial','B',12);
$pdf->Cell(189 ,6,"2. IZMENA",1,1,'L');//end of line

$pdf->Cell(63 ,5,"VODJA SKUPINE:",1,0);
$pdf->Cell(63 ,5,"VSTAVLJANJE MAG.:",1,0);
$pdf->Cell(63 ,5,"VARJENJE:",1,1);//end of line

$pdf->SetFont('Times','');
$pdf->Cell(63 ,5,"1.".$druga_vodja_skupine,1,0); //vodja skupine
$pdf->Cell(63 ,5,"1.".$druga_vstavljanje_mag_prvi1,1,0); //stavljanje mag.
$pdf->Cell(63 ,5,"1.".$druga_varjenje1,1,1); //varjenje //end of line

$pdf->SetFont('Arial','B',12);
$pdf->Cell(126 ,5,"MLETJA PVC:",1,0);
$pdf->SetFont('Times','');
$pdf->Cell(63 ,5,"2.".$druga_varjenje2,1,1); //varjenje //end of line

$pdf->Cell(126 ,5,"1.".$druga_mletje_pvc1,1,0); //mletja pvc
$pdf->Cell(63 ,5,"3.".$druga_varjenje3,1,1); //varjenje //end of line

$pdf->Cell(126 ,5,"",1,0); 
$pdf->Cell(63 ,5,"4.".$druga_varjenje4,1,1); //varjenje //end of line

$pdf->Cell(126 ,5,"",1,0); 
$pdf->Cell(63 ,5,"",1,1);  //end of line

$pdf->SetFont('Arial','B',12);
$pdf->Cell(63 ,5,"EKSTRUDER 1:",1,0);
$pdf->Cell(63 ,5,"PAKIRANJE:",1,0);
$pdf->SetFont('Times','');
$pdf->Cell(63 ,5,"",1,1);  //end of line

$pdf->Cell(63 ,5,"1.".$druga_ekstruder_prvi1,1,0); //ekstruder 1
$pdf->Cell(63 ,5,"1.".$druga_pakiranje1,1,0); //pakiranje
$pdf->Cell(63 ,5,"",1,1); //end of line

$pdf->SetFont('Arial','B',12);
$pdf->Cell(63 ,5,"EKSTRUDER 2:",1,0);
$pdf->SetFont('Times','');
$pdf->Cell(63 ,5,"2.".$druga_pakiranje2,1,0); //pakiranje
$pdf->Cell(63 ,5,"",1,1); //end of line

$pdf->Cell(63 ,5,"1.".$druga_ekstruder_drugi1,1,0); //ekstruder 2
$pdf->Cell(63 ,5,"",1,0);
$pdf->Cell(63 ,5,"",1,1); //end of line

$pdf->Cell(63 ,5,"",1,0);
$pdf->Cell(63 ,5,"",1,0);
$pdf->Cell(63 ,5,"",1,1); //end of line


//----------------------------
//3.IZMENA
//----------------------------
$pdf->SetFont('Arial','B',12);
$pdf->Cell(189 ,6,"3. IZMENA",1,1,'L');//end of line

$pdf->Cell(63 ,5,"VODJA SKUPINE:",1,0);
$pdf->Cell(63 ,5,"VSTAVLJANJE MAG.:",1,0);
$pdf->Cell(63 ,5,"VARJENJE:",1,1);//end of line

$pdf->SetFont('Times','');
$pdf->Cell(63 ,5,"1.".$tretja_vojda_skupine,1,0); //vodja skupine
$pdf->Cell(63 ,5,"1.".$tretja_vstavljanje_mag_prvi1,1,0); //stavljanje mag.
$pdf->Cell(63 ,5,"1.".$tretja_varjenje1,1,1); //varjenje //end of line

$pdf->SetFont('Arial','B',12);
$pdf->Cell(63 ,5,"MLETJA PVC:",1,0);
$pdf->Cell(63 ,5,"VSTAVLJANJE MAG. 2:",1,0);
$pdf->SetFont('Times','');
$pdf->Cell(63 ,5,"2.".$tretja_varjenje2,1,1); //varjenje //end of line

$pdf->Cell(63 ,5,"1.".$tretja_mletje_pvc1,1,0); //mletja pvc
$pdf->Cell(63 ,5,"2.".$tretja_vstavljanje_mag_drugi1,1,0); //vstavljanje mag. 2
$pdf->Cell(63 ,5,"3.".$tretja_varjenje3,1,1); //varjenje //end of line

$pdf->Cell(63 ,5,"",1,0);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(63 ,5,"LEPLJENJE PROFILLEISTE",1,0);
$pdf->SetFont('Times','');
$pdf->Cell(63 ,5,"",1,1);  //end of line

$pdf->Cell(63 ,5,"",1,0);
$pdf->Cell(63 ,5,"1.".$tretja_leplenje_profilleiste1,1,0); //lepljenje profilleiste
$pdf->Cell(63 ,5,"",1,1);  //end of line

$pdf->SetFont('Arial','B',12);
$pdf->Cell(63 ,5,"EKSTRUDER 1:",1,0);
$pdf->SetFont('Times','');
$pdf->Cell(63 ,5,"2.".$tretja_leplenje_profilleiste2,1,0); //lepljenje profilleiste
$pdf->Cell(63 ,5,"",1,1);  //end of line

$pdf->Cell(63 ,5,"1.".$tretja_ekstruder_prvi1,1,0); //ekstruder
$pdf->SetFont('Arial','B',12);
$pdf->Cell(63 ,5,"PAKIRANJE TESNIL",1,0); //pakiranje
$pdf->Cell(63 ,5,"",1,1); //end of line

$pdf->SetFont('Arial','B',12);
$pdf->Cell(63 ,5,"EKSTRUDER 2:",1,0);
$pdf->SetFont('Times','');
$pdf->Cell(63 ,5,"1.".$tretja_pakiranje_tesnil1,1,0); //pakiranje tesnil
$pdf->Cell(63 ,5,"",1,1); //end of line

$pdf->Cell(63 ,5,"1.".$tretja_ekstruder_drugi1,1,0); //ekstruder 2
$pdf->Cell(63 ,5,"2.".$tretja_pakiranje_tesnil2,1,0); //pakiranje tesnil
$pdf->Cell(63 ,5,"",1,1); //end of line

$pdf->Cell(63 ,5,"2.".$tretja_ekstruder_drugi2,1,0); //ekstruder 2
$pdf->Cell(63 ,5,"",1,0);
$pdf->Cell(63 ,5,"",1,1); //end of line


$pdf->Cell(189 ,7,"",0,1); //end of line

/*
$pdf->SetFont('Arial','B',12);
$pdf->Cell(32 ,5,"PORODNISKA: ",1,0);
$pdf->SetFont('Times','');
$pdf->Cell(157 ,5,"",1,1); //end of line
$pdf->SetFont('Arial','B',12);
$pdf->Cell(25 ,5,"BOLNISKA: ",1,0);
$pdf->SetFont('Times','');
$pdf->Cell(164 ,5," ",1,1); //end of line
$pdf->SetFont('Arial','B',12);
$pdf->Cell(20 ,5,"DOPUST:",1,0);
$pdf->SetFont('Times','');
$pdf->Cell(169 ,5,"",1,1); //end of line
$pdf->Cell(189 ,7,"",0,1); //end of line
*/


$pdf->SetFont('Times','B');
$txt = "ŠOŠTANJ; DNE ";
$txt = iconv('UTF-8', 'windows-1252', $txt);
$date = date('d.m.Y');
$pdf->Cell(100 ,6,"".$txt.$date,0,0);
$pdf->Cell(89 ,6,"TEHNICNI DIREKTOR:",0,1,"C");//end of line
$pdf->Cell(100 ,6,"",0,0,"C"); //empty space

$txt = "Aleš Plešnik";
$txt = iconv('UTF-8', 'windows-1252', $txt);
$pdf->Cell(89 ,6,"".$txt,0,1,"C"); //end of line


$pdf->Output();
?>