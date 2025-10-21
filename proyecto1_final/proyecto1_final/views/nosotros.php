<?php include("../includes/header.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nosotros - Clothing Brand</title>
  <script src="../js/scripts.js"></script>
  <link rel="stylesheet" href="../css/nosotros.css">
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

  
  <main id="nosotros">

     
    <section class="historia nosotros-container">
      <div class="nosotros-texto">
        <h2>Nuestra Historia</h2>
        <p>Desde nuestros inicios, en <strong>Marca Ropa</strong> hemos buscado combinar estilo, comodidad y autenticidad en cada prenda. Cada colección nace de la pasión por la moda y el compromiso con la calidad.</p>
        <p>Comenzamos con un pequeño taller y hoy contamos con un equipo de diseñadores, artesanos y creativos que trabajan para ofrecer experiencias únicas a nuestros clientes.</p>
      </div>
      <div class="nosotros-imagen">
        <img src="../img/historia.png" alt="Historia de Marca Ropa">
      </div>
    </section>

   
    <section class="mision-vision nosotros-container">
      <div class="mision">
        <h3>Misión</h3>
        <p>Crear ropa de alta calidad que permita a nuestros clientes expresar su personalidad y sentirse cómodos en cualquier ocasión, siempre con respeto por la sostenibilidad.</p>
      </div>
      <div class="vision">
        <h3>Visión</h3>
        <p>Ser reconocidos como una marca innovadora y confiable, que inspire confianza y estilo, y que deje una huella positiva en la industria de la moda.</p>
      </div>
    </section>

 
    <section class="valores nosotros-container">
  
      <div class="valores-grid">
        <div class="valor">
          <h4>Calidad</h4>
          <p>Nos aseguramos de que cada prenda cumpla con los más altos estándares de calidad.</p>
        </div>
        <div class="valor">
          <h4>Innovación</h4>
          <p>Buscamos siempre nuevas tendencias y diseños para ofrecer productos únicos.</p>
        </div>
        <div class="valor">
          <h4>Compromiso</h4>
          <p>Nos comprometemos con nuestros clientes, equipo y con la sostenibilidad.</p>
        </div>
        <div class="valor">
          <h4>Autenticidad</h4>
          <p>Cada prenda refleja la identidad y personalidad de quien la usa.</p>
        </div>
      </div>
    </section>

    
    <section class="equipo nosotros-container">
      <h2></h2>
      <div class="equipo-grid">
        <div class="miembro">
          <img src="../img/persona1.png" alt="Alejandro Sarmiento">
          <h4>Alejandro Sarmiento</h4>
          <p>Diseñador Principal</p>
        </div>
        <div class="miembro">
          <img src="../img/persona2.png" alt="Uriel Torterola">
          <h4>Uriel Torterola</h4>
          <p>Coordinadora de Producción</p>
        </div>
        <div class="miembro">
          <img src="../img/persona3.png" alt="Adrian Vega">
          <h4>Adrian Vega</h4>
          <p>Marketing & Estrategia</p>
        </div>
        <div class="miembro">
          <img src="../img/persona4.png" alt="Pedro Wang">
          <h4>Pedro Wang</h4>
          <p>Atención al Cliente</p>
        </div>
        <div class="miembro">
          <img src="../img/persona4.png" alt="Mateo Aranguez">
          <h4>Mateo Aranguez</h4>
          <p>Atención al Cliente</p>
        </div>
        <div class="miembro">
          <img src="../img/persona4.png" alt="Alex Baruc">
          <h4>Alex Baruc</h4>
          <p>Atención al Cliente</p>
        </div>
        <div class="miembro">
          <img src="../img/persona4.png" alt="Martin Chamorro">
          <h4>Martin Chamorroc</h4>
          <p>Atención al Cliente</p>
        </div>
      </div>
    </section>

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

  <script src="../js/scripts.js"></script>
  <script>
     
    const userProfile = document.getElementById('user-profile');
    const userMenu = document.getElementById('user-menu');

    userProfile.addEventListener('click', (e) => {
      e.stopPropagation();  
      userMenu.style.display = userMenu.style.display === 'block' ? 'none' : 'block';
    });

    document.addEventListener('click', () => {
      userMenu.style.display = 'none';
    });
  </script>
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