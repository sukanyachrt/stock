<?php
header('Content-Type: application/json');
include('./../Connect_Data.php');
error_reporting(0);
$connect = new Connect_Data();
$connect->connectData();
$connect2 = new Connect_Data();
$connect2->connectData();
$data = isset($_GET['v']) ? $_GET['v'] : '';
$result = array();
if ($data == "stockoftypeproduct") {
    $resType = array();
    $connect->sql = "SELECT nametype,id FROM 	producttype
    WHERE `status`=1
    GROUP BY nametype";
    $connect->queryData();
    while ($rsconnect = $connect->fetch_AssocData()) {

        $connect2->sql = "SELECT  sum( numproduct ) AS numproduct     FROM     products     
        WHERE `status` = 1 AND typeproduct='" . $rsconnect['id'] . "'";
        $connect2->queryData();
        if ($row = $connect2->num_rows() > 0) {

            $rsconnect2 = $connect2->fetch_AssocData();
            array_push($result, ['nametype' => $rsconnect['nametype'], 'numproduct' => $rsconnect2['numproduct']]);
        }
    }
    echo json_encode($result);
} else if ($data == 'stockofproduct') {
    $connect->sql = "SELECT	sum( numproduct ) AS numproduct,	productname,	barcode 
    FROM	products WHERE	`status` = 1 
    GROUP BY	productname,	barcode";
    $connect->queryData();
    while ($rsconnect = $connect->fetch_AssocData()) {
        array_push($result, $rsconnect);
    }
    

    echo json_encode($result);
}
