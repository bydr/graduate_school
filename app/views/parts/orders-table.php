<div class="table-wrapper">
    <table class="table table-bordered">
        <thead>
        <tr>
            <th class="table-cell">№</th>
            <th class="table-cell">Название приказа</th>
            <th class="table-cell">Скан</th>
            <th class="table-cell">Дата от</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($orders as $key => $item) : ?>
            <tr>
                <td class="table-cell"><?= $item['id'] ?></td>
                <td class="table-cell"><?= $item['title'] ?></td>
                <td class="table-cell">
                    <img class="img-scan img-for-zooming" src="<?=checkScanFile($item['scan_id']) ?>" alt="">
                </td>
                <td class="table-cell"><?= $item['date'] ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

