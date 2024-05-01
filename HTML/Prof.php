<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Déposer une Annonce</title>
    <link rel="stylesheet" href="../CSS/prof.css">
</head>
<body>
<?php 
include 'connectionDb.php';
$titreErr = $descrErr = $contenuErr = $fileErr = "" ;
$titre = $descr = $contenu = $file = $chemin = $type = $filier = "" ;
$type = $_POST["announcementType"];
$filier = $_POST["filiere"];

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
    if (empty($_POST["announcementTitle"])) {
        $titre = test_input($_POST["announcementTitle"]);
        $titreErr = "* Titre est Obligatoire";
        
    } 
    else if (empty($_POST["announcementDescription"])) {
        $descr = test_input($_POST["announcementDescription"]);  
        $descrErr = "* Description est Obligatoire ";  
    }
    
    else  if (empty($_POST["announcementContenu"])) {
        $contenu = test_input($_POST["announcementContenu"]);    
        $contenuErr = "* Le contenu est Obligatoire  "; 
    }
    if (empty($_POST["announcementFile"])){
        if (move_uploaded_file($_FILES["announcementFile"]["tmp_name"],"C:/uploads/".$_FILES["announcementFile"]["name"])) {
            try {
            $chemin = "C:/uploads/".$_FILES["announcementFile"]["name"];
            // Connexion à la base de données
            // Requête d'insertion pour enregistrer le chemin d'accès dans la base de données
            $sql = "INSERT INTO annonce (Type_annonce,Titre_annonce,Description, Contenu, Chemin) VALUES (:type,:titre, :desc,:contenu, :chemin);";
            $stmt = $connexion->prepare($sql);
            $stmt->bindParam(":titre", $titre);
            $stmt->bindParam(":type", $type);
            $stmt->bindParam(":desc", $descr);
            //$stmt->bindParam(":filier", $filier);
            $stmt->bindParam(":contenu", $contenu);
            $stmt->bindParam(":chemin", $chemin);
            $stmt->execute();
    
            echo "Le fichier PDF a été téléchargé avec succès et l'annonce a été enregistrée.";
             } catch (PDOException $e) {
                // Affichage d'un message d'erreur en cas d'échec de la connexion
                 echo "Error lors de l'insertion !!". $e->getMessage();
            }  
        }else {
            echo "Une erreur s'est produite lors du téléchargement du fichier PDF.";
        }
        
    }

    
} 

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }


?>

<?php include 'Header.php'; ?>
<main>
    <h1>Déposer une Annonce</h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" enctype="multipart/form-data">
        <div>
            <label for="announcementType">Type d'Annonce:</label>
            <select name="announcementType" id="announcementType" onchange="showOther()">
                <option value="cours">Annonce de Cours</option>
                <option value="rattrapage">Rattrapage</option>
                <option value="changement">Changement d'Horaire</option>
                <option value="autre">Autre</option>
            </select>
        </div>

        <div id="otherType" style="display:none;">
            <label for="otherAnnouncement">Préciser le type:</label>
            <input type="text" name="otherAnnouncement" id="otherAnnouncement">
        </div>

        <div>
            <label for="filiere">Filière:</label>
            <select name="filiere" id="filiere">
                <option value="Ginfo">G.info</option>
                <option value="GE">G.electrique</option>
                <option value="Gindus">g.indus</option>
                <option value="GEE">GEE</option>
                <option value="FID">FID</option>
                <option value="BTP">G.civil</option>
                <option value="GM">G.mecanique</option>
            </select>
        </div>

        <div>
            <label for="announcementTitle">Titre de l'Annonce: <span class="error"><?php echo $titreErr;?></span></label>
            <input type="text" name="announcementTitle" id="announcementTitle">
        </div>

        <div>
            <label for="announcementDescription">Description de l'Annonce: <span class="error"><?php echo $descrErr;?></span></label>
            <textarea name="announcementDescription" id="announcementDescription" rows="1" cols="50"></textarea>
        </div>
        <div>
            <label for="announcementContenu">Contenu de l'Annonce: <span class="error"><?php echo $contenuErr;?></span></label>
            <textarea name="announcementContenu" id="announcementContenu" rows="4" cols="50"></textarea>
        </div>

        <div>
            <label for="announcementFile">Sélectionner un fichier PDF: <span class="error"><?php echo $fileErr;?></span></label>
            <input type="file" name="announcementFile" id="announcementFile">
        </div>

        <button type="submit" name="submit">Soumettre l'Annonce</button>
    </form>
</main>


</body>
</html>
