<?php
/*Créer une fonction qui permet de retourner si une personne est éligible au vote.
(Avec un argument).
Mehdi, vous êtes éligible au vote.
*/
/*
$nom = "kamel";
$age = 34;
function PeutVoter($age)
{
return ($age >= 18) ? "eligible au vote. " : "pas éligible au vote.";
}
echo "{$nom}, vous êtes " . PeutVoter($age) . "\n";
/*
ecrire une fonction a 2arguments qui affiche une phrase de présentation avec le nom et le prénom.
ecrire une fonction à 2 arguments qui affiche la saison et la temperature de votre choix.
*/
/*
function SePresenter($nom, $prenom)
{
return "Je m'appelle {$prenom} {$nom}.\n";
}
echo SePresenter('kamel', 'ESSRIDI');
function SaisonTemp($saison, $temperature)
{
return "Pour la saison de {$saison} les temperatures sont alentour de  {$temperature}° celsuis.\n";
}
echo SaisonTemp('Eté', 26);
/*
$tabbb = [-1, 2, -3, 4, -5];
$tabb = [];
function invert(array $a): array
{
$tab = array();
if (empty($a)) {
$tab[] = $a;
} else {
for ($i = 0; $i < count($a); $i++) {
if ($a[$i] == 0) {
$tab[] = $a[$i];
} else {
$tab[$i] = -($a[$i]);
}
}
}
return $tab;
}
print_r(invert($tabbb));
*/

/*ecrire une fonction qui permet de retourner le calcul de TVA.
ecrire une fonction qui retourne l'air d'un rectangle*/
/*
function air($air1, $air2) {
$tab[] = "l'air de {$air1} x {$air2} = ";
$tab[] = $air1 * $air2;
return $tab;
}
$x=air(6, 6);
echo $x[0],$x[1];
/*
/*EXO::En utilisant la méthode rand(), remplir un tableau avec 10 nombres aléatoires. Puis tester si le chiffre 42 est dans le tableau et afficher un message en conséquence.
Afficher votre tableau pour voir la valeur obtenue.
*/
//$tab=[];

/*
for ($i = 0; $i < 10;$i++){
$tab[] = rand(0, 100);
}
foreach($tab as $value){
if ($value === 42){
echo "le nombre 42 existe dans le tableau\n";
}
echo $value . "\n";
}
/*
/*En utilisant la méthode rand() et in_array, remplir un tableau avec 10 nombres aléatoires. 
Puis tester si le chiffre 42 est dans le tableau et afficher un message en conséquence.
Afficher votre tableau pour voir la valeur obtenue. */



/* Exo2 :Bob a besoin d'un moyen rapide pour calculer le volume d'un cuboide avec trois valeurs : le length, width et le height du cuboide.
Ecrivez une fonction pour aider Bob dans ce calcul. */


function calcul_cube($length, $width, $height)
{
    $result = $length * $width * $height;
    return $result;
}
//echo calcul_cube(1, 7, 7);


$j1 = "PIERRE";
$j2 = "PIERRE";

if((($j1==="PIERRE") && ($j2==="CISEAUX") )|| (($j1 ==="FEUILLE") && ($j2==="PIERRE"))|| (($j1 ==="CISEAUX") && ($j2==="FEUILLE"))){
    echo "Joueur 1 gagne";
}elseif($j1===$j2){
    echo "egalité";
} else
    echo  "J2 gagne";




?>


