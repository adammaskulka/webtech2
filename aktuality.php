<?php
//----------jazyk--------------
session_start();
	
	if(isset($_GET['lang'])){
		$_SESSION['lang'] = $_GET['lang'];
	}
	
	if(!isset($_SESSION['lang']))  
		$_SESSION['lang'] = 'sk';

//----------- start Andrej-----------
require('config.php');
$mysqli = new mysqli($CONF_DB_HOST, $CONF_DB_USER, $CONF_DB_PASS, $CONF_DB_NAME);
if($mysqli->connect_error){
die("Connect error" . $mysqli->connect_error);
}
mysqli_set_charset($mysqli,"utf8");	

//nastavenie odberu
if(isset($_POST['email']) && isset($_POST['odber']))
{
	if($_POST['odberSK'] == "on") $skodber = 1;
	else $skodber = 0;
	if($_POST['odberEN'] == "on") $enodber = 1;
	else $enodber = 0;
	
$sql = "INSERT INTO Newsletter VALUES (NULL, '".$_POST['email']."', '".$skodber."', '".$enodber."')";
$result = $mysqli->query($sql);
$mysqli->close();
}

if(isset($_POST['email']) && isset($_POST['zrusodber']))
{	
$sql = "DELETE FROM Newsletter WHERE Email ='".$_POST['email']."'";
$result = $mysqli->query($sql);
}

$mysqli->close();
?>
<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="FEI, STU, mechatronika">
    <meta name="description" content="Ústav automobilovej mechatroniky FEI STU">

    <title>
       <?php if($_SESSION['lang'] == 'sk') echo "Ústav automobilovej mechatroniky FEI STU | Aktuality"; else echo "Institute of Automotive Mechatronics FEI STU | News"; ?> 
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
                <h1><?php if($_SESSION['lang'] == 'sk') echo "Aktuality"; else echo "News"; ?></h1>
            </div>
            <div class="col-lg-8 col-sm-8">
                <ol class="breadcrumb pull-right">
                    <li><a href="index.php"><?php if($_SESSION['lang'] == 'sk') echo "Domov"; else echo "Home"; ?></a></li>
                    <li class="active"><?php if($_SESSION['lang'] == 'sk') echo "Aktuality"; else echo "News"; ?></li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs end-->

<?php
require('config.php');
$mysqli = new mysqli($CONF_DB_HOST, $CONF_DB_USER, $CONF_DB_PASS, $CONF_DB_NAME);
if($mysqli->connect_error){
die("Connect error" . $mysqli->connect_error);
}
mysqli_set_charset($mysqli,"utf8");

if(isset($_GET['Typ']) and isset($_GET['Stare'])){
	if($_GET['Typ']==123) $sql="SELECT * FROM Aktuality";
	else $sql="SELECT * FROM Aktuality WHERE Typ='".$_GET['Typ']."'";
}	
else if(isset($_GET['Typ'])){
	if($_GET['Typ']==123) $sql="SELECT * FROM Aktuality WHERE DATE > now()";
	else $sql="SELECT * FROM Aktuality WHERE Typ='".$_GET['Typ']."' AND DATE > now()";
}
else {$sql="SELECT * FROM Aktuality WHERE DATE > now()"; $_GET['Typ'] = 123;}

$result = $mysqli->query($sql);
$num = $result->num_rows; // pocet aktualit

$limit=2;
$pocet_stran=ceil($num/$limit);



?>


<!--container start-->
<div class="container">
    <div class="row">
        <!--blog start-->
			<div class='col-lg-9'>
			<?php 
			$i=0;
			

			$titleJ = $_SESSION['lang']."Title";
			$annotationJ = $_SESSION['lang']."Annotation";

			
