const size = document.querySelector('#nbt');
const weight = document.querySelector('#nbp');
const divResult = document.querySelector('#resultat');
const divTxt = document.querySelector('.txt');
const btn = document.querySelector('#btn');
const clear = document.querySelector('#clear');
const inputs = document.querySelectorAll('input');

function calculIMC() {
    // taille cm en m : taille / 100
    calculTaille = size.value / 100;
    // calcul imc : poids / taille²
    calcul = weight.value / Math.pow(calculTaille, 2);
    resultat = calcul.toFixed(2)

    if (calcul > 0 && calcul < 18.5) {
        divResult.innerHTML = resultat;
        divResult.style.color = 'red';
        divTxt.innerHTML = "Maigreur";
    } else if (calcul >= 18.5 && calcul <= 25) {
        divResult.innerHTML = resultat;
        divResult.style.color = 'green';
        divTxt.innerHTML = "Corpulence normale";
    } else if (calcul > 25 && calcul <= 30) {
        divResult.innerHTML = resultat;
        divResult.style.color = 'orange';
        divTxt.innerHTML = "Surpoids";
    } else if (calcul > 30) {
        divResult.innerHTML = resultat;
        divResult.style.color = 'red';
        divTxt.innerHTML = "Obésité";
    } else if (calcul > 200) {
        divResult.innerHTML = resultat;
        divResult.style.color = 'yellow';
        divTxt.innerHTML = "You are too fat";
    }
}

btn.addEventListener('click', function () {
    // isNaN() : fonction qui permet de dire si la valeur entrée est un nombre ou pas (NaN : Not a Number)
    if ((size.value == '' && weight.value == '') || (size.value == '' || weight.value == '')) {
        divResult.innerHTML = "Oops";
        divTxt.innerHTML = "Veuillez remplir les champs ci-dessus correctement.";
    } else if (size.value && weight.value){
        calculIMC();
    }
});

clear.addEventListener('click', function () {
    inputs.forEach(input => input.value = '');
    divResult.innerHTML = "0";
    divResult.style.color = "black";
    divTxt.innerHTML = "Veuillez remplir les champs ci-dessus";
});