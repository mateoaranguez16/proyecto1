<?php
header('Content-Type: application/json');

// Config DB y conexión igual que antes
// Suponemos que recibimos el cliente (email) para filtrar

$cliente = $_GET['cliente'] ?? '';

if (!$cliente) {
    echo json_encode(['success' => false, 'message' => 'Cliente no especificado']);
    exit;
}

// Configura conexión PDO igual que antes
//...

try {
    $stmt = $pdo->prepare("SELECT numero_orden, direccion, total, metodo_pago, fecha FROM ordenes WHERE cliente = ? ORDER BY fecha DESC");
    $stmt->execute([$cliente]);
    $ordenes = $stmt->fetchAll();

    echo json_encode(['success' => true, 'ordenes' => $ordenes]);
} catch (Exception $e) {
    echo json_encode(['success' => false, 'message' => $e->getMessage()]);
}
