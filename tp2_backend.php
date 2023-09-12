<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<h3>TP N°3 Estructuras de Control IF</h3>
<h5>Ruiz Gomez M. Victoria</h5>
<?php

$a=3;
$b=5;
$c=12;
$numero1=1;
$numero2=7;

echo "Ejercicio 1: ";
if ($a>0) {
  echo "La variable A es MAYOR a 0";
  echo "<br>";
}

echo "Ejercicio 2: ";
if ($b>1 & $b<10) {
  echo "La variable B es MAYOR a 1 y MENOR A 10";

}
echo "<br>";
echo "Ejercicio 3: ";
if ($c>10 || $c<2) {
  echo "La variable C es MAYOR a 10 y MENOR a 2";
  echo "<br>";
}

/*Estructura elseif*/

$suma= $numero1+$numero2;
$resta=$numero1-$numero2;
$mul= $numero1*$numero2;
$div=$numero1/$numero2;
$resto=$numero1%$numero2;

  echo "Ejercicio 4: ";
if ($numero1>$numero2) {
   echo "La suma será $suma y la resta será $resta";}
elseif ($numero1<$numero2) {
   echo "La multiplicación será $mul, la división será $div y el resto será $resto"; }
  else {
    echo "Los números ingresados son IGUALES";}


?>

  </body>
</html>
