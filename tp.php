<?php
/*
Exercice 1 : ( interdiction d'utiliser internet  )
Donner la definition d'une variable ? d'une constante ? d'un tableau ? d'une boucle ? et d'une fonction ?
////
une variable : est une boite qui peut contenir défférent types de données , elle peut etre ecraser par d'autre donnée au fil du programme.
une constante: une est donnée non ecrasable au fil du programme et peut contenir diffrent type de données.
un tableau: souvent les tableau sont des constantes , un tableau peut etre vide et peut aussi contenir beaucoup de données.
une boucle : contenir des instructions s'executent n fois jusqu'a ce que sa condition est validé.
une fonction : elle prend de parametre(s)ou pas et / ou renvoie de resultat . on a besoin des function pour ne pas repeter son code 
et pour appliquer le principe DRY() don't repeat yourself).
///
Exercice 2 : Donner les types de données présentes en programmation php.
///
en Php on a 3 types de données : string, number, boolean 
///
Exercice 3 : Donner moi la différence entre un site statique et un site dynamique.
///
le site statique est un site qui fait pas d'interaction avec l'utilisateur comme les site vitrines.
Un site dynamique est un site qui fait d'interaction avec l'utilisateur, comme les formulaires en ligne ...etc.
///
Exercice 4 : A quoi servent les bases de donnnées ? à l'aide de quoi nous pouvons définir les éléments à insérer en base de donnée ? 
///
les bases de données servent pour stocker les données à l'aide des structures conditionelles nous pouvons définir les éléments à insérer en base de donnée 
///
*/

/*
Exercice 5 : En utilisant certaines méthodes de programmation réussir à afficher ce message :
"Bienvenue dans votre laboratoire Mr starck"
Hier en me laissant vous aviez 39 ans et aujourd'hui
vous avez 40ans"
*/

// $name = 'starck';
// $gender = 'Homme';
// $age = 40;
// function getGender($gender)
// {
//     $tempStr = " ";
//     switch ($gender) {
//         case (strtolower($gender) === 'homme'):
//             $tempStr = "Mr";
//             break;

//         case (strtolower($gender) === 'femme'):
//             $tempStr = "Mme";
//             break;
//     }
//     return $tempStr;
// }

// echo "Bienvenue dans votre laboratoire " . getGender($gender) . " {$name} \n
// Hier en me laissant vous aviez " . (--$age) . " ans et aujourd'hui \n
// vous avez " . (++$age) . " ans\n\n";

/*
Exercice 6 : 
Créer un tableau regroupant ces pays : Portugal,Hongrie,Pologne.
Recupérer le 1er index de chaque pays pour afficher un langage de programmation.
Ajouter ensuite le pays de votre choix dans ce tableau ( afficher le résultat) puis supprimer le portugal du tableau et afficher le résultat final.
*/

// $countries = ['Portugal','Hongrie','Pologne'];
// $tempStr = '';
// foreach($countries as $country){
//     $tempStr .= $country[0];
// }
// echo $tempStr."\n";
// array_push ($countries , 'Tunisie');
// print_r($countries);
// unset($countries[0]);
// print_r($countries);

/*
Exercice 7 : 
Créer un tableau permettant de savoir combien de places sont disponibles au Parc des princes / Au velodromme et a la Bombonera.
Afficher de manière dynamique l'ensemble de ces données.
*/

// $availablePlaces =
//     [
//         'Parc des princes' => '47,929',
//         'Velodromme' => '67,394',
//         'Bombonera' => '54,000'
//     ];
// foreach ($availablePlaces as $key => $value) {
//     echo "- {$key}  a {$value} de places disponibles.\n";
// }

/*
Exercice 8 : 
Ecrire le programme qui vous permet d'afficher ce message :
"Bonjour Monsieur" ou " Bonjour Madame" ou "Bonjour non binaire" selon l'identité de la personne.
*/
// $gender = 'fEmMe';
// function getGender($gender)
// {
//     $tempStr = " ";
//     switch ($gender) {
//         case (strtolower($gender) === 'homme'):
//             $tempStr = "Monsieur";
//             break;

