let prenom = "nadou";
let age = "26";
console.log("nom : " + prenom + ", age : " + age);

let notes = [10, 20, 30];
[note1, note2, note3] = notes;
console.log("note : " + note2);
console.log(note1, note3);

let personnes = {
    nom : "chimhcim",
    age : "29",
    sexe : "H"
};
({nom, age, sexe} = personnes);
console.log(nom);