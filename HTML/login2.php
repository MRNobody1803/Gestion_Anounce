
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Login Page with animation </title>
</head>
<link rel="icon" href="/Icons/login_icon_184224.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bangers&family=Black+Ops+One&family=Creepster&family=La+Belle+Aurore&family=MedievalSharp&family=Orbitron&family=Rye&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="../CSS/login2.css">
<body>
	<?php
	$name = $lastname = $email = $password = "";
	$nameErr = $lastnameErr = $emailErr = $passwordErr = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (empty($_POST["name"])) {
		  $nameErr = "* Name is required";
		} else {
		  $name = test_input($_POST["name"]);
		  if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
			$nameErr = "Only letters and white space allowed";
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
			<input type="radio" name="option" id="signup" checked class="hide">
	        <input type="radio" name="option" id="login" class="hide">
	        <div class="container">
		        <div class="signup">
			        <label for="signup" class="button">
				        Chef de fillière
			        </label>
		        </div>
		        <div class="login">
			        <label for="login" class="button">
				        Professeur
			        </label>
		        </div>
		        <div class="form">
			        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
				        <div class="inputs names">
						    <span class="error"><?php echo $nameErr;?></span>
					        <label><input type="text" name="name" placeholder="Prénom"></label><br>
							<span class="error"><?php echo $lastnameErr;?></span>
					        <input type="text" placeholder="Nom" name="lastname">	<br>
							
				        </div>			
				        <div class="inputs credentials">
						    <span class="error"><?php echo $emailErr;?></span>
					        <input type="email" placeholder="Email (Educatif / Administrative)" name="email"><br>
							<span class="error"><?php echo $passwordErr;?></span>
					        <input type="password" placeholder="Mot de Passe" name="password">
							
				        </div>
				        <button>
					        <span>Se Connecter</span>
					        <div class="content">
						        <span>Se Connecter</span>
						        <span>Se Connecter</span>
					        </div>				
				        </button>
			        </form>
		        </div>
	        </div>
		</main>
	
	
	</div>

</body>
</html>
