<?php 
require_once 'functions.php';

// $aDeviner = 150;
// $erreur = null;
// $success = null;
// $value = null;


// if (isset($_GET['chiffre']) ){

//     if($_GET['chiffre'] > $aDeviner ){
//          $erreur = 'votre chiffre est trop grand';
//     } elseif ($_GET['chiffre'] < $aDeviner) {
//         $erreur = 'votre chiffre est trop petit';
//         } else {
//             $success = 'Bravo vous avez trouvé le chiffre <strong>'.$aDeviner.'</strong>';
//         }
// }  

// $value = (int)$_GET['chiffre'];

$parfums = [
    'fraise'    => 4,
    'chocolat'  => 5,
    'vanille'   => 3
];

$cornets = [
    'Pot'       => 2,
    'Cornet'    => 3
];

$supplements = [
    'Pépites de chocolat' => 1,
    'Chantilly' => 0.5 
];

$title = "Composer votre glace";



$ingredients = [];
$total = 0;

foreach (['parfum', 'cornet','supplement'] as $name) {
    if (isset($_GET[$name])) {
         $liste = $name.'s';
        foreach($_GET[$name] as $value){
            if(isset($$liste[$value])){
                $ingredients[] = $value;
                $total += $$liste[$value];
            }
        }
    }
}

$title = "Composer votre glace";
require 'header.php';

?>

<h1>Compose ta glace</h1>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">
                        Votre glace
                    </h5>
                    <ul>
                        <?php foreach ($ingredients as $ingredient): ?>
                        <li><?= $ingredient ?></li>
                        <?php endforeach?>
                    </ul>
                    
                    <p>
                        <strong>
                            Prix : 
                        </strong>

                        <?= $total ?> Fr
                    </p>

                </div>
            </div>
           
        </div>
        <div class="col-md-8">
            <form action="jeu.php" method="GET">
                <div class="form-group">
                <h2>Choississez vos parfums</h2>
                    <?php  foreach ($parfums as $parfum => $prix): ?>
                    <div class="checkbox">
                        <label for="">
                            <?= checkbox('parfum', $parfum, $_GET) ?>
                            <?= $parfum ?> - <?= $prix?> Fr
                        </label>
                    </div>
                    <?php endforeach ?>

                <h2>Choississez votre cornet</h2>
                    <?php  foreach ($cornets as $cornet => $prix): ?>
                    <div class="radio">
                        <label for="">
                            <?= radio('cornet', $cornet, $_GET) ?>
                            <?= $cornet ?> - <?= $prix?> Fr
                        </label>
                    </div>
                    <?php endforeach ?> 


                    <h2>Choississez vos supplements</h2>

                    <?php  foreach ($supplements as $supplement => $prix): ?>
                    <div class="checkbox">
                        <label for="">
                            <?= checkbox('supplement', $supplement, $_GET) ?>
                            <?= $supplement ?> - <?= $prix?> Fr
                        </label>
                    </div>
                    <?php endforeach ?> 

                    <button type="submit" class="btn btn-primary">Composer ma glace</button>
                </div>
            </form>
        </div>
    </div>
</div>

<hr class="w-50">

<h2>$_GET</h2>
<pre>
    <?php var_dump($_GET) ?>
</pre>

<hr class="w-50">

<h2>$_POST</h2>
<pre>
    <?php var_dump($_POST) ?>
</pre>


<?php require 'footer.php' ?>