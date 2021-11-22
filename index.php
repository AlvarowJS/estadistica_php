
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<?php

include 'promedio.php';
include 'mediana.php';
?>
<body>
  <aside class ="app">
  <img src="img/php.PNG" alt="">
  <header>
  <h1>ESTADISTICA</h1>
  </header>
  <aside>
    <h2>Calculando Media o Promedio</h2>
    <form action="index.php" method="post">
      <p>Ingrese un conjunto de numeros: 
        <input type="text" name="numeros" placeholder="1,2,3...">
      </p>
      <p><input type="submit" name=""></p>
    </form>
    <p>El resultado es: 
    <?php
      echo calcularMediaAritmetica($array);
    ?>
    </p>
  </aside>

  <aside>
  <h2>Calculando Mediana Aritmetica</h2>
  <form action="index.php" method="post">
    <p>Ingrese un conjunto de numeros: 
      <input type="text" name="numeros1" placeholder="1,2,3...">
    </p>
    <p><input type="submit"></p>
  </form>
  <p>El resultado es: 
    <?php
      echo calcularMediana($array1);
    ?>
    </p>
  </aside> 
  </aside>
</body>
</html>
    
