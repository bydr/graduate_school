<?php foreach ($groupExamsStudents as $item) : ?>
    <tr>
        <td class="table-cell"><?=$item['group_id'] ?></td>
        <td class="table-cell"><?=$item['group_title'] ?></td>
        <td class="table-cell"><?=$item['exam'] ?></td>
        <td class="table-cell"><?=$item['date'] ?></td>
        <td class="table-cell"><?=$item['time'] ?></td>
        <td class="table-cell"><?=$item['audience'] ?></td>
        <td class="table-cell"><?=$item['surname_student'] ?></td>
        <td class="table-cell"><?=$item['name_student'] ?></td>
        <td class="table-cell"><?=$item['patronymic_student'] ?></td>
        <td class="table-cell"><?=$item['phone'] ?></td>
        <td class="table-cell"><?=$item['date_begin'] ?></td>
        <td class="table-cell"><?=$item['date_end'] ?></td>
        <td class="table-cell"><?=$item['name_supervisor'] ?></td>
        <td class="table-cell"><?=$item['surname_supervisor'] ?></td>
        <td class="table-cell"><?=$item['patronymic_supervisor'] ?></td>
    </tr>
<?php endforeach;  ?>
