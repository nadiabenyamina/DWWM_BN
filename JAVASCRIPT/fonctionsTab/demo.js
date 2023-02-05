const notes = [5, 10, 15, 20];
console.log(notes);

// fonction .pop() permet de supprimer le dernier élément (ou dernière valeur)
notes.pop();
console.log(notes);

// fonction .push() permet d'ajouter de nouvelles valeurs (nouveaux éléments) au tableau
// les éléments sont rajoutés en "haut de la pile"
notes.push(17, 16);
console.log(notes);

// fonction .map() permet de récupérer un tableau et d'apporter une modification, en retournant un nouveau tableau
// auquel on a apporté une modification. Elle fonctionne avec une fonction de rappel, fonction de callback
// function() est une fonction anonyme avec un paramètre si besoin, c'est une fonction callback
// cette dernière va récupérer l'ensemble des notes une à une dans le tableau des notes
const notes2 = notes.map(function(note){
    // ici on va transformer le tableau puis le retourner
    // Math.pow : puissance de 2
    // return Math.pow(note, 2)
    // ** permet de calculer les puissances aussi
    // ici on calcule les notes du tableau
    return note ** note;
});
// la fonction a bien récupéré le tableau créé précédemment et a bien effectué le calcul (5²=25, etc.)
console.log(notes2);

// .findIndex permet de récupérer l'index, par exemple on va retourner l'index de la note 15
const index = notes.findIndex(function(note){
    return note === 15;
});
// dans le tableau, la note est à l'index 2 (le tableau commence toujours à l'index 0)
console.log(index);

const etudiants = [
    ["riri", 5, 10, 15, 20],
    ["fifi", 15, 12, 16, 19],
    ["loulou", 6, 11, 13, 3]
]
// fonction .find() permet de retourner les valeurs du tableau correspondant à la colonne "fifi"
// on récupère toutes les données écrits dedans
const valeur = etudiants.find(function(etu){
    return etu[0] === "fifi";
});
console.log(valeur);