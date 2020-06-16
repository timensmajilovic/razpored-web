<?php
session_start();
//call the FPDF library
require("../razpored/fpdflib/fpdf.php");

//A4 width : 219mm
//default margin : 10mm each side
//writable horizontal : 219-(10*2)=189mm

//DATUM ZACETEK
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
$izmena = $_POST["izmena"];
$pdf->SetFont('Arial','U',12);
$pdf->Cell(189 ,7,"RAZPORED DELA ZA DNE: ".$zacetek." - ".$konec."",0,1,'C');
$izmena3 = "";
if($izmena == "3"){
    $izmena3 = "Zacetek v nedeljo";
    $izmena3 = iconv('UTF-8', '', $izmena3);
}

$pdf->Cell(189 ,9,"".$izmena3,0,1,'C'); //empty space//end of line

$pdf->SetFont('Arial','B',20);
$pdf->Cell(189 ,12,"DODELAVE:",1,1,'C');//end of line

//set font to arial, bold, 12pt
$pdf->SetFont('Arial','B',13);
$pdf->Cell(189 ,5,"".$izmena.". IZMENA",1,1,'C');//end of line

//set font to arial, bold, 12pt
$pdf->SetFont('Arial','B',12);
$pdf->Cell(32 ,5,"Lid Stay:",1,0);
$pdf->Cell(40 ,5,"Enoosna spona:",1,0);
$pdf->Cell(40 ,5,"Glissando:",1,0);
$pdf->Cell(40 ,5,"Nosilec predala:",1,0);
$pdf->Cell(37 ,5,"Drzalo vrat:",1,1);//end of line


/*$fontName = 'Helvetica';
$pdf->AddFont($fontName,'','HelveticaNeue LightCond.ttf',true);
$pdf->AddFont($fontName,'B','HelveticaNeue MediumCond.ttf',true);
*/

/*$txt = "š  đ  č  ć  ž";
$txt = iconv('UTF-8', '', $txt);*/



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

//LID STAY 1
$lid_stay1 = "";
if(isset($_POST['lid_stay1'])){
    $lid_stay1  = $_POST['lid_stay1'];
    
    $sql = "SELECT * FROM delavci WHERE id='$lid_stay1';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $lid_stay1 = $row['priimek'];
            }
        } else {
            $lid_stay1 = "";
        }
}
else{
    $lid_stay1 = "";
}
//LID STAY 2
$lid_stay2 = "";
if(isset($_POST['lid_stay2'])){
    $lid_stay2  = $_POST['lid_stay2'];
    
    $sql = "SELECT * FROM delavci WHERE id='$lid_stay2';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $lid_stay2 = $row['priimek'];
            }
        } else {
            $lid_stay2 = "";
        }
        $lid_stay2 = iconv('UTF-8', '', $lid_stay2);
}
else{
    $lid_stay2 = "";
}
//LID STAY 3
$lid_stay3 = "";
if(isset($_POST['lid_stay3'])){
    $lid_stay3  = $_POST['lid_stay3'];
    
    $sql = "SELECT * FROM delavci WHERE id='$lid_stay3';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $lid_stay3 = $row['priimek'];
            }
        } else {
            $lid_stay3 = "";
        }
        $lid_stay3 = iconv('UTF-8', '', $lid_stay3);
}
else{
    $lid_stay3 = "";
}
//LID STAY 4
$lid_stay4 = "";
if(isset($_POST['lid_stay4'])){
    $lid_stay4  = $_POST['lid_stay4'];
    
    $sql = "SELECT * FROM delavci WHERE id='$lid_stay4';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $lid_stay4 = $row['priimek'];
            }
        } else {
            $lid_stay4 = "";
        }
        $lid_stay4 = iconv('UTF-8', '', $lid_stay4);
}
else{
    $lid_stay4 = "";
}

