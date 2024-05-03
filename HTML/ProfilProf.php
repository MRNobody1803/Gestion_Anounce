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
            padding : 8px ;
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
    include 'HeaderProf.php'; 
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

        <?php $ID_utilisateur = $_GET['ID_utilisateur'];?>

            <h2>Nom Complet :</h2>
            <p> <?php echo $ID_utilisateur ?></p>
            <h2>Numéro d'enseignement  :</h2>
            <p>A123456789</p>
            <h2>Departement :</h2>
            <p>Génie Informatique </p>
            <h2>Email :</h2>
            <p>john.doe@example.com</p>
            <h2>Numéro de Téléphone :</h2>
            <p>+1234567890</p>
           
        </div>
        <div class="button-container">
            <button class="edit-profile-button">Modifier le Profil</button>
        </div>
    </div>
    </section>
    
    <?php include 'Footer.php' ; ?>
</body>
</html>
