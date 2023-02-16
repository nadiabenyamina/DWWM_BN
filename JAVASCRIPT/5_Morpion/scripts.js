const cells = document.querySelectorAll('.btn');
const gameStatus = document.querySelector('#gameStatus');
const endGameStatus = document.querySelector('#endGameStatus');
const playerOne = 'X';
const playerTwo = 'O';
// variable pour commencer le jeu avec le joueur 1
let playerTurn = playerOne;

const winningPatterns = [
    [0, 1, 2],
    [3, 4, 5],
    [6, 7, 8],
    [0, 3, 6],
    [1, 4, 7],
    [2, 5, 8],
    [0, 4, 8],
    [2, 4, 6]
];

// on crée un évènement listener pour chaque bouton
cells.forEach(cell => {

    // déclanche la fonction playGame à chaque clique
    // once: true = permet de déclancher une seule fois seulement chaque bouton
    cell.addEventListener('click', playGame, { once: true});
})

function playGame(e) {
    // e : évènement, .target : permet de lancer le jeu
    e.target.innerHTML = playerTurn;

    if (checkWin(playerTurn)) {
        updateGameStatus("wins" + playerTurn);
        return endGame();
    } else if (checkDraw()) {
        updateGameStatus("draw");
        return endGame();
    }

    updateGameStatus(playerTurn);

    // Si playerTurn == playerOne, donc si joueur1 a joué alors le joueur2 joue (après ? c'est la
    // condition : playerTurn = playerTwo) sinon, on fait jouer le joueur1 (après : c'est le else : playerTurn = playerOne)
    playerTurn == playerOne ? playerTurn = playerTwo : playerTurn = playerOne;

    // playerTurn = playerTurn == playerOne ? playerTwo : playerOne;

    // if (playerTurn == playerOne) {
    //     playerTurn = playerTwo;
    // } else {
    //     playerTurn = playerOne;
    // }
}

function checkWin(playerTurn) {
    return winningPatterns.some(combination => {
        return combination.every(index => {
            return cells[index].innerHTML == playerTurn;
        });
    });
};

function checkDraw() {
    return [...cells].every(cell => {
        return cell.innerHTML == playerOne || cell.innerHTML == playerTwo;
    });
};

function updateGameStatus(status) {
    let statusText;

    switch (status) {
        case 'X':
            statusText = "Au tour du joueur 2";
            break;
        case 'O':
            statusText = "Au tour du joueur 1";
            break;
        case 'winsX':
            statusText = "Le joueur 1 a gagné !";
            break;
        case 'winsO':
            statusText = "Le joueur 2 a gagné !";
            break;
        case 'draw':
            statusText = "Match nul !";
            break;
    }

    gameStatus.innerHTML = statusText;
    endGameStatus.innerHTML = statusText;
}

// ici on enlève le display:none et fera apparaître l'overlay une fois la partie terminée
function endGame() {document.querySelector('#gameEnd').style.display = "block"};

// permettra de recharger la page et recommencer le jeu
function reloadGame() {window.location.reload()};











// function rechercherVainqueur(pions, joueurs, tour) {
//     if (
//         pions[0].innerHTML == joueurs[tour] &&
//         pions[1].innerHTML == joueurs[tour] &&
//         pions[2].innerHTML == joueurs[tour]
//     ) {
//         pions[0].style.backgroundColor = "#9ACD32";
//         pions[1].style.backgroundColor = "#9ACD32";
//         pions[2].style.backgroundColor = "#9ACD32";
//         return true;
//     }

//     if (
//         pions[3].innerHTML == joueurs[tour] &&
//         pions[4].innerHTML == joueurs[tour] &&
//         pions[5].innerHTML == joueurs[tour]
//     ) {
//         pions[3].style.backgroundColor = "#9ACD32";
//         pions[4].style.backgroundColor = "#9ACD32";
//         pions[5].style.backgroundColor = "#9ACD32";
//         return true;
//     }

//     if (
//         pions[6].innerHTML == joueurs[tour] &&
//         pions[7].innerHTML == joueurs[tour] &&
//         pions[8].innerHTML == joueurs[tour]
//     ) {
//         pions[6].style.backgroundColor = "#9ACD32";
//         pions[7].style.backgroundColor = "#9ACD32";
//         pions[8].style.backgroundColor = "#9ACD32";
//         return true;
//     }

//     if (
//         pions[0].innerHTML == joueurs[tour] &&
//         pions[3].innerHTML == joueurs[tour] &&
//         pions[6].innerHTML == joueurs[tour]
//     ) {
//         pions[0].style.backgroundColor = "#9ACD32";
//         pions[3].style.backgroundColor = "#9ACD32";
//         pions[6].style.backgroundColor = "#9ACD32";
//         return true;
//     }

//     if (
//         pions[1].innerHTML == joueurs[tour] &&
//         pions[4].innerHTML == joueurs[tour] &&
//         pions[7].innerHTML == joueurs[tour]
//     ) {
//         pions[1].style.backgroundColor = "#9ACD32";
//         pions[4].style.backgroundColor = "#9ACD32";
//         pions[7].style.backgroundColor = "#9ACD32";
//         return true;
//     }

//     if (
//         pions[2].innerHTML == joueurs[tour] &&
//         pions[5].innerHTML == joueurs[tour] &&
//         pions[8].innerHTML == joueurs[tour]
//     ) {
//         pions[2].style.backgroundColor = "#9ACD32";
//         pions[5].style.backgroundColor = "#9ACD32";
//         pions[8].style.backgroundColor = "#9ACD32";
//         return true;
//     }

//     if (
//         pions[0].innerHTML == joueurs[tour] &&
//         pions[4].innerHTML == joueurs[tour] &&
//         pions[8].innerHTML == joueurs[tour]
//     ) {
//         pions[0].style.backgroundColor = "#9ACD32";
//         pions[4].style.backgroundColor = "#9ACD32";
//         pions[8].style.backgroundColor = "#9ACD32";
//         return true;
//     }

//     if (
//         pions[2].innerHTML == joueurs[tour] &&
//         pions[4].innerHTML == joueurs[tour] &&
//         pions[6].innerHTML == joueurs[tour]
//     ) {
//         pions[2].style.backgroundColor = "#9ACD32";
//         pions[4].style.backgroundColor = "#9ACD32";
//         pions[6].style.backgroundColor = "#9ACD32";
//         return true;
//     }
// }