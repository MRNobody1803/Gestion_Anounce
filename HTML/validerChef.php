<?php
// Récupération des valeurs des paramètres GET
$annonce_id = $_GET['ID_annonce'];
$new_status = $_GET['new_status'];

// Connexion à la base de données (vous devez remplacer ces valeurs par les vôtres)
$serveur = "127.0.0.1:3307";
$utilisateur = "root";
$mdp = "";
$base_de_donnees = "gestion_anounce";

// Création de la connexion
$connexion = new mysqli($serveur, $utilisateur, $mdp, $base_de_donnees);

// Vérification de la connexion
if ($connexion->connect_error) {
    die("Échec de la connexion : " . $connexion->connect_error);
}

// Requête SQL pour mettre à jour le statut dans la base de données
$sql = "UPDATE annonce SET Status = '$new_status' WHERE ID_annonce = '$annonce_id'";

if ($connexion->query($sql) === TRUE) {
    echo "<script>alert('L\'annonce est validée avec succès');</script>";
    echo "<script>window.location.href = 'HomeChef.php';</script>";
} else {
    echo "Erreur lors de la mise à jour du statut : " . $connexion->error;
}

// Fermeture de la connexion à la base de données
$connexion->close();
?>
