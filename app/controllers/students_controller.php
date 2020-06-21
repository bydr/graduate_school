<?php

include dirname(__DIR__)."/models/mysql_connect.php";
include_once dirname(__DIR__)."/functions.php";

//добавление или редактирование студента
if (isset($_POST['addStudent']) || isset($_POST['editStudent'])){

    $id = (int)$_POST['id_student'];
    $surname = $_POST['surname'];
    $name = $_POST['firstname'];
    $patronymic = $_POST['patronymic'];
    $date_birth = (string)$_POST['date_birth'];
    $phone = $_POST['phone'];
    $type_student = (int)$_POST['type_student'];
    $theme = $_POST['theme'];
    $supervisor = (int)$_POST['supervisor'];
    $registration = $_POST['registration'];
    $date_begin = (string)$_POST['date_begin'];
    $date_end = (string)$_POST['date_end'];


    if(isset($_POST['addStudent'])){
        if(!addStudent($surname, $name, $patronymic,$date_birth, $phone, $type_student, $theme, $supervisor, $registration, $date_begin, $date_end)){
            $error = "Ошибка добавления пользователя!";
            $_SESSION['error'] = $error;
        } //if
    } else {
        if(is_null(editStudent($surname, $name, $patronymic,$date_birth, $phone, $type_student, $theme, $supervisor, $registration, $date_begin, $date_end, $id))){
            $error = "Ошибка редактирования пользователя!";
            $_SESSION['error'] = $error;
        } //if
    }

    header("Location: /students");
    exit;
} //добавление или редактирование подписчика

include dirname(__DIR__) . "/views/students.php";
