<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professeur</title>
    <link rel="icon" href="/Icons/login_icon_184224.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bangers&family=Black+Ops+One&family=Creepster&family=La+Belle+Aurore&family=MedievalSharp&family=Orbitron&family=Rye&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../CSS/Etud.css">
    <style>
        :root {
    --primaryColor : rgb(31, 116, 226) ;
    --secondColor : rgb(228, 148, 148) ;
    --lightmode : #FBF3D5 ;
    --darkmode  : rgb(87, 59, 59) ;
    --bgColor : rgb(26, 21, 21) ;
    --bgColor1 :  rgba(197, 197, 197, 0.274) ;
    --bgColor2 : rgb(163, 159, 159) ;
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
    font-family: Arial, Helvetica , sans-serif  ;
    font-size: 16px ;
    color: black ;
}

nav h1 {
    font-family: 'Calina' , 'Times New Roman', Times, serif;
    font-size: 25px ;
    cursor: grab  ;
}
nav h2{
    color: black ;
    font-family: 'Opeen sans' , 'Times New Roman', Times, serif;
    font-size: large ;
    margin-bottom: 20px;

}
nav h3 {
    font-family: 'Opeen sans' , Arial, Helvetica, sans-serif;
    font-size: large ;
    color: black;
    padding: 10px;

}
nav i {
    color: black ;
    margin: 0px 10px ;
    font-size: large;
}
nav p {
    color: #ffffff ;
}

.home {
    width: 100% ;
    height: 40vh ;
    background : url("../Image/pexels-balamurugan-anbazhagan-763097.jpg") ;
    background-size: cover  ;
    display: flex;
    flex-direction: column ;
}
.navigation {
    background-image: linear-gradient(to bottom , rgba(255, 255, 255, 0.63) , transparent );

}
button a {
    text-decoration: none ;
}

span {
    font-family: Calina , sans-serif;
    color: var(--lightmode);
}
nav {
    padding : 2rem 5% 5% 5% ;
    display: flex ;
    justify-content: space-between;
    align-items: center ;
}
nav div {
    display: flex;
    justify-content: end ;
    background-color: rgba(255, 255, 255, 0);
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
    </style>
</head>
<body>
    <?php ?>
<section class="home">
        <div class="navigation">
            <nav>
                <h1>Academia <span>CONNECT</span></h1>
                <div>
                    <a href="#home" class="subBtn"><i class="fa-solid fa-bullhorn"></i>Anouncement</a>
                    <a href="#home" class="subBtn"><i class="fa-solid fa-house"></i>Home</a>
                    <a href="#" class="explore"><i class="fa-solid fa-caret-up"></i>Explorer</a>
                    <a href="#" class="subBtn"><i class="fa-solid fa-right-to-bracket"></i>Se deconnecter</a>
                </div>         
            </nav>
        </div>
        <div class="bgimg">
        </div>
    </section>
</body>
</html>