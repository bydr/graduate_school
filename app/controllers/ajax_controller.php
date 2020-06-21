<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include dirname(__DIR__)."/models/mysql_connect.php";
include_once dirname(__DIR__)."/functions.php";

if($_POST['operation']){
    switch($_POST['operation']){

        case "search-orders-student":
            $id = (int)$_POST['id'];
            $ordersForStudents = getOrdersForCurrentStudent($id);
            if($ordersForStudents){
                $table = include dirname(__DIR__)."/views/parts/orders-students-table-body.php";
                echo $table;
            }
            exit;

        case "search-orders-supervisor":
            $id = (int)$_POST['id'];
            $ordersForSupervisors = getOrdersForCurrentSupervisor($id);
            if($ordersForSupervisors){
                $table = include dirname(__DIR__)."/views/parts/orders-supervisors-table-body.php";
                echo $table;
            }
            exit;

        case "getStudent":
            $id = (int)$_POST['id'];
            $student = getStudent($id);
            if($student){
                echo json_encode($student, JSON_UNESCAPED_UNICODE);
                exit;
            }
            break;

        case "addOrdersForStudent":
            $idOrder = (int)$_POST['idOrder'];
            $idStudents = explode(",", $_POST['idStudents']);
            if (isset($idOrder) && count($idStudents) > 0) {
                if (!addOrdersForStudets($idOrder, $idStudents)) {
                    $error = "Ошибка добавления записи!";
                    $_SESSION['error'] = $error;
                }
            }
            exit;
    }
}
