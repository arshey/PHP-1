<?php

//Il faut prendre en compte que PHP n'est pas vraiment un langage Typé

//les variables commencent toujours par un " $ ";
$hr = "-------------------------------------------------------------------------------------<br>";
$nom = 'Marc';
$prenom = "Remy";

//Pour afficher un élément à l'écran de l'ordinateur il faut passer par echo
echo $hr;

echo $nom."<br>";
// => Marc

//La concaténation permet d'associer des caractères et des variables
echo "Bonjour, je me nomme ".$nom." et mon prenom ".$prenom."<br>";
//=> Bonjour, je me nomme Marc et mon prenom Remy



//On peut faire des opérations arithmétiques
echo $hr;
//Les variables recevant des valeurs numérique ne requiert pas de guiellemet ''
$nombre1 = 6;
$nombre2 = 3;

//une variable somme qui va recevoir la somme
$somme = $nombre1 + $nombre2;
//une variable différence qui va recevoir la différence
$difference = $nombre1 - $nombre2;
//une variable produit qui va recevoir le produit
$produit = $nombre1 * $nombre2;
//une variable division qui va recevoir la division
$division = $nombre1/$nombre2;

echo "la somme des variables : ".$somme."<br>";
//=> la somme des variables : 9
echo "la différence des variables : ".$difference."<br>";
//=> la différence des variables : 3
echo "le produit des variables : ".$produit."<br>";
//=> le produit des variables : 18
echo "la division des variables : ".$division."<br>";
//=> la division des variables : 2


echo $hr;
/*
Exercice: 
Essayer de donner la moyenne de Remy avec les 4 notes suivantes: 12, 11, 15, 18;

Bonne chance.
*/

