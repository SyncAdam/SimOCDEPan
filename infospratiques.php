<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
        <title>Infos Pratiques | SIMULATION OCDE</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body style="background: url('mainbg.jpg') no-repeat; background-color: black; background-size: 2220px 1380px; background-position-x: center; background-attachment: fixed;">
        <header>
        <div class="container">
            <div id="branding">
            <h1><span class="highlight">Simulation</span> OCDE Pandémie</h1>
            </div>
            <nav>
            <ul>
                <li><a href="index.html"><p>Accueil</p></a></li>
                <li><a href="presentation.html"><p>Présentation</p></a></li>
                <li><a href="programme.html"><p>Programme</p></a></li>
                <li><a href="partenaires.html"><p>Partenaires</p></a></li>
                <li class="current"><a href="infospratiques.php"><p style="white-space: nowrap;">Infos Pratiques</p></a></li>
            </ul>
            </nav>
        </div>
        </header>

        <section id="infospratiquesshowcase">
            <div class="showcasecontainer">
            <h2>conférence OCDE au lycée <span style="color: #2685C9;">Kölcsey</span></h2>
            <h1>Infos Pratiques</h1>
            </div>
        </section>

        <section id="infospratiquescontent">
            <div class="infospratiquesbox">
                <h2>COMMENT PARTICIPER?</h2>
                <p>Pour participer à la simulation, les participant(e)s doivent remplir les conditions suivantes:</p>
                <ul>
                    <li>Être âgé(e)s d'au minimum 17 ans </li>
                    <li>Avoir un niveau B2 en français.</li>
                </ul>
                <p>Le lycée Kölcsey peut accueillir 15 équipes composées de 2 élèves ou étudiants venant du même établissement.</p>
                <h3>Les équipes peuvent s'inscrire jusqu'au <u>20 février 2022</u> auprès de</h3>
                <div>
                    <img src="maillogo.png" style="width: 210px; height: 100px">
                    <a href="mailto:stephane.grandsire@kolcsey-bp.hu" style="word-wrap: break-word; flex: 3;">stephane.grandsire@kolcsey-bp.hu</a>
                    <div style="flex: 4">
                    </div>
                </div>
            </div>
            <div class="infospratiquesbox">
                <h2>COMMENT SE RENDRE AU LYCÉE?</h2>
                <p>Budapest VI. Kerületi Kölcsey Ferenc Gimnázium, Budapest<br>
                    1063 Budapest<br>
                    Munkácsy Mihály utca 26</p>
            </div>
            <div class="infospratiquesbox">
                <h4>Accès en transports publics.</h4>
                <p>Arrêt <span style="color: chartreuse;">Hősök tere</span> (bus 20E, 30 depuis Keleti pályaudvar, métro 1)<br>
                Arrêt <span style="color: chartreuse;">Nyugati pályaudvar</span> + 10-15 minutes à pied (métro 3, tram 4/6)<br>
                Arrêt <span style="color: chartreuse;">Munkácsy Mihály</span> ou Bajza utca (trolley 72) 
                </p>
            </div>
            <div class="infospratiquesbox">
                <div id="googlemap">

                </div>
            </div>
        </section>

        <footer>
            <p>© 2022 Sinkovics Ádám / Stéphane Grandsire Images : D.R.</p>
        </footer>

        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC_dIuyrHj4QnvhXHtYeMTG_3m4LexlP2s"></script>
        <script>
            var sulikoordinata = {lat:47.514959935265450, lng: 19.070323255882176};
            var mapOptions = {
                center: sulikoordinata,
                zoom: 17,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            var map = new google.maps.Map(document.getElementById('googlemap'), mapOptions);

            //marker letrehozas
            var markerkOptions = {
                position: sulikoordinata,
                map: map,
                title: "Lycée Kölcsey Ferenc, Budapest",
                draggable: false,
            };
            var markerk = new google.maps.Marker(markerkOptions);
           var infwinoptcont =  "<div style=\"text-align:left;\"><p style=\"margin:0; color: black; font-size:12px;\">Lycée Kölcsey Ferenc, Budapest</p><a href=\"https://www.kolcsey-bp.hu/index.php/kapcsolat\" style=\"font-size: 11px\">Site Internet de l'établissement</a></div><div><a href=\"https://www.google.com/maps/dir/?api=1&destination=Budapest,%20Munk%C3%A1csy%20Mih%C3%A1ly%20u.%2026,%201063%20Hongrie\" style=\"font-size: 11px; margin-top:10px\">Direction</a></div>";
           
           //infowindow
           //var infwinoptcont = "<div><p>This is a Window mfs</p></div>";
           var infwinopt = {
                content: infwinoptcont,
                maxWidth: 100,
            };
            var infowindow = new google.maps.InfoWindow(infwinopt);
            infowindow.open(map, markerk);
            /*
            //listener
            markerk.addListener("click", function(){
                ;
            });
            */
        </script>
    </body>
</html>