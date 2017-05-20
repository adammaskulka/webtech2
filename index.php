<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="FEI, STU, mechatronika">
    <meta name="description" content="Ústav automobilovej mechatroniky FEI STU">

    <title>
        Ústav automobilovej mechatroniky FEI STU | Domov
    </title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/theme.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--
<link href="css/bootstrap.min.css" rel="stylesheet">
-->

    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet"/>
    <link rel="stylesheet" href="css/flexslider.css"/>
    <link href="assets/bxslider/jquery.bxslider.css" rel="stylesheet"/>
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="assets/owlcarousel/owl.carousel.css">
    <link rel="stylesheet" href="assets/owlcarousel/owl.theme.css">

    <link href="css/superfish.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="css/seq-slider/sequencejs-theme.apple-style.css"/>
    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <!--
<link href='http://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>
-->

    <!-- Custom styles for this template -->
    <link rel="stylesheet" type="text/css" href="css/component.css">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet"/>


    <!--
<link rel="stylesheet" media="screen" href="css/slider/sequencejs-theme.modern-slide-in.css" />
-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js">
    </script>
    <script src="js/respond.min.js">
    </script>
    <![endif]-->
</head>
<?php
  session_start();

  function getRole() {
    return $_SESSION["user"]->roles;
  }

  require('src/multimediaController.php');
  deleteVideo("POKUS");
?>

<body>
<!--header start-->
<header class="head-section">
    <div class="navbar navbar-default navbar-static-top container">
        <div class="navbar-header">
            <button class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse"
                    type="button"><span class="icon-bar"></span> <span class="icon-bar"></span>
                <span class="icon-bar"></span></button>
            <a class="navbar-brand" href="index.php">FEI M<span>echatronika</span></a>
        </div>

        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-close-others="false" data-delay="0" data-hover=
                            "dropdown" data-toggle="dropdown" href="#">O nás<i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="history.php">História</a>
                        </li>
                        <li>
                            <a href="management.php">Vedenie ústavu</a>
                        </li>

                        <li class="dropdown-submenu">
                            <a href="#" tabindex="-1">Oddelenia</a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-submenu"></li>

                                <li>
                                    <a href="department_oamm.php">Oddelenie aplikovanej mechaniky a mechatroniky
                                        (OAMM)</a>
                                </li>

                                <li>
                                    <a href="department_oikr.php">Oddelenie informačných, komunikačných a riadiacich
                                        systémov (OIKR)</a>
                                </li>
                                <li>
                                    <a href="department_oemp.php">Oddelenie elektroniky, mikropočítačov a PLC systémov
                                        (OEMP)</a>
                                </li>

                                <li>
                                    <a href="department_oeap.php">Oddelenie E-mobility, automatizácie a pohonov
                                        (OEAP)</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="pracovnici.php">Pracovníci</a>
                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-close-others="false" data-delay="0" data-hover=
                            "dropdown" data-toggle="dropdown" href="#">Štúdium<i class="fa fa-angle-down"></i>
                    </a>

                    <ul class="dropdown-menu">
                        <li class="dropdown-submenu">
                            <a href="#" tabindex="-1">Pre uchádzačov o štúdium</a>

                            <ul class="dropdown-menu">
                                <li class="dropdown-submenu"></li>

                                <li>
                                    <a href="applicants-bachelor.php">Bakalárske štúdium</a>
                                </li>

                                <li>
                                    <a href="applicants-master.php">Inžinierske štúdium</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a href="#" tabindex="-1">Bakalárske štúdium</a>

                            <ul class="dropdown-menu">
                                <li class="dropdown-submenu"></li>

                                <li>
                                    <a href="bachelor-info.html">Všeobecné informácie</a>
                                </li>

                                <li class="dropdown-submenu">
                                    <a href="#">Bakalárske práce</a>

                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="bachelor-instructions.php">Pokyny</a>
                                        </li>

                                        <li>
                                            <a href="bachelor-thesis.html">Voľné témy</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li class="dropdown-submenu">
                            <a href="#" tabindex="-1">Inžinierske štúdium</a>

                            <ul class="dropdown-menu">
                                <li class="dropdown-submenu"></li>

                                <li>
                                    <a href="master-info.php">Všeobecné informácie</a>
                                </li>

                                <li class="dropdown-submenu">
                                    <a href="#">Diplomové práce</a>

                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="master-instructions.php">Pokyny</a>
                                        </li>

                                        <li>
                                            <a href="master-thesis.php">Voľné témy</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="doctor-info.php">Doktorandské štúdium</a>
                        </li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-close-others="false" data-delay="0" data-hover=
                            "dropdown" data-toggle="dropdown" href="#">Výskum<i class="fa fa-angle-down"></i>
                    </a>

                    <ul class="dropdown-menu">
                        <li>
                            <a href="vyskum-projekty.php">Projekty</a>
                        </li>

                        <li class="dropdown-submenu">
                            <a href="#" tabindex="-1">Výskumné oblasti</a>

                            <ul class="dropdown-menu">
                                <li class="dropdown-submenu"></li>

                                <li>
                                    <a href="vyskum-motokara.php">Elektrická motokára</a>
                                </li>

                                <li>
                                    <a href="vyskum-vozidlo.php">Autonómne vozidlo 6×6</a>
                                </li>
                                <li>
                                    <a href="vyskum-kocka.php">3D LED kocka</a>
                                </li>

                                <li>
                                    <a href="vyskum-biomechanika.php">Biomechatronika</a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </li>

                <li>
                    <a href="aktuality.php">Aktuality</a>
                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-close-others="false" data-delay="0" data-hover=
                            "dropdown" data-toggle="dropdown" href="#">Aktivity<i class="fa fa-angle-down"></i>
                    </a>

                    <ul class="dropdown-menu">
                        <li>
                            <a href="photo-galery.php">Fotogaléria</a>
                        </li>
                        <li>
                            <a href="video-galery.php">Videá</a>
                        </li>
                        <li>
                            <a href="media.php">Média</a>
                        </li>

                        <li class="dropdown-submenu">
                            <a href="#" tabindex="-1">Naše tématické web stránky</a>

                            <ul class="dropdown-menu">
                                <li class="dropdown-submenu"></li>

                                <li>
                                    <a href="http://www.e-mobilita.fei.stuba.sk">Elektromobilita</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="contact.php">Kontakt</a>
                </li>

                <li>
                    <a href="login.php">Intranet</a>
                </li>

            </ul>
        </div>
    </div>
