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

//vodja skupine 1
$vodja_skupine1 = "";
if(isset($_POST['vodja_skupine1'])){
    $vodja_skupine1  = $_POST['vodja_skupine1'];
    
    $sql = "SELECT * FROM delavci WHERE id='$vodja_skupine1';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $vodja_skupine1 = "".$row['priimek']." ".$row['ime'];
            }
        } else {
            $vodja_skupine1 = "";
        }
        $vodja_skupine1 = iconv('UTF-8', '', $vodja_skupine1);
}
else{
    $vodja_skupine1 = "";
}

//GRELCI
//izdelava 1
$grelci_izdelava1 = "";
if(isset($_POST['grelci_izdelava1'])){
    $grelci_izdelava1  = $_POST['grelci_izdelava1'];
    
    $sql = "SELECT * FROM delavci WHERE id='$grelci_izdelava1';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $grelci_izdelava1 = $row['priimek'];
            }
        } else {
            $grelci_izdelava1 = "";
        }
        $grelci_izdelava1 = iconv('UTF-8', '', $grelci_izdelava1);
}
else{
    $grelci_izdelava1 = "";
}
//izdelava 2
$grelci_izdelava2 = "";
if(isset($_POST['grelci_izdelava2'])){
    $grelci_izdelava2  = $_POST['grelci_izdelava2'];
    
    $sql = "SELECT * FROM delavci WHERE id='$grelci_izdelava2';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $grelci_izdelava2 = $row['priimek'];
            }
        } else {
            $grelci_izdelava2 = "";
        }
        $grelci_izdelava2 = iconv('UTF-8', '', $grelci_izdelava2);
}
else{
    $grelci_izdelava2 = "";
}
//izdelava 3
$grelci_izdelava3 = "";
if(isset($_POST['grelci_izdelava3'])){
    $grelci_izdelava3  = $_POST['grelci_izdelava3'];
    
    $sql = "SELECT * FROM delavci WHERE id='$grelci_izdelava3';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $grelci_izdelava3 = $row['priimek'];
            }
        } else {
            $grelci_izdelava3 = "";
        }
        $grelci_izdelava3 = iconv('UTF-8', '', $grelci_izdelava3);
}
else{
    $grelci_izdelava3 = "";
}
//izdelava 4
$grelci_izdelava4 = "";
if(isset($_POST['grelci_izdelava4'])){
    $grelci_izdelava4  = $_POST['grelci_izdelava4'];
    
    $sql = "SELECT * FROM delavci WHERE id='$grelci_izdelava4';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $grelci_izdelava4 = $row['priimek'];
            }
        } else {
            $grelci_izdelava4 = "";
        }
        $grelci_izdelava4 = iconv('UTF-8', '', $grelci_izdelava4);
}
else{
    $grelci_izdelava4 = "";
}
//izdelava 5
$grelci_izdelava5 = "";
if(isset($_POST['grelci_izdelava5'])){
    $grelci_izdelava5  = $_POST['grelci_izdelava5'];
    
    $sql = "SELECT * FROM delavci WHERE id='$grelci_izdelava5';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $grelci_izdelava5 = $row['priimek'];
            }
        } else {
            $grelci_izdelava5 = "";
        }
        $grelci_izdelava5 = iconv('UTF-8', '', $grelci_izdelava5);
}
else{
    $grelci_izdelava5 = "";
}
//izdelava 6
$grelci_izdelava6 = "";
if(isset($_POST['grelci_izdelava6'])){
    $grelci_izdelava6  = $_POST['grelci_izdelava6'];
    
    $sql = "SELECT * FROM delavci WHERE id='$grelci_izdelava6';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $grelci_izdelava6 = $row['priimek'];
            }
        } else {
            $grelci_izdelava6 = "";
        }
        $grelci_izdelava6 = iconv('UTF-8', '', $grelci_izdelava6);
}
else{
    $grelci_izdelava6 = "";
}

