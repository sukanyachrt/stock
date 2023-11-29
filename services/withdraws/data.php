<?php
header('Content-Type: application/json');
include('./../Connect_Data.php');
error_reporting(0);
$connect = new Connect_Data();
$connect->connectData();
$data = isset($_GET['v']) ? $_GET['v'] : '';
$result = array();
if ($data == "withdrawsProduct") {
    
    $withdraw = $_POST;
    $dataWithdraw = json_decode($withdraw['dataWithdraw'], true);
    foreach ($dataWithdraw as $item) {
        $connect->sql = "SELECT	numproduct  FROM	products WHERE id='" . $item['productid'] . "'";
        $connect->queryData();
        $rsconnect = $connect->fetch_AssocData();
        $numproduct=$rsconnect['numproduct'];
        if ($withdraw['typewithdraw'] == "เบิกสินค้า") {
            $numproduct=$numproduct- $item['numwithdraw'];
        } else {
            $numproduct=$numproduct+ $item['numwithdraw'];
        }
        $connect->sql = "UPDATE `products` SET numproduct='".$numproduct."' WHERE id='" . $item['productid'] . "'";
        $connect->queryData();

        $connect->sql = "INSERT INTO `withdraw`(`productid`, `employuse`, `numwithdraw`, `status`, `typewithdraw`) VALUES
        ('" . $item['productid'] . "','" . $withdraw['namewithdraw'] . "','" . $item['numwithdraw'] . "','1','" . $withdraw['typewithdraw'] . "')";
        $connect->queryData();
       

    }


    echo json_encode(1);
} else if ($data == "searchProducts") {
    $connect->sql = "SELECT	products.id,	productid,	barcode,	productname,	imageproduct,	products.`status`,	typeproduct,	numproduct,	nametype,	nameunit,	unit 
    FROM	products
	INNER JOIN units ON products.unit = units.id
	INNER JOIN producttype ON products.typeproduct = producttype.id WHERE  products.`status`=1 ORDER BY products.productname asc";
    $connect->queryData();
    while ($rsconnect = $connect->fetch_AssocData()) {
        array_push($result, $rsconnect);
    }
    echo json_encode($result);
} else if ($data == "searchProductsByBarcode") {
    $connect->sql = "SELECT	products.id,	productid,	barcode,	productname,	imageproduct,	products.`status`,	typeproduct,	numproduct,	nametype,	nameunit,	unit 
    FROM	products
	INNER JOIN units ON products.unit = units.id
	INNER JOIN producttype ON products.typeproduct = producttype.id
    WHERE products.barcode='" . $_GET['barcode'] . "' AND products.`status`=1
    ORDER BY products.productname asc";
    $connect->queryData();
    $rsconnect = $connect->fetch_AssocData();
    array_push($result, $rsconnect);
    echo json_encode($result[0]);
} else if ($data == "findnumproduct") {
    $connect->sql = "SELECT	numproduct     FROM	products WHERE id='" . $_GET['productid'] . "'";
    $connect->queryData();
    $rsconnect = $connect->fetch_AssocData();
    array_push($result, $rsconnect);
    echo json_encode($result[0]);
}
