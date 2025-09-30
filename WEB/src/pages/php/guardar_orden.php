<?php
header('Content-Type: application/json');

// Configuración base de datos:
$host = 'localhost';
$db   = 'tienda';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (Exception $e) {
    echo json_encode(['success' => false, 'message' => 'Error conexión DB: ' . $e->getMessage()]);
    exit;
}

// Recibir datos POST
$cliente = $_POST['cliente'] ?? 'Cliente sin nombre';
$direccion = $_POST['direccion'] ?? '';
$total = $_POST['total'] ?? 0;
$metodo_pago = $_POST['metodo_pago'] ?? 'efectivo'; // o transferencia
$comprobante = $_POST['comprobante'] ?? null; // Podrías manejar archivo separado si quieres

// Generar número de orden
$numeroOrden = 'MR-' . date('YmdHis') . '-' . random_int(1000, 9999);

try {
    $stmt = $pdo->prepare("INSERT INTO ordenes (numero_orden, cliente, direccion, total, metodo_pago) VALUES (?, ?, ?, ?, ?)");
    $stmt->execute([$numeroOrden, $cliente, $direccion, $total, $metodo_pago]);

    echo json_encode(['success' => true, 'order_id' => $numeroOrden]);
} catch (Exception $e) {
    echo json_encode(['success' => false, 'message' => $e->getMessage()]);
}
