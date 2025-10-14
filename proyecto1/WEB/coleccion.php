<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clothing Brand - Elegancia y Estilo</title>
    <link rel="stylesheet" href="src/pages/css/coleccion.css">
    <link rel="icon" href="src/icon/iconopagina.png">
</head>
<body>

<header>
    <nav>
        <div class="logo">
           <a href="index.php"><img src="src/icon/iconopagina.png" alt="Logo de la marca"></a>
        </div>
        <ul>
           <li><a href="index.php">Inicio</a></li>
            <li><a href="coleccion.php">Colección</a></li>
            <li><a href="nosotros.php">Nosotros</a></li>
            <li><a href="contacto.php">Contacto</a></li>
        </ul>
        <div class="search-bar">
            <form action="#" method="get">
                <input type="search" placeholder="Buscar productos..." name="search">
                <button id="button-search" type="submit"><img src="src/icon/iconobuscar.png" alt="" width="20"></button>
            </form>
        </div>
        <div class="nav-icons">
            <div id="user-profile">
                <img src="src/icon/perfil.png" alt="Perfil" width="28" title="Perfil de usuario">
            </div>
            <div id="user-menu" style="display:none; position:absolute; background:#fff; border:1px solid #ccc; padding:10px; box-shadow:0 2px 5px rgba(0,0,0,0.2); z-index:100;">
                <ul style="list-style:none; margin:0; padding:0;">
                    <li><a href="perfil.php" style="text-decoration:none; color:#333; display:block; padding:5px 10px;">Perfil</a></li>
                    <li><a href="src/pages/php/logout.php" style="text-decoration:none; color:#333; display:block; padding:5px 10px;">Cerrar sesión</a></li>
                </ul>
            </div>
            <div id="cart-icon">
                <img src="src/icon/carritodecompras.png" alt="Carrito de compras" width="28" title="Carrito">
                <span id="cart-count">0</span>
            </div>
        </div>
    </nav>
</header>

<section id="coleccion">
    <h2>Nuestra Colección</h2>
    <p>Explora nuestra selección de prendas cuidadosamente diseñadas para combinar estilo y comodidad. Desde looks casuales hasta elegantes, nuestra colección tiene algo para cada ocasión y personalidad.</p>
    
    <div class="filtros">
        <button data-filter="todos">Todos</button>
        <button data-filter="camisas">Camisas</button>
        <button data-filter="pantalones">Pantalones</button>
        <button data-filter="chaquetas">Chaquetas</button>
        <button data-filter="accesorios">Accesorios</button>
    </div>

    <div class="gallery">
        <!-- Aquí irían todos los product-item como ya están en tu HTML -->
    </div>
</section>

<footer>
    <div class="footer-container">
        <div class="footer-col brand-info">
            <img src="src/icon/iconopagina.png" alt="Logo de la marca" class="footer-logo">
            <p>Elegancia y estilo en cada prenda. Inspirados en la autenticidad, diseñamos ropa para destacar tu personalidad.</p>
        </div>
        <div class="footer-col">
            <h3>Enlaces rápidos</h3>
            <ul>
                <li><a href="index.php#inicio">Inicio</a></li>
                <li><a href="index.php#coleccion">Colección</a></li>
                <li><a href="index.php#nosotros">Nosotros</a></li>
                <li><a href="contacto.php">Contacto</a></li>
            </ul>
        </div>
        <div class="footer-col">
            <h3>Atención al cliente</h3>
            <ul>
                <li><a href="#">Preguntas frecuentes</a></li>
                <li><a href="#">Envíos y devoluciones</a></li>
                <li><a href="#">Términos y condiciones</a></li>
                <li><a href="#">Política de privacidad</a></li>
            </ul>
        </div>
        <div class="footer-col">
            <h3>Conéctate con nosotros</h3>
            <div class="social-icons">
                <a href="#"><img src="src/icon/instagram.png" alt="Instagram"></a>
                <a href="#"><img src="src/icon/facebook.png" alt="Facebook"></a>
                <a href="#"><img src="src/icon/twitter.png" alt="Twitter"></a>
            </div>
            <p class="footer-mail">📧 info@marcaropa.com</p>
        </div>
    </div>
    <div class="footer-bottom">
        <p>© 2025 Marca Ropa. Todos los derechos reservados.</p>
    </div>
</footer>

<div id="chatbot-btn">💬</div>
<div id="chatbot">
  <div class="chat-header">
    <span>Asistente Virtual</span>
    <button id="close-chat">✖</button>
  </div>
  <div class="chat-body" id="chat-body"></div>
  <div class="chat-footer">
    <input type="text" id="user-input" placeholder="Escribe aquí..." />
    <button id="send-btn">➤</button>
  </div>
</div>

<div id="cart-popup" class="hidden">
    <h3>🛒 Carrito de Compras</h3>
    <ul id="cart-items"></ul>
    <div class="envio-section">
        <label for="direccion">Dirección de envío:</label>
        <input type="text" id="direccion" placeholder="Ingresa tu dirección">
        <button id="calcular-envio">Calcular envío</button>
        <p id="costo-envio">Costo de envío: $0</p>
    </div>
    <p>Total: <span id="cart-total">$0</span></p>
    <button id="ir-a-pagar">Ir a pagar</button>
</div>

<script src="src/pages/js/scripts.js"></script>
<script>
  // ===================== MENÚ USUARIO =====================
  const userProfile = document.getElementById('user-profile');
  const userMenu = document.getElementById('user-menu');

  function positionMenu() {
    const rect = userProfile.getBoundingClientRect();
    userMenu.style.top = rect.bottom + window.scrollY + 'px';
    userMenu.style.left = rect.left + window.scrollX + 'px';
  }

  userProfile.addEventListener('click', () => {
    if (userMenu.style.display === 'none' || userMenu.style.display === '') {
      positionMenu();
      userMenu.style.display = 'block';
    } else {
      userMenu.style.display = 'none';
    }
  });

  document.addEventListener('click', (e) => {
    if (!userProfile.contains(e.target) && !userMenu.contains(e.target)) {
      userMenu.style.display = 'none';
    }
  });

  // ===================== FILTRO DE PRODUCTOS =====================
  document.addEventListener('DOMContentLoaded', () => {
    const botonesFiltro = document.querySelectorAll('.filtros button');
    const productos = document.querySelectorAll('.gallery .product-item');

    botonesFiltro.forEach(boton => {
      boton.addEventListener('click', () => {
        const filtro = boton.getAttribute('data-filter');

        productos.forEach(producto => {
          if (filtro === 'todos') {
            producto.style.display = 'block';
          } else {
            producto.style.display = producto.classList.contains(filtro) ? 'block' : 'none';
          }
        });
      });
    });
  });
</script>
</body>
</html>