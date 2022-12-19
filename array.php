<?php

/*
$prenon = "kamel";
$nom = "Essridi";
$age = 34;
echo $prenon."\t", $nom."\t", $age."\n";
$km = 1;
echo $km."\n";
$km = 3;
echo $km."\n";
$km = 125;
$phrase = "";
$entier = 14;
$unNbReel = 1.2;
$cocher = true;
echo $phrase."\t", $entier."\t", $unNbReel."\t", $cocher."\n";
$note1 = 10.0;
$note2 = 12.5;
$note3 = 7.0;
$moyenne = ($note1 + $note2 + $note3) / 3;
echo ceil($moyenne); 
*/
/*Exercie 1: 
Afficher cette phrase à l'aide de variables et de constantes:
"Bonjour je m'appel Mr Mehdi Fredj et j'ai 32 ans".*/
/*
define("FIRST_NAME", "Kamel");
define("LAST_NAME", "ESSRIDI");
define("GENDER", "Mr");
$age = 34;
echo "\"Bonjour Je m'appelle ". GENDER . " " . FIRST_NAME . " " . LAST_NAME . " et j'ai " . $age . " ans\".";
echo "\n\n";
*/

/*Exercie 2: Récupérer la formule chimique de l'ion bromure. La stocker dans une constante et renvoyer une phrase nous donnant cette formule.*/
/*
define("FORMULE_ION_BROMURE", "Br⁻");
echo "La formule chimique de l'ion bromure : ".FORMULE_ION_BROMURE. "\n\n";
*/


/*Exercie 3: Definir 2 variables différentes avec comme valeur un number.
Créer une 3e variable qui va correspondre à l'addition des deux autres et afficher ce résultat. 
Ensuite dans cette même variable soustraire les deux variables de départ et afficher ce résultat.
Utiliser la valeur de cette variable pour definir votre age dans une phrase qui correspondra à 
votre description ( nom, prenom, age) afficher le résultat et ensuite incrémenter votre age 
de 1 et afficher de nouveau votre description avec votre nouvelle valeur pour l'age.*/

/*
$variable1 = 15;
$variable2 = 7;
$variable3 = $variable1 + $variable2;
echo $variable1." + ".$variable2." = ".$variable3;
echo "\n";
$variable3 = $variable1 - $variable2;
echo $variable1." - ".$variable2." = ".$variable3;
echo "\n\n";
$variable3 = " Kamel ESSRIDI, ".$variable3."ans\n\n";
echo $variable3 ;
$variable3 ++;
echo $variable3;
*/

/*Exercie 4 : 
L'éducation national mène une enquête pour savoir si les français ont une bonne mémoire, 
pour cela vous êtes chargé de définir dans des variables ou des constantes en essayant d'être le plus cohérent possible les valeurs du : 
Théorème de pythagore
Théorème de Thalès
la valeur de pi
Si vous avez déjà sauté une classe
si vous vez déjà redoublé une classe
Afficher le résultat. */
/*
define("THEO_PYTHAGORE", "X²+Y²=Z²");
echo THEO_PYTHAGORE . "\n";
define("THEO_THALES", "(AD/AB)=(AE/AC)=(DE/BC)");
echo THEO_THALES . "\n";
define("PI", (string)pi());
echo PI."\n";
define("SAUT_DE_CLASSE", False);
echo $SAUT_DE_CLASSE . "\n";
define("REDOUBLE", False);
echo $REDOUBLE. "\n";
*/

