<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Clase 5</title>
  </head>
  <body>
    <h3>TP N°5 Estructuras de Control WHILE y FOR</h3>
    <h4>Ruiz Gomez M. Victoria</h4>

<?php
/* $i++ es lo mismo que i=i+1  */

/*EJERCICIO 1 Opcion1*/
print "<p>Ejercicio 1: Mostrar los números del 1 al 100</p>\n";
$i=1;
do {
    print "$i, ";
    $i++;
} while ($i <= 100);

/*EJERCICIO 1 opcion2
  for ($i=1; $i <= 100; $i++) {
        print "<p>$i</p>\n";
  }*/

/*EJERCICIO 2*/
print "<p>Ejercicio 2: Mostrar los números del 100 al 1</p>\n";

for ($i=100; $i>=1; $i--) {
      print "$i, ";
}

/*EJERCICIO 3*/
print "<p>Ejercicio 3: Mostrar los números pares del 1 al 100</p>\n";
for ($i = 2; $i <= 100; $i += 2) {
    print "$i, ";
}

/*EJERCICIO 4*/
print "<p>Ejercicio 4: Mostrar los números impares del 1 al 100</p>\n";
for ($i=1; $i<=100; $i=$i+2) {
      print "$i, ";
}
/*EJ 5 $suma = $suma + $i se puede escribir como $suma += $i*/
print "<p>Ejercicio 5: Mostrar la suma de los números del 1 al 20</p>\n";
$suma = 0;
for ($i = 1; $i <= 20; $i++) {
    $suma = $suma + $i;
}
print "La respuesta es: $suma";

/*EJ 6* $i += 2 es lo mismo que $i=$i+2 */
print "<p>Ejercicio 6: Mostrar la suma de los números pares del 1 al 20</p>\n";
$suma = 0;
for ($i = 2; $i <= 20; $i += 2) {
    $suma += $i;
}
print "La respuesta es: $suma" ;


?>

  </body>
</html>
