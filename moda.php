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
$elemento1 = array_map(
  function($elemento){ 
  if($listaCount[$elemento])
    {$listaCount[$elemento] += 1;}
  else
    {$listaCount[$elemento] =1;}
  },
  $lista);
echo $elemento1;

?>
