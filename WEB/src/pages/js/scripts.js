const chatbotBtn = document.getElementById("chatbot-btn");
const chatbot = document.getElementById("chatbot");
const closeChat = document.getElementById("close-chat");
const sendBtn = document.getElementById("send-btn");
const userInput = document.getElementById("user-input");
const chatBody = document.getElementById("chat-body");

let state = "menu_principal";

const optionsMap = {
  "menu_principal":["1️⃣ Ver catálogo","2️⃣ Información de envíos","3️⃣ Contacto con soporte","4️⃣ Hablar con agente en vivo"],
  "catalogo":["1️⃣ Hombre","2️⃣ Mujer","3️⃣ Accesorios","0️⃣ Volver","4️⃣ Hablar con agente en vivo"],
  "envios":["1️⃣ Sí","2️⃣ No","0️⃣ Volver","4️⃣ Hablar con agente en vivo"],
  "contacto":["0️⃣ Volver","4️⃣ Hablar con agente en vivo"]
};

chatbotBtn.addEventListener("click", () => { 
  chatbot.style.display="flex"; 
  chatbotBtn.style.display="none"; 
  startChat(); 
});
closeChat.addEventListener("click", () => { 
  chatbot.style.display="none"; 
  chatbotBtn.style.display="flex"; 
  chatBody.innerHTML=""; 
  state = "menu_principal";
});
sendBtn.addEventListener("click", sendMessage);
userInput.addEventListener("keypress", e=>{ if(e.key==="Enter") sendMessage(); });

function startChat() {
  botReply("👋 ¡Hola! Soy tu asistente virtual. Elige una opción:", optionsMap["menu_principal"]);
}

function sendMessage() {
  const msg = userInput.value.trim();
  if(!msg) return;
  addMessage(msg,"user");
  userInput.value="";
  showTyping();
  setTimeout(()=>{ hideTyping(); handleReply(msg); }, 800);
}

function addMessage(text,sender){
  const msgDiv = document.createElement("div");
  msgDiv.classList.add("msg",sender);
  const avatar = document.createElement("div"); avatar.classList.add("avatar"); avatar.textContent=sender==="bot"?"🤖":"👤";
  const bubble = document.createElement("div"); bubble.classList.add("bubble"); bubble.textContent=text;
  const time = document.createElement("div"); time.classList.add("time"); time.textContent=new Date().toLocaleTimeString([], {hour:'2-digit',minute:'2-digit'});
  const wrap=document.createElement("div"); wrap.appendChild(bubble); wrap.appendChild(time);
  msgDiv.appendChild(avatar); msgDiv.appendChild(wrap); chatBody.appendChild(msgDiv); chatBody.scrollTop=chatBody.scrollHeight;
}

function botReply(text, options=[]){
  addMessage(text,"bot");
  if(options.length>0){
    options.forEach(opt=>{
      const btn = document.createElement("button"); btn.classList.add("option-btn"); btn.textContent=opt;
      btn.onclick = ()=>{
        addMessage(opt,"user");
        handleReply(opt.split("️⃣")[0]);
        Array.from(document.querySelectorAll(".option-btn")).forEach(b=>b.remove());
      };
      chatBody.appendChild(btn); chatBody.scrollTop=chatBody.scrollHeight;
    });
  }
}

function showTyping(){ 
  const typing=document.createElement("div"); 
  typing.classList.add("typing"); typing.id="typing"; 
  typing.textContent="El bot está escribiendo..."; 
  chatBody.appendChild(typing); chatBody.scrollTop=chatBody.scrollHeight; 
}
function hideTyping(){ 
  const t=document.getElementById("typing"); 
  if(t) t.remove(); 
}

