<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="theme-color" content="#000000">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Rijschool durmusdag</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/pe-icons.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="js/jquery.js"></script>
    <script src="js/jquery.backstretch.min.js" charset="utf-8"></script>

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon" sizes="144x144" href="images/ico/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/ico/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/ico/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" href="images/ico/apple-touch-icon-57x57.png">

    <script type="text/javascript">
        jQuery(document).ready(function($) {
            'use strict';
            jQuery('body').backstretch([
                "images/img/auto(1).jpg",
                "images/img/auto(6).jpg",
                "images/img/auto(14).JPG"
            ], {
                duration: 5000,
                fade: 1200,
                centeredY: true
            });

            $("#mapwrapper").gMap({
                controls: false,
                scrollwheel: false,
                markers: [{
                    latitude: 52.1027969,
                    longitude: 5.0367955,
                    icon: {
                        image: "images/marker.png",
                        iconsize: [44, 44],
                        iconanchor: [12, 46],
                        infowindowanchor: [12, 0]
                    }
                }],
                icon: {
                    image: "images/marker.png",
                    iconsize: [26, 46],
                    iconanchor: [12, 46],
                    infowindowanchor: [12, 0]
                },
                latitude: 52.1027969,
                longitude: 5.0367955,
                zoom: 14
            });
        });
    </script>
</head>
<!--/head-->

