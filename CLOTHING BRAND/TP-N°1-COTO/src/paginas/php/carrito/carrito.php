<?php
session_start();
$carrito = $_SESSION['carrito'] ?? [];
$total = 0;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Carrito</title>
</head>
<body>
    <h1>Carrito de compras</h1>

    <?php if ($carrito): ?>
        <table border="1" cellpadding="10">
            <tr>
                <th>Producto</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Subtotal</th>
            </tr>
            <?php foreach ($carrito as $id => $item): 
                $subtotal = $item['precio'] * $item['cantidad'];
                $total += $subtotal;
            ?>
                <tr>
                    <td><?= $item['nombre'] ?></td>
                    <td>$<?= $item['precio'] ?></td>
                    <td><?= $item['cantidad'] ?></td>
                    <td>$<?= $subtotal ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
        <h2>Total: $<?= $total ?></h2>
    <?php else: ?>
        <p>Tu carrito está vacío.</p>
    <?php endif; ?>

    <a href="index.php">Seguir comprando</a>
</body>
</html>
