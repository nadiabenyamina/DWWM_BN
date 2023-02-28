<?php

abstract class Model
{
    // on définit en tant que static pour qu'il soit accessible par toutes les calsses
    private static $pdo;

    private static function setBdd(){
        // on définit le chemin d'accès, "localhost" devra être changé quand le site sera en ligne
        // dbname : nom de la bdd dans phpmyadmin
        self::$pdo = new PDO("mysql:host=localhost;dbname=biblio;charset=utf8", 'root', '');
        // éléments de paramètrages pour gérer les erreurs
        self::$pdo->setAttribute(PDO::ATTR_ERRMODE, pdo::ERRMODE_WARNING);
    }

    // permet une seule instance à la bdd, accessible depuis les classes filles
    protected function getBdd(){
        // on test si on a déjà une instance de pdo qui existe, est ce que mon attribut self::pdo est vide ou pas - est null
        if(self::$pdo === null){
            self::setBdd();
        }
        // on retourne l'instance dans tous les cas
        return self::$pdo;
    }
}