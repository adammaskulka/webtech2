<?php 
	session_start();
	
	if(isset($_GET['lang'])){
		if(strcmp($_GET['lang'] , "sk") == 0 || strcmp($_GET['lang'] , "en") == 0)
			$_SESSION['lang'] = $_GET['lang'];
		else
			$_SESSION['lang'] = "sk";
		

		header("Location: management.php");
		exit();
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
        Ústav automobilovej mechatroniky FEI STU | Vedenie ústavu
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
<?php
	if(strcmp($_SESSION['lang'],'en') == 0)
		echo '
<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-4">
                <h1>Head of the Institute</h1>
            </div>
            <div class="col-lg-8 col-sm-8">
                <ol class="breadcrumb pull-right">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">Head of the Institute</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs end-->

<div class="container" id="tourpackages-carousel">

    <div class="row">
        Some english text
        <!-- End row -->

    </div>

    <!-- End container -->
</div>';

else echo '



<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-4">
                <h1>Vedenie ústavu</h1>
            </div>
            <div class="col-lg-8 col-sm-8">
                <ol class="breadcrumb pull-right">
                    <li><a href="index.php">Domov</a></li>
                    <li class="active">Vedenie ústavu</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs end-->

<div class="container" id="tourpackages-carousel">

    <div class="row">
        <div class="profile">
            <h2>
                Vedenie ústavu
            </h2>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="thumbnail wow fadeInUp" data-wow-delay=".1s">
                    <img src="img/staff_photo/huba.jpg" alt="">
                    <div class="caption">
                        <h4>
                            prof. Ing. Mikuláš Huba, PhD.
                        </h4>
                        <p>
                            Riaditeľ ústavu
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="thumbnail wow fadeInUp" data-wow-delay=".3s">
                    <img src="img/staff_photo/murin.jpg" alt="">
                    <div class="caption">
                        <h4>
                            prof. Ing. Justín Murín, DrSc.
                        </h4>
                        <p>
                            Zástupca riaditeľa ústavu pre rozvoj ústavu
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="thumbnail wow fadeInUp" data-wow-delay=".5s">
                    <img src="img/staff_photo/kozak.jpg" alt="">
                    <div class="caption">
                        <h4>
                            prof. Ing. Štefan Kozák, PhD.
                        </h4>
                        <p>
                            Zástupca riaditeľa ústavu pre rozvoj ústavu
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="thumbnail wow fadeInUp" data-wow-delay=".7s">
                    <img src="img/staff_photo/zakova.jpg" alt="">
                    <div class="caption">
                        <h4>
                            doc. Ing. Katarína Žáková, PhD.
                        </h4>
                        <p>
                            Zástupca riaditeľa ústavu pre pedagogickú činnosť
                        </p>
                    </div>
                </div>
            </div>

        </div>
        <!-- End row -->

    </div>

    <!-- End container -->
</div>


<!--container end-->

<<!--container start-->
<div class="white-bg">
    <div class="container career-inner">
        <div class="row">
            <div class="hiring">
                <h2 class="wow flipInX">
                    ODDELENIA ÚSTAVU AUTOMOBILOVEJ MECHATRONIKY
                </h2>
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
                <div class="col-lg-6 col-sm-6 about-hiring">
                    <div class="icon-wrap ico-bg round-five wow zoomIn" data-wow-duration="1s" data-wow-delay=".3s">
                        <i class="fa fa-user">
                        </i>
                    </div>
                    <div class="content">
                        <h3 class="title wow flipInX">
                            Oddelenie informačných, komunikačných a riadiacich systémov (OIKR)
                        </h3>
                        <p>
                            Vedúci: doc. Ing. Danica Rosinová, PhD. <br>
                            Zástupca: doc. Ing. Katarína Žáková, PhD.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 about-hiring">
                    <div class="icon-wrap ico-bg round-five wow zoomIn" data-wow-duration="1s" data-wow-delay=".5s">
                        <i class="fa fa-user">
                        </i>
                    </div>
                    <div class="content">
                        <h3 class="title wow flipInX">
                            Oddelenie elektroniky, mikropočítačov a PLC systémov (OEMP)
                        </h3>
                        <p>
                            Vedúci: prof. Ing. Štefan Kozák, PhD. <br>
                            Zástupca: Ing. Richard Balogh, PhD.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 about-hiring">
                    <div class="icon-wrap ico-bg round-five wow zoomIn" data-wow-duration="1s" data-wow-delay=".7s">
                        <i class="fa fa-user">
                        </i>
                    </div>
                    <div class="content">
                        <h3 class="title wow flipInX">
                            Oddelenie E-mobility, automatizácie a pohonov (OEAP)
                        </h3>
                        <p>
                            Vedúci: prof. Ing. Mikuláš Huba, PhD. <br>
                            Zástupca: prof. Ing. Viktor Ferencey, CSc.
                        </p>
                    </div>
                </div>

            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-4 col-md-offset-4 career-contact">
                <p class="text-center wow pulse"><a href="./files/organizacny_poriadok.pdf"
                                                    download="organizacny_poriadok.pdf">Organizačný poriadok Ústavu
                    automobilovej mechatroniky</a></p>

            </div>
        </div>

    </div>
</div>';?>
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


</script>
</body>
</html>