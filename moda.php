<?php
$lista = [ 
  1,
  2,
  3,
  1,
  2,
  3,
  4,
  2,
  2,
  2,
  1
];
$listaCount = [];
function elemento ($elemento){
  
    if($listaCount[$elemento])
      return $listaCount[$elemento] += 1;
    else
      return $listaCount[$elemento] = 1;
  
}

$elemento1 = array_map("elemento", $lista);
echo '</pre>';
var_dump($elemento1);
echo '</pre>';
?>