//         case (strtolower($gender) === 'femme'):
//             $tempStr = "Madame";
//             break;
//         default:
//             $tempStr = "non binaire";
//     }
//     return $tempStr;
// }
// echo "Bonjour ", getGender($gender);

/*
Exercice 9 : 
Déclarer une variable $heure qui contient la valeur de type integer de votre choix comprise entre 0 et 24.
Créer une condition qui affiche un message si l'heure est le matin, l'après-midi ou la nuit. 
*/

// function determineDayNight($heure)
// {

//     switch ($heure) {
//         case ($heure >= 0 && $heure <= 12):

//             return "C'est le matin";

//         case ($heure > 12 && $heure <= 18):
//             return "C'est l'après-midi ";
//         case ($heure > 18 && $heure <= 24):
//             return "C'est la nuit ";
//         default:
//             return "!!! L'heure entrée n'est pas correcte\n
//             Stp entre une heure coprise entre 0 et 24 !!!\n";
//     }

// }
// echo determineDayNight(15);

/*
Exercice 10 : 
Vous êtes gestionnaires de stock en jeux vidéo et vous avez dans votre magasin des playstation, des xbox et des switch, 
vous avez besoin de savoir si votre stock est optimal et pour cela vous avez défini un nombre de console minimum à avoir. 
En tant que developpeur vous êtes chargé d'écrire le code qui permettra de savoir quels sont les produits avec un stock optimal ou non.
(  PS : Interdit d'utiliser internet et vos exercices  
PSS :	Vous êtes garant de votre formation la triche ne sert à rien :)
*/
// $consoles = ["playstation" => 11, "xbox" => 50, "switch" => 70];
// function stockGestion($consoles)
// {
//     $optimalStock = 50;
//     foreach ($consoles as $key => $value) {
//         if ($value >= $optimalStock) {
//             echo "les $key ont un stock optimal\n";
//         }
//     }
// }

// stockGestion($consoles);



/*
Exercice 11 : 
En utilisant la fonction rand(), remplir un tableau avec 10 nombres aléatoires. Puis, trier les valeurs dans deux tableaux distincts. 
Le premier contiendra les valeurs inférieures à 50 et le second contiendra les valeurs supérieures ou égales à 50. Enfin, afficher le contenu des deux tableaux.
( Vous avez le droit de vous aidez de l'exercice à peu près similaire à celui-ci vu en cour)
*/
// $randArray = [];
// for ($i = 0; $i < 10; $i++){
//     $randArray[$i] =rand(1,100);
// }
// $moreThan50 =array_filter($randArray,fn($x) => ($x >= 50) );
// $lessThan50 =array_filter($randArray,fn($x) => ($x < 50) );
// print_r($randArray);
// sort($moreThan50);
// sort($lessThan50);
// print_r($moreThan50);
// print_r($lessThan50);

/*
Exercice 12 : 
Créer une fonction qui renvoi le nom et le prénom d'une personne dans une phrase comme cet exemple : " Bonjour Mercredi Adams "
*/

// function getFullName($lName, $fName)
// {
//     return "Bonjour {$lName} {$fName}";
// }
// echo getFullName("Essridi", "Kamel");
/*
Exercice 13 : 
Créer une fonction pour qu'elle trouve la moyenne des trois notes qui lui sont transmises et renvoie la valeur alphabétique associée à cette note.
La note égal à 20 = 'A'
La note supérieur ou égal à 15 = 'B'
La note supérieur ou égal à 10 = 'C'
La note supérieur ou égal à 5 = 'D'
Le reste F
*/
// function average($mark1, $mark2, $mark3)
// {
//     $average = ($mark1 + $mark2 + $mark3) / 3;
//     $tempChar = '';
//     switch ($average) {
//         case ($average === 20):
//             $tempChar = 'A';
//             break;
//         case ($average >= 15 && $average < 20):
//             $tempChar = 'B';
//             break;
//         case ($average >= 10 && $average < 15):
//             $tempChar = 'C';
//             break;
//         case ($average >= 5 && $average < 10):
//             $tempChar = 'D';
//             break;
//         default:
//             $tempChar = 'F';

