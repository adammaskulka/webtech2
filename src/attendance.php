<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require('../cfg/config.php');
try {
    $conn = new PDO("mysql:host=$CONF_DB_HOST;dbname=$CONF_DB_NAME", $CONF_DB_USER, $CONF_DB_PASS);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
$postdata = file_get_contents("php://input");
if (isset($postdata) && !empty($postdata)) {
    $request = json_decode($postdata);
    $toDo = $request->todo;

    if ($toDo == 0) {
        $state = $request->state;
        $date = $request->date;
        $id = $request->id;
        try {
            $sql = "INSERT INTO dochadzka (`date`, typeOfDay, userId)
                VALUES('$date', '$state', $id)";
            $conn->exec($sql);
            echo "New record created successfully";
        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
    } elseif ($toDo == 1) {
        $month = $request->month;
        $year = $request->year;


        try {
            $i = 0;
            $dateFrom = $year . "-" . $month . "-01";
            $dateTo = $year . "-" . $month . "-31";
            $stmt = $conn->prepare("SELECT `date`, typeOfDay, userId FROM dochadzka WHERE date BETWEEN '" . $dateFrom . "' AND '" . $dateTo . "' ");
            $stmt->execute();
            $results = $stmt->fetchAll();

            $json = json_encode(array_values($results));
            echo $json;
            exit;
        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
    } elseif ($toDo == 2) {
        $state = $request->state;
        $date = $request->date;
        $id = $request->id;
        try {
            $sql = "DELETE FROM dochadzka WHERE `date`='$date' AND userId='$id'";
            $conn->exec($sql);
            echo "Record deleted successfully";
        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
    } elseif ($toDo == 3) {
        $state = $request->state;
        $date = $request->date;
        $id = $request->id;
        try {
            $sql = "UPDATE dochadzka SET typeOfDay='$state' WHERE `date`='$date' AND userId='$id' ";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $conn->exec($sql);
            echo $stmt->rowCount() . " records UPDATED successfully";
        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
    }
}