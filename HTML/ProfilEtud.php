<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Étudiant</title>
    <style>
        
       
        .container {
            max-width: 800px ;
            max-height : 85vh ;
            margin: 20px 80px ;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.329);
            border-radius: 0px;
            font-family : serif ;
        }
        .profile-header {
            text-align: center;
            margin-bottom: 20px;
        }
        .profile-header h1 {
            color: #333;
        }
        .profile-picture {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            overflow: hidden;
            margin: 0 auto 20px;
        }
        .profile-picture img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .profile-details {
            margin-bottom: 20px;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 10px;
        }
        .profile-details h2 {
            margin-top: 0;
            color: #333;
            padding: 5px ;
            font-size : 22px ;
        }
        .profile-details p {
            color: #666;
            padding : 10px ;
        }
        .button-container {
            text-align: center;
        }
        .edit-profile-button {
            padding: 10px 20px;
            background-color: #6a6a6b;
            color: #fff;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .edit-profile-button:hover {
            background-color: #0056b3;
        }
        .cont {
            margin : 20px auto ;
            display: flex ;
            justify-content : center ;
        }
    </style>
</head>
<body>
    <?php   
    session_start();  
    include 'Header.php'; 
    ?>

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
    $sql = "SELECT utilisateur.*, etudiant.ID_filière, filière.Nom_filière,etudiant.ID_etudiant
    FROM utilisateur
    INNER JOIN etudiant ON utilisateur.ID_utilisateur = etudiant.ID_utilisateur
    INNER JOIN filière ON etudiant.ID_filière = filière.ID_filière
    WHERE utilisateur.ID_utilisateur = $id_utilisateur;";
    $result = mysqli_query($conn, $sql);

    // Affichage des utilisateurs dans le tableau
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
    $prenom =  $row["Nom"];
    $nom =  $row["Prénom"] ;
    $type_utilisateur =  $row["type_utilisateur"] ;
    $Email =  $row["Email"] ;
    $filière = $row["Nom_filière"];
    $ID_etudiant = $row["ID_etudiant"];

    }
} else {
    echo "<tr><td colspan='5'>Aucun utilisateur trouvé.</td></tr>";
}

// Fermeture de la connexion
mysqli_close($conn);
?>


    <section class="cont">
    <div class="container">
        <div class="profile-header">
            <h1>Profil</h1>
        </div>
        <div class="profile-picture">
            <img src="https://via.placeholder.com/150" alt="Profile Picture">
        </div>
        <div class="profile-details">

            <h2>ID_etudiant :</h2>
            <p><?php echo $ID_etudiant ?></p>
            <h2>Nom :</h2>
            <p> <?php echo $prenom ?></p>
            <h2>Prénom :</h 2>
            <p> <?php echo $nom ?></p>
            <h2>Departement :</h2>
            <p><?php echo $filière ?> </p>
            <h2>Email :</h2>
            <p><?php echo $Email ?></p>
            
            
    </div>
    </section>
    
    <?php include 'Footer.php' ; ?>
</body>
</html>