<?php
define ("URL", str_replace("index.php", "", (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]"));

// require_once "controllers/tlou.controller.php";

try {
    if (empty($_GET['page'])) {
        require "views/accueil.view.php";
    } else {
        $url = explode("/", filter_var($_GET['page']), FILTER_SANITIZE_URL);

        switch ($url[0]) {
            case "accueil":
                require "views/accueil.view.php";
            break;

            // case "naughtydog":
            //     if (empty($url[1])) {
            //         require "views/naughtydog.view.php";
            //     }
            //     else {
            //         throw new Exception("La page n'existe pas");
            //     }
            // break;

            // case "serie":
            //     if (empty($url[1])) {
            //         require "views/serie.view.php";
            //     }
            //     else {
            //         throw new Exception("La page n'existe pas");
            //     }
            // break;

            // case "connexion":
            //     if (empty($url[1])) {
            //         require "views/connexion.view.php";
            //     }
            //     else {
            //         throw new Exception("La page n'existe pas");
            //     }
            // break;

            // case "inscription":
            //     if (empty($url[1])) {
            //         require "views/inscription.view.php";
            //     }
            //     else {
            //         throw new Exception("La page n'existe pas");
            //     }
            // break;

            case "mentionslegales":
                if (empty($url[1])) {
                    require "views/mentions.view.php";
                } else {
                    throw new Exception("La page n'existe pas.");
                }
            break;

            default : throw new Exception("La page n'existe pas");
        }
    }
}

catch (Exception $e) {
    echo $e->getMessage();
}
?>