<body>
    <div id="preloader"></div>
    <!-- facebook stuff -->

    <div id="fb-root"></div>
    <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://connect.facebook.net/nl_NL/sdk.js#xfbml=1&version=v2.10';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <!-- end facebook -->

    <header class="navbar navbar-inverse navbar-fixed-top " role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="/nl"><h1>Durmusdag</h1></a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/nl">Home</a></li>
                </ul>
            </div>
        </div>
    </header>
    <!--/header-->

    <section id="main-slider" class="no-margin">
        <div class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="item active">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content center centered">
                                    <h2 class=" title boxed animation animated-item-1 fade-down">Algeme voorwaarden</h2><br>
                                    <p class=" subitle boxed animation animated-item-2 fade-up">Algemene Voorwaarden Lesovereenkomst</p>
                                    <br>
                                    <a class="btn btn-md animation bounce-in" href="#terms">Lees ze hieronder!</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/.item-->
            </div>
            <!--/.carousel-inner-->
        </div>
        <!--/.carousel-->
    </section>
    <!--/#main-slider-->

    <div id="content-wrapper">
        <section id="terms" class="white terms-wrap">
            <div class="container">
                <div class="gap"></div>
                <div class="row">
                    <div class="col-md-10">
                        <h3>1. Algemeen</h3>
                        <p>
                            Deze algemene voorwaarden (AV) geven de algemene bepalingen weer voor het verzorgen van rijopleiding categorie B, de daarbij behorende acties van de rijschool en de CBR/BNOR praktijkexamens. Zij zijn van toepassing op de in de lesovereenkomst vermelde rijschool, hierna aan te duiden als 'rijschool'.
                        </p>
                    </div>
                    <div class="col-md-10">
                        <h3>2. Rijopleiding</h3>
                        <p>
                            <h4>De rijlessen worden gegeven door</h4>
                            <ul>
                                <li>bevoegde instructeur(s);</li>
                                <li>met een tijdsduur van minimaal 60 minuten;</li>
                                <li>voor leerlingen die bevoegd zijn om te rijden;</li>
                                <li>voor leerlingen van 16,5 jaar en ouder.</li>
                            </ul>
                        </p>
                    </div>
                    <div class="col-md-10 term-sub">
                        <h3>3. Verplichtingen rijschool</h3>
                        <p>
                            <h4>De rijschool zorgt ervoor dat:</h4>
                            <b >3.1 </b>de leerling een passende rijopleiding wordt aangeboden;<br>
                            <b >3.2 </b>de leerling zo goed als mogelijk tot het CBR/BNOR praktijkexamen wordt opgeleid;<br>
                            <b >3.3 </b>wanneer overeenstemming is bereikt over het aanvragen van een praktijkexamen deze binnen 14 dagen bij het CBR wordt ingediend;<br>
                            <b >3.4 </b>de datum zo spoedig mogelijk aan de cursist wordt medegedeeld.
                        </p>
                    </div>
                    <div class="col-md-10 terms-sub">
                        <h3>4. Verplichtingen leerling</h3>
                        <p>
                            <h4>De leerling dient:</h4>
                            <b >4.1 </b>zich te houden aan de afgesproken datum, tijd en plaats voor de rijles (door de instructeur wordt een wachttijd van maximaal 15 minuten in acht genomen vanaf aanvang rijles);<br>
                            <b >4.2 </b>bij het niet nakomen van de afgesproken rijles, zonder tijdige afzegging, de volledige lesprijs te voldoen;<br>
                            <b >4.3 </b>wanneer overeenstemming is bereikt over het aanvragen van een praktijkexamen deze binnen 14 dagen bij het CBR wordt ingediend;<br>
                            <b >4.4 </b>bij verhindering van de afgesproken rijles om dringende redenen deze tijdig op te zeggen door dit minimaal 24 uur voor aanvang van de rijles aan rijschool kenbaar te maken;<br>
                            <b >4.5 </b>alle aanwijzingen van de rij-instructeur te volgen;<br>
                            <b >4.6 </b> ervoor te zorgen dat hij of zij over alle benodigde stukken beschikt voor de tussentijdse toets en CBR/BNOR praktijkexamen;<br>
                            <b >4.7 </b>bij niet nakoming van punt 4.6 voor betaling van de tussentijdse toets of CBR/BNOR praktijkexamen aan de rijschool zorg te dragen.
                        </p>
                    </div>
                    <div class="col-md-10">
                        <h3>5. Betaling</h3>
                        <p>
                            <b >5.1 </b> de leerling is verplicht de verschuldigde bedragen voor lespakketten (10 of meer lessen) bij vooruitbetaling te voldoen aan de rijschool. Dit mag contant of via een bankoverschrijving;<br>
                            <b >5.2 </b>de leerling dient, in geval van losse lessen, het lesgeld vooraf aan de rijles contant te voldoen aan de instructeur;<br>
                            <b >5.3 </b>de rijschool is niet gerechtigd tijdens de duur van een lesovereenkomst de lesprijs/pakketprijs te verhogen;<br>
                            <b >5.4 </b> indien de leerling na aanmaning in gebreke blijft met betaling zal het verschuldigde bedrag ter incasso uit handen worden gegeven aan een gerenommeerd incassokantoor;<br>
                            <b >5.5 </b> bij niet tijdige betaling is de rijschool gerechtigd de rijlessen en het reserveren van het examen te staken. <br>
                            <b >5.6 </b> betalingen via overschrijving dienen altijd te geschieden onder vermelding van voor - en achternaam van de leerling.<br>
                        </p>
                    </div>
                    <div class="col-md-10">
                        <h3>6. Praktijkexamen/ Tussentijdse Toets</h3>
                        <p>
                            <b >6.1 </b>indien het praktijkexamen/TTT wegens weersomstandigheden door het CBR wordt uitgesteld is de leerling de kosten voor extra rijlessen tot aan de nieuwe (proef)examendatum gewoon verschuldigd;<br>
                            <b >6.2 </b>de leerling is zelf verantwoordelijk voor het in het bezit hebben van de juiste stukken die bij het praktijkexamen c.q. de TTT benodigd zijn.<br>
                            <b >6.3 </b> betaling van de kosten voor een praktijkexamen c.q. TTT dient binnen 3 werkdagen voor de datum van het (proef)examen contant aan de rijschool te zijn voldaan dan wel op het bankrekeningnummer van de rijschool te staan bijgeschreven.
                            <b >6.4 </b> de leerling is bij uitstel van het praktijkexamen/TTT geen kosten voor een aanvraag van een nieuw praktijkexamen /TTT verschuldigd indien hij of zij het eerste praktijkexamen/TTT niet kan afleggen doordat:<br>
                            <ul>
                                <li>de leerling vanwege ziekte niet in staat is het (proef)examen af te leggen op voorwaarde dat hij of zij dit binnen 8 dagen na (proef)examendatum door middel van een doktersverklaring aan de rijschool kenbaar maakt;</li>
                                <li>een familielid tot en met de tweede graad van de leerling of van de rij-instructeur binnen 5 dagen voor het praktijkexamen/TTT is komen te overlijden of op de dag van het (proef)examen wordt begraven of gecremeerd;</li>
                                <li>het lesvoertuig of een gelijkwaardig type op het (proef)praktijkexamen niet beschikbaar is of wordt afgekeurd door de examinator.</li>
                            </ul>
                        </p>
                    </div>
                    <div class="col-md-10">
                        <h3>7. Beëindiging rijopleiding/losse lessen/pakketten</h3>
                        <p>
                            <b >7.1 </b> de leerling kan, in geval van een lesovereenkomst bestaande uit losse lessen, deze opzeggen, met inachtneming van punt 4.3;<br>
                            <b >7.2 </b>  de leerling kan, in geval van een lesovereenkomst bestaande uit een of meerdere pakketten dan wel een volledige rijopleiding deze opzeggen in geval van hem of haar om medische redenen redelijkerwijs niet verlangd kan worden dat de rijopleiding wordt voortgezet. De leerling dient hiervoor wel een doktersverklaring te overleggen. De rijschool zal in dit geval het tegoed, minus betaalde examengelden/TTT gelden en administratiekosten met een minimum van € 125,-, aan de leerling betalen. <br>
                            <b >7.3 </b>indien de leerling om andere dan medische redenen de lesovereenkomst bestaande uit een of meerdere pakketten dan wel een volledige rijopleiding wenst op te zeggen gebeurt dit in goed overleg met de rijschool. Mochten leerling en rijschool er niet in slagen tot overeenstemming te komen zal de zaak ter beoordeling aan de rechter worden voorgelegd.<br>
                        </p>
                    </div>
                    <div class="col-md-10">
                        <h3>8. Aansprakelijkheid</h3>
                        <p>
                            <b >8.1 </b> de leerling is niet aansprakelijk voor schaden aan derden ten gevolge van botsing, aan- of overrijdingen tijdens de rijles, de TTT en het praktijkexamen. <br>
                            <b >8.2 </b> de rijschool is niet aansprakelijk voor schaden aan derden die het gevolg zijn van opzet of grove schuld van de zijde van de leerling en zij is ook niet aansprakelijk voor schaden ten gevolge van het feit dat de leerling onder invloed is van alcohol, drugs, geneesmiddelen of verdovende middelen die de rijvaardigheid beïnvloeden. <br>
                            <b >8.3 </b>de rijschool is niet aansprakelijk voor boetes of andere financiële consequenties, indien de leerling ondanks de door zijn of haar gedane eigen verklaring, onbevoegd blijkt te zijn tot het besturen van het lesvoertuig.<br>
                        </p>
                    </div>
                    <div class="col-md-11">
                        <h3>9. Klachtenregeling</h3>
                        <p>
                            <b >9.1 </b>geschillen ontstaan tussen leerling en rijschool zullen in eerste instantie worden voorgelegd aan de rijschool welke zal bemiddelen in het geschil;<br>
                            <b >9.2 </b> indien bemiddeling niet leidt tot een bevredigende oplossing voor beide partijen zal het geschil aan de rechter worden voorgelegd;<br>
                            <b >9.3 </b>op de lesovereenkomst tussen rijschool en leerling is het Nederlands recht van toepassing.<br>
                        </p>
                    </div>
                </div>
            </div>
        <!--/#bottom-->

        <footer id="footer" class="">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        &copy; 2017 Durmusdag. </a> Alle rechten voorbehouden
                    </div>
                    <div class="col-sm-6">
                        <ul class="pull-right">
                            <li><a id="gototop" class="gototop" href="#"><i class="fa fa-chevron-up"></i></a></li>
                            <!--#gototop-->
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!--/#footer-->
        </div>
        <script src="js/zenscroll.js" charset="utf-8"></script>
        <script src="js/plugins.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.prettyPhoto.js"></script>
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCWDPCiH080dNCTYC-uprmLOn2mt2BMSUk&amp;sensor=true"></script>
        <script src="js/init.js"></script>
</body>
