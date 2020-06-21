<?php
function connection()
{
    $host = '127.0.0.1'; // адрес сервера
    $database = 'graduate_school'; // имя базы данных
    $user = 'root'; // имя пользователя
    $password = ''; // пароль

    $db = mysqli_connect($host, $user, $password, $database);
    mysqli_set_charset($db, "utf8");

    return $db;
} //connection


function getAllOrders()
{
    $db = connection();
    $query = mysqli_query($db, "select * from orders order by title asc");
    $result = array();
    while ($row = mysqli_fetch_assoc($query)) {
        $result[] = $row;
    }
    return $result;
} //getAllOrders


function getOrdersForStudents()
{
    $db = connection();
    $query = mysqli_query($db, "select
        os.id as 'id',
       o.title,
       o.scan_id,
       o.date,
    concat( s.surname, ' ', s.name, ' ', s.patronymic) as 'fio'
     ,s.id as 'student_id'
     , s.date_birth
     , s.registration
     , s.phone
     , s.theme
     , s.date_begin
     , s.date_end
     , st.type
     , concat(s2.surname, ' ', s2.name, ' ', s2.patronymic) as 'fio_supervisor'
from students s
         join students_type st on s.type_id = st.id
         join supervisors s2 on s.supervisor_id = s2.id
        join orders_students os on s.id = os.student_id
        join orders o on os.order_id = o.id
order by os.id desc");
    $result = array();
    while ($row = mysqli_fetch_assoc($query)) {
        $result[] = $row;
    }
    return $result;
} //getOrdersForStudents


function getOrdersForSupervisors()
{
    $db = connection();
    $query = mysqli_query($db, "select
    o.title,
    o.scan_id,
    o.date,
    os.id,
    concat(s2.surname, ' ',s2.name, ' ', s2.patronymic) as 'fio',
    s2.date_birth,
    s2.registration,
    s2.specialty,
    rt.type as 'rank',
    s2.date_employent,
    s2.date_dismissal,
    s2.phone,
    de.diplom_series,
    de.diplom_number,
    de.education,
    s2.passport,
    s2.issued_by,
    s2.issued_when
from supervisors s2
         join ranks_type rt on s2.rank_id = rt.id
         join data_education de on s2.education_id = de.id
        join orders_supervisors os on s2.id = os.supervisor_id
        join orders o on os.order_id = o.id
order by os.id desc");
    $result = array();
    while ($row = mysqli_fetch_assoc($query)) {
        $result[] = $row;
    }
    return $result;
} //getOrdersForSupervisors


function getOrdersForCurrentStudent($id)
{
    $db = connection();
    $query = mysqli_prepare($db, "select
       o.title,
       o.scan_id,
       o.date,
    concat(s.surname, ' ', s.name, ' ', s.patronymic) as 'fio'
     ,s.id
     , s.date_birth
     , s.registration
     , s.phone
     , s.theme
     , s.date_begin
     , s.date_end
     , st.type
     , concat(s2.surname, ' ', s2.name, ' ', s2.patronymic) as 'fio_supervisor'
from students s
         join students_type st on s.type_id = st.id
         join supervisors s2 on s.supervisor_id = s2.id
        join orders_students os on s.id = os.student_id
        join orders o on os.order_id = o.id
        where s.id = ?
order by title");

    mysqli_stmt_bind_param($query, 'i', $id);

    /* выполнение подготовленного запроса */
    mysqli_stmt_execute($query);
    $res = mysqli_stmt_get_result($query);
    $result = array();
    while ($row = mysqli_fetch_assoc($res)) {
        $result[] = $row;
    }
    return $result;
} //getOrdersForCurrentStudent


function getOrdersForCurrentSupervisor($id)
{
    $db = connection();
    $query = mysqli_prepare($db, "select
    o.title,
    o.scan_id,
    o.date,
    s2.id,
    concat(s2.surname, ' ',s2.name, ' ', s2.patronymic) as 'fio',
    s2.date_birth,
    s2.registration,
    s2.specialty,
    rt.type as 'rank',
    s2.date_employent,
    s2.date_dismissal,
    s2.phone,
    de.diplom_series,
    de.diplom_number,
    de.education,
    s2.passport,
    s2.issued_by,
    s2.issued_when
from supervisors s2
         join ranks_type rt on s2.rank_id = rt.id
         join data_education de on s2.education_id = de.id
        join orders_supervisors os on s2.id = os.supervisor_id
        join orders o on os.order_id = o.id
        where s2.id = ?
order by title");

    mysqli_stmt_bind_param($query, 'i', $id);

    /* выполнение подготовленного запроса */
    mysqli_stmt_execute($query);
    $res = mysqli_stmt_get_result($query);
    $result = array();
    while ($row = mysqli_fetch_assoc($res)) {
        $result[] = $row;
    }
    return $result;
} //getOrdersForCurrentSupervisor


function getAllStudents()
{
    $db = connection();
    $query = mysqli_query($db, "select
       s.surname,
       s.name,
       s.patronymic
        ,s.id
     , s.date_birth
     , s.registration
     , s.phone
     , s.theme
     , s.date_begin
     , s.date_end
     , st.type
    , concat(s2.surname, ' ', s2.name, ' ', s2.patronymic) as 'fio_supervisor'
from students s
    join students_type st on s.type_id = st.id
    join supervisors s2 on s.supervisor_id = s2.id
order by id desc");
    $result = array();
    while ($row = mysqli_fetch_assoc($query)) {
        $result[] = $row;
    }
    return $result;
} //getAllStudents

function getAllSupervisors()
{
    $db = connection();
    $query = mysqli_query($db, "select
       s2.id,
       concat(s2.surname, ' ',s2.name, ' ', s2.patronymic) as 'fio',
       s2.date_birth,
       s2.registration,
       s2.specialty,
       rt.type as 'rank',
       s2.date_employent,
       s2.date_dismissal,
       s2.phone,
       de.diplom_series,
       de.diplom_number,
       de.education,
       s2.passport,
       s2.issued_by,
       s2.issued_when
from supervisors s2
    join ranks_type rt on s2.rank_id = rt.id
    join data_education de on s2.education_id = de.id
order by id desc");
    $result = array();
    while ($row = mysqli_fetch_assoc($query)) {
        $result[] = $row;
    }
    return $result;
} //getAllSupervisors


//получение типов студентов
function getAllStudentsType()
{
    $db = connection();
    $query = mysqli_query($db, "select * from students_type st"
    );

    $result = array();
    while ($row = mysqli_fetch_assoc($query)) {
        $result[] = $row;
    }
    return $result;
}


//добавление студента
function addStudent($surname, $name, $patronymic, $date_birth, $phone, $type_student, $theme, $supervisor, $registration, $date_begin, $date_end)
{
    $db = connection();
    $date_end = strlen($date_end) > 0 ? "'.$date_end.'" : 'NULL';
    $query = "insert into students(name, surname, patronymic, date_birth, registration, phone, supervisor_id, theme, date_begin, date_end, type_id) 
        value ('$name', '$surname', '$patronymic', '$date_birth', '$registration', '$phone', '$supervisor', '$theme', '$date_begin', $date_end, $type_student)";
    if (mysqli_query($db, "$query")) {
        return mysqli_insert_id($db);
    } else {
        echo mysqli_error($db);
    }
}

//редактирование студента
function editStudent($surname, $name, $patronymic, $date_birth, $phone, $type_student, $theme, $supervisor, $registration, $date_begin, $date_end, $id)
{
    $db = connection();
    $date_end = strlen($date_end) > 0 ? $date_end : NULL;
    $query = mysqli_prepare($db, "update students s set name= ?,surname= ?,patronymic= ?, date_birth = ?, registration = ?, phone = ?, supervisor_id = ?, type_id = ?, theme = ?, date_begin = ?, date_end = ? where s.id = ?");
    mysqli_stmt_bind_param($query, 'ssssssddsssd',
        $name,
        $surname,
        $patronymic,
        $date_birth,
        $registration,
        $phone,
        $supervisor,
        $type_student,
        $theme,
        $date_begin,
        $date_end,
        $id);

    /* выполнение подготовленного запроса */
    mysqli_stmt_execute($query);

    return mysqli_affected_rows($db) == -1?null:mysqli_affected_rows($db);
}

//получение студента по id
function getStudent($id)
{
    $db = connection();
    $query = mysqli_prepare($db, "select
        s.id,
      s.surname,
       s.name,
        s.patronymic,
     s.date_birth
     , s.registration
     , s.phone
     , s.theme
     , s.date_begin
     , s.date_end
    , s.type_id
    , s.supervisor_id
from students s
    join students_type st on s.type_id = st.id
    join supervisors s2 on s.supervisor_id = s2.id
    where s.id = ?
order by id desc");

    mysqli_stmt_bind_param($query, 'i', $id);

    /* выполнение подготовленного запроса */
    mysqli_stmt_execute($query);
    $res = mysqli_stmt_get_result($query);
    $result = array();
    while ($row = mysqli_fetch_assoc($res)) {
        $result[] = $row;
    }
    return $result;
}

function addOrdersForStudets($idOrder, $idStudents) {
    $db = connection();
    $query = "insert into orders_students(student_id, order_id) values ";
    $values = [];
    foreach ($idStudents as $id) {
        $values[] = "($id, $idOrder)";
    }
    $query .= implode(",", $values).";";

    if (mysqli_query($db, "$query")) {
        return mysqli_insert_id($db);
    } else {
        echo mysqli_error($db);
    }
}

