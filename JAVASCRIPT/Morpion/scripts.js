const playerOne = 'X';
const playerTwo = 'O';
const result = document.querySelector('.resultat');


function rechercherVainqueur(pions, joueurs, tour) {
    if (
        pions[0].innerHTML == joueurs[tour] &&
        pions[1].innerHTML == joueurs[tour] &&
        pions[2].innerHTML == joueurs[tour]
    ) {
        pions[0].style.backgroundColor = "#9ACD32";
        pions[1].style.backgroundColor = "#9ACD32";
        pions[2].style.backgroundColor = "#9ACD32";
        return true;
    }

    if (
        pions[3].innerHTML == joueurs[tour] &&
        pions[4].innerHTML == joueurs[tour] &&
        pions[5].innerHTML == joueurs[tour]
    ) {
        pions[3].style.backgroundColor = "#9ACD32";
        pions[4].style.backgroundColor = "#9ACD32";
        pions[5].style.backgroundColor = "#9ACD32";
        return true;
    }

    if (
        pions[6].innerHTML == joueurs[tour] &&
        pions[7].innerHTML == joueurs[tour] &&
        pions[8].innerHTML == joueurs[tour]
    ) {
        pions[6].style.backgroundColor = "#9ACD32";
        pions[7].style.backgroundColor = "#9ACD32";
        pions[8].style.backgroundColor = "#9ACD32";
        return true;
    }

    if (
        pions[0].innerHTML == joueurs[tour] &&
        pions[3].innerHTML == joueurs[tour] &&
        pions[6].innerHTML == joueurs[tour]
    ) {
        pions[0].style.backgroundColor = "#9ACD32";
        pions[3].style.backgroundColor = "#9ACD32";
        pions[6].style.backgroundColor = "#9ACD32";
        return true;
    }

    if (
        pions[1].innerHTML == joueurs[tour] &&
        pions[4].innerHTML == joueurs[tour] &&
        pions[7].innerHTML == joueurs[tour]
    ) {
        pions[1].style.backgroundColor = "#9ACD32";
        pions[4].style.backgroundColor = "#9ACD32";
        pions[7].style.backgroundColor = "#9ACD32";
        return true;
    }

    if (
        pions[2].innerHTML == joueurs[tour] &&
        pions[5].innerHTML == joueurs[tour] &&
        pions[8].innerHTML == joueurs[tour]
    ) {
        pions[2].style.backgroundColor = "#9ACD32";
        pions[5].style.backgroundColor = "#9ACD32";
        pions[8].style.backgroundColor = "#9ACD32";
        return true;
    }

    if (
        pions[0].innerHTML == joueurs[tour] &&
        pions[4].innerHTML == joueurs[tour] &&
        pions[8].innerHTML == joueurs[tour]
    ) {
        pions[0].style.backgroundColor = "#9ACD32";
        pions[4].style.backgroundColor = "#9ACD32";
        pions[8].style.backgroundColor = "#9ACD32";
        return true;
    }

    if (
        pions[2].innerHTML == joueurs[tour] &&
        pions[4].innerHTML == joueurs[tour] &&
        pions[6].innerHTML == joueurs[tour]
    ) {
        pions[2].style.backgroundColor = "#9ACD32";
        pions[4].style.backgroundColor = "#9ACD32";
        pions[6].style.backgroundColor = "#9ACD32";
        return true;
    }
}