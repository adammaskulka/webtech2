<?php 
	session_start();
	
	if(isset($_GET['lang'])){
		$_SESSION['lang'] = $_GET['lang'];
	}
	
	if(!isset($_SESSION['lang']))  
		$_SESSION['lang'] = 'sk';

?>
<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="FEI, STU, mechatronika">
    <meta name="description" content="Ústav automobilovej mechatroniky FEI STU">

    <title>
        Ústav automobilovej mechatroniky FEI STU | Pre uchádzačov o štúdium | Inžinierske štúdium
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

<body>
<!--header start-->
<?php
	if(strcmp($_SESSION['lang'],'en') == 0)
		include('header-en.php'); 
	if(strcmp($_SESSION['lang'],'sk') == 0)
		include('header-sk.php'); 
?>
<!--header end-->

<!--breadcrumbs start-->
<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-4">
                <h1>Pre uchádzačov o štúdium - Inžinierske štúdium</h1>
            </div>
            <div class="col-lg-8 col-sm-8">
                <ol class="breadcrumb pull-right">
                    <li><a href="index.php">Domov</a></li>
                    <li class="active">Pre uchádzačov o štúdium - Inžinierske štúdium</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs end-->

<!--container start-->
<div class="white-bg">

    <!-- career -->
    <div class="container career-inner">
        <div class="row">
            <div class="col-md-12 career-head">
                <h1 class="wow fadeIn">Pre uchádzačov o štúdium - Inžinierske štúdium</h1>

            </div>
        </div>
        <hr>
        <div class="row">

            <div class="col-lg-6 col-sm-6 about-hiring">
                <div class="icon-wrap ico-bg round-five wow zoomIn" data-wow-duration="1s" data-wow-delay=".1s">
                    <i class="fa fa-user">
                    </i>
                </div>
                <div class="content">
                    <h3 class="title wow flipInX">
                        Oddelenie aplikovanej mechaniky a mechatroniky (OAMM)
                    </h3>
                    <p>
                        Vedúci: prof. Ing. Justín Murín, DrSc.<br>
                        Zástupca: doc. Ing. Vladimír Kutiš, PhD.
                    </p>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12 wow fadeIn">
                <p class="align-left">
                <h2>Prečo študovať na našom ústave?</h2>
                <ul>
                    <li>možnosť získať znalosti, ktoré sú implementovateľné v praxi,</li>
                    <li>menšie skupiny študentov,</li>
                    <li>možnosť dohodnúť si tému pre diplomovku s vybraným pedagógom na základe vlastných preferencií,
                    </li>
                    <li>možnosť riešiť diplomovú prácu a teda to, čo každého zaujíma, až 3 semestre,</li>
                    <li>pre vynikajúcich študentov možnosť študovať dištančnou metódou,</li>
                    <li>pre absolventov bakalárskeho štúdia na FEI STU odpustená prijímacia skúška,</li>
                    <li>snaha o maximálnu informovanosť študentov prostredníctvom web stránky v dostatočnom predstihu.
                    </li>
                </ul>
                <h2>Nebudem mať problémy, keď som neštudoval mechatroniku aj na bakalárskom štúdiu?</h2>
                <ul>
                    <li>Mechatronika predstavuje medziodborové štúdium, takže každý by sa tu mal nájsť. Hneď v prvom
                        semestri inžinierskeho štúdia je pre študentov, ktorí predtým neštudovali mechatroniku
                        pripravený
                        vyrovnávací predmet z oblasti automatizácie.
                    </li>
                </ul>

                <h2>Študijný program – 1. ročník</h2>
                <h3> Zimný semester</h3>
                <ul>
                    <li><b>CAE mechatronických systémov</b> - tvorba virtuálnych dynamických modelov a ich simulácia
                    </li>
                    <li><b>Metóda konečných prvkov</b> - modelovanie a analýza mechatronických prvkov a systémov</li>
                    <li><b>Optimalizácia procesov v mechatronike</b> – optimalizačné úlohy a metódy v inžinierskych
                        aplikáciách
                    </li>
                    <li><b>Vývojové programové prostredia pre mechatronické systémy</b> - programovanie mikroprocesorov
                    </li>
                    <li><b>Povinne voliteľný predmet</b></li>
                </ul>
                <h3>Letný semester</h3>
                <ul>
                    <li><b>Diplomový projekt 1</b></li>
                    <li><b>Metódy číslicového riadenia</b> – návrh regulačných obvodov pre modely mechatronických
                        systémov
                    </li>
                    <li><b>Multifyzikálne procesy v mechatronike</b> - modelovanie tepelných, termoelastických,
                        termoelektrických a piezoelektrických systémov
                    </li>
                    <li><b>Pokročilé informačné technológie</b> - klient-server aplikácie, riadenie mechatronických
                        systémov vprostredí internetu, Internet vecí (IoT), Industry 4.0
                    </li>
                    <li><b>Povinne voliteľný predmet</b></li>
                </ul>

                <h3>Možné PVP pre záujemcov o elektroniku</h3>

                <ul>
                    <li><b>Inteligentné mechatronické systémy</b> - implementácia metód výpočtovej a umelej inteligencie
                        pre mechatronické systémy
                    </li>
                    <li><b>MEMS - inteligentné senzory a aktuátory</b> - najmodernejšie senzory používané nielen v
                        automobilovompriemysle (akcelerometre, gyroskopy, CCD senzory) a spracovanie signálov vnorenými
                        mikropočítačmi
                    </li>
                </ul>

                <h3>Možné PVP pre záujemcov o automobily</h3>

                <ul>
                    <li><b>Transmisné systémy automobilov a elektromobilov</b> - prevodové mechanizmy automobilov a
                        elektromobilov
                    </li>
                    <li><b>Pohonné systémy a zdroje v elektromobiloch</b> - modelovanie a simulovanie činnosti
                        trakčného a energetického systému elektromobilu
                    </li>
                </ul>

                <h3>Možné PVP pre záujemcov o informatiku</h3>

                <ul>
                    <li><b>Inteligentné mechatronické systémy</b> - implementácia metód výpočtovej a umelej
                        inteligencie pre mechatronické systémy
                    </li>
                    <li><b>Vybrané kapitoly z automatického riadenia pre mechatroniku</b> - vyrovnávací
                        predmet z automatizácie
                    </li>
                    <li><b>MEMS - inteligentné senzory a aktuátory</b> - najmodernejšie senzory používané
                        nielen v automobilovom priemysle (akcelerometre, gyroskopy, CCD senzory) a spracovanie signálov
                        vnorenými mikropočítačmi
                    </li>
                </ul>

                <h4>Prijímacie skúšky na inžinierske štúdium 28.6.2017 o 10:00 v D124</h4>
                <h3>Prijímacia komisia</h3>
                <ul>
                    <li><b>prof. Ing. Mikuláš Huba, PhD. (predseda)</b></li>
                    <li><b>prof. Ing. Justín Murín, DrSc. (predseda)</b></li>
                    <li><b>prof. Ing. Viktor Ferencey, PhD.</b></li>
                    <li><b>prof. Ing. Štefan Kozák, PhD.</b></li>
                    <li><b>doc. Ing. Katarína Žáková, PhD.</b></li>
                </ul>
                <hr>
                <div class="row">
                    <div class="col-md-4 col-md-offset-4 career-contact">
                        <p class="text-center wow pulse"><a href="./files/SP20172018i.pdf" download="SP20172018i.pdf">Kompletný
                                študijný plán pre akademický rok 2017-2018</a></p>
                    </div>
                    <div class="col-md-4 col-md-offset-4 career-contact">
                        <p class="text-center wow pulse"><a href="http://www.mechatronika.cool">Ďalšie informácie</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <hr>

        <!-- career -->
    </div>
</div>
<!--container end-->

<!--footer start-->
<?php 
	if(strcmp($_SESSION['lang'],'en') == 0)
		include('footer-en.php'); 
	if(strcmp($_SESSION['lang'],'sk') == 0)
		include('footer-sk.php'); 
?>
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

<script>


    jQuery(document).ready(function () {
        jQuery('ul.superfish').superfish();
    });

    new WOW().init();


</script>
</body>
</html>