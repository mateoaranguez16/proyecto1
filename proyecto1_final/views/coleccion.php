
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="../js/reveral.js" defer></script>
  <link rel="stylesheet" href="../css/reveral.css">
  <title>Clothing Brand - Elegancia y Estilo</title>
  <link rel="stylesheet" href="../css/coleccion.css">
  <link rel="icon" href="../img/iconopagina.png">

  <!-- Estilos -->
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/menu.css">

  <link rel="icon" href="../img/iconopagina.png">
  <!-- Font Awesome (iconos) -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <!-- Script del menú -->
  <!-- Script del menú -->
  <script src="js/menu.js" defer></script>

  
  <link rel="stylesheet" href="../css/estetica.css">
  <link rel="stylesheet" href="/proyecto1_final/assets/css/responsive.css">
  <script src="/proyecto1_final/assets/js/menu.js" defer></script>

 
</head>

<body>

  <header>

    <div class="user-menu-container reveal">
      <div class="user-general reveal">
        <p class="username reveal">Usuario</p>
        <button class="user-icon-btn reveal" id="userBtn" aria-expanded="false" aria-controls="dropdownMenu">
          <img src="../php/css/img/user.png" alt="Usuario">
        </button>
      </div>
      <ul class="dropdown-menu reveal" id="dropdownMenu" role="menu">

        <li><a class="dropdown-item reveal" href="modification.php"><i class="fas fa-key"></i> Modificar contraseña</a></li>
        <li><a class="dropdown-item reveal" href="#" onclick="showDeleteConfirm()"><i class="fas fa-trash-alt"></i> Eliminar cuenta</a></li>
        <li class="dropdown-divider reveal"></li>
        <li><a class="dropdown-item reveal" href="#" onclick="logout()"><i class="fas fa-sign-out-alt"></i> Cerrar sesión</a></li>
      </ul>
    </div>


    <!-- === NAVEGACIÓN PRINCIPAL === -->
    <nav>
      <div class="logo reveal">
        <a href="index.php"><img src="../img/iconopagina.png" alt="Logo de la marca"></a>
      </div>

      <!-- Menú hamburguesa -->
      <div class="hamburger reveal" id="hamburger">☰</div>

      <!-- Menú de enlaces -->
      <div class="nav-links reveal" id="nav-links">
        <ul>
          <li><a href="index.php">Inicio</a></li>
          <li><a href="coleccion.php">Colección</a></li>
          <li><a href="nosotros.php">Nosotros</a></li>
          <li><a href="contacto.php">Contacto</a></li>
        </ul>
      </div>

      <!-- Barra de búsqueda -->
      <div class="search-bar reveal">
        <form action="#" method="get">
          <input type="search" placeholder="Buscar productos..." name="search">
          <button id="button-search" type="submit"><img src="../img/iconobuscar.png" alt="" width="20"></button>
        </form>
      </div>

      <!-- Íconos de usuario y carrito -->
      <div class="nav-icons reveal">
        <div id="cart-icon">
          <img src="../img/carritodecompras.png" alt="Carrito de compras" width="28" title="Carrito">
          <span id="cart-count">0</span>
        </div>
      </div>
    </nav>
    <nav>



    </nav>

  </header>


  <section class="banner-section">
    <img src="../img/coleccion/mujeranuncio.jpg" alt="Banner Colección" class="banner-coleccion reveal">
  </section>

<section class="galeria-modelos">
  <img src="../img/coleccion/modeloh.webp" alt="Modelo Hombre" class="modelo reveal">
  <img src="../img/coleccion/modelom.webp" alt="Modelo Mujer" class="modelo reveal">
  <img src="../img/coleccion/modeloniño.webp" alt="Modelo Niño" class="modelo reveal">
</section>

<section class="banner-equipos-section">
  <img src="../img/coleccion/equipos.jpg" alt="Equipos deportivos" class="banner-equipos reveal">