//ENOOSNA SPONA 1
$enoosna_spona1 = "";
if(isset($_POST['enoosna_spona1'])){
    $enoosna_spona1  = $_POST['enoosna_spona1'];
    
    $sql = "SELECT * FROM delavci WHERE id='$enoosna_spona1';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $enoosna_spona1 = $row['priimek'];
            }
        } else {
            $enoosna_spona1 = "";
        }
        $enoosna_spona1 = iconv('UTF-8', '', $enoosna_spona1);
}
else{
    $enoosna_spona1 = "";
}
//ENOOSNA SPONA 2
$enoosna_spona2 = "";
if(isset($_POST['enoosna_spona1'])){
    $enoosna_spona2  = $_POST['enoosna_spona2'];
    
    $sql = "SELECT * FROM delavci WHERE id='$enoosna_spona2';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $enoosna_spona2 = $row['priimek'];
            }
        } else {
            $enoosna_spona2 = "";
        }
        $enoosna_spona2 = iconv('UTF-8', '', $enoosna_spona2);
}
else{
    $enoosna_spona2 = "";
}
//ENOOSNA SPONA 3
$enoosna_spona3 = "";
if(isset($_POST['enoosna_spona3'])){
    $enoosna_spona3  = $_POST['enoosna_spona3'];
    
    $sql = "SELECT * FROM delavci WHERE id='$enoosna_spona3';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $enoosna_spona3 = $row['priimek'];
            }
        } else {
            $enoosna_spona3 = "";
        }
        $enoosna_spona3 = iconv('UTF-8', '', $enoosna_spona3);
}
else{
    $enoosna_spona3 = "";
}
//ENOOSNA SPONA 4
$enoosna_spona4 = "";
if(isset($_POST['enoosna_spona4'])){
    $enoosna_spona4  = $_POST['enoosna_spona4'];
    
    $sql = "SELECT * FROM delavci WHERE id='$enoosna_spona4';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $enoosna_spona4 = $row['priimek'];
            }
        } else {
            $enoosna_spona4 = "";
        }
        $enoosna_spona4 = iconv('UTF-8', '', $enoosna_spona4);
}
else{
    $enoosna_spona4 = "";
}

//GLISSANDO 1
$glissando1 = "";
if(isset($_POST['glissando1'])){
    $glissando1  = $_POST['glissando1'];
    
    $sql = "SELECT * FROM delavci WHERE id='$glissando1';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $glissando1 = $row['priimek'];
            }
        } else {
            $glissando1 = "";
        }
        $glissando1 = iconv('UTF-8', '', $glissando1);
}
else{
    $glissando1 = "";
}
//GLISSANDO 2
$glissando2 = "";
if(isset($_POST['glissando2'])){
    $glissando2  = $_POST['glissando2'];
    
    $sql = "SELECT * FROM delavci WHERE id='$glissando2';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $glissando2 = $row['priimek'];
            }
        } else {
            $glissando2 = "";
        }
        $glissando2 = iconv('UTF-8', '', $glissando2);
}
else{
    $glissando2 = "";
}

//NOSILEC PREDALA 1
$nosilec_predala1 = "";
if(isset($_POST['nosilec_predala1'])){
    $nosilec_predala1  = $_POST['nosilec_predala1'];
    
    $sql = "SELECT * FROM delavci WHERE id='$nosilec_predala1';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $nosilec_predala1 = $row['priimek'];
            }
        } else {
            $nosilec_predala1 = "";
        }
        $nosilec_predala1 = iconv('UTF-8', '', $nosilec_predala1);
}
else{
    $nosilec_predala1 = "";
}
//NOSILEC PREDALA 2
$nosilec_predala2 = "";
if(isset($_POST['nosilec_predala2'])){
    $nosilec_predala2  = $_POST['nosilec_predala2'];
    
    $sql = "SELECT * FROM delavci WHERE id='$nosilec_predala2';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $nosilec_predala2 = $row['priimek'];
            }
        } else {
            $nosilec_predala2 = "";
        }
        $nosilec_predala2 = iconv('UTF-8', '', $nosilec_predala2);
}
else{
    $nosilec_predala2 = "";
}

