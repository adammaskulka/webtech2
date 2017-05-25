<?php
	require_once "src/userController.php";
	require_once "cfg/config.php";
	$conn = new mysqli($CONF_DB_HOST, $CONF_DB_USER, $CONF_DB_PASS , $CONF_DB_NAME);
	mysqli_set_charset($conn,"utf8");
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
	
	

	session_start();
	$role = $_SESSION['role'];	
?>
<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="FEI, STU, mechatronika">
    <meta name="description" content="Ústav automobilovej mechatroniky FEI STU">

    <title>
        Ústav automobilovej mechatroniky FEI STU | Intranet
    </title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/theme.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <link href="css/sidebar.css" rel="stylesheet">
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
<header class="head-section">
    <div class="navbar navbar-default navbar-static-top container">
        <div class="navbar-header">
            <button class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse"
                    type="button"><span class="icon-bar"></span> <span class="icon-bar"></span>
                <span class="icon-bar"></span></button>
            <a class="navbar-brand" href="index.php">FEI M<span>echatronika</span></a>
        </div>

        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-close-others="false" data-delay="0" data-hover=
                    "dropdown" data-toggle="dropdown" href="#">O nás<i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="history.php">História</a>
                        </li>
                        <li>
                            <a href="management.php">Vedenie ústavu</a>
                        </li>

                        <li class="dropdown-submenu">
                            <a href="#" tabindex="-1">Oddelenia</a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-submenu"></li>

                                <li>
                                    <a href="department_oamm.php">Oddelenie aplikovanej mechaniky a mechatroniky
                                        (OAMM)</a>
                                </li>

                                <li>
                                    <a href="department_oikr.php">Oddelenie informačných, komunikačných a riadiacich
                                        systémov (OIKR)</a>
                                </li>
                                <li>
                                    <a href="department_oemp.php">Oddelenie elektroniky, mikropočítačov a PLC systémov
                                        (OEMP)</a>
                                </li>

                                <li>
                                    <a href="department_oeap.php">Oddelenie E-mobility, automatizácie a pohonov
                                        (OEAP)</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="pracovnici.php">Pracovníci</a>
                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-close-others="false" data-delay="0" data-hover=
                    "dropdown" data-toggle="dropdown" href="#">Štúdium<i class="fa fa-angle-down"></i>
                    </a>

                    <ul class="dropdown-menu">
                        <li class="dropdown-submenu">
                            <a href="#" tabindex="-1">Pre uchádzačov o štúdium</a>

                            <ul class="dropdown-menu">
                                <li class="dropdown-submenu"></li>

                                <li>
                                    <a href="applicants-bachelor.php">Bakalárske štúdium</a>
                                </li>

                                <li>
                                    <a href="applicants-master.php">Inžinierske štúdium</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a href="#" tabindex="-1">Bakalárske štúdium</a>

                            <ul class="dropdown-menu">
                                <li class="dropdown-submenu"></li>

                                <li>
                                    <a href="bachelor-info.php">Všeobecné informácie</a>
                                </li>

                                <li class="dropdown-submenu">
                                    <a href="#">Bakalárske práce</a>

                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="bachelor-instructions.php">Pokyny</a>
                                        </li>

                                        <li>
                                            <a href="bachelor-thesis.php">Voľné témy</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li class="dropdown-submenu">
                            <a href="#" tabindex="-1">Inžinierske štúdium</a>

                            <ul class="dropdown-menu">
                                <li class="dropdown-submenu"></li>

                                <li>
                                    <a href="master-info.php">Všeobecné informácie</a>
                                </li>

                                <li class="dropdown-submenu">
                                    <a href="#">Diplomové práce</a>

                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="master-instructions.php">Pokyny</a>
                                        </li>

                                        <li>
                                            <a href="master-thesis.php">Voľné témy</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="doctor-info.php">Doktorandské štúdium</a>
                        </li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-close-others="false" data-delay="0" data-hover=
                    "dropdown" data-toggle="dropdown" href="#">Výskum<i class="fa fa-angle-down"></i>
                    </a>

                    <ul class="dropdown-menu">
                        <li>
                            <a href="vyskum-projekty.php">Projekty</a>
                        </li>

                        <li class="dropdown-submenu">
                            <a href="#" tabindex="-1">Výskumné oblasti</a>

                            <ul class="dropdown-menu">
                                <li class="dropdown-submenu"></li>

                                <li>
                                    <a href="vyskum-motokara.php">Elektrická motokára</a>
                                </li>

                                <li>
                                    <a href="vyskum-vozidlo.php">Autonómne vozidlo 6×6</a>
                                </li>
                                <li>
                                    <a href="vyskum-kocka.php">3D LED kocka</a>
                                </li>

                                <li>
                                    <a href="vyskum-biomechanika.php">Biomechatronika</a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </li>

                <li>
                    <a href="aktuality.php">Aktuality</a>
                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-close-others="false" data-delay="0" data-hover=
                    "dropdown" data-toggle="dropdown" href="#">Aktivity<i class="fa fa-angle-down"></i>
                    </a>

                    <ul class="dropdown-menu">
                        <li>
                            <a href="photo-galery.php">Fotogaléria</a>
                        </li>
                        <li>
                            <a href="video-galery.php">Videá</a>
                        </li>
                        <li>
                            <a href="media.php">Média</a>
                        </li>

                        <li class="dropdown-submenu">
                            <a href="#" tabindex="-1">Naše tématické web stránky</a>

                            <ul class="dropdown-menu">
                                <li class="dropdown-submenu"></li>

                                <li>
                                    <a href="http://www.e-mobilita.fei.stuba.sk">Elektromobilita</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="contact.php">Kontakt</a>
                </li>

                <li>
                    <a href="login.php">Intranet</a>
                </li>

            </ul>
        </div>
    </div>
