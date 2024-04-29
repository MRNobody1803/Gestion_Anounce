<?php
// Connexion à la base de données
$conn = mysqli_connect('127.0.0.1:3307','root','','gestion_anounce');
if (!$conn) {
    die("Erreur de connexion à la base de données : " . mysqli_connect_error());
}

// Requête pour récupérer les utilisateurs
$sql = "SELECT * FROM utilisateur";
$result = mysqli_query($conn, $sql);

// Affichage des utilisateurs dans le tableau
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["ID_utilisateur"] . "</td>";
        echo "<td>" . $row["Nom"] . "</td>";
        echo "<td>" . $row["Prénom"] . "</td>";
        echo "<td>" . $row["Email"] . "</td>";
        echo "<td>" . $row["Mot_de_passe"] . "</td>";
        echo "<td>" . $row["type_utilisateur"] . "</td>";
        //echo "<td><a href='modifier_utilisateur.php?id=" . $row["ID_utilisateur"] . "'><button style='padding: 8px 12px; background-color: #007bff; color: #fff; border: none; border-radius: 4px; text-decoration: none; cursor: pointer; transition: background-color 0.3s;'>Modifier</button></a> </td>";
        echo "<td><a href='modifier_utilisateur.php?id=" . $row["ID_utilisateur"] . "&nom=" . $row["Nom"] . "&prenom=" . $row["Prénom"] . "&email=" . $row["Email"] . "&mot_de_passe=" . $row["Mot_de_passe"] . "&type_utilisateur=" . $row["type_utilisateur"] . "'><button style='padding: 8px 12px; background-color: #007bff; color: #fff; border: none; border-radius: 4px; text-decoration: none; cursor: pointer; transition: background-color 0.3s;'>Modifier</button></a></td>";

        //echo"<td><a href='supprimer_utilisateur.php?action=supprimer&id=" . $row["ID_utilisateur"] . "'><button style='padding: 8px 12px; background-color: #dc3545; color: #fff; border: none; border-radius: 4px; text-decoration: none; cursor: pointer; transition: background-color 0.3s;'>Supprimer</button></a></td>";
        echo "<td><a href='supprimer_utilisateur.php?action=supprimer&id=" . $row["ID_utilisateur"] . "' onclick='return confirm(\"Voulez-vous vraiment supprimer cet utilisateur ?\")'><button style='padding: 8px 12px; background-color: #dc3545; color: #fff; border: none; border-radius: 4px; text-decoration: none; cursor: pointer; transition: background-color 0.3s;'>Supprimer</button></a></td>";

        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='5'>Aucun utilisateur trouvé.</td></tr>";
}

// Fermeture de la connexion
mysqli_close($conn);
?>
