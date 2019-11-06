<?php
/**
 * Les fonctions permettent d'effectuer des logiques, et vont nous permettre 
 * de ne pas nous répéter. elles sont simple et très pratique.
 * Elle effectue un travail tout comme un incubateur et retourne souvent
 * des valeurs elles prennent aussi des paramètres pour effectuer leur opérateur en interne
 * Il faut noter qu'on possède déjà des fonctions propres à PHP tels que 
 * strlen(), readlinne(), ucfirst(), explode(), isset, print_r(), var_dump, unset() et bien d'autre encore
 */

    $hr = "<br>------------------------------------------------------------<br>";

 /**
  * On va essayer tout simplement vérifier si un mot est un palindrome
  */


  $mot = strtolower(readline("Entre le mot : "));
  $reverse = strtolower(strrev($mot));


  if ($mot === $reverse) {
      echo "Bravo vous avez trouvé un palindrome 👍<br>\n";

  } else{
      echo "Ah non c'est pas un palindrome ✋<br>\n";
  }

  echo $hr;

  //Maintenant pour le second exercice on va juste à partir des fonctions natives faire un calcul de moyenne

  $notes = [10, 20, 13];
  $sum = array_sum($notes);
  $count = count($notes);
  $moy = $sum/$count;

  echo round($moy,2)."\n";

  //Simple cette fois-ci on va juste ajouter des valeurs a notre tableau de notes
  array_push($notes, 16, 17);

  print_r($notes);

  //Maintenant nous allons mettre en place un filtre de mot 
  $insultes = ['merde', 'con'];
  $phrase = readline("Entrez une phrase : ");

  foreach($insultes as $insulte){
      $taille   = strlen($insulte);
      $replace  = str_repeat('*', strlen($insulte)); 
      $phrase   = str_replace($insulte, $replace, $phrase);
  }

  echo $phrase;
