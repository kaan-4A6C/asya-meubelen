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
    <script src="js/jquery.js"></script>
    <script src="js/jquery.backstretch.min.js" charset="utf-8"></script>

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
                                    <a class="btn btn-md animation bounce-in" href="#contact">Lees meer</a>
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
                            <h2 class="main-title">Instructeur</h2>
                            <hr>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <h3>Lessen met ervaring!</h3>
                        <p>
                            Nadat ik in 2002 mijn instructeursbewijs heb behaald, ben ik bij een bekende rijschool in Utrecht gaan werken. Daar heb ik bijna elf jaar ervaring opgedaan en veel kandidaten de vaardigheden en het vertrouwen bijgebracht om te slagen. De uitslagen van
                            mijn rijlessen waren zo positief dat ik besloot om een eigen rijschool op te richten.
                            <br><br> Van al die jaren lesgeven heb ik namelijk geleerd dat rijlessen beter en goedkoper kunnen en dat kwaliteit echt niet duur hoeft te zijn. Door mijn passie voor dit vak heb ik een eigen stijl van lesgeven ontwikkeld.
                            Die beviel niet alleen goed bij mijn cursisten maar ook bij het CBR, waar ik zeer respectabele resultaten heb behaald. Tijdens mijn applicatie-examen behaalde ik bijvoorbeeld 101 van de 102 punten voor de juiste manier van
                            lesgeven.
                        </p>
                    </div>
                    <div class="col-md-6">
                        <h3>Dichtbij en flexibel</h3>
                        <p>
                            Rijschool Durmus Dag is gevestigd in Vleuten en de cursisten komen uit omringende plaatsen, zoals Utrecht, Maarssen, De Meern, Breukelen, Leidsche Rijn, IJsselstein, Houten, Vianen, De Bilt, Bilthoven, Zeist, Bunnik, Groenekan, Maartensdijk en Nieuwegein.
                            Ik haal je voor elke les op waar dat voor jou handig is: thuis, op werk, bij je studie of van het station. En uiteraard word je ook weer afgezet waar jij dat graag wilt. <br><br> Ook de lestijden
                            zijn erg flexibel. De lessen beginnen vroeg, zodat je eventueel kunt lessen voor je werk/studie begint. En als je op tijd de planning met me bespreekt heb je veel vrije keus in het moment van lessen.
                        </p>
                    </div>
                    <div class="col-md-6">
                        <h3>2 to DRIVE</h3>
                        <p>
                            Een rijbewijs al op je 17e? Dat kan tegenwoordig en dat is heel handig. Vanaf het moment dat je 16,5 jaar oud bent mag je rijlessen nemen en vanaf je 17e verjaardag kun je ook praktijkexamen doen. Tot je 18 bent mag je dan alleen rijden onder begeleiding
                            van iemand met een rijbewijs.
                        </p>
                    </div>
                </div>
            </div>
            <div id="auto" class="gap"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="center gap fade-down section-heading">
                            <h2 class="main-title">Modellen</h2>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
            <img class="img-fluid col-md-3 col-sm-6 col-xs-12 auto-img" src="images/sultan.jpeg" alt="Bank">
            <img class="img-fluid col-md-3 col-sm-6 col-xs-12 auto-img" src="images/kaya.jpeg" alt="Bank">
            <img class="img-fluid col-md-3 col-sm-6 col-xs-12 auto-img" src="images/12.jpeg" alt="Bank">
            <img id="last-car-img" class="img-fluid col-md-3 col-sm-6 col-xs-12 auto-img" src="images/28.jpg" alt="Bank">

            <!-- <img class="img-fluid col-md-4 col-sm-6 col-xs-12 auto-img" src="images/img/auto(4).JPG" alt="Auto">
            <img class="img-fluid col-md-4 col-sm-6 col-xs-12 auto-img" src="images/img/auto(12).JPG" alt="Auto"> -->

            <!-- must stay! -->
            <div class="container-fluid">
                <div class="row">

                </div>
                <!--/.row-->
                <div class="gap"></div>
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
                                //$dbc = new PDO("mysql:host=db.durmusdag.nl;dbname=md280038db240313", "md280038db240313", "TJLX2qCN");
                                // $dbc = new PDO("mysql:host=localhost;dbname=rijschool", "root", "");
                                // $dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                //
                                // $sth = $dbc->prepare("SELECT name, message, date FROM guestbook ORDER BY id DESC");
                                // $sth->execute();
                                // $res = $sth->fetchAll(PDO::FETCH_ASSOC);

                                //foreach($res as $key => $value) : ?>
                            <div class="item <?php //echo $key === 0 ? "active" : null ?>">
                                <blockquote>
                                    <div class="row">
                                        <div class="col-md-2 col-sm-1 text-center"></div>
                                        <div class="col-sm-10 col-md-8">
                                            <p><?php //echo $value['message']; ?></p>
                                            <small><?php //echo $value['name'] . "<br> " . $value['date']; ?></small>
                                        </div>
                                        <div class=" col-md-2-sm-1 text-center"></div>
                                    </div>
                                </blockquote>
                            </div>
                            <?php // endforeach; ?>
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
                    <div class="col-md-10 col-md-offset-1 fade-up">
                        <form class="" action="gastenboek.php" method="post">
                            <input class="form-control gastenboek-form" max="30" required type="text" name="name" value="" placeholder="Naam *"><br>
                            <input class="form-control gastenboek-form" required type="text" name="email" placeholder="Email *"><br>
                            <textarea class="form-control gastenboek-form g-textarea" required type="text" name="message" value="" placeholder="Bericht"></textarea><br>
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
                            <h1><span class="counter">4</span></h1>
                            <h3>Weken levertijd</h3>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-6">
                        <div class="center bounce-in">
                            <span class="stat-icon"><span class="pe-7s-graph1 bounce-in"></span></span>
                            <h1><span class="counter">1257500</span> +</h1>
                            <h3>afgelegde kilometers</h3>
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
                    <h2 class="main-title">Tarieven</h2>
                    <hr>
                </div>
                <div class="gap"></div>
                <div id="pricing-table1" class="row">
                    <div class="col-md-6 col-sm-6">
                        <h3>Verplicht</h3>
                        <label class="price-table">Administratiekosten (eenmalig)</label><span> Gratis </span><br>
                        <label class="price-table">Officieel CBR-praktijkexamen</label><span> € 245</span><br>
                        <h3>Losse pakketten</h3>
                        <label class="price-table">1 uur</label><span> € 42</span><br>
                        <label class="price-table">10 uur</label><span> € 420</span><br>
                        <label class="price-table">20 uur</label><span> € 840</span><br>
                        <label class="price-table">30 uur</label><span> € 1230</span><br>

                    </div>
                    <div class="col-md-6 col-sm-6">
                        <h3>Optioneel</h3>
                        <label class="price-table">Intakeles</label><span> Gratis *</span><br>
                        <label class="price-table">RIS-boekje </label><span> € 22</span><br>
                        <label class="price-table">Losse les van 60 minuten </label><span> € 42</span><br>
                        <label class="price-table">TTT (tussentijdse toets) </label><span> € 215</span><br>
                        <label class="price-table">BNOR-examen </label><span> € 270</span><br>
                        <label class="price-table">Officieel CBR-faalangstexamen </label><span> € 270</span><br>
                        <h3>Spoedcursussen</h3>
                        <label class="price-table">15 uur + EV + CBR Examen</label><span> € 900</span><br>
                        <label class="price-table">20 uur + EV + CBR Examen</label><span> € 1100</span><br>
                        <label class="price-table">25 uur + EV + CBR Examen</label><span> € 1330</span><br>
                    </div><br>
                    <div class="col-md-12">
                        <h5>* mits je de opleiding bij ons afrond, anders word er 42 euro in rekening gebracht.</h5>
                    </div>
                </div>
                <br>
                <div id="pricing-table" class="row">
                    <div class="col-md-12">
                        <h3 class="text-center">Pakketten</h3><hr>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 flip-in">
                        <ul class="plan plan1">
                            <li class="plan-name">
                                <h3>Pakket A</h3>
                            </li>
                            <li class="plan-price">
                                <div>
                                    <span class="price"><sup>€</sup>1695*</span>
                                </div>
                            </li>
                            <li>
                                <strong>30 UUR</strong> les
                            </li>
                            <li>
                                <strong>Risboekje</strong>
                            </li>
                            <li>
                                <strong> Tussentijdse toets</strong>
                            </li>
                            <li>
                                <strong>Examen</strong>
                            </li>
                            <!-- <li class="plan-action">
                                <a href="#" class="btn btn-outlined btn-primary btn-md btn-white">Signup</a>
                            </li> -->
                        </ul>
                    </div>
                    <!--/.col-md-3-->
                    <div class="col-md-4 col-sm-4 col-xs-12 flip-in">
                        <ul class="plan plan2 featured">
                            <li class="plan-name">
                                <h3>Pakket B</h3>
                            </li>
                            <li class="plan-price">
                                <div>
                                    <span class="price"><sup>€</sup>1950*</span>
                                </div>
                            </li>
                            <li>
                                <strong>35 UUR</strong> les
                            </li>
                            <li>
                                <strong>Risboekje</strong>
                            </li>
                            <li>
                                <strong> Tussentijdse toets</strong>
                            </li>
                            <li>
                                <strong>Examen</strong>
                            </li>
                            <!-- <li class="plan-action">
                                <a href="#" class="btn btn-outlined btn-primary btn-md">Signup</a>
                            </li> -->
                        </ul>
                    </div>
                    <!--/.col-md-3-->
                    <div class="col-md-4 col-sm-4 col-xs-12 flip-in">
                        <ul class="plan plan3">
                            <li class="plan-name">
                                <h3>Pakket C</h3>
                            </li>
                            <li class="plan-price">
                                <div>
                                    <span class="price"><sup>€</sup>2135*</span>
                                </div>
                            </li>
                            <li>
                                <strong>40 UUR</strong> les
                            </li>
                            <li>
                                <strong>Risboekje</strong>
                            </li>
                            <li>
                                <strong> Tussentijdse toets</strong>
                            </li>
                            <li>
                                <strong>Examen</strong>
                            </li>
                            <!-- <li class="plan-action">
                                <a href="#" class="btn btn-outlined btn-primary btn-md btn-white">Signup</a>
                            </li> -->
                        </ul>
                    </div>
                    <div class="col-md-12">
                        <h5>* betalen in 2 delen mogelijk</h5>
                    </div>
                    <!--/.col-md-3-->
                    <div class="col-md-6">
                        <h3>Lestijden</h3>
                        <p>
                            Naar werk of school? Onze rijlessen beginnen al om 07.00 dus je hoeft er geen afspraken voor te verzetten en je wordt netjes in de regio afgezet waar je maar wilt. Op doordeweekse dagen kun je lessen tussen 07.00 en 18.00 en op zaterdag van 08.00 tot
                            14.00.
                        </p>
                        <p>
                            Een lesuur duurt bij ons altijd 60 minuten. Je kunt per rijles betalen of een pakket nemen. Met een intake-les kan ik inschatten hoeveel rijlessen je ongeveer nodig hebt om je examen te halen. Voor je rijbewijs moet je eerst je theoriecertificaat halen
                            en dan je praktijkexamen doen. Je theorie-examen moet je zelf aanvragen op de website van het CBR. Wij kunnen hem ook voor je inplannen, dat kost € 45.
                        </p>
                    </div>
                    <div class="col-md-6">
                        <br>
                        <p>
                            Zenuwachtig voor je praktijkexamen? Met een tussentijdse toets (TTT) haal je misschien wat druk van de ketel. In deze toets doe je alvast je bijzondere manoeuvres, zoals de stop-opdracht, de parkeeropdracht en de omkeeropdracht. Slaag je daarvoor, dan
                            hoef je dat tijdens je praktijkexamen niet meer te doen. Maar let op: ook voor de tussentijdse toets moet je al een theoriecertificaat hebben gehaald.</p>
                        <p>
                            Als je bang bent dat je echt helemaal dichtklapt is het ook mogelijk om een faalangstexamen te doen. Je moet dan natuurlijk nog steeds goed rijden, maar er wordt wat meer tijd voor uitgetrokken en je krijgt de kans op een ‘time out’: dan kun je het examen
                            stopzetten als het even niet meer gaat. Wanneer je 4 keer zakt voor je praktijkexamen kom je automatisch uit bij een BNOR-examen (Bureau Nader Onderzoek Rijvaardigheid), ook wel staatsexamen genoemd.
                        </p>
                    </div>
                    <!--/.col-md-3-->
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
                            <span class=""></span><i class="fa fa-phone"></i> 0345 505 948 <br>
                            <span class=""></span>hs-meubelen@live.nl <br/>
                            <span class=""></span>KVK: 56422644 <br/><br>
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
                        <p>Directe verkoop uit onze eigen meubel fabriek in Culemborg met oppervlakte van 1800 vierkante meter. Alle producten kunnen gelijk meegenomen worden.</p>
                    </div>
                    <!--/.col-md-3-->

                    <div class="col-md-3 col-md-offset-1 col-sm-4 col-xs-6">
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
                    <!-- <p><span class=""></span>Asya meubelen<br/>
                        <span class=""></span>Culemborg, Zuid-Holland<br/>
                        <span class=""></span> 4104AR Culemborg <br><br> -->
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

                    <div class="col-md-3 col-sm-12 col-xs-11 text-center">
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
