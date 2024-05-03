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
session_start();
include 'connectionDb.php';
$titreErr = $descrErr = $contenuErr = $fileErr = "";
$titre = $descr = $contenu = $file = $chemin = $type = $filier = "";

// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION['ID_utilisateur'])) {
    // Rediriger l'utilisateur vers la page de connexion s'il n'est pas connecté
    header("Location: login2.php");
    exit();
}
else {
    $UsernmaeProf = $nameProf = $lastnameProf = "";
    $sql = "SELECT Nom, Prénom FROM utilisateur WHERE ID_utilisateur = :iduser ;";
    $stmt = $connexion->prepare($sql);
    $stmt->bindParam(":iduser", $_SESSION['ID_utilisateur']);
    $stmt->execute();
    if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $nameProf = $row["Nom"];
        $lastnameProf = $row["Prénom"];
        $_SESSION['Nom'] = $nameProf ;
        $UsernmaeProf = $nameProf." ".$lastnameProf ;
    }
}


// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {

    // Check if announcement type is set
    if (isset($_POST["announcementType"])) {
        $type = test_input($_POST["announcementType"]);
    }

    // Check if filiere is set
    if (isset($_POST["filiere"])) {
        $filier = test_input($_POST["filiere"]);
    }

    // Validate announcement title
    if (empty($_POST["announcementTitle"])) {
        $titreErr = "* Titre est Obligatoire";
    } else {
        $titre = test_input($_POST["announcementTitle"]);
    }

    // Validate announcement description
    if (empty($_POST["announcementDescription"])) {
        $descrErr = "* Description est Obligatoire ";
    } else {
        $descr = test_input($_POST["announcementDescription"]);
    }

    // Validate announcement content
    if (empty($_POST["announcementContenu"])) {
        $contenuErr = "* Le contenu est Obligatoire  ";
    } else {
        $contenu = test_input($_POST["announcementContenu"]);
    }

    // Check if file is uploaded
    if (!empty($_FILES["announcementFile"]["name"])) {
        if (move_uploaded_file($_FILES["announcementFile"]["tmp_name"], "C:/uploads/" . $_FILES["announcementFile"]["name"])) {
            $chemin = "C:/uploads/" . $_FILES["announcementFile"]["name"];
            try {
                $date_pub = date('Y-m-d H:i:s');
                $Status = "En Attente";
                // Insert announcement into database
                $sql = "INSERT INTO annonce (ID_utilisateur, Type_annonce,Titre_annonce,Description, Contenu,Status, Chemin, Date_publication) VALUES (:iduser,:type,:titre, :desc,:contenu,:status, :chemin,:date);";
                $stmt = $connexion->prepare($sql);
                $stmt->bindParam(":iduser",$_SESSION['ID_utilisateur']);
                $stmt->bindParam(":titre", $titre);
                $stmt->bindParam(":type", $type);
                $stmt->bindParam(":desc", $descr);
                $stmt->bindParam(":contenu", $contenu);
                $stmt->bindParam(":chemin", $chemin);
                $stmt->bindParam(":date", $date_pub );
                $stmt->bindParam(":status", $Status );

                $stmt->execute();

                echo "<script>alert('La disposition de l\'annonce a été effectuée avec succès.');</script>";

            } catch (PDOException $e) {
                echo "Error lors de l'insertion !!". $e->getMessage();
            }
        } else {
            echo "<script>alert('Une erreur s\'est produite lors de la disposition de l\'annonce. Veuillez réessayer.');</script>";        }
    }
    
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>


<?php include 'HeaderP.php'; ?>


<h1>Bonjour <span class ="usernamae"> <?php echo "Prof. ".$UsernmaeProf ?> <span></h1>
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

<?php include 'Footer.php' ; ?>
</body>
</html>
