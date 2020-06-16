<?php
require("../header/header.php");
?>
<?php
if($_SESSION['stranid']!="zaposleni"){
    $_SESSION['stranid']="zaposleni";
    header("Location: ../zaposleni/zaposleni.php");
}
?>
<div id="zaposlenibody"> 
    <?php
    //Izpiše vse delavce
    $servername = "localhost";
$username = "timensma_timen";
$password = "o6+Kj.56$%ox";
$dbname = "timensma_razpored";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
    
    echo "<div class='tbl-header'>";
    $sql = "SELECT * FROM delavci";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        if($_SESSION['dostop'] == 1){
                echo "<table cellpadding=0 cellspacing=0 border=0><thead><tr><th>Ime</th><th>Priimek</th></tr></thead></table>";
        echo "</div>";
        echo "<div class='tbl-content'>";
        // output data of each row
        echo "<table><tbody>";
            }
            else if($_SESSION['dostop'] == 2){
                echo "<table cellpadding=0 cellspacing=0 border=0><thead><tr><th>Ime</th><th>Priimek</th><th>Status/Uredi</th></tr></thead></table>";
        echo "</div>";
        echo "<div class='tbl-content'>";
        // output data of each row
        echo "<table><tbody>";
            }
            else if($_SESSION['dostop'] == 3){
        echo "<table cellpadding=0 cellspacing=0 border=0><thead><tr><th>Ime</th><th>Priimek</th><th>Status/Uredi</th><th>Odstrani</th></tr></thead></table>";
        echo "</div>";
        echo "<div class='tbl-content'>";
        // output data of each row
        echo "<table><tbody>";
        }
        while($row = $result->fetch_assoc()) {
            if($_SESSION['dostop'] == 1){
                if ($row['ime'] != ""){
                echo "<tr><td>".$row['ime']."</td><td>".$row['priimek']."</td>"."</td>"."</td></tr>";
                }
                else{
                    
                }
                    
            }
            else if($_SESSION['dostop'] == 2){
                if ($row['ime'] != ""){
                echo "<tr><td>".$row['ime']."</td><td>".$row['priimek']."</td><td>"."<form action='../zaposleni/uredi.php' method='get'><input hidden tpye='text' name='delavecid' value=".$row['id']."><button class='add'>+</button><a href='./zaposleni_edit.php?delavecid=".$row['id']."' class='add'>E</a></form>"."</td>"."</td></tr>";
                }else{
                    
                }
                    
            }
            else if($_SESSION['dostop'] == 3){
                if ($row['ime'] != ""){
            echo "<tr><td>".$row['ime']."</td><td>".$row['priimek']."</td><td>"."<form action='../zaposleni/uredi.php' method='get'><input hidden tpye='text' name='delavecid' value=".$row['id']."><button class='add'>+</button><a href='./zaposleni_edit.php?delavecid=".$row['id']."' class='add'>E</a></form></form>"."</td><td>"."<form action='../zaposleni/odstrani.php' method='get'><input hidden tpye='text' name='delavecid' value=".$row['id']."><button class='removeuser'>x</button></form>"."</td></tr>";
            //echo "<form action='../zaposleni/test.php' method='get'><input hidden tpye='text' name='delavec' value=".$row['id']."><button class='removeuser'>Odstrani</button></form>";
                }else{
                    
                }
            }
        }
        echo "</tbody></table>";
    } else {
        echo '<font color="red">Ni zaposlenih! Dodaj delavce spodaj!</font>';
    }
    $conn->close();
    echo "</div>";
    ?>
   
</div>
<form action="../index/index.php">
    <button type="submit" class="buttonnav">Nazaj</button>
