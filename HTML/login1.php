
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administration</title>
    <meta name="keywords" content ="Anounce Etablissement , Ensa AGADIR , Gestion Anounce Ensa AGadir , Platforme des anounces ,login ">  
    <link rel="icon" href="/Icons/login_icon_184224.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bangers&family=Black+Ops+One&family=Creepster&family=La+Belle+Aurore&family=MedievalSharp&family=Orbitron&family=Rye&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../CSS/login.css">
    <style>
    </style>
</head>
<body>
<?php
// define variables and set to empty values
$emailErr = $passwordErr ="";
$password = $email = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
  if(empty($_POST["password"])) {
    $passwordErr = "Password is required !";
  }else {
    $password = test_input($_POST["password"]);
  }
    
  

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
    <div class="home">
        <header class="navigation">
            <nav>
                <h1>Academia <span>CONNECT</span></h1>
                <div class="navbarr">
                    <ul>
                        <li><a href="#home"><i class="fa-solid fa-house"></i>Home</a></li>
                        <li><a href="#home"><i class="fa-solid fa-newspaper"></i></i>actualite</a></li>
                        <li><a href="#home"><i class="fa-solid fa-bullhorn"></i>Anouncement</a></li>
                        <li><a href="#home"><i class="fa-solid fa-address-book"></i>Contact</a></li>
                        <li><a href="#home"><i class="fa-sharp fa-solid fa-eject"></i>About</a></li>
                    </ul>
                </div>
                <div>
                    <a href="#" class="explore"><i class="fa-solid fa-caret-up"></i>Explorer</a>
                    <a href="#" class="subBtn"><i class="fa-solid fa-right-to-bracket"></i>Se Connecter</a>
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
                    <button type="submit" name="submit" class="submit-btn">Se connecter</button>
                    <h3>Revenir à la Page d'Accueil ? <a href="http://localhost/Gestion_Anounce/HTML/Espace.php">Cliquez Ici</a></h3>
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