<?php
require("../header/header.php");
?>
<?php
if($_SESSION['stranid']!="uporabniki"){
    $_SESSION['stranid']="uporabniki";
    header("Location: ../uporabniki/uporabniki.php");
}
?>
<?php
include_once("../db_con/db_con.php");
$uid = $_SESSION['uid'];
$query = "SELECT dostop FROM uporabniki WHERE uid='$uid'";
     
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
    $result = mysqli_fetch_array($result);
?>

<form action="../index/index.php">
    <button type="submit" class="buttonnav">Nazaj</button>
</form>
<div id="buttonnav">
    <div class="navgumb">
<form action="../uporabniki/profile.php">
    <button type="submit" class="buttonnav">Uredi svoj profil</button>
</form>
    </div>
<?php
if($result['dostop'] == 3){
echo '<div class="navgumb">
<form action="../uporabniki/uporabniki_list.php">
    <button type="submit" class="buttonnav">Uredi uporabnike</button>
</form>
</div>';}
if($result['dostop'] == 3){
echo '<div class="navgumb">
<form action="../uporabniki/uporabniki_add.php">
    <button type="submit" class="buttonnav">Dodaj novega uporabnika</button>
</form>
</div>';}
?>
    
</div>

<?php
require("../footer/footer.php");
?>

