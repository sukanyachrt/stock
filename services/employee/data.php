<?php
header('Content-Type: application/json');
include('./../Connect_Data.php');
error_reporting(0);
$connect = new Connect_Data();
$connect->connectData();
$data = isset($_GET['v']) ? $_GET['v'] : '';
$result = array();
if ($data == "insertEmp") {
    $emp = $_POST;
    $connect->sql = "INSERT INTO  employees (username,fname,lname,empid,depart,status_emp,role_emp,passowrd) VALUES 
    ('" . $emp['username'] . "',
    '" . $emp['fname'] . "',
    '" . $emp['lname'] . "',
    '" . $emp['empid'] . "',
    '" . $emp['depart'] . "',
    '1','" . $emp['role_emp'] . "','" . $emp['password'] . "'
    )";
    $connect->queryData();
    echo json_encode($_POST);
} else if ($data == "searchemp") {

    $connect->sql = "SELECT empid,t1.id as id,fname ,lname,depart,status_emp,role_emp,departname,username,password FROM
	employees AS t1
	INNER JOIN depart AS t2 ON t1.depart = t2.id ORDER BY t1.id desc";
    $connect->queryData();
    while ($rsconnect = $connect->fetch_AssocData()) {
        array_push($result, $rsconnect);
    }
    echo json_encode($result);
}

else if ($data == "editemp") {
    $emp = $_POST;
    $connect->sql = "UPDATE employees SET  username='".$emp['editusername']."',fname='".$emp['editfname']."',lname='".$emp['editlname']."',    empid='".$emp['editempid']."',    depart='".$emp['editdepart']."', role_emp='".$emp['editrole_emp']."',password='".$emp['editpassword']."'  WHERE id ='".$emp['editId']."'";
    $connect->queryData();
    echo json_encode($emp);
}

else if ($data == "delemp") {
    $id = $_GET['id'];
    $connect->sql = "UPDATE employees SET  status_emp='0'  WHERE id ='".$id."'";
    $connect->queryData();
    echo json_encode(1);
}

