<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Ejercicio Práctico N°1</title>
  </head>
  <body>
<h2>TP N°1 BACK END</h2>
<h3>Ruiz Gomez, Maria Victoria</h3>
<?php
/*Punto N°1*/
echo "1) Hola Mundo. (Solo imprimiendo por pantalla). <br>";

/*Punto N°2*/
$var= "Hola Mundo";
echo "2) $var (Asignandole una variable). <br>";

/*Punto N°3*/
$VarEntero1= 10;
$VarEntero2= 200;
$varsuma=$VarEntero1+$VarEntero2;
$varresta= $VarEntero1-$VarEntero2;
$varmultip= $VarEntero1*$VarEntero2;
$vardiv=$VarEntero1/$VarEntero2;
$varresto= $VarEntero1 % $VarEntero2;
echo "3) La suma será $varsuma, la resta será $varresta, la Multiplicación $varmultip, la división $vardiv, y el resto será $varresto .<br>";


/*Punto N°4 Formula (20 °C × 9/5) + 32 = 68 °F */

$gradosc = 20;
$gradosf = ($gradosc * 9/5) + 32;
echo "4) $gradosc grados Centigrados son equivalentes a $gradosf grados Fahrenheit. <br>";


/*Punto N°5a* P=2L+2A y A=LxA*/

$base = 18;
$alt = 12;

$perim= 2*$base + 2*$alt;
echo "5.a.1) El perímetro del rectángulo es $perim <br>";
$area= $base * $alt;
echo "5.a.2 El área del rectangulo es $area <br>" ;

/*Punto N°5b* Perímetro = 2(pi) por radio. Área = pi por radio al cuadrado*/
$radio = 30;
$perimetro = 2 * M_PI * $radio;
echo "5.b.1) El perímetro del círculo es $perimetro <br>";

$area = M_PI * ($radio**2);
echo "5.b.2) El área del círculo es $area <br>";

?>

  </body>
</html>
