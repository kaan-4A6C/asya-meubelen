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
                <a class="navbar-brand" href="#main-slider"><h1>Durmusdag</h1></a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#main-slider">Home</a></li>
                    <li><a href="#instructeur">Instructor</a></li>
                    <li><a href="#auto">Car</a></li>
                    <!-- <li><a href="#testimonial-carousel">Gastenboek</a></li> -->
                    <li><a href="#tarieven">Rates</a></li>
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
                                    <h2 class=" title boxed animation animated-item-1 fade-down">Driving School Durmus Dag</h2>
                                    <p class=" subitle boxed animation animated-item-2 fade-up">Our driving school guides you to your driving license, without any fuss. <br> I’m Durmus and I’m the regular instructor during your lessons.</p>
                                    <br>
                                    <a class="btn btn-md animation bounce-in" href="#contact">Sign up!</a>

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
                            <h2 class="main-title">Instructor</h2>
                            <hr>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <h3>Teaching with Experience!</h3>
                        <p>
                            After I obtained my instructor certificate in 2002, I worked at a renowned driving school in Utrecht.
                            There I gained almost eleven years of experience and supplied many candidates with skills and confidence to succeed.
                            The results of my driving lessons were so positive that I decided to set up my own driving school.
                            <br><br>
                            All these years of experience have taught me that driving lessons can be better and cheaper. Quality does not have to be expensive.
                            Due to the passion for my work, I have developed my own style of teaching. This did not only appeal to my students,
                            but also to the CBR, where I gained very respectable results. For example, during my application exam I achieved 101
                            out of 102 points for the right way of teaching.
                        </p>
                    </div>
                    <div class="col-md-6">
                        <h3>Near and Flexible</h3>
                        <p>
                            Durmus Dag Driving School is located in Vleuten, and the students come from surrounding areas such as Utrecht,
                            Maarssen, de Meern, Breukelen, Leidsche Rijn, IJsselstein, Houten, Vianen, Bunnik, Groenekan, Maartensdijk en Nieuwegein.
                            For each lesson I will pick you up where you find most convenient: at home, at work, at your study or at the train station.
                            And of course, you’ll be dropped off wherever you want.
                            <br><br>
                            The lesson times are also very flexible. The lessons start early, so you have the opportunity to take a
                            lesson before your work/study starts. And if you discuss the schedule with me on time, you’ll have a
                            lot of free choice in deciding the moment of your lesson.
                    </div>
                    <div class="col-md-6">
                        <h3>2 to DRIVE</h3>
                        <p>
                            A driving license at 17 years old? This is possible nowadays and is very convenient. From the moment you are 16.5 years
                            old you can start taking driving lessons and already take your practical exam on the day of your 17th birthday.
                            Until you’re 18 years old you may only drive under the guidance of someone with a valid driving license.
                        </p>
                    </div>
                </div>
            </div>
            <div id="auto" class="gap"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="center gap fade-down section-heading">
                            <h2 class="main-title">Car</h2>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
            <img class="img-fluid col-md-3 col-sm-6 col-xs-12 auto-img" src="images/img/auto(1).jpg" alt="Auto">
            <img class="img-fluid col-md-3 col-sm-6 col-xs-12 auto-img" src="images/img/auto(6).jpg" alt="Auto">
            <img class="img-fluid col-md-3 col-sm-6 col-xs-12 auto-img" src="images/img/auto(4).JPG" alt="Auto">
            <img id="last-car-img" class="img-fluid col-md-3 col-sm-6 col-xs-12 auto-img" src="images/img/auto(10).JPG" alt="Auto">
            <!-- <img class="img-fluid col-md-4 col-sm-6 col-xs-12 auto-img" src="images/img/auto(4).JPG" alt="Auto">
            <img class="img-fluid col-md-4 col-sm-6 col-xs-12 auto-img" src="images/img/auto(12).JPG" alt="Auto"> -->

            <div class="col-md-4 col-sm-6">
            <br>
                The car is very important for a good and safe learning environment. Your lessons will be in a decent Peugeot
                308 HDi that meets all safety requirements. For example, it has eight airbags, ABS (Anti-lock braking system),
                ESP (electronic stability program) air conditioning and more gadgets that will make you feel comfortable.
                Not only nice for you and the instructor, but also for the environment.
            </div>
            <div class="col-md-4 col-sm-6">
            <br>
                The lessons are taught in a cosy and calm atmosphere. I will increase the difficulty of traffic
                situations from easy to difficult so you start to have more control over time. The lessons are given
                according to the RIS method (Rijopleiding in Stappen), which means that you are actively involved in the lessons,
                meaning you’ll need less driving lessons and have a significant higher chance at passing!
            </div>
            <div class="col-md-4 col-sm-8">
            <br>
                Every student is different, so I always adhere to your personality and learning style to guarantee fun and educational
                lessons. One thing will be the same for everyone, you get my full attention from start till the end of the lesson,
                therefore you won’t be wasting time with chit chat.
            </div>

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
                        <h2 class="main-title">Wat andere ervan vinden!</h2>
                        <hr>
                        <p>De ervaringen van andere geslaagden!</p>
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
                                //
                                // foreach($res as $key => $value) : ?>
                            <div class="item <?php echo $key === 0 ? "active" : null ?>">
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
                            <?php //endforeach; ?>
                        </div>
                    </div>
                </div>
                <div class="gap"></div>
            </div>
        </section>

        <section id="about-us" class="white">
            <div class="container">
                <div class="gap"></div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="center gap fade-down section-heading">
                            <h2 class="main-title">Voeg hier je ervaring toe aan het gastenboek!</h2>
                            <hr>
                            <p>Vul het onderstaande formulier in!</p>
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
                            <h1><span class="counter">64500</span></h1>
                            <h3>Hours driven</h3>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-6">
                        <div class="center bounce-in">
                            <span class="stat-icon"><span class="pe-7s-graph1 bounce-in"></span></span>
                            <h1><span class="counter">1257500</span> +</h1>
                            <h3>kilometers traveled</h3>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="center bounce-in">
                            <span class="stat-icon"><span class=" pe-7s-light bounce-in"></span></span>
                            <h1><span class="counter">300</span> +</h1>
                            <h3>successful students</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gap"></div>
        </section>


        <section id="tarieven" class="white">
            <div class="container">
                <div class="center gap fade-down section-heading">
                    <h2 class="main-title">Rates </h2>
                    <hr>
                </div>
                <div class="gap"></div>
                <div id="pricing-table1" class="row">
                    <div class="col-md-6 col-sm-6">
                        <h3>Required</h3>
                        <label class="price-table">Administration fee (one time)</label><span> Gratis </span><br>
                        <label class="price-table">CBR practical driving exam</label><span> € 245</span><br>
                        <h3>Packages</h3>
                        <label class="price-table">1 hour</label><span> € 42</span><br>
                        <label class="price-table">10 hour</label><span> € 420</span><br>
                        <label class="price-table">20 hour</label><span> € 840</span><br>
                        <label class="price-table">30 hour</label><span> € 1230</span><br>

                    </div>
                    <div class="col-md-6 col-sm-6">
                        <h3>Optional</h3>
                        <label class="price-table">Trial lesson</label><span> Free *</span><br>
                        <label class="price-table">RIS-book  </label><span> € 22</span><br>
                        <label class="price-table">Single lesson of 60 minutes </label><span> € 42</span><br>
                        <label class="price-table">TTT (in between tests)</label><span> € 215</span><br>
                        <label class="price-table">BNOR-exam </label><span> € 270</span><br>
                        <label class="price-table">CBR-performance anxiety exam</label><span> € 270</span><br>
                        <h3>Spoedcursussen</h3>
                        <label class="price-table">15 uur + EV + CBR Exam</label><span> € 900</span><br>
                        <label class="price-table">20 uur + EV + CBR Exam</label><span> € 1100</span><br>
                        <label class="price-table">25 uur + EV + CBR Exam</label><span> € 1330</span><br>
                    </div><br>
                    <div class="col-md-12">
                        <h5>* mits je de opleiding bij ons afrond, anders word er 42 euro in rekening gebracht.</h5>
                    </div>
                </div>
                <br>
                <div id="pricing-table" class="row">
                    <div class="col-md-12">
                        <h3 class="text-center">Packages</h3><hr>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 flip-in">
                        <ul class="plan plan1">
                            <li class="plan-name">
                                <h3>Package A</h3>
                            </li>
                            <li class="plan-price">
                                <div>
                                    <span class="price"><sup>€</sup>1695*</span>
                                </div>
                            </li>
                            <li>
                                <strong>30 Hour</strong>
                            </li>
                            <li>
                                <strong>RIS Book</strong>
                            </li>
                            <li>
                                <strong> TTT</strong>
                            </li>
                            <li>
                                <strong>Exam</strong>
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
                                <h3>Package B</h3>
                            </li>
                            <li class="plan-price">
                                <div>
                                    <span class="price"><sup>€</sup>1950*</span>
                                </div>
                            </li>
                            <li>
                                <strong>35 Hour</strong>
                            </li>
                            <li>
                                <strong>RIS Book</strong>
                            </li>
                            <li>
                                <strong> TTT</strong>
                            </li>
                            <li>
                                <strong>Exam</strong>
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
                                <h3>Package C</h3>
                            </li>
                            <li class="plan-price">
                                <div>
                                    <span class="price"><sup>€</sup>2135*</span>
                                </div>
                            </li>
                            <li>
                                <strong>40 Hour</strong>
                            </li>
                            <li>
                                <strong>RIS Book</strong>
                            </li>
                            <li>
                                <strong>TTT</strong>
                            </li>
                            <li>
                                <strong>Exam</strong>
                            </li>
                            <!-- <li class="plan-action">
                                <a href="#" class="btn btn-outlined btn-primary btn-md btn-white">Signup</a>
                            </li> -->
                        </ul>
                    </div>
                    <div class="col-md-12">
                        <h5>* Possible to pay in 2 installments</h5>
                    </div>
                    <!--/.col-md-3-->
                    <div class="col-md-6">
                        <h3>Lesson Times</h3>
                        <p>
                            Working or studying? Our driving lessons start at 07:00 so you don’t have to change arrangements and you will be dropped off in whatever area you want.
                            On weekdays, classes are available between 07:00 and 18:00 and on Saturdays from 08:00 till 14:00.
                        </p>
                        <p>
                            A lesson hour is always 60 minutes. It is possible to pay per lesson or take a package. With a trial lesson I can
                            estimate how many driving lessons you may need to pass your exam. For your driver’s license, you must first get
                            your theoretical certificate and then do your practical exam. Your theory exam must be applied for on the CBR website.
                            We can also plan it for you, which will cost €45.
                        </p>
                    </div>
                    <div class="col-md-6">
                        <br>
                        <p>
                            Nervous for your practical exam? With an interim test (TTT), you might release some pressure. You will already complete your special manoeuvres,
                            such as stopping on command, the parking assignment, and the reversal assignment. If you pass this, you will not have to do those
                            assignments during your practical exam. Note: You must already have obtained a theoretical certificate for the interim test.
                        </p>
                        <p>
                            If you are really afraid that your performance during the practical exam is not going to be great, then it’s possible to complete
                            a performance anxiety exam. Of course you will still have to drive well, however you get a little extra time and you have the opportunity
                            for a ‘time out’. If you fail your practical exam 4 times you will automatically be awarded a BNOR exam (Bureau Nader Onderzoek Rijvaardigheid),
                            also called a state examination.
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
                    <p>Vul onderstaand formulier in om je aan te melden bij Autorijschool Durmus Dag.</p>
                </div>
                <div class="gap"></div>
                <div class="row">
                    <div class="col-md-4 fade-up">
                        <h3>Contact Information</h3>
                        <p><span class="icon icon-home"></span>Leidscherijn, Utrecht<br/>
                            <span class="icon icon-phone"></span>+31 612345678<br/>
                            <span class="icon icon-envelop"></span> <a href="#">info@durmusdag.nl</a> <br/>
                            <span class="icon icon-facebook"></span><a href="#">Rijschool durmusdag</a> <br/>
                        </p>
                    </div>
                    <!-- col -->

                    <div class="col-md-8 fade-up">
                        <h3>Sign in now!</h3>
                        <br>
                        <div id="message"></div>
                        <form method="post" action="sendemail.php" id="contactform">
                            <input type="text" name="name" id="name" placeholder="Name *" />
                            <input type="email" name="email" id="email" placeholder="Email *" />
                            <input type="tel" name="telefoonnummer" id="telefoonnummer" placeholder="Phonenumber *" />
                            <input type="text" name="adres" id="adres" placeholder="Address *" />
                            <textarea name="comments" id="comments" placeholder="Message "></textarea>
                            <input class="btn btn-outlined btn-primary" type="submit" name="submit" value="Sign in!" />
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
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3 col-sm-4 col-xs-12 about-us-widget">
                        <h4>About Durmusdag</h4>
                        <p>
                            With almost sixteen years of experience and supplied many candidates with skills and confidence to succeed.
                            The results of my driving lessons were so positive that I decided to set up my own driving school.
                        </p>
                    </div>
                    <!--/.col-md-3-->

                    <div class="col-md-3 col-sm-4 col-xs-6">
                        <h4>Company</h4>
                        <div>
                            <ul class="arrow">
                                <li><a href="terms-and-conditions">Terms and Conditions</a></li>
                                <li><a href="https://www.cbr.nl/brochure.pp?id=91">Authorize us at CBR</a></li>

                            </ul>
                        </div>
                    </div>
                    <!--/.col-md-3-->
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <h4>Address</h4>
                        <address>
                            <strong>Utrecht</strong><br>
                            Testlaan 123<br>
                            Utrecht, 3543<br>
                            <abbr title="Phone"><i class="fa fa-phone"></i></abbr> 06 12345678
                        </address>
                    </div>
                    <!--/.col-md-3-->

                    <div class="col-md-3 col-sm-12 col-xs-11 text-center">
                        <div class="fb-page" data-href="https://www.facebook.com/RijschoolDurmusDag/" data-tabs="timeline" data-height="70" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/RijschoolDurmusDag/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/RijschoolDurmusDag/">Rijschool Durmus Dag</a></blockquote></div>                    <!--/.col-md-3-->
                    </div>
                </div>
            </div>
        </section>
        <!--/#bottom-->

        <footer id="footer" class="">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        &copy; 2017 Durmusdag. </a> all rights reserved
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
        <!-- script -->
        <script src="js/zenscroll.js" charset="utf-8"></script>
        <script src="js/plugins.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.prettyPhoto.js"></script>
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCWDPCiH080dNCTYC-uprmLOn2mt2BMSUk&amp;sensor=true"></script>
        <script src="js/init.js"></script>
</body>
