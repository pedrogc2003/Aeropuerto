<?php
    include_once 'Conecta/conexion.php';
    include_once 'Modelo/Pasajero.php';

    $conexion = Conexion::obtenerConexion();

    $vuelo = 1;

    $sql = "SELECT * FROM aeropuerto"; // Asegúrate de que la consulta selecciona las columnas correctas
    $sentencia = $conexion->prepare($sql);

    // Indica que se deben mapear las columnas al objeto de la clase Pasajero
    $sentencia->setFetchMode(PDO::FETCH_CLASS, "Pasajero");

    $result = $sentencia->execute();

    // ...

    while ($fila = $sentencia->fetch()) {
        $pasajero = new Pasajero(); // Crea una nueva instancia de Pasajero

        // Establece los valores de las propiedades antes de acceder a ellas
        $pasajero->setIdVuelo($fila->id);
        $pasajero->setNombre($fila->nombre);
        $pasajero->setLinea($fila->linea);
        $pasajero->setPasajeros($fila->pasajeros);

        // Accede a las propiedades después de haberlas inicializado
        echo "<br>ID: " . $pasajero->getIdVuelo();
        echo "<br>Compañia: " . $pasajero->getNombre();
        echo "<br>Línea: " . $pasajero->getLinea();
        echo "<br>Pasajeros: " . $pasajero->getPasajeros();
        echo "<br><br>-----------------------------------<br>";
    }

?>
