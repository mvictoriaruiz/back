<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<h3>TP ARRAY-MATRICES</h3>
<h4>Ruiz Gomez Maria Victoria</h4>

<?php

/*Ejercicio 1*/
print "<p>Ejercicio 1: </p>\n";
// Inicio un array para almacenar los primeros 10 números pares
$numerosPares = array();

// Itero desde 2 hasta 20 para encontrar los 10 primeros números pares
for ($i = 2; $i <= 20; $i += 2) {
    // Agrego el número par al array
    $numerosPares[] = $i;
}

// Mustro los números pares uno al lado del otro
foreach ($numerosPares as $numero) {
    echo "$numero, ";

}


/*Ejercicio 2*/
print "<p>Ejercicio 2: </p>\n";

// Creo un array
$miArray = array("Pedro", "Ana", 34, 1);

print_r($miArray);


/*Ejercicio 3*/
print "<p>Ejercicio 3: </p>\n";

// Creo un array asociativo
$informacionPersona = array(
    "Nombre" => "Pedro",
    "Apellido" => "Torres",
    "Dirección" => "Av. Mayor 3703",
    "Teléfono" => "1122334455"
);

// Mostrar el array asociativo con print_r
print_r($informacionPersona);

/*Ejercicio 4*/
print "<p>Ejercicio 4: </p>\n";

$ciudades = array("Madrid", "Barcelona", "Londres", "New York", "Los Angeles", "Chicago");

    foreach ($ciudades as $indice => $ciudad) {
      echo "La ciudad con el índice $indice tiene el nombre $ciudad<br>";
}


/*Ejercicio 5 Array */
print "<p>Ejercicio 5: </p>\n";

$datos = array(
  'Madrid' => "MD",
  'Barcelona' => "BCN",
  'Londres' => "LD",
  'New York' => "NY",
  'Los Angeles' => "LA",
  'Chicago' => "CCG",
);

  foreach ($datos as $acronimo => $ciud) {
      echo "El índice de $acronimo es $ciud<br>";
}

 ?>


  </body>
</html>
