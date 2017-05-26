<?php 
	session_start();
	
	if(isset($_GET['lang'])){
		if(strcmp($_GET['lang'] , "sk") == 0 || strcmp($_GET['lang'] , "en") == 0)
			$_SESSION['lang'] = $_GET['lang'];
		else
			$_SESSION['lang'] = "sk";
		

		header("Location: history.php");
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
                <h1>História</h1>
            </div>
            <div class="col-lg-8 col-sm-8">
                <ol class="breadcrumb pull-right">
                    <li><a href="index.php">Domov</a></li>
                    <li class="active">História</li>
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
                <h1 class="wow fadeIn"><?php if(strcmp($_SESSION['lang'],'en') == 0){echo "History";}else{echo "História";}  ?></h1>

            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12 wow fadeIn">
			<?php if(strcmp($_SESSION['lang'],'en') == 0){echo 'The Institute of Automotive Mechatronics was established as a pedagogical and scientific research unit of the Faculty of Electrical Engineering and Informatics of STU in Bratislava on July 1, 2013.';}
			else{echo '
                <p class="align-left">Ústav automobilovej mechatroniky bol zriadený k 1. júlu 2013 ako pedagogické
                    a vedecko-výskumné pracovisko Fakulty elektrotechniky a informatiky STU v Bratislave. Zriadenie
                    ústavu Automobilovej mechatroniky bolo logickým vyústením zámerov vedenia Fakulty elektrotechniky a
                    informatiky STU v Bratislave vytvoriť taký ústav, ktorý by zohľadňoval súčasné požiadavky a potreby
                    automobilového priemyslu na Slovensku s hlavným cieľom pripravovať absolventov bakalárskeho a
                    inžinierského štúdia pre oblasť automobilovej mechatroniky.</p>
                <p class="align-left">V súčasnosti Ústav automobilovej mechatroniky zabezpečuje výskum, vývoj a
                    vzdelávanie vo viacerých oblastiach aplikovanej mechatroniky so špeciálnym dôrazom vo sfére
                    automobilovej mechatroniky a mechatronických systémov na základe integrácie a synergie mechanických,
                    elektronických, informačných, komunikačných a riadiacich technológií do komplexných mechatronických
                    systémov automobilov.</p>
                <p class="align-left">Ústav garantuje študijné programy vo všetkých stupňoch štúdia akreditovaných na
                    STU v Bratislave. Pre širokospektrálnu oblasť výučby a výskumu zabezpečuje integráciu výskumníkov a
			pedagógov z FEI STU do výskumného a výučbového procesu v jednotlivých študijných programoch.</p>';}?>
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


</script>
</body>
</html>