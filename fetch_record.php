<?php
session_start();
	
	if(isset($_GET['lang'])){
		$_SESSION['lang'] = $_GET['lang'];
	}
	
	if(!isset($_SESSION['lang']))  
		$_SESSION['lang'] = 'sk';

require('cfg/config.php');
$mysqli = new mysqli($CONF_DB_HOST, $CONF_DB_USER, $CONF_DB_PASS, $CONF_DB_NAME);
if($mysqli->connect_error){
die("Connect error" . $mysqli->connect_error);
}
mysqli_set_charset($mysqli,"utf8");

if($_POST['rowid']) {
    $id = $_POST['rowid']; //escape string
	    
	$sql="SELECT * FROM Projekty WHERE ID='".$id."'";
	$result = $mysqli->query($sql);
	
	$titleJ= $_SESSION['lang']."Title";
	$annotationJ= $_SESSION['lang']."Annotation";
	
	if($_SESSION['lang'] == 'sk'){
		echo "<table class='table'><tr><th>Číslo projektu</th><th>Názov projektu</th><th>Doba riešenia</th><th>Zodpovedný riešiteľ</th><th>Anotácia</th></tr>";
		}
		else{
		echo "<table class='table'><tr><th>Project ID</th><th>Name</th><th>Project duration</th><th>Principal investigator</th><th>Annotation</th></tr>";
		}


		if (mysqli_num_rows($result) > 0) {
			while($row = mysqli_fetch_assoc($result)) {
			
			$od = date("d", strtotime($row['StartDuration'])) ." ". date("M", strtotime($row['StartDuration'])) ." ". date("Y", strtotime($row['StartDuration']));
			$do = date("d", strtotime($row['EndDuration'])) ." ". date("M", strtotime($row['EndDuration'])) ." ". date("Y", strtotime($row['EndDuration']));
			echo "<tr>";	
			echo "<td>".$row['Number']."</td>";
			echo "<td>".$row[''.$titleJ.'']."</td>";
			echo "<td>".$od." - ".$do."</td>";
			echo "<td>".$row['Coordinator']."</td>";
			echo "<td>".$row[''.$annotationJ.'']."</td>";
			echo "</tr>";
			}
		}
		echo "</table>";
 }
?>