function handleReply(msg){
  msg = msg.trim().toLowerCase();
  function goLiveAgent() { window.location.href = "hablarconagenteenvivo.html"; }

  if(state==="menu_principal"){
    if(msg==="1" || msg.includes("catálogo") || msg.includes("catalogo")){ 
      state="catalogo"; 
      botReply("📦 ¿Qué catálogo quieres ver?", optionsMap["catalogo"]); 
    }
    else if(msg==="2" || msg.includes("envíos") || msg.includes("envios")){ 
      state="envios"; 
      botReply("🚚 Envíos a todo el país. ¿Quieres conocer costos?", optionsMap["envios"]); 
    }
    else if(msg==="3" || msg.includes("contacto")){ 
      state="contacto"; 
      botReply("📩 Contacto: soporte@empresa.com 📞 +54 11 1234-5678", optionsMap["contacto"]); 
    }
    else if(msg==="4" || msg.includes("agente")){ 
      goLiveAgent(); 
    }
    else botReply("⚠️ Por favor escribe una opción válida.", optionsMap["menu_principal"]);
  }
  else if(state==="catalogo"){
    if(msg==="1" || msg.includes("hombre")){ 
      state="fin"; 
      botReply("👕 Hombre: remeras, jeans y zapatillas.\n👉 Conversación finalizada."); 
    }
    else if(msg==="2" || msg.includes("mujer")){ 
      state="fin"; 
      botReply("👗 Mujer: vestidos, blusas y sandalias.\n👉 Conversación finalizada."); 
    }
    else if(msg==="3" || msg.includes("accesorio") || msg.includes("accesorios")){ 
      state="fin"; 
      botReply("🧢 Accesorios: gorras, mochilas y relojes.\n👉 Conversación finalizada."); 
    }
    else if(msg==="0"){ 
      state="menu_principal"; 
      botReply("🔙 Menú principal", optionsMap["menu_principal"]); 
    }
    else if(msg==="4" || msg.includes("agente")){ 
      goLiveAgent(); 
    }
    else botReply("⚠️ Escribe una opción válida.", optionsMap["catalogo"]);
  }
  else if(state==="envios"){
    if(msg==="1" || msg.includes("sí") || msg.includes("si")){ 
      state="fin"; 
      botReply("💰 Costo de envío: $1500 a todo el país.\n👉 Conversación finalizada."); 
    }
    else if(msg==="2" || msg.includes("no")){ 
      state="fin"; 
      botReply("✅ Ya sabes que enviamos a todo el país.\n👉 Conversación finalizada."); 
    }
    else if(msg==="0"){ 
      state="menu_principal"; 
      botReply("🔙 Menú principal", optionsMap["menu_principal"]); 
    }
    else if(msg==="4" || msg.includes("agente")){ 
      goLiveAgent(); 
    }
    else botReply("⚠️ Escribe una opción válida.", optionsMap["envios"]);
  }
  else if(state==="contacto"){
    if(msg==="0"){ 
      state="menu_principal"; 
      botReply("🔙 Menú principal", optionsMap["menu_principal"]); 
    }
    else if(msg==="4" || msg.includes("agente")){ 
      goLiveAgent(); 
    }
    else botReply("📩 Ya tienes nuestro contacto. 0️⃣ Volver", optionsMap["contacto"]);
  }
  else if(state==="fin"){
    botReply("✅ Conversación finalizada. Si quieres volver al menú principal escribe 0️⃣.", optionsMap["menu_principal"]);
    state="menu_principal";
  }
}

