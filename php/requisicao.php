<?php

session_start();

if(isset($_SESSION['toDoList'])){
    $arrayList = $_SESSION['toDoList'];
    array_push($arrayList, $_GET['text']);
    $_SESSION['toDoList'] = $arrayList;
    header('Content-Type: application/json');
    echo json_encode($arrayList);
    return;
}

header('Content-Type: application/json');
$_SESSION['toDoList'] = array($_GET['text']);

echo json_encode($_SESSION['toDoList']);