</form>
<?php
if($_SESSION['dostop'] != 3){
    echo "<div id='dodajuprabnika'>";
}else{
    echo "<div id='dodajuporabnika'>
    <form action='../register/register.php' method='post' autocomplete='off'>
        Ime<br>
        <input type='text' placeholder='Vnesi ime delavca' name='ime' required><br>
        Priimek<br>
        <input type='text' placeholder='Vnesi priimek delavca' name='priimek'><br>
        <button type='submit' id='dodajdelavca'>Dodaj delavca</button>";
        
        if(isset($_GET['add'])){
            if($_GET['add']=='success'){
                echo '<span id="addsuccess">Delavec uspešno dodan!</span>';
            }
        }
}

?>
    </form><br><br>
</div>
 

<!-- DODAJ UPORABNIKA FORM

<div id="dodajuporabnika">
    <form action="../register/register.php" method="post" autocomplete="off">
        Ime<br>
        <input type="text" placeholder="Vnesi ime delavca" name="ime" required><br>
        Priimek<br>
        <input type="text" placeholder="Vnesi priimek delavca" name="priimek" required><br>
        <button type="submit" id="dodajdelavca">Dodaj delavca</button> 
        <?php 
        /*if(isset($_GET['add'])){
            if($_GET['add']=="success"){
                echo '<span id="addsuccess">Delavec uspešno dodan!</span>';
            }
        }*/
        ?>
    </form><br><br>
</div> -->

<div id="dodajstatus">
    <?php
    
    if(isset($_GET['statusedit'])){
        if($_GET['statusedit']=="true"){

        }
    }
    
    ?>
    <form action="../zaposleni/uredi_dodaj.php" method="post" autocomplete="off">
        <?php
        include_once("../db_con/db_con.php");
        
        if(isset($_GET['delavecid'])){
        $delavecid = $_GET['delavecid'];
        $sql = "SELECT * FROM delavci WHERE id='$delavecid'";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                if(isset($_GET['delavecid']) && $_GET['statusedit'] == "true" && $_SESSION['dostop']>=2){
                echo "".$row['ime']." ".$row['priimek'];
                $delavecid = $_GET['delavecid'];
                $statusedit = $_GET['statusedit'];
                echo "<input type='text' name='delavecid' value='".$delavecid."' hidden>";
                echo "<input type='text' name='statusedit' value='".$statusedit."' hidden>";
                }
            }
        }}
        
        ?>
        <?php
        if(isset($_GET['delavecid']) && $_GET['statusedit'] == "true"){
            if($_SESSION['dostop']>=2){
               echo "<br>
        Začetek statusa:
        <input type='date' name='zacetek' required><br>
        Konec statusa:
        <input type='date' name='konec' required><br>
        Status"; 
            }
        }
        ?>
        
        <?php  if(isset($_GET['add'])){
            if($_GET['add']=="statusempty"){
                echo '<span id="statusempty"> (Izberi status)*</span>';
            }
        }  ?>
        
        <?php
        if(isset($_GET['delavecid']) && $_GET['statusedit'] == "true"){
            if($_SESSION['dostop']>=2){
            echo"<br>
        <select name='status' required>
        <option value='empty'>Izberi status delavca</option>
  <option value='Porodniška'>Porodniška</option>
  <option value='Bolniška'>Bolniška</option>
  <option value='Dopust'>Dopust</option>
  <option value='Drugo'>Drugo</option>
</select><br>";
            }
        }
        ?>
        <?php 
        ?><br>
        <?php 
        if (isset($_GET['delavecid']) && $_GET['statusedit'] == "true"){
            if($_SESSION['dostop']>=2){
            echo "<a href='../zaposleni/zaposleni.php' id='preklici'>╳</a>";
            echo "<button type='submit' id='dodajdelavca'>Dodaj status</button>";
        }
        }
        ?>
        <?php 
        if(isset($_GET['statusadd'])){
            if($_GET['statusadd']=="success"){
                echo '<span id="addsuccess">Status delavca uspešno dodan!</span>';
            }
        }
        else if(isset($_GET['error'])){
            if($_GET['error']=="statusempty"){
                echo '<font color="red">Izberi status!</font>';
            }
        }
        ?>
    </form></div>
<?php
require("../footer/footer.php");
?>

