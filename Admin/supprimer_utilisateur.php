<?php
// Connexion à la base de données
$conn = mysqli_connect('127.0.0.1:3307','root','','gestion_anounce');
if (!$conn) {
    die("Erreur de connexion à la base de données : " . mysqli_connect_error());
}

$sql = "SELECT * FROM utilisateur";
$result = mysqli_query($conn, $sql);

// Suppression de l'utilisateur
if (isset($_GET['action']) && $_GET['action'] == 'supprimer' && isset($_GET['id'])) {
    $id_utilisateur = $_GET['id'];
    $sql = "DELETE FROM utilisateur WHERE ID_utilisateur = $id_utilisateur";
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Utilisateur supprimé avec succès');</script>";
        echo "<script>window.location.href = 'tableau_affichage.php';</script>";
    } else {
        echo "Erreur lors de la suppression de l'utilisateur : " . mysqli_error($conn);
    }
}

// Fermeture de la connexion
mysqli_close($conn);
?>
