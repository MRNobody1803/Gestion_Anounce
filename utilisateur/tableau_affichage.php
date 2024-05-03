<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des utilisateurs</title>
    <link rel="stylesheet" href="style_tableau.css">
    
</head>
<body>
    <div class="container">
        <h2>Liste des utilisateurs</h2>
        <a href="ajouter_utilisateur.php" class="button">Ajouter un utilisateur</a>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Email</th>
                    <th>Mot_de_passe</th>
                    <th>type_utilisateur</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php include 'affichage_utilisateur.php'; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
