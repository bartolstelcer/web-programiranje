<?php
$ime = trim($_GET["ime"] ?? "");
$prezime = trim($_GET["prezime"] ?? "");
?>

<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadatak 3</title>
</head>
<body>
    
    <?php
    if ($ime !== "" && $prezime !== ""){
        echo "<h1> Ime i prezime: "
        . htmlspecialchars($ime)
        . " "
        . htmlspecialchars($prezime)
        . "</h1>";
    } else {
        echo "<h1>Dogodila se pogreška.</h1>";
        echo '<a href="lv6_zadatak3_obrazac.php">Povratak na obrazac</a>';
    }
    ?>

</body>
</html>