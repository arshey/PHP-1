<?php

/*
  Ici nous allons aboder la question des tableaux
  Ceux ci permettent d'insérer plusieurs valeur dans une variable
  Prenons un cas simple Marc a 5 notes et bien on peut créer une variable
  lesNotesDeMarc et y mettres toutes les notes.
*/
$hr = "----------------------------------------------------------------<br>";

<<<<<<< HEAD
=======

$nom            = 'Marc';
$lesNotesDeMarc = [10, 15, 17, 20, 16];

//Nous allons essayer de récupérer la première et la troisième note du des notes du tableau
echo "Les premières et 3ème notes de ".$nom." sont : ".$lesNotesDeMarc[0]."; ".$lesNotesDeMarc[2]."<br>";
//Les premières et 3ème notes de Marc sont : 10; 17

echo $hr;

/*
  Maintenant passons au tableau à plus d'une dimension
  Ici on peut tout simplement mettre un tableau dans un autre tableau
  Vous inquiétez pas ça n'a rien de complexe prenons le cas où cette fois ci
  on veut un tableau qui en plus des notes de Marc nous donne aussi des informations
  sur la personne de marc tel que son nom, son numéro de telephone et autre
*/

$lesInformationsDeMarc = ['Marc', 'Durand', '22557736523', [10, 15, 17, 20, 16], 'Mathématiques', 'Master 2'];
echo "l'étudiant ".$lesInformationsDeMarc[0].
               " ".$lesInformationsDeMarc[1].
" a pour notes : ".$lesInformationsDeMarc[3][0].
               " ".$lesInformationsDeMarc[3][1].
               " ".$lesInformationsDeMarc[3][2].
               " ".$lesInformationsDeMarc[3][3].
               " ".$lesInformationsDeMarc[3][4].
" son numéro de téléphone est le ".$lesInformationsDeMarc[2].
" Sa matière les ".$lesInformationsDeMarc[4].
" et il est en classe de ".$lesInformationsDeMarc[5]."<br>";
/*
  Vous convenez avec moi que que pour être claire on ne sait pas à quoi convient chaque élément du tableau
  et tout n'est qu'indice ce qui est totalement millisible quand les valeurs du tableau augmente alors dans ce 
  cas nous avons une seconde possibilité qui est celle d'indiquer à quoi convient chaque valeur du tableau
*/

echo $hr;

$lesInformationsDeMarc2 = ['nom'=>'Marc', 
                           'prenom'=>'Durand', 
                           'numb'=>'22557736523', 
                           'notes'=>[10, 15, 17, 20, 16], 
                           'matiere'=>'Mathématiques', 
                           'niveau'=>'Master2'
                        ];

echo "l'étudiant ".$lesInformationsDeMarc2['nom'].
               " ".$lesInformationsDeMarc2['prenom'].
" a pour notes : ".$lesInformationsDeMarc2['notes'][0].
               " ".$lesInformationsDeMarc2['notes'][1].
               " ".$lesInformationsDeMarc2['notes'][2].
               " ".$lesInformationsDeMarc2['notes'][3].
               " ".$lesInformationsDeMarc2['notes'][4].
" son numéro de téléphone est le ".$lesInformationsDeMarc2['numb'].
" Sa matière les ".$lesInformationsDeMarc2['matiere'].
" et il est en classe de ".$lesInformationsDeMarc2['niveau']."<br>";

print_r($lesInformationsDeMarc2['notes']);
>>>>>>> 4f7e78ca68a6c648032ee219bf3d3e7c2f08d12d

