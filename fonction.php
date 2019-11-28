<?php
/**
 * Tout comme les fonctions natives, les fonctions définies par l'utilisateur
 * permettent de mettre en place des series d'instructions bien structurés pour 
 * éviter de se répeter dans son code. Ils prennent aussi des paramètres
 */

$hr = "<br>---------------------------------------------------------------------<br>"; 

 //faire une fonction qui dit bonjour tout en lui passant les paramètres directement
 function bonjour($nom){
  echo "bonjour ".$nom."\n";
 }

 bonjour("vincent");
 bonjour("Laude");

 echo $hr;

 /**
  * On peut insérer une fonction en réception dans une variable dans ce cas 
  * il faut un return de la dite fonction 
  */

  function salutation($name){
      return "Salutation ".$name."\n";
      //après un return tout script qui sera ajouter ne sera pas pris en compte
  }
 
  $salutations = salutation("Deo");
  echo $salutations;

  /**
   * Si on on a défini un paramètre dans la dite fonction et lors de l'appel on ne lui
   * passe pas de variables on va rencontrer des erreurs parce qu'elles ne sont pas optionnels
   * pour éviter cette erreur on peut tout simplement donner une valeur à la variable
   */

   function Hello($name = "Durand Marc"){
      return "Salutation ".$name."\n";
      //après un return tout script qui sera ajouter ne sera pas pris en compte
  }
 
  $salutations = salutation("Deo");
  echo $salutations;

  //On peut toute fois le faire et ainsi on aura une variable optionnel sans valeur
  //avec les conditions rappelez vous

  function coucou($name){
      if ($name == null) {
          return "Coucou !";
      } else {
            return "Salutation ".$name."\n";
      }
  }
 
  $salutations = coucou();
  echo $salutations;

  /**
   * Il faut prendre en compte la portée des variables qui s'execute dans les fonctions
   * on peut utiliser le mot clé global pour appeler la variable partout mais non
   * c'est une mauvaise pratique
   */

   /**
    * Faisons une fonction qui prend en paramètre oui ou non qui ramenera un booleen
    */

 function repondreOuiNon($phrase){
    do {
           $reponse = readline($phrase . " - (o)ui/(n)on : ");
            if ($reponse === 'o') {
                return true;
            } elseif ($reponse === 'n') {
                return false;
            }
    } while ($reponse !== 'o' && $reponse !== 'n');

}

$resultat = repondreOuiNon('Voulez vous continuer ');
//si l'utilisateur tape oui => true
//si l'utilisateur tape non => false
var_dump($resultat);


/**
 * Rappeler vous que nous avions dans la section des boucles définit un creneau qui permettait
 * à l'utilisateur de saisir un creneau pour connaître l'ouverture et la fermeture d'un magasin
 * Ici nous allons tous simplement l'intégrer à une fonction
 */

 function demanderCreneau($phrase = 'Veuillez entrer un creneau'){
    echo $phrase."\n";
    do {
        while (true) {
            $ouverture = (int)readline('Donnez l\'heure d\'ouverture : ');
            if ($ouverture >= 0 && $ouverture <= 23) { 
                break;
            }
        }

        while (true) {
            $fermeture = (int)readline('Donnez l\'heure de fermeture : ');
            if ($fermeture >= 0 && $fermeture <= 23 ) {
                break;
            } 
        }

    } while ($ouverture > $fermeture);
   
    return [$ouverture, $fermeture];
          
    }

$creneau = demanderCreneau();
var_dump($creneau);

/**
 * 
 * 
 * 
 * 
 * 
 */


function demandeCrenaux($phrase = 'Veuillez entrz votre creneau : '){
    $tableau = [];
    $continuer = true;
    while (true) {
        $creneaux[] = demanderCreneau();
        $continuer = repondreOuiNon('Voulez vous continuer ? ');
    }
    return $creneaux;
}


$infos = demandeCrenaux();
echo $infos;

//Depuis PHP 7 on peut définir le types de données à renvoyer dans une fonction
// en simplement indiquant son type dans les paramètres 

function text(string $phrase){
    var_dump($phrase);
}

//Avec ce genre de fonction il faut toujours savoir que la fonction transformera ce qu'elle ramener en string