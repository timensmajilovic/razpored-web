<?php
require("../header/header.php");
?>
<?php
if($_SESSION['stranid']!="home"){
    $_SESSION['stranid']="home";
    header("Location: ../index/index.php");
}
?>
<div id="dobrodosli">
<?php
echo "DOBRODOŠLI ". $_SESSION['uid'];  
?>
</div>
<div id="buttonnav">
    <div class="navgumb">
<form action="../razpored/razpored.php">
    <button type="submit" class="buttonnav">Ustvari nov razpored</button>
</form>
        </div>
    <div class="navgumb">
<form action="../zaposleni/zaposleni.php">
    <button type="submit" class="buttonnav">Urejaj delavce</button>
</form>
        </div>
        <div class="navgumb">
<form action="../uporabniki/uporabniki.php">
    <button type="submit" class="buttonnav">Urejaj uporabnike</button>
</form>
            </div>
</div>

<?php
require("../footer/footer.php");
?>

