<?php
require_once "src/userController.php";
require('cfg/config.php');
session_start();
function getRole() {
  return $_SESSION['user']->roles;
}

if (isset($_POST['titleSK']) && isset($_POST['titleEN']) && isset($_POST['folder']) && isset($_POST['user']) && isset($_POST['date'])) {
	
	$mysqli = new mysqli($CONF_DB_HOST, $CONF_DB_USER, $CONF_DB_PASS, $CONF_DB_NAME);
	if($mysqli->connect_error){
		die("Connect error" . $mysqli->connect_error);
	}
	mysqli_set_charset($mysqli,"utf8");
	
	$sql = "INSERT INTO Aktuality VALUES (NULL, '".$_POST['typ']."', '".$_POST['titleSK']."', '".$_POST['titleEN']."', '".$_POST['folder']."', '".$_POST['popisSK']."', '".$_POST['popisEN']."', '".$_POST['date']."', '".$_POST['user']."')";
	$result = $mysqli->query($sql);
	


//-----------newsletter------------//
	
	$sql = "SELECT * FROM Newsletter WHERE skOdber = '1'";
	$result = $mysqli->query($sql);
	
	if (mysqli_num_rows($result) > 0) {
		//$to = "ndrj13@gmail.com";
		$subject = "Aktualita ".$_POST['titleSK'];
		$message = "Bola pridaná nová aktualita ".$_POST['titleSK']." na Ústav automobilovej mechatroniky STU. Viete si ju pozrieť na: http://147.175.98.124/FINAL/aktuality.php .";
		$from = 'FEIM@email.com';
			while($row = mysqli_fetch_assoc($result)) {
				$to = $row["Email"];
				mail($to,$subject,$message);
			}
	}
	
	$sql = "SELECT * FROM Newsletter WHERE enOdber = '1'";
	$result = $mysqli->query($sql);
	
	if (mysqli_num_rows($result) > 0) {
		$subject = "Actuality ".$_POST['titleEN'];
		$message = "New actuality ".$_POST['titleEN']." was added to Ústav automobilovej mechatroniky STU. You can view it on: http://147.175.98.124/FINAL/aktuality.php .";
		$from = 'FEIM@email.com';
			while($row = mysqli_fetch_assoc($result)) {
				$to = $row["Email"];
				mail($to,$subject,$message);
			}
	}
	
	$mysqli->close();
}
?>

<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="FEI, STU, mechatronika">
    <meta name="description" content="Ústav automobilovej mechatroniky FEI STU">

    <title>
        Ústav automobilovej mechatroniky FEI STU | Intranet
    </title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/theme.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <link href="css/sidebar.css" rel="stylesheet">
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
                                    <a href="bachelor-info.php">Všeobecné informácie</a>
                                </li>

                                <li class="dropdown-submenu">
                                    <a href="#">Bakalárske práce</a>

                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="bachelor-instructions.php">Pokyny</a>
                                        </li>

                                        <li>
                                            <a href="bachelor-thesis.php">Voľné témy</a>
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

<!--breadcrumbs start-->
<div class="breadcrumbs">
    <span style="font-size:30px;cursor:pointer; margin-left: 20px" onclick="openNav()">&#9776; Menu</span>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-4">
                <h1>Intranet</h1>
            </div>
            <div class="col-lg-8 col-sm-8">
                <ol class="breadcrumb pull-right">
                    <li><a href="index.php">Domov</a></li>
                    <li class="active">Intranet</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs end-->

<!-- left menu start -->
<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="intranet-users.php">Používatelia</a>
    <a href="intranet-photos.php">Fotky</a>
    <a href="intranet-video.php">Videá</a>
    <a href="intranet-actuality.php">Aktuality</a>
    <a href="intranet-dochadzka.php">Dochádzka</a>
    <a href="intranet-pedagogika.php">Pedagogika</a>
    <a href="intranet-doktorandi.php">Doktorandi</a>
    <a href="intranet-publikacie.php">Publikacie</a>
    <a href="intranet-sluzobne-cesty.php">Služobné cesty</a>
    <a href="intranet-nakupy.php">Nákupy</a>
    <a href="intranet-tasks.php">Rozdelenie úloh</a>
</div>
<!-- left menu end -->

<!--container start-->
<div class="white-bg">

    <!-- career -->
    <div class="container career-inner">
        <div class="row">
            <div class="col-md-12 career-head">
                <h1 class="wow fadeIn">Pridávanie aktualít</h1>

            </div>
        </div>
        <hr>
		
		<div class='row'>
			<?php

            if (getRole() != null) {
				
			$role = getRole()[0];
			}
            else  $role = "user";
			if (isAdmin() || isReporter()) {
				echo "<div class='bs-example'>";
			}
			else {
				echo "<h1>Práva pridávať aktuality má len reportér a admin.</h1>";
				echo "<div class='bs-example' style='visibility: hidden;'>";
			}
			?>
                <form role="form" action="intranet-actuality.php" method="post" enctype="multipart/form-data">
					<div class="form-group">
                        <label for="titleSKInput">Vyber typ</label>
						<br>
                        <select name="typ" id="TypInput" class="form-control">
							<option value='1' id='1'> Propagácia</option>
							<option value='2' id='2'> Oznamy</option>
							<option value='3' id='3'> Zo života ústavu</option>
						</select>
                    </div>
                    <div class="form-group">
                        <label for="titleSKInput">Titulok - slovensky</label>
                        <input type="text" name="titleSK" class="form-control" id="titleSKInput"
                               placeholder="Zadajte slovenský titulok">
                    </div>
                    <div class="form-group">
                        <label for="titleENInput">Titulok - anglicky</label>
                        <input type="text" name="titleEN" class="form-control" id="titleENInput"
                               placeholder="Zadajte anglický titulok">
                    </div>
                    <div class="form-group">
                        <label for="dateInput">Dátum</label>
                        <input type="date" name="date" class="form-control" id="dateInput" placeholder="Dátum" >
                    </div>
					<div class="form-group">
                        <label for="titleENInput">Popis - slovenksy</label>
                        <input type="text" name="popisSK" class="form-control" id="popisSKInput"
                               placeholder="Zadajte slovenksý popis">
                    </div>
					<div class="form-group">
                        <label for="titleENInput">Popis - anglicky</label>
                        <input type="text" name="popisEN" class="form-control" id="popisENInput"
                               placeholder="Zadajte anglický popis">
                    </div>
					<div class="form-group">
                        <label for="dateInput">Pridal užívateľ</label>
                        <input type="text" class="form-control" name="user" id="userInput" placeholder="Zadajte užívateľa" >
                    </div>
					<div class="form-group">
                        <label for="folderInput">Cesta k obrázku</label>
                        <input type="text" name="folder" class="form-control" id="folderInput"
                               placeholder="Zadajte cestu k obrázku" >
                    </div>
                    
                    <button type="submit" class="btn btn-default">Vložiť</button>
                </form>
            </div>
        </div>
    </div>
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

    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
        document.getElementById("main").style.marginLeft = "250px";
        document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("main").style.marginLeft = "0";
        document.body.style.backgroundColor = "white";
    }


    $(document).ready(function () {

        $("#owl-demo").owlCarousel({

            items: 4

        });

    });

    jQuery(document).ready(function () {
        jQuery('ul.superfish').superfish();
    });

    new WOW().init();


</script>
</body>
</html>
