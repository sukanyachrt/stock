<?php
header('Content-Type: application/json');
include('./../Connect_Data.php');
error_reporting(0);
$connect = new Connect_Data();
$connect->connectData();
$data = isset($_GET['v']) ? $_GET['v'] : '';
$result = array();
if ($data == "insertProducttype") {
    $producttype = $_POST;
    $connect->sql = "INSERT INTO `producttype`(`nametype`, `status`) VALUES
     ('" . $producttype['nametype'] . "','1')";
    $connect->queryData();
    echo json_encode($_POST);
} else if ($data == "searchProducttype") {
    $connect->sql = "SELECT * FROM producttype ORDER BY nametype asc";
    $connect->queryData();
    while ($rsconnect = $connect->fetch_AssocData()) {
        array_push($result, $rsconnect);
    }
    echo json_encode($result);
} else if ($data == "delproducttype") {
    $id = $_GET['id'];
    $connect->sql = "UPDATE producttype SET  status='0'  WHERE id ='" . $id . "'";
    $connect->queryData();
    echo json_encode(1);
} else if ($data == "updateProducttype") {
    $producttype = $_POST;
    $connect->sql = "UPDATE `producttype` 
     SET `nametype`='" . $producttype['editnametype'] . "',
     `status`='" . $producttype['edittypestatus'] . "'
     WHERE id='" . $producttype['editId'] . "'";
    $connect->queryData();
    echo json_encode($_POST);
}
