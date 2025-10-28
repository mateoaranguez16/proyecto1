 const chatbotBtn = document.getElementById("chatbot-btn");
const chatbot = document.getElementById("chatbot");
const closeChat = document.getElementById("close-chat");
const sendBtn = document.getElementById("send-btn");
const userInput = document.getElementById("user-input");
const chatBody = document.getElementById("chat-body");

let state = "menu_principal";

// Detecta cuando los elementos entran al viewport
const reveals = document.querySelectorAll('.reveal');

function revealOnScroll() {
  const triggerBottom = window.innerHeight * 0.85; // 85% del alto de la ventana

  reveals.forEach(el => {
    const boxTop = el.getBoundingClientRect().top;

    if (boxTop < triggerBottom) {
      el.classList.add('visible');
    } else {
      el.classList.remove('visible'); // Quita la animación al salir (opcional)
    }
  });
}

window.addEventListener('scroll', revealOnScroll);
window.addEventListener('load', revealOnScroll);

const optionsMap = {
    "menu_principal": ["1️⃣ Ver catálogo", "2️⃣ Información de envíos", "3️⃣ Contacto con soporte", "4️⃣ Hablar con agente en vivo"],
    "catalogo": ["1️⃣ Hombre", "2️⃣ Mujer", "3️⃣ Accesorios", "0️⃣ Volver", "4️⃣ Hablar con agente en vivo"],
    "envios": ["1️⃣ Sí", "2️⃣ No", "0️⃣ Volver", "4️⃣ Hablar con agente en vivo"],
    "contacto": ["0️⃣ Volver", "4️⃣ Hablar con agente en vivo"]
};

chatbotBtn.addEventListener("click", () => {
    chatbot.style.display = "flex";
    chatbotBtn.style.display = "none";
    startChat();
});

closeChat.addEventListener("click", () => {
    chatbot.style.display = "none";
    chatbotBtn.style.display = "flex";
    chatBody.innerHTML = "";
    state = "menu_principal";
});

sendBtn.addEventListener("click", sendMessage);
userInput.addEventListener("keypress", e => { if (e.key === "Enter") sendMessage(); });

function startChat() {
    botReply("👋 ¡Hola! Soy tu asistente virtual. Elige una opción:", optionsMap["menu_principal"]);
}

function sendMessage() {
    const msg = userInput.value.trim();
    if (!msg) return;
    addMessage(msg, "user");
    userInput.value = "";
    showTyping();
    setTimeout(() => { hideTyping(); handleReply(msg); }, 800);
}

function addMessage(text, sender) {
    const msgDiv = document.createElement("div");
    msgDiv.classList.add("msg", sender);

    const avatar = document.createElement("div");
    avatar.classList.add("avatar");
    avatar.textContent = sender === "bot" ? "🤖" : "👤";

    const bubble = document.createElement("div");
    bubble.classList.add("bubble");
    bubble.textContent = text;

    const time = document.createElement("div");
    time.classList.add("time");
    time.textContent = new Date().toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });

    const wrap = document.createElement("div");
    wrap.appendChild(bubble);
    wrap.appendChild(time);

    msgDiv.appendChild(avatar);
    msgDiv.appendChild(wrap);
    chatBody.appendChild(msgDiv);
    chatBody.scrollTop = chatBody.scrollHeight;
}

function botReply(text, options = []) {
    addMessage(text, "bot");

    Array.from(document.querySelectorAll(".option-btn")).forEach(b => b.remove());

    if (options.length > 0) {
        options.forEach(opt => {
            const btn = document.createElement("button");
            btn.classList.add("option-btn");
            btn.textContent = opt;
            btn.onclick = () => {
                const reply = opt.split("️⃣")[0] || opt.charAt(0);
                addMessage(opt, "user");
                handleReply(reply);
            };
            chatBody.appendChild(btn);
        });
        chatBody.scrollTop = chatBody.scrollHeight;
    }
}

function showTyping() {
    const typing = document.createElement("div");
    typing.classList.add("typing");
    typing.id = "typing";
    typing.textContent = "El bot está escribiendo...";
    chatBody.appendChild(typing);
    chatBody.scrollTop = chatBody.scrollHeight;
}

function hideTyping() {
    const t = document.getElementById("typing");
    if (t) t.remove();
}

