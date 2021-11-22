<?php 
error_reporting(0);
$array = $_POST['numeros'];
function calcularMediaAritmetica($lista)
{
  $arr = explode(",",$lista); 

  /*
  $acumula = 0;
  foreach($arr as $valor){
    
  }
   */

   
  $sumaLista = array_reduce(
    $arr,
    function ($valorAcumulado, $nuevoElemento){
      return (float)$valorAcumulado + (float)$nuevoElemento;
    }
  );
 

  $promedioLista = (float)$sumaLista / (int)count($arr);

  return $promedioLista;
   
}
//$array = array($_POST['numeros']);

?>
