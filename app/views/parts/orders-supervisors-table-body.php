<?php foreach ($ordersForSupervisors as $item) : ?>
    <tr>
        <td class="table-cell"><?= $item['id'] ?></td>
        <td class="table-cell"><?= $item['title'] ?></td>
        <td class="table-cell">
            <img class="img-scan img-for-zooming" src="<?=checkScanFile($item['scan_id']) ?>" alt="">
        </td>
        <td class="table-cell"><?= $item['date'] ?></td>
        <td class="table-cell"><?= $item['fio'] ?></td>
        <td class="table-cell"><?= $item['date_birth'] ?></td>
        <td class="table-cell"><?= $item['registration'] ?></td>
        <td class="table-cell"><?= $item['specialty'] ?></td>
        <td class="table-cell"><?= $item['rank'] ?></td>
        <td class="table-cell"><?= $item['date_employent'] ?></td>
        <td class="table-cell"><?= $item['date_dismissal'] ?></td>
        <td class="table-cell"><?= $item['phone'] ?></td>
        <td class="table-cell"><?= $item['diplom_series'].$item['diplom_number'] ?></td>
        <td class="table-cell"><?= $item['education'] ?></td>
        <td class="table-cell"><?= $item['passport'] ?></td>
        <td class="table-cell"><?= $item['issued_by'] ?></td>
        <td class="table-cell"><?= $item['issued_when'] ?></td>
    </tr>
<?php endforeach; ?>
