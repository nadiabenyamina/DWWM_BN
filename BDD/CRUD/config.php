<?php
// on vient de définir les constantes DB SERVER pour se connecter au serveur
// et on se connecte au localhost, puis on se connecte à la bdd avec le login et le mdp
// puis on lui dit quel bdd on veut, ici testbdd

// les constantes sont toujours en majuscule
// sur MAC le login et le mdp sont root

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'testbdd');

//mysqli_connect pour se connecter au serveur, en paramètre on lui donne tous les DB_ qu'on a créé
// il pourra se connecter ensuite. Le $link récupère true ou false,
// si true il se connecte, si false on arrête la connexion
// die pour "tuer" l'erreur, elle sera remonté qu'au programmeur
// c'est une exception, l'utilisateur ne la verra jamais

$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// le vardump;die affichera ce qu'il y a dans la $link, si c'est ok il affichera true sinon il affichera false
// var_dump($link);die;
// var_dump($link);die();

if($link === false){
    die("erreur : connexion h.s" . mysqli_connect_error());
}