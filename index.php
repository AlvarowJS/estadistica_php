
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
include 'promedio.php';
?>
<body>
  <h1>ESTADISTICA</h1>
  <h2>Calculando Mediana o Promedio</h2>
  <form action="promedio.php" method="post">
    <p>Ingrese un conjunto de numeros: 
      <input type="text" name="numeros">
    </p>
    <p><input type="submit"></p>
  </form>
</body>
</html>
    