//     }
//     return $tempChar;

// }

// //echo average(0, 0, 0); ??
// echo average(14, 17, 10);

/*
Exercice 14 :
Créer une fonction qui renvoie le nombres de voyelles dans une chaîne de caractère.
Nous considérerons a, e, i, o, u comme voyelles sans le y .
*/

// function getVowelsCount($str)
// {
//     $str1 = str_split($str, 1);
//     $vowelsCount = 0;
//     foreach ($str1 as $value) {
//         $checkLettter = strtolower($value);
//         if (
//             ($checkLettter === 'a') ||
//             ($checkLettter === 'e') ||
//             ($checkLettter === 'i') ||
//             ($checkLettter === 'o') ||
//             ($checkLettter === 'u')
//         ) {
//             $vowelsCount++;
//         }
//     }  
//     return $vowelsCount;
// }

// echo getVowelsCount("Il y a des restaurants partout");

/*
Exercice 15 ( NIVEAU FINAL WORLD BOSS !!!)
Saviez-vous que les girafes dorment 4,6 heures par jour ? Nous, les humains, avons besoin de plus que cela. 
Si nous ne dormons pas assez, nous accumulons une dette de sommeil. 
Dans ce projet, nous calculerons si vous dormez suffisamment chaque semaine à l'aide d'un calculateur de dette de sommeil.
Le programme déterminera les heures de sommeil réelles et idéales pour chaque nuit de la dernière semaine.
Enfin, il calculera, en heures, à quelle distance vous vous trouvez de votre objectif de sommeil hebdomadaire.
( Un peu d'aide : 4 fonctions à créer ( mais vous n'êtes pas obligé)
La 1er vous définisez vos jours et le nombres d'heures de sommeil que la personne dort et les 3 autres bon courage à vous.)
*/
$mesHeurSomm = [];
function mesHeuresDeSommeil($sommeilTab)
{
    for ($i = 0; $i < 7; $i++) {
        $sommeilTab[$i] = rand(1, 12);
    }
    return $sommeilTab;
}
function ecartsSommeilDeLaSemaine($sommeilTab, $idealHeur)
{
    $ecarts = [];

    foreach ($sommeilTab as $value) {
        $ecart = $value - $idealHeur;
        array_push($ecarts, $ecart);
    }

    return $ecarts;
}
function determineDay($i)
{
    $day = '';
    switch ($i) {
        case 0:
            $day = 'lundi';
            break;
        case 1:
            $day = 'mardi';
            break;
        case 2:
            $day = 'mercredi';
            break;
        case 3:
            $day = 'jeudi';
            break;
        case 4:
            $day = 'vendredi';
            break;
        case 5:
            $day = 'semdi';
            break;
        case 6:
            $day = 'dimanche';
            break;

    }
    return $day;
}
function sommeilStats($ecarts, $idealHeur)
{
    $i = 0;
 foreach($ecarts as $ecart){
if ($ecart ===0){
           echo  "vous avez BIEN dormi le " . determineDay($i) . " dernier\n";
            $i++;
}
    
    if($ecart <0){
           echo  "vous avez manqué de sommeil de $ecart heure le " . determineDay($i) . " dernier\n";
            $i++;
    }else{
       echo  "vous avez BEAUCOUP dormi, vous avez dormi $ecart heure(s) de plus que le normal  le " . determineDay($i) . " dernier\n";
        $i++;
    }
 }
}
$sommeilTab = mesHeuresDeSommeil($mesHeurSomm);
print_r($sommeilTab);
$idealHeur = 8;
$ecarts=ecartsSommeilDeLaSemaine($sommeilTab, $idealHeur);
sommeilStats($ecarts, $idealHeur,0);


?>