function myFunction() {
    var x = document.getElementById("myLinks");
    if (x.style.display === "block") {
      x.style.display = "none";
    } else {
      x.style.display = "block";
    }
     }


// Inclure le contenu de header.html dans la balise div#header
document.addEventListener("DOMContentLoaded", function() {
    var headerElement = document.getElementById("header");
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            headerElement.innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "header.html", true);
    xhttp.send();
});
    //specifier le type pour autre type d'annonce
    function showOther() {
        var select = document.getElementById("announcementType");
        var otherType = document.getElementById("otherType");
        var otherAnnouncement = document.getElementById("otherAnnouncement");
        
        if (select.value === "autre") {
            otherType.style.display = "block";
            otherAnnouncement.required = true; // Rendre le champ requis si l'option "Autre" est sélectionnée
        } else {
            otherType.style.display = "none";
            otherAnnouncement.required = false; // Rendre le champ non requis si une autre option est sélectionnée
        }
        }

// Inclure le contenu de footer.html dans la balise div#footer
document.addEventListener("DOMContentLoaded", function() {
    var footerElement = document.getElementById("footer");
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            footerElement.innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "footer.html", true);
    xhttp.send();
});