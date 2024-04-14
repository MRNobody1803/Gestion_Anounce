
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
<link rel="stylesheet" href="../CSS/login3.css">
<body>
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
				        S'inscrire
			        </label>
		        </div>
		        <div class="login">
			        <label for="login" class="button">
				        Se Connecter
			        </label>
		        </div>
		        <div class="form">
			        <form>
				        <div class="inputs names">
					        <label><input type="text" placeholder="Prénom"></label>
					        <input type="text" placeholder="Nom">	
				        </div>			
				        <div class="inputs credentials">
					        <input type="email" placeholder="Email Educatif">
					        <input type="password" placeholder="Mot de Passe">
                            <input type="password" placeholder="Confirmer le Mot de Passe">                         
				        </div>
				        <button>
					        <span>Se Connecter</span>
					        <div class="content">
						        <span>S'inscrire</span>
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
