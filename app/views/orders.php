<?php
include_once "header.php";
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
/** @var \models\Student $student  */
/** @var array $students */
?>

<div class="container-fluid">

    <ul class="nav nav-tabs nav-page">
        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#orders">Все приказы</a></li>
        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#orders-students">Приказы студентов</a></li>
        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#orders-supervisors">Приказы научн. руков.</a></li>
        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#order-appointment">Назначить приказ</a></li>
    </ul>

    <div class="tab-content">
        <div id="orders" class="tab-pane active">
            <?php include_once "parts/orders-table.php" ?>
        </div>
        <div id="orders-students" class="tab-pane fade ">
            <div class="panel datalist-bar bg-gray-lighten">
                <div class="row">
                    <div class="col-12 col-md-11">
                        <?=getDataList($db_students,
                            ['surname', 'name', 'patronymic'],
                            'ordersForStudents',
                            'Введите ФИО студента'); ?>
                    </div>
                    <div class="col-12 col-md-1 d-flex justify-content-end align-items-end">
                        <button class="show-list datalist-btn btn btn-dark">Показать</button>
                        <a href="/orders" class="reset-list datalist-btn btn btn-danger" style="display:none;">Сбросить</a>
                    </div>
                </div>
            </div>
            <?php include_once "parts/orders-students-table.php" ?>
        </div>
        <div id="orders-supervisors" class="tab-pane fade">
            <div class="panel datalist-bar bg-gray-lighten">
                <div class="row">
                    <div class="col-12 col-md-11">
                        <?=getDataList($db_supervisors,
                            ['fio'],
                            'ordersForSupervisors',
                            'Введите ФИО научного руководителя'); ?>
                    </div>
                    <div class="col-12 col-md-1 d-flex justify-content-end align-items-end">
                        <button class="show-list datalist-btn btn btn-dark">Показать</button>
                        <a href="/orders" class="reset-list datalist-btn btn btn-danger" style="display:none;">Сбросить</a>
                    </div>
                </div>
            </div>
            <?php include_once "parts/orders-supervisors-table.php" ?>
        </div>
        <div id="order-appointment" class="tab-pane fade">
            <br>
            <h5 class="h5">1. Выберите название приказа</h5>
            <div class="panel datalist-bar bg-gray-lighten">
                <?=getDataList($orders,
                    ['title', 'date'],
                    'orders-list',
                    'Введите название приказа'); ?>
            </div>
            <br>
            <h5 class="h5">2. Выберите студентов, для назначения</h5>
            <div class="table-for-selected">
                <?php include_once "parts/students-table.php"?>
            </div>
            <button type="button" name="addOrdersForStudent" class="btn btn-primary mb-5" id="btn-appointment" >Назначить</button>
        </div>
    </div>


</div>


<?php
include_once "footer.php";
?>
