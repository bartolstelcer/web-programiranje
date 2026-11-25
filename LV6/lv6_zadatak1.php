<?php

$student = [
    "Bartol",
    "Štelcer",
    "Stručni studij Računarstvo",
    "123456789",
    "3"
];

$auto = [
    "Citroen" => [
        "model" => "Basalt",
        "obujam_motora" => "1.2",
        "boja" => "bijela",
        "godina_proizvodnje" => 2024,
        "gorivo" => "Benzin"
    ],
    "Mercedes" => [
        "model" => "SL",
        "obujam_motora" => "2.0",
        "boja" => "crna",
        "godina_proizvodnje" => 2022,
        "gorivo" => "Dizel"
    ]
];

function kvadrat($broj){
    return $broj * $broj;
}

class Kupac {
    private $ime;
    private $prezime;

    public function postaviIme($ime){
        $this->ime = $ime;
    }

    public function postaviPrezime($prezime){
        $this->prezime = $prezime;
    }

    public function opis(){
        return "Kupac je: " . strtoupper($this->ime) . " " . strtoupper($this->prezime);
    }
}

$kupacOPG = new Kupac();
$kupacOPG->postaviIme("Cristiano");
$kupacOPG->postaviPrezime("Ronaldo");

$broj = 10;
?>

<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadatak 1</title>
</head>
<body>
    
    <ul>
        <?php foreach ($student as $podatak) { ?>
            <li><?= htmlspecialchars($podatak) ?></li>
        <?php } ?>
    </ul>
    <hr>
    
    <?php foreach ($auto["Citroen"] as $kljuc => $vrijednost) { ?>
        <p>
            <?= htmlspecialchars($kljuc) ?>:
            <?= htmlspecialchars((string)$vrijednost) ?>
        </p>
    <?php } ?>
    <hr>

    <p>Model: <?= htmlspecialchars($auto["Mercedes"]["model"]) ?></p>
    <p>Obujam motora: <?= htmlspecialchars($auto["Mercedes"]["obujam_motora"]) ?></p>
    <p>Boja: <?= htmlspecialchars($auto["Mercedes"]["boja"]) ?></p>
    <p>Godina proizvodnje: <?= htmlspecialchars($auto["Mercedes"]["godina_proizvodnje"]) ?></p>
    <p>Gorivo: <?= htmlspecialchars($auto["Mercedes"]["gorivo"]) ?></p>
    <hr>

    <p>Kvadrat broja <?= $broj ?> je <?= kvadrat($broj) ?></p>
    <hr>

    <p><?= htmlspecialchars($kupacOPG->opis()) ?></p>

</body>
</html>