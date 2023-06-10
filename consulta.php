<?php
    include_once('conexion.php');

    $sql = "SELECT id, nombre, puntos FROM jugadores";
    $data = $conn->query($sql);

    $listJugadores = array();

    if ($data->num_rows > 0) {
        while($row = $data->fetch_assoc()) {
            $listJugadores[] = ['id'=>$row['id'], 'nombre'=>$row['nombre'],'puntos'=>$row['puntos']];
        }
    } 
?>