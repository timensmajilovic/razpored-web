<?php
require("../header/header.php");
include_once("../db_con/db_con.php");
?>
<?php
if($_SESSION['stranid']!="uporabniki"){
    $_SESSION['stranid']="uporabniki";
    header("Location: ../uporabniki/uporabniki.php");
}
if($_SESSION['dostop']!=3){
    header("Location: ../index/index.php");
}
?>
<div id="zaposlenibody"> 
    <?php
    //Izpiše vse delavce
    include_once("../db_con/db_con.php");
    
    echo "<div class='tbl-header'>";
    $sql = "SELECT * FROM uporabniki";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        echo "<table cellpadding=0 cellspacing=0 border=0><thead><tr><th>Username</th><th>Dostop</th><th>Uredi</th><th>Odstrani</th></tr></thead></table>";
        echo "</div>";
        echo "<div class='tbl-content'>";
        // output data of each row
        echo "<table><tbody>";
        while($row = $result->fetch_assoc()) {
            $id=$row['id'];
            echo "<tr><td>".$row['uid']."</td><td>".$row['dostop']."</td><td>"."<form action='../uporabniki/uporabniki_edit.php' method='get'><input hidden tpye='text' name='id' value=".$row['id']."><button class='add'>Edit</button></form>"."</td><td>"."<form action='./uporabniki_remove.php' method='post'><input hidden tpye='text' name='id' value=".$id."><button class='removeuser'>Odstrani</button></form>"."</td></tr>";
            //echo "<form action='../zaposleni/test.php' method='get'><input hidden tpye='text' name='delavec' value=".$row['id']."><button class='removeuser'>Odstrani</button></form>";
            }
        echo "</tbody></table>";
    } else {
        echo '<font color="red">Ni zaposlenih! Dodaj delavce spodaj!</font>';
    }
    $conn->close();
    echo "</div>";
    ?>
   
</div>

<form action="../uporabniki/uporabniki.php">
    <button type="submit" class="buttonnav">Nazaj</button>
</form>
<?php
require("../footer/footer.php");
?>

