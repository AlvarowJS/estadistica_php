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
      return (float)$valorAcumulado + (float)$nuevoElemento;
    }
  );
 

  $promedioLista = (float)$sumaLista / (float)count($lista);
  echo $promedioLista;
  echo "<br>";

  return $promedioLista;
}
$array = $_POST['numeros'];
echo $array;
echo "<br>El resultado es con arrray es: ";
echo calcularMediaAritmetica($array);
echo "<br>El resultado es: ";

echo calcularMediaAritmetica(1,2,3,4); 
?>