</header>
<!--header end-->

<div id="sequence-theme">
    <div id="sequence">

        <ul class="sequence-canvas">
            <li class="animate-in">
                <div class="intro">
                    <h2>
                        MULTIMÉDIÁ A MOBILNÉ PLATFORMY
                    </h2>
                </div>
                <img class="iphone" src="img/fei/android.jpg" alt="iPhone4"/>
                <img class="iphone-shadow" src="img/seq-slider/iphone-shadow.png" alt=""/>
            </li>
            <li>
                <img class="ipad" src="img/fei/IoT.jpg" alt="iPad"/>
                <div class="slide2">
                    <h2>
                        "INTERNET OF THINGS" V MECHATRONIKE
                    </h2>
                </div>
                <img class="ipad-shadow" src="img/seq-slider/ipad-shadow.png" alt=""/>
            </li>
            <li>
                <div class="slide3">
                    <h2>
                        VYUŽITIE VIRTUÁLNEJ REALITY V PRIEMYSLE
                    </h2>
                </div>
                <img class="iphone2" src="img/fei/vr1.jpg" alt="iPhone4"/>
                <img class="iphone2-shadow" src="img/seq-slider/iphone-shadow.png" alt=""/>
                <img class="iphone3" src="img/fei/vr1.jpg" alt="iPhone4"/>
                <img class="iphone3-shadow" src="img/seq-slider/iphone-shadow.png" alt=""/>
                <img class="iphone4" src="img/fei/vr1.jpg" alt="iPhone4"/>
                <img class="iphone4-shadow" src="img/seq-slider/iphone-shadow.png" alt=""/>
            </li>
        </ul>

    </div>
