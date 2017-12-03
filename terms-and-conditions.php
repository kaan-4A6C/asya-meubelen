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
                <a class="navbar-brand" href="/en"><h1>Durmusdag</h1></a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/en">Home</a></li>
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
                                    <h2 class=" title boxed animation animated-item-1 fade-down">Terms and Conditions</h2><br>
                                    <p class=" subitle boxed animation animated-item-2 fade-up">Terms and Conditions Lesson Agreement</p>
                                    <br>
                                    <a class="btn btn-md animation bounce-in" href="#terms">Read it below!</a>

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
                        <h3>1. General</h3>
                        <p>
                            These General Terms and Conditions (Algemene Voorwaarden; AV) provided the general provisions for providing driving training category B, the accompanying actions of the driving school and the CBR/BNOR practical examinations. They apply to the driving school mentioned in the lesson agreement, hereinafter referred to as ‘driving school’.
                        </p>
                    </div>
                    <div class="col-md-10">
                        <h3>2. Driving Course</h3>
                        <p>
                            <h4>The driving lessons are given by</h4>
                            <ul>
                                <li>competent instructor(s);</li>
                                <li>with a minimum duration of 60 minutes;</li>
                                <li>for students qualified to drive;</li>
                                <li>for students aged 16.5 and over.</li>
                            </ul>
                        </p>
                    </div>
                    <div class="col-md-10 term-sub">
                        <h3>3. Obligations driving school</h3>
                        <p>
                            <h4>The driving school ensures that</h4>
                            <b >3.1 </b>the student is offered an appropriate driving training;<br>
                            <b >3.2 </b>the student is trained as best as possible to the CBR/BNOR practical exam;<br>
                            <b >3.3 </b>when an agreement has been reached on the application for a practical exam submitted to the CBR within 14 days;<br>
                            <b >3.4 </b>the date will be communicated to the student as soon as possible
                        </p>
                    </div>
                    <div class="col-md-10 terms-sub">
                        <h3>4. Obligations student</h3>
                        <p>
                            <h4>The student should:</h4>
                            <b >4.1 </b>adhere to the agreed date, time and place for the driving lesson (the instructor considers a 15-minute waiting period from the start of driving lessons);<br>
                            <b >4.2 </b>when failing to comply with the agreed driving lesson, without timely cancellation, to pay a full lesson price;<br>
                            <b >4.3 </b> for cancellation of the agreed driving lesson for urgent reasons, communicate cancelation at least 24 hours prior to commencement of the driving lesson to the driving school;<br>
                            <b >4.4 </b>in case of non-cancellation (as described in section 4.2), the full lesson price is to be met;<br>
                            <b >4.5 </b>follow all instructions from the driving instructor;<br>
                            <b >4.6 </b>ensure that he/ she has all the necessary pieces for the interim test (tussentijdse toets) and CBR/BNOR practical examination;<br>
                            <b >4.7 </b>ensure by failure to comply with section 4.6 for the payment of the interim test or CBR/BNOR practice exam at the driving school.
                        </p>
                    </div>
                    <div class="col-md-10">
                        <h3>5. Payment</h3>
                        <p>
                            <b >5.1 </b>the student is obliged to pay the due amounts for lesson packages (10 or more lessons) in advance to the driving school. This may be in cash or by bank transfer;<br>
                            <b >5.2 </b>In case of single classes, the student must pay the tuition fee in advance to the lesson to the instructor;<br>
                            <b >5.3 </b>the driving school is not entitled to increase the price/ package price during the duration of a lesson agreement;<br>
                            <b >5.4 </b>if, after notice, the student fails to pay, the amount due for collection will be handed to a reputable collection agency;<br>
                            <b >5.5 </b>in case of late payment, the driving school is entitled to discontinue driving lessons and booking the exam;<br>
                            <b >5.6 </b>Payments by bank transfer must always be done, stating the first and last name of the student. <br>
                        </p>
                    </div>
                    <div class="col-md-10">
                        <h3>6. Practical Examination / Interim Test </h3>
                        <p>
                            <b >6.1 </b>In case the practical exam/TTT is postponed due to weather conditions, the student is required to pay the costs for additional driving lessons up to the new (test)examination date. <br>
                            <b >6.2 </b>The student is responsible for having the right documents required for the practical exam or the TTT;<br>
                            <b >6.3 </b>Payment of the costs for a practical exam or TTT must be paid in cash within 3 working days prior to the date of the (test)exam if not completed to the bank account of the driving school. <br>
                            <b >6.4 </b>In case of postponement of the practical exam/TTT, the student is not required to pay costs for applying for new practical exam/TTT when the student is unable to perform the practical exam/TTT due to: <br>
                            <ul>
                                <li>the student due to illness is unable to complete the (test)exam, provided that he or she informs the driving school within 8 days of the trial date (test) with a doctor’s note;</li>
                                <li>a relative to the second grade of the student or driving instructor within 5 days before the practical exam/TTT has died, or is buried or cremated on the day of the (test)exam;</li>
                                <li>the lesson vehicle or equivalent type on the (test) practical exam is not available or is disapproved by the examiner. </li>
                            </ul>
                        </p>
                    </div>
                    <div class="col-md-10">
                        <h3>7. Termination of driving training/ individual classes/ packages</h3>
                        <p>
                            <b >7.1 </b>the student is able to, in case of lesson agreement consisting of individual lessons, to terminate these, with subject to section 4.3;<br>
                            <b >7.2 </b> In the case of a lesson agreement consisting of one or more packages or a complete driving course, the student may, in the event of his or her discontinuation for medical reasons, reasonably not be required to continue the driving lessons. The student must provide a doctor’s statement. In this case the driving school will pay the credit, minus paid examination fees/ TTT with a minimum of €125, - to the student. <br>
                            <b >7.3 </b>indien de leerling om andere dan medische redenen de lesovereenkomst bestaande uit een of meerdere pakketten dan wel een volledige rijopleiding wenst op te zeggen gebeurt dit in goed overleg met de rijschool. Mochten leerling en rijschool er niet in slagen tot overeenstemming te komen zal de zaak ter beoordeling aan de rechter worden voorgelegd.<br>
                        </p>
                    </div>
                    <div class="col-md-10">
                        <h3>8. Liability</h3>
                        <p>
                            <b >8.1 </b>The student is not liable for damages to third parties as a result of collision, crash into or overruns during driving lessons, the TTT and the practical exam.<br>
                            <b >8.2 </b>The driving school is not liable for damage to third parties resulting from intentional or gross negligence on the part of the student and is not liable for damages due to the fact that the student is under the influence of alcohol, drugs, medicines or narcotic drugs that affect driving ability.<br>
                            <b >8.3 </b>The driving school is not liable for fines or other financial consequences, if the student appears to be ineligible to drive the lesson vehicle, in spite of the personal statement made by his or her own. <br>
                        </p>
                    </div>
                    <div class="col-md-11">
                        <h3>9. Complaints</h3>
                        <p>
                            <b >9.1 </b>Disputes between student and driving school will initially be submitted to the driving school which will mediate in the dispute;<br>
                            <b >9.2 </b>If mediation does not lead to a satisfactory solution for both parties, the dispute will be submitted to the court;<br>
                            <b >9.3 </b>on the lesson agreement between driving school and student, Dutch law applies. <br>
                        </p>
                    </div>
                </div>
            </div>
        <!--/#bottom-->

        <footer id="footer" class="">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        &copy; 2017 Durmusdag. </a> All rights reseved
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
