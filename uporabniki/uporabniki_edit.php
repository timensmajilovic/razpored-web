<?php
require("../header/header.php");
include_once("../db_con/db_con.php");
?>
<?php
if($_SESSION['stranid']!="uporabniki"){
    $_SESSION['stranid']="uporabniki";
    header("Location: ../uporabniki/uporabniki.php");
    die();
}
if($_SESSION['dostop']!=3){
    header("Location: ../index/index.php");
    die();
}
?>
<form action="../uporabniki/uporabniki_list.php">
    <button type="submit" class="buttonnav">Nazaj</button>
</form>
<div id="dodajuporabnika">
<form action="./uporabniki_edit_update.php" method="post" autocomplete="off">
    <?php
    $id = $_GET['id'];
    $sql = "SELECT * FROM uporabniki WHERE id=$id;"; 
    $result = $conn->query($sql); 
    $row = $result->fetch_assoc();
    $dostop = $row['dostop'];
    if(!isset($id)){
        header("Location: ../index/index.php");
    die();
    }
    ?>
        Uporabniško ime<?php if(isset($_GET['success'])){if($_GET['success']=='userchanged'){echo '<span id="addsuccess">(Uporabnik uspešno spremenjen)</span>'; }}?><br>
        <input type="text" placeholder="Vnesi uporabniško ime" name="uid" value=<?php 
               $sql = "SELECT uid FROM uporabniki WHERE id='$id'"; $result = $conn->query($sql); $row = $result->fetch_assoc();echo $row['uid'];?> required><br>
        Dostop<?php
        if($dostop==1){
            echo"<br>
        <select name='dostop' required>
        <option value='1' selected>1 - najnižji</option>
        <option value='2'>2</option>
        <option value='3'>3 - navišji</option>
        </select><br>";
        }else if($dostop==2){
            echo"<br>
        <select name='dostop' required>
        <option value='1'>1 - najnižji</option>
        <option value='2' selected>2</option>
        <option value='3'>3 - navišji</option>
        </select><br>";
        }else if($dostop==3){
            echo"<br>
        <select name='dostop' required>
        <option value='1'>1 - najnižji</option>
        <option value='2'>2</option>
        <option value='3' selected>3 - navišji</option>
        </select><br>";
        }
        ?>
        Geslo<br>
        <input type="password" placeholder="Vnesi geslo" name="geslo" required><br>
    <input type="text" placeholder="Vnesi uporabniško ime" name="id" value=<?php echo $id; ?> hidden> 
    <button type="submit" id="dodajdelavca">Posodobi podatke</button></form><br>
<?php
require("../footer/footer.php");
?>