//izdelava ogrodja1
$grelci_izdelava_ogrodja1 = "";
if(isset($_POST['grelci_izdelava_ogrodja1'])){
    $grelci_izdelava_ogrodja1  = $_POST['grelci_izdelava_ogrodja1'];
    
    $sql = "SELECT * FROM delavci WHERE id='$grelci_izdelava_ogrodja1';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $grelci_izdelava_ogrodja1 = $row['priimek'];
            }
        } else {
            $grelci_izdelava_ogrodja1 = "";
        }
        $grelci_izdelava_ogrodja1 = iconv('UTF-8', '', $grelci_izdelava_ogrodja1);
}
else{
    $grelci_izdelava_ogrodja1 = "";
}
//izdelava ogrodja2
$grelci_izdelava_ogrodja2 = "";
if(isset($_POST['grelci_izdelava_ogrodja2'])){
    $grelci_izdelava_ogrodja2  = $_POST['grelci_izdelava_ogrodja2'];
    
    $sql = "SELECT * FROM delavci WHERE id='$grelci_izdelava_ogrodja2';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $grelci_izdelava_ogrodja2 = $row['priimek'];
            }
        } else {
            $grelci_izdelava_ogrodja2 = "";
        }
        $grelci_izdelava_ogrodja2 = iconv('UTF-8', '', $grelci_izdelava_ogrodja2);
}
else{
    $grelci_izdelava_ogrodja2 = "";
}
//izdelava ogrodja3
$grelci_izdelava_ogrodja3 = "";
if(isset($_POST['grelci_izdelava_ogrodja3'])){
    $grelci_izdelava_ogrodja3  = $_POST['grelci_izdelava_ogrodja3'];
    
    $sql = "SELECT * FROM delavci WHERE id='$grelci_izdelava_ogrodja3';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $grelci_izdelava_ogrodja3 = $row['priimek'];
            }
        } else {
            $grelci_izdelava_ogrodja3 = "";
        }
        $grelci_izdelava_ogrodja3 = iconv('UTF-8', '', $grelci_izdelava_ogrodja3);
}
else{
    $grelci_izdelava_ogrodja3 = "";
}

//montaza grelca1
$grelci_montaza1 = "";
if(isset($_POST['grelci_montaza1'])){
    $grelci_montaza1  = $_POST['grelci_montaza1'];
    
    $sql = "SELECT * FROM delavci WHERE id='$grelci_montaza1';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $grelci_montaza1 = $row['priimek'];
            }
        } else {
            $grelci_montaza1 = "";
        }
        $grelci_montaza1 = iconv('UTF-8', '', $grelci_montaza1);
}
else{
    $grelci_montaza1 = "";
}
//montaza grelca2
$grelci_montaza2 = "";
if(isset($_POST['grelci_montaza2'])){
    $grelci_montaza2  = $_POST['grelci_montaza2'];
    
    $sql = "SELECT * FROM delavci WHERE id='$grelci_montaza2';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $grelci_montaza2 = $row['priimek'];
            }
        } else {
            $grelci_montaza2 = "";
        }
        $grelci_montaza2 = iconv('UTF-8', '', $grelci_montaza2);
}
else{
    $grelci_montaza2 = "";
}
//montaza grelca3
$grelci_montaza3 = "";
if(isset($_POST['grelci_montaza3'])){
    $grelci_montaza3  = $_POST['grelci_montaza3'];
    
    $sql = "SELECT * FROM delavci WHERE id='$grelci_montaza3';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $grelci_montaza3 = $row['priimek'];
            }
        } else {
            $grelci_montaza3 = "";
        }
        $grelci_montaza3 = iconv('UTF-8', '', $grelci_montaza3);
}
else{
    $grelci_montaza3 = "";
}
//montaza grelca3
$grelci_montaza4 = "";
if(isset($_POST['grelci_montaza4'])){
    $grelci_montaza4  = $_POST['grelci_montaza4'];
    
    $sql = "SELECT * FROM delavci WHERE id='$grelci_montaza4';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $grelci_montaza4 = $row['priimek'];
            }
        } else {
            $grelci_montaza4 = "";
        }
        $grelci_montaza4 = iconv('UTF-8', '', $grelci_montaza4);
}
else{
    $grelci_montaza4 = "";
}

//popravila grelcev
$popravila_grelcev = "";
if(isset($_POST['popravila_grelcev'])){
    $popravila_grelcev  = $_POST['popravila_grelcev'];
    
    $sql = "SELECT * FROM delavci WHERE id='$popravila_grelcev';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $popravila_grelcev = $row['priimek'];
            }
        } else {
            $popravila_grelcev = "";
        }
        $popravila_grelcev = iconv('UTF-8', '', $popravila_grelcev);
}
else{
    $popravila_grelcev = "";
}

