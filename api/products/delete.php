<?php
    require('../../database/connection.php');

    // Obtener el ID del producto a eliminar
    $id = $_POST['id'];

    // Eliminar el producto en la base de datos
    $sql = "DELETE FROM products WHERE id=$id";

    if ($conn->query($sql)) {
        $response = array(
            'status' => true,
            'code' => 204,
            'message' => 'Producto eliminado exitosamente.',
            'data' => null
        );
    } else {
        $response = array(
            'status' => false,
            'code' => 500,
            'message' => 'Error al crear producto: ' . $conn->error,
            'data' => null
        );
    }

    echo json_encode($response);
?>