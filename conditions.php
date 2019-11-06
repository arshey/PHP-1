<?php
/*
  Maintenant nous allons aborder les conditions
  Celles-ci permettent de vérifier si une condition est respecté 
  et une fois vérification faites, elles appliquent les instructions 
  qui partent avec
*/

$hr="-------------------------------------------------------<br>";

//=========================================================================================================== if - elseif = else 

/*Prenons le cas où la condtion est d'avoir 12 de moyenne sur 20 recevoir un tableau d'honneur

  si la moyenne > 20 alors on lui donne un tableau d'honneur sinon il n'auras rien

*/
//$moyenne = (int)readline('Entre votre moyenne : ');

$moyenne = 9;

if ($moyenne >= 12) {
    echo "Bravo vous avez obtenu un Tableau d'honneur 🍾🎊🎉 <br>";
} else { // else signifie "sinon" 
    echo "Hélas vous ne méritez pas un Tableau d'honneur 😕 <br>";
}

echo $hr;

/*
  Corsons les choses, s'il a 10 on lui dit qu'il a la moyenne pour passer en classe supérieur
  au délà de 12 qu'il mérite un Tableau d'honneur et en dessous de qu'il reprend la classe
*/



if ($moyenne < 10) {
    echo "Désolé mais vous reprenez la classe 🤧<br>";
} elseif ($moyenne >= 10 && $moyenne <12 ) { // else signifie "sinon" 
    echo "Hélas vous passez en classe supérieur mais sans un Tableau d'honneur 😕 <br>";
} else {
    echo "Bravo vous avez obtenu un Tableau d'honneur 🍾🎊🎉<br>";
}

echo $hr;


$note = 16;

if ($note == 0){
    echo "Tu es vraiment un gros nul !!!<br>";
} elseif ($note == 5) {
    echo "Tu es très mauvais<br>";
 } elseif ($note == 7) {
        echo "Tu es mauvais<br>";
   } elseif ($note == 10){
        echo "Tu as pile poil la moyenne, c'est un peu juste…<br>";
     } elseif ($note == 12) {
        echo "Tu es assez bon";
       } elseif ($note == 16) {
            echo "Tu te débrouilles très bien !<br>";
         } elseif ($note == 20) {
            echo "Excellent travail, c'est parfait !<br>";
          } else {
                echo "Désolé, je n'ai pas de message à afficher pour cette note <br>";
            }

//Mais vous convener ave moi que c'est un peu trop long n'est ce pas ? C'est dans ce cas là que switch (au cas où) prends tout son sens

//=========================================================================================================== Switch

echo $hr;


$note = 10;

switch ($note) { // on indique sur quelle variable on travaille
    
    case 0: // dans le cas où $note vaut 0
        echo "Tu es vraiment un gros nul !!!";
    break;
    
    case 5: // dans le cas où $note vaut 5
        echo "Tu es très mauvais";
    break;
    
    case 7: // dans le cas où $note vaut 7
        echo "Tu es mauvais";
    break;
    
    case 10: // etc. etc.
        echo "Tu as pile poil la moyenne, c'est un peu juste…";
    break;
    
    case 12:
        echo "Tu es assez bon";
    break;
    
    case 16:
        echo "Tu te débrouilles très bien !";
    break;
    
    case 20:
        echo "Excellent travail, c'est parfait !";
    break;
    
    default:
        echo "Désolé, je n'ai pas de message à afficher pour cette note";
}