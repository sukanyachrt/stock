<?php
header('Content-Type: application/json');
include('./../Connect_Data.php');
error_reporting(0);
$connect = new Connect_Data();
$connect->connectData();
$data = isset($_GET['v']) ? $_GET['v'] : '';
$result = array();
if ($data == "insertPro") {
    $product = $_POST;
    $connect->sql = "INSERT INTO `products` 
    (`productid`, `barcode`, `productname`, `unit`,
     `imageproduct`, `status`, `typeproduct`,
      `numproduct`, `dateinsert`, `nameinsert`,
       `dateupdate`) VALUES 
       ('" . $product['productid'] . "',
       '" . $product['barcode'] . "',
       '" . $product['productname'] . "',
       '" . $product['productunit'] . "',
       '" . $product['base64Image'] . "',
       '1',
       '" . $product['producttype'] . "',
       '" . $product['productnumber'] . "',
       '" . date('Y-m-d H:i:s') . "',
       'nameinsert',
       '" . date('Y-m-d H:i:s') . "'
       )";
    $connect->queryData();
    echo json_encode($_POST);
} else if ($data == "searchProducts") {
    $connect->sql = "SELECT	products.id,	productid,	barcode,	productname,	imageproduct,	products.`status`,	typeproduct,	numproduct,	nametype,	nameunit,	unit 
    FROM	products
	INNER JOIN units ON products.unit = units.id
	INNER JOIN producttype ON products.typeproduct = producttype.id ORDER BY products.productname asc";
    $connect->queryData();
    while ($rsconnect = $connect->fetch_AssocData()) {
        array_push($result, $rsconnect);
    }
    echo json_encode($result);
} else if ($data == "searchProductsByID") {

    $connect->sql = "SELECT	products.id,	productid,	barcode,	productname,	imageproduct,	products.`status`,	typeproduct,	numproduct,	nametype,	nameunit,	unit 
    FROM	products
	INNER JOIN units ON products.unit = units.id
	INNER JOIN producttype ON products.typeproduct = producttype.id
    WHERE products.id='" . $_GET['id'] . "'
    ORDER BY products.productname asc";
    $connect->queryData();
    $rsconnect = $connect->fetch_AssocData();
    array_push($result, $rsconnect);
    echo json_encode($result[0]);
} else if ($data == "searchProductsByBarcode") {

    $connect->sql = "SELECT	products.id,	productid,	barcode,	productname,	imageproduct,	products.`status`,	typeproduct,	numproduct,	nametype,	nameunit,	unit 
    FROM	products
	INNER JOIN units ON products.unit = units.id
	INNER JOIN producttype ON products.typeproduct = producttype.id
    WHERE products.barcode='" . $_GET['barcode'] . "'
    ORDER BY products.productname asc";
    $connect->queryData();
    $rsconnect = $connect->fetch_AssocData();
    array_push($result, $rsconnect);
    echo json_encode($result[0]);
} else if ($data == 'delproduct') {
    $id = $_GET['id'];
    $connect->sql = "UPDATE products SET  status='0'  WHERE id ='" . $id . "'";
    $connect->queryData();
    echo json_encode(1);
} else if ($data == 'updatePro') {
    $product = $_POST;
    $connect->sql = "UPDATE `products` SET 
     `productid`='" . $product['editproductid'] . "',
     `barcode`='" . $product['editbarcode'] . "',
     `productname`='" . $product['editproductname'] . "',
     `unit`='" . $product['editproductunit'] . "',
     `imageproduct`='" . $product['editbase64Image'] . "',
     `typeproduct`='" . $product['editproducttype'] . "',
     `numproduct`='" . $product['editproductnumber'] . "',
     `status`='" . $product['editproductstatus'] . "',
     `nameinsert`='nameinsert',
     `dateupdate`='" . date('Y-m-d H:i:s') . "'
      WHERE id='" . $product['editId'] . "'";
    $connect->queryData();
    echo json_encode($_POST);
}
