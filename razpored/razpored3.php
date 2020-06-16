<?php
require("../header/header.php");
?>
<?php
if($_SESSION['stranid']!="razpored"){
    $_SESSION['stranid']="razpored";
    header("Location: ../razpored/razpored.php");
}
?>
<form action="../razpored/razpored.php">
    <button type="submit" class="buttonnav">Nazaj</button>
</form>
<br>
<br>
<form action="#" method="post">
OD:
<input type="date" name="zacetek" value="<?php echo date('Y-m-d'); ?>">
DO:
<input type="date" name="konec" value="<?php $date = new DateTime(); $date->modify('+6 day');
echo $date->format('Y-m-d');?>">    
<button type="submit">Posodobi</button>
</form>

<form method="POST" action="../razpored/razporedpdf3.php">
    <h3><select name='izmena'><option value="1" selected>1.</option><option value="2">2.</option><option value="3">3.</option></select> IZMENA</h3>
<?php
    //Izpiše vse delavce
   $servername = "localhost";
$username = "timensma_timen";
$password = "o6+Kj.56$%ox";
$dbname = "timensma_razpored";

    $date = "";
    $date2 = "";
//DATUM ZACETEK
if(isset($_POST['zacetek'])){
    $date = $_POST['zacetek'];
}
else{
    $date = "";
}
//DATUM KONEC
if(isset($_POST['konec'])){
    $date2 = $_POST['konec'];
}
else{
    $date2 = "";
}
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

