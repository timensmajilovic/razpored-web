<?php
require("../header/header.php");
?>
<?php
if($_SESSION['stranid']!="zaposleni"){
    $_SESSION['stranid']="zaposleni";
    header("Location: ../zaposleni/zaposleni.php");
}
?>
<div id="dodaj">
    <form action="../register/register.php" method="post">
        <input type="text" placeholder="Vnesi ime delavca" name="ime" required>
        <input type="text" placeholder="Vnesi priimek delavca" name="priimek" required>
        <input type="text" placeholder="Vnesi status delavca" name="status" required>
        <button type="submit">Dodaj delavca</button>
    </form>

</div>

    <?php
    //Izpiše vse delavce
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "turnatest";
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    echo "<div class='tbl-header'>";
    $sql = "SELECT * FROM delavci";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        echo "<table cellpadding=0 cellspacing=0 border=0><thead><tr><th>ID</th><th>Name</th><th>Priimek</th><th>Status</th><th>Delovno mesto</th></tr></thead></table>";
        echo "</div>";
        echo "<div class='tbl-content'>";
        // output data of each row
        echo "<table><tbody>";
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row['id']."</td><td>".$row['ime']."</td><td>".$row['priimek']."</td><td>".$row['status']."</td><td>".$row['delovno_mesto_id']."</td></tr>";
        }
        echo "</tbody></table>";
    } else {
        echo "0 results";
    }
    $conn->close();
    echo "</div>";
    ?>
    <script>
    // '.tbl-content' consumed little space for vertical scrollbar, scrollbar width depend on browser/os/platfrom. Here calculate the scollbar width .
$(window).on("load resize ", function() {
  var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
  $('.tbl-header').css({'padding-right':scrollWidth});
}).resize();
    </script>

<div id="dodaj">
    <form action="../register/register.php" method="post">
        <input type="text" placeholder="Vnesi ime delavca" name="ime" required>
        <input type="text" placeholder="Vnesi priimek delavca" name="priimek" required>
        <input type="text" placeholder="Vnesi status delavca" name="status" required>
        <button type="submit">Dodaj delavca</button>
    </form>

</div>

<?php
require("../footer/footer.php");
?>

