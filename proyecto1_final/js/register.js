function register(event) {
  event.preventDefault();

  const user = document.getElementById('user').value.trim();
  const password = document.getElementById('password').value.trim();

  if (!user || !password) {
    alert("Por favor, completa todos los campos");
    return;
  }

  const info = { user, password };

  fetch("../server/high.php", {
    method: "POST",
    headers: { "Content-Type": "application/json" },
    body: JSON.stringify(info)
  })
    .then(res => {
      if (!res.ok) throw new Error("Error en la conexión con el servidor");
      return res.json();
    })
    .then(data => {
      console.log(data);

      if (data.status === "ok") {
        alert("✅ Usuario registrado correctamente");
        window.location.href = "login.php";
      } else {
        alert("⚠️ Error: " + (data.message || "No se pudo registrar el usuario"));
      }
    })
    .catch(err => {
      console.error("Error en fetch:", err);
      alert("❌ Error al conectar con el servidor");
    });
}
