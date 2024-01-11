<?php
    /*Este ejemplo realiza una consulta a una base de datos usando PDO y mostrando los resultados 
    usando el método PDO::FETCH_OBJ, que devuelve objetos anónimos con nombres de propiedades que
    se correspoden con el nombre de los campos en las tablas */
    include_once 'Conecta/conexion.php';

    $conexion = Conexion::obtenerConexion();

    $vuelo = 1;

    $sql = "SELECT * FROM aeropuerto";
    $sentencia = $conexion -> prepare($sql);

    $sentencia ->setFetchMode(PDO::FETCH_OBJ);

    $result = $sentencia->execute();

    //$fila ahora es un objetos cuyos atributos son los nombres de los campos de la tabla de la BBDD
    while ($fila = $sentencia->fetch()){
        echo "<br>ID: " .$fila->id;
        echo "<br>Compañia: " .$fila->compania;
        echo "<br>Línea: " .$fila->linea;
        echo "<br>Pasajeros: " .$fila->pasajeros;
        echo "<br><br>-----------------------------------<br>";
    }

?>