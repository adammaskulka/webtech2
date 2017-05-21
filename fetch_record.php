<?php
require('config.php');
$mysqli = new mysqli($CONF_DB_HOST, $CONF_DB_USER, $CONF_DB_PASS, $CONF_DB_NAME);
if($mysqli->connect_error){
die("Connect error" . $mysqli->connect_error);
}
mysqli_set_charset($mysqli,"utf8");

if($_POST['rowid']) {
    $id = $_POST['rowid']; //escape string
	    
	$sql="SELECT * FROM Projekty WHERE ID='".$id."'";
	$result = $mysqli->query($sql);
	
	echo "<table class='table'><tr><th>Číslo projektu</th><th>Názov projektu</th><th>Doba riešenia</th><th>Zodpovedný riešiteľ</th><th>Anotácia</th></tr>";

		if (mysqli_num_rows($result) > 0) {
			while($row = mysqli_fetch_assoc($result)) {
			
			$od = date("d", strtotime($row['StartDuration'])) ." ". date("M", strtotime($row['StartDuration'])) ." ". date("Y", strtotime($row['StartDuration']));
			$do = date("d", strtotime($row['EndDuration'])) ." ". date("M", strtotime($row['EndDuration'])) ." ". date("Y", strtotime($row['EndDuration']));
			echo "<tr>";	
			echo "<td>".$row['Number']."</td>";
			echo "<td>".$row['skTitle']."</td>";
			echo "<td>".$od." - ".$do."</td>";
			echo "<td>".$row['Coordinator']."</td>";
			echo "<td>".$row['skAnnotation']."</td>";
			echo "</tr>";
			}
		}
		echo "</table>";
	
 }
?>