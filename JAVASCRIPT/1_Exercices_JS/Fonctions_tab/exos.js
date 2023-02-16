const notes = [5,10,15,20];

// exercice 1
for (const [key, value] of notes.entries()) {
    console.log("Note " + key + " : " + value);
}

// exercice 2
const carre = notes.map(function(note){
    return Math.pow(note, 2)
});
console.log(carre);

// exercice 3
let tab = [
    {nom : "Titi", age : 25},
    {nom : "Gros-minet", age : 23},
    {nom : "Bugs", age : 22},
    {nom : "Daffy", age : 20},
    {nom : "Dingo", age : 24}
];
tab.pop();
console.log(tab);