<?php 
	session_start();
	
	if(isset($_GET['lang'])){
		if(strcmp($_GET['lang'] , "sk") == 0 || strcmp($_GET['lang'] , "en") == 0)
			$_SESSION['lang'] = $_GET['lang'];
		else
			$_SESSION['lang'] = "sk";
		

		header("Location: bachelor-info.php");
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
        Ústav automobilovej mechatroniky FEI STU | Bakalárske štúdium | Všeobecné informácie
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
                <h1>Bakalárske štúdium - Všeobecné informácie</h1>
            </div>
            <div class="col-lg-8 col-sm-8">
                <ol class="breadcrumb pull-right">
                    <li><a href="index.php">Domov</a></li>
                    <li class="active">Bakalárske štúdium - Všeobecné informácie</li>
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
                <h1 class="wow fadeIn">Bakalárske štúdium - Všeobecné informácie</h1>

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
                <h2>Harmonogram bakalárskeho štúdia</h2>
                <h2>Zimný semester</h2>
                <h4>Začiatok výučby v semestri 19. 09. 2016</h4>
                <h4>Prázdniny 31. 10. 2016, 18. 11. 2016, 23. 12. 2016 – 01. 01. 2017</h4>
                <h4>Začiatok skúškového obdobia 02. 01. 2017</h4>
                <h4>Ukončenie skúškového obdobia 12. 02. 2017</h4>
                <h2>Letný semester</h2>
                <h4>Začiatok výučby v semestri 13. 02. 2017</h4>
                <h4>Prázdniny 14. 04. 2017 – 18. 04. 2017</h4>
                <h4>Začiatok skúškového obdobia 22. 05. 2017</h4>
                <h4>Ukončenie skúškového obdobia 02. 07. 2017</h4>
                <h4>Záver bakalárskeho štúdia</h4>
                <h4>Zadanie záverečnej práce 13. 02. 2017</h4>
                <h4>Odovzdanie záverečnej práce 19. 05. 2017</h4>
                <h4>Štátne skúšky bakalárskeho štúdia 06. 07. 2017 – 07. 07. 2017</h4>
                <h4>Promócie absolventov bakalárskeho štúdia 14. 09. 2017</h4>
                </p>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-4 col-md-offset-4 career-contact">
                <p class="text-center wow pulse"><a href="./files/klasifikacna_stupnica.pdf"
                                                    download="klasifikacna_stupnica.pdf">Klasifikačná stupnica</a></p>
            </div>
            <div class="col-md-4 col-md-offset-4 career-contact">
                <p class="text-center wow pulse"><a href="./files/studijny_poriadok.pdf"
                                                    download="studijny_poriadok.pdf">Študijný poriadok</a></p>
            </div>
            <div class="col-md-4 col-md-offset-4 career-contact">
                <p class="text-center wow pulse"><a href="./files/SP20162017b.pdf" download="SP20162017b.pdf">Kompletný
                        študijný plán pre akademický rok 2016-2017</a></p>
            </div>
        </div>
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