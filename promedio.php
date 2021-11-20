<?php 
function calcularMediaAritmetica(...$lista)
{
  //$sumaLista = 0;
  //for($i=0; $i< count($lista); $i++)
  //{
  //  $sumaLista = $sumaLista + $lista[$i];
  //}

  $sumaLista = array_reduce(
    $lista,
    function ($valorAcumulado, $nuevoElemento){
      return $valorAcumulado + $nuevoElemento;
    }
  );

  $promedioLista = $sumaLista / count($lista);
  return $promedioLista;
}
echo calcularMediaAritmetica(50,20,30);
?>
