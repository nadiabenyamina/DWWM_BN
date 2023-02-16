<?php
define("URL", str_replace("index.php", "", (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]"));

require_once "controllers/livres.controller.php";
$livreController = new LivresController;

try {
    if (empty($_GET['page'])) {
        require "views/accueil.view.php";
    } else {
        $url = explode("/", filter_var($_GET['page']), FILTER_SANITIZE_URL);
        // echo "<pre>";
        // print_r($url);
        // echo "</pre>";

        switch ($url[0]) {
            case "accueil":
                require "views/accueil.view.php";
                break;
            case "livres":
                if (empty($url[1])) {
                    $livreController->afficherLivres();
                } elseif ($url[1] === "l") {
                    $livreController->afficherLeLivre($url[2]);
                } elseif ($url[1] === "a") {
                    $livreController->ajoutLivre();
                } elseif ($url[1] === "m") {
                    $livreController->modificationLivre($url[2]);
                    // echo $url[2];
                } elseif ($url[1] === "s") {
                    $livreController->suppressionLivre($url[2]);
                } elseif ($url[1] === "av") {
                    $livreController->ajoutLivreValidation();
                } elseif ($url[1] === "mv") {
                    $livreController->modificationLivreValidation();
                }
                else {
                    // url=0
                    throw new Exception("La page n'existe pas");
                }
            break;
            default : throw new Exception("La page n'existe pas");
        }
    }
}
catch (Exception $e) {
    echo $e->getMessage();
}
