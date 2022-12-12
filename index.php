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
A l'aide d'un tableau multidimentionnelle réussir à faire ça :
("X","O","O");
("X","O","X");
("X","X","O");
*/

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




?>