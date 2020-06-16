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


<form method="POST" action="../razpored/razporedpdf2.php">
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

echo "<input name='zacetek' value='$date' hidden>";
echo "<input name='konec' value='$date2' hidden>";

$conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }


    //1. IZMENA
    //Vodja skupine
    echo "<h2>1. IZMENA</h2>";
    echo "Vodja skupine<br>";
    if (isset($_POST['zacetek']) && isset($_POST['konec'])){
        $zacetek = $_POST['zacetek'];
        $konec = $_POST['konec'];
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='prva_vodja_skupine'>";
            while($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['ime']."  ".$row['priimek']."</option>";
            }
            echo "</select><br>";
        } else {
            echo '<font color="red">Ni zaposlenih! Dodaj delavce spodaj!</font>';
        }
    }

    //vstavljanje mag.1
    echo "Vstavljanje Mag. 1<br>";
    if (isset($_POST['zacetek']) && isset($_POST['konec'])){
        $zacetek = $_POST['zacetek'];
        $konec = $_POST['konec'];
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='prva_vstavljanje_mag_prvi_1'>";
            while($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['ime']."  ".$row['priimek']."</option>";
            }
            echo "</select><br>";
        } else {
            echo '<font color="red">Ni zaposlenih! Dodaj delavce spodaj!</font>';
        }
    }

    //varjenje
    echo "Varjenje:<br>";
    if (isset($_POST['zacetek']) && isset($_POST['konec'])){
        $zacetek = $_POST['zacetek'];
        $konec = $_POST['konec'];
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='prva_varjenje1'>";
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
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='prva_varjenje2'>";
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
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='prva_varjenje3'>";
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
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='prva_varjenje4'>";
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
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='prva_varjenje5'>";
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
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='prva_varjenje6'>";
            while($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['ime']."  ".$row['priimek']."</option>";
            }
            echo "</select><br>";
        } else {
            echo '<font color="red">Ni zaposlenih! Dodaj delavce spodaj!</font>';
        }
    }

    //mletje pvc
    echo "Mletje PVC:<br>";
    if (isset($_POST['zacetek']) && isset($_POST['konec'])){
        $zacetek = $_POST['zacetek'];
        $konec = $_POST['konec'];
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='prva_mletje_pvc1'>";
            while($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['ime']."  ".$row['priimek']."</option>";
            }
            echo "</select><br>";
        } else {
            echo '<font color="red">Ni zaposlenih! Dodaj delavce spodaj!</font>';
        }
    }

    //ekstruder 1
    echo "Ekstruder 1:<br>";
    if (isset($_POST['zacetek']) && isset($_POST['konec'])){
        $zacetek = $_POST['zacetek'];
        $konec = $_POST['konec'];
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='prva_ekstruder_prvi1'>";
            while($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['ime']."  ".$row['priimek']."</option>";
            }
            echo "</select><br>";
        } else {
            echo '<font color="red">Ni zaposlenih! Dodaj delavce spodaj!</font>';
        }
    }

    //ekstruder 2
    echo "Ekstruder 2:<br>";
    if (isset($_POST['zacetek']) && isset($_POST['konec'])){
        $zacetek = $_POST['zacetek'];
        $konec = $_POST['konec'];
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='prva_ekstruder_drugi1'>";
            while($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['ime']."  ".$row['priimek']."</option>";
            }
            echo "</select><br>";
        } else {
            echo '<font color="red">Ni zaposlenih! Dodaj delavce spodaj!</font>';
        }
    }

    //pakiranje
    echo "Pakiranje:<br>";
    if (isset($_POST['zacetek']) && isset($_POST['konec'])){
        $zacetek = $_POST['zacetek'];
        $konec = $_POST['konec'];
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='prva_pakiranje1'>";
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
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='prva_pakiranje2'>";
            while($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['ime']."  ".$row['priimek']."</option>";
            }
            echo "</select><br>";
        } else {
            echo '<font color="red">Ni zaposlenih! Dodaj delavce spodaj!</font>';
        }
    }

    //2. IZMENA
    //vodja skupine
    echo "<h2>2. IZMENA</h2>";
    echo "Vodja skupine: <br>";
    if (isset($_POST['zacetek']) && isset($_POST['konec'])){
        $zacetek = $_POST['zacetek'];
        $konec = $_POST['konec'];
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='druga_vodja_skupine'>";
            while($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['ime']."  ".$row['priimek']."</option>";
            }
            echo "</select><br>";
        } else {
            echo '<font color="red">Ni zaposlenih! Dodaj delavce spodaj!</font>';
        }
    }

    //vstavljanje mag. 1
    echo "Vstavljanje mag. 1:<br>";
    if (isset($_POST['zacetek']) && isset($_POST['konec'])){
        $zacetek = $_POST['zacetek'];
        $konec = $_POST['konec'];
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='druga_vstavljanje_mag_prvi1'>";
            while($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['ime']."  ".$row['priimek']."</option>";
            }
            echo "</select><br>";
        } else {
            echo '<font color="red">Ni zaposlenih! Dodaj delavce spodaj!</font>';
        }
    }

    //varjenje
    echo "Varjenje:<br>";
    if (isset($_POST['zacetek']) && isset($_POST['konec'])){
        $zacetek = $_POST['zacetek'];
        $konec = $_POST['konec'];
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='druga_varjenje1'>";
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
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='druga_varjenje2'>";
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
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='druga_varjenje3'>";
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
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='druga_varjenje4'>";
            while($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['ime']."  ".$row['priimek']."</option>";
            }
            echo "</select><br>";
        } else {
            echo '<font color="red">Ni zaposlenih! Dodaj delavce spodaj!</font>';
        }
    }

    //mletje pvc
    echo "Mletje PVC:<br>";
    if (isset($_POST['zacetek']) && isset($_POST['konec'])){
        $zacetek = $_POST['zacetek'];
        $konec = $_POST['konec'];
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='druga_mletje_pvc1'>";
            while($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['ime']."  ".$row['priimek']."</option>";
            }
            echo "</select><br>";
        } else {
            echo '<font color="red">Ni zaposlenih! Dodaj delavce spodaj!</font>';
        }
    }

    //ekstruder 1
    echo "Ekstruder 1:<br>";
    if (isset($_POST['zacetek']) && isset($_POST['konec'])){
        $zacetek = $_POST['zacetek'];
        $konec = $_POST['konec'];
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='druga_ekstruder_prvi1'>";
            while($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['ime']."  ".$row['priimek']."</option>";
            }
            echo "</select><br>";
        } else {
            echo '<font color="red">Ni zaposlenih! Dodaj delavce spodaj!</font>';
        }
    }

    //ekstruder 2
    echo "Ekstruder 2:<br>";
    if (isset($_POST['zacetek']) && isset($_POST['konec'])){
        $zacetek = $_POST['zacetek'];
        $konec = $_POST['konec'];
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='druga_ekstruder_drugi1'>";
            while($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['ime']."  ".$row['priimek']."</option>";
            }
            echo "</select><br>";
        } else {
            echo '<font color="red">Ni zaposlenih! Dodaj delavce spodaj!</font>';
        }
    }

    //pakiranje
    echo "Pakiranje:<br>";
    if (isset($_POST['zacetek']) && isset($_POST['konec'])){
        $zacetek = $_POST['zacetek'];
        $konec = $_POST['konec'];
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='druga_pakiranje1'>";
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
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='druga_pakiranje2'>";
            while($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['ime']."  ".$row['priimek']."</option>";
            }
            echo "</select><br>";
        } else {
            echo '<font color="red">Ni zaposlenih! Dodaj delavce spodaj!</font>';
        }
    }

    //3. IZMENA
    //Vodja skupine
    echo "<h2>3. IZMENA</h2>";
    echo "Vodja skupine:<br>";
    if (isset($_POST['zacetek']) && isset($_POST['konec'])){
        $zacetek = $_POST['zacetek'];
        $konec = $_POST['konec'];
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='tretja_vojda_skupine'>";
            while($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['ime']."  ".$row['priimek']."</option>";
            }
            echo "</select><br>";
        } else {
            echo '<font color="red">Ni zaposlenih! Dodaj delavce spodaj!</font>';
        }
    }

    //vstavljanje mag 1
    echo "Vstavljanje mag. 1:<br>";
    if (isset($_POST['zacetek']) && isset($_POST['konec'])){
        $zacetek = $_POST['zacetek'];
        $konec = $_POST['konec'];
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='tretja_vstavljanje_mag_prvi1'>";
            while($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['ime']."  ".$row['priimek']."</option>";
            }
            echo "</select><br>";
        } else {
            echo '<font color="red">Ni zaposlenih! Dodaj delavce spodaj!</font>';
        }
    }

    //vstavljanje mag 2
    echo "Vstavljanje mag. 2:<br>";
    if (isset($_POST['zacetek']) && isset($_POST['konec'])){
        $zacetek = $_POST['zacetek'];
        $konec = $_POST['konec'];
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='tretja_vstavljanje_mag_drugi1'>";
            while($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['ime']."  ".$row['priimek']."</option>";
            }
            echo "</select><br>";
        } else {
            echo '<font color="red">Ni zaposlenih! Dodaj delavce spodaj!</font>';
        }
    }

    //varjenje
    echo "Varjenje:<br>";
    if (isset($_POST['zacetek']) && isset($_POST['konec'])){
        $zacetek = $_POST['zacetek'];
        $konec = $_POST['konec'];
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='tretja_varjenje1'>";
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
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='tretja_varjenje2'>";
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
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='tretja_varjenje3'>";
            while($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['ime']."  ".$row['priimek']."</option>";
            }
            echo "</select><br>";
        } else {
            echo '<font color="red">Ni zaposlenih! Dodaj delavce spodaj!</font>';
        }
    }

    //mletje pvc
    echo "Mletje PVC:<br>";
    if (isset($_POST['zacetek']) && isset($_POST['konec'])){
        $zacetek = $_POST['zacetek'];
        $konec = $_POST['konec'];
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='tretja_mletje_pvc1'>";
            while($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['ime']."  ".$row['priimek']."</option>";
            }
            echo "</select><br>";
        } else {
            echo '<font color="red">Ni zaposlenih! Dodaj delavce spodaj!</font>';
        }
    }

    //leplenje profilleiste
    echo "Leplenje profilleiste:<br>";
    if (isset($_POST['zacetek']) && isset($_POST['konec'])){
        $zacetek = $_POST['zacetek'];
        $konec = $_POST['konec'];
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='tretja_leplenje_profilleiste1'>";
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
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='tretja_leplenje_profilleiste2'>";
            while($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['ime']."  ".$row['priimek']."</option>";
            }
            echo "</select><br>";
        } else {
            echo '<font color="red">Ni zaposlenih! Dodaj delavce spodaj!</font>';
        }
    }

    //ekstruder 1
    echo "Ekstruder 1:<br>";
    if (isset($_POST['zacetek']) && isset($_POST['konec'])){
        $zacetek = $_POST['zacetek'];
        $konec = $_POST['konec'];
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='tretja_ekstruder_prvi1'>";
            while($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['ime']."  ".$row['priimek']."</option>";
            }
            echo "</select><br>";
        } else {
            echo '<font color="red">Ni zaposlenih! Dodaj delavce spodaj!</font>';
        }
    }

    //ekstruder 2
    echo "Ekstruder 2:<br>";
    if (isset($_POST['zacetek']) && isset($_POST['konec'])){
        $zacetek = $_POST['zacetek'];
        $konec = $_POST['konec'];
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='tretja_ekstruder_drugi1'>";
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
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='tretja_ekstruder_drugi2'>";
            while($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['ime']."  ".$row['priimek']."</option>";
            }
            echo "</select><br>";
        } else {
            echo '<font color="red">Ni zaposlenih! Dodaj delavce spodaj!</font>';
        }
    }

    //pakiranje tesnil
    echo "Pakiranje tesnil:<br>";
    if (isset($_POST['zacetek']) && isset($_POST['konec'])){
        $zacetek = $_POST['zacetek'];
        $konec = $_POST['konec'];
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='tretja_pakiranje_tesnil1'>";
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
        $sql = "SELECT * FROM delavci;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<select name='tretja_pakiranje_tesnil2'>";
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

<br><br><br><br>
</form>
<?php
require("../footer/footer.php");
?>

