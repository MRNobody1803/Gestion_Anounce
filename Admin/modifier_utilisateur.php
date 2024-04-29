<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>la base de données</title>
    <link rel="stylesheet" href="ajouter_utilisateur.css">
</head>
<body>
<form action="connect_modifier.php" method="post">
    <h2>Modifier un utilisateur</h2>

     <!-- </*?php $id_utilisateur = $_GET['id'];?>
     <label for="id_utilisateur">ID_utilisateur:</label>
     <input type="text" id="id_utilisateur" name="id_utilisateur" value="<?php echo $id_utilisateur ?>" required><br><br>


    <label for="nom">Nom :</label>
    <input type="text" id="nom" name="nom" required><br><br>

    <label for="prenom">Prénom :</label>
    <input type="text" id="prenom" name="prenom" required><br><br>

    <label for="email">Email :</label>
    <input type="email" id="email" name="email" required><br><br>

    <label for="mot_de_passe">Mot de passe :</label>
    <input type="password" id="mot_de_passe" name="mot_de_passe" required><br><br>

    <label for="type_utilisateur">Type d'utilisateur :</label>
    <select id="type_utilisateur" name="type_utilisateur" required>
        <option value="administrateur">Administrateur</option>
        <option value="chef de filière">Chef de filière</option>
        <option value="enseignant">Enseignant</option>
        <option value="secrétaire de département">Secrétaire de département</option>
    </select><br><br> -->


    <?php $id_utilisateur = $_GET['id'];?>
<label for="id_utilisateur">ID_utilisateur:</label>
<input type="text" id="id_utilisateur" name="id_utilisateur" value="<?php echo $id_utilisateur ?>" required><br><br>

<?php $nom = $_GET['nom'];?>
<label for="nom">Nom :</label>
<input type="text" id="nom" name="nom" value="<?php echo $nom ?>" required><br><br>

<?php $prenom = $_GET['prenom'];?>
<label for="prenom">Prénom :</label>
<input type="text" id="prenom" name="prenom" value="<?php echo $prenom ?>" required><br><br>

<?php $email = $_GET['email'];?>
<label for="email">Email :</label>
<input type="email" id="email" name="email" value="<?php echo $email ?>" required><br><br>

<?php $mot_de_passe = $_GET['mot_de_passe'];?>
<label for="mot_de_passe">Mot de passe :</label>
<input type="password" id="mot_de_passe" name="mot_de_passe" value="<?php echo $mot_de_passe ?>" required><br><br>

<?php $type_utilisateur = $_GET['type_utilisateur'];?>
<label for="type_utilisateur">Type d'utilisateur :</label>
<select id="type_utilisateur" name="type_utilisateur" required>
    <option value="administrateur" <?php if($type_utilisateur == "administrateur") echo "selected"; ?>>Administrateur</option>
    <option value="chef de filière" <?php if($type_utilisateur == "chef de filière") echo "selected"; ?>>Chef de filière</option>
    <option value="enseignant" <?php if($type_utilisateur == "enseignant") echo "selected"; ?>>Enseignant</option>
    <option value="secrétaire de département" <?php if($type_utilisateur == "secrétaire de département") echo "selected"; ?>>Secrétaire de département</option>
</select><br><br>


    <input type="submit" value="modifier">
</form>

</body>
</html>

 


