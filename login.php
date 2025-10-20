<?php
session_start();
require_once 'db.php';

$usernameOrEmail = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

if (!$usernameOrEmail || !$password) {
    die("Por favor completa todos los campos.");
}

try {
    $stmt = $pdo->prepare("SELECT * FROM Usuarios WHERE Nombre = :user OR Email = :user LIMIT 1");
    $stmt->execute(['user' => $usernameOrEmail]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['Contrasena'])) {
        $_SESSION['user_id'] = $user['UsuarioID'];
        $_SESSION['username'] = $user['Nombre'];

        header("Location: views/perfil.php");
        exit();
    } else {
        echo "Usuario o contraseña incorrectos.";
    }
} catch (PDOException $e) {
    die("Error en la base de datos: " . $e->getMessage());
}
?>