/*Ecrire un enoncé d'exercie : 
Un client veut obtenir un pret à la banque avec un taux fixe de 1.65% par an pour un projet immobilier.
A l'aide de variable et de constante, afficher le montant des interet, le remboursement total, que le client devra rembourser.
Le client peut rembourser sur 20 ou 30 ans
Afficher le montant qu'il devra rembourser par an.
*/
/*
$pret = 120000;
define("TEAG_FIXE",1.65);
$montantInteret = ($pret*TEAG_FIXE/100);
echo $montantInteret."\n";
$sum = $pret + $montantInteret;
echo $sum."\n";
$remboursement20 = $sum/20;
$remboursement30 = $sum/30;
echo "Le client remboursera ".$remboursement20." par an sur 20 ans, et ".$remboursement30." par an sur 30 ans.";
*/
//Tables : exercie 1
/*
$languagesProg =
    [
        "JavaScript",
        "C#",
        "PHP"
    ];
print_r($languagesProg);
//Tables : exercie 2
$donnesPerso =
    array(
        "nom" => "Kamel",
        "prenom" => "ESSRIDI",
        "age" => 34,
        "avoirUneVoiture" => False
    );
      
    
print_r($donnesPerso);

//Tables : exercie 3
echo $languagesProg[1];
echo "\nMon langage préféré est le : ".$languagesProg[1]; */

//Tables : exercie 4
/*
echo "\nVoici le nombre de langues dans ce tableau : ". count($languagesProg) ."\n";
echo $languagesProg[0][9];
echo "\n"; */
//Tables: Excercie 5 : 
/*
Dans votre tableau associatif crée précédemment réussir à extraire des informations et les afficher pour avoir comme exemple : " Prénom : Chris "
" Nom : Chevalier"
"age : 28 " */
/*
echo "Prénom : ".$donnesPerso["prenom"]."\n";
echo "Nom : ".$donnesPerso["nom"]."\n";
echo "age: ".$donnesPerso["age"]."\n";
*/
/*
echo "\nPrénom : {$donnesPerso["prenom"]}\n";
echo "Nom : {$donnesPerso["nom"]}\n";
echo "age: {$donnesPerso["age"]}\n";
*/

/*
$languesParler = array("Anglais", "Français", "Arabe");
foreach ($languesParler as $langue) {
echo "{$langue}\n";
}
echo "\n\n\n"; 
*/
/*Tables : exercice 5 création de tableau avec 5 prénoms dedans et les affichés 
de manières dynamiques grâce à une boucle sans que ces valeurs ne soit collé les unes aux autres. */
/*
$prenoms = array("kamel", "Aristid", "Ali", "Jocylin", "Auréllien ");
foreach($prenoms as $prenom){
echo ("{$prenom}\n");
}
*/

/*Tables : exercices 6 Dans votre tableau associatif crée précédemment réussir à extraire des informations 
et les afficher pour avoir comme exemple : 
" Prénom : Chris "
" Nom : Chevalier"
"age : 28 "
AVEC FOREACH !!!!
*/
/*
$donnesPerso =
array(
"prenom" => "ESSRIDI",
"nom" => "Kamel",
"age" => 34
);
foreach ($donnesPerso as $key=>$values) {
echo "{$key}"." : "."{$values}\n";
}
*/

/*
Créer un tableau associatif en associant 4 valeurs " Wordpress, Bootstrap, symphony et react"
a des langages de programmation (HTML,CSS,JAVASCRIPT,PHP).
Le framework HTML est écrit en : Wordpress.
*/
/*
$frameworksLangs = [
"HTML" => "Wordpress",
"CSS" => "Bootstrap",
"JAVASCRIPT" => "React",
"PHP" => "Symphony"
];
foreach ($frameworksLangs as $key => $value)
echo "Le framework {$key} est écrit en : {$value}.\n";
var_dump($frameworksLangs);
*/



/*
Créer un  tableau de number et l'afficher de plus petit au plus grand ( l'afficher )
et ensuite du plus grand au plus petit.
*/
/*
$numbers = [20, 45, 12, 1, 56, 0];
sort($numbers);
print_r($numbers);
rsort($numbers);
print_r($numbers);
*/
/*
A l'aide d'un tableau multidimentionnelle réussir à faire ça :
("X","O","O");
("X","O","X");
("X","X","O");
*/
/*
$jeu = array(
    array("X", "O", "O"),
    array("X", "O", "X"),
    array("X", "X", "O")
);
foreach ($jeu as $x) {
    foreach ($x as $y) {
        echo $y . " ";
    }
    echo "\n";
}
*/

