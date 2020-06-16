<?php
include_once("../header/header.php");

?>
<?php
if($_SESSION['stranid']!="uporabniki"){
    $_SESSION['stranid']="uporabniki";
    header("Location: ../uporabniki/uporabniki.php");
}
if(isset($_SESSION['dostop'])){
    if($_SESSION['dostop']<3){
        header("Location: ../index/index.php");
    die();
    }
}
?>

<form action="../uporabniki/uporabniki.php">
    <button type="submit" class="buttonnav">Nazaj</button>
</form>

<div id="dodajuporabnika">
<form action="../uporabniki/uporabniki_insert.php" method="post" autocomplete="off">
        Uporabniško ime <?php if(isset($_GET['add'])){if($_GET['add']=='success'){echo '<span id="addsuccess">(Uporabnik uspešno dodan)</span>'; }}?><br>
        <input type="text" placeholder="Vnesi uporabniško ime" name="uid" required><br>
        Dostop<br>
        <select name="dostop" required>
        <option value="1" selected>1 - najnižji</option>
        <option value="2">2</option>
        <option value="3">3 - navišji</option>
        </select><br>
        Geslo<br>
        <input type="password" placeholder="Vnesi geslo" name="geslo" required><br>
    <button type="submit" id="dodajdelavca">Dodaj uporabnika</button> 
</form>
</div>

<?php
include_once("../footer/footer.php");
?>