// ================== CARRITO ================== //
document.addEventListener("DOMContentLoaded", () => {
    const cartIcon = document.getElementById("cart-icon");
    const cartPopup = document.getElementById("cart-popup");
    const cartItemsList = document.getElementById("cart-items");
    const cartTotal = document.getElementById("cart-total");
    const cartCount = document.getElementById("cart-count");
    const calcularEnvioBtn = document.getElementById("calcular-envio");
    const direccionInput = document.getElementById("direccion");
    const costoEnvioEl = document.getElementById("costo-envio");
    const irAPagarBtn = document.getElementById("ir-a-pagar");

    let cart = [];
    let envioCosto = 0;

    cartIcon.addEventListener("click", () => {
        cartPopup.classList.toggle("hidden");
    });

    const buttons = document.querySelectorAll(".btn-comprar");
    buttons.forEach((btn) => {
        btn.addEventListener("click", () => {
            const product = btn.closest(".product-item");
            const title = product.querySelector("h3").textContent;
            const priceText = product.querySelector(".precio").textContent;
            const imgSrc = product.querySelector("img").getAttribute("src");
            const price = parseFloat(priceText.replace("$", "").replace(".", "").replace(",", "."));

            addToCart(title, price, imgSrc);
        });
    });

    function addToCart(name, price, img) {
        const existing = cart.find(item => item.name === name);
        if (existing) {
            existing.quantity += 1;
        } else {
            cart.push({ name, price, img, quantity: 1 });
        }
        updateCartUI();
    }

    function removeFromCart(index) {
        cart.splice(index, 1);
        updateCartUI();
    }

    function updateCartUI() {
        cartItemsList.innerHTML = "";
        let total = 0;
        let count = 0;

        cart.forEach((item, index) => {
            const li = document.createElement("li");

            const img = document.createElement("img");
            img.src = item.img;

            const infoDiv = document.createElement("div");
            infoDiv.className = "cart-product-info";
            infoDiv.innerHTML = `<strong>${item.name}</strong> x${item.quantity} - $${(item.price * item.quantity).toLocaleString()}`;

            const removeBtn = document.createElement("button");
            removeBtn.className = "remove-btn";
            removeBtn.textContent = "Eliminar";
            removeBtn.onclick = () => removeFromCart(index);

            li.appendChild(img);
            li.appendChild(infoDiv);
            li.appendChild(removeBtn);
            cartItemsList.appendChild(li);

            total += item.price * item.quantity;
            count += item.quantity;
        });

        cartTotal.textContent = `$${(total + envioCosto).toLocaleString()}`;
        cartCount.textContent = count;
    }

    calcularEnvioBtn.addEventListener("click", () => {
        const direccion = direccionInput.value.trim();
        if (direccion.length === 0) {
            alert("Por favor, ingresa tu dirección.");
            return;
        }

        // Simulación de cálculo de envío
        envioCosto = 4990; // fijo o podrías usar lógica con regiones
        costoEnvioEl.textContent = `Costo de envío: $${envioCosto.toLocaleString()}`;
        updateCartUI();
    });

    // ✅ Cambio aquí
 // ✅ Cambio aquí
irAPagarBtn.addEventListener("click", () => {
    if (cart.length === 0) {
        alert("Tu carrito está vacío.");
        return;
    }

    if (direccionInput.value.trim() === "") {
        alert("Por favor, ingresa tu dirección para continuar.");
        return;
    }

    // Consultar al backend si hay sesión
    fetch("src/pages/php/check_session.php")
        .then(res => res.json())
        .then(data => {
            if (data.loggedIn) {
                // Guardar carrito, dirección y costo de envío en localStorage
                localStorage.setItem("carrito", JSON.stringify(cart));
                localStorage.setItem("direccion", direccionInput.value.trim());
                localStorage.setItem("envioCosto", envioCosto); // 👈 agregado
                window.location.href = "pago.html";
            } else {
                window.location.href = "login.html";
            }
        })
        .catch(err => {
            console.error("Error verificando sesión:", err);
            alert("Hubo un problema al verificar la sesión.");
        });



        // Consultar al backend si hay sesión
        fetch("src/pages/php/check_session.php")
            .then(res => res.json())
            .then(data => {
                if (data.loggedIn) {
                    // Guardar carrito y dirección
                    localStorage.setItem("carrito", JSON.stringify(cart));
                    localStorage.setItem("direccion", direccionInput.value.trim());
                    window.location.href = "pago.html";
                } else {
                    window.location.href = "login.html";
                }
            })
            .catch(err => {
                console.error("Error verificando sesión:", err);
                alert("Hubo un problema al verificar la sesión.");
            });
    });
});
