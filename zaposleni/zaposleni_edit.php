<?php
require("../header/header.php");
include_once("../db_con/db_con.php");
?>
<?php
if($_SESSION['stranid']!="zaposleni"){
    $_SESSION['stranid']="zaposleni";
    header("Location: ../zaposleni/zaposleni.php");
}
if($_SESSION['dostop']<2){
    header("Location: ../index/index.php");
    die();
}
if(!isset($_GET['delavecid'])){
    header("Location: ../index/index.php");
    die();
}
else{
    $id=$_GET['delavecid'];
}
?>
<form action="../zaposleni/zaposleni.php">
    <button type="submit" class="buttonnav">Nazaj</button>
</form>

<div id="dodajuporabnika">
<form action="./zaposleni_edit_update.php?delavecid=<?php echo $id; ?>" method="post" autocomplete="off">
        <?php if(isset($_GET['success'])){if($_GET['success']=='imechanged'){echo '<span id="addsuccess">Ime uspešno spremenjeno</span>'; }}?><br>
        Ime:<br>
        <input type="text" placeholder="Vnesi ime" name="ime" value=<?php $id=$_GET['delavecid']; $sql = "SELECT * FROM delavci WHERE id=$id"; $result = $conn->query($sql); $row = $result->fetch_assoc(); echo $row['ime'];?> required><br>
        Priimek:<br>
        <input type="text" placeholder="Vnesi priimek" name="priimek" value=<?php $id=$_GET['delavecid']; $sql = "SELECT * FROM delavci WHERE id=$id"; $result = $conn->query($sql); $row = $result->fetch_assoc(); echo $row['priimek'];?> required><br>
    <button type="submit" id="dodajdelavca">Spremeni delavca</button>
    </form>
</div>

<div id="dodajuporabnika">
<?php
    if($_SESSION['dostop']==3){
    echo"<form action='./zaposleni_edit.php?delavecid=".$id."&show=all' method='post' autocomplete='off' style='text-align:center;'>
    <button type='submit' id='dodajdelavca' >Prikaži statuse delavca</button>
    </form>";}
?>
</div>
<?php
if($_SESSION['dostop']>1){
        if(isset($_GET['show'])){
        if($_GET['show'] == "all"){
        $sql = "SELECT * FROM statusi WHERE delavec_id='$id';"; 
        $result = $conn->query($sql);
        $num = $result->num_rows;
        if($num < 1){
                echo "<div class='statuslist' style='color:red'>Delavec še nima nobenega statusa.</div>";
            }
        while($row = $result->fetch_assoc()) {
             
            $zacetek = $row['datum_z'];
            $zacetek = date("d.m.Y", strtotime($zacetek));
            $konec = $row['datum_k'];
            $konec = date("d.m.Y", strtotime($konec));
            $sid = $row['id'];
            echo "<div class='statuslist' id='$sid'>";
            if($num < 1){
                echo "retard";
            }
            
            if(isset($_GET['statusid'])){
                if($_GET['statusid'] == $sid){
                    $ime =$row['ime'];
                    $zacetek = $row['datum_z'];
                    $konec = $row['datum_k'];
                    if(isset($_GET['status'])){
                        if($_GET['status']=="empty"){
                            echo "<font color='red'>Izberi razlog!</font>";
                        }
                    }
                    echo "<form action='./zaposleni_edit_status.php?delavecid=$id&show=all&statusid=$sid#$sid' method='post'>Razlog:<br>"."<select name='status' required>
        <option value='empty'>Izberi status delavca</option>
  <option value='Porodniška'>Porodniška</option>
  <option value='Bolniška'>Bolniška</option>
  <option value='Dopust'>Dopust</option>
  <option value='Drugo'>Drugo</option>
</select><br>"."<br>"." Začetek: "."<input type='date' name='zacetek' required>"."<br>"." Konec: "."<input type='date' name='konec' required>"."<br>"."<a href='./zaposleni_edit.php?delavecid=$id&show=all#$sid' id='preklici'>╳</a><button class='editstatus'>POSODOBI</button><br></form>";
                    echo "<hr>";
                }
            }else{
                echo "<br>Razlog: ".$row['ime']."<br>"." Začetek: ".$zacetek."<br>"." Konec: ".$konec."<br>"."<a href='./zaposleni_edit.php?delavecid=$id&show=all&statusid=$sid' class='editstatus'>UREDI</a><br>";
                echo "<hr>";
            }
            
            echo "</div>";
            
            
        }
        }
    }
}

?>

<?php
require("../footer/footer.php");
?>

