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
            case "histoire":
                if (empty($url[1])) {                    
                } elseif ($url[1] === "h") {
                    // vkhkhkvhkvbhj
                } else {
                    throw new Exception("La page n'existe pas");
                }
            break;
            case "jeux":
                if (empty($url[1])) {                    
                } elseif ($url[1] === "j") {
                } elseif ($url[1] === "a") {
                } elseif ($url[1] === "m") {
                } elseif ($url[1] === "s") {
                } elseif ($url[1] === "av") {
                } elseif ($url[1] === "mv") {
                }
                else {
                    throw new Exception("La page n'existe pas");
                }
            break;
            case "personnages":
                if (empty($url[1])) {                    
                } elseif ($url[1] === "p") {
                } elseif ($url[1] === "a") {
                } elseif ($url[1] === "m") {
                } elseif ($url[1] === "s") {
                } elseif ($url[1] === "av") {
                } elseif ($url[1] === "mv") {
                }
                else {
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
?>