class Macka {

    constructor(ime, boja, dob, spol) {
        this.ime = ime;
        this.boja = boja;
        this.dob = dob;
        this.spol = spol;
    }

    opis() {
        return("Mačka " + this.ime + " je " + this.boja + ", ima " + this.dob + " godina " + " i njen spol je " + this.spol + ".");
    }

    promijeniDob(novaDob) {
        this.dob = novaDob;
    }

}

const tigar = new Macka("Ivan", "narančasta", 10, "muški");
const micika = new Macka("Luka", "bijela", 5, "muški");
const ispisMacke = document.getElementById("macke");

ispisMacke.innerHTML += tigar.opis() + "<br>";

ispisMacke.innerHTML += "Starost mačke (2021): " + micika.dob + "<br>";

micika.promijeniDob(10);

ispisMacke.innerHTML += "Starost mačke (2026): " + micika.dob + "<br>";

let izmjena = document.lastModified;
document.getElementById("izmjena").innerHTML = izmjena;