//VODJA SKUPINE
$vodja_skupine = "";
if(isset($_POST['vodja_skupine'])){
    $vodja_skupine  = $_POST['vodja_skupine'];
    
    $sql = "SELECT * FROM delavci WHERE id='$vodja_skupine';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $vodja_skupine = "".$row['priimek']." ".$row['ime'];
            }
        } else {
            $vodja_skupine = "";
        }
        $vodja_skupine = iconv('UTF-8', '', $vodja_skupine);
}
else{
    $vodja_skupine = "";
}

//VELIKOSTNI VLOŽKI 1
$velikostni_vlozki1 = "";
if(isset($_POST['velikostni_vlozki1'])){
    $velikostni_vlozki1  = $_POST['velikostni_vlozki1'];
    
    $sql = "SELECT * FROM delavci WHERE id='$velikostni_vlozki1';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $velikostni_vlozki1 = $row['priimek'];
            }
        } else {
            $velikostni_vlozki1 = "";
        }
        $velikostni_vlozki1 = iconv('UTF-8', '', $velikostni_vlozki1);
}
else{
    $velikostni_vlozki1 = "";
}
//VELIKOSTNI VLOŽKI 1
$velikostni_vlozki2 = "";
if(isset($_POST['velikostni_vlozki2'])){
    $velikostni_vlozki2  = $_POST['velikostni_vlozki2'];
    
    $sql = "SELECT * FROM delavci WHERE id='$velikostni_vlozki2';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $velikostni_vlozki2 = $row['priimek'];
            }
        } else {
            $velikostni_vlozki2 = "";
        }
        $velikostni_vlozki2 = iconv('UTF-8', '', $velikostni_vlozki2);
}
else{
    $velikostni_vlozki2 = "";
}

//AVTOMAT
$avtomat = "";
if(isset($_POST['avtomat'])){
    $avtomat  = $_POST['avtomat'];
    
    $sql = "SELECT * FROM delavci WHERE id='$avtomat';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $avtomat = $row['priimek'];
            }
        } else {
            $avtomat = "";
        }
        $avtomat = iconv('UTF-8', '', $avtomat);
}
else{
    $avtomat = "";
}

//PAKIRANJE 1
$pakiranje1 = "";
if(isset($_POST['pakiranje1'])){
    $pakiranje1  = $_POST['pakiranje1'];
    
    $sql = "SELECT * FROM delavci WHERE id='$pakiranje1';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $pakiranje1 = $row['priimek'];
            }
        } else {
            $pakiranje1 = "";
        }
        $pakiranje1 = iconv('UTF-8', '', $pakiranje1);
}
else{
    $pakiranje1 = "";
}
//PAKIRANJE 2
$pakiranje2 = "";
if(isset($_POST['pakiranje2'])){
    $pakiranje2  = $_POST['pakiranje2'];
    
    $sql = "SELECT * FROM delavci WHERE id='$pakiranje2';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $pakiranje2 = $row['priimek'];
            }
        } else {
            $pakiranje2 = "";
        }
        $pakiranje2 = iconv('UTF-8', '', $pakiranje2);
}
else{
    $pakiranje2 = "";
}

//KARUZL
$karuzl = "";
if(isset($_POST['karuzl'])){
    $karuzl  = $_POST['karuzl'];
    
    $sql = "SELECT * FROM delavci WHERE id='$karuzl';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $karuzl = $row['priimek'];
            }
        } else {
            $karuzl = "";
        }
        $karuzl = iconv('UTF-8', '', $karuzl);
}
else{
    $karuzl = "";
}

