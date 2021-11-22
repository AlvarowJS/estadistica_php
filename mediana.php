<?php
$array1 = $_POST['numeros1'];
function calcularMediana($lista){
  $arr1 = explode(",",$lista);
  $mitadLista = intval(count($arr1) / 2);

  function esPar($numero){
    if ($numero % 2 == 0)
   {
      return true;
    }
    else
    {
      return false;
    }
  }

  $mediana;
  if(esPar(count($arr1)))
  {
    $elemento1 = $arr1[$mitadLista];
    $elemento2 = $arr1[$mitadLista - 1];
    
    $promedioElemento1y2 = ($elemento1 + $elemento2)/2;
    /*
    $promedioElemento1y2 = calcularMediaAritmetica(
      $elemento1, 
      $elemento2
    );
     */
    $mediana = $promedioElemento1y2;
  }
  else
  {
    $mediana = $arr1[$mitadLista];
  }
  return $mediana;
}


?>
