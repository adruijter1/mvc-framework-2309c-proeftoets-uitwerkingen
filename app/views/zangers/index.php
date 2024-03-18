<?php require_once 'C:/projects2023/mvc-oop-toets/app/views/includes/header.php'; ?>

<h3><?= $data['title']; ?></h3>

<table class="table table-hover">
    <thead>
        <th>Naam</th>
        <th>NettoWaarde (Miljoen)</th>
        <th>Land</th>
        <th>Mobiel</th>
        <th>Leeftijd</th>
    </thead>
    <tbody>
        <!-- We geven de rows weer in de controller zijn gevormd -->
        <?= $data['dataRows']; ?>
    </tbody>
</table>






<?php require_once 'C:/projects2023/mvc-oop-toets/app/views/includes/footer.php'; ?>