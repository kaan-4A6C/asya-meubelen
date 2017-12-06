<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="theme-color" content="#000000">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Asya meubelen</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/pe-icons.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="slider/src/css/swipebox.min.css" rel="stylesheet">
    <script src="js/jquery.js"></script>
    <script src="js/jquery.backstretch.min.js" charset="utf-8"></script>
    <script src="slider/src/js/jquery.swipebox.min.js" charset="utf-8"></script>
    <script src="slider/src/js/jquery.swipebox.min.js" charset="utf-8"></script>

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon" sizes="144x144" href="images/logo.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/logo.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/logo.png">
    <link rel="apple-touch-icon" href="images/logo.png">
    <script type="text/javascript">
;( function( $ ) {

	$( '.swipebox' ).swipebox();

} )( jQuery );
</script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            'use strict';
            jQuery('body').backstretch([
                "images/12.jpeg",
                "images/kaya.jpeg",
                "images/28.jpeg"
            ], {
                duration: 5000,
                fade: 1200,
                centeredY: true
            });

            $("#mapwrapper").gMap({
                controls: false,
                scrollwheel: false,
                markers: [{
                    latitude: 51.9411522,
                    longitude: 5.2178798,
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
                latitude: 51.9411522,
                longitude: 5.2178798,
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
                <!-- <a class="navbar-brand" href="#main-slider"><h1>Asya meubelen</h1></a> -->
                <a class="navbar-brand" href="#main-slider"><h1>Asya meubelen</h1></a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#main-slider">Home</a></li>
                    <li><a href="#instructeur">Over ons</a></li>
                    <li><a href="#auto">Modellen</a></li>
                    <!-- <li><a href="#testimonial-carousel">Gastenboek</a></li> -->
                    <li><a href="#tarieven">Onderhoud</a></li>
                    <li><a href="#contact">Contact</a></li>
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
                                    <h2 class=" title boxed animation animated-item-1 fade-down">Welkom bij Asya meubelen</h2><br>
                                    <p class="subitle boxed animation animated-item-2 fade-up">De groothandel voor banken!</p>
                                    <br><br><br>
                                    <a class="btn btn-md animation bounce-in" href="#content-wrapper">Lees meer</a>
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
        <section id="instructeur" class="white">
            <div class="container">
                <div class="gap"></div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="center gap fade-down section-heading">
                            <h2 class="main-title">Over ons</h2>
                            <hr>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <p>
                            Ons bedrijf is er een die zich internationaal vestigt, gespecialiseerd is in design en in het ontwikkelen van meubels. Wij hebben een ruim assortiment voor u om uit te kiezen en kijken nergens van op. Zo is het voor ons gemakkelijk om aan de wensen van klanten te voldoen en/of er op in te spelen.
                            Ook kunnen wij op deze manier een band creëren met klanten en daardoor hopen op samenwerking op lange termijn.

                        </p>
                    </div>
                <div class="row">
                    <div class="col-md-6">
                        <p>
                            Bent u zich er van bewust dat u uw ideeën werkelijkheid kunt gaan maken, dan kunt u er bij ons voor zorgen dat uw inspiratie tot leven komt.
                            Wij zijn telefonisch bereikbaar voor het inplannen van een afspraak waarbij u vrijblijvend advies kunt krijgen.
                        </p>
                    </div>
                </div>
            </div>
            <div id="auto" class="gap"></div>
            <div class="container">
                <div class="col-md-12">
                    <div class="center gap fade-down section-heading">
                        <h2 class="main-title">Modellen</h2>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
            <a href="images/sultan.jpeg "class="swipebox">
                <img class="img-fluid col-md-3 col-sm-6 col-xs-12 auto-img" src="images/sultan.jpeg" alt="Bank">
            </a>
            <a href="images/kaya.jpeg "class="swipebox">
                <img class="img-fluid col-md-3 col-sm-6 col-xs-12 auto-img" src="images/kaya.jpeg" alt="Bank">
            </a>
            <a href="images/12.jpeg "class="swipebox">
                <img class="img-fluid col-md-3 col-sm-6 col-xs-12 auto-img" src="images/12.jpeg" alt="Bank">
            </a>
            <a href="images/28.jpg "class="swipebox">
                <img class="img-fluid col-md-3 col-sm-6 col-xs-12 auto-img" src="images/28.jpg" alt="Bank">
            </a>
            <a href="images/16.jpeg "class="swipebox">
                <img class="img-fluid col-md-3 col-sm-6 col-xs-12 auto-img" src="images/16.jpeg" alt="Bank">
            </a>
            <a href="images/20.jpeg "class="swipebox">
                <img class="img-fluid col-md-3 col-sm-6 col-xs-12 auto-img" src="images/20.jpeg" alt="Bank">
            </a>
            <a href="images/amsterdam.jpeg "class="swipebox">
                <img class="img-fluid col-md-3 col-sm-6 col-xs-12 auto-img" src="images/amsterdam.jpeg" alt="Bank">
            </a>
            <a href="images/arizona.jpeg "class="swipebox">
                <img class="img-fluid col-md-3 col-sm-6 col-xs-12 auto-img" src="images/arizona.jpeg" alt="Bank">
            </a>

            <!-- must stay! -->
            <div class="container-fluid">
                <div class="row"></div>
                <!--/.row-->
                <div class="gap"></div>
                <div class="text-center">
                    <a href="#">
                        <input class="btn btn-outlined btn-primary" value="Toon alles" readonly/>
                    </a>
                </div>
            </div>
        </section>
        <section id="testimonial-carousel" class="divider-section">
            <div class="gap"></div>

            <div class="container">
                <div class="row">
                    <div class="center gap fade-down section-heading">
                        <h2 class="main-title">Wat andere ervan vonden!</h2>
                        <hr>
                        <!-- <p>De ervaringen van andere geslaagden!</p> -->
                        <div class="gap"></div>
                    </div>
                    <div class=' col-md-12 fade-up'>
                        <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                            <!-- Bottom Carousel Indicators -->
                            <!-- <ol class="carousel-indicators">
                                <li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
                                <li data-target="#quote-carousel" data-slide-to="1"></li>
                                <li data-target="#quote-carousel" data-slide-to="2"></li>
                            </ol> -->
                            <!-- Carousel Slides / Quotes -->
                            <div class="carousel-inner">
                            <?php include 'dbc.php';
                                // $dbc = new PDO("mysql:host=ftp.asyameubelen.nl; dbname=asyameube", "asyameube", "x3v%hC5y");
                                // $dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                $sth = $dbc->prepare("SELECT name, message, date FROM review ORDER BY id DESC");
                                $sth->execute();
                                $res = $sth->fetchAll(PDO::FETCH_ASSOC);

                                foreach($res as $key => $value) : ?>
                            <div class="item <?php echo $key === 0 ? "active" : null ?>">
                                <blockquote>
                                    <div class="row">
                                        <div class="col-md-2 col-sm-1 text-center"></div>
                                        <div class="col-sm-10 col-md-8">
                                            <p><?php echo $value['message']; ?></p>
                                            <small><?php echo $value['name'] . "<br>" .  $value['date']; ?></small>
                                        </div>
                                        <div class=" col-md-2-sm-1 text-center"></div>
                                    </div>
                                </blockquote>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <div class="gap"></div>
            </div>
        </div>
        </section>

        <section id="about-us" class="white">
            <div class="container">
                <div class="gap"></div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="center gap fade-down section-heading">
                            <h2 class="main-title">Voeg hier je ervaring toe aan het gastenboek</h2>
                            <hr>
                            <p>Laat een leuke reactie achter!</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div id="reviewMessage"></div>
                    <div class="col-md-10 col-md-offset-1 fade-up">
                        <form id="reviewForm" class="" action="gastenboek.php" method="post">
                            <input id="reviewName" style="margin-bottom: 15px;" class="form-control gastenboek-form" max="30" required type="text" name="name" value="" placeholder="Naam *">
                            <textarea id="reviewMessageInput" class="form-control gastenboek-form g-textarea" required type="text" name="message" placeholder="Uw bericht"></textarea><br>
                            <input class="btn btn-outlined btn-primary" type="submit" name="submit" value="Verzend" />
                        </form>
                    </div>
                </div>
                <div class="gap"></div>
                <div class="gap"></div>
                <div class="center gap fade-down section-heading"></div>
                <div class="gap"></div>
            </div>
        </section>

        <section id="stats" class="divider-section">
            <div class="gap"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-6">
                        <div class="center bounce-in">
                            <span class="stat-icon"><span class="pe-7s-timer bounce-in"></span></span>
                            <h1><span class="counter">3</span></h1>
                            <h3>Weken levertijd</h3>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-6">
                        <div class="center bounce-in">
                            <span class="stat-icon"><span class="pe-7s-graph1 bounce-in"></span></span>
                            <h1><span class="counter">100</span> +</h1>
                            <h3>Verschillende banken</h3>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="center bounce-in">
                            <span class="stat-icon"><span class=" pe-7s-light bounce-in"></span></span>
                            <h1><span class="counter">300</span> +</h1>
                            <h3>Tevreden klanten</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gap"></div>
        </section>

        <section id="tarieven" class="white">
            <div class="container">
                <div class="center gap fade-down section-heading">
                    <h2 class="main-title">Onderhoud</h2>
                    <hr>
                </div>
                <div class="gap"></div>
                <div class="col-md-6">
                    <h3>Onderhoud</h3>
                    <p>
                        Vanwege het feit dat Asyameubelen enkel meubelen van hoge kwaliteit levert,
                        zijn onze producten dan ook opgewassen tegen vunzigheden. Wij stellen onze klanten graag tevreden
                        en hebben dan ook een overzicht samengesteld waarin wordt verteld hoe u uw meubilair het best kunt onderhouden.
                        Hieronder de manier die wij hanteren om bankstellen van velours te reinigen en onderhouden zonder het meubilair
                        te beschadigen.
                    </p>
                    <p>
                        Let op:
                        <i>
                            De banken die wij maken zijn elk van een verschillende stof en behoren dan ook elk op een
                            andere manier gereinigd  te worden. Voor de velours banken hebben wij hieronder enkele handige tips.
                        </i>
                    </p>
                </div>
                <div class="col-md-6">
                    <h3>Veloursstoffen algemeen</h3>
                    <p>
                        De weefsels die bij velours voorkomen, worden poolweefsels genoemd. Hoe dat weefsel
                        is samengesteld gaat uiteindelijk een effect creëren. Velours is een stof dat een schaduwachtig
                        effect kan creëren of één waarbij het lijkt dat de stof geplet is.
                        Desalniettemin doet dat de kwaliteit van de stof niet tekort. Wel kan het voorkomen dat door
                        lichaamswarmte en/of druk, de stof schijnvlekken kan laten ontstaan. Deze zijn overigens
                        makkelijk te verwijderen met een vochtig doekje. Het is de bedoeling dat het vochtige doekje
                        een nacht op de plek van de vlek ligt om er vervolgens over heen te borstelen, in de richting
                        van de poolweefsels.
                    </p>
                </div>
                <div class="col-md-12">
                    <h3>Velours en onderhouden</h3>
                    <p>
                        Met water is het schoonmaken van een velours bank goed te doen. Een vochtig doekje en wrijven
                        in de richting van de poolweefsels, doet zijn werk al. Om de vocht op de schoongemaakte de plek
                        weer op te nemen is het handig om na het schoonmaken, er met een keukendoek of keukenrol, over heen te gaan.
                        (In onze showroom bieden we de mogelijkheid om te laten zien hoe wij een vlek uit velours krijgen, waarna
                        er niets meer van te zien valt).
                    </p>
                </div>
                <div class="col-md-12">
                    <h3>Handige weetjes</h3>
                    <ul>
                        <li>Voor een optimaal resultaat, met de poolweefsels mee deppen, NIET ertegen. Wanneer u dit wel doet kunt u ervoor zorgen dat er stof tussen het velour gaat zitten en de vlek wel degelijk te zien zal zijn.</li>
                        <li>Als u de rug- en zitkussens minimaal 1 keer per week omdraait, zorgt u ervoor dat u de duurzaamheid van de kussens stimuleert.</li>
                        <li>Ook is het belangrijk dat u GEEN schoonmaak- of reinigingsmiddelen gebruikt wanneer u de bank wilt schoonmaken. Producten die chemicaliën bevatten zorgen er namelijk voor dat de vlek niet verdwijnt maar verkleurt.</li>
                    </ul>
                </div>
                <div class="gap"></div>
            </div>
        </section>

        <div id="mapwrapper">
            <div id="map"></div>
        </div>

        <section id="contact" class="white">
            <div class="container">
                <div class="gap"></div>
                <div class="center gap fade-down section-heading">
                    <h2 class="main-title">Contact</h2>
                    <hr>
                    <p>Vul onderstaand formulier in om ons een mail te sturen!</p>
                </div>
                <div class="gap"></div>
                <div class="row">
                    <div class="col-md-4 fade-up">
                        <h3>Contact Informatie</h3>
                        <p><span class=""></span>Asya meubelen<br/>
                            <span class=""></span>Culemborg, Zuid-Holland<br/>
                            <span class=""></span> 4104AR Culemborg <br><br>
                            <span class=""></span><i class="fa fa-phone"></i><a href="tel://31-648-790-774">+31 648790774</a> <b>of</b><br>
                            <span class=""></span><i class="fa fa-phone"></i><a href="tel://31-681-888-148">+31 681888148</a><br><br>
                            <span class=""></span>hs-meubelen@live.nl <br/>
                            <span class=""></span>KVK: 56422644 <br/>
                            <h3>Openingstijden</h3>
                            <span><b class="openingstijden">Maandag:  </b> 08.00 - 18.30</span><br>
                            <span><b class="openingstijden">Dinsdag:  </b> 08.00 - 18.30</span><br>
                            <span><b class="openingstijden">Woensdag: </b> 08.00 - 18.30</span><br>
                            <span><b class="openingstijden">Donderdag:</b> 08.00 - 18.30</span><br>
                            <span><b class="openingstijden">Vrijdag:  </b> 08.00 - 18.30</span><br>
                            <span><b class="openingstijden">Zaterdag: </b> 08.00 - 18.30</span>
                            <br><br>
                        </p>
                    </div>
                    <!-- col -->

                    <div class="col-md-8 fade-up">
                        <h3>Meld je hier aan!</h3>
                        <br>
                        <div id="message"></div>
                        <form method="post" action="sendemail.php" id="contactform">
                            <input type="text" name="name" id="name" placeholder="Naam *" />
                            <input type="email" name="email" id="email" placeholder="Email *" />
                            <input type="tel" name="telefoonnummer" id="telefoonnummer" placeholder="Telefoonnummer *" />
                            <textarea name="comments" id="comments" placeholder="Bericht "></textarea>
                            <input class="btn btn-outlined btn-primary" type="submit" name="submit" value="Verzend" />
                        </form>
                    </div>
                    <!-- col -->
                </div>
                <!-- row -->
                <div class="gap"></div>
            </div>
        </section>
    </div>

    <div id="footer-wrapper">
        <section id="bottom" class="">
            <div class="container">
                <div class="row">
                    <div class="col-md-3  col-sm-4 col-xs-12 about-us-widget">
                        <h4>Over Asya meubelen</h4>
                        <p> Directe verkoop uit onze eigen meubel fabriek in Culemborg met oppervlakte van 1800 vierkante meter.
                            Alle producten kunnen gelijk meegenomen worden.
                        </p>
                    </div>
                    <!--/.col-md-3-->

                    <div class="col-md-2 col-md-offset-1 col-sm-4 col-xs-6">
                        <h4>Asya meubelen</h4>
                        <div>
                            <ul class="arrow">
                                <li><a href="voorwaarden">Over ons</a></li>
                                <li><a href="voorwaarden">Modellen</a></li>
                                <li><a href="voorwaarden">Onderhoud</a></li>
                                <li><a href="voorwaarden">Contact</a></li>
                            </ul>
                        </div>
                    </div>

                    <!--/.col-md-3-->
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <h4>Adres</h4>
                        <address>
                            <strong>Culemborg</strong><br>
                            4104AR Culemborg<br>
                            Zuid-Holland<br>
                            <abbr title="Phone"><i class="fa fa-phone"></i></abbr> 0345 505 948
                        </address>
                    </div>
                    <!--/.col-md-3-->

                    <div class="col-md-4 col-sm-12 col-xs-11 text-center">
                        <div class="fb-page" data-href="https://www.facebook.com/hsmeubelen/" data-tabs="timeline" data-height="70" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/hsmeubelen/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/hsmeubelen/">Asya meubelen</a></blockquote></div>                    <!--/.col-md-3-->
                    </div>
                </div>
            </div>
        </section>
        <!--/#bottom-->

        <footer id="footer" class="">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        &copy; Asya meubelen. &nbsp;</a> Alle rechten voorbehouden
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
