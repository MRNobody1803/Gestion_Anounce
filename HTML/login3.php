
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Login Page with animation </title>
	<link rel="icon" href="/Icons/login_icon_184224.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bangers&family=Black+Ops+One&family=Creepster&family=La+Belle+Aurore&family=MedievalSharp&family=Orbitron&family=Rye&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="../CSS/login3.css">
<!--script>
    function validateForm() {
        var name = document.forms["signupForm"]["name"].value;
        var lastname = document.forms["signupForm"]["lastname"].value;
        var email = document.forms["signupForm"]["email"].value;
        var password = document.forms["signupForm"]["password"].value;

        if (name == "" || lastname == "" || email == "" || password == "") {
            alert("Tous les champs doivent être remplis !");
            return false;
        }
    }
</script-->

</head>


<body>
<?php
$serveur = "127.0.0.1:3307"; // Nom du serveur MySQL
$utilisateur = "root"; // Nom d'utilisateur MySQL
$passwd = ""; // Mot de passe MySQL
$DataBase = 'gestion_anounce'; // Nom de la base de données MySQL

    session_start();
	$name = $lastname = $email = $password = "";
	$nameErr = $lastnameErr = $emailErr = $passwordErr = $loginErr ="";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (empty($_POST["name"])) {
		  $nameErr = "* Name is required";
		} else {
		  $name = test_input($_POST["name"]);
		  if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
			$nameErr = "* Only letters and white space allowed";
		  }
		}
		if (empty($_POST["lastname"])) {
			$lastnameErr = "* Last Name is required";
		  } else {
			$lastname = test_input($_POST["lastname"]);
			if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
			  $lastnameErr = "* Only letters and white space allowed";
			}
		  }
		if (empty($_POST["email"])) {
		  $emailErr = "* Email is required";
		} else {
		  $email = test_input($_POST["email"]);
		  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$emailErr = "* Invalid email format";
		  }
		}
		if(empty($_POST["password"])) {
			$passwordErr = "* Password is required !";
		  }else if(strlen($_POST["password"]) <= 6) {
			$passwordErr = "* Must contain more 6 caracters !";
		  }
		
		  else {
			$password = test_input($_POST["password"]);
		}

		}
		function test_input($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
	    }
		
		if(empty($emailErr) && empty($passwordErr) && empty($nameErr) && empty($lastnameErr)) {
			try {
				if (!empty($email) && !empty($password) && !empty($name) && !empty($lastname)) {
					// Connexion à la base de données avec PDO
					$connexion = new PDO("mysql:host=$serveur;dbname=$DataBase", $utilisateur, $passwd);
		
					// Configuration des options de PDO pour afficher les erreurs
					$connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					$connexion->beginTransaction();
		
					// Requête pour insérer l'utilisateur
					$stmt = $connexion->prepare("INSERT INTO utilisateur (Nom, Prénom, Email, Mot_de_passe, type_utilisateur) VALUES (:nom, :prenom, :email, :password, :type_user)");
					$type_user = "Etudiant";
					$stmt->bindParam(':nom', $name);
					$stmt->bindParam(':prenom', $lastname);
					$stmt->bindParam(':email', $email);
					$stmt->bindParam(':password', $password);
					$stmt->bindParam(':type_user', $type_user);
					$stmt->execute();
		
					// Récupérer l'ID de l'utilisateur nouvellement inséré
					$userId = $connexion->lastInsertId();
		
					// Requête pour insérer l'étudiant
					$stmt = $connexion->prepare("INSERT INTO etudiant (ID_utilisateur) VALUES (:userId)");
					$stmt->bindParam(':userId', $userId);
					$stmt->execute();
		
					$connexion->commit();
					echo "<script>alert('Inscription réussie ! Veuillez Se Connecter');</script>";

				} else {
					// echo "<script>alert('Il faut remplir tous les champs !');</script>";
				}
			} catch (PDOException $e) {
				// En cas d'erreur, annuler la transaction
				$connexion->rollBack();
				echo "Erreur lors de la connexion à la base de données : " . $e->getMessage();
			}
		}

		
		
			else if(empty($emailErr) && empty($passwordErr) && !empty($nameErr) && !empty($lastnameErr) ){
				try {
					if (!empty($email) && !empty($password) ){
					// Connexion à la base de données avec PDO
					$connexion = new PDO("mysql:host=$serveur;dbname=$DataBase", $utilisateur, $passwd);
		
					// Configuration des options de PDO pour afficher les erreurs
					$connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
					// Requête pour vérifier l'existence de l'utilisateur dans la base de données
					$stmt = $connexion->prepare("SELECT utilisateur.ID_utilisateur FROM utilisateur,etudiant WHERE utilisateur.ID_utilisateur = etudiant.ID_utilisateur AND Email=:email AND Mot_de_passe=:password" );
					$stmt->bindParam(':email', $email);
					$stmt->bindParam(':password', $password);
					$stmt->execute();
		
					// Vérifier si l'utilisateur existe
					if ($stmt->rowCount() == 1) {
						
						$id_utilisateur = $stmt->fetchColumn();
    					$_SESSION['ID_utilisateur'] = $id_utilisateur;
						header("Location: Etudiant.php");
						exit();
					} else {
						$loginErr = "Email or password incorrect";
					}
				}
				} catch (PDOException $e) {
					// Affichage d'un message d'erreur en cas d'échec de la connexion
					$loginErr = "Error connecting to the database: " . $e->getMessage();
				}
			}
	

?>
	<div class="home">
		<header class="navigation">
			<nav>
				<h1>Academia <span>CONNECT</span></h1>
				<div class="navbarr">
					<ul>
						<li><a href="Espace.php"><i class="fa-solid fa-house"></i>Home</a></li>
						<li><a href="login3.php"><i class="fa-solid fa-newspaper"></i></i>actualite</a></li>
						<li><a href="#"><i class="fa-solid fa-address-book"></i>Contact</a></li>

					</ul>
				</div>    
			</nav>
		</header>
		<main>
			<input type="radio" name="option" id="signup" checked class="hide">
	        <input type="radio" name="option" id="login" class="hide">
	        <div class="container">
		        <div class="signup">
			        <label for="signup" class="button">
				        S'inscrire
			        </label>
		        </div>
		        <div class="login">
			        <label for="login" class="button">
				        Se Connecter
			        </label>
		        </div>
		        <div class="form">
				<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
				        <div class="inputs names">
						    <span class="error"><?php echo $nameErr;?></span>
					        <input type="text" name="name" placeholder="Prénom">
							<span class="error"><?php echo $lastnameErr;?></span>
					        <input type="text" name ="lastname" placeholder="Nom">
				        </div>			
				        <div class="inputs credentials">	
						    <span class="error"><?php echo $emailErr;?></span>
					        <input type="email" name="email" placeholder="Email Educatif">
							<span class="error"><?php echo $loginErr."".$passwordErr;?></span>
					        <input type="password" name="password" placeholder="Mot de Passe">
                            <!--input type="password" name="password" placeholder="Confirmer le Mot de Passe"-->                         
				        </div>
				        <div class = "superBtn" >
					        <span>Se Connecter</span>
					        <div class="content">
						        <span><button type="submit" name="submit_btn"><h3>S'inscrire</h3></button></span> <!-- INSCRI -->
								<span><button type="submit" name="submit_btn"><h3>Se Connecter</h3></button></span><!-- CONNECTER -->
					        </div>				
				        </div>
			        </form>
		        </div>
	        </div>
		</main>
	
	
	</div>

</body>
</html>
