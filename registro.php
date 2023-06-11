<?php
    include_once('conexion.php');

    $insert = "INSERT INTO jugadores(nombre, puntos) VALUES (?,?)";

    $stmt = $conn->prepare($insert);

    $stmt->bind_param("si", $_POST['nombre'], $_POST['puntos']);

    $stmt->execute();

    $conn->close();

    header("Location: index.php");
?>