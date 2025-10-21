<?php
require_once '../db.php'; // 👈 sube un nivel para incluir db.php
session_start();
?>

<?php include("../includes/header.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iniciar Sesión - Clothing Brand</title>
  <script src="../js/scripts.js"></script>
  <link rel="stylesheet" href="../css/login.css">
  <link rel="icon" href="../img/iconopagina.png">
<link rel="stylesheet" href="/proyecto1_final/assets/css/responsive.css">
<script src="/proyecto1_final/assets/js/menu.js" defer></script>
</head>
<body>

 
  <header>
     <nav>
  <div class="logo">
    <a href="index.php"><img src="../img/iconopagina.png" alt="Logo de la marca"></a>
  </div>

  <!-- Menú hamburguesa para móviles -->
  <div class="hamburger" id="hamburger">☰</div>

  <!-- Menú de navegación -->
  <div class="nav-links" id="nav-links">
    <ul>
      <li><a href="index.php">Inicio</a></li>
      <li><a href="coleccion.php">Colección</a></li>
      <li><a href="nosotros.php">Nosotros</a></li>
      <li><a href="contacto.php">Contacto</a></li>
    </ul>
  </div>

  <!-- Barra de búsqueda -->
  <div class="search-bar">
    <form action="#" method="get">
      <input type="search" placeholder="Buscar productos..." name="search">
      <button id="button-search" type="submit"><img src="../img/iconobuscar.png" alt="" width="20"></button>
    </form>
  </div>

  <!-- Iconos de usuario y carrito -->
  <div class="nav-icons">
    <div id="user-profile">
      <img src="../img/perfil.png" alt="Perfil" width="28" title="Perfil de usuario">
    </div>
    <div id="user-menu" style="display:none; position:absolute; background:#fff; border:1px solid #ccc; padding:10px; box-shadow:0 2px 5px rgba(0,0,0,0.2); z-index:100;">
      <ul style="list-style:none; margin:0; padding:0;">
        <li><a href="perfil.php" style="text-decoration:none; color:#333; display:block; padding:5px 10px;">Perfil</a></li>
        <li><a href="src/pages/php/logout.php" style="text-decoration:none; color:#333; display:block; padding:5px 10px;">Cerrar sesión</a></li>
      </ul>
    </div>
    <div id="cart-icon">
      <img src="../img/carritodecompras.png" alt="Carrito de compras" width="28" title="Carrito">
      <span id="cart-count">0</span>
    </div>
  </div>
</nav>
  </header>

  <main class="login-container">
    <h2>Iniciar sesión</h2>
    <form id="login-form" action="login.php" method="POST">
      <label for="username">Nombre de usuario o correo</label>
      <input type="text" id="username" name="username" required>

      <label for="password">Contraseña</label>
      <input type="password" id="password" name="password" required>

      <button type="submit">Entrar</button>
    </form>

    <p class="switch-auth">¿No tienes cuenta? <a href="register.php">Regístrate</a></p>
  </main>

  <footer>
    <div class="footer-container">
      <div class="footer-col brand-info">
        <img src="../img/iconopagina.png" alt="Logo de la marca" class="footer-logo">
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
          <a href="#"><img src="../img/instagram.png" alt="Instagram"></a>
          <a href="#"><img src="../img/facebook.png" alt="Facebook"></a>
          <a href="#"><img src="../img/twitter.png" alt="Twitter"></a>
        </div>
        <p class="footer-mail">📧 info@marcaropa.com</p>
      </div>
    </div>

    <div class="footer-bottom">
      <p>© 2025 Marca Ropa. Todos los derechos reservados.</p>
    </div>
  </footer>

  <script src="../js/login.js"></script>
  <script src="../js/scripts.js"></script>
<script>
  const hamburger = document.getElementById('hamburger');
  const navLinks = document.getElementById('nav-links');

  hamburger.addEventListener('click', () => {
    navLinks.classList.toggle('show');
  });

  // Opcional: cerrar menú al hacer clic en un enlace
  const links = navLinks.querySelectorAll('a');
  links.forEach(link => {
    link.addEventListener('click', () => {
      navLinks.classList.remove('show');
    });
  });
</script>

</body>
</html>
<?php include("../includes/footer.php"); ?>