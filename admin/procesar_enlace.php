<?php
$url = $_GET['q'] ?? '';
if (!$url) {
    echo json_encode(['error' => 'Falta el parámetro q']);
    exit;
}

$searchUrl = 'https://www.google.com/search?q=' . urlencode($url);
$context = stream_context_create([
    'http' => [
        'user_agent' => 'Mozilla/5.0'
    ]
]);

$html = file_get_contents($searchUrl, false, $context);
if (!$html) {
    echo json_encode(['error' => 'No se pudo obtener contenido']);
    exit;
}

// Extraer descripción
preg_match('/<meta name="description" content="(.*?)"/i', $html, $descMatch);
$descripcion = $descMatch[1] ?? '';

// Extraer imagen OG
preg_match('/<meta property="og:image" content="(.*?)"/i', $html, $imgMatch);
$imagen = $imgMatch[1] ?? '';

echo json_encode([
    'descripcion' => $descripcion,
    'imagen' => $imagen
]);
