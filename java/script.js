// Lista de productos (ejemplo)
const productos = [
  { id: 1, nombre: "Remera", precio: 5000 },
  { id: 2, nombre: "Pantalón", precio: 12000 },
  { id: 3, nombre: "Zapatillas", precio: 25000 }
];

let carrito = [];
let total = 0;

// Mostrar productos en la página
function mostrarProductos() {
  const contenedor = document.getElementById("productos");
  contenedor.innerHTML = "";
  productos.forEach(p => {
    contenedor.innerHTML += `
      <div>
        <h3>${p.nombre}</h3>
        <p>Precio: $${p.precio}</p>
        <button onclick="agregarAlCarrito(${p.id})">Agregar al carrito</button>
      </div>
    `;
  });
}

// Agregar producto al carrito
function agregarAlCarrito(id) {
  const producto = productos.find(p => p.id === id);
  carrito.push(producto);
  total += producto.precio;
  actualizarCarrito();
}

// Mostrar carrito
function actualizarCarrito() {
  const lista = document.getElementById("carrito");
  lista.innerHTML = "";
  carrito.forEach((item, index) => {
    lista.innerHTML += `
      <li>${item.nombre} - $${item.precio} 
      <button onclick="eliminarDelCarrito(${index})">❌</button></li>
    `;
  });
  document.getElementById("total").innerText = total;
}

// Eliminar producto del carrito
function eliminarDelCarrito(index) {
  total -= carrito[index].precio;
  carrito.splice(index, 1);
  actualizarCarrito();
}

// Aplicar descuento
function aplicarDescuento(porcentaje) {
  let descuento = total * (porcentaje / 100);
  total -= descuento;
  document.getElementById("total").innerText = total;
  alert(`Se aplicó un descuento del ${porcentaje}%`);
}

// Inicializar
mostrarProductos();