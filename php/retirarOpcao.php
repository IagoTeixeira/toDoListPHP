<?php 

session_start();

$arrayList = $_SESSION['toDoList'];
unset($arrayList[$_GET['id']]);
$_SESSION['toDoList'] = $arrayList;
header('Content-Type: application/json');
echo json_encode($arrayList);
return;
