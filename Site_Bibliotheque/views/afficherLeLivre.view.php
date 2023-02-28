<?php ob_start() ?>

<div class="row">
    <!-- dans bootstrap on a 12 colonnes, donc col-6 prend une moitié -->
    <div class="col-6">
        <img src="<?= URL ?>/public/images/<?= $livre->getImage(); ?>">
    </div>
    <div class="col-6">
        <p class="fs-5"> <span class="fw-bold">Titre :</span> <?= $livre->getTitre() ?></p>
        <p class="fs-5"> <span class="fw-bold">Nombres de pages :</span> <?= $livre->getNbPages() ?></p>
    </div>
</div>

<?php
$content = ob_get_clean();
$titre = $livre->getTitre();
require "template.php";
?>