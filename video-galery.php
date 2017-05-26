<?php
session_start();
header('Cache-control: private'); // IE 6 FIX

if (isset($_GET['lang'])) {
    $language = $_GET['lang'];
    $_SESSION['lang'] = $language;
    setcookie('lang', $language, time() + (3600 * 24 * 30));
} else if (isSet($_SESSION['lang'])) {
    $language = $_SESSION['lang'];
} else if (isSet($_COOKIE['lang'])) {
    $language = $_COOKIE['lang'];
} else {
    $language = 'sk';
    $_SESSION['lang'] = 'sk';
    setcookie('lang', $language, time() + (3600 * 24 * 30));
}
switch ($language) {
    case 'en':
        $lang_file = 'lang-en.php';
        break;
    case 'sk':
        $lang_file = 'lang-sk.php';
        break;
    default:
        $lang_file = 'lang-sk.php';
}

include_once 'languages/' . $lang_file;

?>
<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="FEI, STU, mechatronika">
    <meta name="description" content="Ústav automobilovej mechatroniky FEI STU">

    <title>
        <?php echo $lang['INSTITUTE_UAMM']; ?> | <?php echo $lang['VIDEOGALERY']; ?>
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

switch ($language) {
    case 'en':
        include('header-en.php');
        break;
    case 'sk':
        include('header-sk.php');
        break;
    default:
        include('header-sk.php');

}

?>

<!--header end-->


<!--breadcrumbs start-->
<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-4">
                <?php echo $lang['VIDEOGALERY']; ?>
            </div>
            <div class="col-lg-8 col-sm-8">
                <ol class="breadcrumb pull-right">
                    <li><a href="index.php"><?php echo $lang['HOME']; ?></a></li>
                    <li class="active"><?php echo $lang['VIDEOGALERY']; ?></li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs end-->
<style>
    .videoWrapper {
        position: relative;
        padding-bottom: 56.25%; /* 16:9 */
        padding-top: 25px;
        height: 0;
    }

    .videoWrapper iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }
</style>

<div class="container">
    <div class="row mar-b-30">
        <div id="portfoliolist-three">
            <div class="col-md-12">
                <?php
                //                error_reporting(E_ALL);
                //                ini_set('display_errors', 'On');
                //                ini_set("log_errors", 1);
                require_once "src/multimediaController.php";
                $videos = getAllVideos();
                foreach ($videos as $video) {
                    echo '<div class="portfolio logo" data-cat="logo">';
                    echo '<div class="portfolio-wrapper">';
                    echo '<div class="portfolio-hover">';
                    echo '<div class="videoWrapper">';
                    echo '<iframe src="' . $video . '" allowfullscreen></iframe>';
                    echo '</div> </div> </div> </div>';
                }
                ?>

            </div>

        </div>

    </div>
</div>


<!--footer start-->
<?php
switch ($language) {
    case 'en':
        include('footer-en.php');
        break;
    case 'sk':
        include('footer-sk.php');
        break;
    default:
        include('footer-sk.php');

}
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
