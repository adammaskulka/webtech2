<?php 
	session_start();
	
	if(isset($_GET['lang'])){
		if(strcmp($_GET['lang'] , "sk") == 0 || strcmp($_GET['lang'] , "en") == 0)
			$_SESSION['lang'] = $_GET['lang'];
		else
			$_SESSION['lang'] = "sk";
		

		header("Location: media.php");
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
        Ústav automobilovej mechatroniky FEI STU | Média
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
                <h1>
                    Média
                </h1>
            </div>
            <div class="col-lg-8 col-sm-8">
                <ol class="breadcrumb pull-right">
                    <li>
                        <a href="#">
                            Domov
                        </a>
                    </li>
                    <li class="active">
                        Média
                    </li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs end-->

<!--container start-->
<div class="container">
    <div class="row">


        <div class="col-md-6">
            <div class="blog-left wow fadeInLeft">
                <div class="blog-img">
                    <img src="img/media/motokara.jpg" alt=""/>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="blog-two-info">
                            <p>
                                <i class="fa fa-user">
                                </i>
                                <a href="http://dennik.hnonline.sk">
                                    Hospodárske noviny
                                </a>
                                |
                                <i class="fa fa-calendar">
                                </i>
                                14.10.2014
                            </p>
                        </div>
                    </div>
                </div>
                <div class="blog-content">
                    <h3>
                        Študenti z Bratislavy vyvinuli u nás prvú elektrickú motokáru
                    </h3>
                </div>
                <a href="http://dennik.hnonline.sk/ekonomika-a-firmy/591621-studenti-z-bratislavy-vyvinuli-u-nas-prvu-elektricku-motokaru#.VETnmBjntpk.facebook"
                   class="btn btn-primary">Viac</a>
            </div>

            <div class="blog-left wow fadeInLeft">
                <div class="blog-img">
                    <img src="img/media/motokara2.jpg" alt=""/>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="blog-two-info">
                            <p>
                                <i class="fa fa-user">
                                </i>
                                <a href="https://spravy.pravda.sk">
                                    Pravda
                                </a>
                                |
                                <i class="fa fa-calendar">
                                </i>
                                20.10.2014
                            </p>
                        </div>
                    </div>
                </div>
                <div class="blog-content">
                    <h3>
                        Prvá elektrická motokára na Slovensku vznikla v škole
                    </h3>
                </div>
                <a href="https://spravy.pravda.sk/ekonomika/clanok/333718-prva-elektricka-motokara-na-slovensku-vznikla-v-skole/"
                   class="btn btn-primary">Viac</a>
            </div>

            <div class="blog-left wow fadeInLeft">
                <div class="blog-img">
                    <img src="img/media/akupunktura.jpg" alt=""/>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="blog-two-info">
                            <p>
                                <i class="fa fa-user">
                                </i>
                                <a href="http://reginazapad.rtvs.sk">
                                    Rádio Regina
                                </a>
                                |
                                <i class="fa fa-calendar">
                                </i>
                                19.1.2016
                            </p>
                        </div>
                    </div>
                </div>
                <div class="blog-content">
                    <h3>
                        Mladí vedci navrhli snímač akupunktúrnych bodov
                    </h3>
                </div>
                <a href="http://reginazapad.rtvs.sk/clanky/deti/98134/mladi-vedci-navrhli-snimac-akupunkturnych-bodov"
                   class="btn btn-primary">Viac</a>
            </div>

            <div class="blog-left wow fadeInLeft">
                <div class="blog-img">
                    <img src="img/media/akupunktura2.jpg" alt=""/>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="blog-two-info">
                            <p>
                                <i class="fa fa-user">
                                </i>
                                <a href="http://www.pluska.sk/zena/sarm/">
                                    Šarm
                                </a>
                                |
                                <i class="fa fa-calendar">
                                </i>
                                10.11.2015
                            </p>
                        </div>
                    </div>
                </div>
                <div class="blog-content">
                    <h3>
                        Poodkryl tajomstvo
                    </h3>
                </div>
                <a href="./files/sarm201546.pdf" download="sarm201546.pdf"
                   class="btn btn-primary">Stiahnúť</a>
            </div>

        </div>
        <div class="col-md-6">

            <div class="blog-right wow fadeInRight">
                <div class="blog-img">
                    <img src="img/media/akupunktura3.jpg" alt=""/>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="blog-two-info">
                            <p>
                                <i class="fa fa-user">
                                </i>
                                <a href="http://science.dennikn.sk/clankyarozhovory/">
                                    Denník N
                                </a>
                                |
                                <i class="fa fa-calendar">
                                </i>
                                29.3.2016
                            </p>
                        </div>
                    </div>
                </div>
                <div class="blog-content">
                    <h3>
                        Vďaka biomechatronikom z STU sa už akupunktúrne body neskryjú
                    </h3>
                </div>
                <a href="http://science.dennikn.sk/clanky-a-rozhovory/neziva-priroda/technika/6196-vdaka-slovenskym-biomechatronikom-sa-uz-akupunkturne-body-neskryju"
                   class="btn btn-primary">Viac</a>
                <a href="./files/science20162903.pdf" download="science20162903.pdf"
                   class="btn btn-primary">Stiahnúť</a>

            </div>


            <div class="blog-right wow fadeInRight">
                <div class="blog-img">
                    <img src="img/media/mechatronika.jpg" alt=""/>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="blog-two-info">
                            <p>
                                <i class="fa fa-user">
                                </i>
                                <a href="https://www.rtvs.sk/televizia/archiv/">
                                    VAT RTVS
                                </a>
                                |
                                <i class="fa fa-calendar">
                                </i>
                                12.1.2017
                            </p>
                        </div>
                    </div>
                </div>
                <div class="blog-content">
                    <h3>
                        Automobilová mechatronika (od 6:35 min)
                    </h3>
                </div>
                <a href="https://www.rtvs.sk/televizia/archiv/11767/115433"
                   class="btn btn-primary">Viac</a>

            </div>


            <div class="blog-right wow fadeInRight">
                <div class="blog-img">
                    <img src="img/media/mechatronika.jpg" alt=""/>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="blog-two-info">
                            <p>
                                <i class="fa fa-user">
                                </i>
                                <a href="https://www.rtvs.sk/televizia/archiv/">
                                    VAT RTVS
                                </a>
                                |
                                <i class="fa fa-calendar">
                                </i>
                                19.1.2017
                            </p>
                        </div>
                    </div>
                </div>
                <div class="blog-content">
                    <h3>
                        Prvý slovenský elektrický skúter (od 7:50 min)
                    </h3>
                </div>
                <a href="https://www.rtvs.sk/televizia/archiv/11767/117377"
                   class="btn btn-primary">Viac</a>

            </div>

        </div>


        <!--blog end-->
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

<!-- js placed at the end of the document so the pages load faster -->
<script src="js/jquery.js">
</script>
<script src="js/bootstrap.min.js">
</script>
<script type="text/javascript" src="js/hover-dropdown.js">
</script>
<script defer src="js/jquery.flexslider.js">
</script>
<script type="text/javascript" src="assets/bxslider/jquery.bxslider.js">
</script>

<script src="js/jquery.easing.min.js">
</script>
<script src="js/link-hover.js">
</script>


<!--common script for all pages-->
<script src="js/common-scripts.js">
</script>


<script src="js/wow.min.js">
</script>
<script>
    wow = new WOW(
        {
            boxClass: 'wow',      // default
            animateClass: 'animated', // default
            offset: 0          // default
        }
    )
    wow.init();
</script>

</body>
</html>
