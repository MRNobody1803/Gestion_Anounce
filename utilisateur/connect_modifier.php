<?php
// Connexion à la base de données
$conn = mysqli_connect('127.0.0.1:3307', 'root', '', 'gestion_anounce');
if (!$conn) {
    die("Erreur de connexion à la base de données : " . mysqli_connect_error());
}

// Vérification si le formulaire de modification a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $id_utilisateur = $_POST['id_utilisateur'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $mot_de_passe = $_POST['mot_de_passe'];
    $type_utilisateur = $_POST['type_utilisateur'];

    // Requête SQL pour mettre à jour l'utilisateur dans la base de données
    $sql = "UPDATE utilisateur SET Nom='$nom', Prénom='$prenom', Email='$email', Mot_de_passe='$mot_de_passe', type_utilisateur='$type_utilisateur' WHERE ID_utilisateur='$id_utilisateur'";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Utilisateur mis ajour avec succès');</script>";
        echo "<script>window.location.href = 'tableau_affichage.php';</script>";
    } else {
        echo "Erreur lors de la mise à jour de l'utilisateur : " . mysqli_error($conn);
    }
}

// Fermeture de la connexion
mysqli_close($conn);
?>
