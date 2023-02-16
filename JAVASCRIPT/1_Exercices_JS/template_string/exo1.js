const Ville1 = {
    nom : "Paris",
    lat : 48.8534,
    long : 2.3488
};

const Ville2 = {
    nom : "Bordeaux",
    lat : 44.8333,
    long : -0.5667,
};

const Ville3 = {
    nom : "Dunkerque",
    lat : 51.035,
    long : 2.378
};


let tabCity = [Ville1, Ville2, Ville3];

function affichageCoordonnees(){
    
    for (let i = 0; i < tabCity.length ; i++){
        console.log("----- " + tabCity[i].nom + 
        " -----\nLatitude : " + tabCity[i].lat + 
        "\nLongitude : " + tabCity[i].long);
        // console.log(tabCity[i]);
    }
}

affichageCoordonnees();