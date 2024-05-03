<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content ="Anounce Etablissement , Ensa AGADIR , Gestion Anounce Ensa AGadir , Platforme des anounces " >  
    <title>Administrateur</title>
    <link rel="icon" href="/Icons/login_icon_184224.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bangers&family=Black+Ops+One&family=Creepster&family=La+Belle+Aurore&family=MedievalSharp&family=Orbitron&family=Rye&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <link rel="stylesheet" type="text/css" href="../CSS/style_Ad.css"> -->
    <script src="script_Ad.js"></script>
    <style>
      /*----------------header--------------*/

.img-cercle img{
    margin: 30px;
    padding: 5px;
    display: inline-block;
    background: white;
    height: 100px;
    width: 100px;
    border-radius: 100%;
    border: 5px solid #fff;
  }
  
.info{
    padding: 20px;
    margin-left: 41%;
  }
.card{
    position: relative;
    display: flex;
    flex-direction: column;
  }
.col-md-3{
  display: flex;
  }
.row h5{
  color: #000 solid;
  font-size: larger;
  font-family: Arial, Helvetica, sans-serif;
  display: inline;
}
.row p{
  display: inline;
}

    /*----------------Liste Att--------------*/  
main h1 {
  text-align: center;
  padding: 10px;
  font-size: 30px;
  color: #000000;
  font-family: Georgia, 'Times New Roman', Times, serif;
  text-transform: uppercase;
  letter-spacing: 3px;
    }
  
    table {
      width: 100%;
      border-collapse: collapse;
    }
    
    th {
      background-color: #333;
      color: #fff;
      padding: 10px; 
    }
    
    
    td {
      border: 1px solid #ddd; 
      padding: 10px; 
    }
    
    /* Style des lignes impaires */
    tr:nth-child(odd) {
      background-color: #f2f2f2; /* Couleur de fond des lignes impaires */
    }
    
    td a {
      color: #007bff; 
      text-decoration: none; 
    }
    
    td a:hover {
      text-decoration: underline; 
    }
.button {
  width: 50px;
  height: 50px;
  border-radius: 50%;
  background-color: rgb(20, 20, 20);
  border: none;
  font-weight: 600;
  display: flex;
  align-items: center;
  justify-content: center;
  box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.164);
  cursor: pointer;
  transition-duration: .3s;
  overflow: hidden;
  position: relative;
  }
.btn {
  display: inline-block;
  transition: all 0.2s ease-in;
  position: relative;
  overflow: hidden;
  z-index: 1;
  color: #090909;
  padding: 0.2em 0.7em;
  cursor: pointer;
  font-size: 18px;
  border-radius: 0.5em;
  background: #e8e8e8;
  border: 1px solid #e8e8e8;
  box-shadow: 6px 6px 12px #c5c5c5, -6px -6px 12px #ffffff;
  }     
.btn:active {
            color: #666;
            box-shadow: inset 4px 4px 12px #c5c5c5, inset -4px -4px 12px #ffffff;
          }
.btn:before {
  content: "";
  position: absolute;
  left: 50%;
  transform: translateX(-50%) scaleY(1) scaleX(1.25);
  top: 100%;
  width: 140%;
  height: 180%;
  background-color: rgba(0, 0, 0, 0.05);
  border-radius: 50%;
  display: block;
  transition: all 0.5s 0.1s cubic-bezier(0.55, 0, 0.1, 1);
  z-index: -1;
  }
          
.btn:after {
  content: "";
  position: absolute;
  left: 55%;
  transform: translateX(-50%) scaleY(1) scaleX(1.45);
  top: 180%;
  width: 160%;
  height: 190%;
  background-color: #009087;
  border-radius: 50%;
  display: block;
  transition: all 0.5s 0.1s cubic-bezier(0.55, 0, 0.1, 1);
  z-index: -1;
  }
          
.btn:hover {
  color: #83a4ad;
  border: 1px solid #0c24db;
  }
          
.btn:hover:before {
  top: -35%;
  background-color: #0c24db;
  transform: translateX(-50%) scaleY(1.3) scaleX(0.8);
  }
          
.btn:hover:after {
  top: -45%;
  background-color: #0c24db;
  transform: translateX(-50%) scaleY(1.3) scaleX(0.8);
          }

        /*----------------footer--------------*/       
form {
 margin-top: 20px;
}
label {
  display: block;
  margin-bottom:8px;
  font-weight: bold;
  color:#2c86e0;
  font-size: 20px auto;
  margin: 10px ;
}
          
input[type="text"],
select,
textarea {
  width: 100%;
  padding: 10px;
  margin-bottom: 20px;
  border: 1px solid #ccc;
  border-radius: 9px;
  box-sizing: border-box;
  display: block;
  margin: 0 auto;
  border: #4682B4 solid;
  }
          
textarea {
  height: 120px;
  }
          
button[type="submit"] {
  border: 0;
  line-height: 2.5;
  padding: 0 20px;
  font-size: 1rem;
  text-align: center;
  color: #fff;
  text-shadow: 1px 1px 1px #000;
  border-radius: 10px;
  background-color: rgb(86, 129, 199);
  background-image: linear-gradient(
                  to top left,
                  rgba(0, 0, 0, 0.2),
                  rgba(0, 0, 0, 0.2) 30%,
                  rgba(0, 0, 0, 0)
                );
  box-shadow:inset 2px 2px 3px rgba(255, 255, 255, 0.6),
              inset -2px -2px 3px rgba(0, 0, 0, 0.6);
  display: block;
  margin: 0 auto;
  }
button[type="submit"]:hover {
  background-color: rgb(56, 57, 63);
  }

    </style>
</head>
<body>
<?php include 'HeadAdm.php' ?>
    <main>
          <h1>Toutes Les Annonces</h1>
          <section class="table_body">
            <div class="container">
              <table>
                  <thead>
                      <tr>
                          <th>ID_annonce</th>
                          <th>Titre</th>
                          <th>Filière</th>
                          <th>Contenu</th>
                          <th>Déposée par</th>
                          <th>Chef de filière</th>
                          <th>Date</th>
                          <th>Validation</th>
                          <th>Modifier</th>
                          <th>Supprimer</th>
                      </tr>
                  </thead>
                  <tbody>
                    <?php include 'annonces.php'; ?>
                  </tbody>
              </table>
            </div>
          </section>
    </main>
    <?php include 'Footer.php' ; ?>
        </body>
</html>