<?php
  function hasSecurityLong($pass) {
    return strlen($pass) >= 8;
  }
  
  function hasUpperLetter($pass) {
    // 1. convertir un string array 
    $arrayPass = str_split ($pass); 
    // 2. recorrido del arreglo
    foreach ($arrayPass as $letter) {
    // 3. Preguntar si la lestra es mayuscula
    if($letter == strtoupper($letter)) {
        return true;
      }
    }
    return false;
  }

  function hasNumber($pass) {
    // 1. convertir un string array 
    $arrayPass = str_split ($pass); 
    // 2. recorrido del arreglo
    foreach ($arrayPass as $letter) {
    // 3. Preguntar si hay un número
    if(is_numeric($letter)) {
        return true;
      }
    }
    return false;
  }
?>