</section>

  <section id="coleccion">
    <h2>Nuestra Colección</h2>
    <p>Explora nuestra selección de prendas cuidadosamente diseñadas para combinar estilo y comodidad. Desde looks casuales hasta elegantes, nuestra colección tiene algo para cada ocasión y personalidad.</p>
    <div class="filtros reveal">
      <button data-filter="todos">Todos</button>
      <button data-filter="camisas">Camisas</button>
      <button data-filter="pantalones">Pantalones</button>
      <button data-filter="chaquetas">Chaquetas</button>
      <button data-filter="accesorios">Accesorios</button>
    </div>





    <div class="gallery reveal">
      <div class="product-item camisas reveal">

        <img src="../img/producto1.jpg" alt="Camisa de algodón">
        <h3>Camisa minimalista</h3>
        <p>Camisa de algodón con detalles minimalistas.</p>
        <p class="precio">$24.990</p>
        <div class="estrellas">⭐⭐⭐⭐☆</div>
        <button class="btn-comprar">Agregar al carrito</button>
        <button class="btn-detalles">Más detalles</button>


      </div>
      <div class="product-item pantalones reveal">
        <img src="../img/producto2.jpg" alt="Pantalones de corte recto">
        <h3>Pantalones suaves</h3>
        <p>Pantalones de corte recto y tela suave.</p>
        <p class="precio">$29.990</p>
        <div class="estrellas">⭐⭐⭐⭐⭐</div>
        <button class="btn-comprar">Agregar al carrito</button>
        <button class="btn-detalles">Más detalles</button>

      </div>
      <div class="product-item chaquetas reveal">
        <img src="../img/producto3.jpg" alt="Chaqueta ligera">
        <h3>Chaqueta versátil</h3>
        <p>Chaqueta ligera ideal para cualquier ocasión.</p>
        <p class="precio">$34.990</p>
        <span class="etiqueta nuevo">Nuevo</span>
        <div class="estrellas">⭐⭐⭐⭐☆</div>
        <button class="btn-comprar">Agregar al carrito</button>
        <button class="btn-detalles">Más detalles</button>

      </div>
      <div class="product-item vestidos reveal">
        <img src="../img/producto4.jpg" alt="Vestido elegante">
        <h3>Vestido elegante</h3>
        <p>Vestido elegante para eventos especiales.</p>
        <p class="precio">$39.990</p>
        <span class="etiqueta descuento">-20%</span>
        <div class="estrellas">⭐⭐⭐⭐⭐</div>
        <button class="btn-comprar">Agregar al carrito</button>
        <button class="btn-detalles">Más detalles</button>

      </div>
      <div class="product-item chaquetas reveal">
        <img src="../img/foto1A.jpg" alt="Suéter acogedor">
        <h3>Suéter acogedor</h3>
        <p>Suéter de lana suave ideal para climas fríos.</p>
        <p class="precio">$27.990</p>
        <div class="estrellas">⭐⭐⭐⭐☆</div>
        <button class="btn-comprar">Agregar al carrito</button>
        <button class="btn-detalles">Más detalles</button>

      </div>
      <div class="product-item camisas  reveal">
        <img src="../img/foto2A.jpg" alt="Camiseta básica">
        <h3>Camiseta básica</h3>
        <p>Camiseta de algodón ligera y cómoda para uso diario.</p>
        <p class="precio">$14.990</p>
        <div class="estrellas">⭐⭐⭐⭐☆</div>
        <button class="btn-comprar">Agregar al carrito</button>
        <button class="btn-detalles">Más detalles</button>

      </div>
      <div class="product-item chaquetas  reveal">
        <img src="../img/foto3A.jpg" alt="Blazer elegante">
        <h3>Blazer elegante</h3>
        <p>Blazer moderno perfecto para eventos formales o de oficina.</p>
        <p class="precio">$44.990</p>
        <div class="estrellas">⭐⭐⭐⭐⭐</div>
        <button class="btn-comprar">Agregar al carrito</button>
        <button class="btn-detalles">Más detalles</button>

      </div>
      <div class="product-item chaquetas reveal">
        <img src="../img/foto4A.jpg" alt="Sudadera casual">
        <h3>Sudadera casual</h3>
        <p>Sudadera con capucha y bolsillo frontal, ideal para un look urbano.</p>
        <p class="precio">$22.990</p>
        <div class="estrellas">⭐⭐⭐☆☆</div>
        <button class="btn-comprar">Agregar al carrito</button>
        <button class="btn-detalles">Más detalles</button>

      </div>
      <div class="product-item pantalones reveal">
        <img src="../img/foto5A.jpg" alt="Shorts frescos">
        <h3>Shorts frescos</h3>
        <p>Shorts de algodón para días cálidos y estilo relajado.</p>
        <p class="precio">$19.990</p>
        <div class="estrellas">⭐⭐⭐⭐☆</div>
        <button class="btn-comprar">Agregar al carrito</button>
        <button class="btn-detalles">Más detalles</button>

      </div>
      <div class="product-item chaquetas reveal">
        <img src="../img/foto6A.jpg" alt="Abrigo clásico">
        <h3>Abrigo clásico</h3>
        <p>Abrigo largo con corte moderno para la temporada invernal.</p>
        <p class="precio">$54.990</p>
        <span class="etiqueta descuento">-15%</span>
        <div class="estrellas">⭐⭐⭐⭐⭐</div>
        <button class="btn-comprar">Agregar al carrito</button>
        <button class="btn-detalles">Más detalles</button>

      </div>
      <div class="product-item chaquetas reveal">
        <img src="../img/foto8A.jpg" alt="Chaqueta de Cuero">
        <h3>Chaqueta de Cuero</h3>
        <p>Chaqueta cómoda y negra de hombre con un estilo rockero.</p>
        <p class="precio">$59.990</p>
        <div class="estrellas">⭐⭐⭐⭐⭐</div>
        <button class="btn-comprar">Agregar al carrito</button>
        <button class="btn-detalles">Más detalles</button>

      </div>
      <div class="product-item trajes reveal">
        <img src="../img/foto9A.jpg" alt="Traje Azul">
        <h3>Traje Azul Elegante</h3>
        <p>Traje Azul moderno y elegante, ideal para eventos especiales.</p>
        <p class="precio">$89.990</p>
        <div class="estrellas">⭐⭐⭐⭐⭐</div>
        <button class="btn-comprar">Agregar al carrito</button>
        <button class="btn-detalles">Más detalles</button>

      </div>
      <div class="product-item accesorios reveal">
        <img src="../img/foto10A.jpg" alt="Bufanda moderna">
        <h3>Bufanda moderna</h3>
        <p>Bufanda de lana tejida, perfecta para complementar tu outfit.</p>
        <p class="precio">$12.990</p>
        <div class="estrellas">⭐⭐⭐⭐☆</div>
        <button class="btn-comprar">Agregar al carrito</button>
        <button class="btn-detalles">Más detalles</button>

      </div>
      <div class="product-item camisas reveal">
        <img src="../img/foto11A.jpg" alt="Camisa Negra">
        <h3>Camisa Negra</h3>
        <p>Camisa Negra de hombre y moderna pegada al cuerpo, perfecta para lucir bien y fresco.</p>
        <p class="precio">$26.990</p>
        <div class="estrellas">⭐⭐⭐⭐⭐</div>
        <button class="btn-comprar">Agregar al carrito</button>
        <button class="btn-detalles">Más detalles</button>

      </div>
      <div class="product-item pantalones reveal">
        <img src="../img/foto12A.jpg" alt="Pantalon de Vestir">
        <h3>Pantalon de Vestir</h3>
        <p>Pantalon de Vestir Azul Oscuro y moderno, ideal para eventos importantes.</p>
        <p class="precio">$34.990</p>
        <div class="estrellas">⭐⭐⭐⭐☆</div>
        <button class="btn-comprar">Agregar al carrito</button>
        <button class="btn-detalles">Más detalles</button>

      </div>
    </div>
  </section>

  <footer>
    <div class="footer-container reveal">
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
    <div class="footer-bottom reveal">
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
  <script src="../js/scripts.js"></script>
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

              if (producto.classList.contains(filtro)) {
                producto.style.display = 'block';
              } else {
                producto.style.display = 'none';
              }
            }
          });
        });
      });
    });

    document.addEventListener('DOMContentLoaded', () => {
      const modal = document.getElementById('modal-detalles');
      const modalImg = document.getElementById('modal-img');
      const modalTitle = document.getElementById('modal-title');
      const modalDesc = document.getElementById('modal-description');
      const modalMaterials = document.getElementById('modal-materials');
      const modalSizes = document.getElementById('modal-sizes');
      const modalColors = document.getElementById('modal-colors');
      const modalPrice = document.getElementById('modal-price');
      const modalStars = document.getElementById('modal-stars');
      const closeModal = document.getElementById('close-modal');
      const navbar = document.querySelector('nav'); // tu navbar

      const botonesDetalles = document.querySelectorAll('.btn-detalles');

      botonesDetalles.forEach(boton => {
        boton.addEventListener('click', () => {
          const product = boton.closest('.product-item');

          // Datos del producto
          const imgSrc = product.querySelector('img').src;
          const title = product.querySelector('h3').textContent;
          const description = product.querySelector('p').textContent;
          const price = product.querySelector('.precio').textContent;
          const stars = product.querySelector('.estrellas').innerHTML;

          // Info extra personalizada (puedes editar según tus productos)
          const materials = "Material: Algodón Premium";
          const sizes = "Tallas: S, M, L, XL";
          const colors = "Colores: Negro, Blanco, Azul";

          // Setear datos en el modal
          modalImg.src = imgSrc;
          modalTitle.textContent = title;
          modalDesc.textContent = description;
          modalMaterials.textContent = materials;
          modalSizes.textContent = sizes;
          modalColors.textContent = colors;
          modalPrice.textContent = price;
          modalStars.innerHTML = stars;

          // Mostrar modal y esconder navbar
          modal.classList.remove('hidden');
          navbar.style.display = 'none';
        });
      });

      // Cerrar modal y mostrar navbar
      function cerrarModal() {
        modal.classList.add('hidden');
        navbar.style.display = 'flex';
      }

      closeModal.addEventListener('click', cerrarModal);

      window.addEventListener('click', (e) => {
        if (e.target === modal) {
          cerrarModal();
        }
      });
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
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const userBtn = document.getElementById('userBtn');
      const dropdownMenu = document.getElementById('dropdownMenu');

      userBtn.addEventListener('click', (e) => {
        e.stopPropagation();
        dropdownMenu.classList.toggle('show');
      });

      document.addEventListener('click', (e) => {
        if (!dropdownMenu.contains(e.target) && !userBtn.contains(e.target)) {
          dropdownMenu.classList.remove('show');
        }
      });
    });
  </script>



  <div id="modal-detalles" class="modal hidden">
    <div class="modal-content">
      <span id="close-modal" class="close">&times;</span>
      <img id="modal-img" src="" alt="Imagen del producto">
      <h3 id="modal-title"></h3>
      <p id="modal-description"></p>
      <p id="modal-materials"></p>
      <p id="modal-sizes"></p>
      <p id="modal-colors"></p>
      <p id="modal-price"></p>
      <div id="modal-stars"></div>
      <button id="modal-add-cart" class="btn-comprar">Agregar al carrito</button>
    </div>
  </div>

  <script src="../js/scripts.js"></script>

</body>

</html>