</div>

<!--feature start-->
<div class="bg-lg">
    <div class="container">
        <div class="row mar-b-50">
            <div class="col-md-12">
                <div class="text-center feature-head wow fadeInDown">
                    <h1 class="">
                        Vitajte na stránkach Ústavu automobilovej mechatroniky FEI STU
                    </h1>

                </div>


                <div class="feature-box">
                    <div class="col-md-4 col-sm-4 text-center wow fadeInUp">
                        <div class="feature-box-heading">
                            <em>
                                <img src="img/icons/mechanics.png" alt="" width="100" height="100">

                            </em>
                            <h4>
                                <b>APLIKÁCIE TAKMER VŠADE</b>
                            </h4>
                        </div>
                        <p class="text-center">
                            Mechatronika je veľmi komplexná so širokým spektrom aplikácií: automobilový, letecký
                            priemysel, farmaceutický priemysel, biotechnológie, energetika, vrtné plošiny, technika pre
                            domácnosť, inteligentné domy a mnohé iné oblasti vyžadujúce multidisciplinárne technické
                            vedomosti.
                        </p>
                    </div>
                    <div class="col-md-4 col-sm-4 text-center wow fadeInUp">
                        <div class="feature-box-heading">
                            <em>
                                <img src="img/icons/trophy.png" alt="" width="100" height="100">
                            </em>
                            <h4>
                                <b>BUDEŠ PROFESIONÁL</b>
                            </h4>
                        </div>
                        <p class="text-center">
                            Mechatronika umožňuje rýchlu a efektívnu tvorbu nových produktov a aplikácií. Patrí medzi
                            priority vlády Slovenskej republiky. Ide o moderný trend inžinierstva 21. storočia.
                            Absolventi – mechatronici sú dnes žiadaní na Slovensku aj v celom svete.
                        </p>
                    </div>
                    <div class="col-md-4 col-sm-4 text-center wow fadeInUp">
                        <div class="feature-box-heading">
                            <em>
                                <img src="img/icons/puzzle.png" alt="" width="100" height="100">
                            </em>
                            <h4>
                                <b>UČENIE SA EXPERIMENTOVANÍM</b>
                            </h4>
                        </div>
                        <p class="text-center">
                            V našich predmetoch je kladený veľký dôraz na prácu s reálnymi zariadeniami. Snažíme sa, aby
                            študenti mali čo najviac praktických zručností. V rámci bakalárskych a diplomových projektov
                            môžeš priamo prispieť k riešeniu problémov, ktoré si žiada prax.
                        </p>
                    </div>
                </div>

                <!--feature end-->
            </div>
        </div>
    </div>
</div>