const goLiveAgent = () => { window.location.href = "hablarconagenteenvivo.html"; };
const backToMenu = () => {
    state = "menu_principal";
    botReply("🔙 Menú principal", optionsMap["menu_principal"]);
};
const invalidOption = (currentState) => {
    botReply("⚠️ Por favor escribe una opción válida.", optionsMap[currentState]);
};
const endConversation = (message) => {
    state = "fin";
    botReply(`${message}\n👉 Conversación finalizada.`);
};

const stateTransitions = {
    "menu_principal": {
        "1": { state: "catalogo", reply: "📦 ¿Qué catálogo quieres ver?", options: optionsMap["catalogo"] },
        "2": { state: "envios", reply: "🚚 Envíos a todo el país. ¿Quieres conocer costos?", options: optionsMap["envios"] },
        "3": { state: "contacto", reply: "📩 Contacto: soporte@empresa.com 📞 +54 11 1234-5678", options: optionsMap["contacto"] },
        "4": { action: goLiveAgent },
        "default": (msg) => {
            if (msg.includes("catálogo") || msg.includes("catalogo")) { state = "catalogo"; botReply("📦 ¿Qué catálogo quieres ver?", optionsMap["catalogo"]); }
            else if (msg.includes("envíos") || msg.includes("envios")) { state = "envios"; botReply("🚚 Envíos a todo el país. ¿Quieres conocer costos?", optionsMap["envios"]); }
            else if (msg.includes("contacto")) { state = "contacto"; botReply("📩 Contacto: soporte@empresa.com 📞 +54 11 1234-5678", optionsMap["contacto"]); }
            else if (msg.includes("agente")) { goLiveAgent(); }
            else { invalidOption("menu_principal"); }
        }
    },
    "catalogo": {
        "1": { action: () => endConversation("👕 Hombre: remeras, jeans y zapatillas.") },
        "2": { action: () => endConversation("👗 Mujer: vestidos, blusas y sandalias.") },
        "3": { action: () => endConversation("🧢 Accesorios: gorras, mochilas y relojes.") },
        "0": { action: backToMenu },
        "4": { action: goLiveAgent },
        "default": (msg) => {
            if (msg.includes("hombre")) stateTransitions.catalogo["1"].action();
            else if (msg.includes("mujer")) stateTransitions.catalogo["2"].action();
            else if (msg.includes("accesorio")) stateTransitions.catalogo["3"].action();
            else if (msg.includes("agente")) stateTransitions.catalogo["4"].action();
            else invalidOption("catalogo");
        }
    },
    "envios": {
        "1": { action: () => endConversation("💰 Costo de envío: $1500 a todo el país.") },
        "2": { action: () => endConversation("✅ Ya sabes que enviamos a todo el país.") },
        "0": { action: backToMenu },
        "4": { action: goLiveAgent },
        "default": (msg) => {
            if (msg.includes("sí") || msg.includes("si")) stateTransitions.envios["1"].action();
            else if (msg.includes("no")) stateTransitions.envios["2"].action();
            else if (msg.includes("agente")) stateTransitions.envios["4"].action();
            else invalidOption("envios");
        }
    },
    "contacto": {
        "0": { action: backToMenu },
        "4": { action: goLiveAgent },
        "default": (msg) => {
            if (msg.includes("agente")) stateTransitions.contacto["4"].action();
            else botReply("📩 Ya tienes nuestro contacto. 0️⃣ Volver", optionsMap["contacto"]);
        }
    },
    "fin": {
        "0": { action: backToMenu },
        "default": () => backToMenu()
    }
};