/*TABLEAU d'HIER: Créer un tableau d'aliments dans lequel vous devrez ajouter une valeur ("Avocat").*/

/*
$aliments = [];
$aliments[] = "Avocat";
print_r($aliments);
unset($aliments[array_search('Avocat',$aliments)]);
echo ("\n");
$aliments[] = "Poire";
print_r($aliments);
*/
/*Exercie :Créer un tableau avec pour valeur : "html","css",Javascript,"Php". Respecter bien cette ordre.
En utilisant ce tableau créer une variable ayant pour valeur tap que vous nommerez mot.
ensuite ajouter cette variable dans votre tableau aliments créé hier.
et pour finir utiliser ce meme tableau pour récupérer la premièere valeur et la stocké dans une constante et faire une phrase avec.
*/
/*
$progLangs = ["html", "css", "Javascript", "Php"];
$mot = $progLangs[0][1].$progLangs[2][1].$progLangs[2][8];
$aliments[] = $mot;
//$progLangs[0];

define("val1", $progLangs[0]);
//echo val1."\n";

echo "Basculer le texte " . val1 . "  avec un clic ou un {$mot}.\n";
*/

/* Exo:Extraire d'un tableau qui va contenir 6 valeurs de types string, 2 valeurs aléatoires. */
$tab = ["php","html","css","javascript"];
$randTab=array_rand($tab,2);

echo $tab[$randTab[0]]."\n";
echo $tab[$randTab[1]]."\n\n\n\n";

$tabLength = count($tab);
for ($i=0 ; $i < $tabLength; $i++){
    echo $tab[$i]."\n";
}
//pmsv
$tabLength = count($tab);
for ($i=0 ; $i < $tabLength; $i+=1){
    echo $tab[$i][2];
    echo "\n";
}

 /*Exo: Afficher la table de multiplication de 5 avec la boucle for.

1) 5 X 1 = 5
*/  
for($j=1; $j<=10 ;$j++){
 
    echo "$j) ","5 X $j = ",5*$j,"\n";
    
}
/*
Exo 1 

- Dans une variable de type array assigné lui cpmme valeur le nom de vos villes favorites
- Rajouté une ville dedans
- Récupérer la longueur de votre tableau
- Afficher vos villes grâce à une boucle
- Dans ce même tableau récupérer les premières lettres de chaque mot pour les stockés dans une variable de votre choix.
-Utiliser ce mot dans une phrase dans laquel votre nom et votre prénom séront présent ( il est interdit d'écrire votre nom et prénom en dur !!!!!).
*/

/*
$villes=["Lyon","Evry","Valence","Nantua","Mailley-et-Chazelot","Livron-sur-Drôme","Gray","Montluçon","Paris"];
$villes[]="Clermont-Ferrand";
$villeLongueurTab=count($villes);
for($i=0 ; $i<$villeLongueurTab; $i++){
 echo $villes[$i]."\n"; 
}
$permiersLetters="";
$i=0;
foreach ($villes as $ville){
  
  $permiersLetters .=  $ville[0];
  $i++;
}

echo $permiersLetters;
$monNom="ESSRIDI";
$monPrenom="Kamel";

echo "\n Je m'appelle $monPrenom $monNom et j'ai habité dans toutes les villes qui commencent par $permiersLetters.\n"
*/
/* 
Exo 2 

Déclarer une variable de votre choix dans lequel vous stockerez 3 noms de pays et leurs 3 capitales correspondantes.
Afficher l'intégralité des informations grâce à la boucle de votre choix.

*/
/*
$nomsPays=["France"=>"Paris","Tunisie"=>"Tunis","Italie"=>"Rome"];
foreach($nomsPays as $key=>$value)
  echo "Le capitale de l(a) {$key} est {$value}.\n"


*/
/*Exo: A l'aide d'une boucle while afficher l'intégralité des départements possible du 77.*/

$depatement=77000;
while ($depatement < 78000)
    {

    echo $depatement++."\n";
    }

?>