//ROČNA SESTAVA 1
$rocna_sestava1 = "";
if(isset($_POST['rocna_sestava1'])){
    $rocna_sestava1  = $_POST['rocna_sestava1'];
    
    $sql = "SELECT * FROM delavci WHERE id='$rocna_sestava1';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $rocna_sestava1 = $row['priimek'];
            }
        } else {
            $rocna_sestava1 = "";
        }
        $rocna_sestava1 = iconv('UTF-8', '', $rocna_sestava1);
}
else{
    $rocna_sestava1 = "";
}
//ROČNA SESTAVA 2
$rocna_sestava2 = "";
if(isset($_POST['rocna_sestava2'])){
    $rocna_sestava2  = $_POST['rocna_sestava2'];
    
    $sql = "SELECT * FROM delavci WHERE id='$rocna_sestava2';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $rocna_sestava2 = $row['priimek'];
            }
        } else {
            $rocna_sestava2 = "";
        }
        $rocna_sestava2 = iconv('UTF-8', '', $rocna_sestava2);
}
else{
    $rocna_sestava2 = "";
}
//ROČNA SESTAVA 3
$rocna_sestava3 = "";
if(isset($_POST['rocna_sestava3'])){
    $rocna_sestava3  = $_POST['rocna_sestava3'];
    
    $sql = "SELECT * FROM delavci WHERE id='$rocna_sestava3';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $rocna_sestava3 = $row['priimek'];
            }
        } else {
            $rocna_sestava3 = "";
        }
        $rocna_sestava3 = iconv('UTF-8', '', $rocna_sestava3);
}
else{
    $rocna_sestava3 = "";
}
//ROČNA SESTAVA 4
$rocna_sestava4 = "";
if(isset($_POST['rocna_sestava4'])){
    $rocna_sestava4  = $_POST['rocna_sestava4'];
    
    $sql = "SELECT * FROM delavci WHERE id='$rocna_sestava4';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $rocna_sestava4 = $row['priimek'];
            }
        } else {
            $rocna_sestava4 = "";
        }
        $rocna_sestava4 = iconv('UTF-8', '', $rocna_sestava4);
}
else{
    $rocna_sestava4 = "";
}
//ROČNA SESTAVA 5
$rocna_sestava5 = "";
if(isset($_POST['rocna_sestava5'])){
    $rocna_sestava5  = $_POST['rocna_sestava5'];
    
    $sql = "SELECT * FROM delavci WHERE id='$rocna_sestava5';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $rocna_sestava5 = $row['priimek'];
            }
        } else {
            $rocna_sestava5 = "";
        }
        $rocna_sestava5 = iconv('UTF-8', '', $rocna_sestava5);
}
else{
    $rocna_sestava5 = "";
}
//ROČNA SESTAVA 6
$rocna_sestava6 = "";
if(isset($_POST['rocna_sestava6'])){
    $rocna_sestava6  = $_POST['rocna_sestava6'];
    
    $sql = "SELECT * FROM delavci WHERE id='$rocna_sestava6';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $rocna_sestava6 = $row['priimek'];
            }
        } else {
            $rocna_sestava6 = "";
        }
        $rocna_sestava6 = iconv('UTF-8', '', $rocna_sestava6);
}
else{
    $rocna_sestava6 = "";
}

