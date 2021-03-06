<html>
    <head>
        <meta charset="utf-8">
        <title>NetPay</title>
        <link rel="icon" type="image/png" href="afbeeldingen/logo-32x32.png" sizes="32x32" />
        <link rel="icon" type="image/png" href="afbeeldingen/logo-16x16.png" sizes="16x16" />
        <meta name="theme-color" content="#607D8B" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/navbar.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php include_once('/Bestanden/navbar.php'); 
        ?>

        <div id="Welkom" class="FrontHeader">
            <h1>
                NetPay
            </h1>
            <h2>
                Snel, gemakkelijk en veilig betalen!
            </h2>
        </div>

        <div class="infoTable">
            <div class="col-sm-4">
                <h3>Info</h3>
                <p> NetPay is een betalingmethode gericht op scholen en verenigingen. Via onze gratis app kunnen jongeren onder de 18 betalingen doen op scholen of verenigingen die ons systeem 
                    gebruiken. Hierdoor hebben ouders betere controle over waar hun kind geld aan besteed. Klik hier voor meer informatie.
                </p>
                <button onclick="location.href='info.html'" class="button" >Info</button>

            </div>
            <div class="col-sm-4">
                <h3>Prijzen</h3>
                <p>Bij NetPay werken we met verschillende pakketten met een periode van 1 jaar. Elk pakket heeft een maximum aantal transacties. Overschreid u dat aantal dan betaalt u per transactie een extra kost, dit is een klein bedrag. Wilt u meer te weten komen over onze pakketen, klik dan hier.</p>
                <button onclick="location.href='Prijzen.html'" class="button" >Prijzen</button>
            </div>
            <div class="col-sm-4">
                <h3>Contact</h3>
                <p>Heeft u vragen of wilt u contact opnemen klik dan hier.</p>
            </div>
        </div>




    </body>
</html>