</header>
<!--header end-->

<!--breadcrumbs start-->
<div class="breadcrumbs">
    <span style="font-size:30px;cursor:pointer; margin-left: 20px" onclick="openNav()">&#9776; Menu</span>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-4">
                <h1>Intranet-Publikácie</h1>
            </div>
            <div class="col-lg-8 col-sm-8">
                <ol class="breadcrumb pull-right">
                    <li><a href="index.php">Domov</a></li>
                    <li class="active">Intranet</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs end-->

<!-- left menu start -->
<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="intranet-users.php">Používatelia</a>
    <a href="intranet-photos.php">Fotky</a>
    <a href="intranet-video.php">Videá</a>
    <a href="intranet-actuality.php">Aktuality</a>
    <a href="intranet-dochadzka.php">Dochádzka</a>
    <a href="intranet-pedagogika.php">Pedagogika</a>
    <a href="intranet-doktorandi.php">Doktorandi</a>
    <a href="intranet-publikacie.php">Publikacie</a>
    <a href="intranet-sluzobne-cesty.php">Služobné cesty</a>
    <a href="intranet-nakupy.php">Nákupy</a>
    <a href="intranet-tasks.php">Rozdelenie úloh</a>
</div>
<!-- left menu end -->

<!--container start-->
<div class="white-bg">

	<?php
			
		if(isset($_POST['nazovp']) && isset($_FILES['subor'])){
			define ('SITE_ROOT', realpath(dirname(__FILE__)));
			$uploadfile = SITE_ROOT . '/uploads/' . basename($_FILES['subor']['name']);
			//echo $uploadfile;
			if (move_uploaded_file($_FILES['subor']['tmp_name'], $uploadfile)) {
				chmod($uploadfile, 0766);
				//echo "File is valid, and was successfully uploaded.\n";
				$kategoria = $_POST['category'];
				//echo $kategoria;
				$pr = $_POST['nazovp'];
				$file = $_FILES['subor']['name'];
				$sql = "INSERT INTO intranet (Kategoria , Prilohy , subor , stranka) VALUES('$kategoria','$pr','$file','publikaie') ";
				$conn->query($sql);
				
			}else {
				echo "Upload failed";
			}
			
		}
	
	
		if(isset($_POST['idp'])){
			define ('SITE_ROOT', realpath(dirname(__FILE__)));

			$priloha = $_POST['idp'];
			$priloha1 = $_POST['priloha'];
			$src = $_POST['src'];
			//print_r ($src);
			$uploadfile = SITE_ROOT . '/uploads/' .$src ;
			//echo $uploadfile;
			unlink($uploadfile);
			$sql= "DELETE FROM intranet WHERE Prilohy = '$priloha1' AND stranka = 'publikacie'";
			$conn->query($sql);
			
		}else if(isset($_POST['id'])){
			$ID = $_POST['id'];
			$kat = $_POST[$ID];
			$kategoria = $_POST['kategoria'];
			if(isset($_POST[$ID]) && strlen($_POST[$ID]) >2 && isset($_POST['edit'])){
				$sql= "UPDATE intranet SET Kategoria='$kat' WHERE Kategoria = '$kategoria' AND stranka = 'publikacie'";
				$conn->query($sql);
				
			}else if(isset($_POST['del'])){
				define ('SITE_ROOT', realpath(dirname(__FILE__)));
				$sql= "SELECT * FROM intranet WHERE Kategoria = '$kategoria' AND stranka = 'publikacie'";
				$result = $conn->query($sql);
				
				while($row = $result->fetch_assoc()) {
					$src = $row['subor'];
					$uploadfile = SITE_ROOT . '/uploads/' .$src ;
					unlink($uploadfile);
				}
				$sql= "DELETE FROM intranet WHERE Kategoria = '$kategoria' AND stranka = 'publikacie'";
				$conn->query($sql);
			}
		}else if(isset($_POST['newk']) && strlen($_POST['newk']) > 2){
					//echo aaa;
					$kateg = $_POST['newk'];
					$sql = "INSERT INTO intranet (Kategoria , stranka) VALUES('$kateg','publikacie')";
					$conn->query($sql);
				
			}
	?>
    <!-- career -->
    <div class="container career-inner">
		
        <div class="row">
            <div class="col-md-12 career-head">
				<?php
					$log = 1;
					if(IsEditor() || IsAdmin() || IsUser() || IsHR() || IsReporter()){
						$log = 1;
					}
					if($log == 0){
						echo "Pre zobrazenie obsahu je nutné sa prihlásiť";
					}
				?>	
                <h1 class="wow fadeIn">Dokumenty</h1>

            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12 wow fadeIn">
                <table class="table table-bordered table-striped">
                    <colgroup>
                        <col class="col-xs-4">
                        <col class="col-xs-4">
                    </colgroup>
                    <thead>
                    <tr>
                        <th>
                            Dokument
                        </th>
                        <th>
                            Príloha
                        </th>
                    </tr>
                    </thead>
                    <tbody>
					<?php
					
					if($log == 1){
						$sql = "SELECT * FROM intranet WHERE stranka = 'publikacie' ORDER BY Kategoria , Prilohy";
						$result = $conn->query($sql);
						$kategoria = "";
						$tmp = 0;
						$Kid = 0;
						$Ppoc = 1;
						
						if(IsUser() || IsHR() || IsReporter()){
							$_SESSION['edit']=0;
						}
						
						
						if(!isset($_SESSION['edit'])){
							$_SESSION['edit']=0;
						}

						if(isset($_POST['editmode'])){
							$_SESSION['edit']=$_POST['editmode'];
						}
				
						//if((IsEditor() || IsAdmin())&& $_SESSION['edit']==0){
						if($_SESSION['edit'] ==0){	
							if ($result->num_rows > 0) {
								while($row = $result->fetch_assoc()) {
									if(strcmp($kategoria,$row['Kategoria']) != 0){
										if($tmp == 1)
											echo "</tr>";
										echo "<tr><td>".$row['Kategoria']."</td><td>";
										if(strlen($row['Prilohy']) > 2)
											echo "<a href ='download.php?file=".$row['subor']."'>".$row['Prilohy']."</a><br>";
										$kategoria = $row['Kategoria'];
										$tmp = 1;
									}else{
										if(strlen($row['Prilohy']) > 2)
											echo "<a href ='download.php?file=".$row['subor']."'>".$row['Prilohy']."</a><br>";
									}
										
									
								}
								echo "</tr>";
							}
						}
				
						//if((IsEditor() || IsAdmin())&& $_SESSION['edit'] == 1){		
						if($_SESSION['edit'] ==1){
							if ($result->num_rows > 0) {
								while($row = $result->fetch_assoc()) {
									if(strcmp($kategoria,$row['Kategoria']) != 0){
										if($tmp == 1){
											//if(strlen($row['Prilohy']) > 0)
												//echo "<br><br>";
											echo "<form method='POST' action enctype='multipart/form-data'><input type='file' name='subor' required style='margin-bottom:6px;'><input type='text' name='nazovp' pattern='.{3,}' title='3 or more characters' placeholder='Nazov prílohy' required><input type='hidden' name='category' value = '".$last['Kategoria']."'><span style='float:right;cursor:pointer;'><input type='submit' value='Pridať'></form></span></td></tr>";
										}
										$Kid++;
										$id = "k".$Kid;
										$eid = "ek".$Kid;
										$Ppoc=1;
										
										$pid = "p".$Kid."_".$Ppoc;
										$epid = "ep".$Kid."_".$Ppoc;
										if(strlen($row['Prilohy']) > 2)
											echo "<tr><td><form method='POST' action><input type='hidden' name='id' value='$id'><input type='hidden' name='kategoria' value='".$row['Kategoria']."'><span id='$id'><input type='text' name='$id' pattern='.{3,}'  title='3 or more characters' placeholder='".$row['Kategoria']."'></span><span id='$eid' style='float:right;cursor:pointer;' ><input type='submit' name='edit' value='Edit'><input type='submit' name='del' value='Delete'></span></form></td><td><a href ='download.php?file=".$row['subor']."'><span id='$pid'>".$row['Prilohy']."</span></a><span id='$epid' style='float:right;cursor:pointer;'><form method='POST' action><input type='hidden' name = 'priloha' value = '".$row['Prilohy']."'><input type='hidden' name = 'src' value = '".$row['subor']."'><input type='hidden' name = 'idp' value = '$pid'><input type='submit' name = 'del' value = 'Delete'></form></span><br><br>";
										else
											echo "<tr><td><form method='POST' action><input type='hidden' name='id' value='$id'><input type='hidden' name='kategoria' value='".$row['Kategoria']."'><span id='$id'><input type='text' name='$id' pattern='.{3,}'  title='3 or more characters' placeholder='".$row['Kategoria']."'></span><span id='$eid' style='float:right;cursor:pointer;' ><input type='submit' name='edit' value='Edit'><input type='submit' name='del' value='Delete'></span></form></td><td>";
											
										$kategoria = $row['Kategoria'];
										$tmp = 1;
									}else{
										$Ppoc++;
										$pid = "p".$Kid."_".$Ppoc;
										$epid = "ep".$Kid."_".$Ppoc;
										if(strlen($row['Prilohy']) > 2)
											echo "<a href ='download.php?file=".$row['subor']."'><span id='$pid'>".$row['Prilohy']."</span></a><span id='$epid' style='float:right;cursor:pointer;'><form method='POST' action><input type='hidden' name = 'priloha' value = '".$row['Prilohy']."'><input type='hidden' name = 'src' value = '".$row['subor']."'><input type='hidden' name = 'idp' value = '$pid'><input type='submit' name = 'del' value = 'Delete'></form></span><br><br>";
										
										
										
									}
										
									$last = $row;
									if(strlen($last['Kategoria'])>1)
										$lastkat = $last;
								}
								//if(strlen($row['Prilohy']) > 0)
									//echo "<br><br>";
								echo "<form method='POST' action enctype='multipart/form-data'><input type='file' name='subor' required style='margin-bottom:6px; margin-top:6px;'><input type='text' name='nazovp' pattern='.{3,}' required title='3 or more characters' placeholder='Nazov prílohy'><input type='hidden' name='category' value = '".$lastkat['Kategoria']."'><span style='float:right;cursor:pointer;'><input type='submit' value='Pridať'></form></span></td></tr>";
								echo "<tr><td><form method='POST' action><input type='text' name='newk' pattern='.{3,}' required title='3 or more characters' placeholder='Nazov kategórie'><span style='float:right;cursor:pointer;' ><input type='submit' name='add' value='Pridať'></form></td><td></td></tr>";
							}else{
							
								//echo "<form method='POST' action enctype='multipart/form-data'><input type='file' name='subor' required style='margin-bottom:6px; margin-top:6px;'><input type='text' name='nazovp' pattern='.{3,}' required title='3 or more characters' placeholder='Nazov prílohy'><input type='hidden' name='category' value = '".$lastkat['Kategoria']."'><span style='float:right;cursor:pointer;'><input type='submit' value='Pridať'></form></span></td></tr>";
								echo "<tr><td><form method='POST' action><input type='text' name='newk' pattern='.{3,}' required title='3 or more characters' placeholder='Nazov kategórie'><span style='float:right;cursor:pointer;' ><input type='submit' name='add' value='Pridať'></form></td><td></td></tr>";
							}
						}
						if(IsUser() || IsHR() || IsReporter()){
							if ($result->num_rows > 0) {
								while($row = $result->fetch_assoc()) {
									if(strcmp($kategoria,$row['Kategoria']) != 0){
										if($tmp == 1)
											echo "</tr>";
										echo "<tr><td>".$row['Kategoria']."</td><td><a href ='download.php?file=".$row['subor']."'>".$row['Prilohy']."</a>";
										$kategoria = $row['Kategoria'];
										$tmp = 1;
									}else{
										echo "<br><a href ='download.php?file=".$row['subor']."'>".$row['Prilohy']."</a>";
									}
										
									
								}
								echo "</tr>";
							}
						}
					}									
                    ?>
                    </tbody>
                </table>
				<?php
					//if((IsEditor() || IsAdmin())&& $_SESSION['edit'] == 0){
					if($_SESSION['edit'] == 0)
						echo "<form method='POST' action><input type='hidden' name='editmode' value = 1><input type='submit' value='Edit mode'></form>";
					if($_SESSION['edit'] == 1)
						echo "<form method='POST' action><input type='hidden' name='editmode' value = 0><input type='submit' value='Normal mode'></form>";
					//}
				?>
            </div>
        </div>
        <hr>

        <!-- career -->
    </div>