<div class="container">

    <div class="row mar-b-60">
        <div class="col-lg-6">
            <!--tab start-->
            <section class="tab wow fadeInLeft">
                <div class="col-lg-7" id="skillz">
                    <h3 class="skills">
                        Hrubá mzda absolventov
                    </h3>

                    <div class="skill_bar">
                        <div class="skill_bar_progress skill_one">
                            <p>
                                Programátor 1500 €
                            </p>
                        </div>
                    </div>

                    <div class="skill_bar">
                        <div class="skill_bar_progress skill_two">
                            <p>
                                CATIA konštruktér 1090 €
                            </p>
                        </div>
                    </div>

                    <div class="skill_bar">
                        <div class="skill_bar_progress skill_three">
                            <p>
                                Vedúci predajne 800 €
                            </p>
                        </div>
                    </div>

                    <div class="skill_bar">
                        <div class="skill_bar_progress skill_four">
                            <p>
                                SBS 530€
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <!--tab end-->
        </div>
        <div class="col-lg-6">
            <!--testimonial start-->
            <div class="about-testimonial boxed-style about-flexslider ">
                <section class="slider wow fadeInRight">
                    <div class="flexslider">
                        <ul class="slides about-flex-slides">
                            <li>
                                <div class="about-testimonial-image ">
                                    <img alt="" src="img/staff_photo/rabek.jpg">
                                </div>
                                <a class="about-testimonial-author" href="#">
                                    Ing. Matej Rábek
                                </a>
                                <span class="about-testimonial-company">Doktorand </span>
                                <div class="about-testimonial-content">
                                    <p class="about-testimonial-quote">
                                        Oddelenie informačných, komunikačných a riadiacich systémov <br>
                                        Miestnosť: D 103 <br>
                                        Klapka: 628
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="about-testimonial-image ">
                                    <img alt="" src="img/staff_photo/zakova.jpg">
                                </div>
                                <a class="about-testimonial-author" href="#">
                                    Doc. Ing. Katarína Žáková, PhD.
                                </a>
                                <span class="about-testimonial-company">Zástupkyňa vedúcej oddelenia OIKR</span>
                                <div class="about-testimonial-content">
                                    <p class="about-testimonial-quote">
                                        Oddelenie informačných, komunikačných a riadiacich systémov <br>
                                        Miestnosť: D 119 <br>
                                        Klapka: 742
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="about-testimonial-image ">
                                    <img alt="" src="img/staff_photo/kocur.jpg">
                                </div>
                                <a class="about-testimonial-author" href="#">
                                    Ing. Michal Kocúr, PhD.
                                </a>
                                <div class="about-testimonial-content">
                                    <p class="about-testimonial-quote">
                                        Oddelenie E-mobility, automatizácie a pohonov <br>
                                        Miestnosť: D 104 <br>
                                        Klapka: 686
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </section>
            </div>
            <!--testimonial end-->
        </div>
    </div>
</div>


<!--recent work start-->
<div class="bg-lg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 recent">
                <h3 class="recent-work">
                    Posledné novinky z nášho blogu
                </h3>
                <div id="owl-demo" class="owl-carousel owl-theme wow fadeIn">

                    <div class="item view view-tenth">
                        <img src="img/works/img8.jpg" alt="work Image">
                        <div class="mask">
                            <a href="blog-detail.html" class="info" data-toggle="tooltip" data-placement="top"
                               title="Details">
                                <i class="fa fa-link">
                                </i>
                            </a>
                        </div>
                    </div>
                    <div class="item view view-tenth">
                        <img src="img/works/img9.jpg" alt="work Image">
                        <div class="mask">
                            <a href="blog-detail.html" class="info" data-toggle="tooltip" data-placement="top"
                               title="Details">
                                <i class="fa fa-link">
                                </i>
                            </a>
                        </div>
                    </div>
                    <div class="item view view-tenth">
                        <img src="img/works/img10.jpg" alt="work Image">
                        <div class="mask">
                            <a href="blog-detail.html" class="info" data-toggle="tooltip" data-placement="top"
                               title="Details">
                                <i class="fa fa-link">
                                </i>
                            </a>
                        </div>
                    </div>
                    <div class="item view view-tenth">
                        <img src="img/works/img11.jpg" alt="work Image">
                        <div class="mask">
                            <a href="blog-detail.html" class="info" data-toggle="tooltip" data-placement="top"
                               title="Details">
                                <i class="fa fa-link">
                                </i>
                            </a>
                        </div>
                    </div>
                    <div class="item view view-tenth">
                        <img src="img/works/img12.jpg" alt="work Image">
                        <div class="mask">
                            <a href="blog-detail.html" class="info" data-toggle="tooltip" data-placement="top"
                               title="Details">
                                <i class="fa fa-link">
                                </i>
                            </a>
                        </div>
                    </div>
                    <div class="item view view-tenth">
                        <img src="img/works/img13.jpg" alt="work Image">
                        <div class="mask">
                            <a href="blog-detail.html" class="info" data-toggle="tooltip" data-placement="top"
                               title="Details">
                                <i class="fa fa-link">
                                </i>
                            </a>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <!--recent work end-->
</div>


<div class="hr">
    <span class="hr-inner"></span>
</div>

