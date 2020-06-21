<?php foreach ($ordersForStudents as $item) : ?>
    <tr>
        <td class="table-cell"><?= $item['id'] ?></td>
        <td class="table-cell"><?= $item['title'] ?></td>
        <td class="table-cell">
            <img class="img-scan img-for-zooming" src="<?=checkScanFile($item['scan_id']) ?>" alt="">
        </td>
        <td class="table-cell"><?= $item['date'] ?></td>
        <td class="table-cell"><?= $item['fio'] ?></td>
        <td class="table-cell"><?= $item['type'] ?></td>
        <td class="table-cell"><?= $item['theme'] ?></td>
        <td class="table-cell"><?= $item['date_birth'] ?></td>
        <td class="table-cell"><?= $item['registration'] ?></td>
        <td class="table-cell"><?= $item['phone'] ?></td>
        <td class="table-cell"><?= $item['date_begin'] ?></td>
        <td class="table-cell"><?= $item['date_end'] ?></td>
    </tr>
<?php endforeach; ?>
