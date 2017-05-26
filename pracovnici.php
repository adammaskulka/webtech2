<?php 
	session_start();
	
	if(isset($_GET['lang'])){
		if(strcmp($_GET['lang'] , "sk") == 0 || strcmp($_GET['lang'] , "en") == 0)
			$_SESSION['lang'] = $_GET['lang'];
		else
			$_SESSION['lang'] = "sk";
		

		header("Location: pracovnici.php");
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
        Ústav automobilovej mechatroniky FEI STU | Pracovníci
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
                <h1>Pracovníci</h1>
            </div>
            <div class="col-lg-8 col-sm-8">
                <ol class="breadcrumb pull-right">
                    <li><a href="index.php">Domov</a></li>
                    <li class="active">Pracovníci</li>
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
                <h1 class="wow fadeIn">Pracovníci</h1>

            </div>
        </div>
        <hr>

        <div class="row" ng-app="myApp" ng-controller="myCtrl" ng-init="getStaff()">
            <table class="table table-hover" ng-if="showStaff">
                <label>Filter <input ng-model="search"></label><br>
                <thead>
                    <tr>
                        <th>
                            <p class="text-center wow pulse"><a href="" ng-click="sortBy('name')">Meno</a></p>
                        </th>
                        <th>
                            <p class="text-center wow pulse"><a href="" ng-click="sortBy('room')">Miestnosť</a></p>
                        </th>
                        <th>
                            <p class="text-center wow pulse"><a href="" ng-click="sortBy('phone')"> Klapka</a></p>
                        </th>
                        <th>
                            <p class="text-center wow pulse"><a href="" ng-click="sortBy('department')"> Oddelenie</a></p>
                        </th>
                        <th>
                            <p class="text-center wow pulse"><a href="" ng-click="sortBy('staffRole')"> Zaradenie</a></p>
                        </th>
                        <th>
                            <p class="text-center wow pulse"><a href="" ng-click="sortBy('function')"> Funkcia</a></p>
                        </th>
                        <th>
                            <p class="text-center wow pulse">Podrobnosti</p>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr ng-repeat="person in staff | orderBy:propertyName:reverse | filter:search">
                        <td>
                            {{person.title2}} {{ person.title1 }} {{ person.name }} {{person.surname}}
                        </td>
                        <td>
                            {{person.room}}
                        </td>
                        <td>
                            {{person.phone}}
                        </td>
                        <td>
                            {{person.department}}
                        </td>
                        <td>
                            {{person.staffRole}}
                        </td>
                        <td>
                            {{person.function}}
                        </td>
                        <td align="center">
                            <a href="" ng-click="openModalForStaff(person)"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a>
                        </td>
                    </tr>
                </tbody>
            </table>

            <div ng-if="!showStaff">
                <a href="" ng-click="changeShowStaff()"> < Späť</a>
                <h1>
                    {{person.title2}} {{person.title1}} {{person.name}} {{person.surname}}
                </h1>
                <div style="display: block; width: 100%">
                    <div style="display: block; position: relative; float: left;">
                        <img src="img/staff_photo/{{person.photo}}" width="250px"> <br>
                    </div>
                    <div style="display: block; position: relative; float: left; margin-left: 5%">
                        <p class="text-left wow pulse">
                            Zaradenie: {{person.staffRole}} <br>
                            Oddelenie: {{person.department}} <br>
                            Telefónne číslo: +421 2 60291 {{person.phone}} <br>
                            Miestnosť: {{person.room}} <br>
                        </p>
                    </div>
                </div>
                <div style="display: block; width: 100%; position: relative; float: left" ng-if="showPub">
                    <h2>Publikacie</h2>
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>
                                <p class="text-center wow pulse"><a href="" ng-click="sortPubBy('name')">Názov</a></p>
                            </th>
                            <th>
                                <p class="text-center wow pulse"><a href="" ng-click="sortPubBy('type')">Typ</a></p>
                            </th>
                            <th>
                                <p class="text-center wow pulse"><a href="" ng-click="sortPubBy('year')">Rok</a></p>
                            </th>
                            <th>
                                <p class="text-center wow pulse">Podrobnosti</p>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr ng-repeat="pub in publication | orderBy:pubPropertyName:pubReverse">
                            <td>
                                {{pub.name}}
                            </td>
                            <td>
                                {{pub.type}}
                            </td>
                            <td>
                                {{pub.year}}
                            </td>
                            <td align="center">
                                <a href="{{pub.href}}"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
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
<script src="node_modules/angular/angular.js"></script>
<script src="js/myApp.js"></script>


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