<div class="container">
    <div class="row mar-b-50 our-clients">
        <div class="col-md-3">
            <h2>
                Spolupracujeme
            </h2>

        </div>
        <div class="col-md-9">
            <div class="outside">
                <p>
              <span id="slider-prev">

              </span>
                    |

                    <span id="slider-next">
              </span>
                </p>
            </div>

            <ul class="bxslider1 clients-list">
                <li>
                    <a href="http://www.peugeot.sk/">
                        <img src="img/sponsors/peugeot.png" alt=""/>

                        <img src="img/sponsors/peugeot.png" class="color-img" alt=""/>
                    </a>
                </li>
                <li>
                    <a href="http://sk.volkswagen.sk/sk.html">
                        <img src="img/sponsors/vw.png" alt=""/>

                        <img src="img/sponsors/vw.png" class="color-img" alt=""/>
                    </a>
                </li>
                <li>
                    <a href="http://www.atlascopco.sk/sk-sk">
                        <img src="img/sponsors/adas.png" alt=""/>

                        <img src="img/sponsors/adas.png" class="color-img" alt=""/>
                    </a>
                </li>
                <li>
                    <a href="http://www.nadaciatatrabanky.sk">
                        <img src="img/sponsors/tb.png" alt=""/>

                        <img src="img/sponsors/tb.png" class="color-img" alt=""/>
                    </a>
                </li>
                <li>
                    <a href="https://www.websupport.sk/">
                        <img src="img/sponsors/websupport.png" alt=""/>

                        <img src="img/sponsors/websupport.png" class="color-img" alt=""/>
                    </a>
                </li>
                <li>
                    <a href="http://www.microstep.sk/">
                        <img src="img/sponsors/microstep.png" alt=""/>

                        <img src="img/sponsors/microstep.png" class="color-img" alt=""/>
                    </a>
                </li>
            </ul>


        </div>
    </div>
    <!-- END CLIENTS -->
</div>


<!--container end-->

<!--footer start-->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-3">
                <div class="text-footer wow fadeInUp" data-wow-duration="2s" data-wow-delay=".1s">
                    <h1>
                        O nás
                    </h1>
                    <p>
                        Ústav automobilovej mechatroniky bol zriadený k 1. júlu 2013 ako pedagogické a vedecko-výskumné
                        pracovisko FEI STU. Zriadenie ústavu bolo logickým vyústením zámerov vedenia FEI STU vytvoriť
                        taký ústav, ktorý by zohľadňoval súčasné požiadavky a potreby automobilového priemyslu.
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-3 address wow fadeInUp" data-wow-duration="2s" data-wow-delay=".2s">
                <h1>
                    Kontakt
                </h1>
                <address>
                    <p><i class="fa fa-home pr-10"></i>Fakulta elektrotechniky a informatiky</p>
                    <p><i class="fa fa-globe pr-10"></i>Ilkovičova 3, 812 19 Bratislava</p>
                    <p><i class="fa fa-mobile pr-10"></i>+421 260 291 598</p>
                    <p><i class="fa fa-envelope pr-10"></i><a href="mailto:uamt.fei@gmail.com">uamt.fei@gmail.com</a>
                    </p>
                </address>
            </div>

            <div class="col-lg-3 col-sm-3">
                <div class="page-footer wow fadeInUp" data-wow-duration="2s" data-wow-delay=".3s">
                    <h1>
                        Užitočné stránky
                    </h1>
                    <ul class="page-footer-list">
                        <li>
                            <i class="fa fa-angle-right"></i>
                            <a href="http://is.stuba.sk">AIS STU</a>
                        </li>
                        <li>
                            <i class="fa fa-angle-right"></i>
                            <a href="http://aladin.elf.stuba.sk/rozvrh">Rozvrh hodín FEI</a>
                        </li>
                        <li>
                            <i class="fa fa-angle-right"></i>
                            <a href="http://elearn.elf.stuba.sk/moodle">Moodle FEI</a>
                        </li>
                        <li>
                            <i class="fa fa-angle-right"></i>
                            <a href="http://www.sski.sk/webstranka">SSKI</a>
                        </li>
                        <li>
                            <i class="fa fa-angle-right"></i>
                            <a href="https://www.jedalen.stuba.sk/WebKredit">Jedáleň STU</a>
                        </li>
                        <li>
                            <i class="fa fa-angle-right"></i>
                            <a href="https://webmail.stuba.sk">Webmail STU</a>
                        </li>
                        <li>
                            <i class="fa fa-angle-right"></i>
                            <a href="https://kis.cvt.stuba.sk/i3/epcareports/epcarep.csp?ictx=stu&language=1">Evidencia
                                publikácií STU</a>
                        </li>
                        <li>
                            <i class="fa fa-angle-right"></i>
                            <a href="http://okocasopis.sk">Časopis OKO</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-3 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".4s">
                <h1>POZRI SI VIDEO :)</h1>
                <iframe src="//www.youtube.com/embed/XTjNQoEZmbk" frameborder="0" allowfullscreen=""></iframe>
            </div>
        </div>
    </div>