</div>

<!--container end-->

<!--footer start-->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-3">
                <div class="text-footer wow fadeInUp" data-wow-duration="2s" data-wow-delay=".1s">
                    <h1>
                        O nás
                    </h1>
                    <p>
                        Ústav automobilovej mechatroniky bol zriadený k 1. júlu 2013 ako pedagogické a vedecko-výskumné
                        pracovisko FEI STU. Zriadenie ústavu bolo logickým vyústením zámerov vedenia FEI STU vytvoriť
                        taký ústav, ktorý by zohľadňoval súčasné požiadavky a potreby automobilového priemyslu.
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-3 address wow fadeInUp" data-wow-duration="2s" data-wow-delay=".2s">
                <h1>
                    Kontakt
                </h1>
                <address>
                    <p><i class="fa fa-home pr-10"></i>Fakulta elektrotechniky a informatiky</p>
                    <p><i class="fa fa-globe pr-10"></i>Ilkovičova 3, 812 19 Bratislava</p>
                    <p><i class="fa fa-mobile pr-10"></i>+421 260 291 598</p>
                    <p><i class="fa fa-envelope pr-10"></i><a href="mailto:uamt.fei@gmail.com">uamt.fei@gmail.com</a>
                    </p>
                </address>
            </div>

            <div class="col-lg-3 col-sm-3">
                <div class="page-footer wow fadeInUp" data-wow-duration="2s" data-wow-delay=".3s">
                    <h1>
                        Užitočné stránky
                    </h1>
                    <ul class="page-footer-list">
                        <li>
                            <i class="fa fa-angle-right"></i>
                            <a href="http://is.stuba.sk">AIS STU</a>
                        </li>
                        <li>
                            <i class="fa fa-angle-right"></i>
                            <a href="http://aladin.elf.stuba.sk/rozvrh">Rozvrh hodín FEI</a>
                        </li>
                        <li>
                            <i class="fa fa-angle-right"></i>
                            <a href="http://elearn.elf.stuba.sk/moodle">Moodle FEI</a>
                        </li>
                        <li>
                            <i class="fa fa-angle-right"></i>
                            <a href="http://www.sski.sk/webstranka">SSKI</a>
                        </li>
                        <li>
                            <i class="fa fa-angle-right"></i>
                            <a href="https://www.jedalen.stuba.sk/WebKredit">Jedáleň STU</a>
                        </li>
                        <li>
                            <i class="fa fa-angle-right"></i>
                            <a href="https://webmail.stuba.sk">Webmail STU</a>
                        </li>
                        <li>
                            <i class="fa fa-angle-right"></i>
                            <a href="https://kis.cvt.stuba.sk/i3/epcareports/epcarep.csp?ictx=stu&language=1">Evidencia
                                publikácií STU</a>
                        </li>
                        <li>
                            <i class="fa fa-angle-right"></i>
                            <a href="http://okocasopis.sk">Časopis OKO</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-3 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".4s">
                <h1>POZRI SI VIDEO :)</h1>
                <iframe src="//www.youtube.com/embed/XTjNQoEZmbk" frameborder="0" allowfullscreen=""></iframe>
            </div>
        </div>
    </div>
</footer>
<!-- footer end -->
<!--small footer start -->
<footer class="footer-small">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-6 pull-right">
                <ul class="social-link-footer list-unstyled">
                    <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".1s"><a
                                href="https://www.facebook.com/UAMTFEISTU"><i class="fa fa-facebook"></i></a></li>
                    <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".2s"><a
                                href="https://www.youtube.com/channel/UCo3WP2kC0AVpQMIiJR79TdA"><i
                                    class="fa fa-youtube"></i></a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <div class="copyright">
                    <p>&copy; Copyright - 2017</p>
                </div>
            </div>
        </div>
    </div>
</footer>
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

    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
        document.getElementById("main").style.marginLeft = "250px";
        document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("main").style.marginLeft = "0";
        document.body.style.backgroundColor = "white";
    }


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