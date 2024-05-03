<?php
// Connexion à la base de données
$conn = mysqli_connect('127.0.0.1:3307', 'root', '', 'gestion_anounce');
if (!$conn) {
    die("Erreur de connexion à la base de données : " . mysqli_connect_error());
}

// Vérification si le formulaire de modification a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $Contenu = $_POST['Contenu'];
    $ID_annonce = $_POST['ID_annonce'];
    

    // Requête SQL pour mettre à jour l'utilisateur dans la base de données
    $sql = "UPDATE annonce SET  Contenu='$Contenu' WHERE ID_annonce='$ID_annonce'";

    if (mysqli_query($conn, $sql)) {
        
        echo "<script>alert('annonce mis à jour avec succès');</script>";
        echo "<script>window.location.href = 'A_valider.php';</script>";
    } else {
        echo "Erreur lors de la mise à jour de l'annonce : " . mysqli_error($conn);
    }
}

// Fermeture de la connexion
mysqli_close($conn);
?>