</footer>
<!-- footer end -->
<!--small footer start -->
<footer class="footer-small">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-6 pull-right">
                <ul class="social-link-footer list-unstyled">
                    <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".1s"><a
                            href="https://www.facebook.com/UAMTFEISTU"><i class="fa fa-facebook"></i></a></li>
                    <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".2s"><a
                            href="https://www.youtube.com/channel/UCo3WP2kC0AVpQMIiJR79TdA"><i
                            class="fa fa-youtube"></i></a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <div class="copyright">
                    <p>&copy; Copyright - 2017</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--small footer end-->

<!-- js placed at the end of the document so the pages load faster
<script src="js/jquery.js"></script>-->
<script src="js/jquery-1.8.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/hover-dropdown.js"></script>
<script defer src="js/jquery.flexslider.js"></script>
<script type="text/javascript" src="assets/bxslider/jquery.bxslider.js"></script>

<script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>
<script src="js/wow.min.js"></script>
<script src="assets/owlcarousel/owl.carousel.js"></script>

<script src="js/jquery.easing.min.js"></script>
<script src="js/link-hover.js"></script>
<script src="js/superfish.js"></script>


<!--common script for all pages-->
<script src="js/common-scripts.js"></script>


<!-- Sequence Moder -slider js -->
<script src="js/seq-slider/jquery.sequence-min.js"></script>
<!--<script src="js/slider/sequencejs-options.modern-slide-in.js"></script>-->
<script src="js/seq-slider/sequencejs-options.apple-style.js"></script>
<!-- end of sequence slider js-->

<script type="text/javascript">
    jQuery(document).ready(function () {


        $('.bxslider1').bxSlider({
            minSlides: 5,
            maxSlides: 6,
            slideWidth: 360,
            slideMargin: 2,
            moveSlides: 1,
            responsive: true,
            nextSelector: '#slider-next',
            prevSelector: '#slider-prev',
            nextText: ' →',
            prevText: '← '
        });

    });


</script>
<script>
    $('a.info').tooltip();
    $(window).load(function () {
        $('.flexslider').flexslider({
            animation: "slide",
            start: function (slider) {
                $('body').removeClass('loading');
            }
        });
    });


    $(document).ready(function () {

        $("#owl-demo").owlCarousel({

            items: 4

        });

    });

    jQuery(document).ready(function () {
        jQuery('ul.superfish').superfish();
    });

    new WOW().init();

    $(window).scroll(function () {
            $('#skillz').each(function () {
                    var imagePos = $(this).offset().top;
                    var viewportheight = window.innerHeight;

                    var topOfWindow = $(window).scrollTop();
                    if (imagePos < topOfWindow + viewportheight) {
                        $('.skill_bar').fadeIn('slow');
                        $('.skill_one').animate({
                                width: '90%'
                            }
                            , 2500);
                        $('.skill_two').animate({
                                width: '75%'
                            }
                            , 2000);
                        $('.skill_three').animate({
                                width: '55%'
                            }
                            , 1000);
                        $('.skill_four').animate({
                                width: '40%'
                            }
                            , 1000);
                        $('.skill_bar_progress p').fadeIn('slow', function () {

                            }
                        );
                    }
                }
            );
        }
    );


</script>
</body>
</html>
