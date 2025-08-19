<?php
$marca = "Mi Marca de Ropa";
$productos = [
    "Camiseta Negra" => 19.99,
    "Pantalón Jeans" => 29.95,
    "Chaqueta" => 49.50
];

echo "<h1>Bienvenido a $marca</h1>";
echo "<p>Catálogo con precios:</p>";

echo "<ul>";
foreach ($productos as $nombre => $precio) {
    echo "<li>$nombre — $" . number_format($precio, 2, '.', ',') . "</li>";
}
echo "</ul>";

echo "<p>Fecha actual: " . date("d/m/Y H:i:s") . "</p>";
?>
