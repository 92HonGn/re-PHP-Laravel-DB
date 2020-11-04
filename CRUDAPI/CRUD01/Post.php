<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include_once './Connect.php';
include_once '../Employees.php';

$connect = new Connect();
$db = $connect->getConnection();

$item = new Employee($db);

$data = json_decode(file_get_contents("php://input"));

$item->name = $data->name;
$item->email = $data->email;
$item->age = $data->age;
$item->designation = $data->designation;
$item->created = date('Y-m-d H:i:s');

if ($item->createEmployee()) {
	echo '創建成功';
} else {
	echo '創建失敗';
}
?>