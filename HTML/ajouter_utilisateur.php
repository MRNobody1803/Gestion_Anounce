<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>la base de données</title>
    <link rel="stylesheet" href="ajouter__utilisateur.css">
</head>
<body>
<form action="connect_ajouter.php" method="post">
    <h2 class="h2">Ajouter un utilisateur</h2>
    
    <div class="contenu">
    <label for="nom">Nom :</label>
    <input type="text" id="nom" name="nom" required><br><br>

    <label for="prenom">Prénom :</label>
    <input type="text" id="prenom" name="prenom" required><br><br>

    <label for="email">Email :</label>
    <input type="email" id="email" name="email" required><br><br>

    <label for="Mot_de_passe">Mot de passe :</label>
    <input type="password" id="Mot_de_passe" name="Mot_de_passe" required><br><br>

    <label for="type_utilisateur">Type d'utilisateur :</label>
    <select id="type_utilisateur" name="type_utilisateur" required>
        <option value="administrateur">administrateur</option>
        <option value="chef de filière">chef de filière</option>
        <option value="enseignant">enseignant</option>
        <option value="secrétaire de département">secrétaire de département</option>
    </select><br><br>
    </div>

    <input type="submit" value="Ajouter">
</form>

</body>
</html>

 


