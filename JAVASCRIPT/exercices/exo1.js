function fact(nbr){
    var i, nbr, f=1;
    for(i = 1; i <= nbr; i++){
        f = f * i;
    }
    return f;
}
let factorielle = "Factorielle 5 = ";
console.log(factorielle, fact(5));