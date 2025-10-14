<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iniciar Sesión - Clothing Brand</title>
  <link rel="stylesheet" href="src/pages/css/login.css">
  <link rel="icon" href="src/icon/iconopagina.png">
</head>
<body>

  <!-- 🔹 NAV -->
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
    </nav>
  </header>

  <!-- 🔹 LOGIN -->
  <div class="login-container">
    <h2>Iniciar sesión</h2>
    <form id="login-form" action="src/pages/php/login.php" method="POST">
      <label for="username">Nombre de usuario o correo</label>
      <input type="text" id="username" name="username" required>

      <label for="password">Contraseña</label>
      <input type="password" id="password" name="password" required>

      <button type="submit">Entrar</button>
    </form>

    <p class="switch-auth">¿No tienes cuenta? <a href="register.php">Regístrate</a></p>
  </div>

  <!-- 🔹 FOOTER -->
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

  <!-- 🔹 SCRIPTS -->
  <script src="src/pages/js/login.js"></script>
  <script src="src/pages/js/scripts.js"></script>

</body>
</html>

