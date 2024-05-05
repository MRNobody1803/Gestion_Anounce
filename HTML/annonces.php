<?php
// Connexion à la base de données
$conn = mysqli_connect('127.0.0.1:3307', 'root', '', 'gestion_anounce');
if (!$conn) {
    die("Erreur de connexion à la base de données : " . mysqli_connect_error());
}

// Requête pour récupérer les Contenu
$sql = "SELECT annonce.*, filière.Nom_filière AS Nom_filière 
        FROM annonce 
        INNER JOIN filière ON filière.ID_filière = annonce.ID_filière";
$result = mysqli_query($conn, $sql);

// Affichage des annonces dans le tableau avec le nom de la filière
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["ID_annonce"] . "</td>";
        echo "<td>" . $row["Titre_annonce"] . "</td>";
        echo "<td>" . $row["Nom_filière"] . "</td>"; // Affichage du nom de la filière
        echo "<td>" . $row["Contenu"] . "</td>";
        echo "<td>" . $row["ID_utilisateur"] . "</td>";
        echo "<td>" . $row["ID_filière"] . "</td>";

        echo "<td>" . $row["Date_publication"] . "</td>";
        echo "<td>Validé</td>";
        echo "<td><a href='modifier__annonce.php?ID_annonce=" . $row["ID_annonce"] . "&Contenu=" . $row["Contenu"] . "'><button class='btn' title='button'>Modifier</button></td>";
        echo "<td><a href='supprimer_annonce.php?action=supprimer&ID_annonce=" . $row["ID_annonce"] . "' onclick='return confirm(\"Voulez-vous vraiment supprimer cette annonce ?\")'><button class='btn' title='button'>Supprimer</button></td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='5'>Aucun Contenu trouvé.</td></tr>";
}

// Fermeture de la connexion
mysqli_close($conn);
?>