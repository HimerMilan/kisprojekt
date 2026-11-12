const form = document.getElementById("regForm");

const nev = document.getElementById("nev");
const login = document.getElementById("login");
const jelszo = document.getElementById("jelszo");
const szerepkor = document.getElementById("szerepkor");
const mobil = document.getElementById("mobil");
const email = document.getElementById("email");


function ellenorzes(mezo, jo) {

    if (jo) {
        mezo.classList.remove("is-invalid");
        mezo.classList.add("is-valid");
    } else {
        mezo.classList.remove("is-valid");
        mezo.classList.add("is-invalid");
    }

    return jo;
}

nev.addEventListener("input", function () {

    let jo = /^[A-Za-zÁÉÍÓÖŐÚÜŰáéíóöőúüű ]+$/.test(nev.value);

    ellenorzes(nev, jo);
});

login.addEventListener("input", function () {

    let jo = login.value.trim() !== "";

    ellenorzes(login, jo);
});

jelszo.addEventListener("input", function () {

    let jo = jelszo.value.trim() !== "";

    ellenorzes(jelszo, jo);
});

szerepkor.addEventListener("change", function () {

    let jo = szerepkor.value !== "";

    ellenorzes(szerepkor, jo);
});

mobil.addEventListener("input", function () {

    let jo = /^[0-9+\/#-]+$/.test(mobil.value);

    ellenorzes(mobil, jo);
});

email.addEventListener("input", function () {

    let minta = /^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/;

    let jo = minta.test(email.value);

    ellenorzes(email, jo);
});

form.addEventListener("submit", function (event) {

    let nevJo = /^[A-Za-zÁÉÍÓÖŐÚÜŰáéíóöőúüű ]+$/.test(nev.value);

    let loginJo = login.value.trim() !== "";

    let jelszoJo = jelszo.value.trim() !== "";

    let szerepkorJo = szerepkor.value !== "";

    let mobilJo = /^[0-9+\/#-]+$/.test(mobil.value);

    let emailJo = /^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/.test(email.value);


    ellenorzes(nev, nevJo);
    ellenorzes(login, loginJo);
    ellenorzes(jelszo, jelszoJo);
    ellenorzes(szerepkor, szerepkorJo);
    ellenorzes(mobil, mobilJo);
    ellenorzes(email, emailJo);


    if (
        !nevJo ||
        !loginJo ||
        !jelszoJo ||
        !szerepkorJo ||
        !mobilJo ||
        !emailJo
    ) {
        event.preventDefault();
    }

});