//Linija1 1
$linija1_1 = "";
if(isset($_POST['linija1_1'])){
    $linija1_1  = $_POST['linija1_1'];
    
    $sql = "SELECT * FROM delavci WHERE id='$linija1_1';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $linija1_1 = $row['priimek'];
            }
        } else {
            $linija1_1 = "";
        }
        $linija1_1 = iconv('UTF-8', '', $linija1_1);
}
else{
    $linija1_1 = "";
}
//Linija1 2
$linija1_2 = "";
if(isset($_POST['linija1_2'])){
    $linija1_2  = $_POST['linija1_2'];
    
    $sql = "SELECT * FROM delavci WHERE id='$linija1_2';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $linija1_2 = $row['priimek'];
            }
        } else {
            $linija1_2 = "";
        }
        $linija1_2 = iconv('UTF-8', '', $linija1_2);
}
else{
    $linija1_2 = "";
}
//Linija1 3
$linija1_3 = "";
if(isset($_POST['linija1_3'])){
    $linija1_3  = $_POST['linija1_3'];
    
    $sql = "SELECT * FROM delavci WHERE id='$linija1_3';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $linija1_3 = $row['priimek'];
            }
        } else {
            $linija1_3 = "";
        }
        $linija1_3 = iconv('UTF-8', '', $linija1_3);
}
else{
    $linija1_3 = "";
}
//Linija1 4
$linija1_4 = "";
if(isset($_POST['linija1_4'])){
    $linija1_4  = $_POST['linija1_4'];
    
    $sql = "SELECT * FROM delavci WHERE id='$linija1_4';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $linija1_4 = $row['priimek'];
            }
        } else {
            $linija1_4 = "";
        }
        $linija1_4 = iconv('UTF-8', '', $linija1_4);
}
else{
    $linija1_4 = "";
}
//Linija1 5
$linija1_5 = "";
if(isset($_POST['linija1_5'])){
    $linija1_5  = $_POST['linija1_5'];
    
    $sql = "SELECT * FROM delavci WHERE id='$linija1_5';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $linija1_5 = $row['priimek'];
            }
        } else {
            $linija1_5 = "";
        }
        $linija1_5 = iconv('UTF-8', '', $linija1_5);
}
else{
    $linija1_5 = "";
}

//Popravilo tečajev
$popravilo_tecajev = "";
if(isset($_POST['popravilo_tecajev'])){
    $popravilo_tecajev  = $_POST['popravilo_tecajev'];
    
    $sql = "SELECT * FROM delavci WHERE id='$popravilo_tecajev';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $popravilo_tecajev = $row['priimek'];
            }
        } else {
            $popravilo_tecajev = "";
        }
        $popravilo_tecajev = iconv('UTF-8', '', $popravilo_tecajev);
}
else{
    $popravilo_tecajev = "";
}

//TEC. PREMIUM1
$tec_premium1 = "";
if(isset($_POST['tec_premium1'])){
    $tec_premium1  = $_POST['tec_premium1'];
    
    $sql = "SELECT * FROM delavci WHERE id='$tec_premium1';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $tec_premium1 = $row['priimek'];
            }
        } else {
            $tec_premium1 = "";
        }
        $tec_premium1 = iconv('UTF-8', '', $tec_premium1);
}
else{
    $tec_premium1 = "";
}
//TEC. PREMIUM2
$tec_premium2 = "";
if(isset($_POST['tec_premium2'])){
    $tec_premium2  = $_POST['tec_premium2'];
    
    $sql = "SELECT * FROM delavci WHERE id='$tec_premium2';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $tec_premium2 = $row['priimek'];
            }
        } else {
            $tec_premium2 = "";
        }
        $tec_premium2 = iconv('UTF-8', '', $tec_premium2);
}
else{
    $tec_premium2 = "";
}
//TEC. PREMIUM3
$tec_premium3 = "";
if(isset($_POST['tec_premium3'])){
    $tec_premium3  = $_POST['tec_premium3'];
    
    $sql = "SELECT * FROM delavci WHERE id='$tec_premium3';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $tec_premium3 = $row['priimek'];
            }
        } else {
            $tec_premium3 = "";
        }
        $tec_premium3 = iconv('UTF-8', '', $tec_premium3);
}
else{
    $tec_premium3 = "";
}
//TEC. PREMIUM4
$tec_premium4 = "";
if(isset($_POST['tec_premium4'])){
    $tec_premium4  = $_POST['tec_premium4'];
    
    $sql = "SELECT * FROM delavci WHERE id='$tec_premium4';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $tec_premium4 = $row['priimek'];
            }
        } else {
            $tec_premium4 = "";
        }
        $tec_premium4 = iconv('UTF-8', '', $tec_premium4);
}
else{
    $tec_premium4 = "";
}
//
$test = "";
if(isset($_POST['test'])){
    $test  = $_POST['test'];
    
    $sql = "SELECT * FROM delavci WHERE id='$test';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $test = $row['priimek'];
            }
        } else {
            $test = "";
        }
        $test = iconv('UTF-8', '', $test);
}
else{
    $test = "";
}
//TEC. PREMIUM5
$tec_premium5 = "";
if(isset($_POST['tec_premium5'])){
    $tec_premium5  = $_POST['tec_premium5'];
    
    $sql = "SELECT * FROM delavci WHERE id='$tec_premium5';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $tec_premium5 = $row['priimek'];
            }
        } else {
            $tec_premium5 = "";
        }
        $tec_premium5 = iconv('UTF-8', '', $tec_premium5);
}
else{
    $tec_premium5 = "";
}
//TEC. PREMIUM6
$tec_premium6 = "";
if(isset($_POST['tec_premium6'])){
    $tec_premium6  = $_POST['tec_premium6'];
    
    $sql = "SELECT * FROM delavci WHERE id='$tec_premium6';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $tec_premium6 = $row['priimek'];
            }
        } else {
            $tec_premium6 = "";
        }
        $tec_premium6 = iconv('UTF-8', '', $tec_premium6);
}
else{
    $tec_premium6 = "";
}

