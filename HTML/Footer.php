<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .footer {
    width: 100% ;
    background-color: rgba(0, 0, 0, 0.055) ;
    color: #00000034;
    padding: 20px ;
    display: block ;
    text-align: center ;
    justify-content: space-between;
}
.footer footer {
    background-color: transparent ;
}
.contact-info, .social-media {
    flex: 1;
}

.contact-info h2, .social-media h2 {
    font-size: 1.2em;
    margin: 10px;
    font-family: Arial, Helvetica, sans-serif ;

}

.contact-info p {
    margin: 5px 0;
    color: #000000;
}

.social-media ul {
    list-style: none;
    padding: 0;
}
.about p {
    color: #000000 ;
}

.social-media ul li {
    display: inline-block;
    margin-right: 10px;
}

.social-media ul li:last-child {
    margin-right: 0;
}

.social-media ul li a {
    color: #000000;
    text-decoration: none;
    font-size: 1.5em;
}
.footer h1{
    text-align : center ;
    font-family: serif , Arial, Helvetica, sans-serif  ;
    font-size: 2.5rem;
    margin: 0px ;
    padding: 2% ;
    /*background-color : linear-gradient( to top , transparent ,  rgba(128, 128, 128, 0.082) );*/
    border-radius: 0px ;
    
}
    </style>
        
</head>
<body>
    <?php ?>
<section class="footer">
        <div class="about">
            <h1>About Us</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis scelerisque justo vitae ligula aliquet, id placerat nisl tempus.</p>
        </div>
        <footer>
            <div class="contact-info">
                <h2>Contact Us</h2>
                <p>Email: contact@example.com</p>
                <p>Phone: +1234567890</p>
            </div>
            <div class="social-media">
                <h2>Social Media</h2>
                <ul>
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <!-- Ajoutez d'autres liens de réseaux sociaux si nécessaire -->
                </ul>
            </div>
        </footer>

    </section>

</body>
</html>