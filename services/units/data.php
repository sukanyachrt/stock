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

else if ($data=='updateUnit'){
     $unit=$_POST;
     $connect->sql = "UPDATE `units` 
      SET `nameunit`='".$unit['editunitName']."',
      `status`='".$unit['editunitstatus']."'
      WHERE id='".$unit['editId']."'";
     $connect->queryData();
     echo json_encode($_POST);
}
else if($data=="delunit"){
    $id = $_GET['id'];
    $connect->sql = "UPDATE units SET  status='0'  WHERE id ='".$id."'";
    $connect->queryData();
    echo json_encode(1);
}