//TEC. GAGGENAU1
$tec_gaggenau1 = "";
if(isset($_POST['tec_gaggenau1'])){
    $tec_gaggenau1  = $_POST['tec_gaggenau1'];
    
    $sql = "SELECT * FROM delavci WHERE id='$tec_gaggenau1';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $tec_gaggenau1 = $row['priimek'];
            }
        } else {
            $tec_gaggenau1 = "";
        }
        $tec_gaggenau1 = iconv('UTF-8', '', $tec_gaggenau1);
}
else{
    $tec_gaggenau1 = "";
}
//TEC. GAGGENAU2
$tec_gaggenau2 = "";
if(isset($_POST['tec_gaggenau2'])){
    $tec_gaggenau2  = $_POST['tec_gaggenau2'];
    
    $sql = "SELECT * FROM delavci WHERE id='$tec_gaggenau2';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $tec_gaggenau2 = $row['priimek'];
            }
        } else {
            $tec_gaggenau2 = "";
        }
        $tec_gaggenau2 = iconv('UTF-8', '', $tec_gaggenau2);
}
else{
    $tec_gaggenau2 = "";
}

//AVTOMATSKA L1
$avtomatska_l1 = "";
if(isset($_POST['avtomatska_l1'])){
    $avtomatska_l1  = $_POST['avtomatska_l1'];
    
    $sql = "SELECT * FROM delavci WHERE id='$avtomatska_l1';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $avtomatska_l1 = $row['priimek'];
            }
        } else {
            $avtomatska_l1 = "";
        }
        $avtomatska_l1 = iconv('UTF-8', '', $avtomatska_l1);
}
else{
    $avtomatska_l1 = "";
}
//AVTOMATSKA L2
$avtomatska_l2 = "";
if(isset($_POST['avtomatska_l2'])){
    $avtomatska_l2  = $_POST['avtomatska_l2'];
    
    $sql = "SELECT * FROM delavci WHERE id='$avtomatska_l2';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $avtomatska_l2 = $row['priimek'];
            }
        } else {
            $avtomatska_l2 = "";
        }
        $avtomatska_l2 = iconv('UTF-8', '', $avtomatska_l2);
}
else{
    $avtomatska_l2 = "";
}
//AVTOMATSKA L3
$avtomatska_l3 = "";
if(isset($_POST['avtomatska_l3'])){
    $avtomatska_l3  = $_POST['avtomatska_l3'];
    
    $sql = "SELECT * FROM delavci WHERE id='$avtomatska_l3';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $avtomatska_l3 = $row['priimek'];
            }
        } else {
            $avtomatska_l3 = "";
        }
        $avtomatska_l3 = iconv('UTF-8', '', $avtomatska_l3);
}
else{
    $avtomatska_l3 = "";
}
//AVTOMATSKA L4
$avtomatska_l4 = "";
if(isset($_POST['avtomatska_l4'])){
    $avtomatska_l4  = $_POST['avtomatska_l4'];
    
    $sql = "SELECT * FROM delavci WHERE id='$avtomatska_l4';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $avtomatska_l4 = $row['priimek'];
            }
        } else {
            $avtomatska_l4 = "";
        }
        $avtomatska_l4 = iconv('UTF-8', '', $avtomatska_l4);
}
else{
    $avtomatska_l4 = "";
}
//AVTOMATSKA L5
$avtomatska_l5 = "";
if(isset($_POST['avtomatska_l5'])){
    $avtomatska_l5  = $_POST['avtomatska_l5'];
    
    $sql = "SELECT * FROM delavci WHERE id='$avtomatska_l5';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $avtomatska_l5 = $row['priimek'];
            }
        } else {
            $avtomatska_l5 = "";
        }
        $avtomatska_l5 = iconv('UTF-8', '', $avtomatska_l5);
}
else{
    $avtomatska_l5 = "";
}
//AVTOMATSKA L6
$avtomatska_l6 = "";
if(isset($_POST['avtomatska_l6'])){
    $avtomatska_l6  = $_POST['avtomatska_l6'];
    
    $sql = "SELECT * FROM delavci WHERE id='$avtomatska_l6';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $avtomatska_l6 = $row['priimek'];
            }
        } else {
            $avtomatska_l6 = "";
        }
        $avtomatska_l6 = iconv('UTF-8', '', $avtomatska_l6);
}
else{
    $avtomatska_l6 = "";
}


