const kolegiji = [
    "Digitalne komunikacije",
    "Dizajn korisničkog sučelja",
    "Informacijska sigurnost",
    "Multimedijska tehnika",
    "Programsko inženjerstvo",
    "Razvoj mobilnih aplikacija",
    "Uvod u ekonomiku i menadžment",
    "Web programiranje"
]

const ECTS = 5;

const rezultat = document.getElementById("rezultat");
const popis = document.getElementById("popis");
const ime = document.getElementById("ime");
const email = document.getElementById("email");
const brojKolegija = document.getElementById("brojKolegija");

function poruka(tekst) {
    rezultat.textContent = tekst;
}

function procitajImePrezime() {
    const dijelovi = ime.value.trim().split(/\s+/);

    if (ime.value.trim() === "" || dijelovi.length < 2) {
        return null;
    }

    return {
        ime: dijelovi[0],
        prezime: dijelovi.slice(1).join(" ")
    };
}

function procitajBroj() {
    const vrijednost = brojKolegija.value.trim();
    const broj = Number(vrijednost);

    if (
        vrijednost === "" ||
        !Number.isInteger(broj) ||
        broj < 1 ||
        broj > 8
    ) {
        return null;
    }

    return broj;
}

function provjeriEmail(adresa) {
    const brojAt = adresa.split("@").length - 1;

    if (brojAt === 0) {
        return "E-mail adresa mora sadržavati znak @.";
    }

    if (brojAt > 1) {
        return "E-mail adresa smije sadržavati samo jedan znak @.";
    }

    const pozicijaAt = adresa.indexOf("@");
    const pozicijaZadnjeTocke = adresa.lastIndexOf(".");

    const prijeAt = adresa.slice(0, pozicijaAt);
    const nakonAt = adresa.slice(pozicijaAt + 1);

    if (prijeAt.length < 2) {
        return "Prije znaka @ moraju biti barem 2 znaka.";
    }

    if (nakonAt.length < 2) {
        return "Nakon znaka @ moraju biti barem 2 znaka.";
    }

    if (pozicijaZadnjeTocke < pozicijaAt) {
        return "Nakon znaka @ mora postojati točka.";
    }

    if (adresa.length - pozicijaZadnjeTocke - 1 < 2) {
        return "Nakon zadnje točke moraju biti barem 2 znaka.";
    }

    return "";
}

document.getElementById("pozdrav").addEventListener("dblclick", function() {

    const osoba = procitajImePrezime();

    if (osoba === null) {
        alert("Pogrešan unos!");
    } else {
        alert("Dobro došli, " + osoba.ime + " " + osoba.prezime + "!");
    }

});

document.getElementById("pomoc").addEventListener("mouseover", function() {

    poruka("Broj kolegija mora biti između 1 i 8.");

});

document.getElementById("pomoc").addEventListener("mouseout", function() {

    poruka("");

});

document.getElementById("kolegiji").addEventListener("mouseup", function() {

    const broj = procitajBroj();

    if (broj === null) {
        poruka("Broj kolegija mora biti cijeli broj između 1 i 8.");
        popis.value = "";
        return;
    }

    let tekst = "";

    for (let i = 0; i < broj; i++) {
        tekst += "Kolegij " + (i + 1) + ": " + kolegiji[i] + "\n";
    }

    popis.value = tekst;

    poruka("Ukupno ECTS bodova: " + (broj * ECTS));

});

document.getElementById("obrisi").addEventListener("click", function() {

    if (confirm("Želite li obrisati popis kolegija?")) {
        popis.value = "";
        poruka("Popis kolegija je obrisan.");
    }

});

document.getElementById("prijavi").addEventListener("click", function() {

    const osoba = procitajImePrezime();

    if (osoba === null) {
        alert("Unesite ispravno ime i prezime.");
        return;
    }

    const greskaEmail = provjeriEmail(email.value.trim());

    if (greskaEmail !== "") {
        alert(greskaEmail);
        return;
    }

    const broj = procitajBroj();

    if (broj === null) {
        alert("Broj kolegija mora biti cijeli broj od 1 do 8.");
        return;
    }

    if (popis.value.trim() === "") {
        alert("Prvo kliknite na gumb Kolegiji.");
        return;
    }

    const potvrda = confirm(
        "Vaše ime je " + osoba.ime +
        ", vaše prezime " + osoba.prezime +
        ", vaša e-mail adresa " + email.value.trim() +
        ". Broj kolegija: " + broj +
        " (" + (broj * ECTS) + " ECTS). Potvrđujete li prijavu?"
    );

    if (potvrda) {
        poruka("Prijava je zaprimljena.");
    } else {
        poruka("Prijava je otkazana.");
    }

    document.getElementById("prijava").reset();
    popis.value = "";

});
