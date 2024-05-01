<?php
// Vérification si le formulaire a été soumis et si un fichier PDF a été téléchargé
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["pdf"])) {
    // Chemin où stocker les fichiers PDF sur le serveur
    $dossier_pdf = "uploads/";

    // Générer un nom de fichier unique
    $nom_fichier = uniqid() . '_' . basename($_FILES["pdf"]["name"]);

    // Chemin complet du fichier sur le serveur
    $chemin_fichier = $dossier_pdf . $nom_fichier;

    // Déplacer le fichier téléchargé vers le dossier des fichiers PDF
    if (move_uploaded_file($_FILES["pdf"]["tmp_name"], $chemin_fichier)) {
        // Connexion à la base de données
        $connexion = new PDO("mysql:host=127.0.0.1:3307;dbname=gestion_anounce", "root", "");

        // Requête d'insertion pour enregistrer le chemin d'accès dans la base de données
        $sql = "INSERT INTO annonce (Titre_annonce, Contenu, Chemin_pdf) VALUES (:titre, :contenu, :chemin)";
        $stmt = $connexion->prepare($sql);
        $stmt->bindParam(":titre", $_POST["titre"]);
        $stmt->bindParam(":contenu", $_POST["description"]);
        $stmt->bindParam(":chemin", $chemin_fichier);
        $stmt->execute();

        echo "Le fichier PDF a été téléchargé avec succès et l'annonce a été enregistrée.";
    } else {
        echo "Une erreur s'est produite lors du téléchargement du fichier PDF.";
    }
}
?>
