<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professeur</title>
    <link rel="icon" href="/Icons/login_icon_184224.ico">
    <link rel="stylesheet" href="../CSS/Etud.css">
</head>
<body>
<?php 
    session_start();
    include 'HeaderP.php'; ?>
    <?php  
    // Connexion à la base de données
    $conn = mysqli_connect('127.0.0.1:3307', 'root', '', 'gestion_anounce');
        if (!$conn) {
        die("Erreur de connexion à la base de données : " . mysqli_connect_error());
    }

    // session_start();
    //recuperer le id du prof
    $id_utilisateur = $_SESSION['ID_utilisateur'];

    // Requête pour récupérer les utilisateurs
    $sql = "SELECT annonce.*, utilisateur.Nom AS Nom_utilisateur , utilisateur.Prénom AS Prenom   FROM annonce ,utilisateur  WHERE utilisateur.ID_utilisateur = annonce.ID_utilisateur  AND annonce.ID_utilisateur= $id_utilisateur ;";
    $result = mysqli_query($conn, $sql);
    // Affichage des utilisateurs dans le tableau
try{
    if (mysqli_num_rows($result) > 0) {
    
        echo '<section class="container">';
        echo '<h1>Les Annonces</h1>';
        echo '<div class="annonces">';
        while ($row = mysqli_fetch_assoc($result)) {
            $Titre = $row["Titre_annonce"];
            $Type = $row["Type_annonce"];
            $Anoncer = $row["Nom_utilisateur"];
            $prenom = $row["Prenom"];
            $datePublication = $row["Date_publication"];
            $desc = $row["Description"];
            $contenu = $row["Contenu"];
            $Status = $row["Status"];
            

            echo '<div class="anounce">';
            echo '<div class="desc">';
            echo "<h2><li>Titre :  $Titre </li> </h2>";
            echo "<p><li>Type : $Type </li></p>";
            echo "<p><li>Par :  Prof. $Anoncer $prenom </></p>";
            echo "<p><li>Description : $desc </p>";
            echo "<p><li>Date de publication : $datePublication </li></p>" ;
            echo "<p><li>Status : $Status </li></p>" ;
            echo '</div>';
            echo '<div class="contenu">';
            echo "<p> $contenu </p>";
            if (!empty($row["Chemin"])) {
                $cheminFichier = $row["Chemin"];
                echo "<p><a href='$cheminFichier' download>Télécharger le fichier associé</a></p>";
            }
            echo '</div>';
            echo '</div>';
        }
        echo '</div>';
        echo '</section>';
    } else {
        echo "Aucune annonce trouvée.";
    }
}catch (PDOException $e) {
    // Gérer les erreurs de connexion à la base de données
    echo "Erreur de connexion à la base de données : " . $e->getMessage();
}

// Fermeture de la connexion
mysqli_close($conn);
       include 'Footer.php' ; ?>
</body>
</html>