function handleReply(msg) {
    msg = msg.trim().toLowerCase();
    const currentState = stateTransitions[state];
    const transition = currentState[msg];

    if (transition) {
        if (transition.action) {
            transition.action();
        } else {
            state = transition.state;
            botReply(transition.reply, transition.options);
        }
    } else {
        currentState.default(msg);
    }
}

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

   
    let cart = JSON.parse(localStorage.getItem("cartData")) || []; 
    let envioCosto = 0;
    updateCartUI(); 

    cartIcon.addEventListener("click", () => {
        cartPopup.classList.toggle("hidden");
    });

    document.querySelectorAll(".btn-comprar").forEach((btn) => {
        btn.addEventListener("click", () => {
            const product = btn.closest(".product-item");
            const title = product.querySelector("h3").textContent;
            const priceText = product.querySelector(".precio").textContent;
            const imgSrc = product.querySelector("img").getAttribute("src");

            const price = parseFloat(priceText.replace(/[$.]/g, '').replace(',', '.') || 0);

            addToCart(title, price, imgSrc);
        });
    });

    function saveCart() {
        localStorage.setItem("cartData", JSON.stringify(cart));
    }

    function addToCart(name, price, img) {
        const existing = cart.find(item => item.name === name);
        if (existing) {
            existing.quantity += 1;
        } else {
            cart.push({ name, price, img, quantity: 1 });
        }
        updateCartUI();
        saveCart(); 
    }

    function removeFromCart(index) {
        cart.splice(index, 1);
        updateCartUI();
        saveCart(); 
    }

    function formatPrice(price) {
        return price.toLocaleString('es-AR', { minimumFractionDigits: 0, maximumFractionDigits: 0 });
    }

    function updateCartUI() {
        cartItemsList.innerHTML = "";
        let subtotal = 0;
        let count = 0;

        cart.forEach((item, index) => {
            const itemTotal = item.price * item.quantity;
            subtotal += itemTotal;
            count += item.quantity;

            const li = document.createElement("li");
            li.innerHTML = `
                <img src="${item.img}" alt="${item.name}" />
                <div class="cart-product-info">
                    <strong>${item.name}</strong> x${item.quantity} - $${formatPrice(itemTotal)}
                </div>
                <button class="remove-btn" onclick="document.dispatchEvent(new CustomEvent('removeItem', { detail: ${index} }))">Eliminar</button>
            `;
            cartItemsList.appendChild(li);
        });

        document.addEventListener('removeItem', (e) => removeFromCart(e.detail), { once: true });

        const totalWithEnvio = subtotal + envioCosto;
        cartTotal.textContent = `$${formatPrice(totalWithEnvio)}`;
        cartCount.textContent = count;
    }

    calcularEnvioBtn.addEventListener("click", () => {
        const direccion = direccionInput.value.trim();
        if (direccion.length === 0) {
            alert("Por favor, ingresa tu dirección.");
            return;
        }

        envioCosto = 4990;
        costoEnvioEl.textContent = `Costo de envío: $${formatPrice(envioCosto)}`;
        updateCartUI();
    });

    irAPagarBtn.addEventListener("click", () => {
        if (cart.length === 0) {
            alert("Tu carrito está vacío.");
            return;
        }

        if (direccionInput.value.trim() === "") {
            alert("Por favor, ingresa tu dirección para continuar.");
            return;
        }

        fetch("src/pages/php/check_session.php")
            .then(res => res.json())
            .then(data => {
                if (data.loggedIn) {
                    localStorage.setItem("direccion", direccionInput.value.trim());
                    localStorage.setItem("envioCosto", envioCosto); 
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
    

    const searchForm = document.querySelector('.search-bar form');
    const searchInput = document.querySelector('.search-bar input[type="search"]');
    const productItems = document.querySelectorAll('.gallery .product-item');

    
    searchForm.addEventListener('submit', (e) => {
        e.preventDefault();
        performSearch(searchInput.value.trim());
    });
    
    
    searchInput.addEventListener('input', () => {
        performSearch(searchInput.value.trim());
    });

    function performSearch(query) {
        const lowerCaseQuery = query.toLowerCase();

        productItems.forEach(product => {

            const title = product.querySelector('h3').textContent.toLowerCase();
            const description = product.querySelector('p:nth-child(3)').textContent.toLowerCase();

            
            const matches = title.includes(lowerCaseQuery) || description.includes(lowerCaseQuery);

           
            if (matches || lowerCaseQuery === "") {
                product.style.display = 'block';
            } else {
                product.style.display = 'none';
            }
        });
        
  
        document.querySelectorAll('.filtros button').forEach(btn => btn.classList.remove('active'));
    }
});


document.addEventListener('DOMContentLoaded', () => {
   
    
    const botonesFiltro = document.querySelectorAll('.filtros button');
    const productos = document.querySelectorAll('.gallery .product-item');
    const searchInput = document.querySelector('.search-bar input[type="search"]');

    botonesFiltro.forEach(boton => {
        boton.addEventListener('click', () => {
            const filtro = boton.getAttribute('data-filter');
            
           
            if (searchInput) searchInput.value = '';
            
         
            botonesFiltro.forEach(btn => btn.classList.remove('active'));
            boton.classList.add('active');

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