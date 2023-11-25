<?php
header('Content-Type: application/json');
include('./../Connect_Data.php');
error_reporting(0);
$connect = new Connect_Data();
$connect->connectData();
$data = isset($_GET['v']) ? $_GET['v'] : '';
$result = array();
if ($data == "insertUnit") {
    $unit = $_POST;
    $connect->sql = "INSERT INTO `units`(`nameunit`, `status`) VALUES
     ('" . $unit['unitName'] . "','1')";
    $connect->queryData();
    echo json_encode($_POST);
} else if ($data == "searchUnits") {
    $connect->sql = "SELECT * FROM units ORDER BY nameunit asc";
    $connect->queryData();
    while ($rsconnect = $connect->fetch_AssocData()) {
        array_push($result, $rsconnect);
    }
    echo json_encode($result);
}
