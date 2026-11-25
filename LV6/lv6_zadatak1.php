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
$kupacOPG->postaviIme("Bartol");
$kupacOPG->postaviPrezime("Štelcer");

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

    <h1>Student</h1>
    <ul>
        <?php foreach ($student as $podatak) { ?>
            <li><?= htmlspecialchars($podatak) ?></li>
        <?php } ?>
    </ul>
    <hr>

    <h1>Citroen</h1>
    <?php foreach ($auto["Citroen"] as $kljuc => $vrijednost) { ?>
        <p>
            <?= htmlspecialchars($kljuc) ?>:
            <?= htmlspecialchars((string)$vrijednost) ?>
        </p>
    <?php } ?>
    <hr>

    <h1>Mercedes</h1>
    <p>model: <?= htmlspecialchars($auto["Mercedes"]["model"]) ?></p>
    <p>obujam_motora: <?= htmlspecialchars($auto["Mercedes"]["obujam_motora"]) ?></p>
    <p>boja: <?= htmlspecialchars($auto["Mercedes"]["boja"]) ?></p>
    <p>godina_proizvodnje: <?= htmlspecialchars($auto["Mercedes"]["godina_proizvodnje"]) ?></p>
    <p>gorivo: <?= htmlspecialchars($auto["Mercedes"]["gorivo"]) ?></p>
    <hr>

    <h1>Kvadrat</h1>
    <p>broj: <?= $broj ?> </p>
    <p>kvadrat_broja: <?= kvadrat($broj) ?></p>
    <hr>

    <h1>Kupac</h1>
    <p><?= htmlspecialchars($kupacOPG->opis()) ?></p>

</body>
</html>