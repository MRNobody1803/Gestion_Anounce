<?php
// Connexion à la base de données
$conn = mysqli_connect('127.0.0.1:3307', 'root', '', 'gestion_anounce');
if (!$conn) {
    die("Erreur de connexion à la base de données : " . mysqli_connect_error());
}

$sql = "SELECT * FROM annonce";
$result = mysqli_query($conn, $sql);

// Suppression de l'annonce
if (isset($_GET['action']) && $_GET['action'] == 'supprimer' && isset($_GET['ID_annonce'])) {
    $ID_annonce = $_GET['ID_annonce'];
    $sql = "DELETE FROM annonce WHERE ID_annonce = $ID_annonce";
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('annonce supprimé avec succès');</script>";
        echo "<script>window.location.href = 'HomeAdm.php';</script>";
    } else {
        echo "Erreur lors de la suppression de l'annonce' : " . mysqli_error($conn);
    }
}

// Fermeture de la connexion
mysqli_close($conn);
?>
