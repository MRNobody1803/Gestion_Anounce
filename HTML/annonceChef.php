<?php
// Connexion à la base de données
$conn = mysqli_connect('127.0.0.1:3307', 'root', '', 'gestion_anounce');
if (!$conn) {
    die("Erreur de connexion à la base de données : " . mysqli_connect_error());
}

// Requête pour récupérer les Contenu
$sql = "SELECT annonce.*, filière.Nom_filière , utilisateur.Nom AS Nom_utilisateur  , utilisateur.Prénom AS Prenom_utilisateur
        FROM annonce
        INNER JOIN filière ON filière.ID_filière = annonce.ID_filière
        INNER JOIN utilisateur ON utilisateur.ID_utilisateur = annonce.ID_utilisateur
        WHERE annonce.Status ='En Attente';";

$result = mysqli_query($conn, $sql);

// Affichage des annonces dans le tableau avec le nom de la filière
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["ID_annonce"] . "</td>";
        echo "<td>" . $row["Titre_annonce"] . "</td>";
        echo "<td>" . $row["Nom_filière"] . "</td>"; // Affichage du nom de la filière
        echo "<td>" . $row["Contenu"] . "</td>";
        echo "<td>" . $row["Nom_utilisateur"] ." ".$row["Prenom_utilisateur"]. "</td>";

        echo "<td>" . $row["Date_publication"] . "</td>";
        echo "<td><a href='validerChef.php?ID_annonce=" . $row["ID_annonce"] . "&new_status=validé'><button class='btn' title='button'>Valider</button></a></td>";
        
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='5'>......... Pas De Nouveaux Annonces ..........</td></tr>";
}

// Fermeture de la connexion
mysqli_close($conn);
?>
