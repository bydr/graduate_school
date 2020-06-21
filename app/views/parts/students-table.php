<?php /** @var array $students  */
?>

<div class="table-wrapper">
    <table class="table table-bordered table-hover">
        <thead>
        <tr>
            <th class="table-cell">№</th>
            <th class="table-cell">Ф.И.О.</th>
            <th class="table-cell">Дата рождения</th>
            <th class="table-cell">Телефон</th>
            <th class="table-cell">Прописка</th>
            <th class="table-cell">Тип</th>
            <th class="table-cell">Тема дисс.</th>
            <th class="table-cell">Ф.И.О. научн. руков.</th>
            <th class="table-cell">Поступил</th>
            <th class="table-cell">Окончил</th>
            <th class="table-cell operations-btn">Изменить</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($students as $student)
            /** @var \models\Student $student  */ :?>
            <tr>
                <td class="table-cell id_user" data-id="<?= $student->getId() ?>"><?= $student->getId() ?></td>
                <td class="table-cell"><?= $student->getFio() ?></td>
                <td class="table-cell"><?= $student->getDateBirth() ?></td>
                <td class="table-cell"><?= $student->getPhone() ?></td>
                <td class="table-cell"><?= $student->getRegistration() ?></td>
                <td class="table-cell"><?= $student->getType() ?></td>
                <td class="table-cell"><?= $student->getTheme() ?></td>
                <td class="table-cell"><?= $student->getFioSupervisor() ?></td>
                <td class="table-cell"><?= $student->getDateBegin() ?></td>
                <td class="table-cell"><?= $student->getDateEnd() ?></td>
                <td class="table-cell operations-btn">
                    <button type="button" class="btn btn-box btn_edit_student btn-student" data-toggle="modal" data-target="#addStudent">
                        <span class="ic-edit"></span>
                    </button>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

