<?php

/*
  Concrètement, une boucle permet de répéter des instructions plusieurs fois. 
  En clair, c'est un gain de temps, c'est très pratique, et bien souvent indispensable.


  Imaginons ici que quelqu'un tape à notre porte 
  S'il possède pas le mot de pase bah il rentre pas. If fera bien l'affaire mais quand une action se répète 
  mieux vaut utiliser la boucle while
*/

$hr = "<br>------------------------------------------------------------------<br>";

//$motDePasse = readline("Entrez le mot de passe : ");

while ($motDePasse != 'codeur') {
   echo "Mot de passe érronée ! reprenez s.v.p!";
   break;
}//attention si vous mettez une valeur différente elle risque de rentrer dans une boucle infine

echo $hr;


//======================================  FOR  ======================================

/*
  La boucle for, la boucle par excellence
  for -> pour en français permet tout simplement de 
  sillonner d'un élément de départ à un d'arriver

  Nous essayerons ici de compter jusqu'a 10
*/

for ($i=1; $i < 11; $i++) { 
    echo $i."<br>";
}

echo $hr;

//On peut par le biais de la boucle for faire une table de multiplication par exemple de 8;

for ($x=1; $x < 11 ; $x++) { 
    $result = 8 * $x;
    echo $x." x 8 = ".$result."<br>";
}

echo $hr;
//For permet aussi par le biais de sa définition d'afficher tous les éléments d'un tableau
$notes = [17, 15, 19];

for ($i=0; $i < 3; $i++) { 
    echo $notes[$i]."<br>";
}

echo $hr;

//Mais soyons plus propre php à une boucle plus claire pour parcourir un tabeau et c'est la boucle Foreach

foreach ($notes as $note) {
    echo $note."<br>";
}

echo $hr;

$students = [
                'Master 2' => ['Marc', 'yun', 'claude'],
                'Master 1' => ['Durand', 'Senateur', 'Phania'],
];


foreach ($students as $classe => $listStudent) {
    echo "la classe ".$classe." a pour étudiants : \n";

        foreach ($listStudent as $student) {
           echo $student."<br>";
        }

    echo "\n";

}

echo $hr;


/*
  On fera un exercice où l'utilisateur doit saisir des notes, et quand il finit il doit taper fin
  pour arrêter la saisie, puis on doit afficher les notes sous forme de liste
*/

//----- Première methode de résolution de l'exo
$notes = [];
$action = null;

while ($action != "fin") {
    $action = readline('Entrez une nouvelle notes ou fin pour arrêter la saisie : ');
    if ($action !== 'fin') {
        $notes[] = (int)$action;
    }
}

foreach ($notes as $note ) {
    echo "La liste des notes saisies : ".$note."\n";
}

echo $hr;

//----- Seconde methode de résolution de l'exo
$notes = [];

while (true) {
    $action = readline('Entrez une nouvelle notes ou fin pour arrêter la saisie : ');
    if ($action === 'fin') {
        break;
    }else{
        $notes[] = (int)$action;
    }
}

foreach ($notes as $note ) {
    echo "La liste des notes saisies : ".$note."\n";
}

/**
 * On demande à un l'utilisateur de rentrer les heures d'horaires d'ouvertures d'un magasin
 * Ensuite on demande à celui-ci de rentrer une heure et on lui dira si le magasin est ouvert
 */

 /**
  * On demande à l'utilisateur de rentrer les crenaux
  *     on vérifie que l'heure d'ouverture est supérieur à l'heure fin
  *     on demande si on veut rajouter un nouveau creneau (o/n)
  * On demande à l'utilisateur de rentrer une heure
  * On affiche l'état d'ouverture du magasin
  */

  $creneaux = [];

  while (true) {
      $debut = (int)readline('Heure d\'ouverture : ');
      $fin = (int)readline('Heure de fermeture : ');
      if ($debut >= $fin) {
          echo "L'heure d'ouverture doit être inférieur à l'heure de fermeture \n";
      } else{
          $creneau[] = [$debut, $fin];
          $action = readline("Voulez vous enregistrer un nouveau crenau (o/n) : ");
          if($action === 'n'){
            break;
          }
      }
  }

  $heure = (int)readline("A quelle heure voulez vous visiter le magasin: ");
  $creneauTrouve = false;

  foreach($creneaux as $creneau){
      if($heure >= $creneau[0] && $heure <= $creneau[1]){
          $creneauTrouve = true;
          break;
      }
  }

  if ($creneauTrouve) {
      echo 'le magasin sera ouvert';
  } else {
      echo 'Désolé, le magasin sera fermé 😕';
  }