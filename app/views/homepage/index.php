<?php require APPROOT . '/views/includes/header.php'; ?>

    <?php
        echo $data['title'];
    ?>

    <a href='<?= URLROOT; ?>/Instructeur/Index'>Instructeur pagina</a> |
    <a href='<?= URLROOT; ?>/Cars/Index'>De auto pagina</a> | 
    <a href='<?= URLROOT; ?>/Countries/index'>Landen</a> |
    <a href='<?= URLROOT; ?>/Zangers/index'>Zangeressen</a>
    
<?php require APPROOT . '/views/includes/footer.php';
    

