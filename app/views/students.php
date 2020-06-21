<?php
include_once "header.php";
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="btn-wrapper d-flex justify-content-end">
                <button class="btn btn-dark mt-15 btn-student"
                        id="btn_add_student"
                        type="button"
                        data-toggle="modal" data-target="#addStudent">Добавить</button>
            </div>
        </div>
    </div>
    <?php include_once "parts/students-table.php" ?>
    <?php include_once "parts/modal-addStudent.php" ?>
</div>


<?php
include_once "footer.php";
?>
