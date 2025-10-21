<?php include("../includes/header.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clothing Brand - Elegancia y Estilo</title>

    <!-- Estilos -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" href="../img/iconopagina.png">
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
<!-- Sección principal / Hero (Carrusel integrado) -->
    <section id="inicio" class="carousel">
        <div class="slides">
            <!-- Slide 1: Tu imagen -->
            <div class="slide active">
                <img src="../img/banner.png" alt="Banner principal">
            </div>

            <!-- Slide 2 -->
            <div class="slide">
                <img src="../img/banner2.png" alt="Banner 2">
                <div class="slide-text">
                    <h1>Minimalismo con Actitud</h1>
                    <p>Diseños simples, líneas limpias, impacto total.</p>
                    <a href="coleccion.html" class="btn">Ver Más</a>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="slide">
                <img src="../img/banner3.png" alt="Banner 3">
                <div class="slide-text">
                    <h1>Nueva Colección 2025</h1>
                    <p>Inspirada en la libertad, creada para vos.</p>
                    <a href="coleccion.php" class="btn">Descubrir</a>
                </div>
            </div>
        </div>

        <!-- Controles -->
        <button class="prev">&#10094;</button>
        <button class="next">&#10095;</button>

        <!-- Indicadores -->
        <div class="indicators">
            <span class="dot active"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>
    </section>
<section id="inicio">
    <div class="hero-content">
        <h1>Elegancia y Estilo para tu Día a Día</h1>
        <p>Descubre nuestra nueva colección inspirada en la libertad y la fuerza.</p>
        <a href="coleccion.php" class="btn">Explorar Colección</a>
    </div>
</section>

<section id="historia">
    <div class="historia-container">
        <div class="historia-text">
            <h2>Nuestra Historia</h2>
            <p>Desde nuestros inicios, nos hemos dedicado a crear ropa que combina estilo, comodidad y autenticidad. Cada colección refleja nuestra pasión por la moda y nuestro compromiso con la calidad.</p>
            <p>Creemos que cada prenda cuenta una historia, y queremos que tú formes parte de ella. Descubre cómo nuestra marca evoluciona contigo.</p>
            <a href="coleccion.php" class="btn">Ver Colección</a>
        </div>
        <div class="historia-image">
            <img src="../img/iconopagina.png" alt="Historia de la marca">
        </div>
    </div>
</section>

<section id="nosotros">
    <h2>Nuestra Filosofía</h2>
    <p>Somos una marca que cree en la autenticidad y la calidad. Cada prenda está diseñada para ofrecer comodidad y estilo, reflejando una personalidad fuerte y libre.</p>
    <img src="../img/iconopagina.png" alt="Logo de la marca" class="about-logo">
</section>

<footer>
    <div class="footer-container">
        <div class="footer-col brand-info">
            <img src="../img/iconopagina.png" alt="Logo de la marca" class="footer-logo">
            <p>Elegancia y estilo en cada prenda. Inspirados en la autenticidad, diseñamos ropa para destacar tu personalidad.</p>
        </div>

        <div class="footer-col">
            <h3>Enlaces rápidos</h3>
            <ul>
                <li><a href="#inicio">Inicio</a></li>
                <li><a href="#coleccion">Colección</a></li>
                <li><a href="#nosotros">Nosotros</a></li>
                <li><a href="#contacto">Contacto</a></li>
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
        let index = 0;
        const slides = document.querySelectorAll('.slide');
        const dots = document.querySelectorAll('.dot');

        function showSlide(n) {
            if (n >= slides.length) index = 0;
            if (n < 0) index = slides.length - 1;

            slides.forEach(slide => slide.classList.remove('active'));
            dots.forEach(dot => dot.classList.remove('active'));

            slides[index].classList.add('active');
            dots[index].classList.add('active');

            document.querySelector('.slides').style.transform = `translateX(-${index * 100}%)`;
        }

        document.querySelector('.next').addEventListener('click', () => {
            index++;
            showSlide(index);
        });

        document.querySelector('.prev').addEventListener('click', () => {
            index--;
            showSlide(index);
        });

        dots.forEach((dot, i) => {
            dot.addEventListener('click', () => {
                index = i;
                showSlide(index);
            });
        });

        // Cambio automático
        setInterval(() => {
            index++;
            showSlide(index);
        }, 6000);
    </script>
<script>
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
