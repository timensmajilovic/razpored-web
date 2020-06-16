<?php
require("../header/header.php");
?>
<?php
if($_SESSION['stranid']!="razpored"){
    $_SESSION['stranid']="razpored";
    header("Location: ../razpored/razpored.php");
}
?>
<div id="test">
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
</div>


<form method="post" action="../razpored/razporedpdf.php">
<span>
<h2>DODELAVE:</h2>
<h3><select name='izmena'><option value="1" selected>1.</option><option value="2">2.</option><option value="3">3.</option></select> IZMENA</h3>
    
    <?php
    //Izpiše vse delavce
    $servername = "localhost";
$username = "timensma_timen";
$password = "o6+Kj.56$%ox";
$dbname = "timensma_razpored";

    /*$date = date('Y-m-d');
    $date2 = new DateTimeImmutable();
    $date2->modify('+6 day');*/
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

    echo "<input name='zacetek' value='$date' hidden>";
    echo "<input name='konec' value='$date2' hidden>";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    //LID STAY
    echo "Lid stay: <br>";
    if (isset($_POST['zacetek']) && isset($_POST['konec'])){
        $zacetek = $_POST['zacetek'];
        $konec = $_POST['konec'];
        //$sql = "SELECT DISTINCT d.* FROM delavci d INNER JOIN statusi s ON d.id=s.delavec_id WHERE ((s.ime!='Zaseden' AND s.ime!='Porodniška' AND s.ime!='Bolniška' AND s.ime!='Dopust') AND s.ime='Brez dela') AND (((datum_z >= '$zacetek') AND (datum_k <='$konec')) AND ((datum_z <= '$konec') AND (datum_k >='$zacetek')) AND (datum_z BETWEEN '$zacetek' AND '$konec'));";
        //$sql = "SELECT DISTINCT d.* FROM delavci d INNER JOIN statusi s ON d.id=s.delavec_id WHERE (s.ime!='Dopust' AND s.ime!='Bolniška' AND s.ime!='Porodniška' AND s.ime!='Zaseden') AND (((datum_z >= '$zacetek') AND (datum_k <='$konec')) AND ((datum_z <= '$konec') AND (datum_k >='$zacetek')) AND (datum_z BETWEEN '$zacetek' AND '$konec'));";
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='lid_stay1'>";
            while($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['ime']."  ".$row['priimek']."</option>";
            }
            echo "</select><br>";
        } else {
            echo '<font color="red">Ni zaposlenih! Dodaj delavce spodaj!</font>';
        }
    }if (isset($_POST['zacetek']) && isset($_POST['konec'])){
        $zacetek = $_POST['zacetek'];
        $konec = $_POST['konec'];
        //$sql = "SELECT DISTINCT d.* FROM delavci d INNER JOIN statusi s ON d.id=s.delavec_id WHERE ((s.ime!='Zaseden' AND s.ime!='Porodniška' AND s.ime!='Bolniška' AND s.ime!='Dopust') AND s.ime='Brez dela') AND (((datum_z >= '$zacetek') AND (datum_k <='$konec')) AND ((datum_z <= '$konec') AND (datum_k >='$zacetek')) AND (datum_z BETWEEN '$zacetek' AND '$konec'));";
        //$sql = "SELECT DISTINCT d.* FROM delavci d INNER JOIN statusi s ON d.id=s.delavec_id WHERE (s.ime!='Dopust' AND s.ime!='Bolniška' AND s.ime!='Porodniška' AND s.ime!='Zaseden') AND (((datum_z >= '$zacetek') AND (datum_k <='$konec')) AND ((datum_z <= '$konec') AND (datum_k >='$zacetek')) AND (datum_z BETWEEN '$zacetek' AND '$konec'));";
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='lid_stay2'>";
            while($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['ime']."  ".$row['priimek']."</option>";
            }
            echo "</select><br>";
        } else {
            echo '<font color="red">Ni zaposlenih! Dodaj delavce spodaj!</font>';
        }
    }if (isset($_POST['zacetek']) && isset($_POST['konec'])){
        $zacetek = $_POST['zacetek'];
        $konec = $_POST['konec'];
        //$sql = "SELECT DISTINCT d.* FROM delavci d INNER JOIN statusi s ON d.id=s.delavec_id WHERE ((s.ime!='Zaseden' AND s.ime!='Porodniška' AND s.ime!='Bolniška' AND s.ime!='Dopust') AND s.ime='Brez dela') AND (((datum_z >= '$zacetek') AND (datum_k <='$konec')) AND ((datum_z <= '$konec') AND (datum_k >='$zacetek')) AND (datum_z BETWEEN '$zacetek' AND '$konec'));";
        //$sql = "SELECT DISTINCT d.* FROM delavci d INNER JOIN statusi s ON d.id=s.delavec_id WHERE (s.ime!='Dopust' AND s.ime!='Bolniška' AND s.ime!='Porodniška' AND s.ime!='Zaseden') AND (((datum_z >= '$zacetek') AND (datum_k <='$konec')) AND ((datum_z <= '$konec') AND (datum_k >='$zacetek')) AND (datum_z BETWEEN '$zacetek' AND '$konec'));";
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='lid_stay3'>";
            while($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['ime']."  ".$row['priimek']."</option>";
            }
            echo "</select><br>";
        } else {
            echo '<font color="red">Ni zaposlenih! Dodaj delavce spodaj!</font>';
        }
    }if (isset($_POST['zacetek']) && isset($_POST['konec'])){
        $zacetek = $_POST['zacetek'];
        $konec = $_POST['konec'];
        //$sql = "SELECT DISTINCT d.* FROM delavci d INNER JOIN statusi s ON d.id=s.delavec_id WHERE ((s.ime!='Zaseden' AND s.ime!='Porodniška' AND s.ime!='Bolniška' AND s.ime!='Dopust') AND s.ime='Brez dela') AND (((datum_z >= '$zacetek') AND (datum_k <='$konec')) AND ((datum_z <= '$konec') AND (datum_k >='$zacetek')) AND (datum_z BETWEEN '$zacetek' AND '$konec'));";
        //$sql = "SELECT DISTINCT d.* FROM delavci d INNER JOIN statusi s ON d.id=s.delavec_id WHERE (s.ime!='Dopust' AND s.ime!='Bolniška' AND s.ime!='Porodniška' AND s.ime!='Zaseden') AND (((datum_z >= '$zacetek') AND (datum_k <='$konec')) AND ((datum_z <= '$konec') AND (datum_k >='$zacetek')) AND (datum_z BETWEEN '$zacetek' AND '$konec'));";
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='lid_stay4'>";
            while($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['ime']."  ".$row['priimek']."</option>";
            }
            echo "</select><br>";
        } else {
            echo '<font color="red">Ni zaposlenih! Dodaj delavce spodaj!</font>';
        }
    }

    //ENOOSNA SPONA
    echo "Enoosna spona: <br>";
    if (isset($_POST['zacetek']) && isset($_POST['konec'])){
        $zacetek = $_POST['zacetek'];
        $konec = $_POST['konec'];
        //$sql = "SELECT DISTINCT d.* FROM delavci d INNER JOIN statusi s ON d.id=s.delavec_id WHERE ((s.ime!='Zaseden' AND s.ime!='Porodniška' AND s.ime!='Bolniška' AND s.ime!='Dopust') AND s.ime='Brez dela') AND (((datum_z >= '$zacetek') AND (datum_k <='$konec')) AND ((datum_z <= '$konec') AND (datum_k >='$zacetek')) AND (datum_z BETWEEN '$zacetek' AND '$konec'));";
        //$sql = "SELECT DISTINCT d.* FROM delavci d INNER JOIN statusi s ON d.id=s.delavec_id WHERE (s.ime!='Dopust' AND s.ime!='Bolniška' AND s.ime!='Porodniška' AND s.ime!='Zaseden') AND (((datum_z >= '$zacetek') AND (datum_k <='$konec')) AND ((datum_z <= '$konec') AND (datum_k >='$zacetek')) AND (datum_z BETWEEN '$zacetek' AND '$konec'));";
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='enoosna_spona1'>";
            while($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['ime']."  ".$row['priimek']."</option>";
            }
            echo "</select><br>";
        } else {
            echo '<font color="red">Ni zaposlenih! Dodaj delavce spodaj!</font>';
        }
    }
    if (isset($_POST['zacetek']) && isset($_POST['konec'])){
        $zacetek = $_POST['zacetek'];
        $konec = $_POST['konec'];
        //$sql = "SELECT DISTINCT d.* FROM delavci d INNER JOIN statusi s ON d.id=s.delavec_id WHERE ((s.ime!='Zaseden' AND s.ime!='Porodniška' AND s.ime!='Bolniška' AND s.ime!='Dopust') AND s.ime='Brez dela') AND (((datum_z >= '$zacetek') AND (datum_k <='$konec')) AND ((datum_z <= '$konec') AND (datum_k >='$zacetek')) AND (datum_z BETWEEN '$zacetek' AND '$konec'));";
        //$sql = "SELECT DISTINCT d.* FROM delavci d INNER JOIN statusi s ON d.id=s.delavec_id WHERE (s.ime!='Dopust' AND s.ime!='Bolniška' AND s.ime!='Porodniška' AND s.ime!='Zaseden') AND (((datum_z >= '$zacetek') AND (datum_k <='$konec')) AND ((datum_z <= '$konec') AND (datum_k >='$zacetek')) AND (datum_z BETWEEN '$zacetek' AND '$konec'));";
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='enoosna_spona2'>";
            while($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['ime']."  ".$row['priimek']."</option>";
            }
            echo "</select><br>";
        } else {
            echo '<font color="red">Ni zaposlenih! Dodaj delavce spodaj!</font>';
        }
    }
    if (isset($_POST['zacetek']) && isset($_POST['konec'])){
        $zacetek = $_POST['zacetek'];
        $konec = $_POST['konec'];
        //$sql = "SELECT DISTINCT d.* FROM delavci d INNER JOIN statusi s ON d.id=s.delavec_id WHERE ((s.ime!='Zaseden' AND s.ime!='Porodniška' AND s.ime!='Bolniška' AND s.ime!='Dopust') AND s.ime='Brez dela') AND (((datum_z >= '$zacetek') AND (datum_k <='$konec')) AND ((datum_z <= '$konec') AND (datum_k >='$zacetek')) AND (datum_z BETWEEN '$zacetek' AND '$konec'));";
        //$sql = "SELECT DISTINCT d.* FROM delavci d INNER JOIN statusi s ON d.id=s.delavec_id WHERE (s.ime!='Dopust' AND s.ime!='Bolniška' AND s.ime!='Porodniška' AND s.ime!='Zaseden') AND (((datum_z >= '$zacetek') AND (datum_k <='$konec')) AND ((datum_z <= '$konec') AND (datum_k >='$zacetek')) AND (datum_z BETWEEN '$zacetek' AND '$konec'));";
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='enoosna_spona3'>";
            while($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['ime']."  ".$row['priimek']."</option>";
            }
            echo "</select><br>";
        } else {
            echo '<font color="red">Ni zaposlenih! Dodaj delavce spodaj!</font>';
        }
    }
    if (isset($_POST['zacetek']) && isset($_POST['konec'])){
        $zacetek = $_POST['zacetek'];
        $konec = $_POST['konec'];
        //$sql = "SELECT DISTINCT d.* FROM delavci d INNER JOIN statusi s ON d.id=s.delavec_id WHERE ((s.ime!='Zaseden' AND s.ime!='Porodniška' AND s.ime!='Bolniška' AND s.ime!='Dopust') AND s.ime='Brez dela') AND (((datum_z >= '$zacetek') AND (datum_k <='$konec')) AND ((datum_z <= '$konec') AND (datum_k >='$zacetek')) AND (datum_z BETWEEN '$zacetek' AND '$konec'));";
        //$sql = "SELECT DISTINCT d.* FROM delavci d INNER JOIN statusi s ON d.id=s.delavec_id WHERE (s.ime!='Dopust' AND s.ime!='Bolniška' AND s.ime!='Porodniška' AND s.ime!='Zaseden') AND (((datum_z >= '$zacetek') AND (datum_k <='$konec')) AND ((datum_z <= '$konec') AND (datum_k >='$zacetek')) AND (datum_z BETWEEN '$zacetek' AND '$konec'));";
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='enoosna_spona4'>";
            while($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['ime']."  ".$row['priimek']."</option>";
            }
            echo "</select><br>";
        } else {
            echo '<font color="red">Ni zaposlenih! Dodaj delavce spodaj!</font>';
        }
    }


    //GLISSANDO
    echo "Glissando: <br>";
    if (isset($_POST['zacetek']) && isset($_POST['konec'])){
        $zacetek = $_POST['zacetek'];
        $konec = $_POST['konec'];
        //$sql = "SELECT DISTINCT d.* FROM delavci d INNER JOIN statusi s ON d.id=s.delavec_id WHERE ((s.ime!='Zaseden' AND s.ime!='Porodniška' AND s.ime!='Bolniška' AND s.ime!='Dopust') AND s.ime='Brez dela') AND (((datum_z >= '$zacetek') AND (datum_k <='$konec')) AND ((datum_z <= '$konec') AND (datum_k >='$zacetek')) AND (datum_z BETWEEN '$zacetek' AND '$konec'));";
        //$sql = "SELECT DISTINCT d.* FROM delavci d INNER JOIN statusi s ON d.id=s.delavec_id WHERE (s.ime!='Dopust' AND s.ime!='Bolniška' AND s.ime!='Porodniška' AND s.ime!='Zaseden') AND (((datum_z >= '$zacetek') AND (datum_k <='$konec')) AND ((datum_z <= '$konec') AND (datum_k >='$zacetek')) AND (datum_z BETWEEN '$zacetek' AND '$konec'));";
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='glissando1'>";
            while($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['ime']."  ".$row['priimek']."</option>";
            }
            echo "</select><br>";
        } else {
            echo '<font color="red">Ni zaposlenih! Dodaj delavce spodaj!</font>';
        }
    }
    if (isset($_POST['zacetek']) && isset($_POST['konec'])){
        $zacetek = $_POST['zacetek'];
        $konec = $_POST['konec'];
        //$sql = "SELECT DISTINCT d.* FROM delavci d INNER JOIN statusi s ON d.id=s.delavec_id WHERE ((s.ime!='Zaseden' AND s.ime!='Porodniška' AND s.ime!='Bolniška' AND s.ime!='Dopust') AND s.ime='Brez dela') AND (((datum_z >= '$zacetek') AND (datum_k <='$konec')) AND ((datum_z <= '$konec') AND (datum_k >='$zacetek')) AND (datum_z BETWEEN '$zacetek' AND '$konec'));";
        //$sql = "SELECT DISTINCT d.* FROM delavci d INNER JOIN statusi s ON d.id=s.delavec_id WHERE (s.ime!='Dopust' AND s.ime!='Bolniška' AND s.ime!='Porodniška' AND s.ime!='Zaseden') AND (((datum_z >= '$zacetek') AND (datum_k <='$konec')) AND ((datum_z <= '$konec') AND (datum_k >='$zacetek')) AND (datum_z BETWEEN '$zacetek' AND '$konec'));";
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='glissando2'>";
            while($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['ime']."  ".$row['priimek']."</option>";
            }
            echo "</select><br>";
        } else {
            echo '<font color="red">Ni zaposlenih! Dodaj delavce spodaj!</font>';
        }
    }

    //NOSILEC PREDALA
    echo "Nosilec predala: <br>";
    if (isset($_POST['zacetek']) && isset($_POST['konec'])){
        $zacetek = $_POST['zacetek'];
        $konec = $_POST['konec'];
        //$sql = "SELECT DISTINCT d.* FROM delavci d INNER JOIN statusi s ON d.id=s.delavec_id WHERE ((s.ime!='Zaseden' AND s.ime!='Porodniška' AND s.ime!='Bolniška' AND s.ime!='Dopust') AND s.ime='Brez dela') AND (((datum_z >= '$zacetek') AND (datum_k <='$konec')) AND ((datum_z <= '$konec') AND (datum_k >='$zacetek')) AND (datum_z BETWEEN '$zacetek' AND '$konec'));";
        //$sql = "SELECT DISTINCT d.* FROM delavci d INNER JOIN statusi s ON d.id=s.delavec_id WHERE (s.ime!='Dopust' AND s.ime!='Bolniška' AND s.ime!='Porodniška' AND s.ime!='Zaseden') AND (((datum_z >= '$zacetek') AND (datum_k <='$konec')) AND ((datum_z <= '$konec') AND (datum_k >='$zacetek')) AND (datum_z BETWEEN '$zacetek' AND '$konec'));";
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='nosilec_predala1'>";
            while($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['ime']."  ".$row['priimek']."</option>";
            }
            echo "</select><br>";
        } else {
            echo '<font color="red">Ni zaposlenih! Dodaj delavce spodaj!</font>';
        }
    }
    if (isset($_POST['zacetek']) && isset($_POST['konec'])){
        $zacetek = $_POST['zacetek'];
        $konec = $_POST['konec'];
        //$sql = "SELECT DISTINCT d.* FROM delavci d INNER JOIN statusi s ON d.id=s.delavec_id WHERE ((s.ime!='Zaseden' AND s.ime!='Porodniška' AND s.ime!='Bolniška' AND s.ime!='Dopust') AND s.ime='Brez dela') AND (((datum_z >= '$zacetek') AND (datum_k <='$konec')) AND ((datum_z <= '$konec') AND (datum_k >='$zacetek')) AND (datum_z BETWEEN '$zacetek' AND '$konec'));";
        //$sql = "SELECT DISTINCT d.* FROM delavci d INNER JOIN statusi s ON d.id=s.delavec_id WHERE (s.ime!='Dopust' AND s.ime!='Bolniška' AND s.ime!='Porodniška' AND s.ime!='Zaseden') AND (((datum_z >= '$zacetek') AND (datum_k <='$konec')) AND ((datum_z <= '$konec') AND (datum_k >='$zacetek')) AND (datum_z BETWEEN '$zacetek' AND '$konec'));";
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='nosilec_predala2'>";
            while($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['ime']."  ".$row['priimek']."</option>";
            }
            echo "</select><br>";
        } else {
            echo '<font color="red">Ni zaposlenih! Dodaj delavce spodaj!</font>';
        }
    }

    //VODJA SKUPINE
    echo "<br>
    <h2>PROGRAM ETI:</h2>
    <br>
    <h3>VODJA SKUPINE:</h3>";
    if (isset($_POST['zacetek']) && isset($_POST['konec'])){
        $zacetek = $_POST['zacetek'];
        $konec = $_POST['konec'];
        //$sql = "SELECT DISTINCT d.* FROM delavci d INNER JOIN statusi s ON d.id=s.delavec_id WHERE ((s.ime!='Zaseden' AND s.ime!='Porodniška' AND s.ime!='Bolniška' AND s.ime!='Dopust') AND s.ime='Brez dela') AND (((datum_z >= '$zacetek') AND (datum_k <='$konec')) AND ((datum_z <= '$konec') AND (datum_k >='$zacetek')) AND (datum_z BETWEEN '$zacetek' AND '$konec'));";
        //$sql = "SELECT DISTINCT d.* FROM delavci d INNER JOIN statusi s ON d.id=s.delavec_id WHERE (s.ime!='Dopust' AND s.ime!='Bolniška' AND s.ime!='Porodniška' AND s.ime!='Zaseden') AND (((datum_z >= '$zacetek') AND (datum_k <='$konec')) AND ((datum_z <= '$konec') AND (datum_k >='$zacetek')) AND (datum_z BETWEEN '$zacetek' AND '$konec'));";
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='vodja_skupine'>";
            while($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['ime']."  ".$row['priimek']."</option>";
            }
            echo "</select>";
        } else {
            echo '<font color="red">Ni zaposlenih! Dodaj delavce spodaj!</font>';
        }
    }echo"<br><br><br>";

    //VELIKOSTNI VLOŽKI
    echo "Velikostni vložki: <br>";
    if (isset($_POST['zacetek']) && isset($_POST['konec'])){
        $zacetek = $_POST['zacetek'];
        $konec = $_POST['konec'];
        //$sql = "SELECT DISTINCT d.* FROM delavci d INNER JOIN statusi s ON d.id=s.delavec_id WHERE ((s.ime!='Zaseden' AND s.ime!='Porodniška' AND s.ime!='Bolniška' AND s.ime!='Dopust') AND s.ime='Brez dela') AND (((datum_z >= '$zacetek') AND (datum_k <='$konec')) AND ((datum_z <= '$konec') AND (datum_k >='$zacetek')) AND (datum_z BETWEEN '$zacetek' AND '$konec'));";
        //$sql = "SELECT DISTINCT d.* FROM delavci d INNER JOIN statusi s ON d.id=s.delavec_id WHERE (s.ime!='Dopust' AND s.ime!='Bolniška' AND s.ime!='Porodniška' AND s.ime!='Zaseden') AND (((datum_z >= '$zacetek') AND (datum_k <='$konec')) AND ((datum_z <= '$konec') AND (datum_k >='$zacetek')) AND (datum_z BETWEEN '$zacetek' AND '$konec'));";
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='velikostni_vlozki1'>";
            while($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['ime']."  ".$row['priimek']."</option>";
            }
            echo "</select><br>";
        } else {
            echo '<font color="red">Ni zaposlenih! Dodaj delavce spodaj!</font>';
        }
    }
    if (isset($_POST['zacetek']) && isset($_POST['konec'])){
        $zacetek = $_POST['zacetek'];
        $konec = $_POST['konec'];
        //$sql = "SELECT DISTINCT d.* FROM delavci d INNER JOIN statusi s ON d.id=s.delavec_id WHERE ((s.ime!='Zaseden' AND s.ime!='Porodniška' AND s.ime!='Bolniška' AND s.ime!='Dopust') AND s.ime='Brez dela') AND (((datum_z >= '$zacetek') AND (datum_k <='$konec')) AND ((datum_z <= '$konec') AND (datum_k >='$zacetek')) AND (datum_z BETWEEN '$zacetek' AND '$konec'));";
        //$sql = "SELECT DISTINCT d.* FROM delavci d INNER JOIN statusi s ON d.id=s.delavec_id WHERE (s.ime!='Dopust' AND s.ime!='Bolniška' AND s.ime!='Porodniška' AND s.ime!='Zaseden') AND (((datum_z >= '$zacetek') AND (datum_k <='$konec')) AND ((datum_z <= '$konec') AND (datum_k >='$zacetek')) AND (datum_z BETWEEN '$zacetek' AND '$konec'));";
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='velikostni_vlozki2'>";
            while($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['ime']."  ".$row['priimek']."</option>";
            }
            echo "</select><br>";
        } else {
            echo '<font color="red">Ni zaposlenih! Dodaj delavce spodaj!</font>';
        }
    }

    //AVTOMAT
    echo "Avtomat: <br>";
    if (isset($_POST['zacetek']) && isset($_POST['konec'])){
        $zacetek = $_POST['zacetek'];
        $konec = $_POST['konec'];
        //$sql = "SELECT DISTINCT d.* FROM delavci d INNER JOIN statusi s ON d.id=s.delavec_id WHERE ((s.ime!='Zaseden' AND s.ime!='Porodniška' AND s.ime!='Bolniška' AND s.ime!='Dopust') AND s.ime='Brez dela') AND (((datum_z >= '$zacetek') AND (datum_k <='$konec')) AND ((datum_z <= '$konec') AND (datum_k >='$zacetek')) AND (datum_z BETWEEN '$zacetek' AND '$konec'));";
        //$sql = "SELECT DISTINCT d.* FROM delavci d INNER JOIN statusi s ON d.id=s.delavec_id WHERE (s.ime!='Dopust' AND s.ime!='Bolniška' AND s.ime!='Porodniška' AND s.ime!='Zaseden') AND (((datum_z >= '$zacetek') AND (datum_k <='$konec')) AND ((datum_z <= '$konec') AND (datum_k >='$zacetek')) AND (datum_z BETWEEN '$zacetek' AND '$konec'));";
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='avtomat'>";
            while($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['ime']."  ".$row['priimek']."</option>";
            }
            echo "</select><br>";
        } else {
            echo '<font color="red">Ni zaposlenih! Dodaj delavce spodaj!</font>';
        }
    }
    
    //PAKIRANJE
    echo "Pakiranje: <br>";
    if (isset($_POST['zacetek']) && isset($_POST['konec'])){
        $zacetek = $_POST['zacetek'];
        $konec = $_POST['konec'];
        //$sql = "SELECT DISTINCT d.* FROM delavci d INNER JOIN statusi s ON d.id=s.delavec_id WHERE ((s.ime!='Zaseden' AND s.ime!='Porodniška' AND s.ime!='Bolniška' AND s.ime!='Dopust') AND s.ime='Brez dela') AND (((datum_z >= '$zacetek') AND (datum_k <='$konec')) AND ((datum_z <= '$konec') AND (datum_k >='$zacetek')) AND (datum_z BETWEEN '$zacetek' AND '$konec'));";
        //$sql = "SELECT DISTINCT d.* FROM delavci d INNER JOIN statusi s ON d.id=s.delavec_id WHERE (s.ime!='Dopust' AND s.ime!='Bolniška' AND s.ime!='Porodniška' AND s.ime!='Zaseden') AND (((datum_z >= '$zacetek') AND (datum_k <='$konec')) AND ((datum_z <= '$konec') AND (datum_k >='$zacetek')) AND (datum_z BETWEEN '$zacetek' AND '$konec'));";
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='pakiranje1'>";
            while($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['ime']."  ".$row['priimek']."</option>";
            }
            echo "</select><br>";
        } else {
            echo '<font color="red">Ni zaposlenih! Dodaj delavce spodaj!</font>';
        }
    }
    if (isset($_POST['zacetek']) && isset($_POST['konec'])){
        $zacetek = $_POST['zacetek'];
        $konec = $_POST['konec'];
        //$sql = "SELECT DISTINCT d.* FROM delavci d INNER JOIN statusi s ON d.id=s.delavec_id WHERE ((s.ime!='Zaseden' AND s.ime!='Porodniška' AND s.ime!='Bolniška' AND s.ime!='Dopust') AND s.ime='Brez dela') AND (((datum_z >= '$zacetek') AND (datum_k <='$konec')) AND ((datum_z <= '$konec') AND (datum_k >='$zacetek')) AND (datum_z BETWEEN '$zacetek' AND '$konec'));";
        //$sql = "SELECT DISTINCT d.* FROM delavci d INNER JOIN statusi s ON d.id=s.delavec_id WHERE (s.ime!='Dopust' AND s.ime!='Bolniška' AND s.ime!='Porodniška' AND s.ime!='Zaseden') AND (((datum_z >= '$zacetek') AND (datum_k <='$konec')) AND ((datum_z <= '$konec') AND (datum_k >='$zacetek')) AND (datum_z BETWEEN '$zacetek' AND '$konec'));";
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='pakiranje2'>";
            while($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['ime']."  ".$row['priimek']."</option>";
            }
            echo "</select><br>";
        } else {
            echo '<font color="red">Ni zaposlenih! Dodaj delavce spodaj!</font>';
        }
    }

    //KARUZL
    echo "Karuzl: <br>";
    if (isset($_POST['zacetek']) && isset($_POST['konec'])){
        $zacetek = $_POST['zacetek'];
        $konec = $_POST['konec'];
        //$sql = "SELECT DISTINCT d.* FROM delavci d INNER JOIN statusi s ON d.id=s.delavec_id WHERE ((s.ime!='Zaseden' AND s.ime!='Porodniška' AND s.ime!='Bolniška' AND s.ime!='Dopust') AND s.ime='Brez dela') AND (((datum_z >= '$zacetek') AND (datum_k <='$konec')) AND ((datum_z <= '$konec') AND (datum_k >='$zacetek')) AND (datum_z BETWEEN '$zacetek' AND '$konec'));";
        //$sql = "SELECT DISTINCT d.* FROM delavci d INNER JOIN statusi s ON d.id=s.delavec_id WHERE (s.ime!='Dopust' AND s.ime!='Bolniška' AND s.ime!='Porodniška' AND s.ime!='Zaseden') AND (((datum_z >= '$zacetek') AND (datum_k <='$konec')) AND ((datum_z <= '$konec') AND (datum_k >='$zacetek')) AND (datum_z BETWEEN '$zacetek' AND '$konec'));";
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='karuzl'>";
            while($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['ime']."  ".$row['priimek']."</option>";
            }
            echo "</select><br>";
        } else {
            echo '<font color="red">Ni zaposlenih! Dodaj delavce spodaj!</font>';
        }
    }

    //ROČNA SESTAVA
    echo "Ročna sestava: <br>";
    if (isset($_POST['zacetek']) && isset($_POST['konec'])){
        $zacetek = $_POST['zacetek'];
        $konec = $_POST['konec'];
        //$sql = "SELECT DISTINCT d.* FROM delavci d INNER JOIN statusi s ON d.id=s.delavec_id WHERE ((s.ime!='Zaseden' AND s.ime!='Porodniška' AND s.ime!='Bolniška' AND s.ime!='Dopust') AND s.ime='Brez dela') AND (((datum_z >= '$zacetek') AND (datum_k <='$konec')) AND ((datum_z <= '$konec') AND (datum_k >='$zacetek')) AND (datum_z BETWEEN '$zacetek' AND '$konec'));";
        //$sql = "SELECT DISTINCT d.* FROM delavci d INNER JOIN statusi s ON d.id=s.delavec_id WHERE (s.ime!='Dopust' AND s.ime!='Bolniška' AND s.ime!='Porodniška' AND s.ime!='Zaseden') AND (((datum_z >= '$zacetek') AND (datum_k <='$konec')) AND ((datum_z <= '$konec') AND (datum_k >='$zacetek')) AND (datum_z BETWEEN '$zacetek' AND '$konec'));";
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='rocna_sestava1'>";
            while($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['ime']."  ".$row['priimek']."</option>";
            }
            echo "</select><br>";
        } else {
            echo '<font color="red">Ni zaposlenih! Dodaj delavce spodaj!</font>';
        }
    }
    if (isset($_POST['zacetek']) && isset($_POST['konec'])){
        $zacetek = $_POST['zacetek'];
        $konec = $_POST['konec'];
        //$sql = "SELECT DISTINCT d.* FROM delavci d INNER JOIN statusi s ON d.id=s.delavec_id WHERE ((s.ime!='Zaseden' AND s.ime!='Porodniška' AND s.ime!='Bolniška' AND s.ime!='Dopust') AND s.ime='Brez dela') AND (((datum_z >= '$zacetek') AND (datum_k <='$konec')) AND ((datum_z <= '$konec') AND (datum_k >='$zacetek')) AND (datum_z BETWEEN '$zacetek' AND '$konec'));";
        //$sql = "SELECT DISTINCT d.* FROM delavci d INNER JOIN statusi s ON d.id=s.delavec_id WHERE (s.ime!='Dopust' AND s.ime!='Bolniška' AND s.ime!='Porodniška' AND s.ime!='Zaseden') AND (((datum_z >= '$zacetek') AND (datum_k <='$konec')) AND ((datum_z <= '$konec') AND (datum_k >='$zacetek')) AND (datum_z BETWEEN '$zacetek' AND '$konec'));";
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='rocna_sestava2'>";
            while($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['ime']."  ".$row['priimek']."</option>";
            }
            echo "</select><br>";
        } else {
            echo '<font color="red">Ni zaposlenih! Dodaj delavce spodaj!</font>';
        }
    }
    if (isset($_POST['zacetek']) && isset($_POST['konec'])){
        $zacetek = $_POST['zacetek'];
        $konec = $_POST['konec'];
        //$sql = "SELECT DISTINCT d.* FROM delavci d INNER JOIN statusi s ON d.id=s.delavec_id WHERE ((s.ime!='Zaseden' AND s.ime!='Porodniška' AND s.ime!='Bolniška' AND s.ime!='Dopust') AND s.ime='Brez dela') AND (((datum_z >= '$zacetek') AND (datum_k <='$konec')) AND ((datum_z <= '$konec') AND (datum_k >='$zacetek')) AND (datum_z BETWEEN '$zacetek' AND '$konec'));";
        //$sql = "SELECT DISTINCT d.* FROM delavci d INNER JOIN statusi s ON d.id=s.delavec_id WHERE (s.ime!='Dopust' AND s.ime!='Bolniška' AND s.ime!='Porodniška' AND s.ime!='Zaseden') AND (((datum_z >= '$zacetek') AND (datum_k <='$konec')) AND ((datum_z <= '$konec') AND (datum_k >='$zacetek')) AND (datum_z BETWEEN '$zacetek' AND '$konec'));";
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='rocna_sestava3'>";
            while($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['ime']."  ".$row['priimek']."</option>";
            }
            echo "</select><br>";
        } else {
            echo '<font color="red">Ni zaposlenih! Dodaj delavce spodaj!</font>';
        }
    }
    if (isset($_POST['zacetek']) && isset($_POST['konec'])){
        $zacetek = $_POST['zacetek'];
        $konec = $_POST['konec'];
        //$sql = "SELECT DISTINCT d.* FROM delavci d INNER JOIN statusi s ON d.id=s.delavec_id WHERE ((s.ime!='Zaseden' AND s.ime!='Porodniška' AND s.ime!='Bolniška' AND s.ime!='Dopust') AND s.ime='Brez dela') AND (((datum_z >= '$zacetek') AND (datum_k <='$konec')) AND ((datum_z <= '$konec') AND (datum_k >='$zacetek')) AND (datum_z BETWEEN '$zacetek' AND '$konec'));";
        //$sql = "SELECT DISTINCT d.* FROM delavci d INNER JOIN statusi s ON d.id=s.delavec_id WHERE (s.ime!='Dopust' AND s.ime!='Bolniška' AND s.ime!='Porodniška' AND s.ime!='Zaseden') AND (((datum_z >= '$zacetek') AND (datum_k <='$konec')) AND ((datum_z <= '$konec') AND (datum_k >='$zacetek')) AND (datum_z BETWEEN '$zacetek' AND '$konec'));";
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='rocna_sestava4'>";
            while($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['ime']."  ".$row['priimek']."</option>";
            }
            echo "</select><br>";
        } else {
            echo '<font color="red">Ni zaposlenih! Dodaj delavce spodaj!</font>';
        }
    }
    if (isset($_POST['zacetek']) && isset($_POST['konec'])){
        $zacetek = $_POST['zacetek'];
        $konec = $_POST['konec'];
        //$sql = "SELECT DISTINCT d.* FROM delavci d INNER JOIN statusi s ON d.id=s.delavec_id WHERE ((s.ime!='Zaseden' AND s.ime!='Porodniška' AND s.ime!='Bolniška' AND s.ime!='Dopust') AND s.ime='Brez dela') AND (((datum_z >= '$zacetek') AND (datum_k <='$konec')) AND ((datum_z <= '$konec') AND (datum_k >='$zacetek')) AND (datum_z BETWEEN '$zacetek' AND '$konec'));";
        //$sql = "SELECT DISTINCT d.* FROM delavci d INNER JOIN statusi s ON d.id=s.delavec_id WHERE (s.ime!='Dopust' AND s.ime!='Bolniška' AND s.ime!='Porodniška' AND s.ime!='Zaseden') AND (((datum_z >= '$zacetek') AND (datum_k <='$konec')) AND ((datum_z <= '$konec') AND (datum_k >='$zacetek')) AND (datum_z BETWEEN '$zacetek' AND '$konec'));";
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='rocna_sestava5'>";
            while($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['ime']."  ".$row['priimek']."</option>";
            }
            echo "</select><br>";
        } else {
            echo '<font color="red">Ni zaposlenih! Dodaj delavce spodaj!</font>';
        }
    }
    if (isset($_POST['zacetek']) && isset($_POST['konec'])){
        $zacetek = $_POST['zacetek'];
        $konec = $_POST['konec'];
        //$sql = "SELECT DISTINCT d.* FROM delavci d INNER JOIN statusi s ON d.id=s.delavec_id WHERE ((s.ime!='Zaseden' AND s.ime!='Porodniška' AND s.ime!='Bolniška' AND s.ime!='Dopust') AND s.ime='Brez dela') AND (((datum_z >= '$zacetek') AND (datum_k <='$konec')) AND ((datum_z <= '$konec') AND (datum_k >='$zacetek')) AND (datum_z BETWEEN '$zacetek' AND '$konec'));";
        //$sql = "SELECT DISTINCT d.* FROM delavci d INNER JOIN statusi s ON d.id=s.delavec_id WHERE (s.ime!='Dopust' AND s.ime!='Bolniška' AND s.ime!='Porodniška' AND s.ime!='Zaseden') AND (((datum_z >= '$zacetek') AND (datum_k <='$konec')) AND ((datum_z <= '$konec') AND (datum_k >='$zacetek')) AND (datum_z BETWEEN '$zacetek' AND '$konec'));";
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='rocna_sestava6'>";
            while($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['ime']."  ".$row['priimek']."</option>";
            }
            echo "</select><br>";
        } else {
            echo '<font color="red">Ni zaposlenih! Dodaj delavce spodaj!</font>';
        }
    }echo"<br><br>";

    //PODNOŽJA
    echo "Podnožja: <br>";
    if (isset($_POST['zacetek']) && isset($_POST['konec'])){
        $zacetek = $_POST['zacetek'];
        $konec = $_POST['konec'];
        //$sql = "SELECT DISTINCT d.* FROM delavci d INNER JOIN statusi s ON d.id=s.delavec_id WHERE ((s.ime!='Zaseden' AND s.ime!='Porodniška' AND s.ime!='Bolniška' AND s.ime!='Dopust') AND s.ime='Brez dela') AND (((datum_z >= '$zacetek') AND (datum_k <='$konec')) AND ((datum_z <= '$konec') AND (datum_k >='$zacetek')) AND (datum_z BETWEEN '$zacetek' AND '$konec'));";
        //$sql = "SELECT DISTINCT d.* FROM delavci d INNER JOIN statusi s ON d.id=s.delavec_id WHERE (s.ime!='Dopust' AND s.ime!='Bolniška' AND s.ime!='Porodniška' AND s.ime!='Zaseden') AND (((datum_z >= '$zacetek') AND (datum_k <='$konec')) AND ((datum_z <= '$konec') AND (datum_k >='$zacetek')) AND (datum_z BETWEEN '$zacetek' AND '$konec'));";
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='podnozja1'>";
            while($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['ime']."  ".$row['priimek']."</option>";
            }
            echo "</select><br>";
        } else {
            echo '<font color="red">Ni zaposlenih! Dodaj delavce spodaj!</font>';
        }
    }
    if (isset($_POST['zacetek']) && isset($_POST['konec'])){
        $zacetek = $_POST['zacetek'];
        $konec = $_POST['konec'];
        //$sql = "SELECT DISTINCT d.* FROM delavci d INNER JOIN statusi s ON d.id=s.delavec_id WHERE ((s.ime!='Zaseden' AND s.ime!='Porodniška' AND s.ime!='Bolniška' AND s.ime!='Dopust') AND s.ime='Brez dela') AND (((datum_z >= '$zacetek') AND (datum_k <='$konec')) AND ((datum_z <= '$konec') AND (datum_k >='$zacetek')) AND (datum_z BETWEEN '$zacetek' AND '$konec'));";
        //$sql = "SELECT DISTINCT d.* FROM delavci d INNER JOIN statusi s ON d.id=s.delavec_id WHERE (s.ime!='Dopust' AND s.ime!='Bolniška' AND s.ime!='Porodniška' AND s.ime!='Zaseden') AND (((datum_z >= '$zacetek') AND (datum_k <='$konec')) AND ((datum_z <= '$konec') AND (datum_k >='$zacetek')) AND (datum_z BETWEEN '$zacetek' AND '$konec'));";
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='podnozja2'>";
            while($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['ime']."  ".$row['priimek']."</option>";
            }
            echo "</select><br>";
        } else {
            echo '<font color="red">Ni zaposlenih! Dodaj delavce spodaj!</font>';
        }
    }
    if (isset($_POST['zacetek']) && isset($_POST['konec'])){
        $zacetek = $_POST['zacetek'];
        $konec = $_POST['konec'];
        //$sql = "SELECT DISTINCT d.* FROM delavci d INNER JOIN statusi s ON d.id=s.delavec_id WHERE ((s.ime!='Zaseden' AND s.ime!='Porodniška' AND s.ime!='Bolniška' AND s.ime!='Dopust') AND s.ime='Brez dela') AND (((datum_z >= '$zacetek') AND (datum_k <='$konec')) AND ((datum_z <= '$konec') AND (datum_k >='$zacetek')) AND (datum_z BETWEEN '$zacetek' AND '$konec'));";
        //$sql = "SELECT DISTINCT d.* FROM delavci d INNER JOIN statusi s ON d.id=s.delavec_id WHERE (s.ime!='Dopust' AND s.ime!='Bolniška' AND s.ime!='Porodniška' AND s.ime!='Zaseden') AND (((datum_z >= '$zacetek') AND (datum_k <='$konec')) AND ((datum_z <= '$konec') AND (datum_k >='$zacetek')) AND (datum_z BETWEEN '$zacetek' AND '$konec'));";
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='podnozja3'>";
            while($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['ime']."  ".$row['priimek']."</option>";
            }
            echo "</select><br>";
        } else {
            echo '<font color="red">Ni zaposlenih! Dodaj delavce spodaj!</font>';
        }
    }
    if (isset($_POST['zacetek']) && isset($_POST['konec'])){
        $zacetek = $_POST['zacetek'];
        $konec = $_POST['konec'];
        //$sql = "SELECT DISTINCT d.* FROM delavci d INNER JOIN statusi s ON d.id=s.delavec_id WHERE ((s.ime!='Zaseden' AND s.ime!='Porodniška' AND s.ime!='Bolniška' AND s.ime!='Dopust') AND s.ime='Brez dela') AND (((datum_z >= '$zacetek') AND (datum_k <='$konec')) AND ((datum_z <= '$konec') AND (datum_k >='$zacetek')) AND (datum_z BETWEEN '$zacetek' AND '$konec'));";
        //$sql = "SELECT DISTINCT d.* FROM delavci d INNER JOIN statusi s ON d.id=s.delavec_id WHERE (s.ime!='Dopust' AND s.ime!='Bolniška' AND s.ime!='Porodniška' AND s.ime!='Zaseden') AND (((datum_z >= '$zacetek') AND (datum_k <='$konec')) AND ((datum_z <= '$konec') AND (datum_k >='$zacetek')) AND (datum_z BETWEEN '$zacetek' AND '$konec'));";
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='podnozja4'>";
            while($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['ime']."  ".$row['priimek']."</option>";
            }
            echo "</select><br>";
        } else {
            echo '<font color="red">Ni zaposlenih! Dodaj delavce spodaj!</font>';
        }
    }
    if (isset($_POST['zacetek']) && isset($_POST['konec'])){
        $zacetek = $_POST['zacetek'];
        $konec = $_POST['konec'];
        //$sql = "SELECT DISTINCT d.* FROM delavci d INNER JOIN statusi s ON d.id=s.delavec_id WHERE ((s.ime!='Zaseden' AND s.ime!='Porodniška' AND s.ime!='Bolniška' AND s.ime!='Dopust') AND s.ime='Brez dela') AND (((datum_z >= '$zacetek') AND (datum_k <='$konec')) AND ((datum_z <= '$konec') AND (datum_k >='$zacetek')) AND (datum_z BETWEEN '$zacetek' AND '$konec'));";
        //$sql = "SELECT DISTINCT d.* FROM delavci d INNER JOIN statusi s ON d.id=s.delavec_id WHERE (s.ime!='Dopust' AND s.ime!='Bolniška' AND s.ime!='Porodniška' AND s.ime!='Zaseden') AND (((datum_z >= '$zacetek') AND (datum_k <='$konec')) AND ((datum_z <= '$konec') AND (datum_k >='$zacetek')) AND (datum_z BETWEEN '$zacetek' AND '$konec'));";
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='podnozja5'>";
            while($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['ime']."  ".$row['priimek']."</option>";
            }
            echo "</select><br>";
        } else {
            echo '<font color="red">Ni zaposlenih! Dodaj delavce spodaj!</font>';
        }
    }
    if (isset($_POST['zacetek']) && isset($_POST['konec'])){
        $zacetek = $_POST['zacetek'];
        $konec = $_POST['konec'];
        //$sql = "SELECT DISTINCT d.* FROM delavci d INNER JOIN statusi s ON d.id=s.delavec_id WHERE ((s.ime!='Zaseden' AND s.ime!='Porodniška' AND s.ime!='Bolniška' AND s.ime!='Dopust') AND s.ime='Brez dela') AND (((datum_z >= '$zacetek') AND (datum_k <='$konec')) AND ((datum_z <= '$konec') AND (datum_k >='$zacetek')) AND (datum_z BETWEEN '$zacetek' AND '$konec'));";
        //$sql = "SELECT DISTINCT d.* FROM delavci d INNER JOIN statusi s ON d.id=s.delavec_id WHERE (s.ime!='Dopust' AND s.ime!='Bolniška' AND s.ime!='Porodniška' AND s.ime!='Zaseden') AND (((datum_z >= '$zacetek') AND (datum_k <='$konec')) AND ((datum_z <= '$konec') AND (datum_k >='$zacetek')) AND (datum_z BETWEEN '$zacetek' AND '$konec'));";
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='podnozja6'>";
            while($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['ime']."  ".$row['priimek']."</option>";
            }
            echo "</select><br>";
        } else {
            echo '<font color="red">Ni zaposlenih! Dodaj delavce spodaj!</font>';
        }
    }
    if (isset($_POST['zacetek']) && isset($_POST['konec'])){
        $zacetek = $_POST['zacetek'];
        $konec = $_POST['konec'];
        //$sql = "SELECT DISTINCT d.* FROM delavci d INNER JOIN statusi s ON d.id=s.delavec_id WHERE ((s.ime!='Zaseden' AND s.ime!='Porodniška' AND s.ime!='Bolniška' AND s.ime!='Dopust') AND s.ime='Brez dela') AND (((datum_z >= '$zacetek') AND (datum_k <='$konec')) AND ((datum_z <= '$konec') AND (datum_k >='$zacetek')) AND (datum_z BETWEEN '$zacetek' AND '$konec'));";
        //$sql = "SELECT DISTINCT d.* FROM delavci d INNER JOIN statusi s ON d.id=s.delavec_id WHERE (s.ime!='Dopust' AND s.ime!='Bolniška' AND s.ime!='Porodniška' AND s.ime!='Zaseden') AND (((datum_z >= '$zacetek') AND (datum_k <='$konec')) AND ((datum_z <= '$konec') AND (datum_k >='$zacetek')) AND (datum_z BETWEEN '$zacetek' AND '$konec'));";
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='podnozja7'>";
            while($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['ime']."  ".$row['priimek']."</option>";
            }
            echo "</select><br>";
        } else {
            echo '<font color="red">Ni zaposlenih! Dodaj delavce spodaj!</font>';
        }
    }
    if (isset($_POST['zacetek']) && isset($_POST['konec'])){
        $zacetek = $_POST['zacetek'];
        $konec = $_POST['konec'];
        //$sql = "SELECT DISTINCT d.* FROM delavci d INNER JOIN statusi s ON d.id=s.delavec_id WHERE ((s.ime!='Zaseden' AND s.ime!='Porodniška' AND s.ime!='Bolniška' AND s.ime!='Dopust') AND s.ime='Brez dela') AND (((datum_z >= '$zacetek') AND (datum_k <='$konec')) AND ((datum_z <= '$konec') AND (datum_k >='$zacetek')) AND (datum_z BETWEEN '$zacetek' AND '$konec'));";
        //$sql = "SELECT DISTINCT d.* FROM delavci d INNER JOIN statusi s ON d.id=s.delavec_id WHERE (s.ime!='Dopust' AND s.ime!='Bolniška' AND s.ime!='Porodniška' AND s.ime!='Zaseden') AND (((datum_z >= '$zacetek') AND (datum_k <='$konec')) AND ((datum_z <= '$konec') AND (datum_k >='$zacetek')) AND (datum_z BETWEEN '$zacetek' AND '$konec'));";
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='podnozja8'>";
            while($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['ime']."  ".$row['priimek']."</option>";
            }
            echo "</select><br>";
        } else {
            echo '<font color="red">Ni zaposlenih! Dodaj delavce spodaj!</font>';
        }
    }
    if (isset($_POST['zacetek']) && isset($_POST['konec'])){
        $zacetek = $_POST['zacetek'];
        $konec = $_POST['konec'];
        //$sql = "SELECT DISTINCT d.* FROM delavci d INNER JOIN statusi s ON d.id=s.delavec_id WHERE ((s.ime!='Zaseden' AND s.ime!='Porodniška' AND s.ime!='Bolniška' AND s.ime!='Dopust') AND s.ime='Brez dela') AND (((datum_z >= '$zacetek') AND (datum_k <='$konec')) AND ((datum_z <= '$konec') AND (datum_k >='$zacetek')) AND (datum_z BETWEEN '$zacetek' AND '$konec'));";
        //$sql = "SELECT DISTINCT d.* FROM delavci d INNER JOIN statusi s ON d.id=s.delavec_id WHERE (s.ime!='Dopust' AND s.ime!='Bolniška' AND s.ime!='Porodniška' AND s.ime!='Zaseden') AND (((datum_z >= '$zacetek') AND (datum_k <='$konec')) AND ((datum_z <= '$konec') AND (datum_k >='$zacetek')) AND (datum_z BETWEEN '$zacetek' AND '$konec'));";
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='podnozja9'>";
            while($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['ime']."  ".$row['priimek']."</option>";
            }
            echo "</select><br>";
        } else {
            echo '<font color="red">Ni zaposlenih! Dodaj delavce spodaj!</font>';
        }
    }

    //NAVOJI
    echo "Navoji: <br>";
    if (isset($_POST['zacetek']) && isset($_POST['konec'])){
        $zacetek = $_POST['zacetek'];
        $konec = $_POST['konec'];
        //$sql = "SELECT DISTINCT d.* FROM delavci d INNER JOIN statusi s ON d.id=s.delavec_id WHERE ((s.ime!='Zaseden' AND s.ime!='Porodniška' AND s.ime!='Bolniška' AND s.ime!='Dopust') AND s.ime='Brez dela') AND (((datum_z >= '$zacetek') AND (datum_k <='$konec')) AND ((datum_z <= '$konec') AND (datum_k >='$zacetek')) AND (datum_z BETWEEN '$zacetek' AND '$konec'));";
        //$sql = "SELECT DISTINCT d.* FROM delavci d INNER JOIN statusi s ON d.id=s.delavec_id WHERE (s.ime!='Dopust' AND s.ime!='Bolniška' AND s.ime!='Porodniška' AND s.ime!='Zaseden') AND (((datum_z >= '$zacetek') AND (datum_k <='$konec')) AND ((datum_z <= '$konec') AND (datum_k >='$zacetek')) AND (datum_z BETWEEN '$zacetek' AND '$konec'));";
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='navoji1'>";
            while($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['ime']."  ".$row['priimek']."</option>";
            }
            echo "</select><br>";
        } else {
            echo '<font color="red">Ni zaposlenih! Dodaj delavce spodaj!</font>';
        }
    }
    if (isset($_POST['zacetek']) && isset($_POST['konec'])){
        $zacetek = $_POST['zacetek'];
        $konec = $_POST['konec'];
        //$sql = "SELECT DISTINCT d.* FROM delavci d INNER JOIN statusi s ON d.id=s.delavec_id WHERE ((s.ime!='Zaseden' AND s.ime!='Porodniška' AND s.ime!='Bolniška' AND s.ime!='Dopust') AND s.ime='Brez dela') AND (((datum_z >= '$zacetek') AND (datum_k <='$konec')) AND ((datum_z <= '$konec') AND (datum_k >='$zacetek')) AND (datum_z BETWEEN '$zacetek' AND '$konec'));";
        //$sql = "SELECT DISTINCT d.* FROM delavci d INNER JOIN statusi s ON d.id=s.delavec_id WHERE (s.ime!='Dopust' AND s.ime!='Bolniška' AND s.ime!='Porodniška' AND s.ime!='Zaseden') AND (((datum_z >= '$zacetek') AND (datum_k <='$konec')) AND ((datum_z <= '$konec') AND (datum_k >='$zacetek')) AND (datum_z BETWEEN '$zacetek' AND '$konec'));";
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='navoji2'>";
            while($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['ime']."  ".$row['priimek']."</option>";
            }
            echo "</select><br>";
        } else {
            echo '<font color="red">Ni zaposlenih! Dodaj delavce spodaj!</font>';
        }
    }
    if (isset($_POST['zacetek']) && isset($_POST['konec'])){
        $zacetek = $_POST['zacetek'];
        $konec = $_POST['konec'];
        //$sql = "SELECT DISTINCT d.* FROM delavci d INNER JOIN statusi s ON d.id=s.delavec_id WHERE ((s.ime!='Zaseden' AND s.ime!='Porodniška' AND s.ime!='Bolniška' AND s.ime!='Dopust') AND s.ime='Brez dela') AND (((datum_z >= '$zacetek') AND (datum_k <='$konec')) AND ((datum_z <= '$konec') AND (datum_k >='$zacetek')) AND (datum_z BETWEEN '$zacetek' AND '$konec'));";
        //$sql = "SELECT DISTINCT d.* FROM delavci d INNER JOIN statusi s ON d.id=s.delavec_id WHERE (s.ime!='Dopust' AND s.ime!='Bolniška' AND s.ime!='Porodniška' AND s.ime!='Zaseden') AND (((datum_z >= '$zacetek') AND (datum_k <='$konec')) AND ((datum_z <= '$konec') AND (datum_k >='$zacetek')) AND (datum_z BETWEEN '$zacetek' AND '$konec'));";
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='navoji3'>";
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
    
</span>
</form>
<br><br><br>
<?php
require("../footer/footer.php");
?>

