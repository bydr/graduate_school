<?php /** @var array $supervisors  */
?>

<div class="table-wrapper">
    <table class="table table-bordered">
        <thead>
        <tr>
            <th class="table-cell">№</th>
            <th class="table-cell">Ф.И.О.</th>
            <th class="table-cell">Дата рождения</th>
            <th class="table-cell">Прописка</th>
            <th class="table-cell">Специальность</th>
            <th class="table-cell">Звание</th>
            <th class="table-cell">Принят на работу</th>
            <th class="table-cell">Уволен</th>
            <th class="table-cell">Телефон</th>
            <th class="table-cell">Диплом</th>
            <th class="table-cell">Образование</th>
            <th class="table-cell">Пасспорт</th>
            <th class="table-cell">Кем выдан</th>
            <th class="table-cell">Когда выдан</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($supervisors as $supervisor)
            /** @var \models\Supervisor $supervisor */ :?>
            <tr>
                <td class="table-cell"><?= $supervisor->getId() ?></td>
                <td class="table-cell"><?= $supervisor->getFio() ?></td>
                <td class="table-cell"><?= $supervisor->getDateBirth() ?></td>
                <td class="table-cell"><?= $supervisor->getRegistration() ?></td>
                <td class="table-cell"><?= $supervisor->getSpecialty() ?></td>
                <td class="table-cell"><?= $supervisor->getRank() ?></td>
                <td class="table-cell"><?= $supervisor->getDateEmployent() ?></td>
                <td class="table-cell"><?= $supervisor->getDateDismissal() ?></td>
                <td class="table-cell"><?= $supervisor->getPhone() ?></td>
                <td class="table-cell"><?= $supervisor->getDiplomSeries().$supervisor->getDiplomNumber() ?></td>
                <td class="table-cell"><?= $supervisor->getEducation() ?></td>
                <td class="table-cell"><?= $supervisor->getPassport() ?></td>
                <td class="table-cell"><?= $supervisor->getIssuedBy() ?></td>
                <td class="table-cell"><?= $supervisor->getIssuedWhen() ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

