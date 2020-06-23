<?php
include_once "header.php";
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-md-7">
            <ul class="nav nav-tabs nav-page">
                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#students">Все студенты</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#group-students">Группы студентов</a></li>
            </ul>
        </div>

    </div>
    <div class="row">
        <div class="col-12">
            <div class="tab-content">
                <div id="students" class="tab-pane active">
                    <div class="w-100 d-flex justify-content-end tab-btn-operation-single">
                        <div class="btn-wrapper d-flex justify-content-end">
                            <button class="btn btn-dark mt-15 btn-student"
                                    id="btn_add_student"
                                    type="button"
                                    data-toggle="modal" data-target="#addStudent">Добавить</button>
                        </div>
                    </div>
                    <?php include_once "parts/students-table.php" ?>
                </div>
                <div id="group-students" class="tab-pane fade ">
                    <div class="w-100 d-flex justify-content-end tab-btn-operation-single">
                        <div class="btn-wrapper d-flex justify-content-end">
                            <button class="btn btn-dark mt-15 btn-exam-group"
                                    id="btn_add_exam_group"
                                    type="button"
                                    style="margin-right: 5px;"
                                    >Назначить экзамен</button>
                            <button class="btn btn-dark mt-15 btn-exam-group"
                                    id="btn_add_exam_group"
                                    type="button"
                                    style="margin-right: 5px;"
                                    >Сформировать группу</button>
                        </div>
                    </div>
                    <?php include_once "parts/students-group-table.php" ?>
                </div>
            </div>
        </div>
    </div>
    <?php include_once "parts/modal-addStudent.php" ?>
</div>


<?php
include_once "footer.php";
?>
