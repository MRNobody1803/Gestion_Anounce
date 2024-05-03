<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
        .navig {
    width: 100%;
    background-color: white ;
    display: block ;
    text-align: center ;
    justify-content: center ;
    padding: 0% ; 
}
.navig ul li {
    
    list-style-type: none;
    display: inline-block;
    margin : 0.4rem  1rem; 

}
.navbarr {
    padding: 2% ;
    margin-bottom: 30px ;
}

.navig ul li a {
    color: var(--darkmode);
    text-decoration: none;
    text-transform: capitalize;
    background-color: var(--bgColor1) ;
    border-radius: 15px ;
    padding : 5px 10px ;
    font-family: 'Opeen sans' , sans-serif ;
    font-size: 1.1rem ;
    font-weight: 400;

}

.navig ul li a:hover {
    background-color: rgba(235, 229, 229, 0.274) ;
    transition: 0.5s ;
}
i {
    margin-right : 15px ;
}


    </style>
</head>
<body>
<?php
    include 'HeaderProf.php'; 
?>
    <section class="navig">
    <div class="navbarr">
        <ul>
            <li><a href="Prof.php"><i class="fa-solid fa-newspaper"></i></i>Déposer une annonce</a></li>
            <li><a href="#home"><i class="fa-solid fa-bullhorn"></i>Consulter les Annonces</a></li>
            <li><a href="#home"><i class="fa-solid fa-address-book"></i>Contacter l'Administration</a></li>
        </ul>
    </div>
    </section>
    
</body>
</html>