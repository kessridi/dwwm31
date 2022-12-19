<?php
/*Déclarer une variable $identite qui contient une chaine de caractères.
Créer une condition qui affiche un message différent en fonction de la valeur de la variable.*/
/*
$identite = "HomMe";
if (strtolower($identite) ===  "femme") {
echo "Bonjour Madame" . "\n";
} 
if (strtoupper($identite) ===  "HOMME"){
echo "Bonjour Monsieur" . "\n";
}else{
echo "Bonjour inconnue";
}
*/
/*Exercice : Avec vos connaissances définir si une personne est majeure ou non. */
/*
$majeur = 17;
echo $majeur >= 18 ? "la personne est majeur" : "la personne n'est pas majeur";
*/
/*
$budgetDepart = "3000";
$montantAchatsPrevus =[60,810,1800];
$montantAchats = 0;
foreach($montantAchatsPrevus as $achat){
$montantAchats +=    $achat;
}
echo $montantAchats;
if ($montantAchats > $budgetDepart ) {
echo "vous pouvez pas payer vos courses ";
}else{
echo "vous  pouvez  payer vos courses "; 
}
*/

/*Exo:Vous êtes gestionnaire de stock et vous avez dans votre magasin : des chaussures, des jeans et des casquettes. 
Vous avez besoin de savoir si le stock est optimal et pour cela vous avez déjà défini un nombres d'articles minimum à avoir. 
En tant que developpeur vous êtes chargé d'écrire le code qui permettre de savoir quels sont les produits avec un stock optimal.*/

/*
define("MIN_CHAUSSURES",7);
define("MIN_JEANS",10);
define("MIN_CASQUETTES",5);
$nbreChaussureRestant = 15;
$nbreJeansRestant = 15;
$nbreCasquettesRestant = 15;
if($nbreChaussureRestant>=MIN_CHAUSSURES){
echo "les chaussures ont un stock optimal \n";
}
if($nbreJeansRestant>=MIN_JEANS){
echo "les jeans ont un stock optimal \n";
}
if($nbreCasquettesRestant>=MIN_CASQUETTES){
echo "les casquettes ont un stock optimal \n";
}
*/
/*
$stocks = ["chaussures" => 150, "jeans" => 15, "casquettes" => 150];
$stockOptimal = 75;
foreach($stocks as $key=>$value){
if($value>$stockOptimal){
echo "le stock de {$key} est optimal.\n";
}
}
*/

$habitants = [
    "France" => 67.5,
    "Suède" => 10.42,
    "Suisse" => 8.698,
    "Malte" => 0.5,
    "Mexique" => 130.3,
    "Allemagne" => 83.13
];

echo "Les pays suivants ont une population supérieure à 20 millions :\n";
foreach($habitants as $key=>$value){
    
    if($value >20 ){
        echo $key."\n";
    }


}


function find_uniq($a) {
    // Do Magic :)
  $arrayLen=count($a);
  
  for ($i = 1 ; $i < ($arrayLen) ; $i++){
       
     if ((($a[($i-1)]) != ($a[$i])) && (($a[($i-1)])==($a[($i+1)]))) {
      $uniq = $a[$i];

     }   
     
      
  }

  return $uniq;
  }
  echo find_uniq($arr);

?>