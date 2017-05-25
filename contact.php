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
        Ústav automobilovej mechatroniky FEI STU | Kontakt
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
                    Kontakt
                </h1>
            </div>
            <div class="col-lg-8 col-sm-8">
                <ol class="breadcrumb pull-right">
                    <li>
                        <a href="index.php">
                            Domov
                        </a>
                    </li>
                    <li class="active">
                        Kontakt
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
        <div class="col-lg-5 col-sm-5 address">
            <section class="contact-infos">
                <h4 class="title custom-font text-black">
                    Adresa
                </h4>
                <address>
                    Ústav automobilovej mechatroniky <br>
                    Fakulta elektrotechniky a informatiky STU <br>
                    Ilkovičova 3 <br>
                    812 19 Bratislava
                </address>
            </section>
            <section class="contact-infos">
                <h4>
                    Kontaktné informácie
                </h4>
                <p>
                    Katarína Kermietová <br>
                    Miestnosť: D 116 <br>
                </p>
                <p>
                    <i class="icon-phone">
                    </i>
                    +421 260 291 598
                </p>

                <p><i class="fa fa-envelope pr-10"></i><a href="mailto:katarina.kermietova@stuba.sk">katarina.kermietova
                    [at] stuba.sk</a></p>
                <p><i class="fa fa-envelope pr-10"></i><a href="mailto:uamt.fei@gmail.com">uamt.fei@gmail.com</a></p>

                <p><i class="fa fa-globe pr-10"></i><a href="http://www.uamt.fei.stuba.sk">www.uamt.fei.stuba.sk</a></p>

            </section>
        </div>


        <div class="col-lg-7 col-sm-7 address">
            <h4>
                Kontaktný formulár
            </h4>
            <div class="contact-form">
                <form role="form" action="/web/?q=contact" id="contact-site-form" method="post" accept-charset="UTF-8">
                    <div class="form-group">
                        <label for="name">
                            Vaše meno a priezvisko *
                        </label>
                        <input type="text" id="edit-name" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email">
                            Vaša e-mailová adresa *
                        </label>
                        <input type="text" id="edit-mail" name="mail" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="phone">
                            Predmet *
                        </label>
                        <input type="text" id="edit-subject" name="subject" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="phone">
                            Správa *
                        </label>
                        <textarea id="edit-message" name="message" rows="5" class="form-control">
                </textarea>
                        <input type="hidden" name="form_build_id"
                               value="form-LUZ48VI9CB4EV0WZxsFvfaMIxDeu4vf6D3KShb3HrVw">
                        <input type="hidden" name="form_id" value="contact_site_form">
                    </div>
                    <button class="btn btn-info" type="submit" id="edit-submit" name="op">
                        Submit
                    </button>
                </form>
            </div>
        </div>
    </div>

</div>
<!--container end-->

<!--google map start-->
<div class="contact-map">
    <div id="map-canvas" style="width: 100%; height: 400px">
    </div>
</div>
<!--google map end-->

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
<script type="text/javascript" src="assets/bxslider/jquery.bxslider.js">
</script>

<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBmrLNGaYlB0ZJ9xdU6xJO--_4xh4aIwCA&libraries=places&callback=initMap">
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


<script>

    function initMap() {
        var fei = {lat: 48.151864, lng: 17.073301};
        var map = new google.maps.Map(document.getElementById('map-canvas'), {
            zoom: 16,
            center: fei
        });
        var infowindow = new google.maps.InfoWindow();
        var service = new google.maps.places.PlacesService(map);

        service.getDetails({
            placeId: 'ChIJky-5POyLbEcRvSyAsBN7Zv8'
        }, function (place, status) {
            if (status === google.maps.places.PlacesServiceStatus.OK) {
                var marker = new google.maps.Marker({
                    map: map,
                    position: place.geometry.location
                });
//                console.log(place);
                google.maps.event.addListener(marker, 'click', function () {
//                    infowindow.setContent('<div><strong>' + place.name + '</strong><br>' +
//                        'Place ID: ' + place.place_id + '<br>' +
//                        place.formatted_address + '</div>');
                    infowindow.setContent('<strong>' + place.name + '</strong><br>' + place.adr_address);

                    infowindow.open(map, this);
                });
            }
        });
    }

</script>

</body>
</html>
