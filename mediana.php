<?php 
function calcularMediana(...$lista){
  $mitadLista = intval(count($lista) / 2);

  function esPar($numero){
    if ($numero % 2 === 0)
   {
      return true;
    }
    else
    {
      return false;
    }
  }

  $mediana;

  if(esPar(count($lista)))
  {
    $elemento1 = $lista[$mitadLista];
    $elemento2 = $lista[$mitadLista - 1];

    $promedioElemento1y2 = calcularMediaAritmetica(
      $elemento1, 
      $elemento2
    );
    $mediana = $promedioElemento1y2;
  }
  else
  {
    $mediana = $lista[$mitadLista];
  }
  return $mediana;
}

echo calcularMediana(100,200,500,400000000);

function calcularMediaAritmetica(...$lista) {
  $sumaLista = array_reduce(
    $lista,
    function ($valorAcumulado, $nuevoElemento){
      return $valorAcumulado + $nuevoElemento;
    }
  );
  $promedioLista = $sumaLista / count($lista);
  return $promedioLista;

}


?>
