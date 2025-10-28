<?php
require_once '../model/conexion.php';
$conexion = conexion();


// ✅ Eliminar usuario si se envió el ID por GET
if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $stmt = $conexion->prepare("DELETE FROM usuario WHERE ID = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();
    header("Location: eliminar_usuarios.php?mensaje=eliminado");
    exit;
}

// ✅ Obtener lista de usuarios
$resultado = $conexion->query("SELECT ID, usuario FROM usuario ORDER BY ID ASC");
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Eliminar Usuarios</title>
<style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #f5f6fa;
        color: #2f3640;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
    .container {
        width: 90%;
        max-width: 700px;
        background: white;
        border-radius: 15px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        padding: 25px;
    }
    h2 {
        text-align: center;
        margin-bottom: 20px;
        color: #273c75;
    }
    table {
        width: 100%;
        border-collapse: collapse;
    }
    th, td {
        padding: 12px;
        text-align: left;
        border-bottom: 1px solid #eee;
    }
    tr:hover {
        background-color: #f1f2f6;
    }
    .delete-btn {
        color: #e84118;
        font-weight: bold;
        text-decoration: none;
        font-size: 18px;
        transition: 0.3s;
    }
    .delete-btn:hover {
        color: #c23616;
        transform: scale(1.2);
    }
    .mensaje {
        text-align: center;
        color: green;
        margin-bottom: 15px;
        font-weight: 600;
    }
</style>
</head>
<body>
<div class="container">
    <h2>Usuarios Registrados</h2>
    <?php if(isset($_GET['mensaje']) && $_GET['mensaje'] == 'eliminado'): ?>
        <div class="mensaje">✅ Usuario eliminado correctamente</div>
    <?php endif; ?>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Usuario</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
        <?php while($fila = $resultado->fetch_assoc()): ?>
            <tr>
                <td><?= htmlspecialchars($fila['ID']) ?></td>
                <td><?= htmlspecialchars($fila['usuario']) ?></td>
                <td>
                    <a href="?id=<?= $fila['ID'] ?>" class="delete-btn" onclick="return confirm('¿Seguro que deseas eliminar este usuario?')">❌</a>
                </td>
            </tr>
        <?php endwhile; ?>
        </tbody>
    </table>
</div>
</body>
</html>