echo "<input name='zacetek' value='$date' hidden>";
echo "<input name='konec' value='$date2' hidden>";  

    //Vodja skupine1
    echo "<h2>VODJA SKUPINE:</h2>";
    if (isset($_POST['zacetek']) && isset($_POST['konec'])){
        $zacetek = $_POST['zacetek'];
        $konec = $_POST['konec'];
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='vodja_skupine1'>";
            while($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['ime']."  ".$row['priimek']."</option>";
            }
            echo "</select><br>";
        } else {
            echo '<font color="red">Ni zaposlenih! Dodaj delavce spodaj!</font>';
        }
    }
    
    
    //Grelci
    //izdelava 1
    echo "<h2>Grelci:</h2>";
    echo "Izdelava grela:<br>";
    if (isset($_POST['zacetek']) && isset($_POST['konec'])){
        $zacetek = $_POST['zacetek'];
        $konec = $_POST['konec'];
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='grelci_izdelava1'>";
            while($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['ime']."  ".$row['priimek']."</option>";
            }
            echo "</select><br>";
        } else {
            echo '<font color="red">Ni zaposlenih! Dodaj delavce spodaj!</font>';
        }
    }
    //izdelava 2
    if (isset($_POST['zacetek']) && isset($_POST['konec'])){
        $zacetek = $_POST['zacetek'];
        $konec = $_POST['konec'];
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='grelci_izdelava2'>";
            while($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['ime']."  ".$row['priimek']."</option>";
            }
            echo "</select><br>";
        } else {
            echo '<font color="red">Ni zaposlenih! Dodaj delavce spodaj!</font>';
        }
    }
    //izdelava 3
    if (isset($_POST['zacetek']) && isset($_POST['konec'])){
        $zacetek = $_POST['zacetek'];
        $konec = $_POST['konec'];
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='grelci_izdelava3'>";
            while($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['ime']."  ".$row['priimek']."</option>";
            }
            echo "</select><br>";
        } else {
            echo '<font color="red">Ni zaposlenih! Dodaj delavce spodaj!</font>';
        }
    }
    //izdelava 4
    if (isset($_POST['zacetek']) && isset($_POST['konec'])){
        $zacetek = $_POST['zacetek'];
        $konec = $_POST['konec'];
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='grelci_izdelava4'>";
            while($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['ime']."  ".$row['priimek']."</option>";
            }
            echo "</select><br>";
        } else {
            echo '<font color="red">Ni zaposlenih! Dodaj delavce spodaj!</font>';
        }
    }
    //izdelava 5
    if (isset($_POST['zacetek']) && isset($_POST['konec'])){
        $zacetek = $_POST['zacetek'];
        $konec = $_POST['konec'];
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='grelci_izdelava5'>";
            while($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['ime']."  ".$row['priimek']."</option>";
            }
            echo "</select><br>";
        } else {
            echo '<font color="red">Ni zaposlenih! Dodaj delavce spodaj!</font>';
        }
    }
    //izdelava 6
    if (isset($_POST['zacetek']) && isset($_POST['konec'])){
        $zacetek = $_POST['zacetek'];
        $konec = $_POST['konec'];
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='grelci_izdelava6'>";
            while($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['ime']."  ".$row['priimek']."</option>";
            }
            echo "</select><br>";
        } else {
            echo '<font color="red">Ni zaposlenih! Dodaj delavce spodaj!</font>';
        }
    }
    
    
    //izdelava ogrodja1
    echo "Izdelava ogrodja:<br>";
    if (isset($_POST['zacetek']) && isset($_POST['konec'])){
        $zacetek = $_POST['zacetek'];
        $konec = $_POST['konec'];
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='grelci_izdelava_ogrodja1'>";
            while($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['ime']."  ".$row['priimek']."</option>";
            }
            echo "</select><br>";
        } else {
            echo '<font color="red">Ni zaposlenih! Dodaj delavce spodaj!</font>';
        }
    }
    //izdelava ogrodja2
    if (isset($_POST['zacetek']) && isset($_POST['konec'])){
        $zacetek = $_POST['zacetek'];
        $konec = $_POST['konec'];
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='grelci_izdelava_ogrodja2'>";
            while($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['ime']."  ".$row['priimek']."</option>";
            }
            echo "</select><br>";
        } else {
            echo '<font color="red">Ni zaposlenih! Dodaj delavce spodaj!</font>';
        }
    }
    //izdelava ogrodja3
    if (isset($_POST['zacetek']) && isset($_POST['konec'])){
        $zacetek = $_POST['zacetek'];
        $konec = $_POST['konec'];
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='grelci_izdelava_ogrodja3'>";
            while($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['ime']."  ".$row['priimek']."</option>";
            }
            echo "</select><br>";
        } else {
            echo '<font color="red">Ni zaposlenih! Dodaj delavce spodaj!</font>';
        }
    }
    
    //montaza grelca1
    echo "Montaža grelca:<br>";
    if (isset($_POST['zacetek']) && isset($_POST['konec'])){
        $zacetek = $_POST['zacetek'];
        $konec = $_POST['konec'];
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='grelci_montaza1'>";
            while($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['ime']."  ".$row['priimek']."</option>";
            }
            echo "</select><br>";
        } else {
            echo '<font color="red">Ni zaposlenih! Dodaj delavce spodaj!</font>';
        }
    }
    //montaza grelca2
    if (isset($_POST['zacetek']) && isset($_POST['konec'])){
        $zacetek = $_POST['zacetek'];
        $konec = $_POST['konec'];
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='grelci_montaza2'>";
            while($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['ime']."  ".$row['priimek']."</option>";
            }
            echo "</select><br>";
        } else {
            echo '<font color="red">Ni zaposlenih! Dodaj delavce spodaj!</font>';
        }
    }
    //montaza grelca3
    if (isset($_POST['zacetek']) && isset($_POST['konec'])){
        $zacetek = $_POST['zacetek'];
        $konec = $_POST['konec'];
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='grelci_montaza3'>";
            while($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['ime']."  ".$row['priimek']."</option>";
            }
            echo "</select><br>";
        } else {
            echo '<font color="red">Ni zaposlenih! Dodaj delavce spodaj!</font>';
        }
    }
    //montaza grelca4
    if (isset($_POST['zacetek']) && isset($_POST['konec'])){
        $zacetek = $_POST['zacetek'];
        $konec = $_POST['konec'];
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='grelci_montaza4'>";
            while($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['ime']."  ".$row['priimek']."</option>";
            }
            echo "</select><br>";
        } else {
            echo '<font color="red">Ni zaposlenih! Dodaj delavce spodaj!</font>';
        }
    }
    
    
    //popravila grelcev
    echo "Popravila grelcev:<br>";
    if (isset($_POST['zacetek']) && isset($_POST['konec'])){
        $zacetek = $_POST['zacetek'];
        $konec = $_POST['konec'];
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='popravila_grelcev'>";
            while($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['ime']."  ".$row['priimek']."</option>";
            }
            echo "</select><br>";
        } else {
            echo '<font color="red">Ni zaposlenih! Dodaj delavce spodaj!</font>';
        }
    }
    
    //TEČAJI ETT.
    //Linija1 1
    echo "<h2>Tečaji ETT.:</h2>";
    echo "Linija1:<br>";
    if (isset($_POST['zacetek']) && isset($_POST['konec'])){
        $zacetek = $_POST['zacetek'];
        $konec = $_POST['konec'];
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='linija1_1'>";
            while($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['ime']."  ".$row['priimek']."</option>";
            }
            echo "</select><br>";
        } else {
            echo '<font color="red">Ni zaposlenih! Dodaj delavce spodaj!</font>';
        }
    }
    //Linija1 2
    if (isset($_POST['zacetek']) && isset($_POST['konec'])){
        $zacetek = $_POST['zacetek'];
        $konec = $_POST['konec'];
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='linija1_2'>";
            while($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['ime']."  ".$row['priimek']."</option>";
            }
            echo "</select><br>";
        } else {
            echo '<font color="red">Ni zaposlenih! Dodaj delavce spodaj!</font>';
        }
    }
    //Linija1 3
    if (isset($_POST['zacetek']) && isset($_POST['konec'])){
        $zacetek = $_POST['zacetek'];
        $konec = $_POST['konec'];
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='linija1_3'>";
            while($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['ime']."  ".$row['priimek']."</option>";
            }
            echo "</select><br>";
        } else {
            echo '<font color="red">Ni zaposlenih! Dodaj delavce spodaj!</font>';
        }
    }
    //Linija1 4
    if (isset($_POST['zacetek']) && isset($_POST['konec'])){
        $zacetek = $_POST['zacetek'];
        $konec = $_POST['konec'];
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='linija1_4'>";
            while($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['ime']."  ".$row['priimek']."</option>";
            }
            echo "</select><br>";
        } else {
            echo '<font color="red">Ni zaposlenih! Dodaj delavce spodaj!</font>';
        }
    }
    //Linija1 5
    if (isset($_POST['zacetek']) && isset($_POST['konec'])){
        $zacetek = $_POST['zacetek'];
        $konec = $_POST['konec'];
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='linija1_5'>";
            while($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['ime']."  ".$row['priimek']."</option>";
            }
            echo "</select><br>";
        } else {
            echo '<font color="red">Ni zaposlenih! Dodaj delavce spodaj!</font>';
        }
    }
    //Popravilo tečajev
    echo "Popravilo tečajev:<br>";
    if (isset($_POST['zacetek']) && isset($_POST['konec'])){
        $zacetek = $_POST['zacetek'];
        $konec = $_POST['konec'];
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='popravilo_tecajev'>";
            while($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['ime']."  ".$row['priimek']."</option>";
            }
            echo "</select><br>";
        } else {
            echo '<font color="red">Ni zaposlenih! Dodaj delavce spodaj!</font>';
        }
    }
    
    //TEC. PREMIUM1
    echo "<h2>Tec. Premium:</h2>";
    if (isset($_POST['zacetek']) && isset($_POST['konec'])){
        $zacetek = $_POST['zacetek'];
        $konec = $_POST['konec'];
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='tec_premium1'>";
            while($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['ime']."  ".$row['priimek']."</option>";
            }
            echo "</select><br>";
        } else {
            echo '<font color="red">Ni zaposlenih! Dodaj delavce spodaj!</font>';
        }
    }
    //TEC. PREMIUM2
    if (isset($_POST['zacetek']) && isset($_POST['konec'])){
        $zacetek = $_POST['zacetek'];
        $konec = $_POST['konec'];
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='tec_premium2'>";
            while($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['ime']."  ".$row['priimek']."</option>";
            }
            echo "</select><br>";
        } else {
            echo '<font color="red">Ni zaposlenih! Dodaj delavce spodaj!</font>';
        }
    }
    //TEC. PREMIUM3
    if (isset($_POST['zacetek']) && isset($_POST['konec'])){
        $zacetek = $_POST['zacetek'];
        $konec = $_POST['konec'];
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='tec_premium3'>";
            while($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['ime']."  ".$row['priimek']."</option>";
            }
            echo "</select><br>";
        } else {
            echo '<font color="red">Ni zaposlenih! Dodaj delavce spodaj!</font>';
        }
    }
    //TEC. PREMIUM4
    if (isset($_POST['zacetek']) && isset($_POST['konec'])){
        $zacetek = $_POST['zacetek'];
        $konec = $_POST['konec'];
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='tec_premium4'>";
            while($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['ime']."  ".$row['priimek']."</option>";
            }
            echo "</select><br>";
        } else {
            echo '<font color="red">Ni zaposlenih! Dodaj delavce spodaj!</font>';
        }
    }
    //TEC. PREMIUM5
    if (isset($_POST['zacetek']) && isset($_POST['konec'])){
        $zacetek = $_POST['zacetek'];
        $konec = $_POST['konec'];
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='tec_premium5'>";
            while($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['ime']."  ".$row['priimek']."</option>";
            }
            echo "</select><br>";
        } else {
            echo '<font color="red">Ni zaposlenih! Dodaj delavce spodaj!</font>';
        }
    }
    //TEC. PREMIUM6
    if (isset($_POST['zacetek']) && isset($_POST['konec'])){
        $zacetek = $_POST['zacetek'];
        $konec = $_POST['konec'];
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='tec_premium6'>";
            while($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['ime']."  ".$row['priimek']."</option>";
            }
            echo "</select><br>";
        } else {
            echo '<font color="red">Ni zaposlenih! Dodaj delavce spodaj!</font>';
        }
    }
    
    //TEC. GAGGENAU1
    echo "<h2>Tec. Gaggenau</h2>";
    if (isset($_POST['zacetek']) && isset($_POST['konec'])){
        $zacetek = $_POST['zacetek'];
        $konec = $_POST['konec'];
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='tec_gaggenau1'>";
            while($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['ime']."  ".$row['priimek']."</option>";
            }
            echo "</select><br>";
        } else {
            echo '<font color="red">Ni zaposlenih! Dodaj delavce spodaj!</font>';
        }
    }
    //TEC. GAGGENAU2
    if (isset($_POST['zacetek']) && isset($_POST['konec'])){
        $zacetek = $_POST['zacetek'];
        $konec = $_POST['konec'];
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='tec_gaggenau2'>";
            while($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['ime']."  ".$row['priimek']."</option>";
            }
            echo "</select><br>";
        } else {
            echo '<font color="red">Ni zaposlenih! Dodaj delavce spodaj!</font>';
        }
    }
    
    //AVTOMATSKA L1
    echo "<h2>Avtomatska L:</h2>";
    if (isset($_POST['zacetek']) && isset($_POST['konec'])){
        $zacetek = $_POST['zacetek'];
        $konec = $_POST['konec'];
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='avtomatska_l1'>";
            while($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['ime']."  ".$row['priimek']."</option>";
            }
            echo "</select><br>";
        } else {
            echo '<font color="red">Ni zaposlenih! Dodaj delavce spodaj!</font>';
        }
    }
    //AVTOMATSKA L2
    if (isset($_POST['zacetek']) && isset($_POST['konec'])){
        $zacetek = $_POST['zacetek'];
        $konec = $_POST['konec'];
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='avtomatska_l2'>";
            while($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['ime']."  ".$row['priimek']."</option>";
            }
            echo "</select><br>";
        } else {
            echo '<font color="red">Ni zaposlenih! Dodaj delavce spodaj!</font>';
        }
    }
    //AVTOMATSKA L3
    if (isset($_POST['zacetek']) && isset($_POST['konec'])){
        $zacetek = $_POST['zacetek'];
        $konec = $_POST['konec'];
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='avtomatska_l3'>";
            while($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['ime']."  ".$row['priimek']."</option>";
            }
            echo "</select><br>";
        } else {
            echo '<font color="red">Ni zaposlenih! Dodaj delavce spodaj!</font>';
        }
    }
    //AVTOMATSKA L4
    if (isset($_POST['zacetek']) && isset($_POST['konec'])){
        $zacetek = $_POST['zacetek'];
        $konec = $_POST['konec'];
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='avtomatska_l4'>";
            while($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['ime']."  ".$row['priimek']."</option>";
            }
            echo "</select><br>";
        } else {
            echo '<font color="red">Ni zaposlenih! Dodaj delavce spodaj!</font>';
        }
    }
    //AVTOMATSKA L5
    if (isset($_POST['zacetek']) && isset($_POST['konec'])){
        $zacetek = $_POST['zacetek'];
        $konec = $_POST['konec'];
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='avtomatska_l5'>";
            while($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['ime']."  ".$row['priimek']."</option>";
            }
            echo "</select><br>";
        } else {
            echo '<font color="red">Ni zaposlenih! Dodaj delavce spodaj!</font>';
        }
    }
    //AVTOMATSKA L6
    if (isset($_POST['zacetek']) && isset($_POST['konec'])){
        $zacetek = $_POST['zacetek'];
        $konec = $_POST['konec'];
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='avtomatska_l6'>";
            while($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['ime']."  ".$row['priimek']."</option>";
            }
            echo "</select><br>";
        } else {
            echo '<font color="red">Ni zaposlenih! Dodaj delavce spodaj!</font>';
        }
    }
    
    
    //Vodja skupine2
    echo "<h2>VODJA SKUPINE:</h2>";
    if (isset($_POST['zacetek']) && isset($_POST['konec'])){
        $zacetek = $_POST['zacetek'];
        $konec = $_POST['konec'];
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='vodja_skupine2'>";
            while($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['ime']."  ".$row['priimek']."</option>";
            }
            echo "</select><br>";
        } else {
            echo '<font color="red">Ni zaposlenih! Dodaj delavce spodaj!</font>';
        }
    }
    
    //SUROVIN. ODD.1
    echo "<h2>Surovin. Odd.:</h2>";
    if (isset($_POST['zacetek']) && isset($_POST['konec'])){
        $zacetek = $_POST['zacetek'];
        $konec = $_POST['konec'];
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='surovin_odd1'>";
            while($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['ime']."  ".$row['priimek']."</option>";
            }
            echo "</select><br>";
        } else {
            echo '<font color="red">Ni zaposlenih! Dodaj delavce spodaj!</font>';
        }
    }
    //SUROVIN. ODD.2
    if (isset($_POST['zacetek']) && isset($_POST['konec'])){
        $zacetek = $_POST['zacetek'];
        $konec = $_POST['konec'];
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='surovin_odd2'>";
            while($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['ime']."  ".$row['priimek']."</option>";
            }
            echo "</select><br>";
        } else {
            echo '<font color="red">Ni zaposlenih! Dodaj delavce spodaj!</font>';
        }
    }
    //SUROVIN. ODD.3
    if (isset($_POST['zacetek']) && isset($_POST['konec'])){
        $zacetek = $_POST['zacetek'];
        $konec = $_POST['konec'];
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='surovin_odd3'>";
            while($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['ime']."  ".$row['priimek']."</option>";
            }
            echo "</select><br>";
        } else {
            echo '<font color="red">Ni zaposlenih! Dodaj delavce spodaj!</font>';
        }
    }
    //SUROVIN. ODD.4
    if (isset($_POST['zacetek']) && isset($_POST['konec'])){
        $zacetek = $_POST['zacetek'];
        $konec = $_POST['konec'];
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='surovin_odd4'>";
            while($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['ime']."  ".$row['priimek']."</option>";
            }
            echo "</select><br>";
        } else {
            echo '<font color="red">Ni zaposlenih! Dodaj delavce spodaj!</font>';
        }
    }
    //SUROVIN. ODD.5
    if (isset($_POST['zacetek']) && isset($_POST['konec'])){
        $zacetek = $_POST['zacetek'];
        $konec = $_POST['konec'];
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='surovin_odd5'>";
            while($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['ime']."  ".$row['priimek']."</option>";
            }
            echo "</select><br>";
        } else {
            echo '<font color="red">Ni zaposlenih! Dodaj delavce spodaj!</font>';
        }
    }
    //SUROVIN. ODD.6
    if (isset($_POST['zacetek']) && isset($_POST['konec'])){
        $zacetek = $_POST['zacetek'];
        $konec = $_POST['konec'];
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='surovin_odd6'>";
            while($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['ime']."  ".$row['priimek']."</option>";
            }
            echo "</select><br>";
        } else {
            echo '<font color="red">Ni zaposlenih! Dodaj delavce spodaj!</font>';
        }
    }
    //SUROVIN. ODD.7
    if (isset($_POST['zacetek']) && isset($_POST['konec'])){
        $zacetek = $_POST['zacetek'];
        $konec = $_POST['konec'];
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='surovin_odd7'>";
            while($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['ime']."  ".$row['priimek']."</option>";
            }
            echo "</select><br>";
        } else {
            echo '<font color="red">Ni zaposlenih! Dodaj delavce spodaj!</font>';
        }
    }
    
    //TEC.VARIO HINGE1
    echo "<h2>Tec.  Vario Hinge:</h2>";
    if (isset($_POST['zacetek']) && isset($_POST['konec'])){
        $zacetek = $_POST['zacetek'];
        $konec = $_POST['konec'];
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='tec_vario_hinge1'>";
            while($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['ime']."  ".$row['priimek']."</option>";
            }
            echo "</select><br>";
        } else {
            echo '<font color="red">Ni zaposlenih! Dodaj delavce spodaj!</font>';
        }
    }
    //TEC.VARIO HINGE2
    if (isset($_POST['zacetek']) && isset($_POST['konec'])){
        $zacetek = $_POST['zacetek'];
        $konec = $_POST['konec'];
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='tec_vario_hinge2'>";
            while($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['ime']."  ".$row['priimek']."</option>";
            }
            echo "</select><br>";
        } else {
            echo '<font color="red">Ni zaposlenih! Dodaj delavce spodaj!</font>';
        }
    }
    //TEC.VARIO HINGE3
    if (isset($_POST['zacetek']) && isset($_POST['konec'])){
        $zacetek = $_POST['zacetek'];
        $konec = $_POST['konec'];
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='tec_vario_hinge3'>";
            while($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['ime']."  ".$row['priimek']."</option>";
            }
            echo "</select><br>";
        } else {
            echo '<font color="red">Ni zaposlenih! Dodaj delavce spodaj!</font>';
        }
    }
    
    //GOR. KOLESA1
    echo "<h2>Gor. Kolesa:</h2>";
    if (isset($_POST['zacetek']) && isset($_POST['konec'])){
        $zacetek = $_POST['zacetek'];
        $konec = $_POST['konec'];
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='gor_kolesa1'>";
            while($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['ime']."  ".$row['priimek']."</option>";
            }
            echo "</select><br>";
        } else {
            echo '<font color="red">Ni zaposlenih! Dodaj delavce spodaj!</font>';
        }
    }
    //GOR. KOLESA2
    if (isset($_POST['zacetek']) && isset($_POST['konec'])){
        $zacetek = $_POST['zacetek'];
        $konec = $_POST['konec'];
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='gor_kolesa2'>";
            while($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['ime']."  ".$row['priimek']."</option>";
            }
            echo "</select><br>";
        } else {
            echo '<font color="red">Ni zaposlenih! Dodaj delavce spodaj!</font>';
        }
    }
    //GOR. KOLESA3
    if (isset($_POST['zacetek']) && isset($_POST['konec'])){
        $zacetek = $_POST['zacetek'];
        $konec = $_POST['konec'];
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='gor_kolesa3'>";
            while($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['ime']."  ".$row['priimek']."</option>";
            }
            echo "</select><br>";
        } else {
            echo '<font color="red">Ni zaposlenih! Dodaj delavce spodaj!</font>';
        }
    }
    //GOR. KOLESA4
    if (isset($_POST['zacetek']) && isset($_POST['konec'])){
        $zacetek = $_POST['zacetek'];
        $konec = $_POST['konec'];
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='gor_kolesa4'>";
            while($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['ime']."  ".$row['priimek']."</option>";
            }
            echo "</select><br>";
        } else {
            echo '<font color="red">Ni zaposlenih! Dodaj delavce spodaj!</font>';
        }
    }
    
    
    //VODJA PROIZVODNJE
    echo "<h2>VODJA PROIZVODNJE:</h2>";
    if (isset($_POST['zacetek']) && isset($_POST['konec'])){
        $zacetek = $_POST['zacetek'];
        $konec = $_POST['konec'];
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='vodja_proizvodnje'>";
            while($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['ime']."  ".$row['priimek']."</option>";
            }
            echo "</select><br>";
            echo "<button type='submit' id='dodajdelavca'>Pretvori v PDF</button>";
        } else {
            echo '<font color="red">Ni zaposlenih! Dodaj delavce spodaj!</font>';
        }
    }
    
    $conn->close();
    ?>
</form>
    <br><br><br><br>
<?php
require("../footer/footer.php");
?>

