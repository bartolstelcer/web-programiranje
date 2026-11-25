<?php
$datoteka = fopen("tekst.txt", "r");

$str_tekst = fread($datoteka, filesize("tekst.txt"));

fclose($datoteka);
?>

<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadatak 2</title>
</head>
<body> 

    <h1>Analiza datoteke tekst.txt</h1>

    <p><?= htmlspecialchars($str_tekst) ?></p>

    <?php
    $rijeci = explode(" ", $str_tekst);

    $datoteka = fopen("rijeci.txt", "w");

    fwrite($datoteka, implode(PHP_EOL, $rijeci));

    fclose($datoteka);
    ?>

    <?php
    $pozicija = mb_strpos($str_tekst, "k");

    $broj_pojavljivanja = mb_substr_count($str_tekst, "k");
    ?>

    <p>
        <?php
        if ($pozicija !== false){
            echo "prvi put se slovo k pojavljuje na "
            . ($pozicija + 1)
            . ". mjestu i ukupno se pojavljuje "
            . $broj_pojavljivanja
            . " puta.";
        } else {
            echo "Slovo k nije pronađeno u tekstu.";
        }
        ?>
    </p>

</body>
</html>