//PODNOŽJA 1
$podnozja1 = "";
if(isset($_POST['podnozja1'])){
    $podnozja1  = $_POST['podnozja1'];
    
    $sql = "SELECT * FROM delavci WHERE id='$podnozja1';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $podnozja1 = $row['priimek'];
            }
        } else {
            $podnozja1 = "";
        }
        $podnozja1 = iconv('UTF-8', '', $podnozja1);
}
else{
    $podnozja1 = "";
}
//PODNOŽJA 2
$podnozja2 = "";
if(isset($_POST['podnozja2'])){
    $podnozja2  = $_POST['podnozja2'];
    
    $sql = "SELECT * FROM delavci WHERE id='$podnozja2';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $podnozja2 = $row['priimek'];
            }
        } else {
            $podnozja2 = "";
        }
        $podnozja2 = iconv('UTF-8', '', $podnozja2);
}
else{
    $podnozja2 = "";
}
//PODNOŽJA 3
$podnozja3 = "";
if(isset($_POST['podnozja3'])){
    $podnozja3  = $_POST['podnozja3'];
    
    $sql = "SELECT * FROM delavci WHERE id='$podnozja3';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $podnozja3 = $row['priimek'];
            }
        } else {
            $podnozja3 = "";
        }
        $podnozja3 = iconv('UTF-8', '', $podnozja3);
}
else{
    $podnozja3 = "";
}
//PODNOŽJA 4
$podnozja4 = "";
if(isset($_POST['podnozja4'])){
    $podnozja4  = $_POST['podnozja4'];
    
    $sql = "SELECT * FROM delavci WHERE id='$podnozja4';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $podnozja4 = $row['priimek'];
            }
        } else {
            $podnozja4 = "";
        }
        $podnozja4 = iconv('UTF-8', '', $podnozja4);
}
else{
    $podnozja4 = "";
}
//PODNOŽJA 5
$podnozja5 = "";
if(isset($_POST['podnozja5'])){
    $podnozja5  = $_POST['podnozja5'];
    
    $sql = "SELECT * FROM delavci WHERE id='$podnozja5';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $podnozja5 = $row['priimek'];
            }
        } else {
            $podnozja5 = "";
        }
        $podnozja5 = iconv('UTF-8', '', $podnozja5);
}
else{
    $podnozja5 = "";
}
//PODNOŽJA 6
$podnozja6 = "";
if(isset($_POST['podnozja6'])){
    $podnozja6  = $_POST['podnozja6'];
    
    $sql = "SELECT * FROM delavci WHERE id='$podnozja6';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $podnozja6 = $row['priimek'];
            }
        } else {
            $podnozja6 = "";
        }
        $podnozja6 = iconv('UTF-8', '', $podnozja6);
}
else{
    $podnozja6 = "";
}
//PODNOŽJA 7
$podnozja7 = "";
if(isset($_POST['podnozja7'])){
    $podnozja7  = $_POST['podnozja7'];
    
    $sql = "SELECT * FROM delavci WHERE id='$podnozja7';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $podnozja7 = $row['priimek'];
            }
        } else {
            $podnozja7 = "";
        }
        $podnozja7 = iconv('UTF-8', '', $podnozja7);
}
else{
    $podnozja7 = "";
}
//PODNOŽJA 8
$podnozja8 = "";
if(isset($_POST['podnozja8'])){
    $podnozja8  = $_POST['podnozja8'];
    
    $sql = "SELECT * FROM delavci WHERE id='$podnozja8';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $podnozja8 = $row['priimek'];
            }
        } else {
            $podnozja8 = "";
        }
        $podnozja8 = iconv('UTF-8', '', $podnozja8);
}
else{
    $podnozja8 = "";
}
//PODNOŽJA 9
$podnozja9 = "";
if(isset($_POST['podnozja9'])){
    $podnozja9  = $_POST['podnozja9'];
    
    $sql = "SELECT * FROM delavci WHERE id='$podnozja9';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $podnozja9 = $row['priimek'];
            }
        } else {
            $podnozja9 = "";
        }
        $podnozja9 = iconv('UTF-8', '', $podnozja9);
}
else{
    $podnozja9 = "";
}

//NAVOJI 1
$navoji1 = "";
if(isset($_POST['navoji1'])){
    $navoji1  = $_POST['navoji1'];
    
    $sql = "SELECT * FROM delavci WHERE id='$navoji1';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $navoji1 = $row['priimek'];
            }
        } else {
            $navoji1 = "";
        }
        $navoji1 = iconv('UTF-8', '', $navoji1);
}
else{
    $navoji1 = "";
}
//NAVOJI 2
$navoji2 = "";
if(isset($_POST['navoji2'])){
    $navoji2  = $_POST['navoji2'];
    
    $sql = "SELECT * FROM delavci WHERE id='$navoji2';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $navoji2 = $row['priimek'];
            }
        } else {
            $navoji2 = "";
        }
        $navoji2 = iconv('UTF-8', '', $navoji2);
}
else{
    $navoji2 = "";
}
//NAVOJI 3
$navoji3 = "";
if(isset($_POST['navoji3'])){
    $navoji3  = $_POST['navoji3'];
    
    $sql = "SELECT * FROM delavci WHERE id='$navoji3';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $navoji3 = $row['priimek'];
            }
        } else {
            $navoji3 = "";
        }
        $navoji3 = iconv('UTF-8', '', $navoji3);
}
else{
    $navoji3 = "";
}



