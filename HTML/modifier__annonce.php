<!DOCTYPE html>
<html>
<head>
    <title>Zone de Texte CSS Centrée</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    margin: 0;
    padding: 0;
}

.container {
    width: 50%;
    margin: 50px auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

form {
    margin-top: 20px;
}

label {
    font-weight: bold;
}

input[type="text"] {
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}

.submit-button {
    background-color: #000;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
}

.submit-button:hover {
    background-color: red;
}


.contenu {
    border-radius: 5px;
    padding: 20px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.493);
    margin: 5px 0 10px 0;
}

.h2 {
    font-size: 24px; 
    color: black; 
    margin-bottom: 20px; 
}

    </style>
</head>
<body>
    <div class="container">
        <form action="connect_modifier_annonce.php" method="post">

        <h2 class="h2">Modifier l'annonce</h2>
        
        <div class="contenu">
            <?php $ID_annonce = $_GET['ID_annonce'];?>
            <label for="ID_annonce">ID_annonce :</label>
            <input type="text" id="ID_annonce" name="ID_annonce" value="<?php echo $ID_annonce ?>" required><br><br>
            <?php $Contenu = $_GET['Contenu'];?>
            <label for="Contenu">Contenu :</label>
            <p><input type="text" id="Contenu" name="Contenu" value="<?php echo $Contenu ?>" required><br><br></p>
        </div>
        <input type="submit" value="Envoyer" class="submit-button">
        </form>
    </div>
</body>
</html>
