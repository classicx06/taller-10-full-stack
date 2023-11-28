<?php
  //DATOS DE ENTRADA
  include "./operationsUtils.php";
  $numberOne = 0;
  $numberTwo = 0;
  $option = "";

  // 1. llamar una funcion para pedir los números
  $numberOne = getNumber();
  $numberTwo = getNumber();

  // 2. llamar una función para mostrar el menú y obtener la opcion del usuario
  $option = showMenu();

  // 3. llamar una función para que seleccione la operación correcta
  $result = operate($numberOne, $numberTwo, $option);

  //4. mostrar el resultado
  echo "EL resultado de la operación es: " . $result;
  
?>