$pdf->SetFont('Times','');
$pdf->Cell(32 ,5,"1.".$lid_stay1,1,0);
$pdf->Cell(40 ,5,"1.".$enoosna_spona1,1,0);
$pdf->Cell(40 ,5,"1.".$glissando1,1,0);
$pdf->Cell(40 ,5,"1.".$nosilec_predala1,1,0);
$pdf->Cell(37 ,5,"1.",1,1);//end of line
$pdf->SetFont('Times','');
$pdf->Cell(32 ,5,"2.".$lid_stay2,1,0);
$pdf->Cell(40 ,5,"2.".$enoosna_spona2,1,0);
$pdf->Cell(40 ,5,"2.".$glissando2,1,0);
$pdf->Cell(40 ,5,"2.".$nosilec_predala2,1,0);
$pdf->Cell(37 ,5,"2.",1,1);//end of line
$pdf->SetFont('Times','');
$pdf->Cell(32 ,5,"3.".$lid_stay3,1,0);
$pdf->Cell(40 ,5,"3.".$enoosna_spona3,1,0);
$pdf->Cell(40 ,5,"",1,0);
$pdf->Cell(40 ,5,"",1,0);
$pdf->Cell(37 ,5,"3.",1,1);//end of line
$pdf->SetFont('Times','');
$pdf->Cell(32 ,5,"4.".$lid_stay4,1,0);
$pdf->Cell(40 ,5,"4.".$enoosna_spona4,1,0);
$pdf->Cell(40 ,5,"",1,0);
$pdf->Cell(40 ,5,"",1,0);
$pdf->Cell(37 ,5,"4.",1,1);//end of line

$pdf->SetFont('Arial','B',15);
$pdf->Cell(189 ,18,"PROGRAM ETI:",1,1,"C"); //end of line
$pdf->Cell(189 ,11,"VODJA SKUPINE:",1,1,"C"); //end of line

$pdf->SetFont('Times','B', 13);
$pdf->Cell(189 ,8,"".$vodja_skupine,1,1,"C"); //end of line

$pdf->SetFont('Arial','B',12);
$txt = "Velikostni vložki:";
$txt = iconv('UTF-8', '', $txt);
$pdf->Cell(40 ,14,"".$txt,1,0,"C");
$pdf->SetFont('Arial','B',12);
$pdf->Cell(149 ,8,"KAPE:",1,1,"C");
$pdf->Cell(40 ,6,"",0,0);//empty space
$pdf->Cell(30 ,6,"Avtomat:",1,0);
$pdf->Cell(50 ,6,"Pakiranje:",1,0);
$pdf->Cell(30 ,6,"Karuzl:",1,0);
$pdf->Cell(39 ,6,"Rocna sestava:",1,1);//end of line


$pdf->SetFont('Times','');
$pdf->Cell(40 ,6,"1.".$velikostni_vlozki1,1,0); //velikostni vlozki
$pdf->Cell(30 ,6,"1.".$avtomat,1,0); //avtomat
$pdf->Cell(50 ,6,"1.".$pakiranje1,1,0); //pakiranje
$pdf->Cell(30 ,6,"1.".$karuzl,1,0); //karuzl
$pdf->Cell(39 ,6,"1.".$rocna_sestava1,1,1); //rocna sestava //end of line

$pdf->Cell(40 ,6,"2.".$velikostni_vlozki2,1,0); //velikostni vlozki
$pdf->Cell(30 ,6,"",1,0); //empty space
$pdf->Cell(50 ,6,"2.".$pakiranje2,1,0); //pakiranje
$pdf->Cell(30 ,6,"",1,0); //empty space
$pdf->Cell(39 ,6,"2.".$rocna_sestava2,1,1); //rocna sestava //end of line

$pdf->Cell(40 ,6,"",1,0); //empty space
$pdf->Cell(30 ,6,"",1,0); //empty space
$pdf->Cell(50 ,6,"",1,0); //empty space
$pdf->Cell(30 ,6,"",1,0); //empty space
$pdf->Cell(39 ,6,"3.".$rocna_sestava3,1,1); //rocna sestava //end of line

$pdf->Cell(40 ,6,"",1,0); //empty space
$pdf->Cell(30 ,6,"",1,0); //empty space
$pdf->Cell(50 ,6,"",1,0); //empty space
$pdf->Cell(30 ,6,"",1,0); //empty space
$pdf->Cell(39 ,6,"4.".$rocna_sestava4,1,1); //rocna sestava //end of line