//Vodja skupine2
$vodja_skupine2 = "";
if(isset($_POST['vodja_skupine2'])){
    $vodja_skupine2  = $_POST['vodja_skupine2'];
    
    $sql = "SELECT * FROM delavci WHERE id='$vodja_skupine2';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $vodja_skupine2 = $row['priimek'];
            }
        } else {
            $vodja_skupine2 = "";
        }
        $vodja_skupine2 = iconv('UTF-8', '', $vodja_skupine2);
}
else{
    $vodja_skupine2 = "";
}
//SUROVIN. ODD.1
$surovin_odd1 = "";
if(isset($_POST['surovin_odd1'])){
    $surovin_odd1  = $_POST['surovin_odd1'];
    
    $sql = "SELECT * FROM delavci WHERE id='$surovin_odd1';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $surovin_odd1 = $row['priimek'];
            }
        } else {
            $surovin_odd1 = "";
        }
        $surovin_odd1 = iconv('UTF-8', '', $surovin_odd1);
}
else{
    $surovin_odd1 = "";
}
//SUROVIN. ODD.2
$surovin_odd2 = "";
if(isset($_POST['surovin_odd2'])){
    $surovin_odd2  = $_POST['surovin_odd2'];
    
    $sql = "SELECT * FROM delavci WHERE id='$surovin_odd2';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $surovin_odd2 = $row['priimek'];
            }
        } else {
            $surovin_odd2 = "";
        }
        $surovin_odd2 = iconv('UTF-8', '', $surovin_odd2);
}
else{
    $surovin_odd2 = "";
}
//SUROVIN. ODD.3
$surovin_odd3 = "";
if(isset($_POST['surovin_odd3'])){
    $surovin_odd3  = $_POST['surovin_odd3'];
    
    $sql = "SELECT * FROM delavci WHERE id='$surovin_odd3';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $surovin_odd3 = $row['priimek'];
            }
        } else {
            $surovin_odd3 = "";
        }
        $surovin_odd3 = iconv('UTF-8', '', $surovin_odd3);
}
else{
    $surovin_odd3 = "";
}
//SUROVIN. ODD.4
$surovin_odd4 = "";
if(isset($_POST['surovin_odd4'])){
    $surovin_odd4  = $_POST['surovin_odd4'];
    
    $sql = "SELECT * FROM delavci WHERE id='$surovin_odd4';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $surovin_odd4 = $row['priimek'];
            }
        } else {
            $surovin_odd4 = "";
        }
        $surovin_odd4 = iconv('UTF-8', '', $surovin_odd4);
}
else{
    $surovin_odd4 = "";
}
//SUROVIN. ODD.5
$surovin_odd5 = "";
if(isset($_POST['surovin_odd5'])){
    $surovin_odd5  = $_POST['surovin_odd5'];
    
    $sql = "SELECT * FROM delavci WHERE id='$surovin_odd5';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $surovin_odd5 = $row['priimek'];
            }
        } else {
            $surovin_odd5 = "";
        }
        $surovin_odd5 = iconv('UTF-8', '', $surovin_odd5);
}
else{
    $surovin_odd5 = "";
}
//SUROVIN. ODD.6
$surovin_odd6 = "";
if(isset($_POST['surovin_odd6'])){
    $surovin_odd6  = $_POST['surovin_odd6'];
    
    $sql = "SELECT * FROM delavci WHERE id='$surovin_odd6';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $surovin_odd6 = $row['priimek'];
            }
        } else {
            $surovin_odd6 = "";
        }
        $surovin_odd6 = iconv('UTF-8', '', $surovin_odd6);
}
else{
    $surovin_odd6 = "";
}
//SUROVIN. ODD.7
$surovin_odd7 = "";
if(isset($_POST['surovin_odd7'])){
    $surovin_odd7  = $_POST['surovin_odd7'];
    
    $sql = "SELECT * FROM delavci WHERE id='$surovin_odd7';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $surovin_odd7 = $row['priimek'];
            }
        } else {
            $surovin_odd7 = "";
        }
        $surovin_odd7 = iconv('UTF-8', '', $surovin_odd7);
}
else{
    $surovin_odd7 = "";
}

//TEC.VARIO HINGE1
$tec_vario_hinge1 = "";
if(isset($_POST['tec_vario_hinge1'])){
    $tec_vario_hinge1  = $_POST['tec_vario_hinge1'];
    
    $sql = "SELECT * FROM delavci WHERE id='$tec_vario_hinge1';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $tec_vario_hinge1 = $row['priimek'];
            }
        } else {
            $tec_vario_hinge1 = "";
        }
        $tec_vario_hinge1 = iconv('UTF-8', '', $tec_vario_hinge1);
}
else{
    $tec_vario_hinge1 = "";
}
//TEC.VARIO HINGE2
$tec_vario_hinge2 = "";
if(isset($_POST['tec_vario_hinge2'])){
    $tec_vario_hinge2  = $_POST['tec_vario_hinge2'];
    
    $sql = "SELECT * FROM delavci WHERE id='$tec_vario_hinge2';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $tec_vario_hinge2 = $row['priimek'];
            }
        } else {
            $tec_vario_hinge2 = "";
        }
        $tec_vario_hinge2 = iconv('UTF-8', '', $tec_vario_hinge2);
}
else{
    $tec_vario_hinge2 = "";
}
//TEC.VARIO HINGE3
$tec_vario_hinge3 = "";
if(isset($_POST['tec_vario_hinge3'])){
    $tec_vario_hinge3  = $_POST['tec_vario_hinge3'];
    
    $sql = "SELECT * FROM delavci WHERE id='$tec_vario_hinge3';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $tec_vario_hinge3 = $row['priimek'];
            }
        } else {
            $tec_vario_hinge3 = "";
        }
        $tec_vario_hinge3 = iconv('UTF-8', '', $tec_vario_hinge3);
}
else{
    $tec_vario_hinge3 = "";
}

