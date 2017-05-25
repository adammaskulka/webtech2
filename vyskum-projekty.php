<?php 
//----------jazyk--------------
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
              <?php if($_SESSION['lang'] == 'sk') echo "Ústav automobilovej mechatroniky FEI STU | Projekty"; else echo "Institute of Automotive Mechatronics FEI STU | Projects"; ?>
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
                <h1><?php if($_SESSION['lang'] == 'sk') echo "Projekty"; else echo "Projects"; ?></h1>
            </div>
            <div class="col-lg-8 col-sm-8">
                <ol class="breadcrumb pull-right">
                    <li><a href="index.php"><?php if($_SESSION['lang'] == 'sk') echo "Domov"; else echo "Home"; ?></a></li>
                    <li class="active"><?php if($_SESSION['lang'] == 'sk') echo "Projekty"; else echo "Projects"; ?></li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs end-->

<!--container start-->
<div class="white-bg">

    <div class="container career-inner">
        <div class="row">
            <div class="col-md-12 career-head">
                <h1 class="wow fadeIn"><?php if($_SESSION['lang'] == 'sk') echo "Projekty"; else echo "Projects"; ?></h1>

            </div>
        </div>
        <hr>
		<!--container start--tu zacianuju tabulky-->
        <div class="row">
		<?php
		require('config.php');
		$mysqli = new mysqli($CONF_DB_HOST, $CONF_DB_USER, $CONF_DB_PASS, $CONF_DB_NAME);
		if($mysqli->connect_error){
		die("Connect error" . $mysqli->connect_error);
		}
		mysqli_set_charset($mysqli,"utf8");

		include('fetch_record');
		
		//medzinarodny
		$sql="SELECT * FROM Projekty WHERE Type='Inter' ORDER BY EndDuration DESC";
		$result = $mysqli->query($sql);
		
		//hlavicka
		//echo "<div class='table-responsive'>";
		
		$titleJ= $_SESSION['lang']."Title";
		
		if($_SESSION['lang'] == 'sk'){
		echo "<table class='table'><tr><th>Číslo projektu</th><th>Názov projektu</th><th>Doba riešenia</th><th>Zodpovedný riešiteľ</th></tr>";
		echo "<tr><th colspan='4' style='text-align: center'>Medzinárodné projekty</th></tr>";}
		else{
		echo "<table class='table'><tr><th>Project ID</th><th>Name</th><th>Project duration</th><th>Principal investigator</th></tr>";
		echo "<tr><th colspan='4' style='text-align: center'>International projects</th></tr>";}
		
		
		if (mysqli_num_rows($result) > 0) {
			while($row = mysqli_fetch_assoc($result)) {
			
			$od = date("Y", strtotime($row['StartDuration']));
			$do = date("Y", strtotime($row['EndDuration']));

			echo "<tr>";	
			echo "<td>".$row['Number']."</td>";
			echo "<td><a href='#myModal'  id='custId' data-toggle='modal' data-id='".$row['ID']."'>".$row[''.$titleJ.'']."</td>";
			echo "<td>".$od." - ".$do."</td>";
			echo "<td>".$row['Coordinator']."</td>";
			echo "</tr>";
			}
		}


		//VEGA
		$sql="SELECT * FROM Projekty WHERE Type='VEGA' ORDER BY EndDuration DESC";
		$result = $mysqli->query($sql);
		
		//hlavicka

		echo "<tr><th colspan='4' style='text-align: center'>VEGA</th></tr>";
		
		if (mysqli_num_rows($result) > 0) {
			while($row = mysqli_fetch_assoc($result)) {
			
			$od = date("Y", strtotime($row['StartDuration']));
			$do = date("Y", strtotime($row['EndDuration']));

			echo "<tr>";	
			echo "<td>".$row['Number']."</td>";
			echo "<td><a href='#myModal'  id='custId' data-toggle='modal' data-id='".$row['ID']."'>".$row[''.$titleJ.'']."</td>";
			echo "<td>".$od." - ".$do."</td>";
			echo "<td>".$row['Coordinator']."</td>";
			echo "</tr>";
			}
		}

		
		//APVV
		$sql="SELECT * FROM Projekty WHERE Type='APVV' ORDER BY EndDuration DESC";
		$result = $mysqli->query($sql);
		
		//hlavicka

		echo "<tr><th colspan='4' style='text-align: center'>APVV</th></tr>";
		if (mysqli_num_rows($result) > 0) {
			while($row = mysqli_fetch_assoc($result)) {
			
			$od = date("Y", strtotime($row['StartDuration']));
			$do = date("Y", strtotime($row['EndDuration']));

			echo "<tr>";	
			echo "<td>".$row['Number']."</td>";
			echo "<td><a href='#myModal'  id='custId' data-toggle='modal' data-id='".$row['ID']."'>".$row[''.$titleJ.'']."</td>";
			echo "<td>".$od." - ".$do."</td>";
			echo "<td>".$row['Coordinator']."</td>";
			echo "</tr>";
			}
		}
		
		//KEGA
		$sql="SELECT * FROM Projekty WHERE Type='KEGA' ORDER BY EndDuration DESC";
		$result = $mysqli->query($sql);
		
		//hlavicka

		echo "<tr><th colspan='4' style='text-align: center'>KEGA</th></tr>";
		if (mysqli_num_rows($result) > 0) {
			while($row = mysqli_fetch_assoc($result)) {
			
			$od = date("Y", strtotime($row['StartDuration']));
			$do = date("Y", strtotime($row['EndDuration']));

			echo "<tr>";	
			echo "<td>".$row['Number']."</td>";
			echo "<td><a href='#myModal'  id='custId' data-toggle='modal' data-id='".$row['ID']."'>".$row[''.$titleJ.'']."</td>";
			echo "<td>".$od." - ".$do."</td>";
			echo "<td>".$row['Coordinator']."</td>";
			echo "</tr>";
			}
		}

		
		//iné
		$sql="SELECT * FROM Projekty WHERE Type='INE' ORDER BY EndDuration DESC";
		$result = $mysqli->query($sql);
		
		//hlavicka
		
		if($_SESSION['lang'] == 'sk') echo "<tr><th colspan='4' style='text-align: center'>Iné domáce projekty</th></tr>";
		else  echo "<tr><th colspan='4' style='text-align: center'>Other domestic projects</th></tr>";
		
		if (mysqli_num_rows($result) > 0) {
			while($row = mysqli_fetch_assoc($result)) {
			
			$od = date("Y", strtotime($row['StartDuration']));
			$do = date("Y", strtotime($row['EndDuration']));
			
			echo "<tr>";	
			echo "<td>".$row['Number']."</td>";
			echo "<td><a href='#myModal'  id='custId' data-toggle='modal' data-id='".$row['ID']."'>".$row[''.$titleJ.'']."</td>";
			echo "<td>".$od." - ".$do."</td>";
			echo "<td>".$row['Coordinator']."</td>";
			echo "</tr>";
			}
		}
		echo "</table>";	
		
		$mysqli->close();
		?>
        </div>
		

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><?php if($_SESSION['lang'] == 'sk') echo "Podrobnosti"; else echo "Specifics"; ?></h4>
            </div>
            <div class="modal-body">
                <div class="fetched-data"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><?php if($_SESSION['lang'] == 'sk') echo "Zatvoriť"; else echo "Close"; ?></button>
            </div>
        </div>
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
<script>
	$(document).ready(function(){
    $('#myModal').on('show.bs.modal', function (e) {
        var rowid = $(e.relatedTarget).data('id');
        $.ajax({
            type : 'POST',
            url : 'fetch_record.php',
            data :  'rowid='+ rowid, 
            success : function(data){
            $('.fetched-data').html(data);
            }
        });
     });
});
</script>
</body>
</html>
