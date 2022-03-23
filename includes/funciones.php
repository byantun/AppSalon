<?php
function obtenerServicios() : array{
    try {
        //Importar una conexion
        require 'database.php';
        // var_dump($db);

        //Escribir la consulta SQL
        $sql = 'select * from servicios;';
        $consulta = mysqli_query($db, $sql);

        //Crear arreglo vacio
        $servicios = [];
        $i = 0;

        //Obtener el resultado de la consulta.
        while($row = mysqli_fetch_assoc($consulta)){
            $servicios[$i]['id'] = $row['id'];
            $servicios[$i]['nombre'] = $row['nombre'];
            $servicios[$i]['precio'] = $row['precio'];
            $i++;
        }
        return $servicios;
        // echo "<pre>";
        // var_dump(json_encode($servicios));
        // echo "</pre>";

        // echo "<pre>";
        // var_dump(mysqli_fetch_assoc($consulta));//convierte en un arreglo de php
        // echo "</pre>";


    } catch (\Throwable $th) {
        //throw $th;
        var_dump($th);
    }
}

obtenerServicios();