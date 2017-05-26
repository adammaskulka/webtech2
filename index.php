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

<div id="sequence-theme">
    <div id="sequence">

        <ul class="sequence-canvas">
            <li class="animate-in">
                <div class="intro">
                    <h2>
                        <?php echo $lang['MULTIMEDIA']; ?>
                    </h2>
                </div>
                <img class="iphone" src="img/fei/android.jpg" alt="iPhone4"/>
                <img class="iphone-shadow" src="img/seq-slider/iphone-shadow.png" alt=""/>
            </li>
            <li>
                <img class="ipad" src="img/fei/IoT.jpg" alt="iPad"/>
                <div class="slide2">
                    <h2>
                        <?php echo $lang['IOT']; ?>
                    </h2>
                </div>
                <img class="ipad-shadow" src="img/seq-slider/ipad-shadow.png" alt=""/>
            </li>
            <li>
                <div class="slide3">
                    <h2>
                        <?php echo $lang['VIRTUAL_REALITY']; ?>
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
                        <?php echo $lang['WELCOME']; ?>
                    </h1>

                </div>


                <div class="feature-box">
                    <div class="col-md-4 col-sm-4 text-center wow fadeInUp">
                        <div class="feature-box-heading">
                            <em>
                                <img src="img/icons/mechanics.png" alt="" width="100" height="100">

                            </em>
                            <h4>
                                <b><?php echo $lang['APPLICATIONS_EVERYWHERE']; ?></b>
                            </h4>
                        </div>
                        <p class="text-center">
                            <?php echo $lang['APPLICATIONS_EVERYWHERE_TEXT']; ?>
                        </p>
                    </div>
                    <div class="col-md-4 col-sm-4 text-center wow fadeInUp">
                        <div class="feature-box-heading">
                            <em>
                                <img src="img/icons/trophy.png" alt="" width="100" height="100">
                            </em>
                            <h4>
                                <b><?php echo $lang['PROFESIONAL']; ?></b>
                            </h4>
                        </div>
                        <p class="text-center">
                            <?php echo $lang['PROFESIONAL_TEXT']; ?>
                        </p>
                    </div>
                    <div class="col-md-4 col-sm-4 text-center wow fadeInUp">
                        <div class="feature-box-heading">
                            <em>
                                <img src="img/icons/puzzle.png" alt="" width="100" height="100">
                            </em>
                            <h4>
                                <b><?php echo $lang['EXPERIMENT']; ?></b>
                            </h4>
                        </div>
                        <p class="text-center">
                            <?php echo $lang['EXPERIMENT_TEXT']; ?>
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
                        <?php echo $lang['SALARY']; ?>
                    </h3>

                    <div class="skill_bar">
                        <div class="skill_bar_progress skill_one">
                            <p>
                                <?php echo $lang['SALARY_PROGRAMMER']; ?> 1500 €
                            </p>
                        </div>
                    </div>

                    <div class="skill_bar">
                        <div class="skill_bar_progress skill_two">
                            <p>
                                <?php echo $lang['SALARY_CATIA']; ?> 1090 €
                            </p>
                        </div>
                    </div>

                    <div class="skill_bar">
                        <div class="skill_bar_progress skill_three">
                            <p>
                                <?php echo $lang['SALARY_SELLER']; ?> 800 €
                            </p>
                        </div>
                    </div>

                    <div class="skill_bar">
                        <div class="skill_bar_progress skill_four">
                            <p>
                                <?php echo $lang['SALARY_SBS']; ?> 530€
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
                                    <img alt="rabek" src="img/staff_photo/rabek.jpg">
                                </div>
                                <a class="about-testimonial-author" href="#">
                                    Ing. Matej Rábek
                                </a>
                                <span class="about-testimonial-company"><?php echo $lang['DOCTOR']; ?> </span>
                                <div class="about-testimonial-content">
                                    <p class="about-testimonial-quote">
                                        <?php echo $lang['DEPARTMENT_IKRS']; ?> <br>
                                        <?php echo $lang['ROOM']; ?>: D 103 <br>
                                        <?php echo $lang['PHONE']; ?>: 628
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="about-testimonial-image ">
                                    <img alt="zakova" src="img/staff_photo/zakova.jpg">
                                </div>
                                <a class="about-testimonial-author" href="#">
                                    Doc. Ing. Katarína Žáková, PhD.
                                </a>
                                <span class="about-testimonial-company"><?php echo $lang['FUNKCIA_ZAKOVA']; ?></span>
                                <div class="about-testimonial-content">
                                    <p class="about-testimonial-quote">
                                        <?php echo $lang['DEPARTMENT_IKRS']; ?> <br>
                                        <?php echo $lang['ROOM']; ?>: D 119 <br>
                                        <?php echo $lang['PHONE']; ?>: 742
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="about-testimonial-image ">
                                    <img alt="kocur" src="img/staff_photo/kocur.jpg">
                                </div>
                                <a class="about-testimonial-author" href="#">
                                    Ing. Michal Kocúr, PhD.
                                </a>
                                <div class="about-testimonial-content">
                                    <p class="about-testimonial-quote">
                                        <?php echo $lang['DEPARTMENT_EAP']; ?> <br>
                                        <?php echo $lang['ROOM']; ?>: D 104 <br>
                                        <?php echo $lang['PHONE']; ?>: 686
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
                    <?php echo $lang['EVENT_PHOTOS']; ?>
                </h3>
                <div id="owl-demo" class="owl-carousel owl-theme wow fadeIn">

                    <div class="item view view-tenth">
                        <img src="img/events002/2015-09-25-6460.jpg" alt="work Image">
                        <div class="mask">

                        </div>
                    </div>
                    <div class="item view view-tenth">
                        <img src="img/events002/2015-09-25-6483.jpg" alt="work Image">
                        <div class="mask">

                        </div>
                    </div>
                    <div class="item view view-tenth">
                        <img src="img/events002/2015-09-25-6471.jpg" alt="work Image">
                        <div class="mask">

                        </div>
                    </div>
                    <div class="item view view-tenth">
                        <img src="img/events002/2015-09-25-6568.jpg" alt="work Image">
                        <div class="mask">

                        </div>
                    </div>
                    <div class="item view view-tenth">
                        <img src="img/events002/2015-09-25-6476.jpg" alt="work Image">
                        <div class="mask">

                        </div>
                    </div>
                    <div class="item view view-tenth">
                        <img src="img/events002/2015-09-25-6477.jpg" alt="work Image">
                        <div class="mask">

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
                <?php echo $lang['COOPERATE']; ?>
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
