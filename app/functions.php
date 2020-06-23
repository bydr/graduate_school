<?php
include_once "models/Supervisor.php";
include_once "models/Student.php";

use models\Student;
use models\Supervisor;

$orders = getAllOrders();
$ordersForStudents = getOrdersForStudents();
$ordersForSupervisors = getOrdersForSupervisors();
$studentTypes = getAllStudentsType();
$groupExamsStudents = getGroupExamsStudents();

const SCAN_PATH = '/img/_src/scans/';
const SCAN_FILE_EXTENSION = ['.jpg', '.png', '.jpeg'];

// проверка на существование скана приказа
function checkScanFile($scan) {
    foreach (SCAN_FILE_EXTENSION as $extension) {
        $image =  SCAN_PATH . $scan . $extension;
        if (!file_exists($_SERVER['DOCUMENT_ROOT'] . $image)) {
            $image = '/img/_src/no-image.png';
        } else {
            return $image;
        }
    }
    return $image;
}

// вывод списка данных
function getDataList($data, $arrayValue, $dataListId, $label) {

    $dataList = "
<div class='datalist'>
<label>$label</label>
<input type='text' list='$dataListId' class='datalist-search' data-id='0'>
<datalist id='$dataListId' class='datalist-drop'>";
    foreach ($data as $item) {
        $valConcat = "";
        $iterator = 0;
        do  {
            $valConcat .= $item[$arrayValue[$iterator]];
            $valConcat .= $iterator == count($arrayValue) - 1 ? "" : ", " ;
            $iterator++;
        } while ($iterator < count($arrayValue));
        $dataList .= "<option data-id='".$item['id']."' value='$valConcat'></option>";
    }
    $dataList .= "</datalist></div>";

    return $dataList;
}

//получение и распарсивание списка преподавателей
$db_supervisors = getAllSupervisors();
$supervisors = [];

if($db_supervisors){
    foreach($db_supervisors as $item){
        $supervisors[] = new Supervisor(
            $item['id'],
            $item['fio'],
            $item['date_birth'],
            $item['registration'],
            $item['specialty'],
            $item['rank'],
            $item['date_employent'],
            $item['date_dismissal'],
            $item['phone'],
            $item['diplom_series'],
            $item['diplom_number'],
            $item['education'],
            $item['passport'],
            $item['issued_by'],
            $item['issued_when']
        );

    } //foreach
}

// получение и распарсивание списка студентов
$db_students = getAllStudents();
$students = [];
if($db_students){
    foreach($db_students as $item){
        $students[] = new Student(
            $item['id']
            ,$item['name']
            ,$item['surname']
            ,$item['patronymic']
            ,$item['date_birth']
            ,$item['registration']
            ,$item['phone']
            ,$item['theme']
            ,$item['date_begin']
            ,$item['date_end']
            ,$item['type']
            ,$item['fio_supervisor']
        );

    } //foreach
}
