<?php
require("../header/header.php");
include_once("../db_con/db_con.php");
?>
<?php
if($_SESSION['stranid']!="uporabniki"){
    $_SESSION['stranid']="uporabniki";
    header("Location: ../uporabniki/uporabniki.php");
}
?>
<form action="../uporabniki/uporabniki.php">
    <button type="submit" class="buttonnav">Nazaj</button>
</form> 

<div id="dodajuporabnika">
<form action="./profile_update.php" method="post" autocomplete="off">
        Uporabniško ime<?php if(isset($_GET['success'])){if($_GET['success']=='uidchanged'){echo '<span id="addsuccess">(Uporabniško ime uspešno spremenjeno)</span>'; }}?><br>
        <input type="text" placeholder="Vnesi uporabniško ime" name="uid" value=<?php $id=$_SESSION['id']; $sql = "SELECT uid FROM uporabniki WHERE id='$id'"; $result = $conn->query($sql); $row = $result->fetch_assoc(); echo $row['uid'];?> required pattern="[^' ();\x22]+" title="Invalid input"><br>
    <button type="submit" id="dodajdelavca">Spremeni uporabniško ime</button></form><br>
<form action="./profile_update_password.php" method="post" autocomplete="off">
        Trenutno geslo: <?php if(isset($_GET['success'])){if($_GET['success']=='passchanged'){echo '<span id="addsuccess">(Geslo uspešno spremenjeno)</span>'; }}?><br>
        <input type="password" placeholder="Vnesi trenutno geslo" name="starogeslo" required pattern="[^' ();\x22]+" title="Invalid input"><br>
        Novo geslo:<br>
        <input type="password" placeholder="Vnesi novo geslo" name="novogeslo" required pattern="[^'* ();\x22]+" title="Invalid input"><br>
        Potrdi novo geslo:<br>
        <input type="password" placeholder="Potrdi novo geslo" name="novogeslo1" required pattern="[^'* ();\x22]+" title="Invalid input"><br>
    <button type="submit" id="dodajdelavca">Spremeni geslo</button>
</form>
</div>
<?php
require("../footer/footer.php");
?>

