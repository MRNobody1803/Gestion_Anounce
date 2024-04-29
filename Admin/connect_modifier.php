<?php
// Connexion à la base de données
$conn = mysqli_connect('127.0.0.1:3307','root','','gestion_anounce');
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
        echo "Utilisateur mis à jour avec succès.";
    } else {
        echo "Erreur lors de la mise à jour de l'utilisateur : " . mysqli_error($conn);
    }
}

// Fermeture de la connexion
mysqli_close($conn);
?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription réussie</title>
    <link rel="stylesheet" href="home.css">
    <style>
        body {
            ont-family: Arial, sans-serif;
            ackground-color: #f4f4f4;
            argin: 0;
            adding: 0;
        }
        
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        
        .message {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        
        .message h2 {
            color: #007bff;
        }
        
        .message p {
            margin: 10px 0;
        }
        
        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }
        
        .button:hover {
            background-color: #0056b3;
        }
        
    </style>
</head>
<body>

<div class="container">
    <div class="message">
        <h2>L'utilisateur est modifier !</h2>
        <p>Votre utilisateur a été modifier avec succès.</p>
        <a href="tableau_affichage.php" class="button">OK</a>
    </div>
</div>

</body>
</html>
