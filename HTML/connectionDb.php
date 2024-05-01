<?php

$serveur = "127.0.0.1:3307"; // Nom du serveur MySQL
$utilisateur = "root"; // Nom d'utilisateur MySQL
$passwd = ""; // Mot de passe MySQL
$DataBase = 'gestion_anounce'; // Nom de la base de données MySQL

try {
    // Connexion à la base de données avec PDO
    $connexion = new PDO("mysql:host=$serveur;dbname=$DataBase", $utilisateur, $passwd);

    // Configuration des options de PDO pour afficher les erreurs
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    

} catch (PDOException $e) {
    // Affichage d'un message d'erreur en cas d'échec de la connexion
    $loginErr = "Error connecting to the database: " . $e->getMessage();
}
?>