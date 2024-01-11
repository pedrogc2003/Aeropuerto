<?php

include_once 'Conecta/conexion.php';
$conexion = Conexion::obtenerConexion();

$linea = "3";

// 1 -> Montar la sentencia preparada SQL colocando una interrogación en cada línea
$sql = "SELECT * FROM aeropuerto WHERE linea = ?";

// 2-> Preparamos la consulta SQL para su ejecución
$sentencia = $conexion->prepare($sql);

// 3-> Vinculamos los parámetros de la consulta preparada con los valores de la variable correspondientes
$sentencia->bindParam(1, $linea, PDO::PARAM_STR);

// 4-> Ejecutar la consulta preparada
$result = $sentencia->execute(); // Guardar el resultado de la ejecución

// 5-> Mostrar los resultados
if ($result) {
    // Obtener los resultados como un array asociativo
    $resultados = $sentencia->fetchAll(PDO::FETCH_ASSOC);

    // Mostrar los resultados
    foreach ($resultados as $resultado) {
        echo "<br>Nombre Compania: " . $resultado['compania'] . "<br>";
        echo "Número de Linea: " . $resultado['linea'] . "<br>";
        echo "Número de Pasajeros: " . $resultado['pasajeros'] . "<br>";
        echo "--------------------------<br>";
        echo "Prueba";
    }
} else {
    echo "Ha ocurrido algún error";
}

?>
