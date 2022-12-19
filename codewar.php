<?php
/*
There is an array with some numbers. All numbers are equal except for one. Try to find it!

findUniq([ 1, 1, 1, 2, 1, 1 ]) === 2
findUniq([ 0, 0, 0.55, 0, 0 ]) === 0.55
It’s guaranteed that array contains at least 3 numbers.

The tests contain some very huge arrays, so think about performance.

This is the first kata in series:

Find the unique number (this kata)

*/

$arr = [1,1,1,3,1,1];
$arrS = [1,1,1,1,1,1,5];
$arrFn = [4,1,1,1,1,1,1];
$arrStr = ['a', 'a', 'a', 'h', 'a', 'a'];
$arrF = [0,0, 0.55,  0, 0];
/*
function find_uniq($a) {
    // Do Magic :)
$arrayLen=count($a);
  
  for ($i = 0 ; $i < count($a)-1; $i++){
       
     if ((($a[($i-1)]) != ($a[$i])) && (($a[($i-1)])==($a[($i+1)]))) {
      $uniq = $a[$i];

     }   
     
      
  }

  return $uniq;
  }
*/
/*ALT*/
function find_uniq1($a) {
  // Do Magic :)
$arrayLen=count($a);
  $uniq = $a[0];

for ($i = 1 ; $i < $arrayLen-2; $i++){
  
   if ((($a[($i)]) === ($a[($i+1)])) && (($a[($i+1)])!==($a[($i+2)]))) {
    $uniq =(string)$a[($i+2)];
      break;
  }   
   
    
}

return $uniq;
}

  
echo find_uniq1($arr),"\n",find_uniq1($arrStr),"\n",find_uniq1($arrF),"\n",find_uniq1($arrS),"\n",find_uniq1($arrFn);

  ?>