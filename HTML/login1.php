<?php
$serveur = "127.0.0.1:3307"; // Nom du serveur MySQL
$utilisateur = "root"; // Nom d'utilisateur MySQL
$passwd = ""; // Mot de passe MySQL
$DataBase = 'gestion_anounce'; // Nom de la base de données MySQL

$emailErr = $passwordErr = "";
$loginErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
    }

    if(empty($_POST["password"])) {
        $passwordErr = "Password is required !";
    }else {
        $password = test_input($_POST["password"]);
    }

    if(empty($emailErr) && empty($passwordErr)) {
        try {
            // Connexion à la base de données avec PDO
            $connexion = new PDO("mysql:host=$serveur;dbname=$DataBase", $utilisateur, $passwd);

            // Configuration des options de PDO pour afficher les erreurs
            $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Requête pour vérifier l'existence de l'utilisateur dans la base de données
            $stmt = $connexion->prepare("SELECT utilisateur.ID_utilisateur FROM utilisateur , administrateur WHERE utilisateur.ID_utilisateur = administrateur.ID_utilisateur AND Email=:email AND Mot_de_passe=:password");
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $password);
            $stmt->execute();

            // Vérifier si l'utilisateur existe
            if ($stmt->rowCount() == 1) {
                // Rediriger l'utilisateur vers la page d'accueil après la connexion réussie
                header("Location: HomeAdm.php");
                exit();
            } else {
                $loginErr = "Email or password incorrect";
            }
        } catch (PDOException $e) {
            // Affichage d'un message d'erreur en cas d'échec de la connexion
            $loginErr = "Error connecting to the database: " . $e->getMessage();
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administration</title>
    <link rel="icon" href="/Icons/login_icon_184224.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bangers&family=Black+Ops+One&family=Creepster&family=La+Belle+Aurore&family=MedievalSharp&family=Orbitron&family=Rye&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../CSS/login.css">
</head>
<body>

<div class="home">
    <header class="navigation">
        <nav>
            <h1>Academia <span>CONNECT</span></h1>
            <div class="navbarr">
                <ul>
                    <li><a href="Espace.php"><i class="fa-solid fa-house"></i>Home</a></li>
                    <li><a href="Espace.php"><i class="fa-solid fa-address-book"></i>Contact</a></li>
                    <li><a href="Espace.php"><i class="fa-sharp fa-solid fa-eject"></i>About</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <section class="card">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" class="login-form">
                <h2>Connexion (Administration)</h2>
                <div class="form-group">
                    <label for="email">Email Administrative</label>
                    <input type="email" id="email" name="email" ><br>
                    <span class="error"> <?php echo $emailErr;?></span>
                </div>
                <div class="form-group">
                    <label for="password">Mot de Passe</label>
                    <input type="password" id="password" name="password" ><br>
                    <span class="error"> <?php echo $passwordErr;?></span>
                </div>
                <p><span class="error"><?php echo $loginErr;?></span></p>
                <button type="submit" name="submit" class="submit-btn">Se connecter</button>
                <!--h3>Revenir à la Page d'Accueil ? <a href="http://localhost/Gestion_Anounce/HTML/Espace.php">Cliquez Ici</a></h3-->
            </form>
        </section>

    </main>
</div>
<main>
    <section>
    </section>
</main>

</body>
</html>