//GOR. KOLESA1
$gor_kolesa1 = "";
if(isset($_POST['gor_kolesa1'])){
    $gor_kolesa1  = $_POST['gor_kolesa1'];
    
    $sql = "SELECT * FROM delavci WHERE id='$gor_kolesa1';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $gor_kolesa1 = $row['priimek'];
            }
        } else {
            $gor_kolesa1 = "";
        }
        $gor_kolesa1 = iconv('UTF-8', '', $gor_kolesa1);
}
else{
    $gor_kolesa1 = "";
}
//GOR. KOLESA2
$gor_kolesa2 = "";
if(isset($_POST['gor_kolesa2'])){
    $gor_kolesa2  = $_POST['gor_kolesa2'];
    
    $sql = "SELECT * FROM delavci WHERE id='$gor_kolesa2';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $gor_kolesa2 = $row['priimek'];
            }
        } else {
            $gor_kolesa2 = "";
        }
        $gor_kolesa2 = iconv('UTF-8', '', $gor_kolesa2);
}
else{
    $gor_kolesa2 = "";
}
//GOR. KOLESA3
$gor_kolesa3 = "";
if(isset($_POST['gor_kolesa3'])){
    $gor_kolesa3  = $_POST['gor_kolesa3'];
    
    $sql = "SELECT * FROM delavci WHERE id='$gor_kolesa3';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $gor_kolesa3 = $row['priimek'];
            }
        } else {
            $gor_kolesa3 = "";
        }
        $gor_kolesa3 = iconv('UTF-8', '', $gor_kolesa3);
}
else{
    $gor_kolesa3 = "";
}
//GOR. KOLESA4
$gor_kolesa4 = "";
if(isset($_POST['gor_kolesa4'])){
    $gor_kolesa4  = $_POST['gor_kolesa4'];
    
    $sql = "SELECT * FROM delavci WHERE id='$gor_kolesa4';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $gor_kolesa4 = $row['priimek'];
            }
        } else {
            $gor_kolesa4 = "";
        }
        $gor_kolesa4 = iconv('UTF-8', '', $gor_kolesa4);
}
else{
    $gor_kolesa4 = "";
}

