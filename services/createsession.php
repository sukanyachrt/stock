<?php
header('Content-Type: application/json');
session_start(); // เริ่ม Session

if (isset($_POST['status']) && $_POST['status'] === 'ok') {
    $data = $_POST['data'];
    $_SESSION['id'] = $data['id'];
    $_SESSION['fname'] = $data['fname'];
    $_SESSION['lname'] = $data['fname'];
    $_SESSION['role_emp'] = $data['role_emp'];
    // สร้างค่าอื่น ๆ จากข้อมูลที่ถูกส่งมา
    //    echo json_encode($_POST);
    echo json_encode(["data" => "ok", 'role_emp'=>$data['role_emp']]);
} else {
    echo json_encode(["data" => "no"]);
}
