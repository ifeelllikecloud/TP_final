<?php

$server = "localhost";
$user = "root";
$pass = "root";
$database = "tp_final";

$conex = mysqli_connect($server, $user, $pass, $database);

if (!$conex) {
    die("Erreur");
    };
   // ICI DOIT APPARAITRE LA CONNECTION AVEC LA BASE DE DONNEES
   // ET LA GESTION DES ERREURS
?>