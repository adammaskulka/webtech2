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
        Ústav automobilovej mechatroniky FEI STU | Fotogaléria
    </title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/theme.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet"/>
    <link rel="stylesheet" href="css/flexslider.css"/>
    <link href="assets/bxslider/jquery.bxslider.css" rel="stylesheet"/>
    <link rel="stylesheet" href="css/animate.css"/>
    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="assets/owlcarousel/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="css/mixitup.css">

    <link rel="stylesheet" type="text/css" href="css/component.css">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet"/>


    <link rel="stylesheet" href="css/magnific-popup.css">
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
                <h1>Fotogaléria</h1>
            </div>
            <div class="col-lg-8 col-sm-8">
                <ol class="breadcrumb pull-right">
                    <li><a href="index.php">Domov</a></li>
                    <li class="active">Fotogaléria</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs end-->

<div class="container">

    <div class="row">
        <div class="col-md-6">
            <ul id="filters" class="clearfix">

                <?php
                error_reporting(E_ALL);
                ini_set('display_errors', 'On');
                ini_set("log_errors", 1);
                require_once "src/multimediaController.php";
                $folders = getAllPhotos();
                $folders_string = "";
                foreach ($folders as $folder) {
                    $folders_string = $folders_string . " " . $folder->folder;
                }
                echo '<li><span class="filter active" data-filter="' . $folders_string . '">Všetky</span></li>';
                foreach ($folders as $folder) {

                    echo '<li><span class="filter" data-filter="' . $folder->folder . '">';
                    echo $folder->title_sk;
                    echo '</span></li>';
                }

                ?>
            </ul>
        </div>
    </div>
</div>
<div class="container">
    <div class="row mar-b-30">
        <div id="portfoliolist-three">
            <div class="col-md-12">

                <?php
                require_once "src/multimediaController.php";
                $folders = getAllPhotos();
                foreach ($folders as $folder) {
                    $dir = "img/" . $folder->folder;
                    $files1 = array_slice(scandir($dir), 2);
                    foreach ($files1 as $item) {
                        echo '<div class="portfolio ' . $folder->folder . '" data-cat="' . $folder->folder . '">';
                        echo '<div class="portfolio-wrapper">';
                        echo '<div class="portfolio-hover">';
                        echo ' <div class="image-caption">';
                        echo '<a href="img/' . $folder->folder . '/' . $item . '" class="label magnefig label-info icon" data-toggle="tooltip" data-placement="left" title="Zoom"><i class="fa fa-eye"></i></a>';
                        echo '</div>';
                        echo '<img src="img/' . $folder->folder . '/' . $item . '" alt="" />';
                        echo '</div> </div> </div>';
                    }
                }
                ?>
            </div>
        </div>

    </div>
</div>


<!--footer start-->
<?php 
	if(strcmp($_SESSION['lang'],'en') == 0)
		include('footer-en.php'); 
	if(strcmp($_SESSION['lang'],'sk') == 0)
		include('footer-sk.php'); 
?>
<!--small footer end-->

<!-- js placed at the end of the document so the pages load faster
<script src="js/jquery.js"></script> -->
<script src="js/jquery-1.8.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/hover-dropdown.js"></script>
<script defer src="js/jquery.flexslider.js"></script>
<script type="text/javascript" src="assets/bxslider/jquery.bxslider.js"></script>

<script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>
<script src="js/wow.min.js"></script>
<script src="assets/owlcarousel/owl.carousel.js"></script>
<script src="js/mixitup.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/link-hover.js"></script>

<!--common script for all pages-->
<script src="js/common-scripts.js"></script>


<script src="js/jquery.magnific-popup.js"></script>

<script type="text/javascript">
    $('.image-caption a').tooltip();

    $(function () {

        var filterList = {

            init: function () {

                // MixItUp plugin
                // http://mixitup.io
                $('#portfoliolist-three').mixitup({
                    targetSelector: '.portfolio',
                    filterSelector: '.filter',
                    effects: ['fade'],
                    easing: 'snap',
                    // call the hover effect
                    onMixEnd: filterList.hoverEffect()
                });

            },

            hoverEffect: function () {
                $("[rel='tooltip']").tooltip();
                // Simple parallax effect
                $('#portfoliolist-three .portfolio .portfolio-hover').hover(
                    function () {
                        $(this).find('.image-caption').slideDown(250); //.fadeIn(250)
                    },
                    function () {
                        $(this).find('.image-caption').slideUp(250); //.fadeOut(205)
                    }
                );
            }

        };

        // Run the show!
        filterList.init();


    });

    $(document).ready(function () {
        $('.magnefig').each(function () {
            $(this).magnificPopup({
                type: 'image',
                removalDelay: 300,
                mainClass: 'mfp-fade'
            })
        });
    });
</script>

<script>


    $(document).ready(function () {

        $("#owl-demo").owlCarousel({

            autoPlay: 3000, //Set AutoPlay to 3 seconds

            items: 4,
            itemsDesktop: [1199, 3],
            itemsDesktopSmall: [979, 3],
            stopOnHover: true,

        });

    });

    new WOW().init();


</script>
</body>
</html>