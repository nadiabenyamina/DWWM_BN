const cells = document.querySelectorAll('.btn');
const gameStatus = document.querySelector('#gameStatus');
const endGameStatus = document.querySelector('#endGameStatus');
const playerOne = 'X';
const playerTwo = 'O';
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

cells.forEach(cell => {
    cell.addEventListener('click', playGame, { once: true});
})

function playGame(e) {
    e.target.innerHTML = playerTurn;

    if (checkWin(playerTurn)) {
        updateGameStatue("wins" + playerTurn);
        return endGame();
    } else if (checkDraw()) {
        updateGameStatue("draw");
        return endGame();
    }

    updateGameStatue(playerTurn);
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

function updateGameStatue(status) {
    let statusText;

    switch (status) {
        case 'X':
            statusText = "Au tour du joueur 2 (O)";
            break;
        case 'O':
            statusText = "Au tour du joueur 1 (X)";
            break;
        case 'winsX':
            statusText = "Le joueur 1 (X) a gangé !";
            break;
        case 'winsO':
            statusText = "Le joueur 2 (O) a gangé !";
            break;
        case 'draw':
            statusText = "Match nul !";
            break;
    }

    gameStatus.innerHTML = statusText;
    endGameStatus.innerHTML = statusText;
}

function endGame() {document.querySelector('#gameEnd').style.display = "block"};
function reloadGame() {windows.location.reload()};











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