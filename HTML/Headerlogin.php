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
<style>
    :root {
    --primaryColor : rgb(0, 158, 197) ;
    --secondColor : rgb(228, 148, 148) ;
    --lightmode : #FBF3D5 ;
    --darkmode  : rgb(87, 59, 59) ;
    --bgColor : rgb(26, 21, 21) ;
    --bgColor1 :  rgba(197, 197, 197, 0.274) ;
    --bgColor2 : rgb(163, 159, 159) ;
    --Gradiant :background: rgb(48,47,48);
    
  }
  @font-face {
    font-family: Calina;
    src: url(../Fonts/Calina.otf);
  }
  @font-face {
    font-family: Grashrock;
    src: url(../Fonts/Grashrock.otf);
  }
  @font-face {
    font-family: Vostela;
    src: url(../Fonts/VOSTELA.otf);
  }
  @font-face {
    font-family: waltograph;
    src: url(../Fonts/waltograph42.ttf);
  }
  @font-face {
    font-family: Opeen sans;
    src: url(../Fonts/OpenSans-Regular.ttf);
  }
  @font-face {
    font-family: Casselen;
    src: url(../Fonts/Casselin\ DEMO\ VERSION.ttf);
  }
  
  /* -----------------------------------------------------------------------
  ------------------------ GENERAL SETTING ---------------------------------
  ------------------------------------------------------------------------*/
  
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, Helvetica , sans-serif , 'Calina' ;
    font-size: 16px ;
    color: black ;
  }
  body {
    background: url(../Image/pexels-balamurugan-anbazhagan-763097.jpg);
    background-size: cover;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    box-sizing: border-box;
  }
  
  h1 {
        font-family: 'Calina' , 'Times New Roman', Times, serif;
        font-size: 25px ;
        cursor: grab  ;
  }
  h2{
        color: black ;
        font-family: 'Opeen sans' , 'Times New Roman', Times, serif;
        font-size: large ;
        margin-bottom: 20px;
    
  }
  h3 {
        font-family: 'Opeen sans' , Arial, Helvetica, sans-serif;
        font-size: large ;
        color: black;
        padding: 10px;
  }
  i {
    color: black ;
    margin: 0px 10px ;
    font-size: large;
  }
  span button a {
    text-decoration:  none ;
  }
  /* -----------------------------------------------------------------------
  ------------------------ HOME CARD SETTING -------------------------
  ------------------------------------------------------------------------*/
    
  .home {
      width: 100% ;
      height: 100vh ;
      background-image: linear-gradient(to bottom  , rgba(255, 255, 255, 0.274) , transparent );
      background-size: cover  ;
      display: flex;
      flex-direction: column ;
  }
  
  
  
   header span {
      font-family: Calina , sans-serif;
      color: var(--lightmode);
  }
  nav {
      padding : 1rem  2rem ;
      display: flex ;
      justify-content: space-between;
      align-items: center ;
  }
      
      
  .subBtn { 
      color: var(--lightmode);
      font-weight: 600 ;
      font-size: 1.2rem;
      /*background-color: var(--lightmode);*/
      padding: 5px 7px ;
      border: solid 2px transparent;
      border-radius: 30px ;
      text-decoration: none ;
  }
      
  .subBtn:hover {
      background-color: rgba(211, 211, 211, 0.233);
      transition: 1s;
      border-radius: 30px ;
  }
      
  .explore {
      color: var(--lightmode);
      font-weight: 600 ;
      font-size: 1.2rem;
      padding: 5px 7px ;
      text-decoration: none ;
      border-radius: 30px ;
  }
      
  .explore:hover{
      background-color: rgba(211, 211, 211, 0.233);
      transition: 1s;
      border-radius: 30px ;
  }
      /*.navigation {
          height: 300px ;
         
      }*/
  .navig {
      width: 100% ;
      height: 100vh;
      background-color: white ;
      display: block ;
      text-align: center ;
      justify-content: center ;
      padding: 0% ; 
  }
  .navbarr ul li {
          
      list-style-type: none;
      display: inline-block;
      margin : 1.5rem  1rem; 
      
  }
  .navbarr {
      padding: 1% ;
  }
      
  .navbarr ul li a {
       color: var(--lightmode);
      font-weight: 400;
      text-decoration: none;
      text-transform: capitalize;
      border-radius: 15px ;
      padding : 5px 10px ;
      font-family: 'Opeen sans' , sans-serif ;
      font-size: 1.1rem ;
      font-weight: 400;
  }
      
  .navbarr ul li a:hover {
      background-color: rgba(235, 229, 229, 0.274) ;
      transition: 0.5s ;
  }
  
  main {
    margin-top : 70px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
  }
  
</style>
</head>
<body>
    <?php ?>
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
					</ul>
				</div>   
			</nav>
		</header>
    </div>
</body>
</html>