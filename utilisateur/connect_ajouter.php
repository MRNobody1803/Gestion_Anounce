<?php
$conn = mysqli_connect('127.0.0.1:3307','root','','gestion_anounce');
if (!$conn) {
    die("Erreur de connexion à la base de données : " . mysqli_connect_error());
}

// Récupérer les données du formulaire
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$Mot_de_passe = $_POST['Mot_de_passe'];
$type_utilisateur = $_POST['type_utilisateur'];

// Étape 3 : Valider et nettoyer les données (pour la sécurité, par exemple utiliser mysqli_real_escape_string)
$nom = mysqli_real_escape_string($conn, $nom);
$prenom = mysqli_real_escape_string($conn, $prenom);
$email = mysqli_real_escape_string($conn, $email);
$Mot_de_passe = mysqli_real_escape_string($conn, $Mot_de_passe);
$type_utilisateur = mysqli_real_escape_string($conn, $type_utilisateur);


// Requête SQL pour récupérer les utilisateurs
$sql = "INSERT INTO utilisateur (Nom, Prénom, Email, Mot_de_passe , type_utilisateur) VALUES ('$nom', '$prenom', '$email', '$Mot_de_passe','$type_utilisateur')";
if (mysqli_query($conn, $sql)) {
    $sql_select = 'SELECT * FROM utilisateur';
    // Exécution de la requête SQL
    $result = mysqli_query($conn, $sql_select);

} else {
    // Gérer les erreurs
    echo "Erreur lors de l'inscription : " . mysqli_error($conn);
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
        <h2>L'utilisateur est ajouter !</h2>
        <p>Votre utilisateur a été ajoutés avec succès.</p>
        <a href="tableau_affichage.php" class="button">OK</a>
    </div>
</div>

</body>
</html>
