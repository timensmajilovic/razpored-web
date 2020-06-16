<?php

if($_SESSION['stranid']=="home"){
    echo '<nav>
    <a href="../index/index.php" class="selected">Home</a>
    <a href="../razpored/razpored.php">Razpored</a>
    <a href="../zaposleni/zaposleni.php">Zaposleni</a>
    <a href="../uporabniki/uporabniki.php">Uporabniki</a>
    <a href="../logout/logout.php">Odjava</a>
</nav>';}
else if($_SESSION['stranid']=="razpored"){
    echo '<nav>
    <a href="../index/index.php">Home</a>
    <a href="../razpored/razpored.php" class="selected">Razpored</a>
    <a href="../zaposleni/zaposleni.php">Zaposleni</a>
    <a href="../uporabniki/uporabniki.php">Uporabniki</a>
    <a href="../logout/logout.php">Odjava</a>
</nav>';
}
else if($_SESSION['stranid']=="zaposleni"){
    echo '<nav>
    <a href="../index/index.php">Home</a>
    <a href="../razpored/razpored.php"">Razpored</a>
    <a href="../zaposleni/zaposleni.php" class="selected">Zaposleni</a>
    <a href="../uporabniki/uporabniki.php">Uporabniki</a>
    <a href="../logout/logout.php">Odjava</a>
</nav>';
}
else if($_SESSION['stranid']=="uporabniki"){
    echo '<nav>
    <a href="../index/index.php">Home</a>
    <a href="../razpored/razpored.php"">Razpored</a>
    <a href="../zaposleni/zaposleni.php">Zaposleni</a>
    <a href="../uporabniki/uporabniki.php" class="selected">Uporabniki</a>
    <a href="../logout/logout.php">Odjava</a>
</nav>';
}

?>