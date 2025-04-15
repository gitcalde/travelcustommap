<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

$data = file_get_contents('php://input');

if (!$data) {
    http_response_code(400);
    echo 'No se recibió ningún dato';
    exit;
}

$file = __DIR__ . '/bordeaux.json';
if (file_put_contents($file, $data) === false) {
    http_response_code(500);
    echo 'Error al guardar el archivo';
    exit;
}

echo 'Guardado correctamente';
?>
