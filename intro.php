<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
        <title>Infos Pratiques | SIMULATION OCDE</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body style="background-color: black;">
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
                <li class="current"><a href="infospratiques.html"><p style="white-space: nowrap;">Infos Pratiques</p></a></li>
            </ul>
            </nav>
        </div>
        </header>

        <section id="infospratiquesshowcase">
            <div class="container">
            <h2>conférence OCDE au lycée <span style="color: #2685C9;">Kölcsey</span></h2>
            <h1>Infos Pratiques</h1>
            </div>
        </section>

        <section id="infospratiquescontent">
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
            var mapOptions = {
                center: {lat:47.514959935265445, lng: 19.070323255882176},
                zoom: 17,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            var map = new google.maps.Map(document.getElementById('googlemap'), mapOptions);
        </script>
    </body>
</html>