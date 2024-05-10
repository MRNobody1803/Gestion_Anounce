<?php
// Connexion à la base de données
$conn = mysqli_connect('127.0.0.1:3307', 'root', '', 'gestion_anounce');
if (!$conn) {
    die("Erreur de connexion à la base de données : " . mysqli_connect_error());
}

// Requête pour récupérer les annonces
$sql = "SELECT annonce.*, filière.Nom_filière, utilisateur.Nom AS Nom_utilisateur, utilisateur.Prénom AS Prenom_utilisateur
        FROM annonce , utilisateur , filière 
        WHERE annonce.ID_filière = filière.ID_filière 
        AND  annonce.ID_utilisateur =  utilisateur.ID_utilisateur 
        AND annonce.Status = 'validé' ;";

$result = mysqli_query($conn, $sql);

// Affichage des annonces dans le tableau avec le nom de la filière
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["ID_annonce"] . "</td>";
        echo "<td>" . $row["Titre_annonce"] . "</td>";
        echo "<td>" . $row["Nom_filière"] . "</td>"; // Affichage du nom de la filière
        echo "<td>" . $row["Contenu"] . "</td>";
        echo "<td>" . $row["Nom_utilisateur"] ." ". $row["Prenom_utilisateur"]. "</td>"; // Affichage du nom complet de l'utilisateur

        echo "<td>" . $row["Date_publication"] . "</td>";
        echo "<td>validé</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='5'>......... Pas De Nouveaux Annonces ..........</td></tr>";
}

// Fermeture de la connexion
mysqli_close($conn);
?>
