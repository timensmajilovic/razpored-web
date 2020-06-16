<?php
require("../header/header.php");
?>
<?php
if($_SESSION['stranid']!="razpored"){
    $_SESSION['stranid']="razpored";
    header("Location: ../razpored/razpored.php");
}
?>
<form action="../index/index.php">
    <button type="submit" class="buttonnav">Nazaj</button>
</form>
<div div="razporedidiv">
<div class="razporedigumbi"><a href="../razpored/razpored1.php"><button class="razporedi">Program ETI</button></a></div>
<div class="razporedigumbi"><a href="../razpored/razpored2.php"><button class="razporedi">Mletje PVC,<br>Pakiranje,<br>Varjenje</button></a></div>
<div class="razporedigumbi"><a href="../razpored/razpored3.php"><button class="razporedi">Grelci, Tečaji</button></a></div>
</div>



<?php
require("../footer/footer.php");
?>