if (mysqli_num_rows($result) > 0) {
			while($row = mysqli_fetch_assoc($result)) {
			$den = date("d", strtotime($row['Date']));
			$mesiac = date("M", strtotime($row['Date']));

			//ostatne strany
			if($i == $_GET['strana']){	
			echo "	<div class='blog-item'>
                <div class='row'>
                    <div class='col-lg-2 col-sm-2'>
                        <div class='date-wrap'>
                  <span class='date'>
                    ".$den."
                  </span>
                            <span class='month'>
                    ".$mesiac."
                  </span>
                        </div>

                    </div>
                    <div class='col-lg-10 col-sm-10'>
                        <div class='blog-img'>
                            <img src='".$row['Img']."' alt=''/>
                        </div>

                    </div>
                </div>
                <div class='row'>
                    <div class='col-lg-2 col-sm-2 text-right'>
                        <div class='author'>
                            By
                            <a href='#'>
                                ".$row['Uploaded']."
                            </a>
                        </div>
                    </div>
                    <div class='col-lg-10 col-sm-10'>
                        <h1>
                            ".$row[''.$titleJ.'']."
                        </h1>
                        <p>
                            ".$row[''.$annotationJ.'']."
                        </p>
                    </div>
                </div>
            </div>";}
			
			if($i == ($_GET['strana']+1)){	
			echo "	<div class='blog-item'>
                <div class='row'>
                    <div class='col-lg-2 col-sm-2'>
                        <div class='date-wrap'>
                  <span class='date'>
                    ".$den."
                  </span>
                            <span class='month'>
                    ".$mesiac."
                  </span>
                        </div>

                    </div>
                    <div class='col-lg-10 col-sm-10'>
                        <div class='blog-img'>
                            <img src='".$row['Img']."' alt=''/>
                        </div>

                    </div>
                </div>
                <div class='row'>
                    <div class='col-lg-2 col-sm-2 text-right'>
                        <div class='author'>
                            By
                            <a href='#'>
                                ".$row['Uploaded']."
                            </a>
                        </div>
                    </div>
                    <div class='col-lg-10 col-sm-10'>
                        <h1>
                             ".$row[''.$titleJ.'']."
                        </h1>
                        <p>
                            ".$row[''.$annotationJ.'']."
                        </p>
                    </div>
                </div>
            </div>";}
			
			$i+=1;
			
			if($i == (2*$_GET['strana'])) break;
			}
}
?>  

<?php
//strankovanie
echo "<p style='position:absolute; left: 55%; font-size: 130%;'>";
for ($i=1; $i<=$pocet_stran; $i++)
{
	if ($i<>$_GET['strana']) 
	{
		if(isset($_GET['Stare']))
		echo "<a href=\"aktuality.php?ctrl=1&Typ=".$_GET['Typ']."&strana=".$i."&Stare=on\">".$i."</a> | ";
		else
		echo "<a href=\"aktuality.php?ctrl=1&Typ=".$_GET['Typ']."&strana=".$i."\">".$i."</a> | ";
	}
	else 
	{
		echo "<font color=\"#FF0000\">".$i."</font> | ";
	}
}
echo "</p>";
?>	
		<br><br><br>
        </div>
	
		
		<div class='col-lg-3'>
           <div class='blog-side-item'>
               
 <?php 			
				if($_SESSION['lang'] == 'sk'){
				echo "<div class='category'> <h3>Kategórie</h3>";
                echo "<form method='get' action=''><ul class='list-unstyled'>
						
                         <li>
                            <input class='w3-check' type='checkbox' name='Stare'> Zobraziť neaktívne aktuality
                        </li>
						<li>
                             <a href='http://147.175.98.124/FINAL/aktuality.php?Typ=1&Stare='".$_GET['Typ']."''>
                                <i class='fa fa-angle-right pr-10'>
                                </i>
								<button class='btn' style='background-color: white; color: black; border: 1px solid #FFF;' type='sumbit' name='Typ' value = '123'>
                                Všetky
								</button>
                            </a>
                        </li>
						<li>
                             <a href='http://147.175.98.124/FINAL/aktuality.php?Typ=1&Stare='".$_GET['Typ']."''>
                                <i class='fa fa-angle-right pr-10'>
                                </i>
								<button style='background-color: white; color: black; border: 1px solid #FFF;' class='btn' type='sumbit' name='Typ' value = '1'>
                                Propagácia
								</button>
                            </a>
                        </li>
						<li>
                             <a href='http://147.175.98.124/FINAL/aktuality.php?Typ=1&Stare='".$_GET['Typ']."''>
                                <i class='fa fa-angle-right pr-10'>
                                </i>
								<button class='btn' style='background-color: white; color: black; border: 1px solid #FFF;' type='sumbit' name='Typ' value = '2'>
                                Oznamy
								</button>
                            </a>
                        </li>
						<li>
                             <a href='http://147.175.98.124/FINAL/aktuality.php?Typ=1&Stare='".$_GET['Typ']."''>
                                <i class='fa fa-angle-right pr-10'>
                                </i>
								<button class='btn' style='background-color: white; color: black; border: 1px solid #FFF;' type='sumbit' name='Typ' value = '3'>
                                Zo života ústavu
								</button>
                            </a>
                        </li>

				</ul></form>";}
				else{
				echo "<div class='category'> <h3>Category</h3>";	
				echo "<form method='get' action=''><ul class='list-unstyled'>
						
                         <li>
                            <input class='w3-check' type='checkbox' name='Stare'> Show non-active actualities
                        </li>
						<li>
                             <a href='http://147.175.98.124/FINAL/aktuality.php?Typ=1&Stare='".$_GET['Typ']."''>
                                <i class='fa fa-angle-right pr-10'>
                                </i>
								<button class='btn' style='background-color: white; color: black; border: 1px solid #FFF;' type='sumbit' name='Typ' value = '123'>
                                All
								</button>
                            </a>
                        </li>
						<li>
                             <a href='http://147.175.98.124/FINAL/aktuality.php?Typ=1&Stare='".$_GET['Typ']."''>
                                <i class='fa fa-angle-right pr-10'>
                                </i>
								<button style='background-color: white; color: black; border: 1px solid #FFF;' class='btn' type='sumbit' name='Typ' value = '1'>
                                Propagation
								</button>
                            </a>
                        </li>
						<li>
                             <a href='http://147.175.98.124/FINAL/aktuality.php?Typ=1&Stare='".$_GET['Typ']."''>
                                <i class='fa fa-angle-right pr-10'>
                                </i>
								<button class='btn' style='background-color: white; color: black; border: 1px solid #FFF;' type='sumbit' name='Typ' value = '2'>
                                Announcements
								</button>
                            </a>
                        </li>
						<li>
                             <a href='http://147.175.98.124/FINAL/aktuality.php?Typ=1&Stare='".$_GET['Typ']."''>
                                <i class='fa fa-angle-right pr-10'>
                                </i>
								<button class='btn' style='background-color: white; color: black; border: 1px solid #FFF;' type='sumbit' name='Typ' value = '3'>
                                From life of institute
								</button>
                            </a>
                        </li>

				</ul></form>";}
				
				?>
                </div>				
				<div class='category'> <h3><?php if($_SESSION['lang'] == 'sk') echo "Odber aktualít"; else echo "Newsletter"; ?></h3>
					<form method='post' action=''><ul class='list-unstyled'>	
						<li>
						E-mail: <input class="form-control" type="text" name="email" value="<?php echo $email;?>"><span class="error"><?php echo $emailErr;?></span>
						</li>
						<li>
                            <input class='w3-check' type='checkbox' name='odberSK' checked="true"><?php if($_SESSION['lang'] == 'sk') echo "Slovenský odber"; else echo " Slovak subscription"; ?>
							<br>
							<input class='w3-check' type='checkbox' name='odberEN' checked="true"> <?php if($_SESSION['lang'] == 'sk') echo "Anglický odber"; else echo " English subscription"; ?>
                        </li>
						<li>
							<i class='fa fa-angle-right pr-10'>
                            </i><input type="submit" class='btn' style='background-color: white; color: black; border: 1px solid #FFF;' name ="odber" <?php if($_SESSION['lang'] == 'sk') echo "value='Odoberať'"; else echo "value='Subscribe'"; ?>>
						</li>
						<li>
							<i class='fa fa-angle-right pr-10'>
                            </i><input type="submit" class='btn' style='background-color: white; color: black; border: 1px solid #FFF;' name ="zrusodber" <?php if($_SESSION['lang'] == 'sk') echo "value='Zrušiť odber'"; else echo "value='Cancel subscription'"; ?>>
						</li>
					</ul></form>
				</div>
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
</body>
</html>