//VODJA PROIZVODNJE
$vodja_proizvodnje = "";
if(isset($_POST['vodja_proizvodnje'])){
    $vodja_proizvodnje  = $_POST['vodja_proizvodnje'];
    
    $sql = "SELECT * FROM delavci WHERE id='$vodja_proizvodnje';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $vodja_proizvodnje = "".$row['priimek']." ".$row['ime'];
            }
        } else {
            $vodja_proizvodnje = "";
        }
}
else{
    $vodja_proizvodnje = "";
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
$pdf->Cell(189 ,8,"",0,1);


$pdf->SetFont('Arial','B',12);
$pdf->Cell(45 ,5,"1. IZMENA",1,0);
$pdf->Cell(74 ,5,"VODJA SKUPINE:",1,0, 'C');
$pdf->Cell(40 ,5,"VODJA SKUPINE:",1,0, 'C');
$pdf->Cell(30 ,5,"",1,1); //end of line

$pdf->Cell(45 ,5,"",1,0);
$pdf->SetFont('Times','B');
$pdf->Cell(74 ,5,"".$vodja_skupine1,1,0,'C'); //vodja skupine
$pdf->Cell(40 ,5,"".$vodja_skupine2,1,0,'C'); //vodja skupine surovine
$pdf->Cell(30 ,5,"",1,1);

$pdf->SetFont('Arial','B',12);
$pdf->Cell(45 ,5,"GRELCI",1,0);
$pdf->Cell(35 ,5,"TECAJI ETT",1,0);
$pdf->Cell(39 ,5,"TEC. PREMIUM",1,0);
$pdf->Cell(40 ,5,"SUROVIN. ODD.",1,0);
$pdf->Cell(30 ,5,"",1,1);

$pdf->SetFont('Times','B');
$pdf->Cell(45 ,5,"Izdelava grela:",1,0);
$pdf->Cell(35 ,5,"Linija 1:",1,0);
$pdf->Cell(39 ,5,"",1,0);
$pdf->Cell(40 ,5,"",1,0);
$pdf->Cell(30 ,5,"",1,1);

$pdf->SetFont('Times','');
$pdf->Cell(45 ,5,"1.".$grelci_izdelava1,1,0); //grelci
$pdf->Cell(35 ,5,"1.".$linija1_1,1,0); //tecaji ett
$pdf->Cell(39 ,5,"1.".$tec_premium1,1,0); //tecaji premium
$pdf->Cell(40 ,5,"1.".$surovin_odd1,1,0); //surovin. odd.
$pdf->Cell(30 ,5,"",1,1); //end of line

$pdf->Cell(45 ,5,"2.".$grelci_izdelava2,1,0); //grelci
$pdf->Cell(35 ,5,"2.".$linija1_2,1,0); //tecaji ett
$pdf->Cell(39 ,5,"2.".$tec_premium2,1,0); //tecaji premium
$pdf->Cell(40 ,5,"2.".$surovin_odd2,1,0); //surovin. odd.
$pdf->Cell(30 ,5,"",1,1); //end of line

$pdf->Cell(45 ,5,"3.".$grelci_izdelava3,1,0); //grelci
$pdf->Cell(35 ,5,"3.".$linija1_3,1,0); //tecaji ett
$pdf->Cell(39 ,5,"3.".$tec_premium3,1,0); //tecaji premium
$pdf->Cell(40 ,5,"3.".$surovin_odd3,1,0); //surovin. odd.
$pdf->Cell(30 ,5,"",1,1); //end of line

$pdf->Cell(45 ,5,"4.".$grelci_izdelava4,1,0); //grelci
$pdf->Cell(35 ,5,"4.".$linija1_4,1,0); //tecaji ett
$pdf->Cell(39 ,5,"4.".$tec_premium4,1,0); //tecaji premium
$pdf->Cell(40 ,5,"4.".$surovin_odd4,1,0); //surovin. odd.
$pdf->Cell(30 ,5,"",1,1); //end of line

$pdf->Cell(45 ,5,"5.".$grelci_izdelava5,1,0); //grelci
$pdf->Cell(35 ,5,"5.".$linija1_5,1,0); //tecaji ett
$pdf->Cell(39 ,5,"5.".$tec_premium5,1,0); //tecaji premium
$pdf->Cell(40 ,5,"5.".$surovin_odd5,1,0); //surovin. odd.
$pdf->Cell(30 ,5,"",1,1); //end of line

$pdf->Cell(45 ,5,"6.".$grelci_izdelava6,1,0); //grelci
$pdf->Cell(35 ,5,"",1,0);
$pdf->Cell(39 ,5,"6.".$tec_premium6,1,0); //tecaji premium
$pdf->Cell(40 ,5,"6.".$surovin_odd6,1,0); //surovin. odd.
$pdf->Cell(30 ,5,"",1,1); //end of line

$pdf->Cell(45 ,5,"",1,0);
$pdf->Cell(35 ,5,"",1,0);
$pdf->Cell(39 ,5,"",1,0);
$pdf->Cell(40 ,5,"7.".$surovin_odd7 ,1,0); //surovin. odd.
$pdf->Cell(30 ,5,"",1,1); //end of line

$pdf->Cell(45 ,5,"",1,0);
$pdf->Cell(35 ,5,"",1,0);
$pdf->Cell(39 ,5,"",1,0);
$pdf->Cell(40 ,5,"",1,0);
$pdf->Cell(30 ,5,"",1,1); //end of line

$pdf->SetFont('Times','B');
$pdf->Cell(45 ,5,"Izdelava ogrodja:",1,0);
$pdf->Cell(35 ,5,"",1,0);
$pdf->Cell(39 ,5,"",1,0);
$pdf->Cell(40 ,5,"",1,0);
$pdf->Cell(30 ,5,"",1,1); //end of line

$pdf->SetFont('Times','');
$pdf->Cell(45 ,5,"1.".$grelci_izdelava_ogrodja1,1,0); //izdelava ogrodja
$pdf->SetFont('Times','B');
$pdf->Cell(35 ,5,"",1,0);
$pdf->Cell(39 ,5,"TEC. GAGGENAU",1,0);
$pdf->Cell(40 ,5,"TEC.VARIO HINGE",1,0);
$pdf->Cell(30 ,5,"GOR KOLESA",1,1); //end of line

$pdf->SetFont('Times','');
$pdf->Cell(45 ,5,"2.".$grelci_izdelava_ogrodja2,1,0); //izdelava ogrodja
$pdf->Cell(35 ,5,"",1,0);
$pdf->Cell(39 ,5,"1.".$tec_gaggenau1,1,0); //gaggenau
$pdf->Cell(40 ,5,"1.".$tec_vario_hinge1,1,0); //vario hinge
$pdf->Cell(30 ,5,"1.".$gor_kolesa1,1,1); //gor kolesa //end of line

$pdf->Cell(45 ,5,"3.".$grelci_izdelava_ogrodja3,1,0); //izdelava ogrodja
$pdf->Cell(35 ,5,"",1,0);
$pdf->Cell(39 ,5,"2.".$tec_gaggenau2,1,0); //gaggenau
$pdf->Cell(40 ,5,"2.".$tec_vario_hinge2,1,0); //vario hinge
$pdf->Cell(30 ,5,"2.".$gor_kolesa2,1,1); //gor kolesa //end of line

$pdf->Cell(45 ,5,"",1,0);
$pdf->Cell(35 ,5,"",1,0);
$pdf->Cell(39 ,5,"",1,0);
$pdf->Cell(40 ,5,"3.".$tec_vario_hinge3,1,0); //vario hinge
$pdf->Cell(30 ,5,"3.".$gor_kolesa3,1,1); //gor kolesa //end of line

$pdf->SetFont('Times','B');
$pdf->Cell(45 ,5,"Montaza grelca:",1,0);
$pdf->Cell(35 ,5,"",1,0);
$pdf->Cell(39 ,5,"AVTOMATSKA L:",1,0);
$pdf->Cell(40 ,5,"",1,0);
$pdf->SetFont('Times','');
$pdf->Cell(30 ,5,"4.".$gor_kolesa4,1,1); //gor kolesa //end of line

$pdf->Cell(45 ,5,"1.".$grelci_montaza1,1,0); //montaza grelca
$pdf->Cell(35 ,5,"",1,0);
$pdf->Cell(39 ,5,"1.".$avtomatska_l1,1,0); //avtomatska L
$pdf->Cell(40 ,5,"",1,0);
$pdf->Cell(30 ,5,"",1,1); //end of line

$pdf->Cell(45 ,5,"2.".$grelci_montaza2,1,0); //montaza grelca
$pdf->Cell(35 ,5,"",1,0);
$pdf->Cell(39 ,5,"2.".$avtomatska_l2,1,0); //avtomatska L
$pdf->Cell(40 ,5,"",1,0);
$pdf->Cell(30 ,5,"",1,1); //end of line

$pdf->Cell(45 ,5,"3.".$grelci_montaza3,1,0); //montaza grelca
$pdf->Cell(35 ,5,"",1,0);
$pdf->Cell(39 ,5,"3.".$avtomatska_l3,1,0); //avtomatska L
$pdf->Cell(40 ,5,"",1,0);
$pdf->Cell(30 ,5,"",1,1); //end of line

$pdf->Cell(45 ,5,"4.".$grelci_montaza4,1,0); //montaza grelca
$pdf->Cell(35 ,5,"",1,0);
$pdf->Cell(39 ,5,"4.".$avtomatska_l4,1,0); //avtomatska L
$pdf->Cell(40 ,5,"",1,0);
$pdf->Cell(30 ,5,"",1,1); //end of line

$pdf->Cell(45 ,5,"",1,0);
$pdf->Cell(35 ,5,"",1,0);
$pdf->Cell(39 ,5,"5.".$avtomatska_l5,1,0); //avtomatska L
$pdf->Cell(40 ,5,"",1,0);
$pdf->Cell(30 ,5,"",1,1); //end of line

$pdf->SetFont('Times','B');
$pdf->Cell(45 ,5,"Popravilo grelcev:",1,0);
$pdf->Cell(35 ,5,"Popravilo tecajev:",1,0);
$pdf->SetFont('Times','');
$pdf->Cell(39 ,5,"6.".$avtomatska_l6,1,0); //avtomatska L
$pdf->Cell(40 ,5,"",1,0);
$pdf->Cell(30 ,5,"",1,1); //end of line

$pdf->Cell(45 ,5,"1.".$popravila_grelcev,1,0); //popravilo grelcev
$pdf->Cell(35 ,5,"1.".$popravilo_tecajev,1,0); //popravilo tecajev
$pdf->Cell(39 ,5,"",1,0);
$pdf->Cell(40 ,5,"",1,0);
$pdf->Cell(30 ,5,"",1,1); //end of line

$pdf->Cell(45 ,5,"",1,0);
$pdf->Cell(35 ,5,"",1,0);
$pdf->Cell(39 ,5,"",1,0);
$pdf->Cell(40 ,5,"",1,0);
$pdf->Cell(30 ,5,"",1,1); //end of line

$pdf->SetFont('Arial','B',12);
$pdf->Cell(45 ,20,"VODJA PROIZ.:",1,0,'C');
$pdf->Cell(144 ,20,"".$vodja_proizvodnje,1,1);

$pdf->Cell(189 ,8,"",0,1);
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