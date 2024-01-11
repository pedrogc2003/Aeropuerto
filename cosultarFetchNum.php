<?php

    include_once 'Conecta/conexion.php';

    $conexion = Conexion::obtenerConexion();

    $vuelo = 1;

    $sql = "SELECT * FROM aeropuerto";
    $sentencia = $conexion -> prepare($sql);

    /*Para leer necesito el tipo de dato que queremos de salida. Para ello hay varios tipos de constantes que determinan los distintos tipos:
      - PDO::ASOC: Array indexado por los nombres de las columnas
      - PDO::NUM: Array indexador por numero de columna
      - PDO::BOTH : Array indexado por columnas y por números
    */
    $sentencia ->setFetchMode(PDO::FETCH_NUM);

    $result = $sentencia->execute();

    while ($fila = $sentencia->fetch()){
        echo "<br>ID: " .$fila[0];
        echo "<br>Compañia: " .$fila[1];
        echo "<br>Línea: " .$fila[2];
        echo "<br>Pasajeros: " .$fila[3];
        echo "<br><br>-----------------------------------<br>";
    }

?>