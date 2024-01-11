<?php

include_once 'Conecta/conexion.php';
$conexion = Conexion::obtenerConexion();

$compania = "Iberia";
$linea = "3";
$pasajeros = 12;

// 1 -> Montar la sentencia preparada SQL colocando una interrogación en cada línea
$sql = "INSERT INTO aeropuerto (compania,linea,pasajeros) VALUES (?, ?, ?)";

// 2-> Preparamos la consulta SQL para su ejecución
$sentencia = $conexion->prepare($sql);

// 3-> Vinculamos los parámetros de la consulta preparada con los valores de la variable correspondientes
$sentencia->bindParam(1, $compania, PDO::PARAM_STR);
$sentencia->bindParam(2, $linea, PDO::PARAM_STR);
$sentencia->bindParam(3, $pasajeros, PDO::PARAM_INT);

// 4-> Ejecutar la consulta preparada
$result = $sentencia->execute(); // Guardar el resultado de la ejecución

if ($result) {
    echo "<br>Registro realizado con éxito";
} else {
    echo "Ha ocurrido algún error";
}

?>
