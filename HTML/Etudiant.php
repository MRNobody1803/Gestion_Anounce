<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Etudiant : Profil</title>
    <link rel="icon" href="/Icons/login_icon_184224.ico">
    <link rel="stylesheet" href="../CSS/Etud.css">
</head>
<body>
<?php 
    session_start();
    include 'Header.php'; ?>
    <?php
   include 'connectionDb.php';
   if (!isset($_SESSION['ID_utilisateur'])) {
    exit();
}
else {
    $UsernmaeEtud = $nameEtud = $lastnameEtud = "";
    $sql = "SELECT Nom, Prénom FROM utilisateur WHERE ID_utilisateur = :iduser ;";
    $stmt = $connexion->prepare($sql);
    $stmt->bindParam(":iduser", $_SESSION['ID_utilisateur']);
    $stmt->execute();
    if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $nameEtud = $row["Nom"];
        $lastnameEtud = $row["Prénom"];
        $_SESSION['Nom'] = $nameEtud ;
        $UsernmaeEtud = $nameEtud." ".$lastnameEtud ;
    }
}
    // Connexion à la base de données avec PDO
    try {
        $connexion = new PDO("mysql:host=127.0.0.1:3307;dbname=gestion_anounce", $utilisateur, $passwd);
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Requête SQL pour récupérer les annonces avec les informations sur l'annonceur
        $sql = "SELECT annonce.*, utilisateur.Nom AS Nom_utilisateur , utilisateur.Prénom AS Prenom , etudiant.*  FROM annonce ,utilisateur ,etudiant WHERE utilisateur.ID_utilisateur = annonce.ID_utilisateur AND etudiant.ID_filière = annonce.ID_filière AND annonce.Status = 'validé';";
        $resultat = $connexion->query($sql);

        // Vérification si des annonces existent
        if ($resultat->rowCount() > 0) {
            // Affichage de chaque annonce
            
            echo '<section class="container">';
            echo "<h2> BienVenu , $UsernmaeEtud</h2>";
            echo '<h1>Les Annonces</h1>';
            echo '<div class="annonces">';
            while ($row = $resultat->fetch(PDO::FETCH_ASSOC)) {
                $Titre = $row["Titre_annonce"];
                $Type = $row["Type_annonce"];
                $Anoncer = $row["Nom_utilisateur"];
                $prenom = $row["Prenom"];
                $datePublication = $row["Date_publication"];
                $desc = $row["Description"];
                $contenu = $row["Contenu"];
                

                echo '<div class="anounce">';
                echo '<div class="desc">';
                echo "<h2><li>Titre :  $Titre </li> </h2>";
                echo "<p><li>Type : $Type </li></p>";
                echo "<p><li>Par :  Prof. $Anoncer $prenom </></p>";
                echo "<p><li>Description : $desc </p>";
                echo "<p><li>Date de publication : $datePublication </li></p>" ;
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
    } catch (PDOException $e) {
        // Gérer les erreurs de connexion à la base de données
        echo "Erreur de connexion à la base de données : " . $e->getMessage();
    }
    ?>
      <?php include 'Footer.php' ; ?>
</body>
</html>
