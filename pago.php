<?php include("../includes/header.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Página de Pago - Marca Ropa</title>
    <link rel="stylesheet" href="../css/pago.css" />
    <style>
      
      .payment-form { display: none; margin-top: 1rem; }
      .payment-form.active { display: block; }
      .payment-methods button.active { background-color: #007bff; color: white; }
      .payment-methods button { margin-right: 10px; cursor: pointer; padding: 8px 16px; }
      .producto-resumen {
        display: flex;
        align-items: center;
        margin-bottom: 10px;
      }
    </style>
</head>
<body>
    <header>
        <nav>
           <div class="logo">
       <a href="index.php"><img src="../img/iconopagina.png" alt="Logo de la marca"></a>
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
                <button id="button-search" type="submit"><img src="../img/iconobuscar.png" alt="" width="20"></button>
            </form>
        </div>
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
        </nav>
    </header>
<main style="padding: 2rem;">
  <h1>Pago</h1>

  <div class="payment-section">
  
    <h2>Resumen de tu compra</h2>
    <ul id="resumen-carrito"></ul>
    <p>Dirección: <span id="mostrar-direccion"></span></p>
    <p>Total a pagar: <span id="total-pagar"></span></p>

   
    <div class="payment-methods">
      <button id="btn-tarjeta" class="active">Tarjeta de Débito</button>
      <button id="btn-transferencia">Transferencia Bancaria</button>
      <button id="btn-efectivo">Efectivo</button>
    </div>

     
    <form id="form-tarjeta" class="payment-form active" novalidate>
      <label for="titular">Nombre del titular</label>
      <input type="text" id="titular" name="titular" placeholder="Nombre completo" required>

      <label for="card-element">Número de tarjeta</label>
      <div id="card-element" style="padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></div>
      <div id="card-errors" role="alert" style="color: red; margin-top: 5px;"></div>

      <button type="submit" class="submit-btn" style="margin-top: 15px;">Pagar</button>
    </form>

     
    <form id="form-transferencia" class="payment-form" novalidate>
      <label>Cuenta bancaria para transferir:</label>
      <p style="font-weight: 700; margin-bottom: 8px;">tiendagood.mp</p>

      <label for="alias-cuenta">Tu alias o nombre de cuenta</label>
      <input type="text" id="alias-cuenta" name="alias-cuenta" placeholder="Ingresa tu alias o nombre de cuenta" required>

      <label for="comprobante">Subir comprobante</label>
      <input type="file" id="comprobante" name="comprobante" accept="image/*,.pdf" required>

      <div style="margin:10px 0;">
        <p>Enviar comprobante por email:</p>
        <button type="button" id="btn-gmail" class="email-btn">Gmail</button>
        <button type="button" id="btn-outlook" class="email-btn">Outlook</button>
        <button type="button" id="btn-yahoo" class="email-btn">Yahoo Mail</button>
        
        
      </div>
    </form>

   
    <div id="form-efectivo" class="payment-form">
      <label>Dirección para pago en efectivo</label>
      <p>Por favor, dirígete a nuestro local para abonar tu compra en efectivo.</p>
      <p><strong>Dirección:</strong> Calle Ejemplo 123, Ciudad, País</p>
      <button id="btn-pagar-efectivo" class="submit-btn">Pagar efectivo</button>
    </div>
  </div>
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

<script src="https://js.stripe.com/v3/"></script>
<script>
document.addEventListener("DOMContentLoaded", () => {
  
  const resumenCarrito = document.getElementById("resumen-carrito");
  const mostrarDireccion = document.getElementById("mostrar-direccion");
  const totalPagar = document.getElementById("total-pagar");

  const carritoGuardado = JSON.parse(localStorage.getItem("carrito")) || [];
  const direccion = localStorage.getItem("direccion") || "";
  const envioCosto = parseFloat(localStorage.getItem("envioCosto")) || 0; // 👈 agregado

  mostrarDireccion.textContent = direccion;

  let total = 0;

  carritoGuardado.forEach((item) => {
    const li = document.createElement("li");
    li.className = "producto-resumen";

    const img = document.createElement("img");
    img.src = item.img;
    img.alt = item.name;
    img.style.width = "60px";
    img.style.height = "60px";
    img.style.objectFit = "cover";
    img.style.marginRight = "10px";
    img.style.verticalAlign = "middle";

    const texto = document.createElement("span");
    texto.textContent = `${item.name} x${item.quantity} - $${(item.price * item.quantity).toLocaleString()}`;

    li.appendChild(img);
    li.appendChild(texto);

    resumenCarrito.appendChild(li);
    total += item.price * item.quantity;
  });

  
  let totalFinal = total + envioCosto;
  totalPagar.innerHTML = `
    $${totalFinal.toLocaleString()} <br>
    <small style="color:#555;">(Incluye envío: $${envioCosto.toLocaleString()})</small>
  `;

  
  const btnTarjeta = document.getElementById('btn-tarjeta');
  const btnTransferencia = document.getElementById('btn-transferencia');
  const btnEfectivo = document.getElementById('btn-efectivo');

  const formTarjeta = document.getElementById('form-tarjeta');
  const formTransferencia = document.getElementById('form-transferencia');
  const formEfectivo = document.getElementById('form-efectivo');

  function activarMetodo(metodo) {
    btnTarjeta.classList.remove('active');
    btnTransferencia.classList.remove('active');
    btnEfectivo.classList.remove('active');
    formTarjeta.classList.remove('active');
    formTransferencia.classList.remove('active');
    formEfectivo.classList.remove('active');

    if(metodo === 'tarjeta') {
      btnTarjeta.classList.add('active');
      formTarjeta.classList.add('active');
    } else if(metodo === 'transferencia') {
      btnTransferencia.classList.add('active');
      formTransferencia.classList.add('active');
    } else if(metodo === 'efectivo') {
      btnEfectivo.classList.add('active');
      formEfectivo.classList.add('active');
    }
  }

  btnTarjeta.addEventListener('click', () => activarMetodo('tarjeta'));
  btnTransferencia.addEventListener('click', () => activarMetodo('transferencia'));
  btnEfectivo.addEventListener('click', () => activarMetodo('efectivo'));

   
  const stripe = Stripe('pk_test_51IEnfaCHkJiU0TeUQkOEmQfYTNlB1AkIbD9XnNfIYPyWq7xlGL2hVaWwMqcPpF22guqh5msRdxF32USdNKSms9Oo00SqhZR2wa');
  const elements = stripe.elements();
  const cardElement = elements.create('card');
  cardElement.mount('#card-element');

  const cardErrors = document.getElementById('card-errors');

  formTarjeta.addEventListener('submit', async (e) => {
    e.preventDefault();

    cardErrors.textContent = '';
    if (!document.getElementById('titular').value.trim()) {
      cardErrors.textContent = 'Por favor, ingresa el nombre del titular.';
      return;
    }

    const { paymentMethod, error } = await stripe.createPaymentMethod({
      type: 'card',
      card: cardElement,
      billing_details: {
        name: document.getElementById('titular').value,
      },
    });

    if (error) {
      cardErrors.textContent = error.message;
    } else {
      alert('Pago con tarjeta realizado correctamente');
    }
  });

   
});
</script>

</body>
</html>

<?php include("../includes/footer.php"); ?>