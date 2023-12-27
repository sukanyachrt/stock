<?php
header('Content-Type: application/json');
include('./../Connect_Data.php');
error_reporting(0);
$connect = new Connect_Data();
$connect->connectData();
$data = isset($_GET['v']) ? $_GET['v'] : '';
$result = array();
if ($data == "insertdistributor") {
    $distributor = $_POST;
    $connect->sql = "INSERT INTO `distributor`(`nametype`, `status`) VALUES
     ('" . $distributor['nametype'] . "','1')";
    $connect->queryData();
    echo json_encode($_POST);
} else if ($data == "searchdistributor") {
    $connect->sql = "SELECT * FROM distributor ORDER BY nametype asc";
    $connect->queryData();
    while ($rsconnect = $connect->fetch_AssocData()) {
        array_push($result, $rsconnect);
    }
    echo json_encode($result);
} else if ($data == "deldistributor") {
    $id = $_GET['id'];
    $connect->sql = "UPDATE distributor SET  status='0'  WHERE id ='" . $id . "'";
    $connect->queryData();
    echo json_encode(1);
} else if ($data == "updatedistributor") {
    $distributor = $_POST;
    $connect->sql = "UPDATE `distributor` 
     SET `nametype`='" . $distributor['editnametype'] . "',
     `status`='" . $distributor['edittypestatus'] . "'
     WHERE id='" . $distributor['editId'] . "'";
    $connect->queryData();
    echo json_encode($_POST);
}
