<?php
$title = 'Contact';
require_once 'functions.php';
require_once 'config.php';
//$creneaux = creneaux_html(CRENEAUX);
//$jours = jours_html(CRENEAUX);
$heure = (int) ($_GET['heure'] ?? date('G'));
$jour = ($_GET['jour'] ?? date('N') - 1);
$creneaux = CRENEAUX[$jour];
$ouvert = in_creneaux($heure, $creneaux);
$color = $ouvert ? 'green' : 'red';
require 'header.php';

?>

<div class="row">
    <div class="col-md-7">
        <h1>Nous Contacter</h1>
        <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
    </div>
    <div class="col-md-5">

        <h2>Horaires d'ouvertures</h2>


        <?php if ($ouvert) : ?>
            <div class="alert alert-success">Le magasin sera ouvert</div>
        <?php else : ?>
            <div class="alert alert-warning">Le magasin sera fermé</div>
        <?php endif ?>

        <form action="" method="GET">
            <div class="form-group">
                <?= select('jour', $jour, JOURS); ?>

            </div>
            <div class="form-group">
                <input type="number" name="heure" class="form-control" value="<?= $heure ?>">
            </div>
            <button class="btn btn-primary mb-2" type="submit">Voir si le magasin est ouvert</button>
        </form>

        <ul>
            <?php foreach (JOURS as $k => $jour) : ?>
                <li>

                    <strong>
                        <?= $jour ?>
                    </strong> :
                    <?= creneaux_html(CRENEAUX[$k]); ?>
                </li>
            <?php endforeach ?>
        </ul>
    </div>
</div>

<?php
require 'footer.php';
