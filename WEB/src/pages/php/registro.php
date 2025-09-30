<?php
// Incluir conexión a base de datos
require_once 'db.php';

// Recibir y limpiar datos
$nombre = trim($_POST['username']);
$email = trim($_POST['email']);
$password = $_POST['password'];
$confirm_password = $_POST['confirm-password'];

// Validaciones básicas
if (empty($nombre) || empty($email) || empty($password) || empty($confirm_password)) {
    die("Por favor, complete todos los campos.");
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("Correo electrónico inválido.");
}

if ($password !== $confirm_password) {
    die("Las contraseñas no coinciden.");
}

// Verificar si email ya existe
$stmt = $pdo->prepare("SELECT COUNT(*) FROM usuarios WHERE email = :email");
$stmt->execute(['email' => $email]);
if ($stmt->fetchColumn() > 0) {
    die("El correo electrónico ya está en uso.");
}

// Hashear la contraseña
$password_hash = password_hash($password, PASSWORD_DEFAULT);

// Insertar usuario
$stmt = $pdo->prepare("INSERT INTO usuarios (nombre, email, password) VALUES (:nombre, :email, :password)");
$result = $stmt->execute([
    'nombre' => $nombre,
    'email' => $email,
    'password' => $password_hash
]);

if ($result) {
    // Redirige a login.html
    header("Location: ../../../login.html");
    exit();
} else {
    echo "Hubo un error al registrar el usuario.";
}

?>