$pdf->SetFont('Arial','B',12);
$pdf->Cell(40 ,6,"Podnozja:",1,0);
$pdf->Cell(30 ,6,"",1,0); //empty space
$pdf->Cell(50 ,6,"Navoji:",1,0);
$pdf->Cell(30 ,6,"",1,0); //empty space
$pdf->SetFont('Times','');
$pdf->Cell(39 ,6,"5.".$rocna_sestava5,1,1); //rocna sestava //end of line

$pdf->Cell(40 ,6,"1.".$podnozja1,1,0); //podnožja
$pdf->Cell(30 ,6,"",1,0); //empty space
$pdf->Cell(50 ,6,"1.".$navoji1,1,0); //navoji
$pdf->Cell(30 ,6,"",1,0); //empty space
$pdf->Cell(39 ,6,"6.".$rocna_sestava6,1,1); //rocna sestava //end of line

$pdf->Cell(40 ,6,"2.".$podnozja2,1,0); //podnožja
$pdf->Cell(30 ,6,"",1,0); //empty space
$pdf->Cell(50 ,6,"2.".$navoji2,1,0); //navoji
$pdf->Cell(30 ,6,"",1,0); //empty space
$pdf->Cell(39 ,6,"",1,1); //end of line

$pdf->Cell(40 ,6,"3.".$podnozja3,1,0); //podnožja
$pdf->Cell(30 ,6,"",1,0); //empty space
$pdf->Cell(50 ,6,"3.".$navoji3,1,0); //navoji
$pdf->Cell(30 ,6,"",1,0); //empty space
$pdf->Cell(39 ,6,"",1,1); //end of line

$pdf->Cell(40 ,6,"4.".$podnozja4,1,0); //podnožja
$pdf->Cell(30 ,6,"",1,0); //empty space
$pdf->Cell(50 ,6,"",1,0); //empty space
$pdf->Cell(30 ,6,"",1,0); //empty space
$pdf->Cell(39 ,6,"",1,1); //end of line

$pdf->Cell(40 ,6,"5.".$podnozja5,1,0); //podnožja
$pdf->Cell(30 ,6,"",1,0); //empty space
$pdf->Cell(50 ,6,"",1,0); //empty space
$pdf->Cell(30 ,6,"",1,0); //empty space
$pdf->Cell(39 ,6,"",1,1); //end of line

$pdf->Cell(40 ,6,"6.".$podnozja6,1,0); //podnožja
$pdf->Cell(30 ,6,"",1,0); //empty space
$pdf->Cell(50 ,6,"",1,0); //empty space
$pdf->Cell(30 ,6,"",1,0); //empty space
$pdf->Cell(39 ,6,"",1,1); //end of line

$pdf->Cell(40 ,6,"7.".$podnozja7,1,0); //podnožja
$pdf->Cell(30 ,6,"",1,0); //empty space
$pdf->Cell(50 ,6,"",1,0); //empty space
$pdf->Cell(30 ,6,"",1,0); //empty space
$pdf->Cell(39 ,6,"",1,1); //end of line

$pdf->Cell(40 ,6,"8.".$podnozja8,1,0); //podnožja
$pdf->Cell(30 ,6,"",1,0); //empty space
$pdf->Cell(50 ,6,"",1,0); //empty space
$pdf->Cell(30 ,6,"",1,0); //empty space
$pdf->Cell(39 ,6,"",1,1); //end of line

$pdf->Cell(40 ,6,"9.".$podnozja9,1,0); //podnožja
$pdf->Cell(30 ,6,"",1,0); //empty space
$pdf->Cell(50 ,6,"",1,0); //empty space
$pdf->Cell(30 ,6,"",1,0); //empty space
$pdf->Cell(39 ,6,"",1,1); //end of line

$pdf->Cell(189 ,10,"",0,1); //empty space//end of line


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

$conn->close();
//output the result
$pdf->Output();
echo "<form action='../razpored/razpored1.php'>
    <button type='submit' class='buttonnav'>Nazaj</button>
</form>";
?>